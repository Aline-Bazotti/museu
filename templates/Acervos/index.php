<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Acervo[]|\Cake\Collection\CollectionInterface $acervos
 */
?>
<div class="acervos index content">
    <?= $this->Html->link(__('New Acervo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Acervos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_fantasia') ?></th>
                    <th><?= $this->Paginator->sort('id_obra') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($acervos as $acervo): ?>
                <tr>
                    <td><?= $this->Number->format($acervo->id) ?></td>
                    <td><?= h($acervo->nome_fantasia) ?></td>
                    <td><?= $this->Number->format($acervo->id_obra) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $acervo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $acervo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $acervo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $acervo->id)]) ?>
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
