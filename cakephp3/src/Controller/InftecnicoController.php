<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inftecnico Controller
 *
 * @property \App\Model\Table\InftecnicoTable $Inftecnico
 */
class InftecnicoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $inftecnico = $this->paginate($this->Inftecnico);

        $this->set(compact('inftecnico'));
        $this->set('_serialize', ['inftecnico']);
    }

    /**
     * View method
     *
     * @param string|null $id Inftecnico id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inftecnico = $this->Inftecnico->get($id, [
            'contain' => []
        ]);

        $this->set('inftecnico', $inftecnico);
        $this->set('_serialize', ['inftecnico']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inftecnico = $this->Inftecnico->newEntity();
        if ($this->request->is('post')) {
            $inftecnico = $this->Inftecnico->patchEntity($inftecnico, $this->request->data);
            if ($this->Inftecnico->save($inftecnico)) {
                $this->Flash->success(__('The inftecnico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inftecnico could not be saved. Please, try again.'));
        }
        $this->set(compact('inftecnico'));
        $this->set('_serialize', ['inftecnico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Inftecnico id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inftecnico = $this->Inftecnico->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inftecnico = $this->Inftecnico->patchEntity($inftecnico, $this->request->data);
            if ($this->Inftecnico->save($inftecnico)) {
                $this->Flash->success(__('The inftecnico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inftecnico could not be saved. Please, try again.'));
        }
        $this->set(compact('inftecnico'));
        $this->set('_serialize', ['inftecnico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Inftecnico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inftecnico = $this->Inftecnico->get($id);
        if ($this->Inftecnico->delete($inftecnico)) {
            $this->Flash->success(__('The inftecnico has been deleted.'));
        } else {
            $this->Flash->error(__('The inftecnico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
