<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

if (!empty($data)) {
    if ($data["type"] === "create") {
        if($data["title"] != "" && $data["observations"] != "") {
            $title = $data["title"];
            $observations = $data["observations"];

            $query = "INSERT INTO notes (title, observations) VALUE (:title, :observations)";
    
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
        } else {
            $_SESSION["msg"] = "Erro ao Salvar";
        }
    } else if ($data["type"] === "delete") {

        $id = $data["id"];

        $query = "DELETE FROM notes WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            $_SESSION["msg"] = "Removido com sucesso!";
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }
    }
    header("Location:".$BASE_URL."../index.php");
} else {
    $notes = [];

    $query = "SELECT * FROM notes";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $notes = $stmt->fetchAll();
}

$conn = null;