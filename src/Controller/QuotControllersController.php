<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * QuotControllers Controller
 *
 * @property \App\Model\Table\QuotControllersTable $QuotControllers
 * @method \App\Model\Entity\QuotController[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuotControllersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Quots', 'Cpus', 'Maneuvers', 'ControlTypes', 'Subtypes', 'Tensions', 'Batteries', 'Pumps', 'ThermalProtectors', 'Sensors', 'CabinDoors', 'HallDoors'],
        ];
        $quotControllers = $this->paginate($this->QuotControllers);

        $this->set(compact('quotControllers'));
    }

    /**
     * View method
     *
     * @param string|null $id Quot Controller id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quotController = $this->QuotControllers->get($id, [
            'contain' => ['Quots', 'Cpus', 'Maneuvers', 'ControlTypes', 'Subtypes', 'Tensions', 'Batteries', 'Pumps', 'ThermalProtectors', 'Sensors', 'CabinDoors', 'HallDoors'],
        ]);

        $this->set(compact('quotController'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quotController = $this->QuotControllers->newEmptyEntity();
        if ($this->request->is('post')) {
            $quotController = $this->QuotControllers->patchEntity($quotController, $this->request->getData());
            if ($this->QuotControllers->save($quotController)) {
                $this->Flash->success(__('The quot controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quot controller could not be saved. Please, try again.'));
        }
        $quots = $this->QuotControllers->Quots->find('list', ['limit' => 200]);
        $cpus = $this->QuotControllers->Cpus->find('list', ['limit' => 200]);
        $maneuvers = $this->QuotControllers->Maneuvers->find('list', ['limit' => 200]);
        $controlTypes = $this->QuotControllers->ControlTypes->find('list', ['limit' => 200]);
        $subtypes = $this->QuotControllers->Subtypes->find('list', ['limit' => 200]);
        $tensions = $this->QuotControllers->Tensions->find('list', ['limit' => 200]);
        $batteries = $this->QuotControllers->Batteries->find('list', ['limit' => 200]);
        $pumps = $this->QuotControllers->Pumps->find('list', ['limit' => 200]);
        $thermalProtectors = $this->QuotControllers->ThermalProtectors->find('list', ['limit' => 200]);
        $sensors = $this->QuotControllers->Sensors->find('list', ['limit' => 200]);
        $cabinDoors = $this->QuotControllers->CabinDoors->find('list', ['limit' => 200]);
        $hallDoors = $this->QuotControllers->HallDoors->find('list', ['limit' => 200]);
        $this->set(compact('quotController', 'quots', 'cpus', 'maneuvers', 'controlTypes', 'subtypes', 'tensions', 'batteries', 'pumps', 'thermalProtectors', 'sensors', 'cabinDoors', 'hallDoors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quot Controller id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quotController = $this->QuotControllers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quotController = $this->QuotControllers->patchEntity($quotController, $this->request->getData());
            if ($this->QuotControllers->save($quotController)) {
                $this->Flash->success(__('The quot controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quot controller could not be saved. Please, try again.'));
        }
        $quots = $this->QuotControllers->Quots->find('list', ['limit' => 200]);
        $cpus = $this->QuotControllers->Cpus->find('list', ['limit' => 200]);
        $maneuvers = $this->QuotControllers->Maneuvers->find('list', ['limit' => 200]);
        $controlTypes = $this->QuotControllers->ControlTypes->find('list', ['limit' => 200]);
        $subtypes = $this->QuotControllers->Subtypes->find('list', ['limit' => 200]);
        $tensions = $this->QuotControllers->Tensions->find('list', ['limit' => 200]);
        $batteries = $this->QuotControllers->Batteries->find('list', ['limit' => 200]);
        $pumps = $this->QuotControllers->Pumps->find('list', ['limit' => 200]);
        $thermalProtectors = $this->QuotControllers->ThermalProtectors->find('list', ['limit' => 200]);
        $sensors = $this->QuotControllers->Sensors->find('list', ['limit' => 200]);
        $cabinDoors = $this->QuotControllers->CabinDoors->find('list', ['limit' => 200]);
        $hallDoors = $this->QuotControllers->HallDoors->find('list', ['limit' => 200]);
        $this->set(compact('quotController', 'quots', 'cpus', 'maneuvers', 'controlTypes', 'subtypes', 'tensions', 'batteries', 'pumps', 'thermalProtectors', 'sensors', 'cabinDoors', 'hallDoors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quot Controller id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quotController = $this->QuotControllers->get($id);
        if ($this->QuotControllers->delete($quotController)) {
            $this->Flash->success(__('The quot controller has been deleted.'));
        } else {
            $this->Flash->error(__('The quot controller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
