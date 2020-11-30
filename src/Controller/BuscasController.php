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
            
            $listaCodigoCategoria = TableRegistry::getTableLocator()->get('Categorias')->find()->select(['id'])->where([
                 'Categorias.nome iLIKE' => '%'.$termo.'%']
            );

            $obras = TableRegistry::getTableLocator()->get('Obras')->find()->where(
                ['or' => ['Obras.titulo iLIKE' => '%'.$termo.'%', 'Obras.id_categoria in' => $listaCodigoCategoria]]);

            foreach ($obras as $obra) {
                $busca = $this->Buscas->newEmptyEntity();
                $busca->titulo = $obra->titulo;
                $busca->descricao = $obra->tecnica;
                $busca->link_view = "/obras/view/".$obra->id;
                array_push($buscas, $busca);
            }

            $artistas = TableRegistry::getTableLocator()->get('Artistas')->find('all', [
                'conditions' => ['Artistas.nome iLIKE' => '%'.$termo.'%']
            ]);

            foreach ($artistas as $artista) {
                $busca = $this->Buscas->newEmptyEntity();
                $busca->titulo = $artista->nome;
                $busca->descricao = $artista->dados_biograficos;
                $busca->link_view = "/artistas/view/".$artista->id;
                array_push($buscas, $busca);
            }

            $this->set(compact('buscas'));
            $this->set(compact('termo'));
        }
    }

}
