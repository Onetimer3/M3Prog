<?php
    $title = "Mijn website";
    $datum = date('d-m-Y');
    $tijd = date("H:i");
    $favouritegame = "Dark souls 3";
    $mooistgetal = 22;
    $favouriteShow = "Supernatural";
    $favouriteStad = "New Mexico";

    echo $title;
    echo $datum;
    echo $tijd;
    echo $favouritegame;
    echo $mooistgetal;
    
    
?>


<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum?>, en de tijd is <?php echo $tijd?> uur.
        <p><h2>mooisteGetal</h2><?= $mooistgetal?></p>
        <p><h2>favouriteStad</h2><?= $favouriteStad?></p>
        <p><h2>favorieteShow</h2><?= $favouriteShow?></p>
        
        <p><h2>Mijn favoriete game</h2><?php echo $favouritegame ;?></p>
    </body>
</html>