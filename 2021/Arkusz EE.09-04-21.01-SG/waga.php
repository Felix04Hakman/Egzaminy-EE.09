<!DOCTYPE html>
<html lang="pl">
    <head>
<meta charset='utf-8'>
<meta name="viewport" content="width=divice-width,initial-scale=1.0">
<link rel="stylesheet" href="styl4.css">
    </head>
    <body>
    <div id="baner">
        <h2>Oblicz wskaźnik BMI</h2>
    </div>    
    <div id="logo">
        <img src="wzor.png" alt="liczymy BMI">
    </div>
    <div id="lewy">
        <img src="rys1.png" alt="zrzuć kalorie">
    </div>
    <div id="prawy">
        <h1>Podaj dane</h1>
        <form action="waga.php" method="POST">
            Waga<input type="number" name="waga">
            Wzrost[cm]<input type="number" name="wzrost">
            <input type="submit" value="Licz BMI i zapisz wynik">
        </form>
           <!--Działanie skryptu nr.1-->
           <?php
           require_once('waga.php');
              $db = mysqli_connect("localhost","root","","egzamin3");
              $waga = $_POST['waga'];
              $wzrost = $_POST['wzrost'];
              $sql = "INSERT INTO wynik (bmi_id,data_pomiaru,wynik) VALUES ('1','2020-05-20','15')";
              mysqli_close($db);
           ?>
    </div>
    <div id="main">
        <table>
            <tr>
                <th>Lp.</th><th>Interpretacja</th><th>Zaczyna się od...</th>
            </tr>
           <!--Działanianie  skryptu  nr. 2-->
        </table>
    </div>
    <div id="footer">
        <p>Autor:90070408837 <a href="kw2.jpg" >Wynik działania kwerendy 2</a></p>
    </div>
    </body>
</html>