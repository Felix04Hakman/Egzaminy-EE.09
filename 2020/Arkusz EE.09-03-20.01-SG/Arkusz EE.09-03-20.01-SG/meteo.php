<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Prognoza pogody Poznań</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <div id="blewy">
            <p>maj,2019 r.</p>
        </div>
        <div id="bsrodkowy">
            <h1>Prognoza dla Poznania</h1>
        </div>
        <div id="bprawy">
            <img src="logo.png" alt="prognoza">
        </div>
    </header>

    <div id="lewy">
        <a href="kwerenda.txt">Kwerendy</a>
    </div>
    <div id="prawy">
        <img src="obraz.jpg" alt="Polska, Poznań"> 
    </div>
<main>
    <table>
        <tr>
            <th id="id">Lp.</th>
            <th id="noc" >N0C-TEMPERATURA</th>
            <th id="dzien">DZIEŃ-TEMPERATURA</th>
            <th id="opad">OPADY[mm/h]</th>
            <th id="hPa">CIŚNIENIE [hPa]</th>
        </tr>
         <?php 

         require_once('meteo.php');
         $db = mysqli_connect ("localhost","root","","prognoza");
         $sql ="SELECT id ,temperatura_noc,temperatura_dzien,opady,cisnienie FROM pogoda where miasta_id >'1';";
         $result = mysqli_query($db,$sql);
         while($row= mysqli_fetch_row($result))
         {
             echo "<tr>";
             echo "<td>".$row[0]."</td>";
             echo "<td>".$row[1]."</td>";
             echo "<td>".$row[2]."</td>";
             echo "<td>".$row[3]."</td>";
             echo "<td>".$row[4]."</td>";
             echo "</tr>";

         }
         mysqli_close($db);
         ?>
    </table>
</main>
<footer>
<p>Stronę wykonał:90070408837</p>
</footer>
<?php

$db =mysqli_connect('localhost','root','','prognoza');

?> 
</body>
</html>