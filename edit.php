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

$successMessage = '';
$errorMessage = '';

// Column nomini yangilash
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $oldColumnName = isset($_POST['oldColumnName']) ? $_POST['oldColumnName'] : '';
    $newColumnName = isset($_POST['newColumnName']) ? $_POST['newColumnName'] : '';

    if ($oldColumnName && $newColumnName) {
        // Column mavjudligini tekshirish
        $sql = "SELECT * FROM information_schema.COLUMNS 
                WHERE TABLE_NAME = 'products' 
                AND COLUMN_NAME = :oldColumnName";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':oldColumnName', $oldColumnName);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Column mavjud bo'lsa, yangilash
            $sql = "ALTER TABLE products CHANGE $oldColumnName $newColumnName VARCHAR(255)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $successMessage = "Column name successfully updated to $newColumnName.";
        } else {
            $errorMessage = "Column with name $oldColumnName does not exist.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit Column Name</title>
</head>
<body class="page-container">
<div class="container mt-4">
    <h1 class="mb-4">Edit Column Name</h1>

    <?php if ($successMessage): ?>
        <div class="alert alert-success" role="alert">
            <?php echo htmlspecialchars($successMessage); ?>
        </div>
    <?php endif; ?>

    <?php if ($errorMessage): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($errorMessage); ?>
        </div>
    <?php endif; ?>

    <form action="edit.php" method="post">
        <div class="mb-3">
            <label for="oldColumnName" class="form-label">Old Column Name</label>
            <input type="text" class="form-control" id="oldColumnName" name="oldColumnName" required>
        </div>
        <div class="mb-3">
            <label for="newColumnName" class="form-label">New Column Name</label>
            <input type="text" class="form-control" id="newColumnName" name="newColumnName" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Column Name</button>
    </form>

    <a href="adminP.php" class="btn btn-primary mt-3">Back To Admin Panel</a>
</div>
</body>
</html>
