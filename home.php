<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/styles/homestyle/home.css"/>
    <link rel="stylesheet" href="views/styles/homestyle/navbar.css"/>
    <link rel="stylesheet" href="views/styles/cnnstyle/cnnstyle.css"/>
    <link rel="stylesheet" href="views/styles/cardstyle/cardstyle.css"/>
    <link rel="stylesheet" href="views/styles/detectionstyle/detectionstyle.css"/>
    <link rel="stylesheet" href="views/styles/worldstyle/worldstyle.css"/>
    <link rel="stylesheet" href="views/styles/workhomestyle/workstyle.css"/>
    <link rel="stylesheet" href="views/styles/homestyle/footer.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <?php include_once "./config.php"?>
    <?php include("./views/components/homecom/homehead.php")?>
    <?php include("./views/components/detectioncom/objectdet.php")?>
    <?php include("./views/components/detectioncom/posedet.php")?>
    <?php include("./views/components/cnncom/cnnhome.php")?>
    <?php include("./views/components/cardcom/cardhome.php")?>
    <?php include("./views/components/worldcom/worldcom.php")?>
    <?php include("./views/components/workcom/workcom.php")?>
    <?php include("./views/components/homecom/footer.php")?>


    
</body>
</html>