<?php
class Post extends Database{

    protected function add_blog($user_id, $author, $title, $content ){
        $sql = "INSERT INTO posts (user_id, author, title, content)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id, $author, $title, $content]);
    }
}
?>