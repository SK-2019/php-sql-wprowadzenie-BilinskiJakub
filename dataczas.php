<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jakub Bilinski</title>
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


echo("<h2>Zad1</h2>");
 $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE (dzial = id_org)";
    echo("<h3>".$sql."</h3>");
    $conn = new mysqli("mysql-bilinski-jakub.alwaysdata.net","217212","haslo_testowe","bilinski-jakub_test");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>imie</th>");
        echo("<th>wiek</th>");
            while($row=$result->fetch_assoc()) {
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
        echo("</table>");


echo("<h2>Zad2</h2>");
 $sql = "SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS wiek FROM pracownicy, organizacja WHERE nazwa_dzial=serwis";
    echo("<h3>".$sql."</h3>");
    $conn = new mysqli("mysql-bilinski-jakub.alwaysdata.net","217212","haslo_testowe","bilinski-jakub_test");
    $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>imie</th>");
                echo("<th>wiek</th>");
                    while($row=$result->fetch_assoc()) {
                        echo("<tr>");
                            echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td><td>".$row["nazwa_dzial"]."</td>");
                        echo("</tr>");
                    }
                echo("</table>");


echo("<h2>Zad3</h2>");
 $sql = ("SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as SumaLat from pracownicy");

    echo("<h3>".$sql."</h3>");
    $conn = new mysqli("mysql-bilinski-jakub.alwaysdata.net","217212","haslo_testowe","bilinski-jakub_test");
    $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>nazwa_dzial</th>");
                echo("<th>imie</th>");
                echo("<th>wiek</th>");
                    while($row=$result->fetch_assoc()) {
                        echo("<tr>");
                            echo("<td>".$row["imie"]."</td><td>".$row["wiek"]."</td><td>".$row["nazwa_dzial"]."</td>");
                        echo("</tr>");
                    }
                echo("</table>");

require("connect.php");
$sql = 'SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) as Suma from pracownicy,organizacja WHERE id_org=dzial and nazwa_dzial="handel"';
echo("<h1>$sql</h1>");
$result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Data Urodzenia</th>");
        echo("<th>Wiek<th>");
            while($row=$result->fetch_assoc()){
             echo("<tr>");
                echo("<td>".$row["avg_age"]."</td><td>".$row["nazwa_dzial"]."</td>");
             echo("<tr>");
                        
                    }
                echo("</table>");
            
?>

</body>
</html>