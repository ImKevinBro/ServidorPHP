<?php
session_start();

// Inicializar el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Productos del catálogo
$productos = [
    // Originales
    ['id' => 1, 'nombre' => 'Teclado Inalámbrico', 'precio' => 12000, 'imagen' => 'teclado.jpg'],
    ['id' => 2, 'nombre' => 'Libro de Programación', 'precio' => 500, 'imagen' => 'libro2.jpg'],
    ['id' => 3, 'nombre' => 'Libro de Diseño UX', 'precio' => 1500, 'imagen' => 'libro1.jpg'],
    ['id' => 4, 'nombre' => 'Monitor LED 24"', 'precio' => 3000, 'imagen' => 'monitor.jpg'],
    ['id' => 5, 'nombre' => 'Auriculares Gaming', 'precio' => 900, 'imagen' => 'auriculares.jpg'],
    ['id' => 6, 'nombre' => 'Sistema iOS Actualizado', 'precio' => 2000, 'imagen' => 'ios.jpg'],
    ['id' => 7, 'nombre' => 'Ebook Avanzado', 'precio' => 300, 'imagen' => 'libro3.jpg'],
    ['id' => 8, 'nombre' => 'Servidor en la Nube', 'precio' => 4500, 'imagen' => 'nube.jpg'],
    ['id' => 9, 'nombre' => 'Servidor Dedicado Pro', 'precio' => 3200, 'imagen' => 'servidor2.jpg'],
    ['id' => 10, 'nombre' => 'Router de Alta Velocidad', 'precio' => 6000, 'imagen' => 'router1.jpg'],

    // Duplicados con nuevos nombres
    ['id' => 11, 'nombre' => 'Teclado RGB', 'precio' => 12000, 'imagen' => 'teclado.jpg'],
    ['id' => 12, 'nombre' => 'Manual de Python', 'precio' => 500, 'imagen' => 'libro2.jpg'],
    ['id' => 13, 'nombre' => 'Libro de Frontend', 'precio' => 1500, 'imagen' => 'libro1.jpg'],
    ['id' => 14, 'nombre' => 'Pantalla Full HD', 'precio' => 3000, 'imagen' => 'monitor.jpg'],
    ['id' => 15, 'nombre' => 'Audífonos Inalámbricos', 'precio' => 900, 'imagen' => 'auriculares.jpg'],
    ['id' => 16, 'nombre' => 'Actualización iOS', 'precio' => 2000, 'imagen' => 'ios.jpg'],
    ['id' => 17, 'nombre' => 'Libro de JavaScript', 'precio' => 300, 'imagen' => 'libro3.jpg'],
    ['id' => 18, 'nombre' => 'Almacenamiento en la Nube', 'precio' => 4500, 'imagen' => 'nube.jpg'],
    ['id' => 19, 'nombre' => 'Servidor VPS Pro', 'precio' => 3200, 'imagen' => 'servidor2.jpg'],
    ['id' => 20, 'nombre' => 'Router Mesh System', 'precio' => 6000, 'imagen' => 'router1.jpg'],

    // Duplicados adicionales hasta el 30
    ['id' => 21, 'nombre' => 'Servicios de pagina web', 'precio' => 12000, 'imagen' => 'logo.png'],
    ['id' => 22, 'nombre' => 'Guía Avanzada de Python', 'precio' => 500, 'imagen' => 'libro2.jpg'],
    ['id' => 23, 'nombre' => 'Libro de Diseño Web', 'precio' => 1500, 'imagen' => 'libro1.jpg'],
    ['id' => 24, 'nombre' => 'Monitor 4K UHD', 'precio' => 3000, 'imagen' => 'monitor.jpg'],
    ['id' => 25, 'nombre' => 'Headset Profesional', 'precio' => 900, 'imagen' => 'auriculares.jpg'],
    ['id' => 26, 'nombre' => 'Sistema Operativo iOS', 'precio' => 2000, 'imagen' => 'ios.jpg'],
    ['id' => 27, 'nombre' => 'Guía Básica de HTML', 'precio' => 300, 'imagen' => 'libro3.jpg'],
    ['id' => 28, 'nombre' => 'Infraestructura en la Nube', 'precio' => 4500, 'imagen' => 'nube.jpg'],
    ['id' => 29, 'nombre' => 'Servidor Cloud Premium', 'precio' => 3200, 'imagen' => 'servidor2.jpg'],
    ['id' => 30, 'nombre' => 'Router de Alta Cobertura', 'precio' => 6000, 'imagen' => 'router1.jpg']
];
// Agregar producto al carrito
if (isset($_POST['agregar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $imagen = $_POST['imagen'];

    // Verificar si el producto ya está en el carrito para actualizar cantidad
    $existe = false;
    foreach ($_SESSION['carrito'] as &$producto) {
        if ($producto['id'] == $id) {
            $producto['cantidad'] += 1; // Incrementar cantidad si existe
            $existe = true;
            break;
        }
    }

    // Si no existe, agregarlo como nuevo
    if (!$existe) {
        $producto = [
            'id' => $id,
            'nombre' => $nombre,
            'precio' => $precio,
            'imagen' => $imagen,
            'cantidad' => 1
        ];
        $_SESSION['carrito'][] = $producto;
    }

    // Redireccionar para evitar duplicar producto al recargar
    header('Location: catalogo.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .contenedor {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .producto {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        img {
            width: 100%;
            max-height: 150px;
            border-radius: 8px;
        }

        button {
            background-color: rgb(52, 116, 57);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(112, 180, 117);
        }

        .botones {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="titulo">
            <font size="6">
                <b><i>
                        <h1 style="color:rgb(203, 253, 228)">Catálogo</h1>
                        <br>
                    </i></b>
            </font>
        </div>

        <div class="contenedor">
            <?php foreach ($productos as $producto) : ?>
                <div class="producto">
                    <img src="imagenes/<?php echo htmlspecialchars($producto['imagen']); ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>">
                    <h3><?php echo htmlspecialchars($producto['nombre']); ?></h3>
                    <p>$<?php echo number_format($producto['precio'], 2); ?></p>
                    <form method="post" action="catalogo.php">
                        <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                        <input type="hidden" name="nombre" value="<?php echo $producto['nombre']; ?>">
                        <input type="hidden" name="precio" value="<?php echo $producto['precio']; ?>">
                        <input type="hidden" name="imagen" value="<?php echo $producto['imagen']; ?>">
                        <button type="submit" name="agregar">Comprar</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="botones">
            <a href="carrito.php"><button>Ver carrito</button></a>
            <a href="principal.php"><button>Regresar</button></a>
        </div>
    </div>
</body>

</html>