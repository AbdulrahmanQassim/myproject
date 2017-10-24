<?php
require '../conn.php';
$id = $_GET['id'];
$title = $_POST['title'];
$post = $_POST['post'];
$sql = "UPDATE ftab SET title = '$title' , post = '$post' WHERE id = '$id'";
if (mysqli_query($con,$sql))
    header('location:../blog.php');
else
    echo 'ERROR!!';