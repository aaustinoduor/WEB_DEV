<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "austindb";
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn->connect_error){
    die("connection unsuccessfull". $conn->connect_error);
}
echo "";

?>