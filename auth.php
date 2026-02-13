<?php
    session_start();
    $file ="data/users.txt";

    $username = $_POST['username'] ??'';
    $password = $_POST['password'] ??'';
    if(file_exists($file)){
        $users =file($file,FILE_IGNORE_NEW_LINES);
        foreach ($users as $user) {
            list($u,$p) =explode("|",$user);

            if ($u === $username && $p === $password) {
                $_SESSION['user' ] =$username;
                header("location: index.php");
                exit;
            }
        }
    }
    echo "INvalid Login. <a href='login.php'>Try Again</a>"
?>