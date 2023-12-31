<?php
    $pg = "sobre-mi";
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
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> <!--icono de la pagina (favicon)-->

    <title>Sobre mí</title>
</head>
<body id="sobre-mi">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
  
      <main>
        <section class="container" id="descripcion"> <!--para hacer secciones, en la primera se pone la clase container-->
            <div class="row">
                <div class="col-12 col-sm-7 pt-3 pb-4">
                    <h1>Sobre mí</h1>
                    <p class="py-5">Encantado por la tecnología, soy estudiante de Ingeniería electrónica, además me estoy formando en desarrollo web</p>
                    <a href="contacto.php" class="btn-rojo p-2 px-4" >Enviar mensaje</a>
                </div>
                <div class="col-12 col-sm-5 pb-5">
                    <img src="images/Fotopersonal.jpg" alt="Ricardo Edson Ortiz" class="foto-perfil">
                </div>
            </div>
        </section>

        <section id="stack-tecnologico">
            <div class="container pb-3">
                <div class="row">
                    <div class="col-12">
                        <h2 class="py-5">Stack Tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">JavaScript</h3>
                            <i class="fa-brands fa-js pb-5"></i> <!--poner pb-5 a todos-->
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">PHP</h3>
                            <i class="fa-brands fa-php pb-5"></i>
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">HTML</h3>
                            <i class="fa-brands fa-html5 pb-5"></i>
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">API Rest</h3>
                            <i class="fa-solid fa-gears pb-5"></i>
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Laravel</h3>
                            <i class="fa-brands fa-laravel pb-5"></i>
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">boostrap</h3>
                            <i class="fa-brands fa-bootstrap pb-5"></i>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">MySQL</h3>
                            <i class="fa-solid fa-database pb-5"></i>
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">CSS</h3>
                            <i class="fa-brands fa-css3-alt pb-5"></i>
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Git</h3>
                            <i class="fa-brands fa-git pb-5"></i>
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">React.js</h3>
                            <i class="fa-brands fa-react pb-5"></i>
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Mercadopago</h3>
                            <i class="fa-solid fa-wallet pb-5"></i>
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Amazon AWS</h3>
                            <i class="fa-brands fa-aws pb-5"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Linux</h3>
                            <i class="fa-brands fa-linux pb-5"></i>
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Apache</h3>
                            <i class="fa-solid fa-server pb-5"></i>
                        </div>
                    </div>

                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4">
                            <h3 class="pt-5 pb-1">Paypal</h3>
                            <i class="fa-brands fa-paypal pb-5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5 mb-2">
                        <h2>Experiencia Laboral</h2>
                    </div>
                </div>
                <div class="row shadow rounden p-1">
                    <div class="col-12 col-sm-2 p-5">
                        <img src="images/logo-juanchocorrelon.png" alt="juancho correlon" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-10">
                        <h3>Logistico carrera</h3>
                        <h4>Juancho Correlon</h4>
                        <h5>2022-presente</h5>
                        <p>Participe activamente como logistico en la carrera 10k semana santa</p>
                    </div>
                    <div class="col-12 col-sm-2 p-5">
                        <img src="images/logo-juanchocorrelon.png" alt="juancho correlon" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-10">
                        <h3>Logistico carrera</h3>
                        <h4>Juancho Correlon</h4>
                        <h5>2022-presente</h5>
                        <p>Participe activamente como logistico en la carrera 10k semana santa</p>
                    </div>
                </div>  
            </div>
        </section>

        <section id="formacion">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5 mb-2">
                        <h2>Formación academica</h2>
                    </div>
                </div>
                <div class="row shadow rounded p-1">
                    
                        <div class="col-12 col-sm-2 col-sm-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/santoDomingo.jpg" alt="Santo Domingo Sabio" class="img-fluid">
                        </div>
                        <div class="col-12 col-sm-4 p-3">
                            <h3>Bachiller Académico</h3>
                            <h4>Institucion Educativa Santo Domingo Sabio</h4>
                            <h5>2018-2019</h5>
                            <p>URL N/A</p>
                        </div>

                        <div class="col-12 col-sm-2 col-sm-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/santoDomingo.jpg" alt="Santo Domingo Sabio" class="img-fluid">
                        </div>
                        <div class="col-12 col-sm-4 p-3">
                            <h3>Bachiller Académico</h3>
                            <h4>Institucion Educativa Santo Domingo Sabio</h4>
                            <h5>2018-2019</h5>
                            <p>URL N/A</p>
                        </div>

                        <div class="col-12 col-sm-2 col-sm-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/santoDomingo.jpg" alt="Santo Domingo Sabio" class="img-fluid">
                        </div>
                        <div class="col-12 col-sm-4 p-3">
                            <h3>Bachiller Académico</h3>
                            <h4>Institucion Educativa Santo Domingo Sabio</h4>
                            <h5>2018-2019</h5>
                            <p>URL N/A</p>
                        </div>

                </div>
            </div>
        </section>

        <section id="formacion">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-12 mt-5 mb-2">
                        <h2>Cursos de desarrollo profesional</h2>
                    </div>
                </div>
                <div class="row shadow rounded p-1">
                    <div class="col-12 col-sm-2 col-sm-2 p-3 my-auto d-none d-sm-block">
                        <img src="images/logo-depcsuite.svg" alt="Santo Domingo Sabio" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-4 p-3">
                        <h3>Desarrollo Web Full Stack</h3>
                        <h4>DEPCSUITE</h4>
                        <h5>Expedicion: se espera para el 2023</h5>
     
                    </div>

                    <div class="col-12 col-sm-2 col-sm-2 p-3 my-auto d-none d-sm-block">
                        <img src="images/logo-depcsuite.svg" alt="Santo Domingo Sabio" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-4 p-3">
                        <h3>Desarrollo Web Full Stack</h3>
                        <h4>DEPCSUITE</h4>
                        <h5>Expedicion: se espera para el 2023</h5>
                    </div>
                </div>
            </div>
        </section>

        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-12 col-sm-6 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Basico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pb-3 pb-sm-0">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5 pb-3">
                            <h2>HOBBIES</h2>
                            <ul>
                                <li>Futsal</li>
                                <li>Guitarra</li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
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