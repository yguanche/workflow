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
<!-- coloco una pequeña estructura de bootstrap para poner una tabla -->
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <!-- nos damos cuenta que nos faltó el botón añadir y lo ponemos junto al encabezado. -->
            <h2>
                Expedientes
                <!-- podemos darle un estilo al botón de una clase de bootstrap class -->
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span>  Nuevo', ['controller' => 'Estexpedientes', 'action' => 'add'],
                ['class' => 'btn btn-sm btn-primary pull-right', 'escape' => false]) ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
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
                <?php foreach ($estexpedientes as $estexpediente): ?>
                <tbody>
                    <tr>
                        <td><?= $this->Number->format($estexpediente->numexp) ?></td>
                        <td><?= $estexpediente->has('user') ? $this->Html->link($estexpediente->user->id, ['controller' => 'Users', 'action' => 'view', $estexpediente->user->id]) : '' ?></td>
                        <td><?= h($estexpediente->est_actual) ?></td>
                        <td><?= h($estexpediente->fecha_recepción) ?></td>
                        <td><?= h($estexpediente->user_actual) ?></td>
                        <td><?= h($estexpediente->dept_actual) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $estexpediente->numexp], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $estexpediente->numexp], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $estexpediente->numexp], ['confirm' => 'Eliminar producto?', 'class' => 'btn btn-sm btn-danger']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="paginator">
            <ul class="pagination">
                <li><?= $this->Paginator->prev('< Anterior') ?></li>
                <li><?= $this->Paginator->numbers() ?></li>
                <li><?= $this->Paginator->next('Siguiente >') ?></li>
            </ul>
            <p><?= $this->Paginator->counter('{{page}} de {{pages}}') ?></p>
        </div>
    </div>
</div>
