<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form method="POST" action="ajax/login_register.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="email_mob" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="pass" required><br><br>

        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>