<?php
require_once('core/core.php');

$accion = isset($_GET['accion']) ? $_GET['accion'] :'login';

if(file_exists('controllers/'.$accion.'Controller.php')){
	include('controllers/'.$accion.'Controller.php');
}else{
	include('controllers/errorController.php');
}