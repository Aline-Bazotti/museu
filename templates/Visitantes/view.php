<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitante $visitante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Edit Visitante'), ['action' => 'edit', $visitante->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Visitante'), ['action' => 'delete', $visitante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitante->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Visitantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Criar Visitante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visitantes view content">
            <h3><?= h($visitante->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($visitante->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($visitante->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($visitante->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexo') ?></th>
                    <td><?= h($visitante->sexo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($visitante->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datanasc') ?></th>
                    <td><?= h($visitante->datanasc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Visita Em') ?></th>
                    <td><?= h($visitante->visita_em) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
