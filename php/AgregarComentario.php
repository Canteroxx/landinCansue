<?php
require_once ("db.php");
$post = isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
$comentario = isset($_POST['comentario']) ? $_POST['comentario'] : "";
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";


$query = "INSERT INTO comentarios(respuesta,comentarios,nombre) VALUES (?,?,?)";

$sql_stmt = $conexion->prepare($query);

$param_type = "dss";
$param_value_array = array(
    $post,
    $comentario,
    $nombre
);
$param_value_reference[] = & $param_type;
for ($i = 0; $i < count($param_value_array); $i ++) {
    $param_value_reference[] = & $param_value_array[$i];
}
call_user_func_array(array(
    $sql_stmt,
    'bind_param'
), $param_value_reference);

$sql_stmt->execute();
?>
