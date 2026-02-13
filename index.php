<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: login.php");
        exit;
    }

    $user =$_SESSION['user'];
    $task_file="data/tasks/$user.txt";
    
    //new tasks
    if (isset($_POST['task'])) {
        $task =trim($_POST['task']);
        if ($task !== "") {
            file_put_contents($task_file, $task . PHP_EOL, FILE_APPEND);


        }
    }
    //read tasks 
    $tasks = file_exists($task_file) ? file($task_file, FILE_IGNORE_NEW_LINES):[];
    ?>
    <h2>Welcome, <?php echo htmlspecialchars($user);?> </h2>
    <form method="POST">
        <label for=""><input type="text" name="task" placeholder="Add new task" required></label>
        <button  type="submit"> Add Task</button>
    </form>
    <h3>Your Tasks:</h3>
    <ul>
        <?php
        foreach ($task as $t){
            echo "<li>" . htmlspecialchars($t) . "</li>";
        }
        ?>
    </ul>
    <a href="logout.php">logout</a>
</body>
</html>
