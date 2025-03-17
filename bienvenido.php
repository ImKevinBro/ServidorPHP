<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Bienvenido</title>
</head>
<body>
  
    <script>
        function mostrarMision() 
        {
            document.querySelector('.mision').style.display = 'block';
        }
    </script>
                
    <div class="welcome-container">
        <h1>¡Bienvenido a Atheris Systems!</h1>
        <p>Has iniciado sesión correctamente.</p>
        <a href="logout.html">Cerrar sesión</a>
    </div>

    <div class="navbar">
        <div class="nav-links">
            <a href="index.html">Inicio</a>
            
            <div class="dropdown">
                <a href="#">Misión</a>
                <div class="dropdown-content">
                    <p>En Atheris Systems, nos dedicamos a diseñar e implementar soluciones de sistemas distribuidos de alto rendimiento, 
                        ofreciendo infraestructura escalable, segura y eficiente para empresas que buscan transformar su operatividad digital.</p>
                </div>
            </div>

            <div class="dropdown">
                <a href="#">Visión</a>
                <div class="dropdown-content">
                    <p>Ser la empresa líder en sistemas distribuidos a nivel global, reconocida por nuestra capacidad de innovación, seguridad y eficiencia.</p>
                </div>
            </div>

            <a href="catalogo.php">Catálogo</a>            
        </div>

        <!-- Carrito alineado a la derecha -->
        <a href="carrito.html" class="cart-icon">🛒 Carrito</a>
    </div>
    
</body>
</html>