<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitante[]|\Cake\Collection\CollectionInterface $visitantes
 */
?>
<div class="visitantes index content">
    <?= $this->Html->link(__('New Visitante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Visitantes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('datanasc') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th><?= $this->Paginator->sort('sexo') ?></th>
                    <th><?= $this->Paginator->sort('visita_em') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visitantes as $visitante): ?>
                <tr>
                    <td><?= $this->Number->format($visitante->id) ?></td>
                    <td><?= h($visitante->nome) ?></td>
                    <td><?= h($visitante->datanasc) ?></td>
                    <td><?= h($visitante->email) ?></td>
                    <td><?= h($visitante->cpf) ?></td>
                    <td><?= h($visitante->sexo) ?></td>
                    <td><?= h($visitante->visita_em) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $visitante->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visitante->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visitante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitante->id)]) ?>
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
