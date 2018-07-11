
<body background="<?php echo IMG_DIR."fondo.png";?>" style="background-size: 100%;opacity: .8;">
<div class="container">
<div class="col-md-3"></div>
<div class="col-md-6 centrar">
    <div class="panel panel-primary">
        <div class="panel-heading text-center">
            <h4>Iniciar sesion</h4>
        </div>
        <div class="panel-body">            
            <form class="form-horizontal" role="form" name="login" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <div class="col-sm-12 col-md-12">
                        <div class="input-group input-group-md">
                            <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                            <div class="icon-addon addon-md">
                                <input  autocomplete="off" placeholder="cedula" type="number" class="form-control" id="cedula" name="cedula" maxlength="">
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-sm-12 col-md-12">
                        <div class="input-group input-group-md">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-log-in"></i></span>
                            <div class="icon-addon addon-md">
                                <input  autocomplete="off" placeholder="Contraseña" type="password" class="form-control" id="clave" name="password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 col-md-12">
                        <button type="submit" id="btn" name="submit" class="btn btn-primary btn-block" value="logear">Iniciar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<div class="col-md-3"></div>
</div>
<script>
     //ByBrando
     //Funcion verificadora de los campos del login.
    (function(){
        var login = document.getElementsByName('login')[0];
        var verifiCedula = function(e){
            if (login.cedula.value == 0) {
                alert("Completa el campo cedula");
                e.preventDefault();
            }
        };
        var verifiPassword = function(e){
            if (login.password.value == 0) {
                alert("ingresa una clave");
                e.preventDefault();
            }
        };
        var verifi = function (e){
            verifiCedula(e);
            verifiPassword(e);
        };
        login.addEventListener("submit", verifi);
    }())
</script>