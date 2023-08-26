<?php
    session_start();
    if(isset($_SESSION["user"]) && isset($_SESSION["id"])){
    include("welcome_message.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <a href="create_blog.php" class="btn btn-primary">Create Blog</a>
    </div>
    
    <form action="homepage.php" method="POST" class="row">
        <div class="col-6">
            <button name="logout" class="btn btn-primary">Log out</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

<?php
    }else{
        header("Location: index.php");
    }
    if(isset($_POST["logout"])){
        session_unset();
        session_destroy();
        header("Location: index.php");
    }
?>