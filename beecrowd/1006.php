<?php
//1006 - Média 2;
$A = fgets(STDIN) * 2;
$B = fgets(STDIN) * 3;
$C = fgets(STDIN) * 5;
$result = ($A + $B + $C) / 10;
echo "MEDIA = ". number_format($result, 1, '.','')."\n";
?>