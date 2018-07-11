<div class="container" >
	<div class="col-md-3"></div> 
	<div class="col-md-6">
	<div class="panel panel-primary">
        <div class="panel-heading text-center">
            <h4>Editando datos del paciente 
			<?php $validar = $c->selPaciente($_GET['id']); 
            foreach ($validar as $paciente):
				echo $paciente->nombre." ".$paciente->apellido;?></h4>
			</div>
			
			<div class="panel-body">     
				<div class="col md-4">
					<form action="?accion=procesar&id=<?php echo $paciente->idpaciente;?>" method="POST">
						<table class="table table-bordered table-condensed">
						<div disabled>
							<input type="hidden" value="<?php echo $_GET['id'];?>" name="idpaciente">
						</div>
								<tr>
									<td><label for="p_nombre">Nombre</label>
										<div class="input-group input-group-md">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<div class="icon-addon addon-md">
												<input value="<?php echo $paciente->nombre; ?>"  class = "form-control " autocomplete="off" disabled >
												<input type="text" value="<?php echo $paciente->nombre; ?>" name="p_nombre"  title="Solo introduzca letras" size="50%" class = "form-control" autofocus="on" autocomplete="off" required="on">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><label for="p_apellido">Apellido</label>
										<div class="input-group input-group-md">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<div class="icon-addon addon-md">
											<input value="<?php echo $paciente->apellido; ?>" class = "form-control" autocomplete="off" disabled>
												<input type="text" name="p_apellido"  value="<?php echo $paciente->apellido; ?>"title="Solo introduzca letras" size="50%" class = "form-control" autocomplete="off" required="on">
											</div>
										</div>                	
									</td>
								</tr>
								<tr>
									<td><label for="p_edad">Fecha de nacimiento</label>
										<div class="input-group input-group-md">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
											<div class="icon-addon addon-md">
											   <input value="<?php echo $paciente->edad; ?>" class="form-control" autocomplete="off" disabled>
											   <input type="date" value="<?php echo $paciente->edad; ?>" name="p_edad" size="50%" class="form-control" autocomplete="off" required="on">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><label for="p_sexo">Sexo</label>
										<div class="input-group input-group-md">
											<span class="input-group-addon"><i class="glyphicon glyphicon-heart"></i></span>
											<div class="icon-addon addon-md">
											<input value="<?php echo $paciente->sexo; ?>" class = "form-control" autocomplete="off" disabled>
												<div class="form-control">
													<label for="Hombre"><input type="radio" id="Hombre" value="Masculino" name="p_sexo" required="on"> <i class="fa fa-mars"></i> Hombre </label>
													<label for="Mujer"><input type="radio" id="Mujer" value="Femenino" name="p_sexo"> <i class="fa fa-venus"></i> Mujer </label>
												</div>			                               
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><label for="p_cedula">Cedula</label>
										<div class="input-group input-group-md">
											<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
											<div class="icon-addon addon-md">
											   <input value="<?php echo $paciente->cedula; ?>" class = "form-control" autocomplete="off" disabled>
											   <input type="number" name="p_cedula"  value="<?php echo $paciente->cedula; ?>" title="Solo introduzca numeros" size="50%" class = "form-control" autocomplete="off" required="on">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><label for="p_direccion">Direccion</label>
										<div class="input-group input-group-md">
											<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
											<div class="icon-addon addon-md">
											<input name="" value="<?php echo $paciente->direccion; ?>" size="50%" class="form-control" autocomplete="off" disabled>
											   <input type="text" name="p_direccion" value="<?php echo $paciente->direccion; ?>" min="1" max="255" size="50%" class="form-control" autocomplete="off" required="on">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><label for="p_telefono">Telefono</label>
										<div class="input-group input-group-md">
											<span class="input-group-addon"><i class="fa fa-phone"></i></span>
											<div class="icon-addon addon-md">
												<span class="form-control">telefono actual= <?php echo $paciente->telefono; ?></span>
											   <input type="text"  name="p_telefono" class="form-control" autocomplete="off" required="on" value="<?php echo $paciente->telefono; ?>">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><label for="p_personal">Tipo de personal</label>
										<div class="input-group input-group-md">
											<span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
											<div class="icon-addon addon-md">
											<input value="<?php echo $paciente->personal; ?>" size="50%" class="form-control" autocomplete="off" disabled>
												<select name="p_personal[]" id="p_personal" class="form-control" autocomplete="off" required="on">
													<option  value=""> Elija una opcion</option>
													<option  value="No aplica">No aplica</option>
													<option  value="Familiar">Familiar</option>
													<option  value="Obrero">Obrero</option>
													<option  value="Docente">Docente</option>
													<option  value="Administrativo">Administrativo</option>
													<option  value="Comunidad">Comunidad</option>
													<option  value="Estudiante">Estudiante</option>
												</select>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><label for="p_personal">Tipo de Mencion</label>
										<div class="input-group input-group-md">
											<span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
											<div class="icon-addon addon-md">
											<input value="<?php echo $paciente->mencion; ?>" size="50%" class="form-control" autocomplete="off" disabled>
												<select name="p_mencion[]" id="p_mencion" class="form-control" autocomplete="off" required="on">
													<option value=""> Elija una opcion</option>
													<option value="No aplica">No aplica</option>
													<option value="Informatica">Informatica</option>
													<option value="Materiales industriales">Materiales industriales</option>
													<option value="Geociencia">Geociencia</option>
													<option value="Construccion Civil">Construccion Civil</option>
													<option value="Agroalimentacion">Agroalimentacion</option>
													<option value="Administracion de Empresas">Administracion de Empresas</option>
													<option value="Contaduria">Contaduria</option>
													<option value="Seguridad alimentaria">Seguridad alimentaria</option>
												</select>
											</div>
										</div>
									</td>
								</tr>        
								<tr>
									<td><input type="submit" name="editarpaciente" class="btn btn-success btn-block btn-lg" value = "Enviar!"></td>
								</tr>
						</table>
					</form>  
				</div>
				
				<?php endforeach; ?>
			</div>
		</div>
		</div>
		<div class="col-md-3"></div> 
	</div>
	