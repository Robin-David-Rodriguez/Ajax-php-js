<?php
// llamamos el archivo con la conexion a la base de datos
require 'db_config.php';

// resivimos por el metodo post 
$post = $_POST;
// creamos  una sentencia sql llamando los valores resividos por el metodo post 
$sql = "INSERT INTO items (title,description)
VALUES ('".$post['title']."','".$post['description']."')";
$result = $mysqli->query($sql);
// creamos una sentencia sql para oredenar los datos 
$sql = "SELECT * FROM items Order by id desc LIMIT 1";
$result = $mysqli->query($sql);
// colocamos los datos en un array
$data = $result->fetch_assoc();
// convertimos los datos en formato json 
echo json_encode($data);
?>