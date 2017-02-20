<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cabinforme'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<!-- coloco una pequeña estructura de bootstrap para poner una tabla -->
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <!-- nos damos cuenta que nos faltó el botón añadir y lo ponemos junto al encabezado. -->
            <h2>
                Informes del Cabildo
                <!-- podemos darle un estilo al botón de una clase de bootstrap class -->
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span>  Nuevo', ['controller' => 'Cabinformes', 'action' => 'add'],
                ['class' => 'btn btn-sm btn-primary pull-right', 'escape' => false]) ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('numexp') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('estexpediente_numexp') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fecha_envio') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fecha_recepcion') ?></th>
                        <!-- podemos poner a que se vean más campos --> 
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <?php foreach ($cabinformes as $cabinforme): ?>
                <tbody>
                    <tr>
                        <td><?= $this->Number->format($cabinforme->numexp) ?></td>
                        <td><?= $this->Number->format($cabinforme->estexpediente_numexp) ?></td>
                        <td><?= h($cabinforme->fecha_envio) ?></td>
                        <td><?= h($cabinforme->fecha_recepcion) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $cabinforme->numexp], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $cabinforme->numexp], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $cabinforme->numexp], ['confirm' => 'Eliminar producto?', 'class' => 'btn btn-sm btn-danger']) ?>
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