<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa[]|\Cake\Collection\CollectionInterface $empresas
 */
?>
<div class="empresas index content">
    <?= $this->Html->link(__('Criar Empresa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empresas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('razao_social') ?></th>
                    <th><?= $this->Paginator->sort('nome_fantasia') ?></th>
                    <th><?= $this->Paginator->sort('cnpj') ?></th>
                    <th><?= $this->Paginator->sort('logo') ?></th>
                    <th><?= $this->Paginator->sort('criada_em') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empresas as $empresa): ?>
                <tr>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                    <td><?= h($empresa->razao_social) ?></td>
                    <td><?= h($empresa->nome_fantasia) ?></td>
                    <td><?= h($empresa->cnpj) ?></td>
                    <td><?= h($empresa->logo) ?></td>
                    <td><?= h($empresa->criada_em) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $empresa->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $empresa->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $empresa->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $empresa->id)]) ?>
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
