<?php

        $file_name=$_FILES['file_image']['name'];
        $file_tmp =$_FILES['file_image']['tmp_name'];
        $old_selected = $_POST['store_name'];
        $file_name = date('D-M-Y').'-'.time().$file_name;
        $path='../assets/user profile/'.$file_name;
        move_uploaded_file($file_tmp,$path);
        echo $file_name;
?>