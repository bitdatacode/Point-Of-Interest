<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Municipalites Controller
 *
 * @property \App\Model\Table\MunicipalitesTable $Municipalites
 */
class MunicipalitesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups']
        ];
        $municipalites = $this->paginate($this->Municipalites);

        $this->set(compact('municipalites'));
        $this->set('_serialize', ['municipalites']);
    }

    /**
     * View method
     *
     * @param string|null $id Municipalite id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $municipalite = $this->Municipalites->get($id, [
            'contain' => ['Groups']
        ]);

        $this->set('municipalite', $municipalite);
        $this->set('_serialize', ['municipalite']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $municipalite = $this->Municipalites->newEntity();
        if ($this->request->is('post')) {
            $municipalite = $this->Municipalites->patchEntity($municipalite, $this->request->data);
            if ($this->Municipalites->save($municipalite)) {
                $this->Flash->success(__('The municipalite has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The municipalite could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Municipalites->Groups->find('list', ['limit' => 200]);
        $this->set(compact('municipalite', 'groups'));
        $this->set('_serialize', ['municipalite']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Municipalite id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $municipalite = $this->Municipalites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $municipalite = $this->Municipalites->patchEntity($municipalite, $this->request->data);
            if ($this->Municipalites->save($municipalite)) {
                $this->Flash->success(__('The municipalite has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The municipalite could not be saved. Please, try again.'));
            }
        }
        $groups = $this->Municipalites->Groups->find('list', ['limit' => 200]);
        $this->set(compact('municipalite', 'groups'));
        $this->set('_serialize', ['municipalite']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Municipalite id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $municipalite = $this->Municipalites->get($id);
        if ($this->Municipalites->delete($municipalite)) {
            $this->Flash->success(__('The municipalite has been deleted.'));
        } else {
            $this->Flash->error(__('The municipalite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
