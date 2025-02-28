<?php
$titel = "Een php html voorbeeld pagina";
$image = "https://static.wikia.nocookie.net/dragonball/images/5/53/Fused_zamasu_colored.png/revision/latest/scale-to-width/360?cb=20210908191906";
$altText = "Een afbeelding van een voorbeeld";
$auteur = "Illia";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titel; ?></title>
</head>
<body>
    
    <h1><?php echo $titel; ?></h1>

   
    <img src="<?php echo $image; ?>" alt="<?php echo $altText; ?>" />
    
    <section>
        <h2>Auteur: <?= $auteur; ?></h2>
    </section>

</body>
</html>