<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php include_once "./config.php"?>
<nav>
    <div class="logo">
        <h1>AIWorld</h1>
    </div>
    <div class="links">
        <a href="<?=$baseurl?>index.php">Home</a>
        <a href="<?=$baseurl?>opencvpage.php">Opencv</a>
        <a href="<?=$baseurl?>Cnn.php">CNN</a>
        <a href="<?=$baseurl?>Video_api.php">Vision</a>
        <a href="<?=$baseurl?>About.php">About</a>
    </div>
    <button id="opennav"><i class="fa-solid fa-bars"></i></button>
    
</nav>


<div class="sidenav">
    <a href="<?=$baseurl?>index.php">Home</a>
    <a href="<?=$baseurl?>opencvpage.php">Opencv</a>
    <a href="<?=$baseurl?>Cnn.php">CNN</a>
    <a href="<?=$baseurl?>Video_api.php">Vision</a>
    <a href="<?=$baseurl?>About.php">About</a>
</div>



<script>

    $(function(){
        $("#opennav").click(function(){
            $(".sidenav").toggleClass("shownav")
        })
        
    })


</script>