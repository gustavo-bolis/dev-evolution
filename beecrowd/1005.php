<?php
//1005 - Média 1;
$A = fgets(STDIN) * 3.5;
$B = fgets(STDIN) * 7.5;
$result = ($A + $B) / 11;
echo "MEDIA = ". number_format($result, 5, '.','')."\n";
?>