<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exibico[]|\Cake\Collection\CollectionInterface $exibicoes
 */
?>
<div class="exibicoes index content">
    <?= $this->Html->link(__('Criar Exibico'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Exibicoes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('corredor') ?></th>
                    <th><?= $this->Paginator->sort('andar') ?></th>
                    <th><?= $this->Paginator->sort('id_obra') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
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
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $exibico->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $exibico->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $exibico->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $exibico->id)]) ?>
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
