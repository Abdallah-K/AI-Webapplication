<?php
$worlddata = array(
    array(
        "image" => "views/images/worldimage/3.png",
        "title" => "Across the world",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius laboriosam voluptate, consectetur animi doloremque adipisci, molestias, a officiis ut inventore veniam ratione. Corrupti repellat quibusdam saepe ab non exercitationem qui."
    ),
    array(
        "image" => "views/images/worldimage/2.png",
        "title" => "On Any platform",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius laboriosam voluptate, consectetur animi doloremque adipisci, molestias, a officiis ut inventore veniam ratione. Corrupti repellat quibusdam saepe ab non exercitationem qui."
    ),
    array(
        "image" => "views/images/worldimage/1.png",
        "title" => "Across Devices",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius laboriosam voluptate, consectetur animi doloremque adipisci, molestias, a officiis ut inventore veniam ratione. Corrupti repellat quibusdam saepe ab non exercitationem qui."
    ),  
)




?>

<section id="WorldPage">
    <div class="worldtitle">
        <h1>Reach More Audiences <br> &nbsp; &nbsp; Wherever They Are</h1>
    </div>
    <div class="worldbody">


        <?php
            foreach($worlddata as $world):
        ?>
            <div class="worldbox">
                <div class="worldimg">
                    <img src="<?=$world["image"]?>">
                </div>
                <div class="worlddata">
                    <h3><?=$world["title"]?></h3>
                    <p><?=$world["body"]?></p>
                </div>
            </div>
        <?php
            endforeach;
        ?>

    </div>


</section>