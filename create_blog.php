<?php
    session_start();
    if(isset($_SESSION["user"]) && isset($_SESSION["id"])){
    include("message.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #autoresizing-textarea{
        resize: none;
        overflow-y: hidden;
    }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="publish.php" method="post" class="row">
            <input name="title" type="text" class="form-control" placeholder="Write some catchy title">
            <textarea name="content" id="autoresizing-textarea" class="form-control"></textarea>
            <button name="create_blog" type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
    const textarea = document.querySelector('#autoresizing-textarea');

    function adjustTextareaHeight() {
        textarea.style.height = 'auto';
        textarea.style.height = (textarea.scrollHeight) + 'px';
    }

    textarea.addEventListener('input', adjustTextareaHeight);

    window.addEventListener('load', adjustTextareaHeight);
</script>
</body>
</html>

<?php
    }else{
        header("Location:index.php");
    }

?>