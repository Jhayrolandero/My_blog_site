<?php
    include("auto_loader.php");
    session_start();

    if(isset($_POST["signup"])){
        $username = $_POST["user"];
        $password = $_POST["pass"];
        $email = $_POST["email"];
        $rpassword = $_POST["rpass"];
        
        $sign_obj = new SignCtrl();
        $sign_obj->get_credentials($username,$password,$rpassword, $email);
        $sign_obj->sign_user();
    }elseif(isset($_POST["login"])){
        $username = $_POST["user"];
        $password = $_POST["pass"];
        $login_obj = new LoginCtrl();
        $login_obj->get_credentials($username, $password);
        $login_obj->login_user();
    }
    ?>