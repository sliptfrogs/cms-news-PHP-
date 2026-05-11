<?php
include('move_uploads.php');
include('functions/conn.php');
date_default_timezone_set('Asia/Phnom_Penh');
session_start();
   echo $id = $_SESSION['id'];
    $title = $_POST['postTitle'];
    $type_news = $_POST['postType'];
    $thumb = $_FILES['postThumbnail']['name'];
    $banner = $_FILES['postBanner']['name'];
    $desc = $_POST['postDes'];
    $category = $_POST['postCategory'];
    $date = date('d-M-y').','.date("h:i:sa");
   if(!empty($title) && !empty($type_news) && !empty($thumb) && !empty($banner) && !empty($desc) && !empty($category)){
    $thumb=move_uploads('postThumbnail','assets/thumb/');
    $banner=move_uploads('postBanner','assets/banner/');
    $sql = "INSERT INTO `news`( `user_id`, `title`, `date`, `description`, `banner`, `thumbnail`, `news_type`, `categories`) 
            VALUES ('$id','$title','$date','$desc','$banner','$thumb','$type_news','$category')";
    $rs = $cn->query($sql);
    if($rs){
        echo 'success';
    }
   }else{
    echo 'error';
   }

?>