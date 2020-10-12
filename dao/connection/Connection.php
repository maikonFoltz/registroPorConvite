<?php

    $dsn = "mysql:dbname=registro_convite; host=localhost:8889";
    $dbuser = "admin";
    $dbpass = "admin";

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);     
    }catch(PDOException $e){
        echo "ERRO: ".$e;

    }


?>