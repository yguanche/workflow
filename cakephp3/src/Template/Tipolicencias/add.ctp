<?php
/**
  * @var \App\View\AppView $this
  */
?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipolicencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Regsolicitantes'), ['controller' => 'Regsolicitantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regsolicitante'), ['controller' => 'Regsolicitantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<!-- inserto líneas nuevas de una estructura básica  -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear Tipo de Licencias</h2>
        </div>
        <!-- hacemos el código como si fuera html y luego cogemos el código que ha generado bake y lo pegamos -->
        <?= $this->Form->create($tipolicencia) ?>
            <fieldset>
                <?= $this->element("Tipolicencias/fields") ?>
            </fieldset>
            <?= $this->Form->button('Crear Tipo de Licencia') ?>
          <?= $this->Form->end() ?>
    </div>
</div>
