<?php
require '../conn.php';
$id = $_GET['id'];
$sql = "DELETE FROM ftab WHERE id = '$id'";
if (mysqli_query($con,$sql))
    header('location:../blog.php');
else
    echo 'ERROR!!';