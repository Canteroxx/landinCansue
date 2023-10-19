<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'db.php';

    $usuario = isset($_POST['Nombre']) ? $_POST['Nombre'] : null;
    $correo = isset($_POST['Correo']) ? $_POST['Correo'] : null;
    $contrasena = isset($_POST['Contraseña']) ? password_hash($_POST['Contraseña'], PASSWORD_BCRYPT) : null;

    if ($usuario && $correo && $contrasena) {
        // Preparar la consulta SQL para la inserción
        $query = "INSERT INTO usuarios (Nombre, correo, contraseña) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("sss", $usuario, $correo, $contrasena);

            if ($stmt->execute()) {
                header("Location: ../index.html");
                exit();
            } else {
                echo "Error al registrar el usuario: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error en la preparación de la consulta: " . $conn->error;
        }
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }

    $conn->close();
} else {
    header("Location: InicioSesion.html");
    exit();
}
