<?php
    include('conexionBD.php');
    include('funciones.php');
    $link = Conexion();

    $dni = $_GET['dni'];
    $codCarrera = $_POST['carreraProf'];
    $codMateria = $_POST['materiaProf'];
    $estado = $_POST['estado'];
    $codSede = $_POST['sedeProf'];

    if(establecerProfesor($link, $dni, $codCarrera, $codMateria, $estado, $codSede)){
        header('Location: Profesores.php');
    }else{
        echo 'Ha ocurrido un error al momento de establecer los datos al profesor';
    }
?>
<html

    
