<?php
require_once('../class/Usuario.php');
$usuario = Usuario::recuperarTodos();
?>

<h1> Gestión de Usuarios <h1>
<a href = "guardar_usuario.php" class="btn btn-succes"> Nuevo Registro </a>

<?php if (count($usuario) > 0): ?>
<table class = "table table-bordered">
    <tr>
    <td>Email</td>
    <td>Password</td>
    <td>Estatus</td>
    <td>Privilegios</td>
    <td> </td>
    <td> </td>
</tr>

<?php foreach ($usuario as $item): ?>
    <tr>
    <td> <?php echo $item['email']; ?></td>
    <td> No visible </td>
    <td> <?php echo $item['estatus']; ?> </td>
    <td> <?php echo $item['privilegios']; ?> </td>
    <td><a href="guardar_usuario.php?id=<?php echo $item['id'] ?>"> Editar </td>
    <td><a href="eliminar_usuario.php?id=<?php echo $item['id'] ?>"> Eliminar </td>
</tr>
<?php endforeach; ?>
</table>

<?php else: ?>
    <p> No hay usuarios registrados </p>
    <?php endif; ?>