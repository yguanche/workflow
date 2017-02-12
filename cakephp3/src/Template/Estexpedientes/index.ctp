<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estexpediente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estexpedientes index large-9 medium-8 columns content">
    <h3><?= __('Estexpedientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('numexp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('est_actual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_recepción') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_actual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dept_actual') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estexpedientes as $estexpediente): ?>
            <tr>
                <td><?= $this->Number->format($estexpediente->numexp) ?></td>
                <td><?= $estexpediente->has('user') ? $this->Html->link($estexpediente->user->id, ['controller' => 'Users', 'action' => 'view', $estexpediente->user->id]) : '' ?></td>
                <td><?= h($estexpediente->est_actual) ?></td>
                <td><?= h($estexpediente->fecha_recepción) ?></td>
                <td><?= h($estexpediente->user_actual) ?></td>
                <td><?= h($estexpediente->dept_actual) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estexpediente->numexp]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estexpediente->numexp]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estexpediente->numexp], ['confirm' => __('Are you sure you want to delete # {0}?', $estexpediente->numexp)]) ?>
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
