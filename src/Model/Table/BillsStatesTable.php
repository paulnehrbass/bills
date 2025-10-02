<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BillsStates Model
 *
 * @method \App\Model\Entity\BillsState newEmptyEntity()
 * @method \App\Model\Entity\BillsState newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\BillsState> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BillsState get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\BillsState findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\BillsState patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\BillsState> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BillsState|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\BillsState saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\BillsState>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BillsState>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BillsState>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BillsState> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BillsState>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BillsState>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BillsState>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BillsState> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BillsStatesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('bills_states');
        $this->setDisplayField('state');
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
            ->scalar('state')
            ->maxLength('state', 50)
            ->requirePresence('state', 'create')
            ->notEmptyString('state');

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

        return $rules;
    }
}
