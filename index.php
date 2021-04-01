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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Dynamische App</title>
</head>
<body>
  <!-- Header include -->
  <?php include "./includes/header.php"; ?>
  <!-- Content include -->
  <?php include "./includes/content.php"; ?>
  <!-- Footer include -->  
  <?php include "./includes/footer.php"; ?>
</body>
</html>