<?php
// Exercício 5 – Calculadora com Sobrecarga Simulada
class Calculadora {
    public function somar($a, $b = 0, $c = 0) {
        return $a + $b + $c;
    }
}

$calc = new Calculadora();
echo $calc->somar(2, 3); 
echo "\n";
echo $calc->somar(2, 3, 4); 
?>
