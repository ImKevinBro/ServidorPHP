<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquitectura en monolito</title>
    <link rel="stylesheet" href="estilos.css">  
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
        <p id="error-message" style="color: red; display: none;">Usuario o contraseña incorrectos</p>
    </div> 


</body>
</html>

