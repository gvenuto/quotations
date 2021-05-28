<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CabinDoors Model
 *
 * @property \App\Model\Table\QuotControllersTable&\Cake\ORM\Association\HasMany $QuotControllers
 *
 * @method \App\Model\Entity\CabinDoor newEmptyEntity()
 * @method \App\Model\Entity\CabinDoor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CabinDoor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CabinDoor get($primaryKey, $options = [])
 * @method \App\Model\Entity\CabinDoor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CabinDoor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CabinDoor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CabinDoor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CabinDoor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CabinDoor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CabinDoor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CabinDoor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CabinDoor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CabinDoorsTable extends Table
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

        $this->setTable('cabin_doors');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('QuotControllers', [
            'foreignKey' => 'cabin_door_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 30)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
