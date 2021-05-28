<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuotControllers Model
 *
 * @property \App\Model\Table\QuotsTable&\Cake\ORM\Association\BelongsTo $Quots
 * @property \App\Model\Table\CpusTable&\Cake\ORM\Association\BelongsTo $Cpus
 * @property \App\Model\Table\ManeuversTable&\Cake\ORM\Association\BelongsTo $Maneuvers
 * @property \App\Model\Table\ControlTypesTable&\Cake\ORM\Association\BelongsTo $ControlTypes
 * @property \App\Model\Table\SubtypesTable&\Cake\ORM\Association\BelongsTo $Subtypes
 * @property \App\Model\Table\TensionsTable&\Cake\ORM\Association\BelongsTo $Tensions
 * @property \App\Model\Table\BatteriesTable&\Cake\ORM\Association\BelongsTo $Batteries
 * @property \App\Model\Table\PumpsTable&\Cake\ORM\Association\BelongsTo $Pumps
 * @property \App\Model\Table\ThermalProtectorsTable&\Cake\ORM\Association\BelongsTo $ThermalProtectors
 * @property \App\Model\Table\SensorsTable&\Cake\ORM\Association\BelongsTo $Sensors
 * @property \App\Model\Table\CabinDoorsTable&\Cake\ORM\Association\BelongsTo $CabinDoors
 * @property \App\Model\Table\HallDoorsTable&\Cake\ORM\Association\BelongsTo $HallDoors
 *
 * @method \App\Model\Entity\QuotController newEmptyEntity()
 * @method \App\Model\Entity\QuotController newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\QuotController[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuotController get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuotController findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\QuotController patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuotController[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuotController|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuotController saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuotController[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuotController[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuotController[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QuotController[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QuotControllersTable extends Table
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

        $this->setTable('quot_controllers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Quots', [
            'foreignKey' => 'quot_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Cpus', [
            'foreignKey' => 'cpu_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Maneuvers', [
            'foreignKey' => 'maneuver_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ControlTypes', [
            'foreignKey' => 'control_type_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Subtypes', [
            'foreignKey' => 'subtype_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tensions', [
            'foreignKey' => 'tension_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Batteries', [
            'foreignKey' => 'battery_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Pumps', [
            'foreignKey' => 'pump_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('ThermalProtectors', [
            'foreignKey' => 'thermal_protector_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Sensors', [
            'foreignKey' => 'sensor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CabinDoors', [
            'foreignKey' => 'cabin_door_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('HallDoors', [
            'foreignKey' => 'hall_door_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('stops')
            ->requirePresence('stops', 'create')
            ->notEmptyString('stops');

        $validator
            ->scalar('nomenclature')
            ->maxLength('nomenclature', 100)
            ->requirePresence('nomenclature', 'create')
            ->notEmptyString('nomenclature');

        $validator
            ->decimal('power_current')
            ->requirePresence('power_current', 'create')
            ->notEmptyString('power_current');

        $validator
            ->integer('controllers_qty')
            ->requirePresence('controllers_qty', 'create')
            ->notEmptyString('controllers_qty');

        $validator
            ->integer('cars_on_battery')
            ->requirePresence('cars_on_battery', 'create')
            ->notEmptyString('cars_on_battery');

        $validator
            ->scalar('pump_other')
            ->maxLength('pump_other', 50)
            ->requirePresence('pump_other', 'create')
            ->notEmptyString('pump_other');

        $validator
            ->boolean('tandem')
            ->requirePresence('tandem', 'create')
            ->notEmptyString('tandem');

        $validator
            ->boolean('encoder')
            ->requirePresence('encoder', 'create')
            ->notEmptyString('encoder');

        $validator
            ->decimal('contactor')
            ->requirePresence('contactor', 'create')
            ->notEmptyString('contactor');

        $validator
            ->integer('speed')
            ->requirePresence('speed', 'create')
            ->notEmptyString('speed');

        $validator
            ->boolean('positioning_by_encoder')
            ->requirePresence('positioning_by_encoder', 'create')
            ->notEmptyString('positioning_by_encoder');

        $validator
            ->boolean('emergency_power_system_connection')
            ->requirePresence('emergency_power_system_connection', 'create')
            ->notEmptyString('emergency_power_system_connection');

        $validator
            ->boolean('brake_resistor')
            ->requirePresence('brake_resistor', 'create')
            ->notEmptyString('brake_resistor');

        $validator
            ->boolean('phase_failure_protection')
            ->requirePresence('phase_failure_protection', 'create')
            ->notEmptyString('phase_failure_protection');

        $validator
            ->boolean('automatic_brake_opening')
            ->requirePresence('automatic_brake_opening', 'create')
            ->notEmptyString('automatic_brake_opening');

        $validator
            ->boolean('manual_brake_opening')
            ->requirePresence('manual_brake_opening', 'create')
            ->notEmptyString('manual_brake_opening');

        $validator
            ->boolean('full_rescue')
            ->requirePresence('full_rescue', 'create')
            ->notEmptyString('full_rescue');

        $validator
            ->boolean('ups')
            ->requirePresence('ups', 'create')
            ->notEmptyString('ups');

        $validator
            ->boolean('eco_midi_supra')
            ->requirePresence('eco_midi_supra', 'create')
            ->notEmptyString('eco_midi_supra');

        $validator
            ->boolean('rescue_vf_door')
            ->requirePresence('rescue_vf_door', 'create')
            ->notEmptyString('rescue_vf_door');

        $validator
            ->boolean('rescue_220v_door')
            ->requirePresence('rescue_220v_door', 'create')
            ->notEmptyString('rescue_220v_door');

        $validator
            ->boolean('automatic_return_with_gel_battery')
            ->requirePresence('automatic_return_with_gel_battery', 'create')
            ->notEmptyString('automatic_return_with_gel_battery');

        $validator
            ->boolean('open_door_leveling')
            ->requirePresence('open_door_leveling', 'create')
            ->notEmptyString('open_door_leveling');

        $validator
            ->boolean('power_feeded_vf_door')
            ->requirePresence('power_feeded_vf_door', 'create')
            ->notEmptyString('power_feeded_vf_door');

        $validator
            ->boolean('air_blower')
            ->requirePresence('air_blower', 'create')
            ->notEmptyString('air_blower');

        $validator
            ->boolean('courtesy_light')
            ->requirePresence('courtesy_light', 'create')
            ->notEmptyString('courtesy_light');

        $validator
            ->integer('power_supply_12v')
            ->requirePresence('power_supply_12v', 'create')
            ->notEmptyString('power_supply_12v');

        $validator
            ->integer('power_supply_24v')
            ->requirePresence('power_supply_24v', 'create')
            ->notEmptyString('power_supply_24v');

        $validator
            ->integer('power_supply_t114')
            ->requirePresence('power_supply_t114', 'create')
            ->notEmptyString('power_supply_t114');

        $validator
            ->boolean('call_concentrator')
            ->requirePresence('call_concentrator', 'create')
            ->notEmptyString('call_concentrator');

        $validator
            ->boolean('interfase_a7120')
            ->requirePresence('interfase_a7120', 'create')
            ->notEmptyString('interfase_a7120');

        $validator
            ->boolean('interfase_a7120_a7121')
            ->requirePresence('interfase_a7120_a7121', 'create')
            ->notEmptyString('interfase_a7120_a7121');

        $validator
            ->boolean('additional_iep')
            ->requirePresence('additional_iep', 'create')
            ->notEmptyString('additional_iep');

        $validator
            ->boolean('ramos_mejia_key')
            ->requirePresence('ramos_mejia_key', 'create')
            ->notEmptyString('ramos_mejia_key');

        $validator
            ->boolean('power_contactor')
            ->requirePresence('power_contactor', 'create')
            ->notEmptyString('power_contactor');

        $validator
            ->boolean('micronleveling_for_hydraulics')
            ->requirePresence('micronleveling_for_hydraulics', 'create')
            ->notEmptyString('micronleveling_for_hydraulics');

        $validator
            ->boolean('cabin_serial_com')
            ->requirePresence('cabin_serial_com', 'create')
            ->notEmptyString('cabin_serial_com');

        $validator
            ->boolean('hall_serial_com')
            ->requirePresence('hall_serial_com', 'create')
            ->notEmptyString('hall_serial_com');

        $validator
            ->integer('qty_door_operators')
            ->requirePresence('qty_door_operators', 'create')
            ->notEmptyString('qty_door_operators');

        $validator
            ->boolean('serv_fire_evac_only')
            ->requirePresence('serv_fire_evac_only', 'create')
            ->notEmptyString('serv_fire_evac_only');

        $validator
            ->boolean('serv_fire')
            ->requirePresence('serv_fire', 'create')
            ->notEmptyString('serv_fire');

        $validator
            ->boolean('serv_full')
            ->requirePresence('serv_full', 'create')
            ->notEmptyString('serv_full');

        $validator
            ->boolean('serv_elevator')
            ->requirePresence('serv_elevator', 'create')
            ->notEmptyString('serv_elevator');

        $validator
            ->boolean('serv_overload')
            ->requirePresence('serv_overload', 'create')
            ->notEmptyString('serv_overload');

        $validator
            ->boolean('serv_overload_full')
            ->requirePresence('serv_overload_full', 'create')
            ->notEmptyString('serv_overload_full');

        $validator
            ->boolean('serv_independent')
            ->requirePresence('serv_independent', 'create')
            ->notEmptyString('serv_independent');

        $validator
            ->scalar('notes')
            ->maxLength('notes', 200)
            ->allowEmptyString('notes');

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
        $rules->add($rules->existsIn(['quot_id'], 'Quots'), ['errorField' => 'quot_id']);
        $rules->add($rules->existsIn(['cpu_id'], 'Cpus'), ['errorField' => 'cpu_id']);
        $rules->add($rules->existsIn(['maneuver_id'], 'Maneuvers'), ['errorField' => 'maneuver_id']);
        $rules->add($rules->existsIn(['control_type_id'], 'ControlTypes'), ['errorField' => 'control_type_id']);
        $rules->add($rules->existsIn(['subtype_id'], 'Subtypes'), ['errorField' => 'subtype_id']);
        $rules->add($rules->existsIn(['tension_id'], 'Tensions'), ['errorField' => 'tension_id']);
        $rules->add($rules->existsIn(['battery_id'], 'Batteries'), ['errorField' => 'battery_id']);
        $rules->add($rules->existsIn(['pump_id'], 'Pumps'), ['errorField' => 'pump_id']);
        $rules->add($rules->existsIn(['thermal_protector_id'], 'ThermalProtectors'), ['errorField' => 'thermal_protector_id']);
        $rules->add($rules->existsIn(['sensor_id'], 'Sensors'), ['errorField' => 'sensor_id']);
        $rules->add($rules->existsIn(['cabin_door_id'], 'CabinDoors'), ['errorField' => 'cabin_door_id']);
        $rules->add($rules->existsIn(['hall_door_id'], 'HallDoors'), ['errorField' => 'hall_door_id']);

        return $rules;
    }
}
