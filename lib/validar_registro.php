<?php
require_once('../admin/class/Usuario.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $usuario = new Usuario();
    $email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : null;
    $password = (isset($_REQUEST['password'])) ? $_REQUEST['password'] : null;
    $estatus = (isset($_REQUEST['estatus'])) ? $_REQUEST['estatus'] : null;
    $privilegios = (isset($_REQUEST['privilegios'])) ? $_REQUEST['privilegios'] : null;
    $usuario->setEmail($email);
    $usuario->setPassword($password);
    $usuario->setEstatus($estatus);
    $usuario->setPrivilegios($privilegios);
    $usuario->guardar();
    echo '<script>
            alert("Registro realizado con exito");
            window.location.href="../index.php";
            </script>';

}else {

    header('Location: ../registro.php');

}