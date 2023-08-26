<?php
    session_start();
    include("message.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-primary-subtle">
    <div class="container">

        <div class="row justify-content-center">
            <form action="login.php" method="POST" class="col-12 col-md-5 m-1 col-sm-12 bg-primary p-3 text-white">
                <h4 class="display-3">Login</h4>
                <div class="col-12">
                    <label for="text" class="form-label">Username</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <div class="col-4">
                    <button name="login" type="submit" class="btn btn-outline-light">Login</button>
                </div>
            </form>
            <form action="register.php" method="POST" class="col-12 col-md-5 m-1 col-sm-12 bg-dark p-3 text-white">
                <h4>Sign Up</h4>

                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="col-12">
                    <label for="text" class="form-label">Username</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="pass" class="form-control">
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Retype Password</label>
                    <input type="text" name="rpass" class="form-control">
                </div>
                <div class="col-4">
                    <button name="signup" type="submit" class="btn btn-outline-light">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>