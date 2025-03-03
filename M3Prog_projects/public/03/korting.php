<?php
$totaalBesteld = 100;
$verzendKosten = 3.50;
$korting = 0;
$cadeautje=false;
$cadeautjeWaarde = 40;



$totaal = $totaalBesteld - ($korting * $totaalBesteld) + ($verzendKosten);


echo "Totaal van de bestelde artiekelen $totaalBesteld</br>";
echo "Verzendkosten met verzendkosten wordt het $totaal</br>";


echo "U krijgt een cadeautje ter waarde van 10 euro</br>";

if($totaalBesteld >= 100){
echo "Als dat waar is zet $verzendKosten op 0</br>";
}
if($totaalBesteld >= 250){
echo "Als dat waar is krijgt u $korting 0.05%</br>";
}
if($totaalBesteld >= 500){
$cadeautje = true; 
echo "U krijgt ook een cadeautje ter waarde van 10 euro</br>";
}
if($totaalBesteld >= 1000){
echo "Als dat waar is krijgt u $korting 7.5%</br>";
echo "Als dat waar is krijgt u $cadeautjeWaarde</br>";
}

?>  