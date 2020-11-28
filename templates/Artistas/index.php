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
                        <?= $this->Html->link(__('View'), ['action' => 'view', $artista->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artista->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artista->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
