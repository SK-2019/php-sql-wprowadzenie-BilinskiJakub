<html>
    <head>
        <link rel="stylesheet" href="/Assets/style.css">
    </head>
<div class="container">
    <div class="item colorRed">
        <h1 class="title">Jakub Biliński</h1>
    </div>
    <div class="nav">
        <?php include("../menu.php") ?>    
        </div>

        <div class="item a">
<?php
require_once("Assets/connect.php");
$sql ="Select * From biblAutor, biblTytul, biblAutor_biblTytul where biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id";
echo("<li>".$sql);
$result = $conn->query($sql);
echo("<table border=0>");
echo("<th>id</th>");
echo("<th>autor</th>");
echo("<th>tytul</th>");

            
while($row=$result->fetch_assoc()) {
    echo("<tr>");
        echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>
        <td>
        <form action='delete_bibl.php' method='POST'>
        <input type='number' name='id' value='".$row['id']."' hidden></br>
        <input type='submit' value='Usuń'>
        </form></td>");
    echo("</tr>");
}

echo("</table>");

?>
</div>
</div>
