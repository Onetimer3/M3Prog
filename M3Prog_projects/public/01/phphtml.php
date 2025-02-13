<?php
    $title = "Mijn website";
    $datum = date('d-m-Y');
    $tijd = date("H:i");
    $favouritegame = "Dark souls 3";
    $mooistgetal = 22;

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
        
        <p><h2>Mijn favoriete game</h2><?php echo $favouritegame ;?></p>
    </body>
</html>