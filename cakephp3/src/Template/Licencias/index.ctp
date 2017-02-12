<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Licencia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="licencias index large-9 medium-8 columns content">
    <h3><?= __('Licencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('numreg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numexp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estexpediente_numexp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('histlicencia_numexp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('regsolicitante_numreg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ubicacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datos_fisicos_local') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_gestiona') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_in') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_out') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($licencias as $licencia): ?>
            <tr>
                <td><?= h($licencia->numreg) ?></td>
                <td><?= $this->Number->format($licencia->numexp) ?></td>
                <td><?= $this->Number->format($licencia->estexpediente_numexp) ?></td>
                <td><?= $this->Number->format($licencia->histlicencia_numexp) ?></td>
                <td><?= $this->Number->format($licencia->regsolicitante_numreg) ?></td>
                <td><?= h($licencia->ubicacion) ?></td>
                <td><?= h($licencia->datos_fisicos_local) ?></td>
                <td><?= h($licencia->user_gestiona) ?></td>
                <td><?= h($licencia->fecha_in) ?></td>
                <td><?= h($licencia->fecha_out) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $licencia->numexp]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $licencia->numexp]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $licencia->numexp], ['confirm' => __('Are you sure you want to delete # {0}?', $licencia->numexp)]) ?>
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
