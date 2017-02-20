<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Regsolicitante'), ['action' => 'edit', $regsolicitante->numreg]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Regsolicitante'), ['action' => 'delete', $regsolicitante->numreg], ['confirm' => __('Are you sure you want to delete # {0}?', $regsolicitante->numreg)]) ?> </li>
        <li><?= $this->Html->link(__('List Regsolicitantes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regsolicitante'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipolicencias'), ['controller' => 'Tipolicencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipolicencia'), ['controller' => 'Tipolicencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<!-- mostramos la vista del solicitante -->
<div class="well">
    <h2>
        Solicitante Nº <?= h($regsolicitante->numreg) ?>
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table" border="1">
            <tr>
                <th scope="row"><?= __('Tipolicencia') ?></th>
                <td><?= $regsolicitante->has('tipolicencia') ? $this->Html->link($regsolicitante->tipolicencia->id, ['controller' => 'Tipolicencias', 'action' => 'view', $regsolicitante->tipolicencia->id]) : '' ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Dni') ?></th>
                <td><?= h($regsolicitante->dni) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Nombre') ?></th>
                <td><?= h($regsolicitante->nombre) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Usuario Actual Gest') ?></th>
                <td><?= h($regsolicitante->usuario_actual_gest) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Numreg') ?></th>
                <td><?= $this->Number->format($regsolicitante->numreg) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Tipo Licencia') ?></th>
                <td><?= $this->Number->format($regsolicitante->tipo_licencia) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Fecha') ?></th>
                <td><?= h($regsolicitante->fecha) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Fecha In') ?></th>
                <td><?= h($regsolicitante->fecha_in) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Fecha Out') ?></th>
                <td><?= h($regsolicitante->fecha_out) ?></td>
            </tr>
        </table>
    </div>
    <div class="row">
         <div class="col-md-12">
            <div class="page-header">
                <h3>
                    <?= __('Doc Presentada') ?>
                </h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td><?= $this->Text->autoParagraph(h($regsolicitante->doc_presentada)); ?></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

