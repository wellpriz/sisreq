<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TiposRequerimento Controller
 *
 * @property \App\Model\Table\TiposRequerimentoTable $TiposRequerimento
 */
class TiposRequerimentoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tiposRequerimento = $this->paginate($this->TiposRequerimento);

        $this->set(compact('tiposRequerimento'));
        $this->set('_serialize', ['tiposRequerimento']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Requerimento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposRequerimento = $this->TiposRequerimento->get($id, [
            'contain' => []
        ]);

        $this->set('tiposRequerimento', $tiposRequerimento);
        $this->set('_serialize', ['tiposRequerimento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposRequerimento = $this->TiposRequerimento->newEntity();
        if ($this->request->is('post')) {
            $tiposRequerimento = $this->TiposRequerimento->patchEntity($tiposRequerimento, $this->request->data);
            if ($this->TiposRequerimento->save($tiposRequerimento)) {
                $this->Flash->success(__('The tipos requerimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos requerimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposRequerimento'));
        $this->set('_serialize', ['tiposRequerimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Requerimento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposRequerimento = $this->TiposRequerimento->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposRequerimento = $this->TiposRequerimento->patchEntity($tiposRequerimento, $this->request->data);
            if ($this->TiposRequerimento->save($tiposRequerimento)) {
                $this->Flash->success(__('The tipos requerimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos requerimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposRequerimento'));
        $this->set('_serialize', ['tiposRequerimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Requerimento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposRequerimento = $this->TiposRequerimento->get($id);
        if ($this->TiposRequerimento->delete($tiposRequerimento)) {
            $this->Flash->success(__('The tipos requerimento has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos requerimento could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
