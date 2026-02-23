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
        $parser->addOption('file', [
            'short' => 'f',
            'required' => true,
            'help' => 'Pfad zur CSV-Datei',
        ]);
        return $parser;
    }

    public function execute(Arguments $args, ConsoleIo $io)
    {
        $file = $args->getOption('file');
        $io->out("Parsing CSV: $file");

        $parser = new BalancesParser();
        $result = $parser->parse($file);

        $table = $this->fetchTable('BankingBalances');

        $importedCount = 0;
        $skippedCount = 0;
        $failedRows = [];

        foreach ($result->getRecords() as $rowNumber => $row) {
            if (empty($row['iban'])) {
                $io->out("Zeile {$rowNumber}: leer oder ohne IBAN → übersprungen");
                continue;
            }

            // Hash inkl. Tagesdatum VOR dem Speichern berechnen
            $createdDate = (new \DateTime())->format('Y-m-d'); // nur Datum
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
                    $io->out("Zeile {$rowNumber}: übersprungen (row_hash={$row['row_hash']})");
                    continue;
                }

                $table->saveOrFail($entity);
                $importedCount++;
                $io->out("Zeile {$rowNumber}: gespeichert (row_hash={$row['row_hash']})");

            } catch (PersistenceFailedException | PDOException $e) {
                $skippedCount++;
                $failedRows[] = [
                    'rowNumber' => $rowNumber,
                    'row_hash' => $row['row_hash'] ?? null,
                    'reason' => 'DB-Fehler beim Speichern'
                ];
                $io->out("Zeile {$rowNumber}: übersprungen (row_hash={$row['row_hash']})");
            }
        }

        $io->out("Import abgeschlossen: $importedCount Zeilen gespeichert, $skippedCount übersprungen");

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