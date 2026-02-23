<?php
declare(strict_types=1);

namespace App\Parser\Balances;

use App\Parser\AbstractParser;
use RuntimeException;

class BalancesParser extends AbstractParser
{
    private array $headerMap = [
        ''                  => 'art',
        'Konto'             => 'iban',
        'Kontobezeichnung'  => 'bezeichnung',
        'Typ'               => 'typ',
        'Saldo in CHF'      => 'saldo',
    ];

    private int $headerLine = 4;

    protected function load(string $input): string
    {
        if (!is_file($input)) {
            throw new RuntimeException("Datei nicht gefunden: {$input}");
        }

        $data = file_get_contents($input);
        if ($data === false) {
            throw new RuntimeException("Datei konnte nicht gelesen werden: {$input}");
        }

        if (substr($data, 0, 3) === "\xEF\xBB\xBF") {
            $data = substr($data, 3);
        }

        return $data;
    }

    protected function validate(string $rawData): void
    {
        $lines = $this->getLines($rawData);

        if (count($lines) < $this->headerLine) {
            throw new RuntimeException('CSV enthält zu wenige Zeilen.');
        }

        $header = str_getcsv($lines[$this->headerLine - 1], ';');

        foreach (array_keys($this->headerMap) as $requiredColumn) {
            if (!in_array($requiredColumn, $header, true)) {
                throw new RuntimeException("Fehlende Spalte in CSV: {$requiredColumn}");
            }
        }
    }

    protected function parseData(string $rawData): array
    {
        $lines = $this->getLines($rawData);

        $headerRaw = str_getcsv($lines[$this->headerLine - 1], ';');
        $header = array_map(
            fn(string $col) => $this->headerMap[trim($col)] ?? strtolower(trim($col)),
            $headerRaw
        );

        $records = [];
        $currentArt = null;

        for ($i = $this->headerLine; $i < count($lines); $i++) {
            $row = str_getcsv($lines[$i], ';');
            $row = array_pad($row, count($header), '');
            $record = array_combine($header, $row);
            if ($record === false) continue;

            if (empty(array_filter($record, fn($v) => trim((string)$v) !== ''))) continue;

            if (!empty($record['art'])) {
                $currentArt = trim($record['art']);
            } else {
                $record['art'] = $currentArt;
            }

            if (
                empty($record['iban']) ||
                stripos((string)$record['art'], 'Total') === 0 ||
                stripos((string)$record['art'], 'Disclaimer') === 0
            ) {
                continue;
            }

            $record['iban'] = preg_replace('/[^A-Z0-9]/i', '', (string)$record['iban']);
            $record['saldo'] = $this->parseAmount((string)$record['saldo']);

            if ($record['saldo'] < 0.0) continue;

            $records[] = $record;
        }

        return $records;
    }

    private function getLines(string $rawData): array
    {
        return array_values(
            array_filter(array_map('trim', preg_split('/\R/', $rawData)))
        );
    }

    private function parseAmount(string $value): float
    {
        $value = preg_replace('/^="?(.+?)"?$/', '$1', $value);
        $value = trim($value);

        if (substr_count($value, ',') === 1) {
            $value = str_replace(["'", '’'], '', $value);
            $value = str_replace(',', '.', $value);
        } else {
            $value = str_replace(["'", '’'], '', $value);
        }

        return (float)$value;
    }

    public function parseRow(array $rowData): array
    {
        $parsed = [
            'iban' => $rowData['iban'],
            'art' => $rowData['art'],
            'bezeichnung' => $rowData['bezeichnung'],
            'typ' => $rowData['typ'],
            'saldo' => $rowData['saldo'],
        ];

        // row_hash direkt hier berechnen, passt zur DB-Spalte
        $parsed['row_hash'] = md5(
            $parsed['iban'] . '|' .
            $parsed['art'] . '|' .
            $parsed['bezeichnung'] . '|' .
            $parsed['typ'] . '|' .
            $parsed['saldo']
        );

        return $parsed;
    }
}