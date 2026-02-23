<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BankingBalances Model
 *
 * @method \App\Model\Entity\BankingBalance newEmptyEntity()
 * @method \App\Model\Entity\BankingBalance newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BankingBalance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BankingBalance get($primaryKey, $options = [])
 * @method \App\Model\Entity\BankingBalance findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BankingBalance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BankingBalance[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BankingBalance|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BankingBalance saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BankingBalance[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BankingBalance[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BankingBalance[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BankingBalance[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BankingBalancesTable extends Table
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

        $this->setTable('banking_balances');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('iban')
            ->maxLength('iban', 50)
            ->requirePresence('iban', 'create')
            ->notEmptyString('iban');

        $validator
            ->scalar('art')
            ->maxLength('art', 50)
            ->allowEmptyString('art');

        $validator
            ->scalar('bezeichnung')
            ->allowEmptyString('bezeichnung');

        $validator
            ->scalar('typ')
            ->maxLength('typ', 100)
            ->allowEmptyString('typ');

        $validator
            ->decimal('saldo')
            ->requirePresence('saldo', 'create')
            ->notEmptyString('saldo');

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

        return $rules;
    }
}
