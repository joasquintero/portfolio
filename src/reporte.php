<?php
session_start();
require_once('dompdf/dompdf_config.inc.php');
require_once('core/funciones.php');
$funcion = new Funciones();
$reporte = $funcion->allMedicos();
$documento = '
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="../css/reporte.css">
<title>Ejemplo de Documento en PDF.</title>
</head>
<body>';
$documento .= '
<table BORDER>

    <tr>
        <th>Nombre</th> <th>Apellido</th> <th>Cedula</th> <th>Especialidad</th>
    </tr>';
foreach ($reporte as $medico) {
$documento .= '
    <tr>
        <td>'.$medico->nombre.'</td> <td>'.$medico->apellido.'</td> <td>'.$medico->cedula.'</td> <td>'.$medico->especialidad.'</td>
    </tr>
';
}
echo $documento .= '
</table>
</body>
</html>';
$nomdoc = "Medico_reporte.pdf";
$mipdf = new DOMPDF();
$mipdf->set_paper("A4", "portrait");
$mipdf->load_html(utf8_decode($documento));
$mipdf->render();
$mipdf->stream($nomdoc);
?>