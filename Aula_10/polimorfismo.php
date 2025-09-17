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
?>
