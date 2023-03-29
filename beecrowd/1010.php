<?php
//1010 - Cálculo Simples;
$A = fgets(STDIN);
$B = fgets(STDIN);
list($codA,$numA,$valA) = explode(" ", $A);
list($codB,$numB,$valB) = explode(" ", $B);
$result = ($numA * $valA) + ($numB * $valB);
echo "VALOR A PAGAR: R$ ". number_format($result, 2, '.','')."\n";
?>