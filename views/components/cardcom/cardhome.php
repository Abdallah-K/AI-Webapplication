<?php

$carddata = array(
    array(
        "icon" =>'<i class="fa-solid fa-microchip" id="cardlogo"></i>',
        "title" => "Face Recognition Detection",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa inventore iste pariatur praesentium. Voluptas veniam voluptate aliquam itaque."
    ),
    array(
        "icon" =>'<i class="fa-solid fa-face-smile" id="cardlogo"></i>',
        "title" => "Emotion Analysis",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa inventore iste pariatur praesentium. Voluptas veniam voluptate aliquam itaque."
    ),
    array(
        "icon" =>'<i class="fa-solid fa-file-video" id="cardlogo"></i>',
        "title" => "Video Analysis",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa inventore iste pariatur praesentium. Voluptas veniam voluptate aliquam itaque."
    ),
    array(
        "icon" =>'<i class="fa-solid fa-envelope" id="cardlogo"></i>',
        "title" => "Character Recogntion",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa inventore iste pariatur praesentium. Voluptas veniam voluptate aliquam itaque."
    ),
    array(
        "icon" =>'<i class="fa-solid fa-image" id="cardlogo"></i>',
        "title" => "Image Processing",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa inventore iste pariatur praesentium. Voluptas veniam voluptate aliquam itaque."
    ),
    array(
        "icon" =>'<i class="fa-solid fa-microchip" id="cardlogo"></i>',
        "title" => "Video Survillence",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa inventore iste pariatur praesentium. Voluptas veniam voluptate aliquam itaque."
    ),
);
?>


<section id="CardPage">
    <div class="cardtitle">
        <h1>Why Computer Vision AI</h1>
    </div>
    <div class="cardbody">

        <?php
            foreach($carddata as $card):
        ?>
            <div class="carddata">
                <?=$card['icon']?>
                <h2><?=$card['title']?></h2>
                <p><?=$card['body']?></p>
            </div>
        <?php
            endforeach;
        ?>
  

    </div>


</section>