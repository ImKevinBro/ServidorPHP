<?php
if(!empty($_POST["resgistros_2.0"]))
{
    if(!empty($_POST["usuarios"]) or !empty($_POST["contrasena"]))
    {
        echo 'uno de los campos esta vacio';
    }
    else
    {
        $usuarios = $_POST["usuarios"];
        $contrasena = $_POST["contrasena"];
        $sql = $conexion->query("INSERT INTO registros_2.0 (usuarios, contrasena) VALUES ('$usuarios', '$contrasena')");
        if($sql==1)
        {
            echo 'registro exitoso';          
        }
        else
        {
            echo 'error al registrar';
        }
    }
}


?>