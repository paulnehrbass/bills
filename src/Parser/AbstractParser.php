<?php
declare(strict_types=1);

namespace App\Parser;

abstract class AbstractParser implements ParserInterface
{
    /**
     * Template-Methode für alle Parser.
     * Der Ablauf ist fix und darf nicht überschrieben werden.
     */
    final public function parse(string $input): ParseResult
    {
        $rawData = $this->load($input);
        $this->validate($rawData);
        $records = $this->parseData($rawData);

        return new ParseResult($records);
    }

    /**
     * Lädt die Rohdaten (z. B. aus Datei, String, Stream).
     */
    abstract protected function load(string $input): string;

    /**
     * Parst die Rohdaten in strukturierte Records.
     *
     * @return array<int, array<string, mixed>>
     */
    abstract protected function parseData(string $rawData): array;

    /**
     * Optionale Validierung der Rohdaten.
     * Kann von Subklassen überschrieben werden.
     */
    protected function validate(string $rawData): void
    {
        // default: keine Validierung
    }
}