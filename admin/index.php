
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stl.css">
    <title>Login</title>


</head>
<style>
    body{
        font-family: 'Poiret One', cursive;
    }
    button {
        font-family: 'Poiret One', cursive;
        font-size: 25px;
        margin-left: auto;
        margin-right: auto;
        background-color: burlywood;
        color: maroon;
        padding:10px;
        border: hidden;
        cursor: pointer;
        width: 75%;
    }

    button:hover {
        opacity: 0.7;
    }
</style>

<body>

<?php
session_start();
if (isset($_SESSION['errors'])){
    echo $_SESSION['errors'];
    unset($_SESSION['errors']);
}
?>


<div class="body"></div>
<div class="grad"></div>
<div class="header">
    <div>Just<span>ForAdmin</span></div>
</div>
<br>
<form action= "post/login_post.php" method="post">
    <div class="login">
        <input type="text" placeholder="username" name="username" required> <br>
        <input type="password" placeholder="password" name="password" required>
        <br>
        <br>
        <button>Login</button>
    </div>
</form>


</body>

</html>