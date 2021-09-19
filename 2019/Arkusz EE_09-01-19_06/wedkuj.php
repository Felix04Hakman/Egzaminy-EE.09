<!DOCTYPE HTML>

<html lang="pl">
<meta charset="utf-8"/> 
<title>Wendkujemy</title>
<head>
<link rel="stylesheet" href="styl_1.css"/> 
      
</head>
<body>
<div id="topbar">
 <h1>Portal dla wędkarzy</h1> 

</div>
<div id="aside">
  <h2>Ryby drapieżne naszych wód</h2>
  <ul>
  <?php
   $db =new mysqli('localhost','root','','wendkowanie');
 
  $pytanie="SELECT `nazwa`, `wystepowanie` FROM `ryby` WHERE styl_zycia = 1";   
    $wynik = mysqli_query($db, $pytanie);
    while ($wiersz=mysqli_fetch_row($wynik)){
     echo "<li> ".$wiersz[0].",  występowanie:".$wiersz[1]."</li>";
    } 
    mysqli_close($db);               
  ?>
  </ul>

  </div>
<div id="main">
<img src="ryba1.jpg" alt="Sum" /> </br>
<a href="kwerenda.txt" target="_blank">Pobierz kwerendy</a>
</div>
<div id="footer">
 
  <p>Stronę wykonał:90070408837</p>

</div> 
</body>


</html>