<?php
    //$conn = naam van db
    $stmt = $conn->query("SELECT * FROM characters");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<html>
    <div id="content">
    <?php 
        for($i = 1; $i <= $count; $i++) {
            ?>
            <div class="character <?php echo $i ?>">
                <div class="left">
                    <img class="avatar" src="./images/<?php echo $row["avatar"]; ?>" alt="Avatar">
                </div>
                <div class="right">
                    <h2 class="naam"><?php echo $row["name"]; ?></h2>
                    <ul class="indexlist">
                        <li><i class="fa fa-heartbeat" aria-hidden="true"></i><?php echo $row["health"]; ?></li>
                        <li><i class="fa fa-bolt" aria-hidden="true"><?php echo $row["attack"]; ?></i></li>
                        <li><i class="fa fa-shield" aria-hidden="true"></i><?php echo $row["defense"]; ?></li>
                    </ul>
                    <a class="knop" href="./pagina/character.php?name=<?php echo $row['name'];?>"><i class="fa fa-expand" aria-hidden="true"></i>Bekijk</a>
                </div>
            </div>
            <?php
        }
        ?>
    
    </div>  
</html>