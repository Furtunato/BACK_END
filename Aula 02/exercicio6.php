<?php
$numero_inicial = (int) readline(prompt: "Digite seu numero inicial: ");

for($i = $numero_inicial; $i >= 1; $i--) {
    echo "$i\n";
}

echo "Contagem finalizada!\n"
?>