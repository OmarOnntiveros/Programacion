<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/estilosInscriptos.css" media="all" rel="Stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
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
                        <a class="nav-link active" aria-current="page" href="inscriptos.html">Inscriptos</a>
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
    <div id="container">
        <div>
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th><i class="fa fa-user" aria-hidden="true"></i> Nro DNI</th>
                        <th><i class="fa fa-map-marker" aria-hidden="true"></i>Nombre</th>
                        <th><i class="fa fa-calendar-o" aria-hidden="true"></i> Apellido</th>
                        <th><i class="fa fa-phone" aria-hidden="true"></i>E-mail</th>
                        <th><i class="fa fa-trophy" aria-hidden="true"></i>Celular</th>
                        <th><i class="fa fa-trophy" aria-hidden="true"></i>Telefono Fijo</th>
                        <th><i class="fa fa-trophy" aria-hidden="true"></i>Fecha Inscripto</th>
                        <th><i class="fa fa-trophy" aria-hidden="true"></i>Materia</th>
                        <th><i class="fa fa-trophy" aria-hidden="true"></i>A??o</th>
                        <th><i class="fa fa-trophy" aria-hidden="true"></i>Carrera</th>
                        <th><i class="fa fa-trophy" aria-hidden="true"></i>Acci??n</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <tr class="winner__table">
                    <?php 
                        include('conexionBD.php');
                        $link = Conexion();
                        $sql = "SELECT post.dni, post.nombre, post.apellido, post.email, post.celular, post.tel_fijo, post.fechaInscripcion, m.nombre, m.anio, c.nombre
                                FROM postulantes post, materia m, carrera c 
                                WHERE post.materia_codigo4 = m.codigo AND post.carrera_codigo4 = c.codigo";
                        $result = mysqli_query($link, $sql);
                        while($res = mysqli_fetch_row($result)){
                    ?>
                        <td><?php echo $res[0]; ?></td>
                        <td><?php echo $res[1]; ?></td>
                        <td><?php echo $res[2]; ?></td>
                        <td><?php echo $res[3]; ?></td>
                        <td><?php echo $res[4]; ?></td>
                        <td><?php echo $res[5]; ?></td>
                        <td><?php echo $res[6]; ?></td>
                        <td><?php echo $res[7]; ?></td>
                        <td><?php echo $res[8]; ?></td>
                        <td><?php echo $res[9]; ?></td>
                        <td>
                            <?php echo '<a href="InformacionProfesor.php?dni=' . $res[0] . '">M??s Info</a>'?>
                        </td>
                    <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
