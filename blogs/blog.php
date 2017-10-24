<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid darkblue;
    }
    tr:hover{background-color:aquamarine;color: black}
</style>

<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Tastelessly</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<?php //require '..admin/conn.php' ?>



<?php
//require 'parts/header.php'; ?>

<?php require 'parts/sidebar.php' ?>
<div id="logo">
    <h1><a href="#">ExperimentalTestPage</a></h1>
    <h2>By Abdulrahman Qassim</h2>
</div>

<hr />
<div id="page">
    <div class="content">
        <div id="main">
            <div id="example" class="right-box">
                <h2 style="color: white; background-color: #212B35 ; margin-left: 10px; margin-right: 82%; padding:10px "> <a href="news/news.php">news</a></h2>
                <h2 style="color: white; background-color: #212B35 ; margin-left: 10px; margin-right: 82%; padding:10px "> <a href="admin.php">admin</a></h2>
                <h2 style="color: white; background-color: #212B35 ; margin-left: 10px; margin-right: 82%; padding:10px "> <a href="sport/sport.php">sport</a></h2>


            </div>
        </div>
    </div>
    <a href="../admin/main.php" class="button button2">Back to main</a>
</div>
<?php
require 'parts/footer.php'; ?>
</body>
</html>
