<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuotController $quotController
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Quot Controllers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quotControllers form content">
            <?= $this->Form->create($quotController) ?>
            <fieldset>
                <legend><?= __('Add Quot Controller') ?></legend>
                <?php
                    echo $this->Form->control('quot_id', ['options' => $quots]);
                    echo $this->Form->control('cpu_id', ['options' => $cpus]);
                    echo $this->Form->control('maneuver_id', ['options' => $maneuvers]);
                    echo $this->Form->control('control_type_id', ['options' => $controlTypes]);
                    echo $this->Form->control('subtype_id', ['options' => $subtypes]);
                    echo $this->Form->control('tension_id', ['options' => $tensions]);
                    echo $this->Form->control('stops');
                    echo $this->Form->control('nomenclature');
                    echo $this->Form->control('power_current');
                    echo $this->Form->control('controllers_qty');
                    echo $this->Form->control('battery_id', ['options' => $batteries]);
                    echo $this->Form->control('cars_on_battery');
                    echo $this->Form->control('pump_id', ['options' => $pumps]);
                    echo $this->Form->control('pump_other');
                    echo $this->Form->control('tandem');
                    echo $this->Form->control('encoder');
                    echo $this->Form->control('contactor');
                    echo $this->Form->control('thermal_protector_id', ['options' => $thermalProtectors]);
                    echo $this->Form->control('speed');
                    echo $this->Form->control('sensor_id', ['options' => $sensors]);
                    echo $this->Form->control('positioning_by_encoder');
                    echo $this->Form->control('emergency_power_system_connection');
                    echo $this->Form->control('brake_resistor');
                    echo $this->Form->control('phase_failure_protection');
                    echo $this->Form->control('automatic_brake_opening');
                    echo $this->Form->control('manual_brake_opening');
                    echo $this->Form->control('full_rescue');
                    echo $this->Form->control('ups');
                    echo $this->Form->control('eco_midi_supra');
                    echo $this->Form->control('rescue_vf_door');
                    echo $this->Form->control('rescue_220v_door');
                    echo $this->Form->control('automatic_return_with_gel_battery');
                    echo $this->Form->control('open_door_leveling');
                    echo $this->Form->control('power_feeded_vf_door');
                    echo $this->Form->control('air_blower');
                    echo $this->Form->control('courtesy_light');
                    echo $this->Form->control('power_supply_12v');
                    echo $this->Form->control('power_supply_24v');
                    echo $this->Form->control('power_supply_t114');
                    echo $this->Form->control('call_concentrator');
                    echo $this->Form->control('interfase_a7120');
                    echo $this->Form->control('interfase_a7120_a7121');
                    echo $this->Form->control('additional_iep');
                    echo $this->Form->control('ramos_mejia_key');
                    echo $this->Form->control('power_contactor');
                    echo $this->Form->control('micronleveling_for_hydraulics');
                    echo $this->Form->control('cabin_serial_com');
                    echo $this->Form->control('hall_serial_com');
                    echo $this->Form->control('cabin_door_id', ['options' => $cabinDoors]);
                    echo $this->Form->control('hall_door_id', ['options' => $hallDoors]);
                    echo $this->Form->control('qty_door_operators');
                    echo $this->Form->control('serv_fire_evac_only');
                    echo $this->Form->control('serv_fire');
                    echo $this->Form->control('serv_full');
                    echo $this->Form->control('serv_elevator');
                    echo $this->Form->control('serv_overload');
                    echo $this->Form->control('serv_overload_full');
                    echo $this->Form->control('serv_independent');
                    echo $this->Form->control('notes');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
