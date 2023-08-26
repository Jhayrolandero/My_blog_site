<?php
    if(isset($_GET["error"])){
        ?>
        <div class="alert alert-warning">
            <strong>Warning!: <?= $_GET["error"];?></strong>
        </div>
        <?php
    }
    if(isset($_GET["message"])){
        ?>
        <div class="alert alert-success">
            <strong><?= $_GET["message"];?></strong>
        </div>
     <?php
    }
?>