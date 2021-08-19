<?php
// llamamos a la base de datos 
require 'db_config.php';
$num_rec_per_page = 5;
// generamos una respuesta si existen los datos enviados por metodo get 
if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
// le damos un valor a la variable el cual contendra la forma en la que mostramos los datos 
$start_from = ($page-1) * $num_rec_per_page;
// creamos una sentencia sql para llamar todos los datos de la tabla items 
$sqlTotal = "SELECT * FROM items";
// creamos una sentencia sql para decirle cuantas paginas generar y en que orden  
$sql = "SELECT * FROM items Order By id desc LIMIT $start_from, $num_rec_per_page";
$result = $mysqli->query($sql);
// colocamos todos los datos en un array
while($row = $result->fetch_assoc()){
$json[] = $row;
}
// convertimos los datos en formato json
$data['data'] = $json;
$result = mysqli_query($mysqli,$sqlTotal);
$data['total'] = mysqli_num_rows($result);
echo json_encode($data);
?>