<?php

    function insertarPostulante($link, $dni, $nombre, $apellido, $email, $celular, $fijo, $codMateria, $codCarrera)
    {
        $sql = "INSERT INTO postulantes(dni, nombre, apellido, email, celular, tel_fijo, fechaInscripcion, materia_codigo4, carrera_codigo4)
        VALUES('$dni', '$nombre', '$apellido', '$email', '$celular', $fijo, CURDATE(), '$codMateria', '$codCarrera')";
        if (mysqli_query($link, $sql)) {
            echo 'Postulante cargado';
        } else {
            echo 'Postulante no aplicado. Error. ' . $sql . '<br>';
        }
    }

    function insertarTitulo($link, $dni, $titulo, $lugarTit, $posgrado, $lugarPos)
    {
        $sql = "INSERT INTO titulo VALUES ('$dni', '$titulo', '$lugarTit', '$posgrado', '$lugarPos')";
        if (mysqli_query($link, $sql)) {
            echo 'Titulo aplicado';
        } else {
            echo 'Titulo no aplicado. Error: ' . $sql . '<br>';
        }
    }

    function insertarProfesor(
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
    ) {
        $insertarProf = "INSERT INTO profesores(dni, nombre, apellido, email, celular, tel_fijo, domicilio,
                        fechaNacimiento, estadoCivil, hijos, fechaIngreso, postulantes_dni2,
                        titulo_dni, localidades_codPostal2)
                        VALUES ('$dni', '$nombre', '$apellido', '$email', '$celular', '$fijo', '$domicilio',
                        '$fechaNac', '$estCivil', '$hijos', CURDATE(), '$dni', '$dni', '$localidad')";
        if (mysqli_query($link, $insertarProf)) {
            echo 'Profesor añadido con exito' . $insertarProf;
        } else {
            echo 'Profesor no añadido. Error: ' . $insertarProf;
        }
    }

    function actualizarDatosPostulante($link, $dni, $nombre, $apellido, $email, 
                                    $celular, $fijo, $codMateria, $codCarrera){
        $actPost = "UPDATE postulantes SET dni = '$dni', nombre = '$nombre', apellido = '$apellido', email = '$email', celular = '$celular', 
        tel_fijo = '$fijo', fechaInscripcion = CURDATE(), materia_codigo4 = '$codMateria', carrera_codigo4 = '$codCarrera' WHERE dni = '$dni'";
        if(mysqli_query($link, $actPost)){
            echo 'Datos actualizados Postulantes';
        }else{
            echo 'Datos actualizados Postulantes';
        }
    }

    function actualizarTitulo($link, $dni){
        $actDniTitulo = "UPDATE titulo SET dni = '$dni'";
        if(mysqli_query($link, $actDniTitulo)){
            echo 'Dni actualizado Titulo';
        }else{
            echo 'Dni no actualizado Titulo';
        }
    }

    function actualizarDatosProfesor($link, $dni, $nombre, $apellido, $email, $celular, $fijo){
        $actProf = "UPDATE profesores SET dni = '$dni', nombre = '$nombre', apellido = '$apellido', email = '$email', celular = '$celular', 
        tel_fijo = '$fijo', postulantes_dni2 = '$dni', titulo_dni = '$dni'";
        if(mysqli_query($link, $actProf)){
            echo "Datos actualizados Profesores";
        }else{
            echo "<br>Datos no actualizados Profesores: " . $actProf;
        }
    }

    function establecerProfesor($link, $dni, $codCarrera, $codMateria, $estado, $codSede)
    {
        $insertCarr = "INSERT INTO profesores_carrera(profesores_dni3, carrera_codigo2) VALUES ('$dni', '$codCarrera')";
        $insertMat = "INSERT INTO profesores_materia(profesores_dni2, materia_codigo2, estado) VALUES ('$dni', '$codMateria', '$estado')";
        $insertSede = "INSERT INTO profesores_sede(sede_codigo3, profesores_dni4) VALUES ('$codSede', '$dni')";
        mysqli_query($link, $insertCarr);
        mysqli_query($link, $insertMat);
        mysqli_query($link, $insertSede);
    }