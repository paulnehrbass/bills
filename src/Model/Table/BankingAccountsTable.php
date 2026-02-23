<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BankingAccounts Model
 *
 * @method \App\Model\Entity\BankingAccount newEmptyEntity()
 * @method \App\Model\Entity\BankingAccount newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BankingAccount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BankingAccount get($primaryKey, $options = [])
 * @method \App\Model\Entity\BankingAccount findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BankingAccount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BankingAccount[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BankingAccount|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BankingAccount saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BankingAccount[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BankingAccount[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BankingAccount[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BankingAccount[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BankingAccountsTable extends Table
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

        $this->setTable('banking_accounts');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('iban')
            ->maxLength('iban', 50)
            ->requirePresence('iban', 'create')
            ->notEmptyString('iban');

        $validator
            ->scalar('bezeichnung')
            ->allowEmptyString('bezeichnung');

        $validator
            ->scalar('typ')
            ->maxLength('typ', 20)
            ->allowEmptyString('typ');

        $validator
            ->scalar('bic')
            ->maxLength('bic', 30)
            ->allowEmptyString('bic');

        $validator
            ->scalar('kontobetreuung')
            ->maxLength('kontobetreuung', 255)
            ->allowEmptyString('kontobetreuung');

        $validator
            ->scalar('telefon')
            ->maxLength('telefon', 50)
            ->allowEmptyString('telefon');

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
