<?php
    function Conexion()
    {
        $link = mysqli_connect("localhost", "root", "", "gestionprofesores");
        if (!($link)) {
            echo "Error conectando a la base de datos.";
            exit();
        }
        return $link;
    }
?>