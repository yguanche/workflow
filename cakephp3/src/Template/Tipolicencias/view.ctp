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
<div class="tipolicencias view large-9 medium-8 columns content">
    <h3><?= h($tipolicencia->id) ?></h3>
    <table class="vertical-table">
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
    <div class="row">
        <h4><?= __('Doc Necesaria') ?></h4>
        <?= $this->Text->autoParagraph(h($tipolicencia->doc_necesaria)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Regsolicitantes') ?></h4>
        <?php if (!empty($tipolicencia->regsolicitantes)): ?>
        <table cellpadding="0" cellspacing="0">
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
                    <?= $this->Html->link(__('View'), ['controller' => 'Regsolicitantes', 'action' => 'view', $regsolicitantes->numreg]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Regsolicitantes', 'action' => 'edit', $regsolicitantes->numreg]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Regsolicitantes', 'action' => 'delete', $regsolicitantes->numreg], ['confirm' => __('Are you sure you want to delete # {0}?', $regsolicitantes->numreg)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
