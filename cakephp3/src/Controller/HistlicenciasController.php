<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Histlicencias Controller
 *
 * @property \App\Model\Table\HistlicenciasTable $Histlicencias
 */
class HistlicenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $histlicencias = $this->paginate($this->Histlicencias);

        $this->set(compact('histlicencias'));
        $this->set('_serialize', ['histlicencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Histlicencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $histlicencia = $this->Histlicencias->get($id, [
            'contain' => []
        ]);

        $this->set('histlicencia', $histlicencia);
        $this->set('_serialize', ['histlicencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $histlicencia = $this->Histlicencias->newEntity();
        if ($this->request->is('post')) {
            $histlicencia = $this->Histlicencias->patchEntity($histlicencia, $this->request->data);
            if ($this->Histlicencias->save($histlicencia)) {
                $this->Flash->success(__('The histlicencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The histlicencia could not be saved. Please, try again.'));
        }
        $this->set(compact('histlicencia'));
        $this->set('_serialize', ['histlicencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Histlicencia id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $histlicencia = $this->Histlicencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $histlicencia = $this->Histlicencias->patchEntity($histlicencia, $this->request->data);
            if ($this->Histlicencias->save($histlicencia)) {
                $this->Flash->success(__('The histlicencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The histlicencia could not be saved. Please, try again.'));
        }
        $this->set(compact('histlicencia'));
        $this->set('_serialize', ['histlicencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Histlicencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $histlicencia = $this->Histlicencias->get($id);
        if ($this->Histlicencias->delete($histlicencia)) {
            $this->Flash->success(__('The histlicencia has been deleted.'));
        } else {
            $this->Flash->error(__('The histlicencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
