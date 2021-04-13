<?php 
require "./includes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/styling.css?v=<?php echo time(); ?>"> <!-- Forceerd een cache wipe -->
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