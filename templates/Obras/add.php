<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Obra $obra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Obras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="obras form content">
            <?= $this->Form->create($obra) ?>
            <fieldset>
                <legend><?= __('Add Obra') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('id_artista');
                    echo $this->Form->control('data_obra', ['empty' => true]);
                    echo $this->Form->control('tecnica');
                    echo $this->Form->control('dimensoes');
                    echo $this->Form->control('aquisicao');
                    echo $this->Form->control('id_categoria');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
