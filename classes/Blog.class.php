<?php
class Blog extends Database{

    protected function add_blog($user_id, $author, $title, $content ){
        $sql = "INSERT INTO posts (user_id, author, title, content)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id, $author, $title, $content]);
    }

    protected function get_blog($id){
        $sql = "SELECT * FROM users
        INNER JOIN posts
        ON posts.user_id = users.id
        WHERE users.id = ?
        ORDER BY created_at DESC";
        
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        if($stmt->rowCount() == 0 ){
            return 0;
        }
        return $stmt->fetchAll();
    }
}
?>