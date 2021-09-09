<?php
// conexion a la base de datos con programacion orientada a objetos
    //Definir atributos de la Clase
    $db=NULL;         
    $hostname = 'localhost';  // colocamos el nombre del host de la base de datos  
    $database = 'trabajo';   //colocamos el nombre de la base de datos 
    $username = 'root';      //  colocamos el nombre del usuario de la base de datos  
    $password = "";          // colocamos la contraseña de la base de datos 
    $dsn = "mysql:host=$hostname;dbname=$database;charset=UTF8";  // colcamos en la base de datos que resiva elementos en español 
    // crear la conexion a la base de datos
    try 
    {
        $db = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); // colocamos un nuevo elemento pdo y le pasamos como parametros las variables que contienen los atributos de la base de datos  
    } catch (PDOException $e) // pasamos la exepcion en caso de fallo en la conexion  
    {
        echo 'Excepción capturada: ', $e->getMessage(), self::$dsn, "\n";
    }
?>