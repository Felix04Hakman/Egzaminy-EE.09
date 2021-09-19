<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="device-width,initial-scale=1.0"/>
        <title>Twoje BMI</title>
        <link rel="stylesheet" href="styl3.css"/>
    </head>
    <body>

    <div class="logo">
        <img src="wzor.png">
    </div>
    <div class="baner">
        <h1>Oblicz swoje BMI</h1>
    </div>
         <div id="glowny">
         <table>
            <tr>
                <th>Interpretacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartość maksymalna</th>
            </tr>
             <?php
 require_once('bmi.php'); 
$conn = mysqli_connect("localhost", "root", "", "egzamin2");
$query = "SELECT informacja, wart_min, wart_max FROM bmi;";
$qu = mysqli_query($conn, $query);
while ($linia = mysqli_fetch_row($qu))
{
    echo "<tr>";
    echo "<td>" . $linia[0] . "</td>";
    echo "<td>" . $linia[1] . "</td>";
    echo "<td>" . $linia[2] . "</td>";
    echo "</tr>";
}
mysqli_close($conn);
?>
         </table> 
</div>   
             <div class="blok_lewy">
                <h2>Podaj wagę i wzrost</h2>
                <form action="bmi.php" method="POST">
                Waga<input id="waga" name="waga"  type="number" min="1"><br/><br/>
                Wzrost w cm<input name="wzrost"  type="number" min="1"><br/><br/>
                <input type="submit" value="Oblicz i zapamietaj wynik">
            </form>
            <?php
 require_once('bmi.php');           
if (isset($_POST['waga']) && isset($_POST['wzrost']))
{   
    
    $conn = mysqli_connect("localhost", "root", "", "egzamin2") or die ("could not connect to mysql");
    $waga = $_POST['waga'];
    $wzrost = $_POST['wzrost'];
    $wynik = ($waga / ($wzrost * $wzrost));
    $result = $wynik * 10000;
    $data = date("Y-m-d");
    
    echo "Twoja waga: ". $waga ."<br/>". "Twój wzrost: " . $wzrost ."</br>" . "BMI wynosi ". $result;
    
    if ($result >= 0 && $result <= 18)
    {
        $query = "INSERT INTO `wynik` ('id','bmi_id','data_pomiaru','wynik') VALUES (NULL,1,'$data','$result');";
        $gu = mysqli_query($conn, $query);
    }
    else if ($result >= 19 && $result <= 25)
    {

        $query = "INSERT INTO `wynik` ('id','bmi_id','data_pomiaru','wynik') VALUES (NULL,2,'$data','$result');";
        $gu = mysqli_query($conn, $query);
    }
    else if ($result >= 26 && $result <= 30)
    {
        $query = "INSERT INTO `wynik` ('id','bmi_id','data_pomiaru','wynik') VALUES (NULL,3,'$data','$result');";
        $gu = mysqli_query($conn, $query);
    }
    else if ($result >= 31 && $result <= 100)
    {
        $query = "INSERT INTO `wynik` ('id','bmi_id','data_pomiaru','wynik') VALUES (NULL,4,'$data','$result');";
        $gu=mysqli_query($conn, $query);
    }
  
    $conn ->close();
}   
?>
             </div>
             <div class="blok_prawy">
                 <img src="rys1.png" alt="ćwiczenia">
             </div>
             <div id="stopka">
<p> Autor:90070408837             <a href="kwerendy.txt">Zobacz kwerendy</a></p>
</div>  
</body>
</html>