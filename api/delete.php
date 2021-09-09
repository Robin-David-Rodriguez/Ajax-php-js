<?php
// llamamos la conexion a la base de datos 
require 'db_config.php';
// resivimos un dato por metodo post
$id = $_POST["id"];
// creamos una sentencia sql  para eliminar los datos.
// pasamos los datos a formato json
$sql = "DELETE FROM items WHERE id = '".$id."'"; // colocamos la sentencia sql para eliminar el campo el cual se lo pasamos con la variable $id
$result = $mysqli->query($sql);                  // colocamos a que se ejecute la sentencia 
echo json_encode([$id]);                         // colocamos todo en formato json 
?>