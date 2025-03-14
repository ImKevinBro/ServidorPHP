<?php
// Incluimos el archivo de conexión a la base de datos
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificamos que los campos no estén vacíos
    if (empty($_POST["usuarios"]) || empty($_POST["contrasena"])) {
        echo "Uno de los campos está vacío";
    } else {
        // Obtenemos los valores del formulario
        $usuarios = $_POST["usuarios"];
        $contrasena = $_POST["contrasena"];

        // Buscamos en la base de datos si el usuario y la contraseña coinciden
        $sql = "SELECT * FROM usuarios WHERE nombre = ? AND contrasena = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ss", $usuarios, $contrasena);
        $stmt->execute();
        $resultado = $stmt->get_result();

        // Verificamos si el usuario existe y la contraseña es correcta
        if ($resultado->num_rows > 0) {
            echo "Login exitoso"; // Aquí redirigirías al usuario a la página deseada
        } else {
            echo "Error: Usuario o contraseña incorrectos";
        }

        // Cerramos la conexión
        $stmt->close();
    }
}

// Cerramos la conexión de la base de datos
$conexion->close();
?>
