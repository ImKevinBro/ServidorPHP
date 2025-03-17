<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilos.css">  
</head>
<body>
    <div class="login-container">
        <h2>Registro</h2>
        <form action="conexion.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="apellido" placeholder="Apellidos" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <input type="password" name="confirmar_contrasena" placeholder="Confirme su contraseña" required>
            <button type="submit" name="registrarse">Registrarse</button>
        </form>
    </div> 
</body>
</html>

<?php
// Simulación de registro en base de datos (esto debería conectarse a una BD real)
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

    // Aquí podrías agregar código para guardar el usuario en una base de datos.
    // Ejemplo: INSERT INTO usuarios (nombre, apellidos, usuario, contrasena) VALUES (...)

    // Redirigir a la página principal
    header("Location: principal.php");
    exit();
}
?>