<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $confirmar_contrasena = $_POST["confirmar_contrasena"];

    // Verificar que las contraseñas coincidan
    if ($contrasena !== $confirmar_contrasena) {
        echo "Las contraseñas no coinciden.";
        exit();
    }

    // Simulación de almacenamiento en base de datos
    // Aquí podrías conectar con una base de datos y guardar los datos

    // Redirigir a la página principal
    header("Location: principal.php");
    exit();
}
?>