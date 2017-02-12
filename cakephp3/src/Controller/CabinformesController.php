<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cabinformes Controller
 *
 * @property \App\Model\Table\CabinformesTable $Cabinformes
 */
class CabinformesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cabinformes = $this->paginate($this->Cabinformes);

        $this->set(compact('cabinformes'));
        $this->set('_serialize', ['cabinformes']);
    }

    /**
     * View method
     *
     * @param string|null $id Cabinforme id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cabinforme = $this->Cabinformes->get($id, [
            'contain' => []
        ]);

        $this->set('cabinforme', $cabinforme);
        $this->set('_serialize', ['cabinforme']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cabinforme = $this->Cabinformes->newEntity();
        if ($this->request->is('post')) {
            $cabinforme = $this->Cabinformes->patchEntity($cabinforme, $this->request->data);
            if ($this->Cabinformes->save($cabinforme)) {
                $this->Flash->success(__('The cabinforme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cabinforme could not be saved. Please, try again.'));
        }
        $this->set(compact('cabinforme'));
        $this->set('_serialize', ['cabinforme']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cabinforme id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cabinforme = $this->Cabinformes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cabinforme = $this->Cabinformes->patchEntity($cabinforme, $this->request->data);
            if ($this->Cabinformes->save($cabinforme)) {
                $this->Flash->success(__('The cabinforme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cabinforme could not be saved. Please, try again.'));
        }
        $this->set(compact('cabinforme'));
        $this->set('_serialize', ['cabinforme']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cabinforme id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cabinforme = $this->Cabinformes->get($id);
        if ($this->Cabinformes->delete($cabinforme)) {
            $this->Flash->success(__('The cabinforme has been deleted.'));
        } else {
            $this->Flash->error(__('The cabinforme could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
