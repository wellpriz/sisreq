<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EstatusRequerimentos Controller
 *
 * @property \App\Model\Table\EstatusRequerimentosTable $EstatusRequerimentos
 */
class EstatusRequerimentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $estatusRequerimentos = $this->paginate($this->EstatusRequerimentos);

        $this->set(compact('estatusRequerimentos'));
        $this->set('_serialize', ['estatusRequerimentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Estatus Requerimento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estatusRequerimento = $this->EstatusRequerimentos->get($id, [
            'contain' => []
        ]);

        $this->set('estatusRequerimento', $estatusRequerimento);
        $this->set('_serialize', ['estatusRequerimento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estatusRequerimento = $this->EstatusRequerimentos->newEntity();
        if ($this->request->is('post')) {
            $estatusRequerimento = $this->EstatusRequerimentos->patchEntity($estatusRequerimento, $this->request->data);
            if ($this->EstatusRequerimentos->save($estatusRequerimento)) {
                $this->Flash->success(__('The estatus requerimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estatus requerimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('estatusRequerimento'));
        $this->set('_serialize', ['estatusRequerimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estatus Requerimento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estatusRequerimento = $this->EstatusRequerimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estatusRequerimento = $this->EstatusRequerimentos->patchEntity($estatusRequerimento, $this->request->data);
            if ($this->EstatusRequerimentos->save($estatusRequerimento)) {
                $this->Flash->success(__('The estatus requerimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estatus requerimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('estatusRequerimento'));
        $this->set('_serialize', ['estatusRequerimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estatus Requerimento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estatusRequerimento = $this->EstatusRequerimentos->get($id);
        if ($this->EstatusRequerimentos->delete($estatusRequerimento)) {
            $this->Flash->success(__('The estatus requerimento has been deleted.'));
        } else {
            $this->Flash->error(__('The estatus requerimento could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
