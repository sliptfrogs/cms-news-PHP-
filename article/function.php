<!-- @import jquery & sweet alert  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
include('conn.php');
function limit_text_artical($text, $limit) {
    if (strlen($text) > $limit) {
        $text = substr($text, 0, $limit) . '...';
    }
    return $text;
}
function getTrading(){
    global $cn;
    $sql = "SELECT * FROM `news` ORDER BY `id` DESC LIMIT 2";
    $res = $cn->query($sql);
    while($row=$res->fetch_assoc()){
        echo '
        <i class="fas fa-angle-double-right"></i>
        <a href="news-detail.php?id='.$row['id'].'&type='.$row['news_type'].'" style="font-style:italic;">'.$row['title'].'</a> &ensp;
        ';
    }
    
}
function getRelated($type){
    global $cn;
    $sql = "SELECT * FROM `news` WHERE `news_type`='$type' ORDER BY `id` LIMIT 2";
    $res = $cn->query($sql);
    while($row=$res->fetch_assoc()){
        echo '
        <figure>
            <a href="news-detail.php?id='.$row['id'].'&type='.$row['news_type'].'">
                <div class="thumbnail">
                    <img width="330" height="200" src="../admin/assets/thumb/'.$row['thumbnail'].'" alt="">
                </div>
                <div class="detail">
                    <h3 class="title">'.$row['title'].'</h3>
                    <div class="date">'.$row['date'].'</div>
                    <div class="description">
                        '.$row['description'].'
                    </div>
                </div>
            </a>
        </figure>
        ';
    }
}
function getHomeNews(){
    global $cn;
    $sql = "SELECT * FROM `news` ORDER BY `view` DESC LIMIT 1";
    $res = $cn->query($sql);
    $row=$res->fetch_assoc();
    echo '
    <figure>
        <a href="news-detail.php?id='.$row['id'].'&type='.$row['news_type'].'">
            <div class="thumbnail">
                <img width="720" height="415" src="../admin/assets/thumb/'.$row['thumbnail'].'" alt="">
                <div class="title">
                    '.$row['title'].'
                </div>
            </div>
        </a>
    </figure>
    
    ';
}
function getHomeNews2(){
    global $cn;
    $sql = "SELECT * 
            FROM (
                SELECT * 
                FROM `news` 
                ORDER BY `view` DESC 
                LIMIT 2 OFFSET 1
            ) AS last_two
            ORDER BY `view` DESC";
    $res = $cn->query($sql);
    while($row=$res->fetch_assoc()){
        echo '

        <div class="col-12">
            <figure>
                <a href="news-detail.php?id='.$row['id'].'&type='.$row['news_type'].'">
                    <div class="thumbnail">
                        <img width="340" height="200" src="../admin/assets/thumb/'.$row['thumbnail'].'" alt="">
                    <div class="title">
                        '.$row['title'].'
                    </div>
                    </div>
                </a>
            </figure>
        </div>
        
        ';
    }
}
function getDetail($id){
    global $cn;
    $sql = "SELECT * FROM `news` WHERE `id`='$id'";
    $res = $cn->query($sql);
    $row=$res->fetch_assoc();
    echo '
            <div class="main-news">
                <div class="thumbnail">
                    <img width="730px" height="415px" src="../admin/assets/banner/'.$row['banner'].'">
                </div>
                <div class="detail">
                    <h3 class="title">'.$row['title'].'</h3>
                    <div class="date">'.$row['date'].'</div>
                    <div class="description">
                        '.$row['description'].'
                    </div>
                </div>
            </div>
    ';
    $cn->query("UPDATE `news` SET `view`=`view`+1 WHERE `id`='$id'");
}
function sportNews(){
    global $cn;
    $sql = "SELECT * FROM `news` WHERE `news_type`='Sport' LIMIT 6";
    $res = $cn->query($sql);
    if($res){
        while($row=$res->fetch_assoc()){
            echo '
            <div class="col-4">
                    <figure>
                        <a href="news-detail.php?id='.$row['id'].'&type='.$row['news_type'].'">
                            <div class="thumbnail">
                                <img width="350" height="200" src="../admin/assets/thumb/'.$row['thumbnail'].'" alt="">
                            <div class="title">
                                '.$row['title'].'
                            </div>
                            </div>
                        </a>
                    </figure>
                </div>
            ';

        }
    }
}
function socialNews(){
    global $cn;
    $sql = "SELECT * 
            FROM `news` WHERE `news_type`='Social' 
            LIMIT 6";
    $res = $cn->query($sql);
    while($row=$res->fetch_assoc()){
        echo '

        <div class="col-4">
            <figure>
                <a href="news-detail.php?id='.$row['id'].'&type='.$row['news_type'].'">
                    <div class="thumbnail">
                        <img width="350" height="200" src="../admin/assets/thumb/'.$row['thumbnail'].'" alt="">
                    <div class="title">
                        '.$row['title'].'
                    </div>
                    </div>
                </a>
            </figure>
        </div>

        ';
    }
}
function entertainmentNews(){
    global $cn;
    $sql = "SELECT * 
            FROM `news` WHERE `news_type`='Entertainment' 
            LIMIT 6";
    $res = $cn->query($sql);
    while($row=$res->fetch_assoc()){
        echo '

        <div class="col-4">
            <figure>
                <a href="news-detail.php?id='.$row['id'].'&type='.$row['news_type'].'">
                    <div class="thumbnail">
                        <img width="350" height="200" src="../admin/assets/thumb/'.$row['thumbnail'].'" alt="">
                    <div class="title">
                        '.$row['title'].'
                    </div>
                    </div>
                </a>
            </figure>
        </div>

        ';
    }
}
function getStatus($status){
    global $cn;
    $sql = "SELECT * FROM `logos` WHERE `status`='$status' ORDER BY `id` DESC LIMIT 1";
    $res = $cn->query($sql);
    $row=$res->fetch_assoc();
    echo '
        <img style="width:100%;height:100%" src="../admin/assets/icon/'.$row['image'].'" alt="">
    ';

}
