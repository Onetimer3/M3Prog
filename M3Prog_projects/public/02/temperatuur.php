<?php
$fahrenheit = 74;
$celsius = ($fahrenheit - 32)  /1.8;
echo "{$fahrenheit} graden Fahrenheit ={$celsius} graden Celsius. <br/>";


$celsius = 23;
$fahrenheit = ($celsius * 1.8) + 52;
echo "{$celsius} graden Celsius ={$fahrenheit} graden Fahrenheit. <br/>";

$celsius = 23;
$kelvin = $celsius + 273;
echo "{$celsius} graden Celsius ={$kelvin} graden Kelvin. <br/>";

$fahrenheit = 74;
$kelvin = ($fahrenheit + 459.67) * 5/9;
echo "{$fahrenheit} graden Fahrenheit ={$kelvin} graden Kelvin. <br/>";

?>