<?php

$clima = readline(prompt:"Digite o clima: ");
if ($clima < 15) {
    echo "frio";
} elseif ($clima >= 15 && $clima <= 25) {
    echo "agradavel";
} else {
    echo "quente";
}
?>