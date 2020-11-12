<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Acervos Controller
 *
 * @property \App\Model\Table\AcervosTable $Acervos
 * @method \App\Model\Entity\Acervo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AcervosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $acervos = $this->paginate($this->Acervos);

        $this->set(compact('acervos'));
    }

    /**
     * View method
     *
     * @param string|null $id Acervo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $acervo = $this->Acervos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('acervo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $acervo = $this->Acervos->newEmptyEntity();
        if ($this->request->is('post')) {
            $acervo = $this->Acervos->patchEntity($acervo, $this->request->getData());
            if ($this->Acervos->save($acervo)) {
                $this->Flash->success(__('The acervo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acervo could not be saved. Please, try again.'));
        }
        $this->set(compact('acervo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Acervo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $acervo = $this->Acervos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $acervo = $this->Acervos->patchEntity($acervo, $this->request->getData());
            if ($this->Acervos->save($acervo)) {
                $this->Flash->success(__('The acervo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The acervo could not be saved. Please, try again.'));
        }
        $this->set(compact('acervo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Acervo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $acervo = $this->Acervos->get($id);
        if ($this->Acervos->delete($acervo)) {
            $this->Flash->success(__('The acervo has been deleted.'));
        } else {
            $this->Flash->error(__('The acervo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
