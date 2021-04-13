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
?>