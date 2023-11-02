<?php
    $pg = "contacto";

    if($_POST){
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $telefono = $_POST["txtTelefono"];
        $mensaje = $_POST["txtMensaje"];

        //varios destinatarios
        $para = "edsotz2018@gmail.com";
        $titulo = 'Recibiste un mensaje desde tu Web';

        //mensaje
        $cuerpo = "
            Nombre: $nombre <br>
            Correo: $correo <br>
            Teléfono: $telefono <br>
            Mensaje: $mensaje
        ";

        //Para enviar un correo HTML, se debe establecer la cabecera Content-type
        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras = 'Content-type: text/html; charset=UTF-8' . "\r\n";
        
        //Cabeceras adicionales
        $cabeceras = 'To: edsotz2018@gmail.com' . "\r\n";
        $cabeceras = 'From: ricardo.ortiz.a@uniautonoma.edu.co' . "\r\n";
        // Enviarlo

        #mail esta comentado porque tiene que estar subido a un servidor
        //mail($para, $titulo, $cuerpo, $cabeceras);
        header("Location: confirmacion-envio.php");
        }
        ?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script> <!--libreria para el boton hamburguesa-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <title>Contacto</title>
</head>
<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-4"></div> <!--pt"padding top" son padding pt-3 y pb-5"padding botton"-->
            <h1>Contacto</h1>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que me contactes enviandome un mensaje o bien por WhatsApp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                    <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/WhatsApp" class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow" placeholder="Escribe aqui un mensaje..."></textarea>
                    </div>
                    <div class="pb-3">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco">Enviar</button>
                    </div>
                </form>
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
            <div class="col-12 col-sm-3 text-sm-start">
                <a href="mailto:edsotz2018@gmail.com">edsotz2018@gmail.com</a>
            </div>
        </div>
        <a href="" target="_blank"><i class="fa-brands fa-whatsapp px-3 pt-3 pb-4" ></i></a>
    </footer>
</body>
</html>