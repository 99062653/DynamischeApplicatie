<?php 

$queryAantal = "SELECT MAX(id) FROM characters";
$result = $conn->prepare($queryAantal);
$result->execute();


?>
<html>
    <header>Alle <?php ?> characters uit je database</header>
</html>