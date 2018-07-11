<div class="container">
<div class="col-md-10">
  <h2>Listado de Medicos</h2>
  <p>Todos los Medicos hasta la fecha</p>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">          
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Sexo</th>
        <th>Cedula</th>
        <th>Nivel</th>
        <th>Especialidad</th>
        <th class="warning">Editar</th>
        <th class="danger">Eliminar</th>
        
      </tr>
    </thead>
    <tbody id="myTable">
    <?php $validar = $c->setDoctor();
    foreach ($validar as $doctor){ ?>
      <tr>
    		<td class="text-center"><?php echo $doctor->nombre; ?></td>
    		<td class="text-center"><?php echo $doctor->apellido; ?></td>
    		<td class="text-center"><?php echo $doctor->sexo; ?></td>
        <td class="text-center"><?php echo $doctor->cedula; ?></td>
        <td class="text-center"><?php echo $doctor->nivel; ?></td>
    		<td class="text-center"><?php echo $doctor->especialidad; ?></td>
        <td class="text-center"><a class="btn btn-warning" href="?accion=editarD&id=<?php echo $doctor->iddoctores; ?>"><i class="fa fa-pencil"></i></a></td>
        <td class="text-center"><a class="btn btn-danger" href="?accion=eliminar&id=<?php echo $doctor->iddoctores; ?>&valor=1"
        onclick="return confirmar('LOS DATOS SE PERDERAN PARA SIEMPRE. ESTA SEGURO QUE DESEA ELIMINAR DE <?php echo $doctor->nombre .' '.$doctor->apellido;?>')">X</a></td>
      </tr>
  <?php }  ?>
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