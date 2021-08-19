<?php
// llamamos la conexion a la base de datos 
require 'db_config.php';
// resivimos un dato por metodo post
$id = $_POST["id"];
// creamos una sentencia sql  para eliminar los datos.
// pasamos los datos a formato json
$sql = "DELETE FROM items WHERE id = '".$id."'";
$result = $mysqli->query($sql);
echo json_encode([$id]);
?>