<?php
require "koneksi.php";
session_start();

if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
    body {
        background-color: #2f2f2f;
        color: white;
    }

    .main {
        height: 100vh;
    }

    .login-box {
        width: 500px;
        height: 300px;
        box-sizing: border-box;
        border-radius: 10px;
        background-color: #71717a;
    }
    </style>
</head>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <h1>Login</h1>
        <div class="login-box p-5 shadow">
            <form action="" method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" autocomplete="off" class="form-control" id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-dark form-control mt-3" name="loginbtn">Login</button>
                </div>
                <div>
                    <a href="index.php" class="btn btn-outline-light form-control mt-2">Back</a>
                </div>
            </form>
        </div>

        <div class="mt-3" style="width:500px; text-align:center;">
            <?php

        if (isset($_POST["loginbtn"])) {
            $username = htmlspecialchars_decode($_POST["username"]);
            $password = htmlspecialchars_decode($_POST["password"]);

            $query = mysqli_query($koneksi, "SELECT*FROM adm WHERE username = '$username'",);
            $countdata= mysqli_num_rows($query);
            $data = mysqli_fetch_array($query);
                if ($countdata > 0) {
                    if(password_verify($password, $data["new_password"])) {
                        $_SESSION["login"] = true;
                        header("location: index.php");
                        exit();
                    }
                    else{
                                            ?>
            <div class="alert alert-warning" role="alert">
                Password Salah
            </div>
            <?php
                    }
                }
                else{
                    ?>
            <div class="alert alert-warning" role="alert">
                Akun tidak tersedia
            </div>
            <?php
                }
        }
        ?>
        </div>
    </div>
</body>

</html>