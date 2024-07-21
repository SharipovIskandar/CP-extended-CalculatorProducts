<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css"> <!-- CSS faylini ulash -->
</head>
<body>
<div class="container">
    <h2>Sign In</h2>
    <form action="signIn_action.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Sign In">
    </form>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</div>
</body>
</html>
