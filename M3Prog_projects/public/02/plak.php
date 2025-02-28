<?php
$standaardString = 'hello world <br>';
echo $standaardString;


$extraString= "extraworld <br>";
echo $extraString;
?>
<?php
$voornaam = "luigi";
$achternaam = "mario";
$fullname = $voornaam . " " . $achternaam;
echo $fullname;
$fullname = $fullname . " " . "<br>";
echo $fullname;
$testString = "$voornaam zegt hallo!";
echo $testString;
?>
<?php
$naam = "Yoshi";
$ondertekentDoor = "directeur bowser";

echo "Beste $naam,<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze Goomba's vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentDoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>";
?>