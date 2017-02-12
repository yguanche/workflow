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
                ['action' => 'delete', $tipolicencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipolicencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipolicencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Regsolicitantes'), ['controller' => 'Regsolicitantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Regsolicitante'), ['controller' => 'Regsolicitantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipolicencias form large-9 medium-8 columns content">
    <?= $this->Form->create($tipolicencia) ?>
    <fieldset>
        <legend><?= __('Edit Tipolicencia') ?></legend>
        <?php
            echo $this->Form->input('tipolicencia');
            echo $this->Form->input('doc_necesaria');
            echo $this->Form->input('tasas');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
