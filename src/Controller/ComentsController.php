<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coments Controller
 *
 * @property \App\Model\Table\ComentsTable $Coments
 */
class ComentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Municipalites']
        ];
        $coments = $this->paginate($this->Coments);

        $this->set(compact('coments'));
        $this->set('_serialize', ['coments']);
    }

    /**
     * View method
     *
     * @param string|null $id Coment id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coment = $this->Coments->get($id, [
            'contain' => ['Users', 'Municipalites']
        ]);

        $this->set('coment', $coment);
        $this->set('_serialize', ['coment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coment = $this->Coments->newEntity();
        if ($this->request->is('post')) {
            $coment = $this->Coments->patchEntity($coment, $this->request->data);
            if ($this->Coments->save($coment)) {
                $this->Flash->success(__('The coment has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The coment could not be saved. Please, try again.'));
            }
        }
        $users = $this->Coments->Users->find('list', ['limit' => 200]);
        $municipalites = $this->Coments->Municipalites->find('list', ['limit' => 200]);
        $this->set(compact('coment', 'users', 'municipalites'));
        $this->set('_serialize', ['coment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Coment id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coment = $this->Coments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coment = $this->Coments->patchEntity($coment, $this->request->data);
            if ($this->Coments->save($coment)) {
                $this->Flash->success(__('The coment has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The coment could not be saved. Please, try again.'));
            }
        }
        $users = $this->Coments->Users->find('list', ['limit' => 200]);
        $municipalites = $this->Coments->Municipalites->find('list', ['limit' => 200]);
        $this->set(compact('coment', 'users', 'municipalites'));
        $this->set('_serialize', ['coment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Coment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coment = $this->Coments->get($id);
        if ($this->Coments->delete($coment)) {
            $this->Flash->success(__('The coment has been deleted.'));
        } else {
            $this->Flash->error(__('The coment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
