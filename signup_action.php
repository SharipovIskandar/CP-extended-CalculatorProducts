<?php
declare(strict_types=1);

require 'connectionDB.php';
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $db = connectionDB::connect();

    $sql = "INSERT INTO users (userName, email, password) VALUES (:userName, :email, :password)";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':userName', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        header("Location: signIn.php");
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>
