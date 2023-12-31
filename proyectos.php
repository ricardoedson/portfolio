<?php
    $pg = "proyectos";
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

    <title>Mis Proyectos</title>
</head>
<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-4">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div>
            <div class="row">
                <!--ya que los cuadros quedan juntis, por lo que es necesario separar los bloques-->
                <!--esto se soluciona creando un nuevo bloque (div) creando nuevamente filas y columnas "row-col"-->
                <div class="col-12">
                    <p>Los siguientes son algunos trabajos que he realizado</p>
                </div>
            </div>  
            <div class="row"> <!--primer cuadro-->
                <div class="col-12 col-sm-4 p-4"> <!--padding--> <!--col-4-->
                    <div class="row border proyecto pb-5"> <!--clase border de boostrap-->
                        <div class="col-12 p-0">
                            <!--img-fluid: es una clase de boostrap que funciona para que las imagenes se adopten al tamaño del <DIV>-->
                            <img src="images/abmclientes.png" alt="ABM CLIENTES" class="img-fluid"> 
                        
                            <h2>ABM CLIENTES</h2>
                            <p class="py-2 px-3">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center"> <!--clase text-center para centrar texto-->
                            <a href="#" class="link-rojo">Código fuente   </a>
                        </div>   
                    </div>
                </div>

                <div class="col-12 col-sm-4 p-4"> <!--segundo cuadro-->
                    <div class="row border proyecto pb-5"> <!--clase border de boostrap-->
                        <div class="col-12 p-0">
                            <!--img-fluid: es una clase de boostrap que funciona para que las imagenes se adopten al tamaño del <DIV>-->
                            <img src="images/abmventas.png" alt="ABM VENTAS" class="img-fluid"> 
                        
                            <h2>SISTEMAS DE GESTIÓN DE VENTAS</h2>
                        
                            <p class="py-2 px-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Código fuente   </a>
                        </div>   
                    </div>
                </div>

                <div class="col-12 col-sm-4 p-4"> <!--tercer cuadro--> <!--col-4-->
                    <div class="row border proyecto pb-5"> <!--clase border de boostrap 
                                    el pb sirve para separar el boton el hipervinculo del cuadrito-->
                        <div class="col-12 p-0">
                            <!--img-fluid: es una clase de boostrap que funciona para que las imagenes se adopten al tamaño del <DIV>-->
                            <img src="images/proyecto-integrador.png" alt="PROYECTO INTEGRADOR" class="img-fluid"> 
                        
                            <h2>PROYECTO INTEGRADOR</h2>
                        
                            <p class="py-2 px-3">
                                Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.
                            </p>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Código fuente   </a>
                        </div>   
                    </div>
                </div>
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