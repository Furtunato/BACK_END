<?php
namespace Aula_10;
// Polimorfismo:


// Crie um metodo chamado "move()", aonde ele responde de vairas formas diferentes, para as sub-classes: Carro, avião, Barco e Elevador. Dica utilize interfaces:

// O termo

interface Veiculo {
    public function mover();
}

class Carro implements veiculo {
    public $nome;
    public function mover(){
    echo "O carro {$this->nome} esta andando";
    }
}

class Aviao implements veiculo {
    public $nome;
    public function mover(){
    echo "O Avião {$this->nome} esta voando";
    }
}

class Barco implements veiculo {
    public $nome;
    public function mover(){
    echo "O Barco {$this->nome} esta navegando";
    }
}

$carro1 = new Carro ();
$carro1->nome = "Astra";

$carro2 = new Carro ();
$carro2->nome = "Mercedes";


$aviao1 = new Aviao ();
$aviao1-> nome = "B2-Spirit";

$aviao2 = new Aviao ();
$aviao2-> nome = "F14";
?>
