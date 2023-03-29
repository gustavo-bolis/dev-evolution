<?php
//1013 - O Maior;
$A = fgets(STDIN);
list($numA,$numB,$numC) = explode(" ", $A);
$maior = ($numA + $numB + abs($numA - $numB)) / 2;
$maiorB = ($maior + $numC + abs($maior - $numC)) / 2;
echo "$maiorB eh o maior\n";
?>