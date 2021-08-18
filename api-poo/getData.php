<?php
    require 'db_config.php';

    $num_rec_per_page = 5;

    if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };

    $start_from = ($page-1) * $num_rec_per_page;

    $sqlTotal ="select count(*) from items";

    $sql = "SELECT * FROM items Order By id desc LIMIT $start_from, $num_rec_per_page";

    $stm = $db->prepare($sql);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    $json['data']=$result;

    $stm=$db->prepare($sqlTotal);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    $json['total']=$result[0]['count(*)'];

    echo json_encode($json);
?>
