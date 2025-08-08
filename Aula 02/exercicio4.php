<?php
$number1 = readline(prompt: "Escolha o numero 1: ");
$number2 = readline(prompt: "Escolha o numero 2: ");
$operação = readline(prompt: "Escolha a opereção, +,-,*,/: ");

switch ($operação) {
    case "+";
    $resultado = $number1 + $number2;
    echo "Resultao de $number1 + $number2 = $resultado \n";
    break;
    case "-";
    $resultado = $number1 - $number2;
    echo "Resultao de $number1 - $number2 = $resultado \n";
    break;
    case "*";
    $resultado = $number1 * $number2;
    echo "Resultao de $number1 * $number2 = $resultado \n";
    break;
    case "/";
    $resultado = $number1 / $number2;
    echo "Resultao de $number1 / $number2 = $resultado \n";
    break;
    default;
    echo "Operação invalida, escolhe entre essas +,-,*,/";
    
}
?>