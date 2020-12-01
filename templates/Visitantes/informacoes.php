<?php
/**
 * @var \App\View\AppView $this
 * @var $numero_visitas
 * @var $media_idade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Listar Visitantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Criar Visitante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visitantes view content">
            <h3>Informações das visitas</h3>
            <div class="row-center">
                <div class="column">
                    <h5>Visitas: <?= h($numero_visitas) ?></h5>
                </div>
                <div class="column">
                    <h5>Média de idade dos visitantes: <?= h($media_idade) ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>
