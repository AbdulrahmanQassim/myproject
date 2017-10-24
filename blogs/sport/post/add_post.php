<?php
require '../../../conn.php';
$sport = $_POST['sport'];
$details = $_POST['details'];
//$section = $_POST['section'];
$sql = "INSERT INTO sportnews (sport,details) VALUES ('$sport,$details')";
if (mysqli_query($con,$sql))
    header('location:../blog.php');
else
    echo 'ERROR!!';