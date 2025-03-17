<?php
include("productos.php");

$nombre_producto = $_POST['nombre_producto'];
$precio_producto = $_POST['precio_producto'];
$fecha_compra = $_POST['fecha_compra'];

$consulta = "INSERT INTO ventas (nombre_producto, precio_producto, fecha_compra) VALUES ('$nombre_producto', '$precio_producto', '$fecha_compra')";

$resultado = $conexion->query($consulta);

if($resultado)
{
    echo "Venta exitosa";
    header("Location: carrito.php");
}
else
{
    echo "Error al vender";
}
?>