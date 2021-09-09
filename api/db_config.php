<?php
// configuracion a la base de datos 
    $DB_USER = "root"; // colocamos el nombre del usuario de la base de datos 
    $DB_PASSWORD = ""; // colocamos la Contraseña de la base de datos
    $DB_DATABASE =  "trabajo"; // colocamos l nombre de la base de datos 
    $DB_HOST = "localhost"; // colocamos el nombre del host con el que estamos trabajando 
    $mysqli =  mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DATABASE); // colocamos la conexion a la base de datos con el conector mysqli_connect y le pasamos como parametro el nombre de las variables
?>
