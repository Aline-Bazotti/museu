<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Obras Controller
 *
 * @property \App\Model\Table\ObrasTable $Obras
 * @method \App\Model\Entity\Obra[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ObrasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $obras = $this->paginate($this->Obras);

        $this->set(compact('obras'));
    }

    /**
     * View method
     *
     * @param string|null $id Obra id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $obra = $this->Obras->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('obra'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $obra = $this->Obras->newEmptyEntity();
        if ($this->request->is('post')) {
            $obra = $this->Obras->patchEntity($obra, $this->request->getData());
            if ($this->Obras->save($obra)) {
                $this->Flash->success(__('The obra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The obra could not be saved. Please, try again.'));
        }
        $this->set(compact('obra'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Obra id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $obra = $this->Obras->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $obra = $this->Obras->patchEntity($obra, $this->request->getData());
            if ($this->Obras->save($obra)) {
                $this->Flash->success(__('The obra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The obra could not be saved. Please, try again.'));
        }
        $this->set(compact('obra'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Obra id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $obra = $this->Obras->get($id);
        if ($this->Obras->delete($obra)) {
            $this->Flash->success(__('The obra has been deleted.'));
        } else {
            $this->Flash->error(__('The obra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
