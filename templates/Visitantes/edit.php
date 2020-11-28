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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $visitante->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $visitante->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Visitantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visitantes form content">
            <?= $this->Form->create($visitante) ?>
            <fieldset>
                <legend><?= __('Edit Visitante') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('datanasc');
                    echo $this->Form->control('email');
                    echo $this->Form->control('cpf');
                    echo $this->Form->control('sexo');
                    echo $this->Form->control('visita_em');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
