<?php
// llamamos a la conexion a la base de datos
    require 'db_config.php';

    $num_rec_per_page = 5;
 // generamos una respuesta si existen los datos enviados por metodo get  
    if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };

    $start_from = ($page-1) * $num_rec_per_page;
// creamos la sentencia sql para que cuente todos los registros  
    $sqlTotal ="select count(*) from items";
// creamos una sentencia sql para darle parametros para que creen las paginas y en que orden muestre los datos  
    $sql = "SELECT * FROM items Order By id desc LIMIT $start_from, $num_rec_per_page";
// ejecutamos la sentencia sql
    $stm = $db->prepare($sql);
    $stm->execute();
 // pasamos los datos a un array   
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    $json['data']=$result;

    $stm=$db->prepare($sqlTotal);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    $json['total']=$result[0]['count(*)'];

    echo json_encode($json);
?>
