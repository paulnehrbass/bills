<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BillsTicket Entity
 *
 * @property int $id
 * @property string $headline
 * @property int $bills_states_id
 * @property int $bills_branches_id
 * @property string $description
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\BillsState $bills_state
 * @property \App\Model\Entity\BillsBranch $bills_branch
 */
class BillsTicket extends Entity
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
    protected array $_accessible = [
        'headline' => true,
        'bills_states_id' => true,
        'bills_branches_id' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'bills_state' => true,
        'bills_branch' => true,
    ];
}
