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
<div class="histlicencias view large-9 medium-8 columns content">
    <h3><?= h($histlicencia->numexp) ?></h3>
    <table class="vertical-table">
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
