<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exibico[]|\Cake\Collection\CollectionInterface $exibicoes
 */
?>
<div class="exibicoes index content">
    <?= $this->Html->link(__('New Exibico'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Exibicoes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('corredor') ?></th>
                    <th><?= $this->Paginator->sort('andar') ?></th>
                    <th><?= $this->Paginator->sort('id_obra') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($exibicoes as $exibico): ?>
                <tr>
                    <td><?= $this->Number->format($exibico->id) ?></td>
                    <td><?= h($exibico->corredor) ?></td>
                    <td><?= $this->Number->format($exibico->andar) ?></td>
                    <td><?= $this->Number->format($exibico->id_obra) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $exibico->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $exibico->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $exibico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exibico->id)]) ?>
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
