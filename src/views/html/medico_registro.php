<div class="container">
	<div class="col-md-3"></div>
	<div class="col-md-6">
	<div class="panel panel-primary">
        <div class="panel-heading text-center">
            <h4>Nuevo Usuario</h4>
        </div>
        
        <div class="panel-body">            
		    <div class="col xs-4">
				<form action="?accion=procesar" method="POST">
				    <table class="table table-bordered table-condensed">
				            <tr>
				                <td><label for="">Nombre</label>
									<div class="input-group input-group-md">
				                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
				                        <div class="icon-addon addon-md">
											<input type="text" name="m_nombre" class = "form-control" autofocus="on" autocomplete="off" required="on">
				                        </div>
			                        </div>				                	
				                	
				                </td>
				            </tr>
				            <tr>
				                <td><label for="">Apellido</label> 
									<div class="input-group input-group-md">
				                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
				                        <div class="icon-addon addon-md">
											<input type="text" name="m_apellido" class = "form-control" autocomplete="off" required="on">
				                        </div>
			                        </div>				                	
				                	
				                </td>
				            </tr>
				            <tr>
				                <td><label for="">Sexo</label>
									<div class="input-group input-group-md">
				                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
				                        <div class="icon-addon addon-md">
						                    <div class="form-control">
						                        <label for="Hombre"><input type="radio" id="Hombre" value="Masculino" name="m_sexo" required> <i class="fa fa-mars"></i> Hombre </label>
						                        <label for="Mujer"><input type="radio" id="Mujer" value="Femenino" name="m_sexo"> <i class="fa fa-venus"></i> Mujer </label>
						                    </div>												
				                        </div>
			                        </div>
				             </td>
				            </tr>
				            <tr>
				                <td><label for="">Cedula.</label> 
									<div class="input-group input-group-md">
				                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
				                        <div class="icon-addon addon-md">
											<input type="number" name="m_cedula" class = "form-control" autocomplete="off" required="on">
				                        </div>
			                        </div>				                	
				                </td>
							</tr>
							<tr>
				                <td><label for="">Clave.</label> 
									<div class="input-group input-group-md">
				                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
				                        <div class="icon-addon addon-md">
											<input type="password" name="clave" class = "form-control" autocomplete="off" required="on">
				                        </div>
			                        </div>				                	
				                </td>
				            </tr>
				            <tr>
				            	<td><label for="nivel">Privilegio de usuarios.</label>
									<div class="input-group input-group-md">
			                            <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
			                            <div class="icon-addon addon-md">
						                    <select name="nivel[]" id="nivel" class="form-control" autocomplete="off" required="on">
						                        <option  value=""> Elija una opcion</option>
												<option  value="1"> Administrador.</option>
						                        <option  value="2"> Medico.</option>
						                        <option  value="3"> Operador.</option>
		
						                    </select>
			                            </div>
			                        </div>
				            	</td>
				            </tr>
				            <tr>
				            	<td><label for="">Especialidad</label> 
									<div class="input-group input-group-md">
				                        <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
				                        <div class="icon-addon addon-md">
											<input type="text" name="m_especialidad" class="form-control" autocomplete="off" required="on">
				                        </div>
			                        </div>				            		
				            	</td>
				            </tr>
				            <input type="hidden" name="id" id="id" >
				            <tr>
				                <td><input type="submit" name="doctores" class="btn btn-success btn-block btn-lg" value = "Enviar!"></td>
				            </tr>

				    </table>
				</form>
			</div><div class="col-md-3"></div>
		  </div>
		</div>
    </div>
</div>


