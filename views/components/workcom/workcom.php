<?php

$workdata = array(
    array(
        "icon" => '<i class="fa-solid fa-microchip"></i>',
        "title" => "Data Generated",
    ),
    array(
        "icon" => '<i class="fa-solid fa-database"></i>',
        "title" => "Data Stored",
    ),
    array(
        "icon" => '<i class="fa-solid fa-server"></i>',
        "title" => "Data Processing",
    ),
    array(
        "icon" => '<i class="fa-solid fa-video"></i>',
        "title" => "Image Processing",
    ),
)






?>

<section id="WorkPage">
    <div class="worktitle">
        <h1>How We Works</h1>
    </div>
    <div class="workbody">
        
        <?php
            foreach($workdata as $work):
        ?>
            <div class="workbox">
                <div class="workcircle">
                    <div class="innercircle">
                        <?=$work['icon']?>
                    </div>
                </div>
                <h2><?=$work['title']?></h2>
            </div>
        <?php
            endforeach;
        ?>


    </div>



</section>