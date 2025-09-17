<?php
// Exercício 2 – Animais e Sons
class Animal {
    public function fazerSom() {
        return '';
    }
}

class Cachorro extends Animal {
    public function fazerSom() {
        return "Au au!";
    }
}

class Gato extends Animal {
    public function fazerSom() {
        return "Miau!";
    }
}

class Vaca extends Animal {
    public function fazerSom() {
        return "Muuu!";
    }
}

?>
