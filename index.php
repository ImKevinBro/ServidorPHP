<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Arquitectura de Monolitos</title>
</head>
<body>  
<center>
    <form action="insertar.php" method="post">
        <h1>Registrate</h1>
        <table>
            <tr><td>Nombre:</td><td><input type="text" name="nombre"></td></tr>
            <tr><td>Apellido:</td><td><input type="text" name="apellido"></td></tr>
            <tr><td>Correo:</td><td><input type="text" name="correo"></td></tr>
            <tr><td>Contraseña:</td><td><input type="password" name="contrasena"></td></tr>
            <tr><td><button type="submit">Registrar</button></td></tr>
        </table>
    </form>

    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Login</button>
        </form>
    </div>      
    <p>No tienes cuenta? <a href="registro.php">Regístrate</a></p>
</center>   
</body>
</html>
