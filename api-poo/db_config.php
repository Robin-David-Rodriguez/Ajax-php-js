<?php
    //Definir atributos de la Clase
    $db=NULL;
    $hostname = 'localhost'; // colocamos el host de la base de datos 
    $database = 'trabajo';   // colocamos le nombre de la base de datos 
    $username = 'root';      // colcoamos el nombre del usuario con el cual tenemos configurada la base de datos 
    $password = "";          // colocamos el nombre de la base de datos 
    $dsn = "mysql:host=$hostname;dbname=$database;charset=UTF8";  // colocamos la base de datos para un formato UTF8 para que permita caracteres en español 
    // conexion a la base de datos con programacion orientada a objetos 
    try // iniciamos la conexion pdo  
    {
        $db = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); // colcoamos las variables y le asignamos los atributos para pdo 
    } catch (PDOException $e)    // le pasamos en caso de que la conexion no sea positiva  
    {
        echo 'Excepción capturada: ', $e->getMessage(), self::$dsn, "\n"; // le mandamos un mensaje de error en caso de que la conexion faller 
    }
?>