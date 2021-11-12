<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <form action="datos.php" method="POST" id="form">
        <label for="">Dni</label>
        <input type="number" name="dni" id="dni">
        <br>
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="">Apellido</label>
        <input type="text" name="apellido" id="apellido">
        <br>
        <label for="">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="">celular</label>
        <input type="text" name="cel" id="cel">
        <br>
        <label for="">Teléfono fijo</label>
        <input type="text" name="fijo" id="fijo">
        <br>
        <label>Carrera</label>
        <select name="carr" id="carr">
            <option value="">Seleccione la carrera</option>
            <?php
        include('conexionBD.php');
        $link = Conexion();
        $sql = "SELECT codigo, nombre FROM carrera";
        $result = mysqli_query($link, $sql);
        while ($res = mysqli_fetch_row($result)) {
            ?>
            <option value="<?php echo $res[0] ?>">
                <?php echo $res[1]?>
            </option>
            <?php
        } ?>
        </select>
        <br>
        <label>Materias</label>
        <select name="mat" id="mat">
        </select>
        <br>
        <div class="comprobar"></div>
        <br>
        <input type="button" value="Siguiente" id="sig"/>
        <div id="secTitulo" style="display: none;">
            <label>Titulo</label>
            <br>
            <label for="">Nombre del Titulo otorgado<input type="text" name="titulo" id="titulo"></label>
            <br>
            <label for="">Nombre del establecimiento del Titulo Otorgado<input type="text" name="lugarTit"
                    id="lugarTit"></label>
            <br>
            <label for="">Nombre del Posgrado Otorgado<input type="text" name="posgrado" id="posgrado"></label>
            <br>
            <label for="">Nombre del establecimiento del Posgrado Otorgado<input type="text" name="lugarPos"
                    id="lugarPos"></label>
            <br>
        </div>
        <br>
        <div id="datosProf" style="display: none;">
            <label for="">Domicilio</label>
            <input type="text" name="domicilio" id="domicilio">
            <br>
            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fechaNac" id="fechaNac">
            <br>
            <label for="">Estado Civil</label>
            <input type="text" name="estCivil" id="estCivil">
            <br>
            <label for="">Hijos(Si-No)</label>
            <input type="text" name="hijos" id="hijos">
            <br>
            <label>Localidad</label>
            <select name="localidad" id="localidad">
                <option value="">Seleccione el Departamento</option>
                <?php
                $sql = "SELECT codPostal, localidad FROM localidades";
                $result = mysqli_query($link, $sql);
                while ($res = mysqli_fetch_array($result)) {
                    ?>
                <option value="<?php echo $res['codPostal']?>">
                    <?php echo $res['localidad']?>
                </option>
                <?php
                } ?>
            </select>
            <br>
            <input type="submit" value="Enviar" />
        </div>
    </form>


    <script type="text/javascript">
        $(document).ready(function () {
            recargarLista();

            $('#carr').change(function () {
                recargarLista();
            });

            $('#sig').click(function () {
                if($('#dni').val() == 0 || $('#dni').val().length < 8){
                    alert('Debe proporcionar el dni');
                }else{
                    verificarProfesor();
                }
            });

        });
    </script>

    <script>
        function recargarLista() {
            $.ajax({
                type: 'POST',
                url: 'selectDep.php',
                data: 'carrera=' + $('#carr').val(),
                success: function (r) {
                    $('#mat').html(r);
                }
            });
        }

        function verificarProfesor() {
            $.ajax({
                type: 'POST',
                url: 'comprobarProfesor.php',
                data: 'dni=' + $('#dni').val(),
                success: function (r) {
                    $('.comprobar').html(r);
                }
            });
        }
    </script>

</body>

</html>