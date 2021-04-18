<?php 
$servername = "localhost";
$username = "admin";
$password = "axqAGG6UD6hnan1A";

try {
    $conn = new PDO("mysql:host=$servername;dbname=dynamischeapp", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    //echo "Connection failed: " . $e->getMessage();
}

$stmt1 = $conn->prepare("SELECT * FROM characters ORDER BY name, health, attack, defense");
$stmt1->execute();
$result = $stmt1->fetchAll(PDO::FETCH_ASSOC);

$stmt2 = $conn->query("SELECT * FROM characters WHERE name = '$character'");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

?>