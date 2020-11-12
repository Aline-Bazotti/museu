<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Obra[]|\Cake\Collection\CollectionInterface $obras
 */
?>
<div class="obras index content">
    <?= $this->Html->link(__('New Obra'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Obras') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('id_artista') ?></th>
                    <th><?= $this->Paginator->sort('data_obra') ?></th>
                    <th><?= $this->Paginator->sort('tecnica') ?></th>
                    <th><?= $this->Paginator->sort('dimensoes') ?></th>
                    <th><?= $this->Paginator->sort('aquisicao') ?></th>
                    <th><?= $this->Paginator->sort('id_categoria') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($obras as $obra): ?>
                <tr>
                    <td><?= $this->Number->format($obra->id) ?></td>
                    <td><?= h($obra->titulo) ?></td>
                    <td><?= $this->Number->format($obra->id_artista) ?></td>
                    <td><?= h($obra->data_obra) ?></td>
                    <td><?= h($obra->tecnica) ?></td>
                    <td><?= h($obra->dimensoes) ?></td>
                    <td><?= h($obra->aquisicao) ?></td>
                    <td><?= $this->Number->format($obra->id_categoria) ?></td>
                    <td><?= h($obra->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $obra->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $obra->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $obra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $obra->id)]) ?>
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
