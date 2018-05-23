<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Requerimentos Controller
 *
 * @property \App\Model\Table\RequerimentosTable $Requerimentos
 */
class RequerimentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $requerimentos = $this->paginate($this->Requerimentos);

        $this->set(compact('requerimentos'));
        $this->set('_serialize', ['requerimentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Requerimento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $requerimento = $this->Requerimentos->get($id, [
            'contain' => []
        ]);

        $this->set('requerimento', $requerimento);
        $this->set('_serialize', ['requerimento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $requerimento = $this->Requerimentos->newEntity();
        if ($this->request->is('post')) {
            $requerimento = $this->Requerimentos->patchEntity($requerimento, $this->request->data);
            if ($this->Requerimentos->save($requerimento)) {
                $this->Flash->success(__('The requerimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The requerimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('requerimento'));
        $this->set('_serialize', ['requerimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Requerimento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $requerimento = $this->Requerimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requerimento = $this->Requerimentos->patchEntity($requerimento, $this->request->data);
            if ($this->Requerimentos->save($requerimento)) {
                $this->Flash->success(__('The requerimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The requerimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('requerimento'));
        $this->set('_serialize', ['requerimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Requerimento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $requerimento = $this->Requerimentos->get($id);
        if ($this->Requerimentos->delete($requerimento)) {
            $this->Flash->success(__('The requerimento has been deleted.'));
        } else {
            $this->Flash->error(__('The requerimento could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
