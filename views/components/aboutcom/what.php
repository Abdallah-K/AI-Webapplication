
<?php

$data_arr = array(
    array(
        "Name" => "Opencv"
    ),
    array(
        "Name" => "Machine Learning"
    ),
    array(
        "Name" => "Image Processing"
    ),
    array(
        "Name" => "Face Recogntion"
    ),
);


?>


<section id="What">
    <div class="sec_one">
        <h2>What We Do</h2>
    </div>
    <div class="sec_two">

        <?php 
            foreach($data_arr as $data):
        ?>
            <div class="data_box">
                <h2><?=$data["Name"]?></h2>
            </div>
        <?php
            endforeach;
        ?>


    </div>
</section>