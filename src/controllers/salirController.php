<?php
session_start();
require_once('core/conexion.php');
require_once('core/consultas.php');
$c = new Consultas();
$c->autenticar();
$c->salir();