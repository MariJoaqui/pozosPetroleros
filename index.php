<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manómetros</title>

    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

    <!--HEADER-->

    <nav class="nav-wrapper light-blue darken-3">
        <div class="container">
            <a href="index.html" class="brand-logo">Medición de manómetros</a>

            <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="menu-responsive">
        <li><a href="index.php">Inicio</a></li>
    </ul>

    <!--BODY-->

    <div class="fondo-section">
        <div class="container section black-text">

            <div class="section">

                <h5>Pozos petroleros: </h5>

                <p>Aquí se mostrarán los pozos petroleros existentes con sus mediciones en el manómetro y fecha,
                    usted podrá agregar nuevos, editarlos o eliminarlos; además, podrá visualizar una gráfica del
                    de las diferentes mediciones proceso.</p>
            </div>

            <div class="section">

                <a href="crearPozo.php" class="waves-effect waves-light btn light-blue darken-4">Crear nuevo pozo</a>
                <a href="añadirPropiedades.php" class="waves-effect waves-light btn light-blue darken-4">Añadir nueva medicion</a>

            </div>

            <div class="divider"></div>

            <div class="section">

                <h5>Pozos existentes: </h5>

                <?php

                include_once("conexion.php");

                $mostrar = "SELECT * FROM pozos"; 
                $consulta = mysqli_query($conexion, $mostrar);

                while ($obtenerNombre = mysqli_fetch_array($consulta)) {
                    
                    echo '<div class="card-panel light-blue darken-2"><div class="container">
                    <a href="eliminar.php?pozo=' . $obtenerNombre['nombrePozo'] . '" class="waves-effect waves-light btn light-blue darken-4 right">Eliminar
                    </a>
                    <a href="ver.php?pozoNombre=' . $obtenerNombre['nombrePozo'] . '" class="waves-effect waves-light btn light-blue darken-4 right">Ver
                    </a>' . ' ' . $obtenerNombre['nombrePozo'] . 
                    '</div></div>';
                }

                mysqli_close($conexion);
                ?>

            </div>
                
            <div class="divider"></div>

        </div>
    </div>

    <!--FOOTER-->

    <footer class="page-footer light-blue darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">

                    <h5 class="white-text">Medición de manómetros</h5>
                    <p class="grey-text text-lighten-4">En esta aplicación se podrá crear un histórico
                        de las distintas mediciones manuales realizadas a los manómetros de los pozos 
                        petroleros en diferentes periodos de tiempos.
                    </p>
                
                </div>

                <div class="col l4 offset-l2 s12">

                    <h5 class="white-text">Menú</h5>

                    <ul>
                        <li><a class="grey-text text-lighten-3" href="index.php">Inicio</a></li>
                    </ul>

                </div>
            </div>
        </div>

            <div class="footer-copyright">
                <div class="container">

                © 2021 María Moreno - Programación Web
             
                </div>
            </div>

    </footer>

    <!--SCRIPT-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://kit.fontawesome.com/d6ff169d2d.js" crossorigin="anonymous"></script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });

    </script>

    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems,{
                duration: 500,
                indicators: true,
                fullWidth: true
            });
        });

    </script>
</body>
</html>