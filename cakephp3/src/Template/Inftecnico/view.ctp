<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inftecnico'), ['action' => 'edit', $inftecnico->numexp]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inftecnico'), ['action' => 'delete', $inftecnico->numexp], ['confirm' => __('Are you sure you want to delete # {0}?', $inftecnico->numexp)]) ?> </li>
        <li><?= $this->Html->link(__('List Inftecnico'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inftecnico'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inftecnico view large-9 medium-8 columns content">
    <h3><?= h($inftecnico->numexp) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Licencia Numreg') ?></th>
            <td><?= h($inftecnico->licencia_numreg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Act Gestiona') ?></th>
            <td><?= h($inftecnico->user_act_gestiona) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numexp') ?></th>
            <td><?= $this->Number->format($inftecnico->numexp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Licencia Numexp') ?></th>
            <td><?= $this->Number->format($inftecnico->licencia_numexp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha In') ?></th>
            <td><?= h($inftecnico->fecha_in) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Out') ?></th>
            <td><?= h($inftecnico->fecha_out) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Aprobado Junta') ?></h4>
        <?= $this->Text->autoParagraph(h($inftecnico->aprobado_junta)); ?>
    </div>
    <div class="row">
        <h4><?= __('Aprobado Secretaria') ?></h4>
        <?= $this->Text->autoParagraph(h($inftecnico->aprobado_secretaria)); ?>
    </div>
</div>
