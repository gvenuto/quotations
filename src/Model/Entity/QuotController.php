<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QuotController Entity
 *
 * @property int $id
 * @property int $quot_id
 * @property int $cpu_id
 * @property int $maneuver_id
 * @property int $control_type_id
 * @property int $subtype_id
 * @property int $tension_id
 * @property int $stops
 * @property string $nomenclature
 * @property string $power_current
 * @property int $controllers_qty
 * @property int $battery_id
 * @property int $cars_on_battery
 * @property int $pump_id
 * @property string $pump_other
 * @property bool $tandem
 * @property bool $encoder
 * @property string $contactor
 * @property int $thermal_protector_id
 * @property int $speed
 * @property int $sensor_id
 * @property bool $positioning_by_encoder
 * @property bool $emergency_power_system_connection
 * @property bool $brake_resistor
 * @property bool $phase_failure_protection
 * @property bool $automatic_brake_opening
 * @property bool $manual_brake_opening
 * @property bool $full_rescue
 * @property bool $ups
 * @property bool $eco_midi_supra
 * @property bool $rescue_vf_door
 * @property bool $rescue_220v_door
 * @property bool $automatic_return_with_gel_battery
 * @property bool $open_door_leveling
 * @property bool $power_feeded_vf_door
 * @property bool $air_blower
 * @property bool $courtesy_light
 * @property int $power_supply_12v
 * @property int $power_supply_24v
 * @property int $power_supply_t114
 * @property bool $call_concentrator
 * @property bool $interfase_a7120
 * @property bool $interfase_a7120_a7121
 * @property bool $additional_iep
 * @property bool $ramos_mejia_key
 * @property bool $power_contactor
 * @property bool $micronleveling_for_hydraulics
 * @property bool $cabin_serial_com
 * @property bool $hall_serial_com
 * @property int $cabin_door_id
 * @property int $hall_door_id
 * @property int $qty_door_operators
 * @property bool $serv_fire_evac_only
 * @property bool $serv_fire
 * @property bool $serv_full
 * @property bool $serv_elevator
 * @property bool $serv_overload
 * @property bool $serv_overload_full
 * @property bool $serv_independent
 * @property string|null $notes
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Quot $quot
 * @property \App\Model\Entity\Cpus $cpus
 * @property \App\Model\Entity\Maneuver $maneuver
 * @property \App\Model\Entity\ControlType $control_type
 * @property \App\Model\Entity\Subtype $subtype
 * @property \App\Model\Entity\Tension $tension
 * @property \App\Model\Entity\Battery $battery
 * @property \App\Model\Entity\Pump $pump
 * @property \App\Model\Entity\ThermalProtector $thermal_protector
 * @property \App\Model\Entity\Sensor $sensor
 * @property \App\Model\Entity\CabinDoor $cabin_door
 * @property \App\Model\Entity\HallDoor $hall_door
 */
class QuotController extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'quot_id' => true,
        'cpu_id' => true,
        'maneuver_id' => true,
        'control_type_id' => true,
        'subtype_id' => true,
        'tension_id' => true,
        'stops' => true,
        'nomenclature' => true,
        'power_current' => true,
        'controllers_qty' => true,
        'battery_id' => true,
        'cars_on_battery' => true,
        'pump_id' => true,
        'pump_other' => true,
        'tandem' => true,
        'encoder' => true,
        'contactor' => true,
        'thermal_protector_id' => true,
        'speed' => true,
        'sensor_id' => true,
        'positioning_by_encoder' => true,
        'emergency_power_system_connection' => true,
        'brake_resistor' => true,
        'phase_failure_protection' => true,
        'automatic_brake_opening' => true,
        'manual_brake_opening' => true,
        'full_rescue' => true,
        'ups' => true,
        'eco_midi_supra' => true,
        'rescue_vf_door' => true,
        'rescue_220v_door' => true,
        'automatic_return_with_gel_battery' => true,
        'open_door_leveling' => true,
        'power_feeded_vf_door' => true,
        'air_blower' => true,
        'courtesy_light' => true,
        'power_supply_12v' => true,
        'power_supply_24v' => true,
        'power_supply_t114' => true,
        'call_concentrator' => true,
        'interfase_a7120' => true,
        'interfase_a7120_a7121' => true,
        'additional_iep' => true,
        'ramos_mejia_key' => true,
        'power_contactor' => true,
        'micronleveling_for_hydraulics' => true,
        'cabin_serial_com' => true,
        'hall_serial_com' => true,
        'cabin_door_id' => true,
        'hall_door_id' => true,
        'qty_door_operators' => true,
        'serv_fire_evac_only' => true,
        'serv_fire' => true,
        'serv_full' => true,
        'serv_elevator' => true,
        'serv_overload' => true,
        'serv_overload_full' => true,
        'serv_independent' => true,
        'notes' => true,
        'created' => true,
        'modified' => true,
        'quot' => true,
        'cpus' => true,
        'maneuver' => true,
        'control_type' => true,
        'subtype' => true,
        'tension' => true,
        'battery' => true,
        'pump' => true,
        'thermal_protector' => true,
        'sensor' => true,
        'cabin_door' => true,
        'hall_door' => true,
    ];
}
