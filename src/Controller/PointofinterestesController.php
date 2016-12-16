<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pointofinterestes Controller
 *
 * @property \App\Model\Table\PointofinterestesTable $Pointofinterestes
 */
class PointofinterestesController extends AppController
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
        $pointofinterestes = $this->paginate($this->Pointofinterestes);

        $this->set(compact('pointofinterestes'));
        $this->set('_serialize', ['pointofinterestes']);
    }

    /**
     * View method
     *
     * @param string|null $id Pointofintereste id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pointofintereste = $this->Pointofinterestes->get($id, [
            'contain' => ['Users', 'Municipalites']
        ]);

        $this->set('pointofintereste', $pointofintereste);
        $this->set('_serialize', ['pointofintereste']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pointofintereste = $this->Pointofinterestes->newEntity();
        if ($this->request->is('post')) {
            $pointofintereste = $this->Pointofinterestes->patchEntity($pointofintereste, $this->request->data);
            if ($this->Pointofinterestes->save($pointofintereste)) {
                $this->Flash->success(__('The pointofintereste has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pointofintereste could not be saved. Please, try again.'));
            }
        }
        $users = $this->Pointofinterestes->Users->find('list', ['limit' => 200]);
        $municipalites = $this->Pointofinterestes->Municipalites->find('list', ['limit' => 200]);
        $this->set(compact('pointofintereste', 'users', 'municipalites'));
        $this->set('_serialize', ['pointofintereste']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pointofintereste id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pointofintereste = $this->Pointofinterestes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pointofintereste = $this->Pointofinterestes->patchEntity($pointofintereste, $this->request->data);
            if ($this->Pointofinterestes->save($pointofintereste)) {
                $this->Flash->success(__('The pointofintereste has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pointofintereste could not be saved. Please, try again.'));
            }
        }
        $users = $this->Pointofinterestes->Users->find('list', ['limit' => 200]);
        $municipalites = $this->Pointofinterestes->Municipalites->find('list', ['limit' => 200]);
        $this->set(compact('pointofintereste', 'users', 'municipalites'));
        $this->set('_serialize', ['pointofintereste']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pointofintereste id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pointofintereste = $this->Pointofinterestes->get($id);
        if ($this->Pointofinterestes->delete($pointofintereste)) {
            $this->Flash->success(__('The pointofintereste has been deleted.'));
        } else {
            $this->Flash->error(__('The pointofintereste could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
