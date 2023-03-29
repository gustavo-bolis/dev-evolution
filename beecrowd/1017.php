<?php
//1017 - Gasto de Combustível;
$X = fgets(STDIN);
$Y = fgets(STDIN);
$secs = $X * 60 * 60;
$kms = $Y / 3.6;
$total = (($secs * $kms) / 1000) / 12;
echo number_format($total, 3, '.','')."\n";
?>