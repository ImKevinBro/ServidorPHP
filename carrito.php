<?php
session_start();

// Inicializar carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Eliminar producto del carrito
if (isset($_GET['eliminar'])) {
    $indice = $_GET['eliminar'];
    unset($_SESSION['carrito'][$indice]);
    $_SESSION['carrito'] = array_values($_SESSION['carrito']);
}

// Vaciar carrito
if (isset($_GET['vaciar'])) {
    $_SESSION['carrito'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="content">
        <div class="titulo">
    <font size="6">
    <b><i>
    <h1 style="color:rgb(203, 253, 228)">Carrito de compras</h1> <br>
    </font>
        </i>
        </div>

    <?php if (empty($_SESSION['carrito'])): ?>
        <p>Tu carrito está vacío.</p>
        <a href="catalogo.php"><button>Agregar productos</button></a>
    <?php else: ?>
        <table border="1" cellspacing="0" cellpadding="10">
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
                    <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                    <td>$<?php echo number_format($producto['precio'], 2); ?></td>
                    <td><?php echo $producto['cantidad']; ?></td>
                    <td>$<?php echo number_format($producto['precio'] * $producto['cantidad'], 2); ?></td>
                    <td>
                        <a href="?eliminar=<?php echo $indice; ?>" onclick="return confirm('¿Eliminar este producto?')">Eliminar</a>
                    </td>
                </tr>
                <?php $total += $producto['precio'] * $producto['cantidad']; ?>
            <?php endforeach; ?>
        </table>

        <h3>Total: $<?php echo number_format($total, 2); ?></h3>

        <form method="get" style="display:inline;">
            <button type="submit" name="vaciar" onclick="return confirm('¿Vaciar el carrito?')">Vaciar carrito</button>
        </form>

       

        <a href="catalogo.php"><button>Agregar más productos</button></a>
        <a href="principal.php"><button>Regresar al inicio</button></a>
        <a href="pagar.php"><button>Pagar</button></a>
    <?php endif; ?>
</body>
</html>