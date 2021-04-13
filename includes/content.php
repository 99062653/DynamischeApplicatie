<?php
    //$conn = naam van db
    $stmt = $conn->query("SELECT * FROM characters");
    
?>
<html>
    <div id="content">
    <?php 
        for($i = 1; $i <= $count; $i++) {
            ?>
            <div class="character">
                <div class="left">
                    <img class="avatar" src="#" alt="Avatar">
                </div>
                <div class="right">
                    <h2 class="naam"></h2>
                </div>
            </div>
            <?php
        }
        ?>
    
    </div>  
</html>