<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class BankingBalance extends Entity
{
    // alles mass assignable außer id
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    // Property explizit deklarieren
    protected ?string $row_hash = null;
}