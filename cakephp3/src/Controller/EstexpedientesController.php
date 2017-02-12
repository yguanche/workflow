<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estexpedientes Controller
 *
 * @property \App\Model\Table\EstexpedientesTable $Estexpedientes
 */
class EstexpedientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $estexpedientes = $this->paginate($this->Estexpedientes);

        $this->set(compact('estexpedientes'));
        $this->set('_serialize', ['estexpedientes']);
    }

    /**
     * View method
     *
     * @param string|null $id Estexpediente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estexpediente = $this->Estexpedientes->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('estexpediente', $estexpediente);
        $this->set('_serialize', ['estexpediente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estexpediente = $this->Estexpedientes->newEntity();
        if ($this->request->is('post')) {
            $estexpediente = $this->Estexpedientes->patchEntity($estexpediente, $this->request->data);
            if ($this->Estexpedientes->save($estexpediente)) {
                $this->Flash->success(__('The estexpediente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estexpediente could not be saved. Please, try again.'));
        }
        $users = $this->Estexpedientes->Users->find('list', ['limit' => 200]);
        $this->set(compact('estexpediente', 'users'));
        $this->set('_serialize', ['estexpediente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estexpediente id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estexpediente = $this->Estexpedientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estexpediente = $this->Estexpedientes->patchEntity($estexpediente, $this->request->data);
            if ($this->Estexpedientes->save($estexpediente)) {
                $this->Flash->success(__('The estexpediente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estexpediente could not be saved. Please, try again.'));
        }
        $users = $this->Estexpedientes->Users->find('list', ['limit' => 200]);
        $this->set(compact('estexpediente', 'users'));
        $this->set('_serialize', ['estexpediente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estexpediente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estexpediente = $this->Estexpedientes->get($id);
        if ($this->Estexpedientes->delete($estexpediente)) {
            $this->Flash->success(__('The estexpediente has been deleted.'));
        } else {
            $this->Flash->error(__('The estexpediente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
