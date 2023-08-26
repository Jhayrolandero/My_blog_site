<?php

class PostView extends Post{
    private $id;

    public function __construct($id){
        $this->id = $id;
    }

    private function get_contents(){
        return $this->get_blog($this->id);
    }

    public function show_blog(){
        $result = $this->get_contents();

        if($result == 0){
            ?>
                <div class="row">
                    <div class="col">
                        <p>No post yet?</p>
                        <a href="create_blog.php" class="btn btn-primary">Start your blog</a>
                    </div>
                </div>
            <?php
        }else{foreach($result as $res){
            ?>
            <div class="row d-flex justify-content-center">
                <a href="edit_blog.php?id=<?=$res["id"]?>">
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