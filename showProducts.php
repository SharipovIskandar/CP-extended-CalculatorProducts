<?php
$dsn = "mysql:host=localhost;dbname=cp;charset=utf8";
$db_user = "root";
$db_password = "iskan2066";

try {
    $pdo = new PDO($dsn, $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$sql = "DESCRIBE products";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Table Structure</title>
</head>
<body>
<div class="container mt-4">
    <h1 class="mb-4">Products Table Structure</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Column Name</th>
            <th>Column Type</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($columns as $column): ?>
            <tr>
                <td><?php echo htmlspecialchars($column['Field']); ?></td>
                <td><?php echo htmlspecialchars($column['Type']); ?></td>
                <td><?php echo htmlspecialchars($column['Null']); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="adminP.php" class="btn btn-primary mt-3">Back To Admin Panel</a>
</div>
</body>
</html>
