<?php  
session_start();
if(isset($_POST['submit'])){
    if(isset($_POST['username']) or isset($_POST['password'])){
        if(!empty($_POST['username']) or !empty($_POST['username'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $consulta = new Consultas();
            $validar = $consulta->logear($user,$pass);
            foreach($validar as $valido){
                $username = $valido->usuario;
                $password = $valido->clave;
            }
            if(($user == $username) and ($pass == $password)){
                $_SESSION['username'] = $user;
                //$_SESSION['Lv'] = $Lv;
                //$_SESSION['cargo'] = $cargo;
                header("location:?accion=home");
            }else{
                echo ' un error en el if4 algun campo esta erroneo...';
                header("location:?accion=signup?mensaje=Usuario o contraseña incorrectos");
            }
        }else{
            echo ' un error en el if3 algun campo esta erroneo...';
            header("location:?accion=signup?mensaje=Usuario o contraseña incorrectos");
        }
    }else{
        echo ' un error en el if2 uno de los campos esta vacio';
        header("location:?accion=signup?mensaje=Porfavor Rellene los campos");
    }
}else{
    echo ' un error en el if1 los campos estan vacios';
    header("location:?accion=signup?mensaje=Porfavor Rellene los campos");
}