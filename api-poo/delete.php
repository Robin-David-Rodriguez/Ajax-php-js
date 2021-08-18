<?php
require 'db_config.php';
$id = $_POST["id"];

$sql = "DELETE FROM items WHERE id = '".$id."'";

$stm=$db->prepare($sql);
$stm->execute();

echo json_encode([$id]);
?>