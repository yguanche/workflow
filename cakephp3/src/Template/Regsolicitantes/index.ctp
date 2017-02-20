<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- coloco una pequeña estructura de bootstrap para poner una tabla -->
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <!-- nos damos cuenta que nos faltó el botón añadir y lo ponemos junto al encabezado. -->
            <h2>
                Solicitantes
                <!-- podemos darle un estilo al botón de una clase de bootstrap class -->
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span>  Nuevo', ['controller' => 'Regsolicitantes', 'action' => 'add'],
                ['class' => 'btn btn-sm btn-primary pull-right', 'escape' => false]) ?>
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Listas Tipolicencias', ['controller' => 'Tipolicencias', 'action' => 'index'],
                ['class' => 'btn btn-sm btn-primary pull-right', 'escape' => false]) ?>
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nueva Tipolicencia', ['controller' => 'Tipolicencias', 'action' => 'add'],
                ['class' => 'btn btn-sm btn-primary pull-right', 'escape' => false]) ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <?php foreach ($regsolicitantes as $regsolicitante): ?>
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('numreg') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('tipolicencia_id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('dni') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('tipo_licencia') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fecha_in') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('fecha_out') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('usuario_actual_gest') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td><?= $this->Number->format($regsolicitante->numreg) ?></td>
                        <td><?= $regsolicitante->has('tipolicencia') ? $this->Html->link($regsolicitante->tipolicencia->id, ['controller' => 'Tipolicencias', 'action' => 'view', $regsolicitante->tipolicencia->id]) : '' ?></td>
                        <td><?= h($regsolicitante->dni) ?></td>
                        <td><?= h($regsolicitante->nombre) ?></td>
                        <td><?= h($regsolicitante->fecha) ?></td>
                        <td><?= $this->Number->format($regsolicitante->tipo_licencia) ?></td>
                        <td><?= h($regsolicitante->fecha_in) ?></td>
                        <td><?= h($regsolicitante->fecha_out) ?></td>
                        <td><?= h($regsolicitante->usuario_actual_gest) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $regsolicitante->numreg], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $regsolicitante->numreg], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $regsolicitante->numreg], ['confirm' => 'Eliminar producto?', 'class' => 'btn btn-sm btn-danger']) ?>
                            <!--   <?= $this->Html->link(__('Export to PDF'), ['action' => 'view', $user->id, '_ext' => 'pdf']); ?> -->
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

