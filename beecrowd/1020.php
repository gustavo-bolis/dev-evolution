<?php
//1020 - Idade em Dias;
$X = fgets(STDIN);
$year = floor($X / 365);
$year2 = $X % 365;
$month = floor($year2 / 30);
$month2 = $year2 % 30;
echo "$year ano(s)\n";
echo "$month mes(es)\n";
echo "$month2 dia(s)\n";
?>