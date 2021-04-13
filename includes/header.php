<?php
//Kijkt hoeveel id's der zijn.
$sth = $conn->query("SELECT * FROM characters WHERE id");
$count = $sth->rowCount();
//echo 'query count is '.$count;
?>
<html>
    <header>Alle <span id="aantal"><?php echo $count ?></span> characters uit je database</header>
</html>