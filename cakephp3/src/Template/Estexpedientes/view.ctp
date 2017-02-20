<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estexpediente'), ['action' => 'edit', $estexpediente->numexp]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estexpediente'), ['action' => 'delete', $estexpediente->numexp], ['confirm' => __('Are you sure you want to delete # {0}?', $estexpediente->numexp)]) ?> </li>
        <li><?= $this->Html->link(__('List Estexpedientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estexpediente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<!-- mostramos la vista del estado del expediente -->
<div class="well">
    <h2>
        Estado del expediente Nº <?= h($estexpediente->numexp) ?>
    </h2>
     <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
            <tr>
                <th scope="row"><?= __('User') ?></th>
                <td><?= $estexpediente->has('user') ? $this->Html->link($estexpediente->user->id, ['controller' => 'Users', 'action' => 'view', $estexpediente->user->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Est Actual') ?></th>
                <td><?= h($estexpediente->est_actual) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('User Actual') ?></th>
                <td><?= h($estexpediente->user_actual) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Dept Actual') ?></th>
                <td><?= h($estexpediente->dept_actual) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Numexp') ?></th>
                <td><?= $this->Number->format($estexpediente->numexp) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Fecha Recepción') ?></th>
                <td><?= h($estexpediente->fecha_recepción) ?></td>
            </tr>
        </table>
    </div>
</div>
