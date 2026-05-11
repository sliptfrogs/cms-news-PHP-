<?php
include('move_uploads.php');
include('functions/conn.php');
    $logoTitle = $_POST['title_logo'];
    $logoImge = $_FILES['image_logo']['name'];
    if(!empty($logoTitle) && !empty($logoImge)){
        $getImageName=move_uploads('image_logo','assets/icon/');
        $sql = "INSERT INTO `logos`( `image`, `status`) 
                VALUES ('$getImageName','$logoTitle')";
        $rs=$cn->query($sql);
        if($rs){
            echo 'success';
        }
    }
    