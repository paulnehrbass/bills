<?php
declare(strict_types=1);

namespace App\Parser\Accounts;

use App\Parser\AbstractParser;
use App\Parser\ParseResult;

class AccountsParser extends AbstractParser
{
    /**
     * Mapping CSV-Header → DB-Feldnamen
     */
    private array $headerMap = [
        'Name' => 'name',
        'Iban' => 'iban',
        'Bezeichnung' => 'bezeichnung',
        'Typ' => 'typ',
        'Bic' => 'bic',
        'Kontobetreuung' => 'kontobetreuung',
        'Telefon' => 'telefon',
    ];

    /**
     * Datei einlesen
     */
    protected function load(string $input): string
    {
        if (!is_file($input)) {
            throw new \RuntimeException("File not found: {$input}");
        }

        $data = file_get_contents($input);

        // BOM entfernen, falls vorhanden
        if (substr($data, 0, 3) === "\xEF\xBB\xBF") {
            $data = substr($data, 3);
        }

        return $data;
    }

    /**
     * Rohdaten in strukturierte Datensätze umwandeln
     *
     * @return array<int, array<string, mixed>>
     */
    protected function parseData(string $rawData): array
    {
        $lines = array_filter(array_map('trim', explode("\n", $rawData)));

        if (count($lines) < 2) {
            return [];
        }

        // Originalheader aus CSV
        $header = str_getcsv(array_shift($lines), ';');
        $header = array_map('trim', $header);

        $records = [];

        foreach ($lines as $line) {
            $row = str_getcsv($line, ';');
            $row = array_map('trim', $row);

            // Mapping anwenden + lowercase fallback
            $mappedHeader = array_map(
                fn($col) => $this->headerMap[$col] ?? strtolower($col),
                $header
            );

            $record = array_combine($mappedHeader, $row);

            // IBAN bereinigen: alle Leerzeichen, Tabs, Zeilenumbrüche entfernen
            if (isset($record['iban'])) {
                $record['iban'] = str_replace([' ', "\t", "\n", "\r"], '', $record['iban']);
            }

            // Optional: Typkonvertierung direkt hier
            if (isset($record['account_number'])) {
                $record['account_number'] = (int)$record['account_number'];
            }
            if (isset($record['balance'])) {
                $record['balance'] = (float)str_replace(',', '.', $record['balance']);
            }

            $records[] = $record;
        }

        return $records;
    }

    /**
     * Validierung der CSV
     */
    protected function validate(string $rawData): void
    {
        $lines = array_filter(array_map('trim', explode("\n", $rawData)));

        if (empty($lines)) {
            throw new \RuntimeException("CSV-Datei ist leer.");
        }

        $header = str_getcsv($lines[0], ';');
        $header = array_map('trim', $header);

        $requiredColumns = array_keys($this->headerMap);
        $missing = array_diff($requiredColumns, $header);

        if (!empty($missing)) {
            throw new \RuntimeException(
                "Fehlende Spalten in CSV: " . implode(', ', $missing)
            );
        }
    }
}