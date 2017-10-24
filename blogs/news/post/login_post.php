<?php
session_start();
require '../conn.php';
$username = $_POST['username'];
$password =  $_POST['password'];
$username = str_replace('(','',$username);
$password = str_replace('drop','',$password);

$sql = "SELECT * FROM ftab WHERE title = '$username' AND post = '$password'";
$result = mysqli_query($con,$sql);
if ($row = mysqli_fetch_assoc($result))
{
    $_SESSION['login'] = $row['username'];
    header('location:../main.php');
    die();
}
else{

    $_SESSION['errors']='have invalid username or password error';
    header('location:../index.php');
    echo 'error';
}



