<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Obra[]|\Cake\Collection\CollectionInterface $obras
 */
?>
<div class="obras index content">
    <?= $this->Html->link(__('Criar Obra'), ['action' => 'add'], ['class' => 'button float-right']) ?>
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
                    <th class="actions"><?= __('Ações') ?></th>
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
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $obra->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $obra->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $obra->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $obra->id)]) ?>
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
