<?php

$idade = readline(prompt:"Digite sua idade: ");
if ($idade >= 18) {
    echo "Você pode entrar com essa idade de $idade anos";
} else {
    echo "Com essa idade de $idade anos voce nao pode entrar";
}
?>