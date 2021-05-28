<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuotController[]|\Cake\Collection\CollectionInterface $quotControllers
 */
?>
<div class="quotControllers index content">
    <?= $this->Html->link(__('New Quot Controller'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Quot Controllers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('quot_id') ?></th>
                    <th><?= $this->Paginator->sort('cpu_id') ?></th>
                    <th><?= $this->Paginator->sort('maneuver_id') ?></th>
                    <th><?= $this->Paginator->sort('control_type_id') ?></th>
                    <th><?= $this->Paginator->sort('subtype_id') ?></th>
                    <th><?= $this->Paginator->sort('tension_id') ?></th>
                    <th><?= $this->Paginator->sort('stops') ?></th>
                    <th><?= $this->Paginator->sort('nomenclature') ?></th>
                    <th><?= $this->Paginator->sort('power_current') ?></th>
                    <th><?= $this->Paginator->sort('controllers_qty') ?></th>
                    <th><?= $this->Paginator->sort('battery_id') ?></th>
                    <th><?= $this->Paginator->sort('cars_on_battery') ?></th>
                    <th><?= $this->Paginator->sort('pump_id') ?></th>
                    <th><?= $this->Paginator->sort('pump_other') ?></th>
                    <th><?= $this->Paginator->sort('tandem') ?></th>
                    <th><?= $this->Paginator->sort('encoder') ?></th>
                    <th><?= $this->Paginator->sort('contactor') ?></th>
                    <th><?= $this->Paginator->sort('thermal_protector_id') ?></th>
                    <th><?= $this->Paginator->sort('speed') ?></th>
                    <th><?= $this->Paginator->sort('sensor_id') ?></th>
                    <th><?= $this->Paginator->sort('positioning_by_encoder') ?></th>
                    <th><?= $this->Paginator->sort('emergency_power_system_connection') ?></th>
                    <th><?= $this->Paginator->sort('brake_resistor') ?></th>
                    <th><?= $this->Paginator->sort('phase_failure_protection') ?></th>
                    <th><?= $this->Paginator->sort('automatic_brake_opening') ?></th>
                    <th><?= $this->Paginator->sort('manual_brake_opening') ?></th>
                    <th><?= $this->Paginator->sort('full_rescue') ?></th>
                    <th><?= $this->Paginator->sort('ups') ?></th>
                    <th><?= $this->Paginator->sort('eco_midi_supra') ?></th>
                    <th><?= $this->Paginator->sort('rescue_vf_door') ?></th>
                    <th><?= $this->Paginator->sort('rescue_220v_door') ?></th>
                    <th><?= $this->Paginator->sort('automatic_return_with_gel_battery') ?></th>
                    <th><?= $this->Paginator->sort('open_door_leveling') ?></th>
                    <th><?= $this->Paginator->sort('power_feeded_vf_door') ?></th>
                    <th><?= $this->Paginator->sort('air_blower') ?></th>
                    <th><?= $this->Paginator->sort('courtesy_light') ?></th>
                    <th><?= $this->Paginator->sort('power_supply_12v') ?></th>
                    <th><?= $this->Paginator->sort('power_supply_24v') ?></th>
                    <th><?= $this->Paginator->sort('power_supply_t114') ?></th>
                    <th><?= $this->Paginator->sort('call_concentrator') ?></th>
                    <th><?= $this->Paginator->sort('interfase_a7120') ?></th>
                    <th><?= $this->Paginator->sort('interfase_a7120_a7121') ?></th>
                    <th><?= $this->Paginator->sort('additional_iep') ?></th>
                    <th><?= $this->Paginator->sort('ramos_mejia_key') ?></th>
                    <th><?= $this->Paginator->sort('power_contactor') ?></th>
                    <th><?= $this->Paginator->sort('micronleveling_for_hydraulics') ?></th>
                    <th><?= $this->Paginator->sort('cabin_serial_com') ?></th>
                    <th><?= $this->Paginator->sort('hall_serial_com') ?></th>
                    <th><?= $this->Paginator->sort('cabin_door_id') ?></th>
                    <th><?= $this->Paginator->sort('hall_door_id') ?></th>
                    <th><?= $this->Paginator->sort('qty_door_operators') ?></th>
                    <th><?= $this->Paginator->sort('serv_fire_evac_only') ?></th>
                    <th><?= $this->Paginator->sort('serv_fire') ?></th>
                    <th><?= $this->Paginator->sort('serv_full') ?></th>
                    <th><?= $this->Paginator->sort('serv_elevator') ?></th>
                    <th><?= $this->Paginator->sort('serv_overload') ?></th>
                    <th><?= $this->Paginator->sort('serv_overload_full') ?></th>
                    <th><?= $this->Paginator->sort('serv_independent') ?></th>
                    <th><?= $this->Paginator->sort('notes') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($quotControllers as $quotController): ?>
                <tr>
                    <td><?= $this->Number->format($quotController->id) ?></td>
                    <td><?= $quotController->has('quot') ? $this->Html->link($quotController->quot->id, ['controller' => 'Quots', 'action' => 'view', $quotController->quot->id]) : '' ?></td>
                    <td><?= $quotController->has('cpus') ? $this->Html->link($quotController->cpus->name, ['controller' => 'Cpus', 'action' => 'view', $quotController->cpus->id]) : '' ?></td>
                    <td><?= $quotController->has('maneuver') ? $this->Html->link($quotController->maneuver->name, ['controller' => 'Maneuvers', 'action' => 'view', $quotController->maneuver->id]) : '' ?></td>
                    <td><?= $quotController->has('control_type') ? $this->Html->link($quotController->control_type->name, ['controller' => 'ControlTypes', 'action' => 'view', $quotController->control_type->id]) : '' ?></td>
                    <td><?= $quotController->has('subtype') ? $this->Html->link($quotController->subtype->name, ['controller' => 'Subtypes', 'action' => 'view', $quotController->subtype->id]) : '' ?></td>
                    <td><?= $quotController->has('tension') ? $this->Html->link($quotController->tension->name, ['controller' => 'Tensions', 'action' => 'view', $quotController->tension->id]) : '' ?></td>
                    <td><?= $this->Number->format($quotController->stops) ?></td>
                    <td><?= h($quotController->nomenclature) ?></td>
                    <td><?= $this->Number->format($quotController->power_current) ?></td>
                    <td><?= $this->Number->format($quotController->controllers_qty) ?></td>
                    <td><?= $quotController->has('battery') ? $this->Html->link($quotController->battery->name, ['controller' => 'Batteries', 'action' => 'view', $quotController->battery->id]) : '' ?></td>
                    <td><?= $this->Number->format($quotController->cars_on_battery) ?></td>
                    <td><?= $quotController->has('pump') ? $this->Html->link($quotController->pump->name, ['controller' => 'Pumps', 'action' => 'view', $quotController->pump->id]) : '' ?></td>
                    <td><?= h($quotController->pump_other) ?></td>
                    <td><?= h($quotController->tandem) ?></td>
                    <td><?= h($quotController->encoder) ?></td>
                    <td><?= $this->Number->format($quotController->contactor) ?></td>
                    <td><?= $quotController->has('thermal_protector') ? $this->Html->link($quotController->thermal_protector->name, ['controller' => 'ThermalProtectors', 'action' => 'view', $quotController->thermal_protector->id]) : '' ?></td>
                    <td><?= $this->Number->format($quotController->speed) ?></td>
                    <td><?= $quotController->has('sensor') ? $this->Html->link($quotController->sensor->name, ['controller' => 'Sensors', 'action' => 'view', $quotController->sensor->id]) : '' ?></td>
                    <td><?= h($quotController->positioning_by_encoder) ?></td>
                    <td><?= h($quotController->emergency_power_system_connection) ?></td>
                    <td><?= h($quotController->brake_resistor) ?></td>
                    <td><?= h($quotController->phase_failure_protection) ?></td>
                    <td><?= h($quotController->automatic_brake_opening) ?></td>
                    <td><?= h($quotController->manual_brake_opening) ?></td>
                    <td><?= h($quotController->full_rescue) ?></td>
                    <td><?= h($quotController->ups) ?></td>
                    <td><?= h($quotController->eco_midi_supra) ?></td>
                    <td><?= h($quotController->rescue_vf_door) ?></td>
                    <td><?= h($quotController->rescue_220v_door) ?></td>
                    <td><?= h($quotController->automatic_return_with_gel_battery) ?></td>
                    <td><?= h($quotController->open_door_leveling) ?></td>
                    <td><?= h($quotController->power_feeded_vf_door) ?></td>
                    <td><?= h($quotController->air_blower) ?></td>
                    <td><?= h($quotController->courtesy_light) ?></td>
                    <td><?= $this->Number->format($quotController->power_supply_12v) ?></td>
                    <td><?= $this->Number->format($quotController->power_supply_24v) ?></td>
                    <td><?= $this->Number->format($quotController->power_supply_t114) ?></td>
                    <td><?= h($quotController->call_concentrator) ?></td>
                    <td><?= h($quotController->interfase_a7120) ?></td>
                    <td><?= h($quotController->interfase_a7120_a7121) ?></td>
                    <td><?= h($quotController->additional_iep) ?></td>
                    <td><?= h($quotController->ramos_mejia_key) ?></td>
                    <td><?= h($quotController->power_contactor) ?></td>
                    <td><?= h($quotController->micronleveling_for_hydraulics) ?></td>
                    <td><?= h($quotController->cabin_serial_com) ?></td>
                    <td><?= h($quotController->hall_serial_com) ?></td>
                    <td><?= $quotController->has('cabin_door') ? $this->Html->link($quotController->cabin_door->name, ['controller' => 'CabinDoors', 'action' => 'view', $quotController->cabin_door->id]) : '' ?></td>
                    <td><?= $quotController->has('hall_door') ? $this->Html->link($quotController->hall_door->name, ['controller' => 'HallDoors', 'action' => 'view', $quotController->hall_door->id]) : '' ?></td>
                    <td><?= $this->Number->format($quotController->qty_door_operators) ?></td>
                    <td><?= h($quotController->serv_fire_evac_only) ?></td>
                    <td><?= h($quotController->serv_fire) ?></td>
                    <td><?= h($quotController->serv_full) ?></td>
                    <td><?= h($quotController->serv_elevator) ?></td>
                    <td><?= h($quotController->serv_overload) ?></td>
                    <td><?= h($quotController->serv_overload_full) ?></td>
                    <td><?= h($quotController->serv_independent) ?></td>
                    <td><?= h($quotController->notes) ?></td>
                    <td><?= h($quotController->created) ?></td>
                    <td><?= h($quotController->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $quotController->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quotController->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quotController->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotController->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
