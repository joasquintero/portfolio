<?php
function conectarse()
{
$servidor="localhost";
$usuario = "root";
$password="";
$bd = "tienda";

$conectar = new mysqli($servidor,$usuario,$password,$bd) or die("No se pudo conectarse a la BD");
return $conectar;
}
$conexion = conectarse();

    $año = $_POST['año'];
    for ($i=0; $i < 11; $i++) { 
        $sql[$i] = "SELECT SUM(monto_venta) FROM ventas WHERE MONTH(fecha_venta)='$i+1' AND YEAR(fecha_venta)='año' WHERE diagnostico = diagnostico";
        $ejecutar_mes  = $conexion->query($sql[$i]);
        $meses[$i] = $ejecutar_mes->fetch_assoc();
	}
    $data = array(0 => round($meses[0],1),
        1 => round($meses[1],1),
        2 => round($meses[2],1),
        3 => round($meses[3],1),
        4 => round($meses[4],1),
        5 => round($meses[5],1),
        6 => round($meses[6],1),
        7 => round($meses[7],1),
        8 => round($meses[8],1),
        9 => round($meses[9],1),
        10 => round($meses[10],1),
        11 => round($meses[11],1)
    );
    // $data = array(
    //     0 => round($enero['r'],1),
    //     1 => round($febrero['r'],1),
    //     2 => round($marzo['r'],1),
    //     3 => round($abril['r'],1),
    //     4 => round($mayo['r'],1),
    //     5 => round($junio['r'],1),
    //     6 => round($julio['r'],1),
    //     7 => round($agosto['r'],1),
    //     8 => round($septiembre['r'],1),
    //     9 => round($octubre['r'],1),
    //     10 => round($noviembre['r'],1),
    //     11 => round($diciembre['r'],1)
    // );			 
        return json_encode($data);
?>