<?php

    $host = "localhost";
    $dbname = "agenda";
    $user = "developer";
    $pass = "1234567";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        //ativar o mode de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
    }