<?php
//1009 - Salário com Bônus;
$A = fgets(STDIN);
$B = fgets(STDIN);
$C = fgets(STDIN);
$result = $C * 0.15 + $B;
echo "TOTAL = R$ ". number_format($result, 2, '.','')."\n";
?>