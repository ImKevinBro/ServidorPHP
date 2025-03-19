<?php
session_start();

// Inicializar el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Agregar productos al carrito
if (isset($_POST['agregar'])) {
    $producto = [
        'id' => $_POST['id'],
        'nombre' => $_POST['nombre'],
        'precio' => $_POST['precio'],
        'cantidad' => $_POST['cantidad']
    ];
    $_SESSION['carrito'][] = $producto;
}

// Eliminar producto del carrito
if (isset($_GET['eliminar'])) {
    $indice = $_GET['eliminar'];
    unset($_SESSION['carrito'][$indice]);
    $_SESSION['carrito'] = array_values($_SESSION['carrito']);
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
    <div class="login.container">
<div class="carrito">

<div class="titulo ">
    <table>
<tr>
        <td><a href="#carrito"><a href="#carrito"> <img src="imagenes/logo.png" alt="Ícono de carrito"></a></td>
           
        <td>   <font size="6">
    <b><i>
    <h1 style="color:rgb(203, 253, 228)"> Carrito de compras</h1> <br>
    </font></td>
   <br> </table>
       </div>
        <table>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Acción</th>
            </tr>
            <?php $total = 0; ?>
            <?php foreach ($_SESSION['carrito'] as $indice => $producto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($producto['nombre']); ?></td><br>
                    <td>$<?php echo number_format($producto['precio'], 2); ?></td><br>
                    <td><?php echo htmlspecialchars($producto['cantidad']); ?></td><br>
                    <td>$<?php echo number_format($producto['precio'] * $producto['cantidad'], 2); ?></td>
                    <td>
                        <a href="?eliminar=<?php echo $indice; ?>">Eliminar</a><br>
                    </td>
                </tr>
                <?php $total += $producto['precio'] * $producto['cantidad']; ?><br>
            <?php endforeach; ?>
        </table>
        <br>
        <h3>Total: $<?php echo number_format($total, 2); ?></h3><br>
        
    </div>
    

















   
</div>
<div class="login-container button">


Cada articulo para tu necesidad.


<form action="catalogo.php" method="get">
    <button type="submit">Agregar mas productos</button> 
</form>

<form action="principal.php" method="get">
    <button type="submit">Regresar al inicio</button>

    
</form>


<form action="pagar.php" method="get">
    <button type="submit">Pagar</button> 
    </form>
<div class="lg">
<a href="#carrito"><a href="#carrito"> <img src="imagenes/carri.png" alt="Ícono de carrito"></a>

</div>
</div>
</body>
</html>