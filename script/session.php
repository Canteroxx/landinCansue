<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'bd.php';

    $correo = isset($_POST['correo']) ? $_POST['correo'] : null;
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : null;

    if ($correo && $contrasena) {
        $query = "SELECT Nombre FROM usuarios WHERE Correo = ? AND Contraseña = ?";
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $stmt->bind_param("ss", $correo, $contrasena);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($usuario_id, $usuario_nombre);
                $stmt->fetch();
                $_SESSION['usuario_id'] = $usuario_id;
                $_SESSION['usuario_nombre'] = $usuario_nombre;
                header("Location: pagina_de_bienvenida.php");
                exit();
            } else {
                echo "Credenciales incorrectas. Intenta de nuevo.";
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
?>
