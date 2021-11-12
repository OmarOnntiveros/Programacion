<?php
include('../conexionBD.php');
$link = Conexion();
$codCarrera = $_POST["carrera"];

selectMateria($link, $codCarrera);

function selectMateria($link, $codCarrera){
    $sql = "SELECT codigo, nombre FROM materia WHERE codigo IN (SELECT materia_codigo3 FROM materia_carrera 
        WHERE carrera_codigo3 IN (SELECT codigo FROM carrera WHERE codigo = '$codCarrera'))";
    $result = mysqli_query($link, $sql);

    $cadena = '<option value="">Seleccione la materia (Primero debe elegir la carrera)</option>';
    while ($res = mysqli_fetch_row($result)) {
        $cadena = $cadena . '<option value='. $res[0] .'>'. utf8_encode($res[1] . '</option>');
    }

    echo $cadena;
}



