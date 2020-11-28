<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empresa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empresas form content">
            <?= $this->Form->create($empresa) ?>
            <fieldset>
                <legend><?= __('Edit Empresa') ?></legend>
                <?php
                    echo $this->Form->control('razao_social');
                    echo $this->Form->control('nome_fantasia');
                    echo $this->Form->control('cnpj');
                    echo $this->Form->control('logo');
                    echo $this->Form->control('criada_em');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
