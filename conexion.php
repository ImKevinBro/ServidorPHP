<?php
// Conexión a la base de datos    
$host = "localhost";
$usuario = "root";
$password = "";
$basededatos = "perfiles";

$conexion = new mysqli($host, $usuario, $password, $basededatos);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// Insertar registros
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrarse'])) {
    if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['correo']) || empty($_POST['contrasena'])) {
        echo "Todos los campos son obligatorios";
    } else {
        $nombre = $conexion->real_escape_string($_POST['nombre']);
        $apellido = $conexion->real_escape_string($_POST['apellido']);
        $correo = $conexion->real_escape_string($_POST['correo']);
        $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); // Encripta la contraseña

        $sql = "INSERT INTO registros (nombre, apellido, correo, contrasena) VALUES ('$nombre', '$apellido', '$correo', '$contrasena')";

        if ($conexion->query($sql) === TRUE) {
            echo "Registro exitoso";
        } else {
            echo "Error al registrar: " . $conexion->error;
        }
    }
}

?>
