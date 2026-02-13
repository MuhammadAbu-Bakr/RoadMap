<?php
    session_start();
    $file ="data/users.txt";

    $username = $_POST['username'] ??'';
    $password = $_POST['password'] ??'';

    $users =file_exists($file) ? file($file,FILE_IGNORE_NEW_LINES) : [];
    $logged_in=false;
    foreach ($users as $user) {
            list($u,$p) =explode("|",$user);

            if ($u === $username && $p === $password) {
                $_SESSION['user' ] =$username;
                $logged_in=true;
                header("location: index.php");
                exit;
            }
        }
    if (!$logged_in) {
        echo "Invalid Login. <a href='login.php'>Try Again</a>";
    }
?>