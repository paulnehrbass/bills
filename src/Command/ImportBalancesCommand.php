<?php
declare(strict_types=1);

namespace App\Command;

use App\Parser\Balances\BalancesParser;
use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\ORM\Exception\PersistenceFailedException;
use PDOException;

class ImportBalancesCommand extends Command
{
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser->addOption('source', [
            'short' => 's',
            'required' => true,
            'help' => 'Pfad zu einer CSV-Datei oder zu einem Ordner mit CSV-Dateien',
        ]);
        return $parser;
    }

    public function execute(Arguments $args, ConsoleIo $io)
    {
        $source = $args->getOption('source');
        $parser = new BalancesParser();
        $table = $this->fetchTable('BankingBalances');

        $files = [];

        if (is_file($source)) {
            $files[] = $source;
        } elseif (is_dir($source)) {
            $files = glob(rtrim($source, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . '*.csv');
            if (empty($files)) {
                $io->out("Keine CSV-Dateien im Ordner gefunden: $source");
                return;
            }
        } else {
            $io->err("Pfad existiert nicht: $source");
            return;
        }

        foreach ($files as $file) {
            $io->out("Parsing CSV: $file");
            try {
                $result = $parser->parse($file);
            } catch (\RuntimeException $e) {
                $io->err("Fehler beim Parsen: " . $e->getMessage());
                continue;
            }

            $importedCount = 0;
            $skippedCount = 0;
            $failedRows = [];

            foreach ($result->getRecords() as $rowNumber => $row) {
                if (empty($row['iban'])) continue;

                // Hash inkl. Tagesdatum vor dem Speichern
                $createdDate = (new \DateTime())->format('Y-m-d');
                $row['row_hash'] = md5(
                    $row['iban'] . '|' .
                    $row['art'] . '|' .
                    $row['bezeichnung'] . '|' .
                    $row['typ'] . '|' .
                    number_format((float)$row['saldo'], 2, '.', '') . '|' .
                    $createdDate
                );

                $entity = $table->newEntity($row);

                try {
                    if ($table->exists(['row_hash' => $row['row_hash']])) {
                        $skippedCount++;
                        $failedRows[] = [
                            'rowNumber' => $rowNumber,
                            'row_hash' => $row['row_hash'],
                            'reason' => 'Duplikat für diesen Tag'
                        ];
                        continue;
                    }

                    $table->saveOrFail($entity);
                    $importedCount++;

                } catch (PersistenceFailedException | PDOException $e) {
                    $skippedCount++;
                    $failedRows[] = [
                        'rowNumber' => $rowNumber,
                        'row_hash' => $row['row_hash'] ?? null,
                        'reason' => 'DB-Fehler beim Speichern'
                    ];
                }
            }

            $io->out("CSV abgeschlossen: $importedCount Zeilen gespeichert, $skippedCount übersprungen");

            if (!empty($failedRows)) {
                $io->out("Details zu übersprungenen Zeilen:");
                foreach ($failedRows as $fail) {
                    $msg = "  Zeile {$fail['rowNumber']}";
                    if (isset($fail['row_hash'])) $msg .= ": row_hash={$fail['row_hash']}";
                    $msg .= " | Grund: {$fail['reason']}";
                    $io->out($msg);
                }
            }
        }
    }
}