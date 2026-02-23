<?php
declare(strict_types=1);

namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use ZipArchive;

class ArchiveDocumentsCommand extends Command
{
    public function buildOptionParser(ConsoleOptionParser $parser): ConsoleOptionParser
    {
        return $parser
            ->setDescription('Archiviert alle Dateien eines Ordners in ein ZIP und verschiebt sie nach done/')
            ->addOption('source', [
                'short' => 's',
                'help' => 'Quellordner mit zu archivierenden Dateien',
                'default' => ROOT . DS . 'webroot' . DS . 'documents',
            ]);
    }

    public function execute(Arguments $args, ConsoleIo $io): int
    {
        $sourceDir  = rtrim($args->getOption('source'), DS);
        $doneDir    = $sourceDir . DS . 'done';
        $archiveDir = $sourceDir . DS . 'archive';

        if (!is_dir($sourceDir)) {
            $io->err("Quellordner existiert nicht: {$sourceDir}");
            return 0;
        }

        if (!is_dir($doneDir)) {
            mkdir($doneDir, 0775, true);
        }

        if (!is_dir($archiveDir)) {
            mkdir($archiveDir, 0775, true);
        }

        $files = array_values(array_filter(scandir($sourceDir), function ($file) use ($sourceDir) {
            if ($file[0] === '.') {
                return false; // versteckte Dateien ignorieren
            }
            return is_file($sourceDir . DS . $file);
        }));

        if (empty($files)) {
            $io->out('Keine Dateien zum Archivieren gefunden.');
            return 0;
        }

        $timestamp = date('Ymd-His');
        $zipName   = "Archive-Documents-{$timestamp}.zip";
        $zipPath   = $archiveDir . DS . $zipName;

        $zip = new ZipArchive();
        if ($zip->open($zipPath, ZipArchive::CREATE) !== true) {
            $io->err('ZIP-Datei konnte nicht erstellt werden.');
            return 0;
        }

        foreach ($files as $file) {
            $zip->addFile($sourceDir . DS . $file, $file);
        }

        $zip->close();

        foreach ($files as $file) {
            rename(
                $sourceDir . DS . $file,
                $doneDir . DS . $file
            );
        }

        $io->out(sprintf(
            'Archiv erstellt: %s (%d Dateien)',
            $zipName,
            count($files)
        ));
        $io->out('Dateien wurden nach done/ verschoben.');

        return 0;
    }
}