<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BillsTickets Model
 *
 * @property \App\Model\Table\BillsStatesTable&\Cake\ORM\Association\BelongsTo $BillsStates
 * @property \App\Model\Table\BillsBranchesTable&\Cake\ORM\Association\BelongsTo $BillsBranches
 *
 * @method \App\Model\Entity\BillsTicket newEmptyEntity()
 * @method \App\Model\Entity\BillsTicket newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BillsTicket[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BillsTicket get($primaryKey, $options = [])
 * @method \App\Model\Entity\BillsTicket findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BillsTicket patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BillsTicket[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BillsTicket|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BillsTicket saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BillsTicket[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BillsTicket[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BillsTicket[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BillsTicket[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BillsTicketsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('bills_tickets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('BillsStates', [
            'foreignKey' => 'bills_states_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('BillsBranches', [
            'foreignKey' => 'bills_branches_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('headline')
            ->maxLength('headline', 255)
            ->requirePresence('headline', 'create')
            ->notEmptyString('headline');

        $validator
            ->integer('bills_states_id')
            ->notEmptyString('bills_states_id');

        $validator
            ->integer('bills_branches_id')
            ->notEmptyString('bills_branches_id');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['id']), ['errorField' => 'id']);
        $rules->add($rules->existsIn('bills_states_id', 'BillsStates'), ['errorField' => 'bills_states_id']);
        $rules->add($rules->existsIn('bills_branches_id', 'BillsBranches'), ['errorField' => 'bills_branches_id']);

        return $rules;
    }
}
