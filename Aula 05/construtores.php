<?php
class produto{
    public $nome;
    public $categoria;
    public $fornecedor;
    public $qtde_estoque;

    public function __construct($nome, $categoria, $fornecedor, $qtde_estoque){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->fornecedor = $fornecedor;
        $this->qtde_estoque = $qtde_estoque;
    }

    public function produto_vendido(): void{


    }
}

//$bolacha = new produto("Nikito", "Doce", "Vitarella", 220);
//$bolacha1 = new produto();
$bolacha1 -> nome = "Nikito";
$bolacha1 -> categoria = "Doce";
$bolacha1 -> fornecedor = "Vitarella";
$bolacha1 -> qtde_estoque = "220";


//$feijao = new produto("Oliron", "Mantimentos", "Reserva nobre", 123);
//$feijao1 = new produto();
$feijao1 -> nome = "Oliron";
$feijao1 -> categoria = "Mantimentos";
$feijao1 -> fornecedor = "Reserva nobre";
$feijao1 -> qtde_estoque = "123";
