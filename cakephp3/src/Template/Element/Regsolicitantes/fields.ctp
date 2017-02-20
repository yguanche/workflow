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