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
            <?= $this->Html->link(__('Listar Funcionarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="funcionarios form content">
            <?= $this->Form->create($funcionario) ?>
            <fieldset>
                <legend><?= __('Criar Funcionario') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('nivel_acesso');
                    echo $this->Form->control('email');
                    echo $this->Form->control('senha');
                    echo $this->Form->control('criado_em');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
