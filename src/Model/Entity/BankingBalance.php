<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BankingBalance Entity
 *
 * @property int $id
 * @property string $iban
 * @property string|null $art
 * @property string|null $bezeichnung
 * @property string|null $typ
 * @property string $saldo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class BankingBalance extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'iban' => true,
        'art' => true,
        'bezeichnung' => true,
        'typ' => true,
        'saldo' => true,
        'created' => true,
        'modified' => true,
    ];
}
