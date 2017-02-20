<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Histlicencia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<!-- coloco una pequeña estructura de bootstrap para poner una tabla -->
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <!-- nos damos cuenta que nos faltó el botón añadir y lo ponemos junto al encabezado. -->
            <h2>
                Histórico de Licencias
                <!-- podemos darle un estilo al botón de una clase de bootstrap class -->
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span>  Nuevo', ['controller' => 'Histlicencias', 'action' => 'add'],
                ['class' => 'btn btn-sm btn-primary pull-right', 'escape' => false]) ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                       <th scope="col"><?= $this->Paginator->sort('numexp') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fecha_solicitud') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fecha_exp') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <?php foreach ($histlicencias as $histlicencia): ?>
                <tbody>
                    <tr>
                        <td><?= $this->Number->format($histlicencia->numexp) ?></td>
                        <td><?= h($histlicencia->fecha_solicitud) ?></td>
                        <td><?= h($histlicencia->fecha_exp) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $histlicencia->numexp], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $histlicencia->numexp], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink('Elimiar', ['action' => 'delete', $histlicencia->numexp], ['confirm' => 'Eliminar producto?', 'class' => 'btn btn-sm btn-danger']) ?>
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
