<?php
declare(strict_types=1);

namespace App\Parser;

class ParseResult
{
    /**
     * @var array<int, array<string, mixed>>
     */
    private array $records = [];

    /**
     * @param array<int, array<string, mixed>> $records
     */
    public function __construct(array $records = [])
    {
        $this->records = $records;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function getRecords(): array
    {
        return $this->records;
    }

    public function isEmpty(): bool
    {
        return empty($this->records);
    }

    public function count(): int
    {
        return count($this->records);
    }
}