<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
date_default_timezone_set("Asia/Phnom_Penh");
include('./functions/conn.php');
include('./move_uploads.php');
    session_start();
    if(isset($_POST['btn-register'])){
        global $cn;
        $reg_name = $_POST['reg-name'];
        $reg_email = $_POST['reg-email'];
        $reg_password = $_POST['reg-pas'];
        $reg_conPassword = $_POST['reg-conp'];
        $reg_Profile = $_POST['store_name'];
        $date = date('D-M-Y');
        if(!empty($reg_name)){
            if(!empty($reg_email)){
                if((!empty($reg_password) && !empty($reg_conPassword)) && ($reg_password == $reg_conPassword)){
                    if(!empty($reg_Profile)){
                        
                        $reg_password = md5($reg_password);
                        $sql = "INSERT INTO `register_login_tb`(`username`, `email`, `password`, `profile`, `register_date`) 
                                VALUES ('$reg_name','$reg_email','$reg_password','$reg_Profile','$date')";
                        $rs = $cn->query($sql);
                        if($rs){
                            echo '
                                <script>
                                    $(document).ready(function () {
                                        swal("Succeed", "You clicked the button!", "success");
                                    });
                                </script>';
                                }
                            $sql = "SELECT `id` FROM `register_login_tb` ORDER BY `id` DESC LIMIT 1";
                            $rs = $cn->query($sql);
                            $row = $rs->fetch_assoc();
                            $_SESSION['id']=$row['id'];
                            header('location: index.php');
                    }else{
                        echo '
                            <script>
                                $(document).ready(function () {
                                    swal("Plz Insert an image", "You clicked the button!", "error");
                                });
                            </script>';
                    }
                }else{
                    echo '
                    <script>
                        $(document).ready(function () {
                            swal("Somthing wrong with password", "You clicked the button!", "error");
                        });
                    </script>';
                }
            }else{
                echo '
                <script>
                    $(document).ready(function () {
                        swal("Cannot insert an empty email", "You clicked the button!", "error");
                    });
                </script>';
            }
        }else{
            echo '
            <script>
                $(document).ready(function () {
                    swal("Cannot insert an empty username", "You clicked the button!", "error");
                });
            </script>';
        }
    }
function sideBar(){
    
}
function login_frm(){
    global $cn;
    if(isset($_POST['btn-login'])){
        $username=$_POST['userEmail'];
        $password=$_POST['password'];
        $password = md5($password);
        $sql = "SELECT `id` FROM `register_login_tb` WHERE (`username`='$username' OR `email`='$username') AND `password`='$password'";
        $rs = $cn->query($sql);
        if($rs){
            $row = $rs->fetch_assoc();
            $_SESSION['id']=$row['id'];
            header('location: index.php');
        }
    }
}
login_frm();
function add_Logo(){
    global $cn;
    if(isset($_POST['add-logo_success'])){
        $logoTitle = $_POST['title_logo'];
        $logoImge = $_FILES['image_logo']['name'];
        if(!empty($logoTitle) && !empty($logoImge)){
            $getImageName=move_uploads('image_logo','assets/icon/');
            $sql = "INSERT INTO `logos`( `image`, `status`) 
                    VALUES ('$getImageName','$logoTitle')";
            $rs=$cn->query($sql);
            if($rs){
                echo '
                <script>
                    $(document).ready(function () {
                        swal("Succeed", "You clicked the button!", "success");
                    });
                </script>';
            }
        }
    }
}
add_Logo();
function updateLogo(){
    global $cn;
    if(isset($_POST['update-logo_success'])){
        $id = $_POST['idToUpdate'];
        $fileName = $_FILES['image_logo']['name'];
        $status = $_POST['status_logo'];
        if(empty($fileName)){
            $image = $_POST['old_logo'];
        }else{
            $image = move_uploads('image_logo','assets/icon/');
        }
        if(!empty($status) && !empty($image)){
            $sql = "UPDATE `logos` 
                    SET `image`='$image',`status`='$status'   
                    WHERE `id`='$id'";
            $res = $cn->query($sql);
            if($res){
                echo '
                <script>
                    $(document).ready(function () {
                        swal("Succeed", "You clicked the button!", "success");
                    });
                </script>';
            }
        }

    }
}
updateLogo();
function DeleteLogo(){
    global $cn;
    if(isset($_POST['btn_yes-delete'])){
      $id = $_POST['remove_id'];

      $sql = "DELETE FROM `logos` WHERE `id` = '$id'";
        $res = $cn->query($sql);
        
    }
}
DeleteLogo();
// Post add update delete
function add_Post(){
    global $cn;
    if(isset($_POST['add-post_submit'])){
            $id = $_SESSION['id'];
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
                echo '
                    <script>
                        $(document).ready(function () {
                            swal("Succeed", "You clicked the button!", "success");
                        });
                    </script>';
            }
        }else{
            echo '
                <script>
                    $(document).ready(function () {
                        swal("Empty form", "You clicked the button!", "error");
                    });
                </script>';
        }

    }
}
add_Post();
function update_Post(){
    global $cn;
    if(isset($_POST['add-post_update'])){
            $userid = $_SESSION['id'];
            $id = $_POST['idPostUpdate'];
            $title = $_POST['postTitle'];
            $type_news = $_POST['postType'];
            $thumb = $_FILES['postThumbnail']['name'];
            $banner = $_FILES['postBanner']['name'];
            $desc = $_POST['postDes'];
            $category = $_POST['postCategory'];
        if(empty($thumb)){
            $thumb = $_POST['old_thumb_image'];
        }else{
            $thumb = move_uploads('postThumbnail','assets/thumb/');
        }
        if(empty($banner)){
            $banner = $_POST['old_banner_image'];
        }else{
            $banner = move_uploads('postBanner','assets/banner/');
        }
        if(!empty($title) && !empty($type_news) && !empty($thumb) && !empty($banner) && !empty($desc) && !empty($category)){
            $sql = "UPDATE `news`  
                    SET `user_id`='$userid',`title`='$title',`description`='$desc',`banner`='$banner',`thumbnail`='$thumb',`news_type`='$type_news',`categories`='$category'
                    WHERE `id`='$id'";

            $res = $cn->query($sql);
            if($res){
                echo '
                <script>
                    $(document).ready(function () {
                        swal("Succeed", "You clicked the button!", "success");
                    });
                </script>';
            }
        }else{
            echo '
            <script>
                $(document).ready(function () {
                    swal("empty form", "You clicked the button!", "error");
                });
            </script>';
        }
    }
}
update_Post();
function delete_Post(){
    global $cn;
    if(isset($_POST['btnPostYesDelete'])){
        $id = $_POST['remove_id'];
        $sql = "DELETE FROM `news` WHERE `id` = '$id'";
        $res = $cn->query($sql);
        if($res){
            echo '
                <script>
                    $(document).ready(function () {
                        swal("Deleted", "You clicked the button!", "success");
                    });
                </script>';
        }
    }
}
delete_Post();
function limit_text($text, $limit) {
    if (strlen($text) > $limit) {
        $text = substr($text, 0, $limit) . '...';
    }
    return $text;
}
function paginationNews($page,$limit){
    global $cn;
    
        $start = ($page-1)*$limit;
        $sql = "SELECT `t_new`.*,`tb_user`.`username` 
                FROM `news` AS `t_new` JOIN `register_login_tb` AS `tb_user` ON `t_new`.`user_id` = `tb_user`.`id` 
                ORDER BY `id` DESC LIMIT $start,$limit";
        $res = $cn->query($sql);
        while($row = $res->fetch_assoc()){
            echo '
                <tr>
                    <td >'.limit_text($row['title'],20).'</td>
                    <td>'.$row['news_type'].'</td>
                    <td>'.$row['categories'].'</td>
                    <td class="fst-italic">'.limit_text($row['date'],15).'</td>
                    <td class="fst-italic">'.$row['username'].'</td>
                    <td class="fst-italic">'.$row['view'].'</td>
                    <td><img height="54px" src="assets/thumb/'.$row['thumbnail'].'"></td>
                    <td >
                        <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger p-2 btn-remove" data-bs-toggle="modal" data-bs-target="#updatePost">Delete</button>
                        <a href="update-Post.php?id='.$row['id'].'&page='.$page.'" class="btn p-2 btn-primary">Update</a>
                    </td>
                </tr>

            ';
        }
 
        }
