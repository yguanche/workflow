<?php
    echo $this->Form->input('user_id', ['options' => $users]);
    echo $this->Form->input('est_actual');
    echo $this->Form->input('fecha_recepción', ['empty' => true]);
    echo $this->Form->input('user_actual');
    echo $this->Form->input('dept_actual');
?>