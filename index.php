<?php
    $pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script> <!--libreria para el boton hamburguesa-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <title>Index-Inicio</title>
</head>
<body id="inicio">
    <header class="container">
    <?php include_once "menu.php"; ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete"> <!--pt-3 pb-4-->
                <img src="images/cohete.svg" alt="">
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center my-3"> <!--offset-3 es para que desplace 3 columnas de la grilla de boostrap solamente al principio-->
                <p class="p-1 ">
                    Bienvenidos a mi sitio web sobre desarrollo de sistemas
                </p>
            </div>
            <div class="col-12 text-center pt-1 pb-5">
                <a href="proyectos.php" class="btn-blanco py-2 px-2 shadow">Mis proyectos</a>
            </div>
        </div>
    </main>

    <footer class="container mt-auto pb-3"> <!--class="container"-->
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="https://github.com"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3">
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:edsotz2018@gmail.com">edsotz2018@gmail.com</a>
            </div>
        </div>
        <a href="" target="_blank"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4" ></i></a>
    </footer>
</body>
</html>