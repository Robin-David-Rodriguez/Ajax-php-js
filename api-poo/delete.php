<?
// llamamos a la conexion a la base de datos 
require 'db_config.php';
// llamamos los datos por metodo post
$id = $_POST["id"];
// creamos la sentencia sql para eliminar items 
$sql = "DELETE FROM items WHERE id = '".$id."'";
// ejecutamos la sentencia sql  
$stm=$db->prepare($sql);
$stm->execute();
// colocamos los datos que quedaron en formato json
echo json_encode([$id]);
?>