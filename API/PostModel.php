<?php

class PostModel{
    
    public function __construct()
    {
        $response = [];
        $action = $_REQUEST['action'];
        if($action == "uploadVid"){
            $response = self::UploadVideo($_POST); 
        }

        echo json_encode($response);
    }

    public static function UploadVideo($videoname){
        $response = [
            "status" =>"error",
            "message" => "Error, Try Again",
        ];
        $f_name = $videoname['file'];
        $file_name = $f_name['name'];
        $file_tmp = $f_name['tmp_name'];
        $target_dir = "views/video/facedetection/${file_name}";
        $result = move_uploaded_file($file_tmp,$target_dir);
        if($result){
            $response["status"]="success";
            $response["message"] = "Record inserted";
        }
        return $response;
    }
}





if(isset($_REQUEST["action"])){
    new PostModel();
}









?>