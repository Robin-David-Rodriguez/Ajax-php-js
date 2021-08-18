<?php
$i=5;
if($_GET['id']){
get_persons($_GET['id']);
} else {
die("Solicitud no válida.");
}
function get_persons( $id ) {
//Cambia por los detalles de tu base datos
$dbserver = "localhost";
$dbuser = "root";
$password = "";
$dbname = "trabajo";



try {      
    $dsn = "mysql:host=".$dbserver.";dbname=".$dbname;
    $dbh = new PDO($dsn, $dbuser,$password); 
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $jsondata=array();

    if(is_array($id)){
        $id = array_map('intval', $id);
        $querywhere = "where id in (" . implode( ',', $id ) . ")";
    }else{
        $id = intval($id);
        $querywhere = "WHERE `ID` = " . $id;
    }

    $stm=$dbh->prepare("SELECT * FROM `prueba_users` " . $querywhere);
    
    
    
    if($stm->execute())
    {
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        if(sizeof($result)>0)
        {
            $jsondata["success"] = true;
            $jsondata["data"]["message"] = sprintf("Se han encontrado %d usuarios", sizeof($result));
            $jsondata["data"]["users"] = array();
            $jsondata["data"]["users"] = $result;
        }else
        {
            $jsondata["success"] = false;
            $jsondata["data"] = array(
                'message' => 'No se encontró ningún resultado.'
            );
        }
    }else
    {
        $jsondata["success"] = false;
        $jsondata["data"] = array(
            'message' => $database->error
        );
    }
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($jsondata, JSON_FORCE_OBJECT);

} catch (PDOException $e){  
   echo  $e->getMessage(); 
   return false; 
                } 
  return $dbh;


            }


