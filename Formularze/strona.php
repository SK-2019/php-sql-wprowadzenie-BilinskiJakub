<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Assets/style.css">
</head>
<body>
<div class="nav">
         <a class="menu" href="https://github.com/SK-2019/php-sql-wprowadzenie-BilinskiJakub" >GITHUB</a>
            <a class="menu" href="index.php">Index</a>
            <a class="menu" href="/Pracownicy/pracownicy.php">Pracownicy</a>
            <a class="menu" href="/Pracownicy/organizacja.php">Pracownicy i Organizacja</a>
            <a class="menu" href="/Pracownicy/funkcje.php">Funkcje agregujące</a>
            <a class="menu" href="/Pracownicy/dataczas.php">Data i Czas</a>
            <a class="menu" href="/Formularze/formularz.html">Formularz</a>
            <a class="menu" href="/Formularze/DaneDoBazy.php">DaneDoBazy</a>
            <a class="menu" href="/biblioteka/ksiazki.php">Książki</a>
        </div>


<div class="formularz">
<?php
        echo("Imie:".$_POST['imie']."<br>");
        echo("Dzial:".$_POST['dzial']."<br>");
        echo("Zarobki:".$_POST['zarobki']."<br>");
        echo("Data:".$_POST['data_']); 

    ?>
    </div>
</body>
</html>