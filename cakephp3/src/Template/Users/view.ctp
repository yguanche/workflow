<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- Mostramos el menu de acciones -->
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li> 
    <!--    <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li> -->
    <!--   <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li> -->
    <!--   <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li> -->
    <!--    <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li> -->
        <li><?= $this->Html->link(__('List Estexpedientes'), ['controller' => 'Estexpedientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estexpediente'), ['controller' => 'Estexpedientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<!-- mostramos la vista del usuario -->
<div class="well">
    <h2>
        Usuario Nº <?= h($user->id) ?>
    </h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
            <tr>
                <th>Id</th>
                <td>
                    <?= $this->Number->format($user->id) ?>
                </td>
            </tr>
            <tr>
                <th>Rol</th>
                <td>
                    <?= $this->Text->autoParagraph(h($user->roles)); ?>
                </td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>
                    <?= h($user->nombre) ?>
                </td>
            </tr>
            <tr>
                <th>Password</th>
                <td>
                    <?= h($user->password) ?>
                </td>
            </tr>
            <tr>
                <th>Departamento</th>
                <td>
                    <?= h($user->departamento) ?>
                </td>
            </tr>
            <tr>
                <th>Categoría</th>
                <td>
                    <?= $this->Text->autoParagraph(h($user->categoria)); ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>
                    Relación de expedientes
                </h2>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <?php if (!empty($user->estexpedientes)): ?>
                        <th scope="col"><?= __('Numexp') ?></th>
                        <th scope="col"><?= __('User Id') ?></th>
                        <th scope="col"><?= __('Est Actual') ?></th>
                        <th scope="col"><?= __('Fecha Recepción') ?></th>
                        <th scope="col"><?= __('User Actual') ?></th>
                        <th scope="col"><?= __('Dept Actual') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </thead>
                    <?php foreach ($user->estexpedientes as $estexpedientes): ?>
                    <tbody>
                        <tr>
                            <td><?= h($estexpedientes->numexp) ?></td>
                            <td><?= h($estexpedientes->user_id) ?></td>
                            <td><?= h($estexpedientes->est_actual) ?></td>
                            <td><?= h($estexpedientes->fecha_recepción) ?></td>
                            <td><?= h($estexpedientes->user_actual) ?></td>
                            <td><?= h($estexpedientes->dept_actual) ?></td>
                            <td class="actions">
                                <?= $this->Html->link('Ver', ['controller' => 'Estexpedientes', 'action' => 'view', $estexpedientes->numexp], ['class' => 'btn btn-sm btn-info']) ?>
                                <?= $this->Html->link('Editar', ['controller' => 'Estexpedientes', 'action' => 'edit', $estexpedientes->numexp], ['class' => 'btn btn-sm btn-primary']) ?>
                                <?= $this->Form->postLink('Eliminar', ['controller' => 'Estexpedientes', 'action' => 'delete', $estexpedientes->numexp], ['confirm' => 'Eliminar producto # {0]?', $estexpedientes->numexp, 'class' => 'btn btn-sm btn-danger']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>

