<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?accion=menu"><i class="fa fa-address-card-o"></i>Hola <b><?php  echo $_SESSION['medico_nombre'].' '.$_SESSION['medico_apellido'];?></b>, Bienvenido. </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="?accion=home"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="?accion=Paciente"><i class="fa fa-child"></i> Nuevo Paciente</a></li>
        <li><a href="?accion=RegistroDiario"><i class="fa fa-plus"></i> Atencion Diaria</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

