<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perfiles";

// crear la conexion
$conexion = new mysqli($servername, $username, $password, $dbname);
// comprobar la conexion
if ($conexion->connect_error) 
{
    die("conexion fallida: " . $conn->connect_error);
}
else
{
    echo "conexion exitosa";
}
?>