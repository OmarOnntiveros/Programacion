<?php
    include('../conexionBD.php');
    $link = Conexion();
    $codCarrera = $_POST["carrera"];
    selectSede($link, $codCarrera);
    function selectSede($link, $codCarrera){
        $sqlSede = "SELECT codigo, nombre FROM sede WHERE codigo IN (SELECT sede_codigo2 FROM sede_carreras WHERE carrera_codigo7 
                IN (SELECT codigo FROM carrera WHERE codigo = '$codCarrera'))";
        $result = mysqli_query($link, $sqlSede);
    
        $selectSede = '<option value="">Seleccione la sede</option>';
        while($res = mysqli_fetch_row($result)){
            $selectSede = $selectSede . '<option value=' . $res[0] . '>' . $res[1] . '</option>';
        }
        echo $selectSede;
    }
?>