<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
X
    <?php
    echo "<script>alert('you have been logedout.');</script>";
    session_start();
    session_destroy();
    header("location: login.php")
    ?>

</body>
</html>