<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exibico $exibico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Listar Exibicoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="exibicoes form content">
            <?= $this->Form->create($exibico) ?>
            <fieldset>
                <legend><?= __('Criar Exibico') ?></legend>
                <?php
                    echo $this->Form->control('corredor');
                    echo $this->Form->control('andar');
                    echo $this->Form->control('id_obra');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
