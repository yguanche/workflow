<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Inftecnico'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inftecnico index large-9 medium-8 columns content">
    <h3><?= __('Inftecnico') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('numexp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('licencia_numreg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('licencia_numexp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_act_gestiona') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_in') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_out') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inftecnico as $inftecnico): ?>
            <tr>
                <td><?= $this->Number->format($inftecnico->numexp) ?></td>
                <td><?= h($inftecnico->licencia_numreg) ?></td>
                <td><?= $this->Number->format($inftecnico->licencia_numexp) ?></td>
                <td><?= h($inftecnico->user_act_gestiona) ?></td>
                <td><?= h($inftecnico->fecha_in) ?></td>
                <td><?= h($inftecnico->fecha_out) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $inftecnico->numexp]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inftecnico->numexp]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inftecnico->numexp], ['confirm' => __('Are you sure you want to delete # {0}?', $inftecnico->numexp)]) ?>
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
