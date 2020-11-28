<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artista $artista
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artista->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artista->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Artistas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artistas form content">
            <?= $this->Form->create($artista) ?>
            <fieldset>
                <legend><?= __('Edit Artista') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('dados_biograficos');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
