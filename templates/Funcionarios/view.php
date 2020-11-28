<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Edit Funcionario'), ['action' => 'edit', $funcionario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Funcionario'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Funcionarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Criar Funcionario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="funcionarios view content">
            <h3><?= h($funcionario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($funcionario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($funcionario->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Senha') ?></th>
                    <td><?= h($funcionario->senha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($funcionario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nivel Acesso') ?></th>
                    <td><?= $this->Number->format($funcionario->nivel_acesso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado Em') ?></th>
                    <td><?= h($funcionario->criado_em) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
