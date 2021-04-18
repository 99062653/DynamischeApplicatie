<?php 
    $character =  $_GET["name"];
    require "../includes/connection.php";

?>

<html>
    <div id="contentCHC">
        <div class="left">
                <img class="avatarCHC" src="../images/<?php echo $row2["avatar"]; ?>" alt="Foto">
            <div class="info" style="background-color: <?php echo $row2["color"]; ?>;">
                <ul>
                    <li><i class="fa fa-heartbeat" aria-hidden="true"></i><?php echo $row2["health"]; ?></li>
                    <li><i class="fa fa-bolt" aria-hidden="true"></i><?php echo $row2["attack"]; ?></li>
                    <li><i class="fa fa-shield" aria-hidden="true"></i><?php echo $row2["defense"]; ?></li>
                    <?php if($row2["weapon"] != null) { ?>
                        <li><span>Weapon: </span><?php echo $row2["weapon"]; ?></li>
                    <?php } ?>
                    <?php if($row2["armor"] != null) { ?>
                        <li><span>Armor: </span><?php echo $row2["armor"]; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="right">
            <p class="bio"><?php echo $row2["bio"]; ?></p>
        </div>
    </div> 
</html>