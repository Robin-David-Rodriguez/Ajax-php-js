<?php
// llamamos la conexion a la base de datos
require 'db_config.php';
// resivimos los datos
$id = $_POST["id"];
$post = $_POST;
// pasamos los datos para hacer la actualizacion de los datos
$sql = "UPDATE items SET title = '".$post['title']."'
,description = '".$post['description']."'
WHERE id = '".$id."'";
$result = $mysqli->query($sql);
$sql = "SELECT * FROM items WHERE id = '".$id."'";
$result = $mysqli->query($sql);
$data = $result->fetch_assoc();
// llamamos los datoos cambiados y los comvertimos en formato json
echo json_encode($data);
?>