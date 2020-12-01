<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitante[]|\Cake\Collection\CollectionInterface $visitantes
 */
?>
<div class="visitantes index content">
    <div class="row">
        <div class="column"><h3><?= __('Visitantes') ?></h3></div>
        <div class="column column-offset-50"><?= $this->Html->link(__('Informações'), ['action' => 'informacoes'], ['class' => 'button float']) ?></div>
        <div class="column "><?= $this->Html->link(__('Criar Visitante'), ['action' => 'add'], ['class' => 'button float-right']) ?></div>
    </div>
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
                    <th class="actions"><?= __('Ações') ?></th>
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
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $visitante->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $visitante->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $visitante->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $visitante->id)]) ?>
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
