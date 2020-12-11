<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-BilinskiJakub"> GitHub </a>

   <div class="nav">
    <a class="nav_link" href="index.php">Strona Główna</a> 
    <form action="strona.php" method="POST">
    <h3>Dodaj :</h3>
   <input type="text" name="imie" placeholder="Imie">
   <br><input type="text" name="dzial" placeholder="Dzial">
   <br><input type="text" name="zarobki" placeholder="Zarobki">
   <br><input type="date" name="data_urodzenia">
   <input type="submit" value="Dodaj">
   </form> 
</div>
</html>

<h3>Usuń :</h3>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="usun">
</form>
<?php


require("connect.php");
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
            echo("<th>Usuń Pracownika</th>");
            while($row=$result->fetch_assoc()){ 
            echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td>
                <td>
                    <form action='delete.php' method='POST'>
                        <input type='hidden' name='id' value='".$row['id_pracownicy']."'>
                        <input type='submit' value='Usuń'>
                    </form>
                    </td>
                    ");


            echo("</tr>");
        }

        echo("</table>");


?>