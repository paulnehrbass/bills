<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BillsBranches Model
 *
 * @method \App\Model\Entity\BillsBranch newEmptyEntity()
 * @method \App\Model\Entity\BillsBranch newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\BillsBranch> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BillsBranch get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\BillsBranch findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\BillsBranch patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\BillsBranch> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BillsBranch|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\BillsBranch saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\BillsBranch>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BillsBranch>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BillsBranch>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BillsBranch> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BillsBranch>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BillsBranch>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\BillsBranch>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\BillsBranch> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BillsBranchesTable extends Table
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

        $this->setTable('bills_branches');
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
            ->scalar('version')
            ->maxLength('version', 10)
            ->requirePresence('version', 'create')
            ->notEmptyString('version');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

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
