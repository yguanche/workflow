<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Workflow</a>  <!-- al poner "/" lo que estamos haciendo es que vaya a la raíz del proyecto -->
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active">
            <!-- <a href="#">Home</a> --> 
            <?= $this->Html->link('Usuarios', ['controller' => 'Users', 'action' => 'index']) ?> <!-- asi llamamos en el indice al controlador para ver la lista de los usuarios -->
        </li>
        <li>
            <!-- <a href="#">Home</a> --> 
            <?= $this->Html->link('Solicitantes', ['controller' => 'Regsolicitantes', 'action' => 'index']) ?> <!-- asi llamamos en el indice al controlador para ver la lista de los solicitantes -->
        </li>
        <li>
            <!-- <a href="#">Home</a> --> 
            <?= $this->Html->link('Licencias', ['controller' => 'Licencias', 'action' => 'index']) ?> <!-- asi llamamos en el indice al controlador para ver la lista del tipo de licencias -->
        </li>
        <li>
            <!-- <a href="#">Home</a> --> 
            <?= $this->Html->link('Tipo de Licencias', ['controller' => 'Tipolicencias', 'action' => 'index']) ?> <!-- asi llamamos en el indice al controlador para ver la lista del tipo de licencias -->
        </li>
        <li>
            <!-- <a href="#">Home</a> --> 
            <?= $this->Html->link('Histórico de licencias', ['controller' => 'Histlicencias', 'action' => 'index']) ?> <!-- asi llamamos en el indice al controlador para ver la lista del tipo de licencias -->
        </li>
        <li>
            <!-- <a href="#">Home</a> --> 
            <?= $this->Html->link('Expedientes', ['controller' => 'Estexpedientes', 'action' => 'index']) ?> <!-- asi llamamos en el indice al controlador para ver la lista de los expedientes -->
        </li>
         <li>
            <!-- <a href="#">Home</a> --> 
            <?= $this->Html->link('Informe Técnico', ['controller' => 'Inftecnico', 'action' => 'index']) ?> <!-- asi llamamos en el indice al controlador para ver la lista del tipo de licencias -->
        </li>
         <li>
            <!-- <a href="#">Home</a> --> 
            <?= $this->Html->link('Informe Cabildo', ['controller' => 'Cabinformes', 'action' => 'index']) ?> <!-- asi llamamos en el indice al controlador para ver la lista del tipo de licencias -->
        </li>
      <!--  <li><a href="#contact">Contact</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>