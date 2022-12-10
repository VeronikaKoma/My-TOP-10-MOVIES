<?php


//datos de conneccion a la BBDD
$server ="localhost";
$user ="root"; //mamp o xampp es root
$password =""; //xampp vacia - mamp "root"
$nameDatabase ="mustseefromnikamosquito";

try{
    $connection = new PDO("mysql:host=$server;dbname=$nameDatabase",$user,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexion realizada correctamente";
}

catch(PDOexception $e){
    echo "La conexion ha fallado ;" . $e->getMessage();
    
}




