<?php

class PostView extends Database{
    private $id;

    public function __construct($id){
        $this->id = $id;
    }

    private function get_blog(){
        $sql = "SELECT * FROM users
                INNER JOIN posts
                ON posts.user_id = users.id
                WHERE users.id = ?";
        
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$this->id]);

        if($stmt->rowCount() == 0 ){
            return 0;
        }
        return $stmt->fetchAll();
    }

    public function show_blog(){
        $result = $this->get_blog();

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