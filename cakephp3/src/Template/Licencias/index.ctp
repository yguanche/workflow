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
<!-- coloco una pequeña estructura de bootstrap para poner una tabla -->
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <!-- nos damos cuenta que nos faltó el botón añadir y lo ponemos junto al encabezado. -->
            <h2>
                Licencias
                <!-- podemos darle un estilo al botón de una clase de bootstrap class -->
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span>  Nuevo', ['controller' => 'Licencias', 'action' => 'add'],
                ['class' => 'btn btn-sm btn-primary pull-right', 'escape' => false]) ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
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
                <?php foreach ($licencias as $licencia): ?>
                <tbody>
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
                            <?= $this->Html->link('Ver', ['action' => 'view', $licencia->numexp], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $licencia->numexp], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $licencia->numexp], ['confirm' => 'Eliminar producto?', 'class' => 'btn btn-sm btn-danger']) ?>
                            <!-- ['confirm' => __('Are you sure you want to delete # {0}?', $licencia->numexp)]) --> 
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
