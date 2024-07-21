<?php
declare(strict_types=1);
require 'connectionDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $db = connectionDB::connect();

    $sql = "SELECT * FROM users WHERE userName = :username AND password = :password";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header("Location: adminP.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>
