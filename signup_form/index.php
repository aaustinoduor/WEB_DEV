<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <DIV id ="form">
<h1 id="heading">SIGNUP FORM<h1>
    <form name="form" action="signup.php" method="POST">
        <input type="text" id="user" name="user" placeholder="Enter Username" required><br><br>
        <input type="email" id="email" name="email" placeholder="Enter Email" required><br><br>
        <input type="password" id="pass" name="pass" placeholder="Create Password" required><br><br>
        <input type="password" id="cpass" name="cpass" placeholder="Retype Password" required><br><br>
        <input type="submit" id="btn" value="SignUp" name="submit"/>
</form>
</DIV>
<script src="">
    </body>
</html>
