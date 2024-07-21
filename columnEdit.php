<?php

require 'connectionDB.php';

$db = connectionDB::connect();


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $columnName = $_POST["columnName"];
    $columnType = $_POST["columnType"];

    $sql = "SELECT COUNT(*)
                         FROM INFORMATION_SCHEMA.COLUMNS 
                         WHERE TABLE_NAME = 'products' 
                         AND COLUMN_NAME = '$columnName'";
    $sql = $db->prepare($sql);
    $sql->execute();
    $columnExists = $sql->fetchColumn();
    if ($columnExists == 0)
    {
        $addColumnQuery = "ALTER TABLE `products` ADD COLUMN `$columnName` $columnType";
        $addColumnQuery = $db->exec($addColumnQuery);
        $message = "Successfully added.";
    }else{
        $message = "Already exists.";
    }
    header("Location: adminP.php?message=" . urlencode($message));
    exit();
}

