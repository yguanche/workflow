<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cabinformes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cabinformes form large-9 medium-8 columns content">
    <?= $this->Form->create($cabinforme) ?>
    <fieldset>
        <legend><?= __('Add Cabinforme') ?></legend>
        <?php
            echo $this->Form->input('estexpediente_numexp');
            echo $this->Form->input('fecha_envio');
            echo $this->Form->input('fecha_recepcion');
            echo $this->Form->input('valoracion_inf');
            echo $this->Form->input('comentarios');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
