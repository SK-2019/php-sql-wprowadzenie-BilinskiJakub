<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    Fryzjer-Klient   
    </title>
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
        
        echo("<h1>Salon Fryzjerski</h1>");

                $sql = ("SELECT * FROM fryzjer");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>fryzjer</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["fryzjer"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");

                
                $sql = ("SELECT * FROM klient");
                echo("<h2>".$sql."</h2>");
                $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id</th>");
                        echo("<th>klient</th>");

                        while($row=$result->fetch_assoc()) {
                                echo("<tr>");
                                    echo("<td>".$row["id"]."</td><td>".$row["klient"]."</td>");
                                echo("</tr>");
                            }
                        echo("</table>");


                        $sql = ("SELECT * FROM fryzjer, klient, fryzjer_klient where fryzjer_id = fryzjer.id and klient_id = klient.id");
                        echo("<h2>".$sql."</h2>");
                        $result=$conn->query($sql);
                                echo("<table border=1>");
                                echo("<th>fryzjer</th>");
                                echo("<th>klient</th>");
        
                                while($row=$result->fetch_assoc()) {
                                        echo("<tr>");
                                            echo("<td>".$row["fryzjer"]."</td><td>".$row["klient"]."</td>");
                                        echo("</tr>");
                                    }
                                echo("</table>");

        ?>