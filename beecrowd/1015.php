<?php
//1015 - Distância Entre Dois Pontos;
$X = fgets(STDIN);
$Y = fgets(STDIN);
list($x1,$y1) = explode(" ", $X);
list($x2,$y2) = explode(" ", $Y);
$result = (pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
$resultSqrt = sqrt($result);
echo number_format($resultSqrt, 4, '.','')."\n";
?>