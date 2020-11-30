<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exibico $exibico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Exibico'), ['action' => 'edit', $exibico->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Exibico'), ['action' => 'delete', $exibico->id], ['confirm' => __('Você tem certeza que deseja apagar {0}?', $exibico->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Exibicoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Criar Exibico'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="exibicoes view content">
            <h3><?= h($exibico->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Corredor') ?></th>
                    <td><?= h($exibico->corredor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($exibico->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Andar') ?></th>
                    <td><?= $this->Number->format($exibico->andar) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Obra') ?></th>
                    <td><?= $this->Number->format($exibico->id_obra) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
