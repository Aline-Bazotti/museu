<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Acervo $acervo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Acervo'), ['action' => 'edit', $acervo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Acervo'), ['action' => 'delete', $acervo->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $acervo->nome_fantasia), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Acervos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Criar Acervo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="acervos view content">
            <h3><?= h($acervo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Fantasia') ?></th>
                    <td><?= h($acervo->nome_fantasia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($acervo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Código da Obra') ?></th>
                    <td><?= $this->Number->format($acervo->id_obra) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
