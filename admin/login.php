<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style/theme.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icon awesome cdn -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<?php include('./functions/function.php')?>
<body>
    <div class="content-login">
    <form method="post" class="form rounded w-50 row">
        <div class="col-12 position-relative" id="frmLog1">
            <label class="form-label">Username or Email</label>
            <input type="text" name="userEmail" id="userEmail"  class="form-control">
            <ion-icon name="alert-circle-outline" id="" class="d-none"></ion-icon>
        </div>
        <div class="col-12 position-relative" id="frmLog2">
            <label class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
            <div class="wrap-btn mt-3  gap-2">
                <a href="register.php" class="btn text-decoration-none text-uppercase">back register</a>
                <button class="btn float-end btn text-uppercase" id="btn-login" name="btn-login">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
<script src="./functions/function.js"></script>