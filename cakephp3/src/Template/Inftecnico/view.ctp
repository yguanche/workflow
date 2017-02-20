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
<!-- mostramos la vista del Informe técnico -->
<div class="well">
    <h2>
        Informe Técnico Nº <?= h($inftecnico->numexp) ?>
    </h2>
     <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
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
    </div>
    <h3>
        <?= __('Aprobado Junta') ?>
    </h3>
     <div class="table-responsive">
        <table class="table table-bordered table-hover vertical-table">
            <tr>
                <td><?= $this->Text->autoParagraph(h($inftecnico->aprobado_junta)); ?></td>
            </tr>
        </table>
    </div>
    <h3>
        <?= __('Aprobado Secretaria') ?>
    </h3>
        <table class="table table-bordered table-hover vertical-table">
            <tr>
                <td><?= $this->Text->autoParagraph(h($inftecnico->aprobado_secretaria)); ?></td>
            </tr>
        </table>
    </div>
</div>
