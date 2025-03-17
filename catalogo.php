<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
   
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

<div class="titulo">
    <font size="6">
    <b><i>
    <h1 style="color:rgb(208, 247, 202)">Bienvenido al catagolo de Atheria System</h1> <br>
    </font>
        </i>
        </div>


        
        <?php include 'productos.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Atheria System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

   
    


</body>


<div class="contenedor-productos">
        <?php foreach ($productos as $producto): ?>
            <div class="tarjeta">
                <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                <h2><?php echo $producto['nombre']; ?></h2>
                <p><?php echo $producto['descripcion']; ?></p>
                <p class="precio"><?php echo $producto['precio']; ?></p>
                <button>Comprar</button>
            </div>
        <?php endforeach; ?>
    </div>











    </div>






    </div>




    <div class="footer-buttons">
    <a href="carrito.php" class="btn">Ir al Carrito</a>
    <a href="principal.php" class="btn-outline">Regresar</a>
</div>











































   

    </div>

















   
  
  
   
</body>
</html>


        
      