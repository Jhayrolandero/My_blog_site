<?php
    if(isset($_SESSION["user"])){
        ?>
        <div>
            <h1><?= "Welcome! " . $_SESSION["user"] . $_SESSION["id"];?></h1>
        </div>
        <?php
    }
?>