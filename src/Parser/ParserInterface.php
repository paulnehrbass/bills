<?php
declare(strict_types=1);

namespace App\Parser;

interface ParserInterface
{
    /**
     * Parst die Eingabe und liefert das Ergebnis als ParseResult.
     *
     * @param string $input Pfad zur Datei oder Rohdaten
     * @return ParseResult
     */
    public function parse(string $input): ParseResult;
}