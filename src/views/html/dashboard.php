<style>
.side123{
  position: relative;
  width: 250px;
  height: 100%;
  background:#333;
  color:#fff;
  border-radius: 5%;
  transition:all 0.3s;
}
.side123 h2{
	text-align: center;
	margin: 0;
	padding: 10px;
	background: #2a2a2a;
}
.side123 ul{
  list-style: none;
  padding: 0;
  margin: 0;
}
.side123 li{
  outline:1px solid #2a2a2a;
  transition: all 0.3s;
}
.side123 li:hover{
  background: #444;
  border-left: 5px solid #eee;
}
.side123 a{
  display: block;
  color:#fff;
  text-decoration: none;
  padding: 10px;
}
.exit a:hover{
	background-color:#f00;
	transition:all 0.3s;
}
</style>

<div class="col-md-3">
	<div class="container">
	<div class="panel-body side123">
		<h2>Dashboard</h2>
		<ul>
			<li><a href="?accion=NuevoMedico"><i class="fa fa-user-md"></i> Nuevo Medico.</a></li>
			<li><a href="?accion=NuevoUsuario"><i class="fa fa-user-plus"></i> Nuevo Usuario.</a></li>
			<li><a href="?accion=Listado"><i class="fa fa-amazon"></i> Todos los Pacientes</a></li>
			<li><a href="?accion=ListadoMedico"><i class="fa fa-pinterest"></i> Todos los Medicos</a></li>
			<li><a href="?accion=InformeMensual"><i class="fa fa-calendar"></i> Informe Mensual</a></li>
			<li><a href="?accion=home"><i class="fa fa-bar-chart"></i> Graficos </a></li>
			<li><a href=""><i class="fa fa-file-text"></i> Regenerar Reporte.</a></li>
			<li><a href="?accion=RegistroDeConsultas"><i class="fa fa-archive"></i> Registro De Consultas</a></li>



			<li class="exit"><a href="?accion=salir"><i class="fa fa-sign-out"></i> Salir.</a></li>

		</ul>	
	</div>
</div>
</div><br>
