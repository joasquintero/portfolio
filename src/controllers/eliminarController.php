<?php 
ini_set("session.cookie_lifetime","1450");
ini_set("session.gc_maxlifetime","1450");
session_start();
require_once('core/conexion.php');
require_once('core/consultas.php');
$c = new Consultas();
$c->autenticar();
$id = $c-> cleardata($_GET['id']);
$valor = $c-> cleardata($_GET['valor']);
if ($valor == '0') {
	$table = "pacientes";
	$idTable = "idpaciente";
	$c->delite($id,$table,$idTable);
	header("location:?accion=Listado");
}elseif ($valor == '1') {
	$table = "doctores";
	$idTable = "iddoctores";
	$c->delite($id,$table,$idTable);
	header("location:?accion=ListadoMedico");
}else{
	 header("location:?accion=home");
}
//$c-> delite($id,$table,$idTable);

 ?>