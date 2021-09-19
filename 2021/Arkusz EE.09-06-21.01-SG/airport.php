<!DOCTYPE html>
<html lang="pl">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=divice-width,initial-scale=1.0">
        <title>Odloty samolotów</title>
        <link rel="stylesheet" href="styl6.css">
    </head>
    <body>
      <header>
            <div class="h1">
                <h2>Odloty z lotniska</h2>
            </div>
            <div class="h2">
                <img src="zad6.png" alt="logotyp">
            </div>
      </header>
        <main>
         <h4>tabela odlotów</h4>
         <table>
             <tr>
                 <th>Lp.</th><th>Numer rejsu</th><th>Czas</th><th>Kierunek</th><th>Status</th>
             </tr>
             <!--Działanie skryptu  nr.1-->
             <?php
              require_once("airport.php");
              $db = mysqli_connect("localhost","root","","egzamin8");
              $sql= "SELECT id,nr_rejsu,czas, kierunek,status_lotu FROM odloty ORDER BY czas DESC ;";
              
              $result = mysqli_query($db,$sql);
              while($row=mysqli_fetch_row($result))
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
        
         <div class="s1">
             <a href="kw1.jpg">Pobierz obraz</a>

         </div>
         <div class="s3">
             Autor:90070408837
         </div>
         <div class="s2">
            <?php
             require_once('airport.php');
             if(isset($_COOKIE['ciastko']))
             {
                setcookie('ciastko',1,time()+(3600),"/");
                 echo "<p>"."Dzień dobry!Sprawdź regulamin naszej strony"."</p>";
             }else{
                 echo "<p>"."Miło nam,że nas znowu odwiedziłeś"."</p>";
             }
             ?>
             
         </div>
         
    
    </body>
</html>