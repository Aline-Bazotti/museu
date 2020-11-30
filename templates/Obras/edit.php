<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Obra $obra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $obra->id],
                ['confirm' => __('Você tem certeza que deseja apagar {0}?', $obra->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Obras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="obras form content">
            <?= $this->Form->create($obra) ?>
            <fieldset>
                <legend><?= __('Editar Obra') ?></legend>
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
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
