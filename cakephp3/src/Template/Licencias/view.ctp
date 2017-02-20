<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Licencia'), ['action' => 'edit', $licencia->numexp]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Licencia'), ['action' => 'delete', $licencia->numexp], ['confirm' => __('Are you sure you want to delete # {0}?', $licencia->numexp)]) ?> </li>
        <li><?= $this->Html->link(__('List Licencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Licencia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<!-- mostramos la vista de las licencias -->
<div class="well">
    <h2>
        Licencia Nº <?= h($licencia->numexp) ?>
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
            <tr>
                <th scope="row"><?= __('Numreg') ?></th>
                <td><?= h($licencia->numreg) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Ubicacion') ?></th>
                <td><?= h($licencia->ubicacion) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Datos Fisicos Local') ?></th>
                <td><?= h($licencia->datos_fisicos_local) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('User Gestiona') ?></th>
                <td><?= h($licencia->user_gestiona) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Numexp') ?></th>
                <td><?= $this->Number->format($licencia->numexp) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Estexpediente Numexp') ?></th>
                <td><?= $this->Number->format($licencia->estexpediente_numexp) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Histlicencia Numexp') ?></th>
                <td><?= $this->Number->format($licencia->histlicencia_numexp) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Regsolicitante Numreg') ?></th>
                <td><?= $this->Number->format($licencia->regsolicitante_numreg) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Fecha In') ?></th>
                <td><?= h($licencia->fecha_in) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Fecha Out') ?></th>
                <td><?= h($licencia->fecha_out) ?></td>
            </tr>
        </table>
    </div>
    <h3>
        <?= __('Apl Comerc Lic') ?>
    </h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
            <tr>
                <td><?= $this->Text->autoParagraph(h($licencia->apl_comerc_lic)); ?></td>
            </tr>
        </table>
    </div>
</div>
