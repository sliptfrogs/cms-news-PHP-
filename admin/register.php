<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/style/theme.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- icon awesome cdn -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<?php include('./functions/function.php')?>
<body>
    <div class="content-login">
        <form method="post" id="frm" class="form rounded w-50 row" enctype="multipart/form-data">
            <div class="col-6 position-relative ">
                <label class="form-label">Username</label>
                <ion-icon name="alert-circle-outline" id="" class="text-danger fs-4 position-absolute p-0 m-0 alert-circle-outline"></ion-icon>
                <ion-icon name="checkmark-circle-outline" id="" class="text-success fs-4 position-absolute p-0 m-0 checkmark-circle-outline"></ion-icon>
                <input type="text" name="reg-name" id="reg-name" class="form-control ">
            </div>
            <div class="col-6 position-relative">
                <label class="form-label">Email</label>
                <ion-icon name="alert-circle-outline" id="" class="text-danger fs-4 position-absolute p-0 m-0 alert-circle-outline"></ion-icon>
                <ion-icon name="checkmark-circle-outline" id="" class="text-success fs-4 position-absolute p-0 m-0 checkmark-circle-outline"></ion-icon>
                <input type="email" name="reg-email" id="reg-email" class="form-control">
            </div>
            <div class="col-12 position-relative">
                <label class="form-label">Password</label>
                <ion-icon name="alert-circle-outline" id="" class="text-danger fs-4 position-absolute p-0 m-0 alert-circle-outline"></ion-icon>
                <ion-icon name="checkmark-circle-outline" id="" class="text-success fs-4 position-absolute p-0 m-0 checkmark-circle-outline"></ion-icon>
                <input type="password" name="reg-pas" id="reg-pas" class="form-control">
            </div>
            <div class="col-12 position-relative">
                <label class="form-label">Confirm Password</label>
                <ion-icon name="alert-circle-outline" id="" class="text-danger fs-4 position-absolute p-0 m-0 alert-circle-outline"></ion-icon>
                <ion-icon name="checkmark-circle-outline" id="" class="text-success fs-4 position-absolute p-0 m-0 checkmark-circle-outline"></ion-icon>
                <input type="password" name="reg-conp" id="reg-conp" class="form-control">
            </div>
            <div class="col-12 d-flex flex-column">
                <label class="form-label">Profile Uploads</label>
                <input type="file" name="file_image" id="file_image" class="form-control d-none">
                <img src="./assets/user profile/Tue-Mar-2024-1710844787Screenshot (13).png" width="150"  id="image-click" name="image-click" alt="">
                <input type="hidden" name="store_name" id="store_name" class="form-control">
                <!-- code right here -->
            </div>
            <div class="wrap-btn mt-3 gap-2">
                <a href="login.php" id="back_login" class="btn text-decoration-none text-uppercase">back login</a>
                <button class="btn float-end btn" name="btn-register" id="btn-register">SIGN-UP</button>
            </div>
        </form>
    </div>
</body>
</html>
<script src="./functions/function.js"></script>