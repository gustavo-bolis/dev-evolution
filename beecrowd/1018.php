<?php
//1018 - Cédulas;
$valor = fgets(STDIN) * 100;
$valorAux = $valor / 100;
$notas = array(0, 0, 0, 0, 0, 0, 0);
while($valor != 0) {
    switch($valor) {
        case $valor >= 10000:
            $notas[0] = intval($valor / 10000);
            $valor %= 10000;
            break;
        case $valor >= 5000:
            $notas[1] = intval($valor / 5000);
            $valor %= 5000;
            break;
        case $valor >= 2000:
            $notas[2] = intval($valor / 2000);
            $valor %= 2000;
            break;
        case $valor >= 1000:
            $notas[3] = intval($valor / 1000);
            $valor %= 1000;
            break;
        case $valor >= 500:
            $notas[4] = intval($valor / 500);
            $valor %= 500;
            break;
        case $valor>=200:
            $notas[5] = intval($valor / 200);
            $valor %= 200;
            break;
        case $valor>=100:
            $notas[6] = intval($valor / 100);
            $valor %= 100;
            break;
    }
}
echo $valorAux ."\n";
echo $notas[0] . " nota(s) de R$ 100,00\n";
echo $notas[1] . " nota(s) de R$ 50,00\n";
echo $notas[2] . " nota(s) de R$ 20,00\n";
echo $notas[3] . " nota(s) de R$ 10,00\n";
echo $notas[4] . " nota(s) de R$ 5,00\n";
echo $notas[5] . " nota(s) de R$ 2,00\n";
echo $notas[6] . " nota(s) de R$ 1,00\n";
?>