<?php
$stad = "Zandaam";
$weer = "bewolkt";
$aantal_mensen = 821752;
$temperatuur = 12.3;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weer in de Stad</title>
</head>
<body>
    <h1>Weer in de stad</h1>
    <p>In de stad <?php echo $stad; ?> is het momenteel <?php echo $weer; ?>. Er zijn ongeveer <?php echo $aantal_mensen; ?> mensen in de stad. De temperatuur is <?php echo $temperatuur; ?> graden Celsius.</p>
</body>
</html>