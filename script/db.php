<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "cansue";
$conn = new mysqli($host,$user,$pass,$db);

if ($conn->connect_errno) {
    die("No se pudo conectar a la base de datos: " . $conn->connect_error);
}
?>