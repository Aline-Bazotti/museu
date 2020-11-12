<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arquivo $arquivo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $arquivo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $arquivo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Arquivos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="arquivos form content">
            <?= $this->Form->create($arquivo) ?>
            <fieldset>
                <legend><?= __('Edit Arquivo') ?></legend>
                <?php
                    echo $this->Form->control('caminho_arquivo');
                    echo $this->Form->control('id_obra');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
