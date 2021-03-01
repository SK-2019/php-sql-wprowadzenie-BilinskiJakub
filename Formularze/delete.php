<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>data&czas</title>
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

echo("<h2> ID pracownika wybranego do usunięcia:".$_POST["id"]."</h2>"); 

require_once("/assets/connect.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "DELETE FROM pracownicy where id_pracownicy='".$_POST['id']."'";

echo "<h2>".$sql."</h2>";

if ($conn->query($sql) === TRUE) {
    echo "Record Deleted Successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

  
    $sql = ('SELECT * FROM pracownicy');
    echo("<h2>Pracownicy</h2>");
    echo("<h3>".$sql."</h3>");
        $result = $conn->query($sql);
            echo("<table border=1>");
            echo("<th>ID</th>");
            echo("<th>Imie</th>");
            echo("<th>Zarobki</th>");
            echo("<th>Data_Urodzenia</th>");
            echo("<th>Dział</th>");
            while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>");


                




            echo("</tr>");
        }

        echo("</table>");








?>    
</body>
</html>