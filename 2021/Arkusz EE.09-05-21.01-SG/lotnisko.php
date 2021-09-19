<!DOCTYPE HTML>
<html lang="pl">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=divice-width, initial-scale=1.0">
       <link rel="stylesheet" href="style5.css">
       <title>Port Lotniczy</title>
    </head>
    <body>
        <header>
            <div class="h1">
                <img src="zad5.png" alt="logo lotnisko">
            </div>
            <div class="h2">
                <h1>Przyloty</h1>
            </div>
            <div class="h3">
                <h3>Przydatne linki</h3>
                <a href="kwerendy.txt">Pobierz...</a>
            </div>
        </header>
        <main>
         <table>
             <tr>
                 <th>Czas</th>
                 <th>Kierunek</th>
                 <th>Numer Rejsu</th>
                 <th>Status</th>
             </tr>
             <!--Działanie  skryptu nr 1-->
             <?php
              require_once('lotnisko.php');
              $db =mysqli_connect("localhost","root","","egzamin7");
              $sql = ("SELECT czas,kierunek,nr_rejsu,status_lotu FROM przyloty ORDER BY czas;");
              $result = mysqli_query($db,$sql);
              while($row=mysqli_fetch_row($result))
              {
               echo "<tr>";
               echo "<td>".$row[0]."</td>";
               echo "<td>".$row[1]."</td>";
               echo "<td>".$row[2]."</td>";
               echo "<td>".$row[3]."</td>";
               echo "</tr>";
              }
              mysqli_close($db);
             ?>
         </table>
        </main>
        <footer">
            <div id="s1">
            <!--Działanie skryptu  nr 2-->
            <?php
             require_once('lotnisko.php');
             if(isset($_COOKIE['ciastko']))
             {
                setcookie('ciastko',1,time()+(7200),"/");
                 echo "<p>"."Dzień dobry!Strona lotniska używa ciasteczek"."</p>";
             }else{
                 echo "<p>"."Witaj ponownie na stronie lotniska"."</p>";
             }
             ?>
            </div>
            <div id="s2">
                <p>Autor:90070408837</p>
            </div>
        </footer>
    </body>
</html>