<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cabinforme'), ['action' => 'edit', $cabinforme->numexp]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cabinforme'), ['action' => 'delete', $cabinforme->numexp], ['confirm' => __('Are you sure you want to delete # {0}?', $cabinforme->numexp)]) ?> </li>
        <li><?= $this->Html->link(__('List Cabinformes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cabinforme'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cabinformes view large-9 medium-8 columns content">
    <h3><?= h($cabinforme->numexp) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Numexp') ?></th>
            <td><?= $this->Number->format($cabinforme->numexp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estexpediente Numexp') ?></th>
            <td><?= $this->Number->format($cabinforme->estexpediente_numexp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Envio') ?></th>
            <td><?= h($cabinforme->fecha_envio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Recepcion') ?></th>
            <td><?= h($cabinforme->fecha_recepcion) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Valoracion Inf') ?></h4>
        <?= $this->Text->autoParagraph(h($cabinforme->valoracion_inf)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comentarios') ?></h4>
        <?= $this->Text->autoParagraph(h($cabinforme->comentarios)); ?>
    </div>
</div>
