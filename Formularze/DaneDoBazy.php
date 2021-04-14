<!DOCTYPE html>
<link rel="stylesheet" href="/Assets/style.css">
<a href="https://github.com/SK-2019/php-sql-wprowadzenie-BilinskiJakub"> GitHub </a>

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
            <a class="menu" href="/Flexbox/index.html">Flexbox</a>
        </div>
    
</div>
</html>

<h1>Dodaj Pracownika</h1>
        <form action="insert.php" method="POST">
            <input class="text 1" type="text" name="imie" placeholder="Imie">
            <input class="text 2"  type="text" name="dzial" placeholder="Dzial">
            <br><input class="text 3" type="text" name="zarobki" placeholder="Zarobki">
            <input class="text 4" type="date" name="data_">
            <div class="item g">
            <br><input class="przycisk" type="submit" value="Dodaj">
            </div>
            </form>
        </div>
        <div class="item c">
        <h1>Usuwanie Pracownika</h1>
        <?php
                require_once("Assets/connect.php");
                $result=$conn->query("Select * from pracownicy");
                echo("<table border=1>");
                    echo("<th>Id</th>");
                    echo("<th>Imie</th>");
                    echo("<th>Dzial</th>");
                    echo("<th>Zarobki</th>");
                    echo("<th>Data_urodzenia</th>");
                        while($row=$result->fetch_assoc()){
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td>");
                            echo("<td><form method=POST action=delete.php>");
                            echo("<input type='hidden' name='id' value=".$row['id_pracownicy'].">");
                            echo("<input type=submit value=X>");
                        echo("</form></td>");
                            echo("</tr>");}
                echo("</table>");
        ?>
    </div>
    </div>
</body>
</html>