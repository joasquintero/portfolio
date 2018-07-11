<?php

########## PACIENTE ##########
if (isset($_POST['paciente'])) {
	$p_nombre = $_POST['p_nombre'];
	$p_apellido = $_POST['p_apellido'];
	$p_edad = $_POST['p_edad'];
	$p_sexo = $_POST['p_sexo'];
	$p_cedula = $_POST['p_cedula'];
	if(strlen($p_nombre) > 0 and strlen($p_apellido) > 0){
	  if(strlen($p_edad) > 0 and strlen($p_sexo) > 0){
	    if(strlen($p_cedula) > 0){
	        $consultas = new Consultas();
	        $consultas->insertarPaciente($p_nombre,$p_apellido,$p_edad,$p_sexo,$p_cedula);
            header("location:?accuib=signup");
	        }
	    }
	}else{
	    echo ("<h3></h3><b>Oops!! parece que olvidaste algo!</b></h3>");
	}
}
if(isset($_POST['submitM'])){
    $m_nombre = $_POST['m_nombre'];
    $m_apellido = $_POST['m_apellido'];
    $m_edad = $_POST['m_edad'];
    $m_sexo = $_POST['m_sexo'];
    $m_cedula = $_POST['m_cedula'];
    //$m_cargo = $_POST['m_cargo'];
    if(strlen($m_nombre) > 0 and strlen($m_apellido) > 0){
      if(strlen($m_edad) > 0 and strlen($m_sexo) > 0){
        if(strlen($m_cedula) > 0){
            $consultas = new Consultas();
            $consultas->insertarDoctor($m_nombre,$m_apellido,$m_edad,$m_sexo,$m_cedula);
            header("location:?accion=signup");
        	}else{
    			echo ("<h3></h3><b>Oops!! parece que olvidaste algo!</b></h3>");
        	}
        }else{
        	echo ("<h3></h3><b>Oops!! parece que olvidaste algo!</b></h3>");
        }
    }else{
        echo ("<h3></h3><b>Oops!! parece que olvidaste algo!</b></h3>");
    } 
}