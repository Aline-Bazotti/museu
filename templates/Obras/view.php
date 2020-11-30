<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Obra $obra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Obra'), ['action' => 'edit', $obra->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Obra'), ['action' => 'delete', $obra->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $obra->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Obras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Criar Obra'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="obras view content">
            <h3><?= h($obra->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($obra->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tecnica') ?></th>
                    <td><?= h($obra->tecnica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dimensoes') ?></th>
                    <td><?= h($obra->dimensoes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aquisicao') ?></th>
                    <td><?= h($obra->aquisicao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($obra->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($obra->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Artista') ?></th>
                    <td><?= $this->Number->format($obra->id_artista) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categoria') ?></th>
                    <td><?= $this->Number->format($obra->id_categoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Obra') ?></th>
                    <td><?= h($obra->data_obra) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
