<?php  
// Llamando a los campos
include "db.php";

$nombre = $conexion->real_escape_string ($_POST['nombre']);
$comentario= $conexion->real_escape_string ($_POST['comentarios']);
$game = "One Piece";
include "db.php";
$nombre= mysqli_real_escape_string($conexion,$nombre);
$comentario= mysqli_real_escape_string($conexion,$comentario);
$resultado=mysqli_query($conexion,'INSERT INTO comentarios (nombre, comentarios, Juego) VALUES ("'.$nombre.'", "'.$comentario.'", "'.$game.'")');
header('Location: ../index.php');

?>