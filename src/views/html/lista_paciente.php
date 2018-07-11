<div class="container">
<div class="col-md-11">
  <h2>Listado de Pacientes</h2>
  <p>Todos los pacientes hasta la fecha</p>
  <input class="form-control" id="myInput" type="text" placeholder="Buscar.."> 
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de nacimiento</th>
        <th>Sexo</th>
        <th>Cedula</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Tipo De personal</th>
        <th>Tipo de PNF</th>
        <th class="warning">Editar</th>
        <th class="danger">Eliminar</th>
      </tr>
    </thead>
    <tbody id="myTable">
    <?php $validar = $c->setPaciente(); 
    foreach ($validar as $paciente): ?>
    <tr>
		<td class="text-center"><?php echo $paciente->nombre; ?></td>
		<td class="text-center"><?php echo $paciente->apellido; ?></td>
		<td class="text-center"><?php echo $paciente->edad; ?></td>
		<td class="text-center"><?php echo $paciente->sexo; ?></td>
		<td class="text-center"><?php echo $paciente->cedula; ?></td>
		<td class="text-center"><?php echo $paciente->direccion; ?></td>
		<td class="text-center"><?php echo $paciente->telefono; ?></td>
		<td class="text-center"><?php echo $paciente->personal; ?></td>
		<td class="text-center"><?php echo $paciente->mencion; ?></td>

    <td class="text-center"><a class="btn btn-warning" href="?accion=editar&id=<?php echo $paciente->idpaciente; ?>"><i class="fa fa-pencil"></i></a></td>
		<td class="text-center"><a class="btn btn-danger" href="?accion=eliminar&id=<?php echo $paciente->idpaciente; ?>&valor=0"
		onclick="return confirmar('LOS DATOS SE PERDERAN PARA SIEMPRE. ESTA SEGURO QUE DESEA ELIMINAR DE <?php echo $paciente->nombre .' '.$paciente->apellido;?>')">X</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>

  </table>
</div>
</div>
<script language="JavaScript">
function confirmar ( mensaje ) {
	return confirm( mensaje );
}
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>