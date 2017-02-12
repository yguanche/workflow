<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estexpedientes'), ['controller' => 'Estexpedientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estexpediente'), ['controller' => 'Estexpedientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($user->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= h($user->departamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Roles') ?></h4>
        <?= $this->Text->autoParagraph(h($user->roles)); ?>
    </div>
    <div class="row">
        <h4><?= __('Categoria') ?></h4>
        <?= $this->Text->autoParagraph(h($user->categoria)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Estexpedientes') ?></h4>
        <?php if (!empty($user->estexpedientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Numexp') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Est Actual') ?></th>
                <th scope="col"><?= __('Fecha Recepción') ?></th>
                <th scope="col"><?= __('User Actual') ?></th>
                <th scope="col"><?= __('Dept Actual') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->estexpedientes as $estexpedientes): ?>
            <tr>
                <td><?= h($estexpedientes->numexp) ?></td>
                <td><?= h($estexpedientes->user_id) ?></td>
                <td><?= h($estexpedientes->est_actual) ?></td>
                <td><?= h($estexpedientes->fecha_recepción) ?></td>
                <td><?= h($estexpedientes->user_actual) ?></td>
                <td><?= h($estexpedientes->dept_actual) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Estexpedientes', 'action' => 'view', $estexpedientes->numexp]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Estexpedientes', 'action' => 'edit', $estexpedientes->numexp]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Estexpedientes', 'action' => 'delete', $estexpedientes->numexp], ['confirm' => __('Are you sure you want to delete # {0}?', $estexpedientes->numexp)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
