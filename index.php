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
        <div>
        <img src="img/pug.png"><h4><?php if($_SESSION){ echo $_SESSION['email']; }else{ echo 'invitado'; } ?></h4>
</div>

<?php if(!isset($_SESSION['email'])){ ?>
            <a href="registro.php">Registro</a>
            <a href="login.php">Login</a>
            <?php }else{ ?>
                <a href ="logout.php">LogOut</a>
                <?php  } ?>
            <a href="index.php">inicio</a>
            <a href="quienessomos.php">Quienes somos</a>
            <a href="productos.php">Productos</a>
            <a href="servicios.php">Servicios</a>
            
            <a href="contacto.php">Contactanos</a>
        
        </nav>
        <section class="textos-header">
            <h1>Una mascota es mas que eso, es parte de la familia</h1>
            <h2>Tratala como tal</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C150.00,150.00 351.77,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
        
    </header>
    <main>
        <section class="contenedor sobre nosotros">
            <h2 class="titulo">Nuestro producto</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/collar.jpg" alt="" class="about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Lo mejor para tu mascota</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis nemo doloremque quibusdam aperiam ullam soluta. Facilis illum officiis, commodi, architecto nobis aliquam doloribus reiciendis, nisi numquam rerum omnis? Laudantium, maiores.</p>
                    <h3><span>2</span>Lo mejor para tu mascota</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis nemo doloremque quibusdam aperiam ullam soluta. Facilis illum officiis, commodi, architecto nobis aliquam doloribus reiciendis, nisi numquam rerum omnis? Laudantium, maiores.</p>
                </div>
            </div>
            <section>
                <section class="portafolio">
                    <h2 class="titulo">Portafolio</h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                                <img src="img/Spa.jpg" alt="">
                                <div class="hover-galeria">
                                    <img src="img/click.png" alt="">
                                    <p>Mas información</p>
                                </div>
                            </div>
                            <div class="imagen-port">
                                <img src="img/rotweiler.jpg" alt="">
                                <div class="hover-galeria">
                                    <img src="img/click.png" alt="">
                                    <p>Mas información</p>
                                </div>
                            </div>
                            <div class="imagen-port">
                                <img src="img/pug.png" alt="">
                                <div class="hover-galeria">
                                    <img src="img/click.png" alt="">
                                    <p>Mas información</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            </section>
            <section>
                <section class="portafolio">
                    <h2 class="titulo">Servicios</h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                                <img src="img/atencion medica.jpg" alt="">
                                <div class="hover-galeria">
                                    <img src="img/click.png" alt="">
                                    <p>Atencion medica</p>
                                </div>
                            </div>
                            <div class="imagen-port">
                                <img src="img/spa canino.jpg" alt="">
                                <div class="hover-galeria">
                                    <img src="img/click.png" alt="">
                                    <p>Spa canino</p>
                                </div>
                            </div>
                            <div class="imagen-port">
                                <img src="img/Vacuna.jpg" alt="">
                                <div class="hover-galeria">
                                    <img src="img/click.png" alt="">
                                    <p>Vacunacion</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
    </main>
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