<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">  
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="principal.php" method="POST">
            <input type="text" name="usuario" placeholder="Nombre de usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Login</button>
        </form>
        <p>No tienes cuenta? <a href="registro.php">Regístrate</a></p>
    </div> 
</body>
</html>

