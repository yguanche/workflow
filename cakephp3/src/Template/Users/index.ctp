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
                Usuarios
                <!-- podemos darle un estilo al botón de una clase de bootstrap class -->
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span>  Nuevo', ['controller' => 'Users', 'action' => 'add'],
                ['class' => 'btn btn-sm btn-primary pull-right', 'escape' => false]) ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('departamento') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <?php foreach ($users as $user): ?>
                <tbody>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->nombre) ?></td>
                        <td><?= h($user->password) ?></td>
                        <td><?= h($user->departamento) ?></td>
                        <td class="actions">
                            <?= $this->HTML->link('Ver', ['action' => 'view', $user->id], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->HTML->link('Editar', ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $user->id], ['confirm' => 'Eliminar producto?', 'class' => 'btn btn-sm btn-danger']) ?>
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
    
       