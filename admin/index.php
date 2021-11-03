
<?php
session_start();
if($_SESSION['privilegios'] != 1){
    echo'<script>
    alert("Acceso denegado");
    location.href="../index.php";
    </script>';
    
}
?>

<div class="row">
<div class="col-12">
<h1>CPANEL </h1>
<h2>Bienvenido <?php echo $_SESSION['email'];?></h2>
<li><a href="usuarios/index.php">Usuarios</a></li>
<li><a href="../index.php">Home</a></li>


</div>
</div>