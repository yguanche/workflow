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
<!-- mostramos la vista de informes del cabildo -->
<div class="well">
    <h2>
        Informe de Cabildo Nº <?= h($cabinforme->numexp) ?>
    </h2>
     <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
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
    </div>
    <h3>
        <?= __('Valoracion Inf') ?>
    </h3>
     <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
            <tr>
                <td><?= $this->Text->autoParagraph(h($cabinforme->valoracion_inf)); ?></td>
            </tr>
        </table>
    </div>
    <h3>
        <?= __('Comentarios') ?>
    </h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
            <tr>
                <td><?= $this->Text->autoParagraph(h($cabinforme->comentarios)); ?></td>
            </tr>
        </table>
    </div>
</div>
