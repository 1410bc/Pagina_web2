<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Veterinaria</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css"><link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
</head>  

<body class="body bg-primary">
    <main>
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
            <h1>¿Quejas, aclaraciones o sugerencias?</h1>
            <h2>No dudes en contactarnos</h2>
        </section>
       
    
    </header>

<main>
    <div class="container-fluid bg-light p-3" style="height: 600px;">
        <div class="container my-5 p-3">
           <div class="row">
               <div class="col">
                   <figure class="text-center">
                       <center><h1 class="display-2">Contactanos</h1></center>
                   </figure>
               </div>
           </div> 
           <div class="row my-3">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
                   <form action="index.html">
                <center>
                       <p><input class="form-control my-2" placeholder="Email" type="email" required></p>
                       <p><input class="form-control my-2" placeholder="Asunto" type="text" required></p>
                       <p><textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea></p>
                       <p><input class="form-control my-2" placeholder="enviar" type="submit"></p>
                    </center>
                   </form>
               </div>
               <div class="col-sm-4"></div>
           </div>
        </div>
    </div>
    <center><img src="img/pug.png" alt=""></center>
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