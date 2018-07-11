<!-- EN ESTA PARTE PUEDO COLOCAR UN FOREACH CON LA FUNCION DEL PACIENTE, PARA QUE LE LLEGE LA CEDULA DEL PACIENTE CON UNA CONSULTA ESPECIFICA...  -->

<div class="container">
	<div class="well">
		<form action="?accion=registroDiario" method="POST">
		  <div class="input-group">
		    <input type="text" class="form-control" name="paciente_cedula" placeholder="Buscar paciente / introducir cedula." autofocus="on" autocomplete="off">
		    <div class="input-group-btn">
		      <button class="btn btn-default" type="submit" name="buscar_paciente" >
		        <i class="glyphicon glyphicon-search"></i>
		      </button>
		    </div>
		  </div>
		</form>
	</div>
	<div class="panel panel-primary ">
        <div class="panel-heading text-center">
            <h4>Registro de Atencion Diaria</h4>
        </div>
        <div class="panel-body">        	
        	<form action="?accion=procesar" method="POST">
        		<div class="col-md-6">
				    <table class="table table-condensed bg-success">
				    	<div class="alert alert-success">
						  <strong>INFORMACION DEL MEDICO!</strong>.
						</div>
				            <tr class="">
				                <td class="" width="100%">
				                	<label for="nombre" >Nombre y Apellido</label>
				                		<div name="nombreMedico" value="<?php echo $_SESSION['medico_nombre'];?>" class="text-center"><b><?php echo $_SESSION['medico_nombre'];?></b></div>
				                		<div name="apellidoMedico" value="<?php echo $_SESSION['medico_apellido']?>" class="text-center"><b><?php echo $_SESSION['medico_apellido']?></b></div>
				                </td>				                	                
				            </tr>

				            <tr>
				            	<td class="" width="100%">
				            		<label for="cedula">Cedula</label> 
				            		<div type="number" min="10" max="10" name="cedulaMedico" value="<?php echo $_SESSION['medico_cedula'];?>" class="text-center"><h4><b><?php echo $_SESSION['medico_cedula'];?></h4></b></div>
				            	</td>
				            </tr>
					</table>

					<table class="table table-condensed bg-warning">
				    	<div class="alert alert-warning">
						  <strong>INFORMACION DEL PACIENTE!</strong>.
						</div>
						<?php 
						
						if($_POST){
						$paciente_cedula = $_POST['paciente_cedula'];
						$validar = $c->selectPaciente($paciente_cedula);
   						foreach ($validar as $datos){ ?>
				            <tr>	
				                <td><label for="">Nombre y Apellido:</label> 
									<div name="nombrePaciente" value="<?php echo $datos->nombre; ?>" class="text-center"><h4><b><?php echo $datos->nombre; ?></h4></b></div>
									<div name="apellidoPaciente" value="<?php echo $datos->apellido; ?>" class="text-center"><h4><b><?php echo $datos->apellido; ?><h4><b></div>
				                </td>
				            </tr>
				            <tr>
				                <td class='' width="100%">
				                	<label for="">Fecha de Nacimiento:</label>
									<div name="edadPaciente" value="<?php echo $datos->edad; ?>" class="text-center"><h4><b><?php echo $datos->edad; ?></h4></b></div>
				                </td>
				            </tr>

				            <tr>
				                <td class='' width="100%">
				                	<label for="">Cedula:</label>
									<div name="cedulaPaciente" value="<?php echo $datos->cedula; ?>" class="text-center"><h4><b><?php echo $datos->cedula; ?></h4></b></div>
				                </td>
				            </tr>

				            <tr>
				                <td class='' width="100%">
				                	<label for="">Sexo:</label>
									<div name="sexoPaciente" value="<?php echo $datos->sexo; ?>" class="text-center"><h4><b><?php echo $datos->sexo; ?></h4></b></div>
				                </td>
				            </tr>

				            <tr>
				                <td class='' width="100%">
				                	<label for="">Telefono:</label>
									<div name="telefonoPaciente" value="<?php echo $datos->telefono; ?>" class="text-center"><h4><b><?php echo $datos->telefono; ?></h4></b></div>
				                </td>
				            </tr>

				            <tr>
				                <td class='' width="100%">
				                	<label for="">Personal:</label>
									<div name="personalPaciente" value="<?php echo $datos->personal; ?>" class="text-center"><h4><b><?php echo $datos->personal; ?></h4></b></div>
				                </td>
				            </tr>

				            <tr>
				                <td class='' width="100%">
				                	<label for="">Mencion:</label>
									<div name="mencionPaciente" value="<?php echo $datos->mencion; ?>" class="text-center"><h4><b><?php echo $datos->mencion; ?></h4></b></div>
				                </td>
				            </tr>
				            <div class="hidden" value="<?php echo $datos->idpaciente; ?>" name="idpaciente"></div>
				        <?php }} ?>
				    </table>
				</form>
		    </div>      
		    <div class="col-md-offset-6 ">
				    <table class="table table-condensed">
						<tr>
							<td>
								<label for="">Fecha</label>
								<input type="date" id="dateDefault" class="form-control" size="80%" name="fecha" readonly="readonly">
							</td>
						</tr>
				            <tr>
				                <td>
				                	<label for="">Diagnostico </label>
				                	<input type="text" name="diagnostico" class = "form-control" autocomplete="off" required="on">
				                </td>
				            </tr>

				            <tr>
				                <td class='' width="100%">
				                	<label for="">Examen</label>
				                    <select class="form-control" name="examen[]" id="examen" required>
				                        <option value="">Elija una opcion</option>
				                        <option value="No aplica">No aplica</option>
				                        <option value="Ecografia">Ecografia</option>
				                        <option value="Laboratorio">Laboratorio</option>
				                        <option value="Rm(Resonacia magnetica)">Rm(Resonacia magnetica)</option>
				                        <option value="Rx(Rayos X)">Rx(Rayos X)</option>
				                        <option value="Tx(Tratamiento)">Tx(Tratamiento)</option>
				                        <option value="Dx(Diagnostico)">Dx(Diagnostico)</option>
				                        <option value="Fx(Fractura)">Fx(Fractura)</option>
				                        <option value="Tomografia">Tomografia</option>
				                    </select>
				                </td>
				            </tr>

				            <tr>
				                <td class='' width="100%">
				                	<label for="">Referido</label>
				                    <select class="form-control" name="referido[]" id="referido" required>
				                        <option value="">Elija una opcion</option>
				                        <option value="No aplica">No aplica</option>
				                        <option value="Emergencia">Emergencia</option>
				                        <option value="Consulta Especializada">Consulta Especializada</option>
				                        <option value="Primera vez">Primera vez</option>
				                        <option value="Sucesiva">Sucesiva</option>
				                    </select>
				                </td>
				            </tr>

				            <tr>
				                <td class='' width="100%">
				                	<label for="">Centro Clinico</label>
				                    <select class="form-control" name="centroclinico[]" id="centroclinico" required>
				                        <option value="">Elija una opcion</option>
				                        <option value="No aplica">No aplica</option>
				                        <option value="Publico">Publico</option>
				                        <option value="Privado">Privado</option>
				                        <option Value="Barrio Adentro">Barrio Adentro</option>
				                    </select>
				                </td>
				            </tr>
				            <div class="hidden" value="" name="iddoctores"></div>
				            
				            <tr>
				                <td><input type="submit" name="registroDiario" class="btn btn-success btn-block btn-lg" value = "Enviar!"></td>
				            </tr>
				            <tr>
				            	<td><input type="reset" name="restablecer" class="btn btn-danger btn-block btn-lg"  value ="Restablecer!" onclick="restablecer();"></td>
				            </tr>
				    </table>				
		    	</div>
			</form>
        </div>
    </div>
</div>
<script language=javascript>
// function confirmar ( mensaje ) {
// 	return confirm( mensaje );
// }
function restablecer(){

	window.location.reload();
}
</script>
<script type="text/javascript">
    function setInputDate(_id){
    var _dat = document.querySelector(_id);
    var hoy = new Date(),
        d = hoy.getDate(),
        m = hoy.getMonth()+1,
        y = hoy.getFullYear(),
        data;

    if(d < 10){
        d = "0"+d;
    };
    if(m < 10){
        m = "0"+m;
    };

    data = y+"-"+m+"-"+d;
    console.log(data);
    _dat.value = data;
};
setInputDate("#dateDefault");
</script>