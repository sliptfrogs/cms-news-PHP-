<?php
    include('functions/conn.php');
    
    $sql = "SELECT * FROM `news` ORDER BY `id` DESC";
            $rs = $cn->query($sql);
            if($rs){
                $data = [];
                while($row = $rs->fetch_assoc()){
                    array_push($data,$row);
                }
                header('Content-type: application/json');
                echo json_encode($data);
            }
    

?>