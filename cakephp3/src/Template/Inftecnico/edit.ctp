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
                ['action' => 'delete', $inftecnico->numexp],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inftecnico->numexp)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inftecnico'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="inftecnico form large-9 medium-8 columns content">
    <?= $this->Form->create($inftecnico) ?>
    <fieldset>
        <legend><?= __('Edit Inftecnico') ?></legend>
        <?php
            echo $this->Form->input('licencia_numreg');
            echo $this->Form->input('licencia_numexp');
            echo $this->Form->input('aprobado_junta');
            echo $this->Form->input('aprobado_secretaria');
            echo $this->Form->input('user_act_gestiona');
            echo $this->Form->input('fecha_in');
            echo $this->Form->input('fecha_out');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
