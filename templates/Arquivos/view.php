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
            <?= $this->Html->link(__('Edit Arquivo'), ['action' => 'edit', $arquivo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Arquivo'), ['action' => 'delete', $arquivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arquivo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Arquivos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Criar Arquivo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="arquivos view content">
            <h3><?= h($arquivo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Caminho Arquivo') ?></th>
                    <td><?= h($arquivo->caminho_arquivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($arquivo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Obra') ?></th>
                    <td><?= $this->Number->format($arquivo->id_obra) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
