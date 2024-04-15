<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link href="">
    <link rel="stylesheet" href="">
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