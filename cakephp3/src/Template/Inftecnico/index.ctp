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
<!-- coloco una pequeña estructura de bootstrap para poner una tabla -->
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <!-- nos damos cuenta que nos faltó el botón añadir y lo ponemos junto al encabezado. -->
            <h2>
                Informe Técnico
                <!-- podemos darle un estilo al botón de una clase de bootstrap class -->
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span>  Nuevo', ['controller' => 'Inftecnico', 'action' => 'add'],
                ['class' => 'btn btn-sm btn-primary pull-right', 'escape' => false]) ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
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
                 <?php foreach ($inftecnico as $inftecnico): ?>
                <tbody>
                    <tr>
                        <td><?= $this->Number->format($inftecnico->numexp) ?></td>
                        <td><?= h($inftecnico->licencia_numreg) ?></td>
                        <td><?= $this->Number->format($inftecnico->licencia_numexp) ?></td>
                        <td><?= h($inftecnico->user_act_gestiona) ?></td>
                        <td><?= h($inftecnico->fecha_in) ?></td>
                        <td><?= h($inftecnico->fecha_out) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'view', $inftecnico->numexp], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $inftecnico->numexp], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $inftecnico->numexp], ['confirm' => 'Eliminar producto?', 'class' => 'btn btn-sm btn-danger']) ?>
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
