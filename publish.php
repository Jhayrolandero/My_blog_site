<?php
    include("auto_loader.php");
    session_start();
    if(isset($_POST["create_blog"])){

        $user_id = $_SESSION["id"];
        $author = $_SESSION["user"];
        $title = $_POST["title"];
        $content = $_POST["content"];

        $create_blog_obj = new PublishCtrl($user_id, $author, $title, $content);
        $create_blog_obj->create_blog();
    }

?>