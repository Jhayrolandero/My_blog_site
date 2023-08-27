<?php

class BlogView extends BlogCtrl{

    protected function show_blog($contents){
        $result = $contents;
        if($result == 0){
            ?>
                <div class="row">
                    <div class="col">
                        <p>No post yet?</p>
                        <a href="create_blog.php" class="btn btn-primary">Start your blog</a>
                    </div>
                </div>
            <?php
        }else{
            foreach($result as $res){
            ?>
            <div class="row d-flex justify-content-center">
                <a href="edit_blog.php">
                    <?="Title: " . $res["title"] ."<br>"?>
                    <?="Content: " . $res["content"]?>
                </a>
            </div>
            <?php
        }
    }
    }
}
?>