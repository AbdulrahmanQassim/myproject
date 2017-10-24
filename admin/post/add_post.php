<?php
require '../conn.php';
$title = $_POST['title'];
$post = $_POST['post'];
$section = $_POST['section'];
$sql = "INSERT INTO ftab (title,post,section) VALUES ('$title','$post','$section')";
if (mysqli_query($con,$sql))
    header('location:../blog.php');
else
    echo 'ERROR!!';