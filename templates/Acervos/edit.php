<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Acervo $acervo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $acervo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $acervo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Acervos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="acervos form content">
            <?= $this->Form->create($acervo) ?>
            <fieldset>
                <legend><?= __('Edit Acervo') ?></legend>
                <?php
                    echo $this->Form->control('nome_fantasia');
                    echo $this->Form->control('id_obra');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
