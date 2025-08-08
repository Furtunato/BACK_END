<?php

echo "Boa tarde!\n";
$nome1 = readline(prompt: "Digite o nome do aluno: ");
$nota3 = readline(prompt: "Digite a 1° nota do aluno: ");
$nota4 = readline(prompt: "Digite a 2° nota do aluno: ");
$presenca1 = readline(prompt: "Digite a presença do aluno: ");
$media1 = ($nota3 + $nota4) / 2;

if (($media1 >= 7 && $presenca1 >= 75)) {
    echo "Aluno aprovado com média: $media1 e presença: $presenca1%\n";
} else {
    echo "Aluno reprovado com média: $media1\n";
}
?>