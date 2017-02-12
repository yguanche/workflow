<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Regsolicitante'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipolicencias'), ['controller' => 'Tipolicencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipolicencia'), ['controller' => 'Tipolicencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regsolicitantes index large-9 medium-8 columns content">
    <h3><?= __('Regsolicitantes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('numreg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipolicencia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dni') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_licencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_in') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_out') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_actual_gest') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($regsolicitantes as $regsolicitante): ?>
            <tr>
                <td><?= $this->Number->format($regsolicitante->numreg) ?></td>
                <td><?= $regsolicitante->has('tipolicencia') ? $this->Html->link($regsolicitante->tipolicencia->id, ['controller' => 'Tipolicencias', 'action' => 'view', $regsolicitante->tipolicencia->id]) : '' ?></td>
                <td><?= h($regsolicitante->dni) ?></td>
                <td><?= h($regsolicitante->nombre) ?></td>
                <td><?= h($regsolicitante->fecha) ?></td>
                <td><?= $this->Number->format($regsolicitante->tipo_licencia) ?></td>
                <td><?= h($regsolicitante->fecha_in) ?></td>
                <td><?= h($regsolicitante->fecha_out) ?></td>
                <td><?= h($regsolicitante->usuario_actual_gest) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $regsolicitante->numreg]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $regsolicitante->numreg]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $regsolicitante->numreg], ['confirm' => __('Are you sure you want to delete # {0}?', $regsolicitante->numreg)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
