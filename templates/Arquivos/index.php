<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arquivo[]|\Cake\Collection\CollectionInterface $arquivos
 */
?>
<div class="arquivos index content">
    <?= $this->Html->link(__('New Arquivo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Arquivos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('caminho_arquivo') ?></th>
                    <th><?= $this->Paginator->sort('id_obra') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arquivos as $arquivo): ?>
                <tr>
                    <td><?= $this->Number->format($arquivo->id) ?></td>
                    <td><?= h($arquivo->caminho_arquivo) ?></td>
                    <td><?= $this->Number->format($arquivo->id_obra) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $arquivo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $arquivo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $arquivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arquivo->id)]) ?>
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
