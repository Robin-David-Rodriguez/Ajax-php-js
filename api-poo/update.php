<?php
// llamamos a la conexion a la base de datos
    require 'db_config.php';
// llamamos los datos por metodo post
    $id = $_POST["id"];

    $post = $_POST;
// creamos una sentencia sql para actualizar los datos actuales traidos por metodo post 
    $sql = "UPDATE items SET title = '".$post['title']."'
    ,description = '".$post['description']."'
    WHERE id = '".$id."'";
// creamos y preparamos la sentencia sql despues pasamos los datos a un array
    $stm=$db->prepare($sql);
    $stm->execute();

    $sql = "SELECT * FROM items WHERE id = '".$id."'";
    $stm=$db->prepare($sql);
    $stm->execute();

    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
// colocamos los datos en formato json
    echo json_encode($result);
?>