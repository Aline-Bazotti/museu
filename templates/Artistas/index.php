<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artista[]|\Cake\Collection\CollectionInterface $artistas
 */
?>
<div class="artistas index content">
    <?= $this->Html->link(__('Criar Artista'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Artistas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('dados_biograficos') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artistas as $artista): ?>
                <tr>
                    <td><?= $this->Number->format($artista->id) ?></td>
                    <td><?= h($artista->nome) ?></td>
                    <td><?= h($artista->dados_biograficos) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $artista->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $artista->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $artista->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $artista->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeira')) ?>
            <?= $this->Paginator->prev('< ' .__('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
            <?= $this->Paginator->last(__('última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registros de um total de {{count}}')) ?></p>
    </div>
</div>
