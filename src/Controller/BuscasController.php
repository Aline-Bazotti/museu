<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * Buscas Controller
 * @property \App\Model\Table\BuscasTable $Buscas
 */
class BuscasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        if ($this->request->is('get')) {
            

            $buscas = array();

            $termo = $this->request->getQuery('termo');
            $this->log($termo);
            $obras = TableRegistry::getTableLocator()->get('Obras')->find('all', [
                'conditions' => ['Obras.titulo iLIKE' => '%'.$termo.'%']
            ]);

            foreach ($obras as $obra) {
                $busca = $this->Buscas->newEmptyEntity();
                $busca->titulo = $obra->titulo;
                $busca->descricao = $obra->tecnica;
                $busca->link_view = "/obras/view/".$obra->id;
                array_push($buscas, $busca);
            }

            $this->set(compact('buscas'));
            $this->set(compact('termo'));
        }
    }

}
