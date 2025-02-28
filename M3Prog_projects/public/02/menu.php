<?php
$typeGerecht = 'Hoofdgerecht';
$naamGerecht = 'Kung Pao Chicken';
$prijs = 14.50;
$beschrijving = 'tender chicken, crunchy peanuts, and vibrant veggies in a bold, savory sauce';
$ingredientenLijst = 'soy sauce, hoisin sauce, sesame oil, cornstarch, chicken, peanuts, vegetables, chicken tenders';
$allergenenLijst = 'soy, peanuts, sesame, corn';

$menuItem = "Gerecht type: $typeGerecht<br><br>
$naamGerecht €$prijs<br><br>
$beschrijving<br>
Ingrediëntenlijst:<br>
$ingredientenLijst<br><br>
Bent u allergisch? Bekijk dan hieronder de allergeNEnen:<br>
$allergenenLijst<br>";

echo $menuItem;
?>