<?php
    require 'db_config.php';

    $id = $_POST["id"];

    $post = $_POST;

    $sql = "UPDATE items SET title = '".$post['title']."'
    ,description = '".$post['description']."'
    WHERE id = '".$id."'";

    $stm=$db->prepare($sql);
    $stm->execute();

    $sql = "SELECT * FROM items WHERE id = '".$id."'";
    $stm=$db->prepare($sql);
    $stm->execute();

    $result=$stm->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
?>