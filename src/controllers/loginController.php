<?php
session_start();
require_once('core/conexion.php');
require_once('core/consultas.php');

//detectando errores de inicio de sesion.
//By Brando
$error = isset($_GET['error']) ? $_GET['error'] : 'default';
switch ($error) {
	case '0':
		$error = "<script>alert('El usuario es Invalido')</script>";
		break;
	case '1':
		$error = "<script>alert('A ocurrido un problema inesperado, intenta nuevamente')</script>";
		break;
	case '2':
		$error = "<script>alert('Complete todos los Campos')</script>";
		break;
	case '':
		$error = '';
		break;
	
	default:
		$error = '';
		break;
}

$c = new Consultas();
$c->validar();
include(HTML_DIR.'header.php');

include(HTML_DIR.'login.php');

include(HTML_DIR.'footer.php');
echo $error;