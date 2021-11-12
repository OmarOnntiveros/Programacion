<?php
error_reporting(0);
include('conexionBD.php');
include('funciones.php');
$link = Conexion();
//Postulantes
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$celular = $_POST["celular"];
if(empty($_POST["telefonoFijo"])){
    $fijo = 'No especificado';
}else{
    $fijo = $_POST['telefonoFijo'];

    $codCarrera = $_POST["carr"];
    $codMateria = $_POST["mat"];
    //Titulo
    $titulo = $_POST['titulo'];
    $lugarTit = $_POST['lugarTit'];
    $posgrado = $_POST['posgrado'];
    $lugarPos = $_POST['lugarPos'];
    //AltaProfesor
    $domicilio = $_POST['domicilio'];
    $fechaNac = $_POST['fechaNac'];
    $estCivil = $_POST['estCivil'];
    $hijos = $_POST['hijos'];
    $localidad = $_POST['localidad'];

    $sqlI = "SELECT COUNT(dni) AS cont FROM postulantes WHERE dni IN (SELECT postulantes_dni2 FROM profesores WHERE dni = '$dni')";
    $result = mysqli_query($link, $sqlI);
    $res = mysqli_fetch_array($result);
    $count = $res['cont'];
    if ($count == 0) {
        insertarPostulante($link, $dni, $nombre, $apellido, $email, $celular, $fijo, $codMateria, $codCarrera);

        insertarTitulo($link, $dni, $titulo, $lugarTit, $posgrado, $lugarPos);

        insertarProfesor(
            $link,
            $dni,
            $nombre,
            $apellido,
            $email,
            $celular,
            $fijo,
            $codMateria,
            $codCarrera,
            $domicilio,
            $fechaNac,
            $estCivil,
            $hijos,
            $localidad
        );
        header('Location: inscriptos.php');
    } else {
        actualizarDatosPostulante(
            $link,
            $dni,
            $nombre,
            $apellido,
            $email,
            $celular,
            $fijo,
            $codMateria,
            $codCarrera
        );
        actualizarTitulo($link, $dni);
        actualizarDatosProfesor($link, $dni, $nombre, $apellido, $email, $celular, $fijo);
        header('Location: inscriptos.php');
    }
}