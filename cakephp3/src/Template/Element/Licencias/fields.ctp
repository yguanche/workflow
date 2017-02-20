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