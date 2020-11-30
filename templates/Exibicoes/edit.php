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
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $exibico->id],
                ['confirm' => __('Você tem certeza que deseja apagar {0}?', $exibico->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Exibicoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="exibicoes form content">
            <?= $this->Form->create($exibico) ?>
            <fieldset>
                <legend><?= __('Editar Exibico') ?></legend>
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
