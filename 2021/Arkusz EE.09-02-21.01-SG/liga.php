<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=divice-width, initial-scale=1.0">
<title>Piłka nożna</title>
<link rel="stylesheet" href="styl2.css">
</head>
<body>
<header id="banner">
<h3>Reprezentacja polski w piłce  nożnej</h3>
<img id="rep" src="obraz1.jpg" alt="reprezentacja">
</header>
<div id="lewy">
<form name="formularz" action="liga.php" method="POST">
<select name= "zawodnicy">
    <option  value="1">Bramkarze</option>
    <option   value="2">Obrońcy</option>
    <option   value ="3">Pomocnicy</option>
    <option  value ="4">Napastnicy</option>
</select>
<input type="submit" value="Zobacz"><br/>
</form>
<img src="zad2.png" alt="piłka">
<p>Autor:90070408837</p>
</div>
<div id="prawy">
    
    <?php
    
      if (isset($_POST['zawodnicy']))
      {
        require_once('liga.php');
          $db = new mysqli("localhost","root","","egzamin1");
          $conn = $_POST['zawodnicy'];
          $sql =  "SELECT imie,nazwisko FROM zawodnik WHERE pozycja_id= '".$conn."'";
         $result= mysqli_query($db,$sql);
          while ($linia = mysqli_fetch_row($result))
          {
              echo "<ol>";
              echo "<li>"."<p>" .$linia[0]." ".$linia[1]."</p>"."</li>";
              echo "</ol>";
          }
        mysqli_close($db);
      }
    ?>
   
</div>
<main>
<h3>Liga mistrzów</h3>
    </main>
<section id="ligii">
<?php
 require_once('liga.php');
 $db2 = mysqli_connect("localhost","root","","egzamin1");
 $sql2 = "SELECT `zespol`,`punkty`,`grupa` FROM `liga` ORDER BY `punkty` ASC" ;
 $conn2 = mysqli_query($db2,$sql2);
 while($linia=mysqli_fetch_row($conn2))
 {    
     echo '<div id="ligaa">';
      echo'<h2>'.$linia[0].'</h2>';
      echo'<h1>'.$linia[1].'</h2>'; 
      echo'<p>'.'grupa'.$linia[2].'</p>';
      echo'</div>';
 }
mysqli_close($db2);
?>
</section>
</body>
</html>