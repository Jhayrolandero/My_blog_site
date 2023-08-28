<?php
    include("auto_loader.php");
    session_start();

    if(isset($_POST["login"])){
        $username = $_POST["user"];
        $password = $_POST["pass"];
        $login_obj = new LoginCtrl();
        $login_obj->get_credentials($username, $password);
        $login_obj->login_user();
    }

?>