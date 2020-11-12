<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Exibicoes Controller
 *
 * @property \App\Model\Table\ExibicoesTable $Exibicoes
 * @method \App\Model\Entity\Exibico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExibicoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $exibicoes = $this->paginate($this->Exibicoes);

        $this->set(compact('exibicoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Exibico id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $exibico = $this->Exibicoes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('exibico'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $exibico = $this->Exibicoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $exibico = $this->Exibicoes->patchEntity($exibico, $this->request->getData());
            if ($this->Exibicoes->save($exibico)) {
                $this->Flash->success(__('The exibico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exibico could not be saved. Please, try again.'));
        }
        $this->set(compact('exibico'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Exibico id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $exibico = $this->Exibicoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $exibico = $this->Exibicoes->patchEntity($exibico, $this->request->getData());
            if ($this->Exibicoes->save($exibico)) {
                $this->Flash->success(__('The exibico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exibico could not be saved. Please, try again.'));
        }
        $this->set(compact('exibico'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Exibico id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $exibico = $this->Exibicoes->get($id);
        if ($this->Exibicoes->delete($exibico)) {
            $this->Flash->success(__('The exibico has been deleted.'));
        } else {
            $this->Flash->error(__('The exibico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
