<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Histlicencia'), ['action' => 'edit', $histlicencia->numexp]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Histlicencia'), ['action' => 'delete', $histlicencia->numexp], ['confirm' => __('Are you sure you want to delete # {0}?', $histlicencia->numexp)]) ?> </li>
        <li><?= $this->Html->link(__('List Histlicencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Histlicencia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<!-- mostramos la vista del histórico de licencias -->
<div class="well">
    <h2>
        Histórico de Licencias Nº <?= h($histlicencia->numexp) ?>
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
            <tr>
                <th scope="row"><?= __('Numexp') ?></th>
                <td><?= $this->Number->format($histlicencia->numexp) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Fecha Solicitud') ?></th>
                <td><?= h($histlicencia->fecha_solicitud) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Fecha Exp') ?></th>
                <td><?= h($histlicencia->fecha_exp) ?></td>
            </tr>
        </table>
    </div>
</div>
