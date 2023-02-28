<?php
session_start();
if (!isset($_SESSION['uname']) && !isset($_SESSION['pass'])) {
    echo "<script> location.href='task7(a).php' </script>";
}
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    echo "<script> location.href='task7(a).php' </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <ul>
            <li><a href="/task1.php">Task1</a></li>
            <li><a href="/task2.php">Task2</a></li>
            <li><a href="/task3.php">Task3</a></li>
            <li><a href="/task4.php">Task4</a></li>
            <li><a href="/task5.php">Task5</a></li>
            <li><a href="/task6.php">Task6</a></li>
            <input type="submit" name="logout" value="Logout">
        </ul>
    </form>
</body>
</html>