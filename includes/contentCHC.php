<?php 
$character =  $_GET["name"];

$stmt = $conn->query("SELECT * FROM characters WHERE name = '$character'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<html>
    <div id="contentCHC">
        <div class="left">
            <?php if($character != "Captain America") { ?>
                <img class="avatarCHC" src="../images/<?php echo $character ?>.jpg" alt="Foto">
                <?php } else { ?>
                    <img class="avatarCHC" src="../images/captainamerica.jpg" alt="Foto">
                    <?php } ?>
            <div class="info" style="background-color: <?php echo $row["color"]; ?>;">
                <ul>
                    <li><i class="fa fa-heartbeat" aria-hidden="true"></i><?php echo $row["health"]; ?></li>
                    <li><i class="fa fa-bolt" aria-hidden="true"></i><?php echo $row["attack"]; ?></li>
                    <li><i class="fa fa-shield" aria-hidden="true"></i><?php echo $row["defense"]; ?></li>
                    <?php if($row["weapon"] != null) { ?>
                        <li><span>Weapon: </span><?php echo $row["weapon"]; ?></li>
                    <?php } ?>
                    <?php if($row["armor"] != null) { ?>
                        <li><span>Armor: </span><?php echo $row["armor"]; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="right">
            <p class="bio"><?php echo $row["bio"]; ?></p>
        </div>
    </div>
</html>