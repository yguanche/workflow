<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Regsolicitantes Controller
 *
 * @property \App\Model\Table\RegsolicitantesTable $Regsolicitantes
 */
class RegsolicitantesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tipolicencias']
        ];
        $regsolicitantes = $this->paginate($this->Regsolicitantes);

        $this->set(compact('regsolicitantes'));
        $this->set('_serialize', ['regsolicitantes']);
    }

    /**
     * View method
     *
     * @param string|null $id Regsolicitante id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regsolicitante = $this->Regsolicitantes->get($id, [
            'contain' => ['Tipolicencias']
        ]);

        $this->set('regsolicitante', $regsolicitante);
        $this->set('_serialize', ['regsolicitante']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $regsolicitante = $this->Regsolicitantes->newEntity();
        if ($this->request->is('post')) {
            $regsolicitante = $this->Regsolicitantes->patchEntity($regsolicitante, $this->request->data);
            if ($this->Regsolicitantes->save($regsolicitante)) {
                $this->Flash->success(__('The regsolicitante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regsolicitante could not be saved. Please, try again.'));
        }
        $tipolicencias = $this->Regsolicitantes->Tipolicencias->find('list', ['limit' => 200]);
        $this->set(compact('regsolicitante', 'tipolicencias'));
        $this->set('_serialize', ['regsolicitante']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Regsolicitante id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regsolicitante = $this->Regsolicitantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regsolicitante = $this->Regsolicitantes->patchEntity($regsolicitante, $this->request->data);
            if ($this->Regsolicitantes->save($regsolicitante)) {
                $this->Flash->success(__('The regsolicitante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regsolicitante could not be saved. Please, try again.'));
        }
        $tipolicencias = $this->Regsolicitantes->Tipolicencias->find('list', ['limit' => 200]);
        $this->set(compact('regsolicitante', 'tipolicencias'));
        $this->set('_serialize', ['regsolicitante']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Regsolicitante id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regsolicitante = $this->Regsolicitantes->get($id);
        if ($this->Regsolicitantes->delete($regsolicitante)) {
            $this->Flash->success(__('The regsolicitante has been deleted.'));
        } else {
            $this->Flash->error(__('The regsolicitante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
