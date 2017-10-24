<?php
require '../../../admin/conn.php';
$news = $_POST['news'];
$details = $_POST['details'];
$sql = "INSERT INTO thenews (news,details) VALUES ('$news,$details')";
if (mysqli_query($con,$sql))
    header('location:../news.php');
else
    echo 'ERROR!!';