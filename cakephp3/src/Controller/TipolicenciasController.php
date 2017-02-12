<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipolicencias Controller
 *
 * @property \App\Model\Table\TipolicenciasTable $Tipolicencias
 */
class TipolicenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tipolicencias = $this->paginate($this->Tipolicencias);

        $this->set(compact('tipolicencias'));
        $this->set('_serialize', ['tipolicencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipolicencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipolicencia = $this->Tipolicencias->get($id, [
            'contain' => ['Regsolicitantes']
        ]);

        $this->set('tipolicencia', $tipolicencia);
        $this->set('_serialize', ['tipolicencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipolicencia = $this->Tipolicencias->newEntity();
        if ($this->request->is('post')) {
            $tipolicencia = $this->Tipolicencias->patchEntity($tipolicencia, $this->request->data);
            if ($this->Tipolicencias->save($tipolicencia)) {
                $this->Flash->success(__('The tipolicencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipolicencia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipolicencia'));
        $this->set('_serialize', ['tipolicencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipolicencia id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipolicencia = $this->Tipolicencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipolicencia = $this->Tipolicencias->patchEntity($tipolicencia, $this->request->data);
            if ($this->Tipolicencias->save($tipolicencia)) {
                $this->Flash->success(__('The tipolicencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipolicencia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipolicencia'));
        $this->set('_serialize', ['tipolicencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipolicencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipolicencia = $this->Tipolicencias->get($id);
        if ($this->Tipolicencias->delete($tipolicencia)) {
            $this->Flash->success(__('The tipolicencia has been deleted.'));
        } else {
            $this->Flash->error(__('The tipolicencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
