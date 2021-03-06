<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arquivo[]|\Cake\Collection\CollectionInterface $arquivos
 */
?>
<div class="arquivos index content">
    <?= $this->Html->link(__('Criar Arquivo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Arquivos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('caminho_arquivo') ?></th>
                    <th><?= $this->Paginator->sort('id_obra') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arquivos as $arquivo): ?>
                <tr>
                    <td><?= $this->Number->format($arquivo->id) ?></td>
                    <td><?= h($arquivo->caminho_arquivo) ?></td>
                    <td><?= $this->Number->format($arquivo->id_obra) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $arquivo->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $arquivo->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $arquivo->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $arquivo->id)]) ?>
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
