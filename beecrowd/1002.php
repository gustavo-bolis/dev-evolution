<?php
//1002 - Área do Círculo;
$raio = fgets(STDIN);
define('n','3.14159');
$diff = pow($raio,2);
$result = n * $diff;
echo "A=". number_format($result, 4, '.','')."\n";
?>