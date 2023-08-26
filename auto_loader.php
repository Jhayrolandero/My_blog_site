<?php
    spl_autoload_register("auto_loader");

    function auto_loader($class_name){
        $path = "classes/";
        $ext = "class.php";
        $fullpath = $path . $class_name . "." . $ext;

        include_once $fullpath;
    }
?>