function paginationLogo($page,$limit){
            global $cn;
        $start = ($page-1)*$limit;
        $sql = "SELECT * FROM `logos` LIMIT $start,$limit";
        $res = $cn->query($sql);
        while($row = $res->fetch_assoc()){
            echo '
            <tr>
                <td>'.$row['status'].'</td>
                <td><img height="53px" src="assets/icon/'.$row['image'].'"/></td>
                <td class="d-none">
                '.$row['id'].'
                </td>
                <td width="150px">
                <button type="button" remove-id="'.$row['id'].'" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal"> Delete</button>
                <a href="update-logo.php?id='.$row['id'].'&page='.$page.'" class="btn btn-primary btn-update-logo">Update</a>
                </td>
            </tr>
            ';
        }
    
        }
function pagination($tb,$limit){
    global $cn;
    $page = isset($_GET['page'])?$_GET['page']:1;
    $sqlTotal = "SELECT COUNT(*) AS total FROM `$tb`";
        $resTotal = $cn->query($sqlTotal);
        $rowTotal = $resTotal->fetch_assoc();
        $totalPage = ceil($rowTotal["total"]/$limit);
        echo '<nav aria-label="Page" >
                <ul class="pagination d-flex align-items-center justify-content-center position-absolute bottom-0 end-0 w-25 float-end" style="height:25px">';
        if($page>1){
            echo '<a style="background-color: var(--bg-color);" alt="'.$page.'" class="page-link rounded-circle mx-3" href="?page='.($page-1).'" ><ion-icon name="chevron-back-outline"></ion-icon></a>';
        }
        for($i = 1; $i<=$totalPage;$i++){
            if( $i >= ($page-1) && $i <=($page+1) ){
                $getString = ($page==$i)?'style="background-color: var(--bg-color-click);"':'style="background-color: var(--bg-color);"';
                echo '<a '.$getString.' class="page-link mx-1 border-2 rounded-circle " href="?page='.($i).'">'.$i.'</a>';
            }
        }
        if($page<$totalPage){
            echo '<a style="background-color: var(--bg-color);" alt="'.$page.'" class="page-link rounded-circle mx-3" href="?page='.($page+1).'"><ion-icon  name="chevron-forward-outline"></ion-icon></a>';
        }
        echo '</ul>
        </nav>';
}
?>
