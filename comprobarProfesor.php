<?php
    include('conexionBD.php');
    $link = Conexion();
    $dni = $_POST['dni'];
    $cadena = '';
    $sqlI = "SELECT COUNT(dni) AS cont FROM postulantes WHERE dni IN (SELECT postulantes_dni2 FROM profesores WHERE dni = '$dni')";
    $result = mysqli_query($link, $sqlI);
    $res = mysqli_fetch_array($result);
    $count = $res['cont'];
    if($count == 0){
        $cadena = '<script type="text/javascript">
                    $("#secTitulo").show();
                    $("#datosProf").show();
                    $("#sig").hide();   
                   </script>';       
    }else{
        $cadena =   '<script type="text/javascript">
                        //$("#divDniNuevo").show();
                        $("#secTitulo").hide();
                        $("#datosProf").hide();
                        $("#sig").attr("type", "submit");
                        $("#sig").attr("value", "Aceptar");  
                        $("#sig").show();    
                    </script>
                    <span id="infoProfe">Usted ya esta inscripto como profesor. Solamente se tomarán los datos de la carrera y materia</span>';
    }
    echo $cadena;
?>