<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD']==='POST') {
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);

        $file ="data/users.txt";
        $users=file_exists($file) ? file($file, FILE_IGNORE_NEW_LINES) : [];

        //To see username exists or not
        foreach ($users as $user) {
            list($u,$p) =explode("|",$user);

            if ($u === $username) {
            die("Usernae already exists Try a new one <a href='register.php' >Try Again</a>");
            }
        }
        //save new user
        file_put_contents($file,"$username|$passward\n",FILE_APPEND);

        //CREATING NEW FILE FOR THE NEW USER 
        file_put_contents("data/tasks/$username.txt","");
        echo "Registration successful. <a href='login.php' >login here</a>";
        exit;
    }
    ?>
    <form method="POST">
        <h2>Register</h2>
        <label for=""><input name="username" placeholder="name" type="text" required></label>
        <label for=""><input name="password" placeholder="password" type="password" required></label>


        <button type="submit">Login</button>
    </form>
</body>
</html>