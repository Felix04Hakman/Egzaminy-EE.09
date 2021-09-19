<!DOCTYPE html>
<html lang="pl">
   <head>
   <meta charset="utf-8">
   <title>Klub wędkowania</title>
   <link rel="stylesheet" href="styl2.css">
   </head>
   <body>
    <header>
        <div id="banner">
          <h2>Wędkuj z nami!</h2>
        </div>
    </header>
    <main>
        <div id="lewy">
            <img src="ryba2.jpg" alt="Szczupak">
        </div>
        <div id="prawy">
            <h3>Ryby spokojniego żeru(białe)</h3>
            <?php
   $db =new mysqli('localhost','root','','wedkarstwo');
 $pytanie="SELECT`id`,`nazwa`,`wystepowanie` FROM `ryby`WHERE styl_zycia =2";  
    $wynik = mysqli_query($db, $pytanie);
    while ($wiersz=mysqli_fetch_row($wynik)){
     echo "<li> ".$wiersz[0].", nazwa:,".$wiersz[1].",  występowanie:".$wiersz[2]."</li>";
    } 
    mysqli_close($db);               
  ?>

            <ol>
                <li><a href="https://wedkuje.pl/">Odwiedź tagże</a></li>
                <li><a href="http://www.pzw.org.pl" target="_blank">Polski Związek Wędkarski</a></li>
            </ol>


        </div>
    </main>
    <footer>
               <p>Stronę wykonał:90070408837</p>
    </footer>
   </body>

</html>