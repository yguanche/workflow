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
                Tipos de Licencias
                <!-- podemos darle un estilo al botón de una clase de bootstrap class -->
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span>  Nuevo', ['controller' => 'Tipolicencias', 'action' => 'add'],
                ['class' => 'btn btn-sm btn-primary pull-right', 'escape' => false]) ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('tipolicencia') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('doc_necesaria') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('tasas') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <?php foreach ($tipolicencias as $tipolicencia): ?>
                <tbody>
                    <tr>
                        <td><?= $this->Number->format($tipolicencia->id) ?></td>
                        <td><?= h($tipolicencia->tipolicencia) ?></td>
                        <td><?= h($tipolicencia->doc_necesaria) ?></td>
                        <td><?= $this->Number->format($tipolicencia->tasas) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $tipolicencia->id], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $tipolicencia->id], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $tipolicencia->id], ['confirm' => 'Eliminar producto?', 'class' => 'btn btn-sm btn-danger']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
            <p><?= $this->Paginator->counter('{{page}} de {{pages}}') ?></p>
        </div>
    </div>
</div>






<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipolicencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Regsolicitantes'), ['controller' => 'Regsolicitantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regsolicitante'), ['controller' => 'Regsolicitantes', 'action' => 'add']) ?></li>
    </ul>
</nav>

