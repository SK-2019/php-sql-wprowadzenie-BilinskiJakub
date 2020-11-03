<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<?php
    echo("<h1>Jakub Biliński</h1>");
    echo("<h2>2Ti</h2>");
    
   echo("<h1> Zadanie nr 1  |  SELECT * FROM pracownicy </h1>");

    require_once('connect.php');
    $result = $conn->query('SELECT * FROM pracownicy');
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        echo("<h1> Zadanie nr 2  |  SELECT * FROM pracownicy where imie like '%a' </h1>");

        $result = $conn->query('SELECT * FROM pracownicy where imie like "%a"'); 
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
        
        
        echo("<h1> Zadanie nr 3  |  SELECT * FROM pracownicy where (dzial=1 or dzial=3) </h1>");

        $result = $conn->query('SELECT * FROM pracownicy where (dzial=1 or dzial=3)'); 
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
        

        echo("<h1> Zadanie nr 4  |  SELECT * FROM pracownicy where imie not like '%a' and zarobki>15 </h1>");

        $result = $conn->query('SELECT * FROM pracownicy where imie not like "%a" and zarobki>15'); 
            echo("<table border=1>");
            echo("<th>Id</th>"); 
            echo("<th>Imie</th>");
            echo("<th>Dzial</th>");
            echo("<th>Zarobki</th>");
                while($row=$result->fetch_assoc()){ 
                    echo("<tr>");
                        echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 
    
                    echo("</tr>");
                }
    
            echo("</table>");
            

            echo("<h1> Zadanie nr 5  |  SELECT * FROM pracownicy where zarobki between 10 and 20 and imie like '%a'</h1>");

            $result = $conn->query('SELECT * FROM pracownicy where zarobki between 10 and 20 and imie like "%a"'); 
                echo("<table border=1>");
                echo("<th>Id</th>"); 
                echo("<th>Imie</th>");
                echo("<th>Dzial</th>");
                echo("<th>Zarobki</th>");
                    while($row=$result->fetch_assoc()){ 
                        echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 
        
                        echo("</tr>");
                    }
        
                echo("</table>");
?>

</body>
</html>