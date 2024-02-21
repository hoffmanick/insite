<?php

$spec =$_POST['species'];
$date = $_POST['trip-start'];
$lat = $_POST['lat'];
$long = $_POST['long'];
$store = $_POST['store'];

$servername = "localhost";
$username = "root";
$password = "insite_data";
$db = "mydb";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
}

  $sql = "insert into specimen(species,date,lat,long,store)
    values('$spec','$date','$lat','$long','$store')";

if ($conn->query($sql) === TRUE) {
    echo "ADDED: ".$species.", ".$date.", ".$lat.", ".$long.", ".$store.";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
    }

    $conn-> close();
?>
