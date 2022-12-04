<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/styles/homestyle/navbar.css"/>
    <link rel="stylesheet" href="views/styles/homestyle/footer.css"/>
    <link rel="stylesheet" href="views/styles/opencvstyle/cnn.css"/>
    <link rel="stylesheet" href="views/styles/opencvstyle/flower.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <?php include("./views/components/tensorflowcom/tenso.php")?>
    <section id="FlowerPage">
        <div class="flower_title">
            <h1>Image-Classification-CNN</h1>
        </div>
        <div class="flower_data">
            <div class="flower_box">
                <form id="photoform">
                    <input type="file" id="photo">
                    <label for="photo">
                        <i class="fa-solid fa-images"></i> &nbsp; Choose Flower Photo
                    </label>
                    <input type="submit" id="check" value="Classify">
                </form>
                <div class="formdata">
                    <img id="image" src="./views/images/worldimage/1.png">
                    <h1 id="formh1"></h1>
                </div>
            </div>
        </div>
    </section>
    <?php include("./views/components/homecom/footer.php")?>




</body>
</html>


<script>

    $(function(){
        $('#photo').change(function(e){
        var x = URL.createObjectURL(e.target.files[0]);
        $('#image').attr("src",x)
        })

        var api = 'http://127.0.0.1:8000/flowers'

        $("#photoform").submit((e)=>{
            e.preventDefault();
            let formdata = new FormData();
            let file = $("#photo")[0].files[0];
            formdata.append('file',file);
            $.ajax({
                url:api,
                type:'post',
                data:formdata,
                contentType:false,
                processData:false,
                success:(data)=>{
                    $("#formh1").html(data.Prediction);
                }
            })
        })

    })

</script>