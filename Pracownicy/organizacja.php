<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizacja</title>
    <link rel="stylesheet" href="/Assets/style.css">
</head>
<body>
<div class="sidenav">
         <?php include("../menu.php") ?>
        </div>
    <div class="container">
        <?php include("../Assets/header.php") ?>

</div>
<?php
 
require_once("../Assets/connect.php");
echo("<h2>Pracownicy z nazwą działów</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");

echo("<h2>Pracownicy tylko z działu 1 i 4</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND (dzial=1 or dzial=4)');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");

echo("<h2>Lista kobiet z nazwami działów</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie like "%a"');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");
    

echo("<h2>Lista mężczyzn z nazwami działów</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie not like "%a"');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
        while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
    echo("</table>");

echo("<h2>Pracownicy posortowani malejąco</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org order by imie desc');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         } 
    echo("</table>");

echo("<h2>Pracownicy z działu 3 posortowani rosnąco po imieniu</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND dzial=3 order by imie asc');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
    
         }
         echo("</table>");      

echo("<h2>Kobiety posortowane rosnąco po imieniu</h2>");
$result = $conn->query('SELECT imie, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND imie like "%a" order by imie asc');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
        
    echo("</table>");

echo("<h2>Kobiety z działu 1 i 3 posortowane rosnąco po zarobkach</h2>");
$result = $conn->query('SELECT imie, zarobki, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org AND (dzial=1 or dzial=3) AND imie like "%a" order by zarobki asc');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Zarobki</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }

    echo("</table>");

echo("<h2>Pracownicy z nazwą działów</h2>");
$result = $conn->query('SELECT imie, zarobki, nazwa_dzial FROM `pracownicy`, `organizacja` WHERE dzial = id_org and imie not like "%a" order by dzial asc, zarobki asc ');
    echo("<table border=1>");
    echo("<th>Imie</th>");
    echo("<th>Imie</th>");
    echo("<th>Nazwa_Działu</th>");
         while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

            echo("</tr>");
         }
         echo("</table>");




    
    

?>
    
</body>
</html>