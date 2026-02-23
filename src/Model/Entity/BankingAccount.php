<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BankingAccount Entity
 *
 * @property int $id
 * @property string $name
 * @property string $iban
 * @property string|null $bezeichnung
 * @property string|null $typ
 * @property string|null $bic
 * @property string|null $kontobetreuung
 * @property string|null $telefon
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class BankingAccount extends Entity
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
        'name' => true,
        'iban' => true,
        'bezeichnung' => true,
        'typ' => true,
        'bic' => true,
        'kontobetreuung' => true,
        'telefon' => true,
        'created' => true,
        'modified' => true,
    ];
}
