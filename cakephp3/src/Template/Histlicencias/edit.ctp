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
                ['action' => 'delete', $histlicencia->numexp],
                ['confirm' => __('Are you sure you want to delete # {0}?', $histlicencia->numexp)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Histlicencias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="histlicencias form large-9 medium-8 columns content">
    <?= $this->Form->create($histlicencia) ?>
    <fieldset>
        <legend><?= __('Edit Histlicencia') ?></legend>
        <?php
            echo $this->Form->input('fecha_solicitud');
            echo $this->Form->input('fecha_exp', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
