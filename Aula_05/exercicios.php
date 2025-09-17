<?php
// Crie uma classe "Produtos" com ao menos 4 atributos sem a utilização de um construtor

class Produtos{
    public $nome;
    public $categoria;
    public $preco;
    public $marca;
    

}

// Crie ao menos 3 objetos para esta classe
$objeto1 = new Produtos();
$objeto1-> nome = "Controle PS5";
$objeto1-> categoria = "Controle";
$objeto1-> preco = 450;
$objeto1-> marca = "Sony";

$objeto2 = new Produtos();
$objeto2-> nome = "Nike Revolution 7";
$objeto2-> categoria = "Tenis";
$objeto2-> preco = 300;
$objeto2-> marca = "Nike";

$objeto3 = new Produtos();
$objeto3-> nome = "Logitech Superlight PRO X";
$objeto3-> categoria = "Mouse";
$objeto3-> preco = 800;
$objeto3-> marca = "Logitech";

?>