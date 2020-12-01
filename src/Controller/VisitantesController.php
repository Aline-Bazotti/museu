<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Visitantes Controller
 *
 * @property \App\Model\Table\VisitantesTable $Visitantes
 * @method \App\Model\Entity\Visitante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VisitantesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $visitantes = $this->paginate($this->Visitantes);

        $this->set(compact('visitantes'));
    }

    private function calcularIdade($dataNascimento){
        $interval =$dataNascimento->diff( new \DateTime( date('Y-m-d') ) );

        return $interval->format('%Y');
    }

     /**
     * Informacoes method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function informacoes()
    {
        $visitantes = $this->Visitantes->find();

        $visitantes_idades = array();
        $visitantes_quantidade = 0;

        foreach ($visitantes as $visitante) {
            array_push($visitantes_idades, $this->calcularIdade($visitante->datanasc));
            $visitantes_quantidade++;
        }

        $numero_visitas = $visitantes_quantidade;

        if($numero_visitas > 0 ){
        
            $media_idade = array_sum($visitantes_idades) / $numero_visitas;

        } else {

            $media_idade = 0;
        }

        $this->set(compact('media_idade'));
        $this->set(compact('numero_visitas'));
    }

    /**
     * View method
     *
     * @param string|null $id Visitante id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visitante = $this->Visitantes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('visitante'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visitante = $this->Visitantes->newEmptyEntity();
        if ($this->request->is('post')) {
            $visitante = $this->Visitantes->patchEntity($visitante, $this->request->getData());
            if ($this->Visitantes->save($visitante)) {
                $this->Flash->success(__('The visitante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visitante could not be saved. Please, try again.'));
        }
        $this->set(compact('visitante'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Visitante id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visitante = $this->Visitantes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visitante = $this->Visitantes->patchEntity($visitante, $this->request->getData());
            if ($this->Visitantes->save($visitante)) {
                $this->Flash->success(__('The visitante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visitante could not be saved. Please, try again.'));
        }
        $this->set(compact('visitante'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Visitante id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visitante = $this->Visitantes->get($id);
        if ($this->Visitantes->delete($visitante)) {
            $this->Flash->success(__('The visitante has been deleted.'));
        } else {
            $this->Flash->error(__('The visitante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
