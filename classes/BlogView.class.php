<?php

# render the contents

class BlogView extends BlogCtrl{

    protected function preview_blog($contents){
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
            <form action="view.php" method="post" class="row bg-primary text-white">
                <input type="text" name="post_id" value="<?=$res["id"]?>" hidden>
                <div class="col col-6">
                    <label for="text">Title</label>
                    <input type="text" name="post_title" value="<?=$res["title"]?>" class="form-control" readonly>
                </div>
                <div class="col col-6">
                    <label for="text">Date</label>
                    <input type="text" name="post_date" value="<?=$res["created_at"]?>" class="form-control" readonly>

                </div>
                <label for="text">Content</label>
                <input type="text" name="post_content" value="<?=$res["content"]?>" class="form-control" readonly>
                <button type="submit" name="edit_blog">Edit</button>
            </form>
            <?php
        }
    }
    }
}
?>