<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login">
    <?php session_start(); ?>
    <form method="POST" action="auth.php">
        <h2>Login</h2>
        <label for=""><input name="username" placeholder="name" type="text" required></label>
        <label for=""><input name="password" placeholder="password" type="password" required></label>


        <button type="submit">Login</button>
    </form>
   
</body>
</html>