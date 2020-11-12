<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patryk Jojko</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class=nav>
    <a href="pracownicy.php">Pracownicy</a>
    <a href="organizacja.php">Pracownicy i Organizacja</a>
    <a href="funkcje.php">Funkcje Agrygujące</a>
    <a href="dataczas.php">Data i Czas</a>
    <a href="https://github.com/SK-2019/php-sql-wprowadzenie-BilinskiJakub">Github</a>


</div>
    
<?php

require("connect.php");
echo("<h2>Wiek poszczególnych pracowników</h2>");
    $result = $conn->query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Wiek</th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td>");
                echo("<tr>");
                
            }
            echo("</table>");

require("connect.php");
echo("<h2>Wiek poszczególnych pracowników z działu serwis</h2>");
    $result = $conn->query('SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND dzial=1');
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Data Urodzenia</th>");
        echo("<th>Wiek<th>");
            while($row=$result->fetch_assoc()){
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td><td>".$row["nazwa_dzial"]);
                echo("<tr>");
                
            }
            echo("</table>");





?>

</body>
</html>