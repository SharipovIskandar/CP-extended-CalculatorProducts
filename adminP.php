

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2 style="margin: 0; text-align: center; position: absolute; top: 0; left: 50%; transform: translateX(-50%);">Admin Panelga hush kelibsiz, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <form action="logout.php" method="post">
        <button type="submit" class="logout-btn">Log out</button>
    </form>
<div class="container">
<form method="post" action="columnEdit.php">
    <h2> Add Column </h2>
    <label for="columnName">Column Name: </label>
    <input id="columnName" type="text" name="columnName" required>
    <label for="columnType">Column Type</label>
    <input id="columnType" type="text" name="columnType" required>
    <input type="submit" value="Submit">
    <?php if (isset($_GET['message'])): ?>
        <div class="alert">
            <?php echo htmlspecialchars($_GET['message']); ?>
        </div>
    <?php endif; ?>
</form>
    <form action="showProducts.php" method="post">
        <input type="submit" value="View data">
    </form>
</div>

</body>
</html>
