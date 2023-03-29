<?php
//1012 - Área;
define('Pi','3.14159');
$X = fgets(STDIN);
list($numA,$numB,$numC) = explode(" ", $X);
$triReta = ($numA * $numC) / 2;
$circulo = Pi * pow($numC,2);
$trapezio = (($numA + $numB) / 2) * $numC;
$quadrado = pow($numB,2);
$retangulo = $numA * $numB;
echo "TRIANGULO: ". number_format($triReta, 3, '.','')."\n";
echo "CIRCULO: ". number_format($circulo, 3, '.','')."\n";
echo "TRAPEZIO: ". number_format($trapezio, 3, '.','')."\n";
echo "QUADRADO: ". number_format($quadrado, 3, '.','')."\n";
echo "RETANGULO: ". number_format($retangulo, 3, '.','')."\n";
?>