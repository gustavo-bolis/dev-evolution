<?php
//1014 - Consumo;
$X = fgets(STDIN);
$Y = fgets(STDIN);
$result = $X / $Y;
echo number_format($result, 3, '.','')." km/l\n";
?>