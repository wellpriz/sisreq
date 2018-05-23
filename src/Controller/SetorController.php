<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Setor Controller
 *
 * @property \App\Model\Table\SetorTable $Setor
 */
class SetorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $setor = $this->paginate($this->Setor);

        $this->set(compact('setor'));
        $this->set('_serialize', ['setor']);
    }

    /**
     * View method
     *
     * @param string|null $id Setor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $setor = $this->Setor->get($id, [
            'contain' => []
        ]);

        $this->set('setor', $setor);
        $this->set('_serialize', ['setor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $setor = $this->Setor->newEntity();
        if ($this->request->is('post')) {
            $setor = $this->Setor->patchEntity($setor, $this->request->data);
            if ($this->Setor->save($setor)) {
                $this->Flash->success(__('The setor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The setor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('setor'));
        $this->set('_serialize', ['setor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Setor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $setor = $this->Setor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $setor = $this->Setor->patchEntity($setor, $this->request->data);
            if ($this->Setor->save($setor)) {
                $this->Flash->success(__('The setor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The setor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('setor'));
        $this->set('_serialize', ['setor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Setor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $setor = $this->Setor->get($id);
        if ($this->Setor->delete($setor)) {
            $this->Flash->success(__('The setor has been deleted.'));
        } else {
            $this->Flash->error(__('The setor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
