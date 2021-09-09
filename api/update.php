<?php
// llamamos la conexion a la base de datos
require 'db_config.php';
// resivimos los datos
$id = $_POST["id"];
$post = $_POST;
// pasamos los datos para hacer la actualizacion de los datos a travez de la sentencia sql 
$sql = "UPDATE items SET title = '".$post['title']."'
,description = '".$post['description']."'
WHERE id = '".$id."'";
$result = $mysqli->query($sql);    // le damos el valor a una variable para que se ejecute la sentencia sql antes preparada 
$sql = "SELECT * FROM items WHERE id = '".$id."'"; // colocamos una nueva sentencia sql 
$result = $mysqli->query($sql);                   // ejecutamos la sentencia sql 
$data = $result->fetch_assoc();                   // pasamos los resultados a un array 
// llamamos los datoos cambiados y los comvertimos en formato json
echo json_encode($data);
?>