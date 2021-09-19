<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Pogotowie Ratunkowe</title>
        <link rel="stylesheet" href="styl5.css">
    </head>
    <body>

<?php
 if (isset($_POST['zgloszenie']) && ($_POST['submit']))
{
    
require_once('zgloszenie.php');
$dane = $_POST['zgloszenie'];
$czas=date_create("Y-m-d");
$db2 = new mysqli("localhost","root","","ee09");
$sql2= ("INSERT INTO zgloszenia (id,ratownicy_id,dyspozytorzy_id,adres,pilne,czas_zgloszenia) VALUES ('id','$dane','0','$czas'");
if($result= mysqli_query($db,$sql2))

mysqli_close($db2);
}

    ?> 
    </body>
    </html>