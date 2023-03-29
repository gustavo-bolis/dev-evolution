<?php
//1011 - Esfera;
$A = fgets(STDIN);
define('pi','3.14159');
$raio = pow($A,3);
$result = (4 / 3) * pi * $raio;
echo "VOLUME = ". number_format($result, 3, '.','')."\n";
?>