<?php

// Modificadores de acesso:
// Existem 3 tipos: Public, Private e Protected
// Public NomeDoAtributo: métodos e atributos públicos

// Private NomeDoAtributo: métodos e atributos privados para acesso somente dentro da classe. Utilizamos os getters e setters para acessa-los.

// Protected NomeDoAtributo: métodos e atributos protegidos para acesso somente da classes e de suas classes filhas.

// Pacotes (packages): sintaxe logo no início do código, que atribui de onde os arquivos pertencem, ou seja, o caminho da pasta em que ele está contido. Exemplo:

// namespace Aula 09;

//Caso tenham mais arquivos que formam o BackEnd de uma página WEB e possuem a mesma raiz, o namespace será o mesmo.

namespace Aula_09;

// Interfaces: É um recurso no qual garante que obrigatoriamente a classe tenho que construir algum método previamente determinado. Funciona como uma promessa ou contrato. Exemplo: Configuramos uma interface "Pagamento" que faz com que qualquer classe que a implemente, tenha que obrigatoriamente construir o método "pagar".

interface Pagamento { // Interface de contrato de pagamento
    public function pagar($valor); // Determinando o método que terá que ser criado 
}

class CartaoDeCredito implements Pagamento { // Criando classe CartaoDeCredito com implementação da Interface Pagamento
    public function pagar($valor){ // Criando o método obrigatório "pagar"
        echo "Pagamento realizado com cartão de crédito, valor: $valor\n";
    }
}

class PIX implements Pagamento { // Criando classe PIX com implementação da Interface Pagamento
    public function pagar($valor){ // Criando o método obrigatório "pagar"
        echo "Pagamento realizado via PIX, valor: $valor\n";
    }
}

class DinheiroEspecie implements Pagamento{
    // Crie o método obrigatório, contido na interface.
    public function pagar($valor){
        $valor -= $valor * 0.1;
        echo "Pagamento realizado com dinheiro em espécie. Desconto de 10% aplicado. Valor: $valor\n";
    }
    // OBS: Nessa forma de pagamento, haverá um desconto de 10% do valor devida a facilidade de lavar dinheiro. Calcule e exiba este desconto
}

// Testando interfaces: deve-se criar objetos associados a cada classe que será testada. Exemplo:

$cred = new CartaoDeCredito(); // Criando objeto

$cred->pagar(250);

// Neste exemplo criamos um objeto chamado "$cred" para a classe "CartaodeCredito" e depois chamamos o método "pagar" para este objeto, passando R$250 como parâmetro.


// Crie objetos para as classes "PIX" e "DinheiroEspecie" e teste passando como parâmetro os valores R$65 e R$320 respectivamente.

$p = new PIX();
$din = new DinheiroEspecie();

$p->pagar(65);
$din->pagar(320);




// 1. Criando uma interface simples

// Crie uma interface chamada Forma que obrigue qualquer classe a ter um método calcularArea().
// Depois, crie as classes Quadrado e Circulo que implementam a interface.

// Area quadrado = l * l
// Area Circulo =  π * r²



interface Forma {
    public function CalcularArea($valor, $valor2);
}
// Quadrado deve receber o lado e calcular a área.
class Quadrado implements Forma{
    public function CalcularArea($lado, $a){
        $area = $lado*$lado;
        return $area;
    }
}
// Circulo deve receber o raio e calcular a área.
class Circulo implements Forma {
    public function CalcularArea($raio, $a){
        $area = pi()*($raio*$raio);
        return $area;
    }
}
$square = new Quadrado ();
$circle = new Circulo();

echo "\nÁrea do Quadrado: ".$square->CalcularArea(readline("\nDigite a medida do lado do quadrado: "), 0);

echo "\nÁrea do Círculo: ".$circle->CalcularArea(readline("\nDigite a medida do raio do círculo: "), 0);

// Crie a classe Pentagono, e calcule a área do mesmo.

// Crie a classe hexagono, e calcule a área do mesmo.



echo number_format(3.14159265, 2);
















class Pentagono implements Forma {
    public function CalcularArea($lado, $apotema){
        $area = (($lado*5)*$apotema)/2;
    }
}

$pent = new Pentagono();

echo "\nÁrea do Pentágono: ".$pent->CalcularArea(readline("\nDigite a medida do lado do pentágono: "), readline("\nDigite a medida da apotema do pentágono: "));