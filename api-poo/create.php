<?php
//llamamos a la conexion a la base de datos
require 'db_config.php';
// llamamos los datos por metodo post
$post = $_POST;
// creamos una sentencia sql para crear un nuevo item  
$sql = "INSERT INTO items (title,description)
VALUES ('".$post['title']."','".$post['description']."')";
// ejecutamos la sentencias sql creada  
$stm=$db->prepare($sql);
$stm->execute();
// creamos y ejecutamos la sentencia sql la cual va a mostrar los items y el orden  
$sql = "SELECT * FROM items Order by id desc LIMIT 1";
$stm=$db->prepare($sql);
$stm->execute();
// pasamos los datos a un array
$result=$stm->fetchAll(PDO::FETCH_ASSOC);
// y los convertimos en formato json
echo json_encode($result);
?>