<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Acervo[]|\Cake\Collection\CollectionInterface $acervos
 */
?>
<div class="acervos index content">
    <?= $this->Html->link(__('Criar Acervo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Acervos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id',  ['label' => 'Código']) ?></th>
                    <th><?= $this->Paginator->sort('nome_fantasia',  ['label' => 'Nome']) ?></th>
                    <th><?= $this->Paginator->sort('id_obra') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($acervos as $acervo): ?>
                <tr>
                    <td><?= $this->Number->format($acervo->id) ?></td>
                    <td><?= h($acervo->nome_fantasia) ?></td>
                    <td><?= $this->Number->format($acervo->id_obra) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $acervo->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $acervo->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $acervo->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $acervo->id)]) ?>
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
