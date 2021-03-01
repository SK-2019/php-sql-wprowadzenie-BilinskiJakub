<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funkcje</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
<?php

require_once("/Assets/connect.php");
echo("<h2>Suma zarobków wszystkich pracowników</h2>");
$result = $conn->query('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy');
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");

echo("<h2>Suma zarobków wszystkich kobiet</h2>");
$result = $conn->query('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy WHERE imie like "%a"');
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");

echo("<h2>Suma zarobów mężczyzn pracujących w działach 2 i 3</h2>");
$result = $conn->query('SELECT SUM(zarobki) as suma_zarobki FROM pracownicy WHERE (dzial=2 or dzial=3) AND imie not like "%a"');
    echo("<table border=1>");
    echo("<th>Suma_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["suma_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");


echo("<h2>średnia zarobków wszystkich mężczyzn</h2>");
$result = $conn->query('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy where imie not like "%a"');
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");

echo("<h2>Średnia zarobków pracowników z działu 4</h2>");
$result = $conn->query('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy WHERE (dzial=4)');
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");



echo("<h2>Średnia zarobków mężczyzn z działów 1 i 2</h2>");
$result = $conn->query('SELECT AVG(zarobki) as avg_zarobki FROM pracownicy WHERE (dzial=1 or dzial=2) AND imie not like "%a"');
    echo("<table border=1>");
    echo("<th>AVG_Zarobków</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["avg_zarobki"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");

echo("<h2>Ilu jest pracowników</h2>");
$result = $conn->query('SELECT COUNT(imie) as liczba_pracownikow FROM pracownicy ');
    echo("<table border=1>");
    echo("<th>Liczba_Pracowników</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["liczba_pracownikow"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");

echo("<h2>Ile Kobiet pracuje łącnznie w działach 1 i 3</h2>");
$result = $conn->query('SELECT COUNT(imie) as liczba_pracownikow FROM pracownicy WHERE (dzial=1 or dzial=3) and imie like "%a"');
    echo("<table border=1>");
    echo("<th>Liczba_Pracowników</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["liczba_pracownikow"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");











?>
</body>
</html>