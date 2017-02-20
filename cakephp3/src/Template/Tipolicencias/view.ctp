<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipolicencia'), ['action' => 'edit', $tipolicencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipolicencia'), ['action' => 'delete', $tipolicencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipolicencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipolicencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipolicencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regsolicitantes'), ['controller' => 'Regsolicitantes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Regsolicitante'), ['controller' => 'Regsolicitantes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<!-- mostramos la vista del usuario -->
<div class="well">
    <h2>
        Tipo de Licencia Nº <?= h($tipolicencia->id) ?>
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
            <tr>
                <th scope="row"><?= __('Tipolicencia') ?></th>
                <td><?= h($tipolicencia->tipolicencia) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($tipolicencia->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Tasas') ?></th>
                <td><?= $this->Number->format($tipolicencia->tasas) ?></td>
            </tr>
        </table>
    </div>
    <h3>
        <?= __('Doc Necesaria') ?>
    </h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
            <tr>
                <td><?= $this->Text->autoParagraph(h($tipolicencia->doc_necesaria)); ?></td>
            </tr>
        </table>
    </div>
    <h3>
        <?= __('Related Regsolicitantes') ?>
    </h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table" cellpadding="0" cellspacing="0">
            <?php if (!empty($tipolicencia->regsolicitantes)): ?>
            <tr>
                <th scope="col"><?= __('Numreg') ?></th>
                <th scope="col"><?= __('Tipolicencia Id') ?></th>
                <th scope="col"><?= __('Dni') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Tipo Licencia') ?></th>
                <th scope="col"><?= __('Doc Presentada') ?></th>
                <th scope="col"><?= __('Fecha In') ?></th>
                <th scope="col"><?= __('Fecha Out') ?></th>
                <th scope="col"><?= __('Usuario Actual Gest') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tipolicencia->regsolicitantes as $regsolicitantes): ?>
            <tr>
                <td><?= h($regsolicitantes->numreg) ?></td>
                <td><?= h($regsolicitantes->tipolicencia_id) ?></td>
                <td><?= h($regsolicitantes->dni) ?></td>
                <td><?= h($regsolicitantes->nombre) ?></td>
                <td><?= h($regsolicitantes->fecha) ?></td>
                <td><?= h($regsolicitantes->tipo_licencia) ?></td>
                <td><?= h($regsolicitantes->doc_presentada) ?></td>
                <td><?= h($regsolicitantes->fecha_in) ?></td>
                <td><?= h($regsolicitantes->fecha_out) ?></td>
                <td><?= h($regsolicitantes->usuario_actual_gest) ?></td>
                <td class="actions">
                    <?= $this->Html->link('Ver', ['controller' => 'Regsolicitantes', 'action' => 'view', $regsolicitantes->numreg], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['controller' => 'Regsolicitantes', 'action' => 'edit', $regsolicitantes->numreg] , ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink('Delete', ['controller' => 'Regsolicitantes', 'action' => 'delete', $regsolicitantes->numreg], ['confirm' => 'Eliminar producto # {0]?',  $regsolicitantes->numreg, 'class' => 'btn btn-sm btn-danger']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</div>
