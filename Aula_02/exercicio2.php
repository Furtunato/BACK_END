<?php

$nota = readline(prompt:"Digite sua nota: ");
if ($nota >= 9) {
    echo "excelente";
} elseif ($nota >= 7) {
    echo "bom";
} else {
    echo "reprovado";
}
?>