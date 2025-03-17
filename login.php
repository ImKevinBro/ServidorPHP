<?php
if(!empty($_POST[]))
{
    if(!empty($_POST["usuarios"]) or !empty($_POST["contrasena"]))
    {
        echo 'uno de los campos esta vacio';
    }
    else
    {
        $usuarios = $_POST["usuarios"];
        $contrasena = $_POST["contrasena"];
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