<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipolicencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regsolicitantes'), ['controller' => 'Regsolicitantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regsolicitante'), ['controller' => 'Regsolicitantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipolicencias index large-9 medium-8 columns content">
    <h3><?= __('Tipolicencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipolicencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tasas') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipolicencias as $tipolicencia): ?>
            <tr>
                <td><?= $this->Number->format($tipolicencia->id) ?></td>
                <td><?= h($tipolicencia->tipolicencia) ?></td>
                <td><?= $this->Number->format($tipolicencia->tasas) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipolicencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipolicencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipolicencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipolicencia->id)]) ?>
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
