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
            <?= $this->Html->link(__('List Acervos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="acervos form content">
            <?= $this->Form->create($acervo) ?>
            <fieldset>
                <legend><?= __('Add Acervo') ?></legend>
                <?php
                    echo $this->Form->control('nome_fantasia');
                    echo $this->Form->control('id_obra');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
