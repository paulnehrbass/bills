<?php
declare(strict_types=1);

namespace App\Command;

use App\Parser\Balances\BalancesParser;
use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;

class ImportBalancesCommand extends Command
{
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        $parser->addOption('file', [
            'short' => 'f',
            'help' => 'Pfad zur CSV-Datei',
            'required' => true,
        ]);
        return $parser;
    }

    public function execute(Arguments $args, ConsoleIo $io)
    {
        $file = $args->getOption('file');
        $io->out("Parsing CSV: $file");

        $parser = new BalancesParser();
        try {
            $parsedResult = $parser->parse($file);
        } catch (\RuntimeException $e) {
            $io->err("Fehler beim Parsen: " . $e->getMessage());
            return;
        }

        $balancesTable = $this->fetchTable('BankingBalances');
        $importedCount = 0;

        foreach ($parsedResult->getRecords() as $row) {
            $iban = trim($row['iban'] ?? '');
            if (empty($iban)) {
                $io->out("Zeile ohne IBAN übersprungen.");
                continue;
            }

            // Hash korrekt zur Spalte row_hash
            $row['row_hash'] = md5(
                $row['iban'] . '|' .
                $row['art'] . '|' .
                $row['bezeichnung'] . '|' .
                $row['typ'] . '|' .
                $row['saldo']
            );

            $entity = $balancesTable->newEntity($row);

            if ($balancesTable->save($entity)) {
                $importedCount++;
            } else {
                $io->err("Fehler beim Speichern der Zeile: " . json_encode($row));
            }
        }

        $io->out("Alle gültigen Datensätze erfolgreich importiert: $importedCount");
    }
}