<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css"><link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <nav>
        <a href="index.php">inicio</a>
        <a href="quienessomos.php">Quienes somos</a>
        <a href="productos.php">Productos</a>
        <a href="servicios.php">Servicios</a>
        <a href="registro.php">Registro</a>
        <a href="login.php">Login</a>
        <a href="contacto.php">Contactanos</a>
        </nav>
        <section class="textos-header">
            <h1>Consigue lo mejor para tu mascota</h1>
            <h2>Compra online</h2>
        </section>
       
    </header>
    <section>
        <section class="portafolio">
            <h2 class="titulo">Productos</h2>
            <div class="galeria-port">
                <div class="imagen-port">
                        <img src="img/sueter.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/click.png" alt="">
                            <p>Sueteres</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/collar2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/click.png" alt="">
                            <p>Collares</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/Hueso.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/click.png" alt="">
                            <p>Huesos y juguetes</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    </section>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>8296312</p> 
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>8296312</p> 
            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <p>8296312</p> 
            </div>
        </div>
        <h2 class="titulo-final">&copy; KYO's | Omar Alfredo Barajas</h2>
    </footer>
</body>
</html>