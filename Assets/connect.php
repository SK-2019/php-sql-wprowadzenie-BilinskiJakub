<?php

$hostname = $_SERVER['HTTP_HOST'];
if ($hostname === '127.0.0.1'){
    require_once("config.php");}
    
$conn = new mysqli('mysql-bilinski-jakub.alwaysdata.net','217212','haslo_testowe','bilinski-jakub_test');

if ($conn->connect_error) {
  die("Connection failed: ".mysql_connect_error());
}
?>