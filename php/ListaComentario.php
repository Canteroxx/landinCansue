<?php
require_once ("../includes/db.php");
$record_set = array();
$sql = "SELECT * FROM comentarios ORDER BY id ASC";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($record_set, $row);
    }
}
echo json_encode($record_set);
?>