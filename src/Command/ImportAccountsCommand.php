<?php
declare(strict_types=1);

namespace App\Command;

use App\Parser\Accounts\AccountsParser;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\Command;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class ImportAccountsCommand extends Command
{
    protected function buildOptionParser(\Cake\Console\ConsoleOptionParser $parser): \Cake\Console\ConsoleOptionParser
    {
        return $parser
            ->addOption('file', [
                'short' => 'f',
                'help' => 'Pfad zur CSV-Datei',
                'required' => true,
            ]);
    }

    public function execute(Arguments $args, ConsoleIo $io)
    {
        $file = $args->getOption('file');
        $parser = new AccountsParser();

        try {
            $result = $parser->parse($file);
            $records = $result->getRecords();

            $io->out("Gefundene Datensätze: " . count($records));

            if ($result->isEmpty()) {
                $io->out("Die CSV-Datei enthält keine Daten.");
                return;
            }

            // Tabelle laden
            $table = TableRegistry::getTableLocator()->get('BankingAccounts');

            // MultiInsert vorbereiten
            $entities = $table->newEntities($records);

            // Transaktion
            $connection = ConnectionManager::get('default');
            $connection->begin();

            try {
                $table->saveManyOrFail($entities);
                $connection->commit();
                $io->out("Alle Datensätze erfolgreich in die DB geschrieben.");
            } catch (\Throwable $e) {
                $connection->rollback();
                $io->err("Fehler beim Insert: " . $e->getMessage());
            }

        } catch (\Throwable $e) {
            $io->err("Fehler beim Parsen: " . $e->getMessage());
        }
    }
}