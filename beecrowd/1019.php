<?php
//1019 - Conversão de Tempo;
$X = fgets(STDIN);
$time = sprintf('%0d:%0d:%0d', ($X / 3600),($X / 60 % 60), $X % 60);
echo "$time\n";
?>