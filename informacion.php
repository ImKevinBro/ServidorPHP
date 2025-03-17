<?php
if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
} else {
    $seccion = 'default';
}
?>

<?php
if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
} else {
    $seccion = 'default';
}
?>
<?php

include 'data.php';
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información - Atheria System</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        .btn-regresar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color:rgb(63, 88, 65);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .btn-regresar:hover {
            background-color: #21867a;
        }
    </style>
</head>
<body>
<script src="https://unpkg.com/gojs@2.3.16/release/go.js"></script>
<div class="content">
<div class="content">
        <div class="titulo">
    <font size="6">
    <b><i>
    <h1 style="color:rgb(203, 253, 228)">Informacion de Atheria System</h1> <br>
    </font>
        </i>
        </div>
        
        <?php if ($seccion == "vision"): ?>
        
    
            <div class="info">
    <h2>Nuestra Visión</h2>  </b>
            <p>Ser la empresa lider en sistemas distribaidos a nivel global, reconocida por nuestra capacidad de innovacion, seguridad y eficenca </p>

            <div class="mapa">
        <svg class="canvas">
        <?php
  foreach ($mapa as $nodo) {
      if ($nodo["padre"] !== null) {
          $padre = array_filter($mapa, fn($item) => $item["id"] === $nodo["padre"]);
          $padre = array_values($padre)[0];
          echo "<line x1='{$padre["x"]}' y1='{$padre["y"]}' x2='{$nodo["x"]}' y2='{$nodo["y"]}' stroke='black' stroke-width='2' marker-end='url(#arrow)' />";
      }
  }
  ?>
            <defs>
                <marker id="arrow" markerWidth="10" markerHeight="10" refX="6" refY="3" orient="auto">
                    <polygon points="0 0, 6 3, 0 6" fill="black"/>
                </marker>
            </defs>
            <?php
foreach ($mapa as $nodo) {
    echo "<circle cx='{$nodo["x"]}' cy='{$nodo["y"]}' r='40' fill='#4CAF50' />"; // Verde sólido
    echo "<text x='{$nodo["x"]}' y='{$nodo["y"]}' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='12'>{$nodo["texto"]}</text>";
}
?>
        </svg>
    </div>













</p>
<a href="principal.php" class="btn-regresar">Regresar</a>
           
            

        <?php elseif ($seccion == "mision"): ?>
            <h2>Nuestra Misión</h2>
            <p>
En Athons Systems, nos dedicamos a diséñar e implementar
SolucIones de sistemas distribados de alto rendimiento</p> <br>

<div class="mapa">
        <svg class="canvas">
        <?php
  foreach ($mapa as $nodo) {
      if ($nodo["padre"] !== null) {
          $padre = array_filter($mapa, fn($item) => $item["id"] === $nodo["padre"]);
          $padre = array_values($padre)[0];
          echo "<line x1='{$padre["x"]}' y1='{$padre["y"]}' x2='{$nodo["x"]}' y2='{$nodo["y"]}' stroke='black' stroke-width='2' marker-end='url(#arrow)' />";
      }
  }
  ?>
            <defs>
                <marker id="arrow" markerWidth="10" markerHeight="10" refX="6" refY="3" orient="auto">
                    <polygon points="0 0, 6 3, 0 6" fill="black"/>
                </marker>
            </defs>
            <?php
foreach ($mapa as $nodo) {
    echo "<circle cx='{$nodo["x"]}' cy='{$nodo["y"]}' r='40' fill='#4CAF50' />"; // Verde sólido
    echo "<text x='{$nodo["x"]}' y='{$nodo["y"]}' dominant-baseline='middle' text-anchor='middle' fill='white' font-size='12'>{$nodo["texto"]}</text>";
}
?>
        </svg>
    </div>



















    
    <a href="principal.php" class="btn-regresar">Regresar</a>

        <?php else: ?>
            <p>Seleccione una opción válida.</p>
            <a href="principal.php" class="btn-regresar">Regresar</a>
        <?php endif; ?>
        
        </div>
    </div>
    </div>
</body>
</html> 