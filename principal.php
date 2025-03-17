<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php"); // Redirige al login si no ha iniciado sesión
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1 style="color:rgb(57, 95, 76)">¡Bienvenido!</h1>
        <p>Has iniciado sesión correctamente.</p>
    </b> </i>
    <p>Tu destino confiable para encontrar la mejor tecnología al mejor precio.

Nos complace darte la bienvenida a nuestra plataforma, donde ofrecemos una amplia gama
 de productos electrónicos de última generación. En Atheria System, nos especializamos en
  brindarte calidad, innovación y precios competitivos, para que siempre encuentres lo que 
  necesitas en un solo lugar.

Desde smartphones y laptops hasta accesorios y componentes de hardware, trabajamos con las 
mejores marcas del mercado para garantizarte una experiencia de compra segura, rápida y eficiente.
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
<h4>

Explora nuestra tienda y descubre todo lo que Atheria System tiene para ti.
 ¡Gracias por confiar en nosotros!
 </h4>

</p>

    <div class="welcome-container">

    

       
    </div>
    <form action="logout.php" method="POST">
            <button type="submit" class="logout-button">Cerrar sesión</button>
        </form>



</div>

</body>
</html>