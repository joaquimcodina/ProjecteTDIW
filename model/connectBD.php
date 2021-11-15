<?php
include_once __DIR__ . '/../config.php';
function connectaBD(){
    try{
        $connexio = new PDO("mysql:host=".DATABASE_HOST."; dbname=".DATABASE_NAME."; charset=UTF8",
            DATABASE_USER, DATABASE_PASSWORD);

        $connexio->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    return($connexio);
}