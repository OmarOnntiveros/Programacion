<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/Prueba-style.css" media="all" rel="Stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script defer src="PruebajavaScript.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            recargarLista();

            $('#carr').change(function () {
                recargarLista();
            });

            $('#dni').change(function () {
                if ($('#dni').val() == 0 || $('#dni').val().length < 8) {
                    alert('Debe proporcionar el dni');
                } else {
                    verificarProfesor();
                }
            });

            $('#sig').click(function () {
                if ($('#dni').val() == 0 || $('#dni').val().length < 8) {
                    alert('Debe proporcionar el dni');
                } else {
                    verificarProfesor();
                }
            });
        });
    </script>

    <script>
        function recargarLista() {
            $.ajax({
                type: 'POST',
                url: 'selectNiveles/selectDep.php',
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
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" id="align_tittle">
                <img src="http://ies9008.mendoza.edu.ar/pluginfile.php/1/core_admin/logo/0x200/1630026381/190x298.jpg"
                    alt="" width="30" height="50" class="d-inline-block align-text-top">
                <span id="tittle">Sistema de Profesores</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="inscriptos.php">Inscriptos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Registrar Profesor</a>
                    </li>
                    <li class="nav-itemv dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> Materia</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Materia 1</a></li>
                            <li><a class="dropdown-item" href="#">Materia 2</a></li>
                            <li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Carraras
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Carrera 1</a></li>
                            <li><a class="dropdown-item" href="#">Carrera 2</a></li>
                            <li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sede
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Sede 1</a></li>
                            <li><a class="dropdown-item" href="#">sede 2</a></li>
                            <li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                        id="search-input">
                    <button class="btn btn-outline-primary" type="submit" id="search">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="formulario_" class="border border-2">
            <div class="header_formulario">
                <h1>Registro Profesor</h1>
            </div>
            <div class="logo_formulario">
            </div>
            <div class="container-sm">
                <form method="POST" action="datos.php" id="formulario">
                    <div class="form-floating inputs">
                        <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
                        <label for="floatingDNI">Nro DNI</label>
                        <span id="dni-error" class="error"></span>
                    </div>
                    <div class="form-floating inputs">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        <label for="floatingNombre">Nombre</label>
                        <span id="nombre-error" class="error"></span>
                    </div>
                    <div class="form-floating inputs">
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                        <label for="floatingApellido">Apellido</label>
                        <span id="apellido-error" class="error"></span>
                    </div>
                    <div class="form-floating inputs">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <label for="floatingEmail">Email</label>
                        <span id="email-error" class="error"></span>
                    </div>
                    <div class="form-floating inputs">
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
                        <label for="floatingCeluar">Celular</label>
                        <span id="celular-error" class="error"></span>
                    </div>
                    <div class="form-floating inputs">
                        <input type="text" class="form-control" id="telefonoFijo" name="telefonoFijo"
                            placeholder="Telefono Fijo">
                        <label for="floatingTelefonoFijo">Telefono Fijo</label>
                        <span id="telefonoFijo-error" class="error"></span>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" name="carr" id="carr" aria-label="Floating label select example"
                            required>
                            <option selected>Seleccione la carrera</option>
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
                            } 
                            ?>
                        </select>
                        <label for="floatingSelect">Carrera</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" name="mat" id="mat" aria-label="Floating label select example"
                            required>
                        </select>
                        <label for="floatingSelect">Materia</label>
                        <span id="mat-error" class="error"></span>
                    </div>

                    <div id="btn">
                        <button class="btn btn-primary" id="sig" type="button">Siguiente</button>
                    </div>

                    <div class="comprobar"></div>

                    <div id="secTitulo" style="display: none;">

                        <span id="titleInput">Datos del Título</span>
                        <div class="form-floating inputs">
                            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo">
                            <label for="">Nombre del Titulo otorgado</label>
                            <span id="dni-error" class="error"></span>
                        </div>
                        <div class="form-floating inputs">
                            <input type="text" class="form-control" name="lugarTit" id="lugarTit"
                                placeholder="Nombre del establecimiento del Titulo Otorgado">
                            <label for="">Nombre del establecimiento del Titulo Otorgado</label>
                            <span id="dni-error" class="error"></span>
                        </div>
                        
                        <div class="form-floating inputs">
                            <input type="text" class="form-control" name="posgrado" id="posgrado"
                                placeholder="Nombre del Posgrado Otorgado">
                            <label for="">Nombre del Posgrado Otorgado</label>
                            <span id="dni-error" class="error"></span>
                        </div>
                        <div class="form-floating inputs">
                            <input type="text" class="form-control" name="lugarPos" id="lugarPos"
                                placeholder="Nombre del establecimiento del Posgrado Otorgado">
                            <label for="">Nombre del establecimiento del Posgrado Otorgado</label>
                            <span id="dni-error" class="error"></span>
                        </div>

                    </div>

                    <div id="datosProf" style="display: none;">
                        <span id="titleInput">Algunos otros datos más...</span>
                        <div class="form-floating inputs">
                            <input type="text" class="form-control" id="domicilio" name="domicilio"
                                placeholder="Domicilio">
                            <label for="floatingDNI">Domicilio</label>
                            <span id="dni-error" class="error"></span>
                        </div>
                        <div class="form-floating inputs">
                            <input type="date" class="form-control" id="fechaNac" name="fechaNac">
                            <label for="floatingDNI">Fecha de Nacimiento</label>
                            <span id="dni-error" class="error"></span>
                        </div>
                        <div class="form-floating inputs">
                            <input type="text" class="form-control" id="estCivil" name="estCivil"
                                placeholder="Estado Civil">
                            <label for="floatingDNI">Estado Civil</label>
                            <span id="dni-error" class="error"></span>
                        </div>
                        <div class="form-floating inputs">
                            <input type="text" class="form-control" id="hijos" name="hijos" placeholder="Hijos(Si-No)">
                            <label for="floatingDNI">Hijos(Si-No)</label>
                            <span id="dni-error" class="error"></span>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="localidad" id="localidad"
                                aria-label="Floating label select example" required>
                                <option selected>Seleccione el Departamento</option>
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
                            <label for="floatingSelect">Departamento</label>
                        </div>
                        <div id="btn">
                            <button type="submit" class="btn btn-primary" id="btn">Enviar</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>