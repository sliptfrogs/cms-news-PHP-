<?php
    function move_uploads($tmp,$pathParam){
        $imageName = $_FILES[$tmp]['name'];
        $imageTmp = $_FILES[$tmp]['tmp_name'];
        $imageName = date('d-m-y').'-'.time().'-'.$imageName;
        $path = $pathParam.$imageName;
        move_uploaded_file($imageTmp,$path);
        return $imageName;
    }

?>