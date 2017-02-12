<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Licencias Controller
 *
 * @property \App\Model\Table\LicenciasTable $Licencias
 */
class LicenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $licencias = $this->paginate($this->Licencias);

        $this->set(compact('licencias'));
        $this->set('_serialize', ['licencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Licencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $licencia = $this->Licencias->get($id, [
            'contain' => []
        ]);

        $this->set('licencia', $licencia);
        $this->set('_serialize', ['licencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $licencia = $this->Licencias->newEntity();
        if ($this->request->is('post')) {
            $licencia = $this->Licencias->patchEntity($licencia, $this->request->data);
            if ($this->Licencias->save($licencia)) {
                $this->Flash->success(__('The licencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The licencia could not be saved. Please, try again.'));
        }
        $this->set(compact('licencia'));
        $this->set('_serialize', ['licencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Licencia id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $licencia = $this->Licencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $licencia = $this->Licencias->patchEntity($licencia, $this->request->data);
            if ($this->Licencias->save($licencia)) {
                $this->Flash->success(__('The licencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The licencia could not be saved. Please, try again.'));
        }
        $this->set(compact('licencia'));
        $this->set('_serialize', ['licencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Licencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $licencia = $this->Licencias->get($id);
        if ($this->Licencias->delete($licencia)) {
            $this->Flash->success(__('The licencia has been deleted.'));
        } else {
            $this->Flash->error(__('The licencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
