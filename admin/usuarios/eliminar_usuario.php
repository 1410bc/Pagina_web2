<?php
require_once '../class/Usuario.php';

$id = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : null;


if($id){
    $usuario = Usuario::buscarPorId($id);
    $usuario->eliminar();
    header('Location: index.php');

}

?>