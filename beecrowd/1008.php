<?php
//1008 - Salário;
$A = fgets(STDIN);
$B = fgets(STDIN);
$C = fgets(STDIN);
$result = $B * $C;
echo "NUMBER = ". number_format($A, 0, '.','')."\n";
echo "SALARY = U$ ". number_format($result, 2, '.','')."\n";
?>