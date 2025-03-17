<?php
session_start();
$host = "localhost";
$usuario = "root";
$password = "";
$basededatos = "perfiles";

$conexion = new mysqli($host, $usuario, $password, $basededatos);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $conexion->real_escape_string($_POST['correo']);
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT id_usuario, nombre, contrasena FROM registros WHERE correo = '$correo'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($contrasena, $usuario['contrasena'])) {
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nombre'] = $usuario['nombre'];
            header("Location: principal.php");
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "No existe una cuenta con este correo";
    }
}
?>
