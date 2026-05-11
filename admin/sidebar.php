<!DOCTYPE html>
<html lang="en">
<head>
     
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- @sweet alert cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- @theme style -->
    <link rel="stylesheet" href="assets/style/theme.css">

    <!-- @Bootstrap -->
    <link rel="stylesheet" href="assets/style/bootstrap.css">
    <!-- @ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- @script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- @tinyACE -->
    <script src="https://cdn.tiny.cloud/1/5gqcgv8u6c8ejg1eg27ziagpv8d8uricc4gc9rhkbasi2nc4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<?php
include('./functions/function.php');
if(empty($_SESSION['id'])){
    header('location: register.php');
}
$id = $_SESSION['id'];
$sql = "SELECT * FROM `register_login_tb` WHERE `id` = '$id'";
$rs = $cn->query($sql);
$row = $rs->fetch_assoc();
?>
<body>
    <main class="admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 p-0" id="sideBar">
                    <div class="content-left">
                        <div class="wrap-top d-flex flex-column align-items-center justify-content-center">
                            <img width="100" height="100" src="https://cdn-icons-png.flaticon.com/512/9037/9037234.png" alt="">
                            <h5 class="mt-2 fw-bold">Jong Deng</h5>
                        </div>
                        <div class="wrap-center">
                            <img width="70" height="70" src="assets/user profile/<?php echo $row['profile']?>" alt="">
                            <div class="box-text d-flex flex-column align-items-center">
                                <h6>Welcome Admin</h6>
                                <h6 class="fw-bold fs-5 text-primary fst-italic">
                                    <?php echo $row['username']?>
                                </h6>
                            </div>
                        </div>
                        <div class="wrap-bottom ">
                            <ul class="" style="height: 16rem;">
                                
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span class="fw-bold">MAIN LOGO</span>
                                        <img  src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="view-logo.php" id="view-logo" class="btn btn-primary">View Logo</a>
                                            <a href="add-logo.php" id="add-logo_success" class="btn btn-primary">Add Logo</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span class="fw-bold">MAIN NEWS</span>
                                        <img  src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="view-post.php" id="view-post" name="view-post" class="btn btn-primary">View News</a>
                                            <a href="add-post.php" name="add-post" class="btn btn-primary">Add News</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <a href="login.php"  class="btn rounded-pill bg-danger mx-0 float-end  d-flex justify-content-center align-items-center" style="width: 80px;height: 45px;box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;"><ion-icon name="exit" class="fs-3"></ion-icon></a>
                        </div>
                    </div>
                </div>
