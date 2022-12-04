<?php


if(!empty($_FILES['file']['name'])){
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $target_dir = "../views/video/facedetection/${file_name}";
    move_uploaded_file($file_tmp,$target_dir);
}





?>