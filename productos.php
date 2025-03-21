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
        'cantidad' => $_POST['cantidad'],
        'imagen' => $_POST['imagen'] // Nueva clave para la imagen
    ];
    $_SESSION['carrito'][] = $producto;
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .login-container {
            width: 80%;
            margin: 20px auto;
        }
        .carrito {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #4CAF50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        img {
            width: 60px;
            height: 60px;
            border-radius: 8px;
        }
        button {
            background-color:rgb(74, 107, 75);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color:rgb(58, 78, 59);
        }
        .lg img {
            width: 40px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="carrito">
            <div class="titulo">
                <table>
                    <tr>
                        <td>
                            <a href="carrito.php">
                                <img src="imagenes/logo.png" alt="Ícono de carrito">
                            </a>
                        </td>
                        <td>
                            <h1>Carrito de compras</h1>
                        </td>
                    </tr>
                </table>
            </div>

            <table>
                <tr>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acción</th>
                </tr>
                <?php $total = 0; ?>
                <?php foreach ($_SESSION['carrito'] as $indice => $producto): ?>
                    <tr>
                        <td>
                            <img src="imagenes/<?php echo htmlspecialchars($producto['imagen']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
                        </td>
                        <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                        <td>$<?php echo number_format($producto['precio'], 2); ?></td>
                        <td><?php echo htmlspecialchars($producto['cantidad']); ?></td>
                        <td>$<?php echo number_format($producto['precio'] * $producto['cantidad'], 2); ?></td>
                        <td>
                            <a href="?eliminar=<?php echo $indice; ?>" onclick="return confirm('¿Eliminar este producto?')">
                                <button>Eliminar</button>
                            </a>
                        </td>
                    </tr>
                    <?php $total += $producto['precio'] * $producto['cantidad']; ?>
                <?php endforeach; ?>
            </table>

            <br>
            <h3>Total: $<?php echo number_format($total, 2); ?></h3>

            <!-- Vaciar carrito -->
            <?php if (!empty($_SESSION['carrito'])): ?>
                <form method="get" style="display:inline;">
                    <button type="submit" name="vaciar" onclick="return confirm('¿Vaciar el carrito?')">Vaciar carrito</button>
                </form>
            <?php endif; ?>
        </div>

        <div class="login-container button">
            <p>Cada artículo para tu necesidad.</p>

            <form action="catalogo.php" method="get">
                <button type="submit">Agregar más productos</button>
            </form>

            <form action="principal.php" method="get">
                <button type="submit">Regresar al inicio</button>
            </form>

            <form action="pagar.php" method="get">
                <button type="submit">Pagar</button>
            </form>
        </div>

        <div class="lg">
            <a href="carrito.php">
                <img src="imagenes/carri.png" alt="Ícono de carrito">
            </a>
        </div>
    </div>
</body>
</html>