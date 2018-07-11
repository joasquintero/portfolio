<?php
require_once("consultas.php");
class Funciones extends Consultas{

function editar($tabla,$datos){
	$sql = "UPDATE $tabla SET $datos= WHERE $dato= LIKE $dato=";
}
function allMedicos(){
	$conexion = new Conexion();
	$sql = "SELECT * from doctores where estatus = 1";
	$declaracion = $conexion->conn->prepare($sql);
	$declaracion->execute();
	return $declaracion->fetchAll(PDO::FETCH_OBJ);
}
function allpacientes(){
	$conexion = new Conexion();
	$sql = "SELECT * from pacientes where estatus = 1";
	$declaracion = $conexion->conn->prepare($sql);
	$declaracion->execute();
	return $declaracion->fetchAll(PDO::FETCH_OBJ);
}
function allconsultas(){
	$conexion = new Conexion();
	$sql = "SELECT * from consultas where estatus = 1";
	$declaracion = $conexion->conn->prepare($sql);
	$declaracion->execute();
	return $declaracion->fetchAll(PDO::FETCH_OBJ);
}


}