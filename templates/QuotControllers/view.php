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
            <?= $this->Html->link(__('Edit Quot Controller'), ['action' => 'edit', $quotController->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Quot Controller'), ['action' => 'delete', $quotController->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotController->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Quot Controllers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Quot Controller'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="quotControllers view content">
            <h3><?= h($quotController->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Quot') ?></th>
                    <td><?= $quotController->has('quot') ? $this->Html->link($quotController->quot->id, ['controller' => 'Quots', 'action' => 'view', $quotController->quot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpus') ?></th>
                    <td><?= $quotController->has('cpus') ? $this->Html->link($quotController->cpus->name, ['controller' => 'Cpus', 'action' => 'view', $quotController->cpus->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Maneuver') ?></th>
                    <td><?= $quotController->has('maneuver') ? $this->Html->link($quotController->maneuver->name, ['controller' => 'Maneuvers', 'action' => 'view', $quotController->maneuver->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Control Type') ?></th>
                    <td><?= $quotController->has('control_type') ? $this->Html->link($quotController->control_type->name, ['controller' => 'ControlTypes', 'action' => 'view', $quotController->control_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtype') ?></th>
                    <td><?= $quotController->has('subtype') ? $this->Html->link($quotController->subtype->name, ['controller' => 'Subtypes', 'action' => 'view', $quotController->subtype->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tension') ?></th>
                    <td><?= $quotController->has('tension') ? $this->Html->link($quotController->tension->name, ['controller' => 'Tensions', 'action' => 'view', $quotController->tension->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomenclature') ?></th>
                    <td><?= h($quotController->nomenclature) ?></td>
                </tr>
                <tr>
                    <th><?= __('Battery') ?></th>
                    <td><?= $quotController->has('battery') ? $this->Html->link($quotController->battery->name, ['controller' => 'Batteries', 'action' => 'view', $quotController->battery->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pump') ?></th>
                    <td><?= $quotController->has('pump') ? $this->Html->link($quotController->pump->name, ['controller' => 'Pumps', 'action' => 'view', $quotController->pump->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pump Other') ?></th>
                    <td><?= h($quotController->pump_other) ?></td>
                </tr>
                <tr>
                    <th><?= __('Thermal Protector') ?></th>
                    <td><?= $quotController->has('thermal_protector') ? $this->Html->link($quotController->thermal_protector->name, ['controller' => 'ThermalProtectors', 'action' => 'view', $quotController->thermal_protector->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sensor') ?></th>
                    <td><?= $quotController->has('sensor') ? $this->Html->link($quotController->sensor->name, ['controller' => 'Sensors', 'action' => 'view', $quotController->sensor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cabin Door') ?></th>
                    <td><?= $quotController->has('cabin_door') ? $this->Html->link($quotController->cabin_door->name, ['controller' => 'CabinDoors', 'action' => 'view', $quotController->cabin_door->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Hall Door') ?></th>
                    <td><?= $quotController->has('hall_door') ? $this->Html->link($quotController->hall_door->name, ['controller' => 'HallDoors', 'action' => 'view', $quotController->hall_door->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Notes') ?></th>
                    <td><?= h($quotController->notes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($quotController->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stops') ?></th>
                    <td><?= $this->Number->format($quotController->stops) ?></td>
                </tr>
                <tr>
                    <th><?= __('Power Current') ?></th>
                    <td><?= $this->Number->format($quotController->power_current) ?></td>
                </tr>
                <tr>
                    <th><?= __('Controllers Qty') ?></th>
                    <td><?= $this->Number->format($quotController->controllers_qty) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cars On Battery') ?></th>
                    <td><?= $this->Number->format($quotController->cars_on_battery) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contactor') ?></th>
                    <td><?= $this->Number->format($quotController->contactor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Speed') ?></th>
                    <td><?= $this->Number->format($quotController->speed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Power Supply 12v') ?></th>
                    <td><?= $this->Number->format($quotController->power_supply_12v) ?></td>
                </tr>
                <tr>
                    <th><?= __('Power Supply 24v') ?></th>
                    <td><?= $this->Number->format($quotController->power_supply_24v) ?></td>
                </tr>
                <tr>
                    <th><?= __('Power Supply T114') ?></th>
                    <td><?= $this->Number->format($quotController->power_supply_t114) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qty Door Operators') ?></th>
                    <td><?= $this->Number->format($quotController->qty_door_operators) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($quotController->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($quotController->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tandem') ?></th>
                    <td><?= $quotController->tandem ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Encoder') ?></th>
                    <td><?= $quotController->encoder ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Positioning By Encoder') ?></th>
                    <td><?= $quotController->positioning_by_encoder ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Emergency Power System Connection') ?></th>
                    <td><?= $quotController->emergency_power_system_connection ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Brake Resistor') ?></th>
                    <td><?= $quotController->brake_resistor ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Phase Failure Protection') ?></th>
                    <td><?= $quotController->phase_failure_protection ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Automatic Brake Opening') ?></th>
                    <td><?= $quotController->automatic_brake_opening ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Manual Brake Opening') ?></th>
                    <td><?= $quotController->manual_brake_opening ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Full Rescue') ?></th>
                    <td><?= $quotController->full_rescue ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Ups') ?></th>
                    <td><?= $quotController->ups ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Eco Midi Supra') ?></th>
                    <td><?= $quotController->eco_midi_supra ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Rescue Vf Door') ?></th>
                    <td><?= $quotController->rescue_vf_door ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Rescue 220v Door') ?></th>
                    <td><?= $quotController->rescue_220v_door ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Automatic Return With Gel Battery') ?></th>
                    <td><?= $quotController->automatic_return_with_gel_battery ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Open Door Leveling') ?></th>
                    <td><?= $quotController->open_door_leveling ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Power Feeded Vf Door') ?></th>
                    <td><?= $quotController->power_feeded_vf_door ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Air Blower') ?></th>
                    <td><?= $quotController->air_blower ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Courtesy Light') ?></th>
                    <td><?= $quotController->courtesy_light ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Call Concentrator') ?></th>
                    <td><?= $quotController->call_concentrator ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Interfase A7120') ?></th>
                    <td><?= $quotController->interfase_a7120 ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Interfase A7120 A7121') ?></th>
                    <td><?= $quotController->interfase_a7120_a7121 ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Additional Iep') ?></th>
                    <td><?= $quotController->additional_iep ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Ramos Mejia Key') ?></th>
                    <td><?= $quotController->ramos_mejia_key ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Power Contactor') ?></th>
                    <td><?= $quotController->power_contactor ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Micronleveling For Hydraulics') ?></th>
                    <td><?= $quotController->micronleveling_for_hydraulics ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Cabin Serial Com') ?></th>
                    <td><?= $quotController->cabin_serial_com ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Hall Serial Com') ?></th>
                    <td><?= $quotController->hall_serial_com ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Serv Fire Evac Only') ?></th>
                    <td><?= $quotController->serv_fire_evac_only ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Serv Fire') ?></th>
                    <td><?= $quotController->serv_fire ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Serv Full') ?></th>
                    <td><?= $quotController->serv_full ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Serv Elevator') ?></th>
                    <td><?= $quotController->serv_elevator ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Serv Overload') ?></th>
                    <td><?= $quotController->serv_overload ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Serv Overload Full') ?></th>
                    <td><?= $quotController->serv_overload_full ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Serv Independent') ?></th>
                    <td><?= $quotController->serv_independent ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
