<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "perfiles";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = trim($_POST['correo']);
    $password = trim($_POST['contrasena']);

    if (!empty($correo) && !empty($password)) {
        $stmt = $conexion->prepare("SELECT id_usuario, nombre, apellido, contrasena FROM registros WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();
            
            // Verificar contraseña
            if (password_verify($password, $usuario['contrasena'])) {
                $_SESSION['usuario_id'] = $usuario['id_usuario'];
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['apellido'] = $usuario['apellido'];

                // Redirigir al área principal
                header("Location: principal.php");
                exit();
            } else {
                echo "❌ Contraseña incorrecta.";
            }
        } else {
            echo "❌ Usuario no encontrado.";
        }
        
        $stmt->close();
    } else {
        echo "❌ Por favor, completa todos los campos.";
    }
}

$conexion->close();
?>
