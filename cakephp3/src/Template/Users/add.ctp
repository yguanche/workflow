<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estexpedientes'), ['controller' => 'Estexpedientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estexpediente'), ['controller' => 'Estexpedientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('password');
            echo $this->Form->input('roles');
            echo $this->Form->input('categoria');
            echo $this->Form->input('departamento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
