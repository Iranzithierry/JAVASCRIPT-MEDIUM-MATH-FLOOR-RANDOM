<?php
include("conn.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name  = $_POST["name"];
  $location  = $_POST["location"];
  $age = $_POST["age"];

$stmt = $conn->prepare("INSERT INTO identity (name, location, age)VALUES(?,?,?)");
$stmt->bind_param("sss", $_POST["name"], $_POST["location"], $_POST["age"]);
$stmt->execute();


  echo "Your name is".$name." and your location is ".$location." and your age is ".$age."" ;
}
?>
<link rel="stylesheet" href="style.css">