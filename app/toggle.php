<?php

require_once 'includes/db-connection.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "UPDATE tasks 
              SET completed = NOT completed 
              WHERE id = :id";

    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':id' => $id
    ]);
}

header("Location: index.php");
exit;