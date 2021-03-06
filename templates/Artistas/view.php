<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artista $artista
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Artista'), ['action' => 'edit', $artista->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Artista'), ['action' => 'delete', $artista->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $artista->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Artistas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Criar Artista'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artistas view content">
            <h3><?= h($artista->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($artista->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dados Biograficos') ?></th>
                    <td><?= h($artista->dados_biograficos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($artista->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
