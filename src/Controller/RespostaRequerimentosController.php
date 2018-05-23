<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RespostaRequerimentos Controller
 *
 * @property \App\Model\Table\RespostaRequerimentosTable $RespostaRequerimentos
 */
class RespostaRequerimentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $respostaRequerimentos = $this->paginate($this->RespostaRequerimentos);

        $this->set(compact('respostaRequerimentos'));
        $this->set('_serialize', ['respostaRequerimentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Resposta Requerimento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $respostaRequerimento = $this->RespostaRequerimentos->get($id, [
            'contain' => []
        ]);

        $this->set('respostaRequerimento', $respostaRequerimento);
        $this->set('_serialize', ['respostaRequerimento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $respostaRequerimento = $this->RespostaRequerimentos->newEntity();
        if ($this->request->is('post')) {
            $respostaRequerimento = $this->RespostaRequerimentos->patchEntity($respostaRequerimento, $this->request->data);
            if ($this->RespostaRequerimentos->save($respostaRequerimento)) {
                $this->Flash->success(__('The resposta requerimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The resposta requerimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('respostaRequerimento'));
        $this->set('_serialize', ['respostaRequerimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Resposta Requerimento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $respostaRequerimento = $this->RespostaRequerimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $respostaRequerimento = $this->RespostaRequerimentos->patchEntity($respostaRequerimento, $this->request->data);
            if ($this->RespostaRequerimentos->save($respostaRequerimento)) {
                $this->Flash->success(__('The resposta requerimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The resposta requerimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('respostaRequerimento'));
        $this->set('_serialize', ['respostaRequerimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Resposta Requerimento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $respostaRequerimento = $this->RespostaRequerimentos->get($id);
        if ($this->RespostaRequerimentos->delete($respostaRequerimento)) {
            $this->Flash->success(__('The resposta requerimento has been deleted.'));
        } else {
            $this->Flash->error(__('The resposta requerimento could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
