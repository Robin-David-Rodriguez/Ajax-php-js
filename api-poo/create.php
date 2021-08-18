<?php
require 'db_config.php';

$post = $_POST;

$sql = "INSERT INTO items (title,description)
VALUES ('".$post['title']."','".$post['description']."')";

$stm=$db->prepare($sql);
$stm->execute();

$sql = "SELECT * FROM items Order by id desc LIMIT 1";
$stm=$db->prepare($sql);
$stm->execute();

$result=$stm->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
?>