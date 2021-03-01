<?php


$conn = new mysqli('mysql-bilinski-jakub.alwaysdata.net','217212','haslo_testowe','bilinski-jakub_test');

if ($conn->connect_error) {
  die("Connection failed: ".mysql_connect_error());
}
?>