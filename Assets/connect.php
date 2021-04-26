<?php

$hostname = $_SERVER['HTTP_HOST'];
if ($hostname == 'localhost') {
     require_once ("config.php");
 }

$servername = $_SERVER['servername'];
$username = $_SERVER['username'];
$password = $_SERVER['password'];
$dbname = $_SERVER['dbname']; 


$conn = new mysqli($_SERVER['servername'],$_SERVER['username'],$_SERVER['password'],$_SERVER['dbname']);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>