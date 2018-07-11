<?php
/*
esta es una de las secciones principales de la aplicacion junto a conexion y procesarController.php
aqui estan todas las consultas y peticiones que se le haran a la base de datos si hay algun problema
con la insercion de datos el problema puede estar aqui y en procesarController.php


*/
require_once ('conexion.php');
#### CLASE PARA CONSULTAS EN GENERAL ####
class Consultas extends Conexion{
#### get**** ES PARA INSERTAR DATOS EN LA BD ##########

    // function getTelefono($p_telefono){
    //     $conexion = new Conexion();
    //     $sql = "INSERT INTO telefonos (telefono) VALUES (:telefono)";
    //     $declaracion = $conexion->conn->prepare($sql);
    //     $declaracion->bindParam(':telefono',$p_telefono);
    //     //$declaracion->execute();
    //     if (is_null($declaracion) and !isset($declaracion)) {
    //         echo 'error';
    //     }else{
    //         try {
    //         $declaracion->execute();
    //         echo 'hecho.-->getTelefono <br>';
    //         //header("location:?accion=home");                  
    //         } catch (Exception $e) {
    //             echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
    //         }
    //     }
    // }
    // function getDireccion($p_direccion){
    //     $conexion = new Conexion();
    //     $sql = "INSERT INTO direcciones (direccion) VALUES (:direccion)";
    //     $declaracion = $conexion->conn->prepare($sql);
    //     $declaracion->bindParam(':direccion',$p_direccion);
    //     //$declaracion->execute();
    //     if (is_null($declaracion) and !isset($declaracion)) {
    //         echo 'error';
    //     }else{
    //         try {
    //         $declaracion->execute();
    //         echo 'hecho.-->getDireccion <br>';
    //         //header("location:?accion=home");                  
    //         } catch (Exception $e) {
    //             echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
    //         }
    //     }
    // }
    // function getPersonal($p_personal){
    //     $conexion = new Conexion();
    //     $sql = "INSERT INTO pacientes (idpersonal) VALUES (:personal)";
    //     $declaracion = $conexion->conn->prepare($sql);
    //     $declaracion->bindparam(':personal',$p_personal);
    //     //$declaracion->execute();
    //     if (is_null($declaracion) and !isset($declaracion)) {
    //         echo 'error';
    //     }else{
    //         try {
    //         $declaracion->execute();
    //         echo 'hecho.-->getPersonal <br>';
    //         //header("location:?accion=home");                  
    //         } catch (Exception $e) {
    //             echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</strong></pre>';
    //         }
    //     }
    // }
    // function getMencion($p_mencion){
    //     $conexion = new Conexion();
    //     $sql = "INSERT INTO pacientes (idmencion) VALUES (:mencion)";
    //     $declaracion = $conexion->conn->prepare($sql);
    //     $declaracion->bindparam(':mencion',$p_mencion);
    //     //$declaracion->execute();
    //     if (is_null($declaracion) and !isset($declaracion)) {
    //         echo 'error';
    //     }else{
    //         try {
    //         $declaracion->execute();
    //         echo 'hecho.-->getMencion <br>';
    //         //header("location:?accion=home");                  
    //         } catch (Exception $e) {
    //             echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</strong></pre>';
    //         }
    //     }        
    // }
    // function getEspecialidad($m_especialidad){
    //     $conexion = new Conexion();
    //     $sql = "INSERT INTO especialidades (especialidad) VALUES (:especialidad)";
    //     $declaracion = $conexion->conn->prepare($sql);
    //     $declaracion->bindParam(':especialidad',$m_especialidad);
    //     //$declaracion->execute();
    //     if (is_null($declaracion) and !isset($declaracion)) {
    //         echo 'error';
    //     }else{
    //         try {
    //         $declaracion->execute();
    //         echo 'hecho.-->getEspecialidad <br>';
    //         //header("location:?accion=home");                  
    //         } catch (Exception $e) {
    //             echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
    //         }
    //     }
    // }
    function cleardata($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function delite ($id,$table,$idTable){
         $conexion = new Conexion();
         $sql = " UPDATE $table SET 
         estatus = '0'  WHERE $idTable = :id";
         $consulta = $conexion->conn->prepare($sql);
         $consulta-> execute(array(
            'id' => $id
        )); 
    }
    function getPaciente($p_nombre,$p_apellido,$p_edad,$p_sexo,$p_cedula,$p_telefono,$p_direccion,$p_personal,$p_mencion){
        $conexion = new Conexion();
        $sql = "INSERT INTO pacientes (nombre, apellido, edad, sexo, cedula, telefono, direccion, personal, mencion) VALUES (:nombre,:apellido,:edad,:sexo,:cedula,:telefono,:direccion, :personal, :mencion);";
        $declaracion = $conexion->conn->prepare($sql);
        $declaracion->bindParam(':nombre',$p_nombre);
        $declaracion->bindParam(':apellido',$p_apellido);
        $declaracion->bindParam(':edad',$p_edad);
        $declaracion->bindParam(':sexo',$p_sexo);
        $declaracion->bindParam(':cedula',$p_cedula);
        $declaracion->bindParam(':telefono',$p_telefono);
        $declaracion->bindParam(':direccion',$p_direccion);
        $declaracion->bindParam(':personal',$p_personal);
        $declaracion->bindParam(':mencion',$p_mencion);    
        $declaracion->execute();
    }
    function getDoctor($m_nombre,$m_apellido,$m_sexo,$m_cedula,$nivel,$especialidad){
        $conexion = new Conexion();
        $sql = "INSERT INTO doctores (nombre, apellido, sexo, cedula, clave, nivel, especialidad) VALUES (:nombre, :apellido, :sexo, :cedula, :clave, :nivel, :especialidad);";
        $declaracion = $conexion->conn->prepare($sql);
        $declaracion->bindParam(':nombre',$m_nombre);
        $declaracion->bindParam(':apellido',$m_apellido);
        $declaracion->bindParam(':sexo',$m_sexo);
        $declaracion->bindParam(':cedula',$m_cedula);
        $declaracion->bindParam(':clave',$clave);
        $declaracion->bindParam(':nivel',$nivel);
        $declaracion->bindParam(':especialidad',$especialidad);
        $declaracion->execute();
    }
    function getConsulta($fecha,$diagnostico,$clinica,$examen,$referido,$idpaciente,$iddoctor){
      $conexion = new Conexion();

      $sql = "INSERT INTO consultas (fecha,diagnostico,centroclinico,examen,referencia,idpaciente,iddoctores) VALUES (:fecha,:diagnostico,:clinica,:examen,:referencia,:idpaciente,:iddoctores);";
      $declaracion->prepare($sql);
      $declaracion->bindParam(':fecha',$fecha);
      $declaracion->bindParam(':diagnostico',$diagnostico);
      $declaracion->bindParam(':clinica',$clinica);
      $declaracion->bindParam(':examen',$examen);
      $declaracion->bindParam(':referencia',$referido);
      $declaracion->bindParam(':idpaciente',$idpaciente);
      $declaracion->bindParam(':iddoctores',$iddoctores);
      $declaracion->execute();
    }

### set**** ES PARA EXTRAER TODO LOS DATOS DE UNA TABLA JUNTO A SUS TABLAS RELACIONADAS ##########
    function setPaciente(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM pacientes WHERE estatus ='1'";
        $declaracion = $conexion->conn->prepare($sql);
        if (is_null($declaracion) and !isset($declaracion)){
            echo 'error';
        }else{
            try {
                $declaracion->execute();
                return $declaracion->fetchAll(PDO::FETCH_OBJ);
                //echo 'hecho.-->get <br>';       
            } catch (Exception $e) {
                echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
            }
        }        
    }
    function setDoctor(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM doctores WHERE estatus ='1'";
        $declaracion = $conexion->conn->prepare($sql);
        if (is_null($declaracion) and !isset($declaracion)){
            echo 'error';
        }else{
            try {
                $declaracion->execute();
                return $declaracion->fetchAll(PDO::FETCH_OBJ);
                //echo 'hecho.-->get <br>';       
            } catch (Exception $e) {
                echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
            }
        }
    }
    function setConsulta(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM consultas
                INNER JOIN doctores ON consultas.iddoctores = doctores.iddoctores
                INNER JOIN pacientes ON consultas.idpaciente = pacientes.idpaciente
                INNER JOIN centroclinico ON consultas.idcentroclinico = centroclinico.idcentroclinico";
        $declaracion = $conexion->conn->prepare($sql);
        if (is_null($declaracion) and !isset($declaracion)){
            echo 'error';
        }else{
            try {
                $declaracion->execute();
                return $declaracion->fetchAll(PDO::FETCH_OBJ);
                //echo 'hecho.-->get <br>';       
            } catch (Exception $e) {
                echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
            }
        }      
    }

### select**** ES PARA BUSCAR LOS DATOS ESPECIFICOS DE UNA TABLA JUNTO A SUS TABLAS RELACIONADAS ##########
    function selectPaciente($paciente_cedula){
        $conexion = new Conexion();
        $sql = "SELECT * FROM pacientes WHERE cedula = :cedula";
        $declaracion = $conexion->conn->prepare($sql);
        $declaracion->bindparam(':cedula',$paciente_cedula);
        if (is_null($declaracion) and !isset($declaracion)){
            echo 'error';
        }else{
            try {
                $declaracion->execute();
                return $declaracion->fetchAll(PDO::FETCH_OBJ);
                //header('location:?accion=RegistroDiario');     
            } catch (Exception $e) {
                echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
            }
        }        
    }
    function selectDoctor($medico_cedula){
        $conexion = new Conexion();
        $sql = "SELECT * FROM doctores
                INNER JOIN especialidades ON especialidades.idespecialidad = doctores.idespecialidad
                WHERE doctores.cedula = :cedula";
        $declaracion = $conexion->conn->prepare($sql);
        $declaracion->bindparam(':cedula',$medico_cedula);
        if (is_null($declaracion) and !isset($declaracion)){
            echo 'error';
        }else{
            try {
                $declaracion->execute();
                return $declaracion->fetchAll(PDO::FETCH_OBJ);
                //header('location:?accion=RegistroDiario');     
            } catch (Exception $e) {
                echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
            }
        }         
    }
    function selPaciente($id){
        $conexion = new Conexion();
        $sql = "SELECT * FROM pacientes WHERE idpaciente = :id";
        $declaracion = $conexion->conn->prepare($sql);
        $declaracion->bindparam(':id',$id);
        $declaracion->execute();
        return $declaracion->fetchAll(PDO::FETCH_OBJ);      
    }
    function selDoctor($id){
        $conexion = new Conexion();
        $sql = "SELECT * FROM doctores WHERE iddoctores = :id";
        $declaracion = $conexion->conn->prepare($sql);
        $declaracion->bindparam(':id',$id);
        $declaracion->execute();
        return $declaracion->fetchAll(PDO::FETCH_OBJ);      
    }
### EDICION DE DATOS O ELIMINAR DATOS ##########
function editarPaciente($p_nombre,$p_apellido,$p_edad,$p_sexo,$p_cedula,$p_telefono,$p_direccion,$p_personal,$p_mencion, $id){
    $conexion = new Conexion();
    $sql = ("UPDATE pacientes SET 
    nombre = :p_nombre,
    apellido = :p_apellido,
    edad = :p_edad,
    sexo = :p_sexo,
    cedula = :p_cedula,
    telefono = :p_telefono,
    direccion = :p_direccion,
    personal = :p_personal,
    mencion = :p_mencion 
    WHERE idpaciente = :id");
    $declaracion = $conexion->conn->prepare($sql);
    $declaracion->execute(array(
        ':p_nombre'=> $p_nombre,
        ':p_apellido'=>$p_apellido,
        ':p_edad'=>$p_edad,
        ':p_sexo'=>$p_sexo,
        ':p_cedula'=>$p_cedula,
        ':p_telefono'=>$p_telefono,
        ':p_direccion'=>$p_direccion,
        ':p_personal'=>$p_personal,
        ':p_mencion'=>$p_mencion,
        ':id' => $id
        ));

}
function editarDoctor($m_nombre,$m_apellido,$m_sexo,$m_cedula,$nivel,$especialidad,$id){
    $conexion = new Conexion();
    // $res = UPDATE `doctores` SET `especialidad` = 'posologo', `fecha_registro` = '2018-06-04 21:32:31' WHERE `doctores`.`iddoctores` = 5;
    $sql = ("UPDATE doctores SET 
        nombre = :m_nombre,
        apellido = :m_apellido,
        sexo = :m_sexo,
        cedula = :m_cedula,
        nivel = :nivel,
        especialidad = :especialidad
    WHERE doctores.iddoctores = :id");
    $declaracion = $conexion->conn->prepare($sql);
    $declaracion->execute(array(
        ':nombre'=>$m_nombre,
        ':apellido'=>$m_apellido,
        ':sexo'=>$m_sexo,
        ':cedula'=>$m_cedula,
        ':nivel'=>$nivel,
        ':especialidad'=>$especialidad,
        ':id'=> $id
        ));
   //return var_dump($m_nombre,$m_apellido,$m_sexo,$m_cedula,$nivel,$especialidad,$id);
}

### DE AQUI EN ADELANTE ESTAN LAS FUNCIONES DE VALIDACION DE USUARIO Y LOGIN ##########
    function check_cedula($cedula,$tabla){
        $conexion = new Conexion();
        $sql = "SELECT cedula FROM $tabla";
        $declaracion = $conexion->conn->prepare($sql);
        $declaracion->execute();
        return $declaracion->fetchAll(PDO::FETCH_OBJ);
    }

    private function logear($cedula,$pass){
        $conexion = new Conexion();
        $sql = "SELECT * FROM doctores WHERE cedula = :cedula AND clave = :clave";
        $declaracion = $conexion->conn->prepare($sql);
        $declaracion->bindParam(':cedula',$cedula);
        $declaracion->bindParam(':clave',$pass);
        if (is_null($declaracion) and !isset($declaracion)){
            echo 'error';
        }else{
            try {
                $declaracion->execute();
                return $declaracion->fetchAll(PDO::FETCH_OBJ);
                //echo 'hecho.-->get <br>';       
            } catch (Exception $e) {
                echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
            }
        }
    }
    function prueba(){
        $conexion = new Conexion();
        $sql = "SELECT * FROM consultas
                WHERE idpaciente = 1";
        $declaracion = $conexion->conn->prepare($sql);
        if (is_null($declaracion) and !isset($declaracion)){
            echo 'error';
        }else{
            try {
                $declaracion->execute();
                return $declaracion->fetchAll(PDO::FETCH_OBJ);
                //echo 'hecho.-->get <br>';       
            } catch (Exception $e) {
                echo 'Se ha Presentado un Error. <pre><strong>' . $e->getMessage() . '</pre></strong>';
            }
        }
    }
    
    public function validar(){
        if(isset($_POST['submit'])){
            if(isset($_POST['cedula']) and isset($_POST['password'])){
                if(!empty($_POST['cedula']) or !empty($_POST['password'])){
                    $cedula = $_POST['cedula'];
                    $pass = md5($_POST['password']);
                    $consulta = new Consultas();
                    $validar = $consulta->logear($cedula,$pass);
                    foreach($validar as $valido){
                        $nombre = $valido->nombre;
                        $apellido = $valido->apellido;   
                        $nivel = $valido->nivel;
                        $id = $valido->iddoctores;              
                        $ceduladb = $valido->cedula;
                        $password = $valido->clave;
                    }
                    if(($cedula == $ceduladb) and ($pass == $password)){
                        $_SESSION['username'] = $nombre + $apellido;
                        $_SESSION['medico_nombre'] = $nombre;
                        $_SESSION['medico_apellido'] = $apellido;
                        $_SESSION['medico_cedula'] = $cedula;
                        $_SESSION['nivel'] = $nivel;
                        $_SESSION['idmedico'] = $id;
                        //$_SESSION['medico_especialidad'] = $especialidad;
                         header("location:?accion=home");
                        }else{
                            header("location:?accion=login&error=0");
                            //userInvalido
                            //secho ' un error en el if4 algun campo esta erroneo...';
                        }
                }else{
                    header("location:?accion=login&error=1");
                    //echo ' un error en el if3 algun campo esta erroneo...';

                }
            }else{
                header("location:?accion=login&error=2");
                //echo ' un error en el if2 uno de los campos esta vacio';

            }
        }
    }
    public function autenticar(){
        if(!isset($_SESSION['username'])){
            unset($validar);
            unset($_SESSION);
            session_destroy();
            header("location:?accion=login");
        }
    }
    public function salir(){
        if(isset($_SESSION['username'])){
            unset($validar);
            unset($_SESSION);
            session_destroy();     
            header("location:?accion=login");                       
        }
    }



}
//INSERT INTO `doctores` (`nombre`, `apellido`, `sexo`, `cedula`, `clave`, `nivel`, `especialidad`, `iddoctores`) VALUES ('DOCTOR 2', 'APELLIDO DEL DOCTOR 2', 'masculino', '12', '123', '3', 'TIENE ESPECIALIDAD WOW', NULL);