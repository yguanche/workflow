<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Licencias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="licencias form large-9 medium-8 columns content">
    <?= $this->Form->create($licencia) ?>
    <fieldset>
        <legend><?= __('Add Licencia') ?></legend>
        <?php
            echo $this->Form->input('numreg');
            echo $this->Form->input('estexpediente_numexp');
            echo $this->Form->input('histlicencia_numexp');
            echo $this->Form->input('regsolicitante_numreg');
            echo $this->Form->input('apl_comerc_lic');
            echo $this->Form->input('ubicacion');
            echo $this->Form->input('datos_fisicos_local');
            echo $this->Form->input('user_gestiona');
            echo $this->Form->input('fecha_in');
            echo $this->Form->input('fecha_out', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
