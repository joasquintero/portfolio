<?php
function Pmostrar(){
    $consultas = new Consultas();
    $filas = $consultas->listarPaciente();
    echo "<table class=table table-striped>";
    echo    "<tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Cedula</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>";
          
    foreach($filas as $fila){
        echo "<tr>";
        echo "<td>".$fila->cod_paciente."</td>";
        echo "<td>".$fila->nombre."</td>";
        echo "<td>".$fila->apellido."</td>";
        echo "<td>".$fila->edad."</td>";
        echo "<td>".$fila->sexo."</td>";
        echo "<td>".$fila->cedula."</td>";
        echo "<td>"."<i class="."btn".">O</i>"."</td>";
        echo "<td>"."<i class="."btn".">X</i>"."</td>";
        echo "</tr>";
    }
    echo "</table>";
}