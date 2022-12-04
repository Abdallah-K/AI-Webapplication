<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/styles/videoapistyle/videohome.css"/>
    <link rel="stylesheet" href="./views/styles/videoapistyle/videodetapi.css"/>
    <link rel="stylesheet" href="./views/styles/videoapistyle/videofacedet.css"/>
    <link rel="stylesheet" href="./views/styles/videoapistyle/videomeshdet.css"/>
    <link rel="stylesheet" href="./views/styles/videoapistyle/videohand.css"/>
    <link rel="stylesheet" href="./views/styles/videoapistyle/videopose.css"/>
    <link rel="stylesheet" href="./views/styles/homestyle/navbar.css"/>
    <link rel="stylesheet" href="./views/styles/homestyle/footer.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php include("./views/components/videoapicom/videoapihome.php")?>
    <?php include("./views/components/videoapicom/facedetection.php")?>
    <?php include("./views/components/videoapicom/meshdetection.php")?>
    <?php include("./views/components/videoapicom/handdetection.php")?>
    <?php include("./views/components/videoapicom/posedetection.php")?>
    <?php include("./views/components/homecom/footer.php")?>

</body>
</html>