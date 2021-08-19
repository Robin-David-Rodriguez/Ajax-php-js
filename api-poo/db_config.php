<?php
    //Definir atributos de la Clase
    $db=NULL;
    $hostname = 'localhost';
    $database = 'trabajo';
    $username = 'root';
    $password = "";
    $dsn = "mysql:host=$hostname;dbname=$database;charset=UTF8";
    // conexion a la base de datos con programacion orientada a objetos 
    try 
    {
        $db = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) 
    {
        echo 'Excepción capturada: ', $e->getMessage(), self::$dsn, "\n";
    }
?>