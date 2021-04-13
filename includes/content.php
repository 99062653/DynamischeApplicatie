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
            <div class="character">
                <div class="left">
                    <img class="avatar" src="./images/<?php echo $row["avatar"]; ?>" alt="Avatar">
                </div>
                <div class="right">
                    <h2 class="naam"><?php echo $row["name"]; ?></h2>
                    <a class="knop" href="./pagina/character.php?name=<?php echo $row['name'];?>">Bekijk</a>
                </div>
            </div>
            <?php
        }
        ?>
    
    </div>  
</html>