<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property \App\Model\Table\QuotsTable&\Cake\ORM\Association\HasMany $Quots
 *
 * @method \App\Model\Entity\Client newEmptyEntity()
 * @method \App\Model\Entity\Client newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClientsTable extends Table
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

        $this->setTable('clients');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Quots', [
            'foreignKey' => 'client_id',
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
            ->integer('code')
            ->allowEmptyString('code');

        $validator
            ->scalar('name')
            ->maxLength('name', 40)
            ->allowEmptyString('name');

        $validator
            ->scalar('fantasy')
            ->maxLength('fantasy', 40)
            ->allowEmptyString('fantasy');

        $validator
            ->scalar('address')
            ->maxLength('address', 30)
            ->allowEmptyString('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 25)
            ->allowEmptyString('city');

        $validator
            ->integer('zip_code')
            ->allowEmptyString('zip_code');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 30)
            ->allowEmptyString('phone');

        $validator
            ->scalar('fax')
            ->maxLength('fax', 25)
            ->allowEmptyString('fax');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->integer('cuit')
            ->allowEmptyString('cuit');

        $validator
            ->integer('d1')
            ->allowEmptyString('d1');

        $validator
            ->integer('d2')
            ->allowEmptyString('d2');

        $validator
            ->integer('d3')
            ->allowEmptyString('d3');

        $validator
            ->scalar('notes')
            ->maxLength('notes', 500)
            ->allowEmptyString('notes');

        return $validator;
    }
}
