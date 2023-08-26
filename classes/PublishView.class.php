<?php

class PublishView extends Database{
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

        return $stmt->fetchAll();
    }

    public function show_blog(){
        $result = $this->get_blog();

        foreach($result as $res){
            echo $res["title"] . "<br>";
            echo $res["content"] . "<br>";
        }
    }
}
?>