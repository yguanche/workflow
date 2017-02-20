<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estexpediente->numexp],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estexpediente->numexp)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estexpedientes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<!-- inserto líneas nuevas de una estructura básica  -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Editar Expedientes</h2>
        </div>
        <!-- hacemos el código como si fuera html y luego cogemos el código que ha generado bake y lo pegamos -->
         <?= $this->Form->create($estexpediente) ?>
            <fieldset>
                <?= $this->element("Estexpedientes/fields") ?>
            </fieldset>
            <?= $this->Form->button('Editar expediente') ?>
          <?= $this->Form->end() ?>
    </div>
</div>
