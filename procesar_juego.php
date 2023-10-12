<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'bd.php';

    $nombre = $_POST['Nombre'];
    $categoria = $_POST['Categoria'];
    $descripcion = $_POST['Descripcion'];

    $imgNombre = $_FILES['imagen']['name'];
    $imgTemp = $_FILES['imagen']['tmp_name'];
    $ruta = "fotos/";
    $imgRuta = $ruta . $imgNombre;

    if (move_uploaded_file($imgTemp, $imgRuta)) {
        $query = "INSERT INTO juegos (Nombre, Categoria, Descripcion, Imagen) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("ssss", $nombre, $categoria, $descripcion, $imgRuta);

            if ($stmt->execute()) {
                echo "Juego agregado con éxito.";

                $stmt->close();
            } else {
                echo "Error al agregar el juego: " . $stmt->error;
            }
        } else {
            echo "Error en la preparación de la consulta: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Error al subir la imagen.";
    }
} else {
    header("Location: ../pages/games.html");
    exit();
}
?>
