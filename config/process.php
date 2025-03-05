<?php

    session_start();

    include_once("connection.php");

    $data = $_POST;

if (!empty($data)) {
    if ($data["type"] === "create") {
        $title = $data["title"];
        $observations = $data["observations"];

        $query = "INSERT INTO notes (title, observations) VALUE (:title,:observations)";
    
        $stmt = $conn->prepare($query);

        $stmt->bindParam(":title", $title);
        $stmt->bindParam(":observations", $observations);
    
        try {
            $stmt->execute();
            $_SESSION["msg"] = "Salvo com sucesso";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $erro";
        }

    }
}

$conn = null;