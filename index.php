<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    index
    </title>
    <link rel="stylesheet" href="/Assets/style.css">
</head>
<body>

<div class="sidenav">
         <?php include("menu.php") ?>
        </div>
    <div class="container">
        <?php include("/Assets/header.php") ?>

</div>

<?php

require_once("/Assets/connect.php");
$sql = 'SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and imie not like "%a"';
    echo("<h3>".$sql."</h3>");
    $conn = new mysqli("mysql-bilinski-jakub.alwaysdata.net","217212","haslo_testowe","bilinski-jakub_test");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
        }

    echo("</table>");


$sql = 'SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org';
    echo("<h3>".$sql."</h3>");
    $conn = new mysqli("mysql-bilinski-jakub.alwaysdata.net","217212","haslo_testowe","bilinski-jakub_test");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>");  
            
            echo("</tr>");
        }

    echo("</table>");


$sql = 'SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and (dzial=2 or dzial=1)';
    echo("<h3>".$sql."</h3>");
    $conn = new mysqli("mysql-bilinski-jakub.alwaysdata.net","217212","haslo_testowe","bilinski-jakub_test");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
        }

    echo("</table>");


$sql = 'SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and dzial = 3';
    echo("<h3>".$sql."</h3>");
    $conn = new mysqli("mysql-bilinski-jakub.alwaysdata.net","217212","haslo_testowe","bilinski-jakub_test");
    $result=$conn->query($sql);
        echo("<table border=1>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
        }

    echo("</table>");


$sql = 'SELECT imie, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE dzial = id_org and zarobki>=35';
    echo("<h3>".$sql."</h3>");
    $conn = new mysqli("mysql-bilinski-jakub.alwaysdata.net","217212","haslo_testowe","bilinski-jakub_test");
    $result=$conn->query($sql);
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Data_Urodzenia</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
        }

    echo("</table>");

    echo("</table>");

echo("<h2>ZADANIE 6: SELECT avg(zarobki) as srednia_zarobkow FROM pracownicy, organizacja WHERE dzial = id_org</h2>");
$result = $conn->query('SELECT avg(zarobki) as az FROM pracownicy, organizacja WHERE dzial = id_org'); 
    echo("<table border=1>");
    echo("<th>Średnia_Zarobków</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["az"]."</td>");
            echo("</tr>");
        }

    echo("</table>");

    echo("</table>");
   
    echo("<h2>ZADANIE 7: SELECT sum(zarobki) as suma_zarobki FROM pracownicy, organizacja WHERE (dzial = id_org) and (zarobki>45)</h2>");
    $result = $conn->query('SELECT sum(zarobki) as sz FROM pracownicy, organizacja WHERE (dzial = id_org) and (zarobki>45)'); 
        echo("<table border=1>");
        echo("<th>Suma_Zarobków</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["sz"]."</td>");
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
   
    echo("<h2>ZADANIE 8: SELECT count(imie) as liczba_kobiet FROM pracownicy, organizacja WHERE (dzial = id_org and imie like 'a%')</h2>");
    $result = $conn->query('SELECT count(imie) as lk FROM pracownicy, organizacja WHERE (dzial = id_org and imie like "a%")'); 
        echo("<table border=1>");
        echo("<th>Liczba_Kobiet</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["lk"]."</td>");
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
    
    echo("<h2>ZADANIE 9: SELECT count(imie) as liczba_mężczyzn FROM pracownicy, organizacja WHERE (dzial = id_org and imie not like 'a%')</h2>");
    $result = $conn->query('SELECT count(imie) as lm FROM pracownicy, organizacja WHERE (dzial = id_org and imie not like "a%")'); 
        echo("<table border=1>");
        echo("<th>Liczba_Mężczyzn</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["lm"]."</td>");
                echo("</tr>");
            }

        echo("</table>");

        echo("</table>");
  
    echo("<h2>ZADANIE 10: SELECT max(zarobki) as max FROM pracownicy, organizacja WHERE (dzial = id_org)</h2>");
    $result = $conn->query('SELECT max(zarobki) as max FROM pracownicy, organizacja WHERE (dzial = id_org)'); 
        echo("<table border=1>");
        echo("<th>Max</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["max"]."</td>");
                echo("</tr>");
            }

        echo("</table>");









?>
  </div>  
</body>
</html>