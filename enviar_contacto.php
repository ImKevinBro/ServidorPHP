<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentario Enviado - Atheria System</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            width: 200px;
        }
        h2 {
            color: #4CAF50;
        }
        p {
            margin-top: 10px;
            font-size: 16px;
        }
        .btn {
            background-color: rgb(55, 90, 57);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            margin-top: 15px;
            display: inline-block;
        }
        .btn:hover {
            background-color:rgb(55, 90, 57);
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener datos del formulario
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $mensaje = htmlspecialchars($_POST['mensaje']);

        // Validar si los campos no están vacíos
        if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
            // Aquí puedes agregar lógica para guardar el comentario o enviarlo por correo si es necesario
            echo "<h2>¡Gracias por tu comentario, $nombre!</h2>";
            echo "<p>Responderemos a la brevedad a tu correo: <strong>$email</strong></p>";
        } else {
            echo "<h2>Oops...</h2>";
            echo "<p>Todos los campos son obligatorios. Por favor, inténtalo de nuevo.</p>";
        }
    } else {
        echo "<h2>Acceso no autorizado</h2>";
    }
    ?>
    <a href="principal.php" class="btn">Regresar</a>
</div>

</body>
</html>