<!DOCTYPE html>
<html lang="pl">
    <head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="styl4.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wycieczki krajoznawcze</title>
    </head>
    <body>
        <?php
        $db = new mysqli('localhost','root','','egzamin3');
        $db ->set_charset("utf-8_bin");
        ?>
 <header>
    <h1>WITAM W BIURZE PODRÓŻY</h1>
 </header>
 <main>
 <div id="top"><h3>ARCHIWUM WYCIECZEK</h3>
<?php
$sql="SELECT id, cel,cena FROM `wycieczki` WHERE dostepna = 0";
$wynik = $db -> query($sql);
while($wiersz = $wynik->fetch_assoc()){
    $id= $wiersz['id'];
    $cel = $wiersz ['cel'];
    $cena = $wiersz ['cena'];
    echo "<p>";
    echo "$id,$cel, cena: $cena";
    echo "</p>";
}
?>
</div>

 <div id="lewy">
  <h3>NAJTANIEJ...</h3>
  <table>
      
    <tr>
        <td>Włochy</td>
        <td>1200 zł</td>
    </tr>
    <tr>
        <td>Francja</td>
        <td>1200 zł</td>
    </tr>
    <tr>
        <td>Hiszpania</td>
        <td>1400 zł</td>
    </tr>
  </table>
 </div>
 <div id="srodkowy">
<h3>TU BYLIŚMY</h3>
<?php
 $sql="SELECT nazwaPliku, podpis FROM `zdjecia`";
 $wynik= $db->query($sql);
 while($wiersz = $wynik->fetch_assoc()){
     $nazwa = $wiersz ['nazwaPliku'];
     $podpis = $wiersz['podpis'];
     echo '<img src="'.$nazwa.'"alt="'.$podpis.'">';
     //lub
     //echo "<img src=\"$nazwa\" alt=\"$podpis\">";


 }
?>
 </div>
 <div id="prawy">
     <h3>SKONTAKTUJ SIĘ
     </h3>
     <a href="wycieczki@wycieczki.pl">napisz do nas</a>
     <p>telefon:555666777</p>
 </div>
</main>
 <footer>
     <p>Stronę wykonał 90070408837</p>
 </footer>
</html>