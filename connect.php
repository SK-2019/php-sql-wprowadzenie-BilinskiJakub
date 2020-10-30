<?php

$servername = "mysql-bilinski-jakub.alwaysdata.net";
$username = "217212";
$password = "haslo_testowe";
$dbanme = "bilinski-jakub_test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
