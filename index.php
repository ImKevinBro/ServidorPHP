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
                // Establecer variables de sesión
                $_SESSION['usuario_id'] = $usuario['id_usuario'];
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['apellido'] = $usuario['apellido'];

                // Redirigir al principal
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

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="estilos.css">
     <title>Arquitectura de Monolitos</title>
     <title>Login</title>
     <link rel="stylesheet" href="estilos.css">  
 </head>
 <body>  
         
     <center>
         <form action = "insertar.php" method="post">
             <h1>Registrate</h1>
             <table>
                 <tr><td>Nombre:</td><td><input type="text" name="nombre"></td></tr>
                 <tr><td>Apellido:</td><td><input type="text" name="apellido"></td></tr>
                 <tr><td>Correo:</td><td><input type="text" name="correo"></td></tr>
                 <tr><td>Contraseña:</td><td><input type="password" name="contrasena"></td></tr>
                 <tr><td><button type="submit">Registrar</button></td></tr>
             </table>
 <body>
     <div class="login-container">
         <h2>Login</h2>
         <form action="login.php" method="POST">
             <input type="email" name="correo" placeholder="Correo" required>
             <input type="password" name="contrasena" placeholder="Contraseña" required>
             <button type="submit">Login</button>
         </form>
     </center>       
 
         <p>No tienes cuenta? <a href="registro.php">Regístrate</a></p>
     </div> 
 </body>
 </html>
 </html>