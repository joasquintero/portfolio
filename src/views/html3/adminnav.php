<style>
.side123{
  background:#333;
  color:#fff;
  transition:all 0.3s;
  font-size: 1.7rem;
}
.side123 ol{
  list-style: none;
  padding: 0;
  margin: 0;
}
.side123 li{
  transition: all 0.3s;
}
.side123 li:hover{
  background: #444;
  border-left: 5px solid #eee;
}
.side123 a{
  color:#fff;

  text-decoration: none;
}
.exit li:hover{
  background-color:#f00;
  transition:all 0.3s;
}

</style>
<ol class="breadcrumb side123">
      <li><a href=""><i class="fa fa-user-md" disabled ></i> Nuevo Usuario.</a></li>
      <li><a href=""><i class="fa fa-amazon"></i> Todos los Pacientes</a></li>
      <li><a href=""><i class="fa fa-pinterest"></i> Todos los Medicos.</a></li>
      <li><a href=""><i class="fa fa-archive"></i> Informe & Reportes.</a></li>
      <!--<li><a href="?accion=grafico"><i class="fa fa-bar-chart"></i> Graficos.</a></li>-->


      <li class="exit"><a href="?accion=salir"><i class="fa fa-sign-out"></i> Salir.</a></li>
</ol>