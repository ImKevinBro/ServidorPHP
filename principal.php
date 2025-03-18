<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit();
}

$usuario_nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Atheria System</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="body">

    <br>
    <table class="navbar-table">
        <tr>
            <td><a href="#carrito"> <img src="imagenes/logo.png" alt="Ícono de carrito"></a></td>
            <td><a href="#inicio">Inicio</a></td>
            <td><a href="informacion.php?seccion=vision">Visión</a></td>
            <td><a href="informacion.php?seccion=mision">Misión</a></td>
            <td><a href="carrito.php">🛒 Carrito</a></td>
            <td><a href="catalogo.php">Catálogo</a></td>
        </tr>
    </table>

    <font size="6">
        <b><i>
        <h1 style="color:rgb(41, 146, 93)">Atheria System</h1> <br>
        </font>
        <h1 style="color:rgb(57, 95, 76)">¡Bienvenido, <?php echo $usuario_nombre; ?>!</h1>
        <p>Has iniciado sesión correctamente.</p>
    </b></i>
    
    <p>Tu destino confiable para encontrar la mejor tecnología al mejor precio.</p>
    <p>Nos complace darte la bienvenida a nuestra plataforma, donde ofrecemos una amplia gama de productos electrónicos de última generación. En Atheria System, nos especializamos en brindarte calidad, innovación y precios competitivos, para que siempre encuentres lo que necesitas en un solo lugar.</p>
    
    <font style="text-align: left;">
    <h3 style="text-align: left;">¿Por qué elegirnos?</h3>
    <ul>
        <li>✔ Productos 100% originales y garantizados</li>
        <li>✔ Ofertas y descuentos exclusivos</li>
        <li>✔ Envíos rápidos y seguros</li>
        <li>✔ Atención personalizada para ayudarte a elegir lo mejor</li>
    </ul>
    </font>
    
    <br>
    <h4>Explora nuestra tienda y descubre todo lo que Atheria System tiene para ti. ¡Gracias por confiar en nosotros!</h4>

    <div class="welcome-container">
        <!-- Aquí puedes agregar contenido adicional si lo deseas -->
    </div>

    <form action="logout.php" method="POST">
        <button type="submit" class="logout-button">Cerrar sesión</button>
    </form>

</div>

</body>
</html>
