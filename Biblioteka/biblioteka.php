<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>biblioteka</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="item colorRed">
        Jakub Biliński 
    </div>
    <div class="nav">
         <a class="link a" href="https://github.com/SK-2019/php-sql-wprowadzenie-BilinskiJakub" >GITHUB</a>
            <a class="link b" href="/index.php">Index</a>
            <a class="link c" href="/pracownicy.php">Pracownicy</a>
            <a class="link d" href="/organizacja.php">Pracownicy i Organizacja</a>
            <a class="link e" href="/funkcje.php">Funkcje agregujące</a>
            <a class="link f" href="/dataczas.php">Data i Czas</a>
            <a class="link g" href="/formularz.html">Formularz</a>
            <a class="link h" href="/DaneDoBazy.php">DaneDoBazy</a>
            <a class="link i" href="/biblioteka/ksiazki.php">Książki</a>
        </div>


</div>
<div class="item colorGreen">
<?php

require_once("Assets/connect.php");
$sql = ('SELECT * FROM bibliotekaAutor');
echo("<h2>Autorzy</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Autor</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row["id_autor"]."</td><td>".$row["Autor"]."</td>");
        echo("</tr>");
    

    }

    echo("</table>");


$sql = ('SELECT * FROM bibliotekaTytuł');
echo("<h2>Tytuły</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Tytuł</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row["id_tytuł"]."</td><td>".$row["Tytuł"]."</td>");
        echo("</tr>");
    

    }

    echo("</table>");


$sql = ('SELECT * FROM `bibliotekaAT`, `bibliotekaAutor`, `bibliotekaTytuł` WHERE id_autor = bibliotekaAutor_ID AND id_tytuł = bibliotekaTytul_ID');
echo("<h2>Dane w Bibliotece</h2>");
echo("<h3>".$sql."</h3>");
    $result = $conn->query($sql);
        echo("<table border=1>");
        echo("<th>id</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytuł</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]);
        echo("</tr>");
    

    }

    echo("</table>");


?>
 </div>   
</body>
</html>