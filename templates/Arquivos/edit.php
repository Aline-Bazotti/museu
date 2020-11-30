<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arquivo $arquivo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $arquivo->id],
                ['confirm' => __('Você tem certeza que deseja apagar {0}?', $arquivo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Arquivos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="arquivos form content">
            <?= $this->Form->create($arquivo) ?>
            <fieldset>
                <legend><?= __('Editar Arquivo') ?></legend>
                <?php
                    echo $this->Form->control('caminho_arquivo');
                    echo $this->Form->control('id_obra');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
