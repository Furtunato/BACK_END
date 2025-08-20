<?php

date_default_timezone_set('America/Sao_Paulo');
$repeticoes = 5;

for ($i = 0; $i < $repeticoes; $i++) {
    echo "Escolha uma opção:\n";
    echo "1 - Olá\n";
    echo "2 - Data Atual\n";
    echo "3 - Sair\n";

    $opcao = readline("Digite o número da opção: ");

    switch ($opcao) {
        case 1:
            echo "Olá, Gabriel!\n";
            break;
        case 2:
            echo "Data Atual: " . date('d/m/Y H:i:s') . "\n";
            break;
        case 3:
            echo "Saindo do programa...\n";
            break 2;
        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }

    echo "\n";
}

?>
