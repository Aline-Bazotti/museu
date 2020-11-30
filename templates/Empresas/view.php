<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Empresa'), ['action' => 'edit', $empresa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $empresa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Criar Empresa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empresas view content">
            <h3><?= h($empresa->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Razao Social') ?></th>
                    <td><?= h($empresa->razao_social) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome Fantasia') ?></th>
                    <td><?= h($empresa->nome_fantasia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cnpj') ?></th>
                    <td><?= h($empresa->cnpj) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logo') ?></th>
                    <td><?= h($empresa->logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criada Em') ?></th>
                    <td><?= h($empresa->criada_em) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
