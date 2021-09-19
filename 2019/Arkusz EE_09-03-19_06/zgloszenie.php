<!DOCTYPE html>
<html lang="pl">
    <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width-device-width, initial-scale:1.0">
     <title>Wędkowanie - moje  hobby</title>
     <link rel="stylesheet" href="styl5.css">
    </head>
    <body>
 <?php
 if(isset($_POST['zawody']))
 {
$lowisko= $_POST ['lowisko'];
$data= $_POST ['data'];
$sendzia= $_POST ['sendzia'];
$zawody = $_POST ['zawody'];
$dbcon = new mysqli('127.0.0.1','root','','wedkowanie1');
// Check connection
if ($dbconn->connect_error) {
    die("Connection failed: " 
        . $dbconn->connect_error);
}



$sql="INSERT INTO zawody_wedkarskie(id,Karty_wedkarskie_id,Lowisko_id,data_zawodow,sedzia) VALUES  ('2','$lowisko','$data','$sendzia')" ;
if ($wynik = mysqli_query($dbcon,$sql)=== TRUE) {
    echo "record inserted successfully";
}
 else {
    echo "Error: " . $sql . "<br>" . $dbcon->error;
}
 $dbcon->close();
}
?>
</body>
</html>