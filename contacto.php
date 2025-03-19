<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Atheria System</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
    <div class="titulo">
    <font size="6">
    <b><i>
    <h1 style="color:rgb(208, 247, 202)">                           Bienvenido a Contactos                    </h1> <br>
    </font>
    
        </i>
        </div>
        <h2>Haznos saber tu comentario o reclamo, estamos para mejorar</h2>
        <form action="enviar_contacto.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
            
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>
            
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="20" placeholder="Escribe tu mensaje aquí..." required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>