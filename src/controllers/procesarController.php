<?php
/*
debido a que aqui llegan los datos mediante post se analizan las variables para chequear si no estan vacias,
de ser asi se devuelve a la pagina donde se esta haciendo la consulta

*/
session_start();
require_once('core/conexion.php');
require_once('core/consultas.php');
require_once('core/funciones.php');
$c = new Consultas();
$c->autenticar();
echo'<title>'.APP_TITLE.'</title>';


if (isset($_POST['paciente'])){
	$p_nombre = (string) $_POST['p_nombre'];
	$p_apellido = (string) $_POST['p_apellido'];
	$p_edad = $_POST['p_edad'];
	$p_sexo = $_POST['p_sexo'];
	$p_cedula = $_POST['p_cedula'];
    $p_telefono = $_POST['p_telefono'];
    $p_direccion = (string) $_POST['p_direccion'];
    $personal = $_POST['p_personal'];
    for ($i=0; $i < count($personal); $i++) { 
        $p_personal = $personal[$i];
    }
    $mencion = $_POST['p_mencion'];
    for ($i=0; $i < count($mencion); $i++) { 
        $p_mencion = $mencion[$i];
    }
        try {
            $consultas = new Consultas();
            $consultas->getPaciente($p_nombre,$p_apellido,$p_edad,$p_sexo,$p_cedula,$p_telefono,$p_direccion,$p_personal,$p_mencion);
            header("location:?accion=Listado");
            // echo 'hecho.-->Procesar--Paciente. <br>';
            // echo '<br>';
            // var_dump($p_nombre);
            // echo '<br>';
            // var_dump($p_apellido);
            // echo '<br>';
            // var_dump($p_edad);
            // echo '<br>';
            // var_dump($p_sexo);
            // echo '<br>';
            // var_dump($p_cedula);
            // echo '<br>';
            // var_dump($p_telefono);
            // echo '<br>';
            // var_dump($p_direccion);
            // echo '<br>';
            // var_dump($p_personal);
            // echo '<br>';
            // var_dump($p_mencion);              
            } catch (Exception $e) {
                echo 'try pacientes... Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
            }

}elseif (isset($_POST['doctores'])){
    $m_nombre = (string) $_POST['m_nombre'];
    $m_apellido = (string) $_POST['m_apellido'];
    $m_sexo = (string) $_POST['m_sexo'];
    $m_cedula = (integer) $_POST['m_cedula'];
    $clave = $_POST['clave'];
    $nivel1 = (integer) $_POST['nivel'];
    for ($i=0; $i < count($nivel1); $i++) { 
        $nivel = $nivel1[$i];
    }
    $especialidad = (string) $_POST['m_especialidad'];
            try {
                $consultas = new Consultas();
                $consultas->getDoctor($m_nombre,$m_apellido,$m_sexo,$m_cedula,$clave,$nivel,$especialidad);
                // echo 'hecho.-->Procesar--Medico. <br>';
                // echo '<br>';
                // var_dump($m_nombre);
                // echo '<br>';
                // var_dump($m_apellido);
                // echo '<br>';
                // var_dump($m_sexo);
                // echo '<br>';
                // var_dump($m_cedula);
                // echo '<br>';
                // var_dump($clave);
                // echo '<br>';
                // var_dump($especialidad);
                header("location:?accion=NuevoUsuario");
                
                // echo "<pre>".$m_nombre.'<br>'.$m_apellido.'<br>'.$m_sexo.'<br>'.$m_cedula.'<br>'.$clave.'<br>'.$especialidad."</pre>";
            } catch (Exception $e) {
               echo 'try doctores... Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
            }

}elseif(isset($_POST['registroDiario'])){
    //DATOS DE MEDICO
    $iddoctor = $_SESSION['idmedico'];
    $idpaciente = $_POST['idpaciente'];
    $diagnostico = $_POST['diagnostico'];

    $centroClinico = $_POST['centroclinico'];
    for ($i=0; $i < count($centroClinico); $i++) { 
        $clinica = $centroClinico[$i];
    }
    $examen_result = $_POST['examen'];
    for ($i=0; $i < count($examen_result); $i++) { 
        $examen = $examen_result[$i];
    }
    $referido_result = $_POST['referido'];
    for ($i=0; $i < count($referido_result); $i++) { 
        $referido = $referido_result[$i];
    }
    $fecha=$_POST['fecha'];
    $consultas = new Consultas();
    $consultas->getConsulta($fecha,$diagnostico,$clinica,$examen,$referido,$idpaciente,$iddoctor);
    header('location:?accion=RegistroDiario');

}elseif(isset($_POST['editarpaciente'])){
	$p_nombre = (string) $_POST['p_nombre'];
	$p_apellido = (string) $_POST['p_apellido'];
	$p_edad = $_POST['p_edad'];
	$p_sexo = $_POST['p_sexo'];
	$p_cedula = $_POST['p_cedula'];
    $p_telefono = $_POST['p_telefono'];
    $p_direccion = (string) $_POST['p_direccion'];
    $personal = $_POST['p_personal'];
    for ($i=0; $i < count($personal); $i++) { 
        $p_personal = $personal[$i];
    }
    $mencion = $_POST['p_mencion'];
    for ($i=0; $i < count($mencion); $i++) { 
        $p_mencion = $mencion[$i];
    }
    $id = $_GET['id'];
   
    $consultas = new Consultas();
    $consultas->editarPaciente($p_nombre,$p_apellido,$p_edad,$p_sexo,$p_cedula,$p_telefono,$p_direccion,$p_personal,$p_mencion,$id);
    //echo "$p_nombre,$p_apellido,$p_edad,$p_sexo,$p_cedula,$p_telefono,$p_direccion,$p_personal,$p_mencion,$id";
    header('location:?accion=Listado');

}elseif(isset($_POST['editarmedico'])){
    $m_nombre =  $_POST['m_nombre'];
    $m_apellido =  $_POST['m_apellido'];
    $m_sexo =  $_POST['m_sexo'];
    $m_cedula = $_POST['m_cedula'];
    $nivel1 =  $_POST['nivel'];
    for ($i=0; $i < count($nivel1); $i++) { 
        $nivel = $nivel1[$i];
    }
    $especialidad = $_POST['m_especialidad'];
    $id = $_GET['id'];
    $consultas = new Consultas();
    $consultas->editarDoctor($m_nombre,$m_apellido,
        $m_sexo,$m_cedula,$nivel,$especialidad,$id);
    echo "$m_nombre,$m_apellido,$m_sexo,$m_cedula,$nivel,$especialidad,$id";
    //header('location:?accion=ListadoMedico');
}elseif(isset($_GET['eliminarD'])){
$id= $_GET['id'];





}