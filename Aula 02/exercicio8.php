<?php
$numero = readline(prompt:"Digite seu numero para saber a tabuada: ");

for ($num = 1; $num <= 10; $num++) {
$tabuada = $numero * $num;
    echo "Resultado de $numero x $num = $tabuada\n";
}
    ?>