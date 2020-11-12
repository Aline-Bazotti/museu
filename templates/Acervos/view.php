<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Acervo $acervo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Acervo'), ['action' => 'edit', $acervo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Acervo'), ['action' => 'delete', $acervo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $acervo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Acervos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Acervo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="acervos view content">
            <h3><?= h($acervo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Fantasia') ?></th>
                    <td><?= h($acervo->nome_fantasia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($acervo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Obra') ?></th>
                    <td><?= $this->Number->format($acervo->id_obra) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
