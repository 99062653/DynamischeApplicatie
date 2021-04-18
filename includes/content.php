<?php
    //$conn = naam van db
    require "./includes/connection.php";

?>
<html>
    <div id="content">
    <?php 
        foreach($result as $array => $value) {
            ?>
            <div class="character <?php echo $i ?>">
                <div class="left">
                    <img class="avatar" src="./images/<?php echo $value["avatar"]; ?>" alt="Avatar">
                </div>
                <div class="right">
                    <h2 class="naam"><?php echo $value["name"]; ?></h2>
                    <ul class="indexlist">
                        <li><i class="fa fa-heartbeat" aria-hidden="true"></i><?php echo $value["health"]; ?></li>
                        <li><i class="fa fa-bolt" aria-hidden="true"><?php echo $value["attack"]; ?></i></li>
                        <li><i class="fa fa-shield" aria-hidden="true"></i><?php echo $value["defense"]; ?></li>
                    </ul>
                    <a class="knop" href="./pagina/character.php?name=<?php echo $value['name'];?>"><i class="fa fa-expand" aria-hidden="true"></i>Bekijk</a>
                </div>
            </div>
            <?php
        }
        ?>
    
    </div>  
</html>