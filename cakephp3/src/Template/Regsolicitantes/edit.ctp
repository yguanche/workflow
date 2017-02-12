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
                ['action' => 'delete', $regsolicitante->numreg],
                ['confirm' => __('Are you sure you want to delete # {0}?', $regsolicitante->numreg)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Regsolicitantes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tipolicencias'), ['controller' => 'Tipolicencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipolicencia'), ['controller' => 'Tipolicencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regsolicitantes form large-9 medium-8 columns content">
    <?= $this->Form->create($regsolicitante) ?>
    <fieldset>
        <legend><?= __('Edit Regsolicitante') ?></legend>
        <?php
            echo $this->Form->input('tipolicencia_id', ['options' => $tipolicencias]);
            echo $this->Form->input('dni');
            echo $this->Form->input('nombre');
            echo $this->Form->input('fecha');
            echo $this->Form->input('tipo_licencia');
            echo $this->Form->input('doc_presentada');
            echo $this->Form->input('fecha_in');
            echo $this->Form->input('fecha_out');
            echo $this->Form->input('usuario_actual_gest');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
