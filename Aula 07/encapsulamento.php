<!-- 1. Criação básica
Crie uma classe chamada Carro com os atributos privados marca e
modelo.
o Implemente os métodos setMarca, getMarca, setModelo e getModelo.
o Crie um objeto da classe e use os setters para atribuir valores
e os getters para exibir os dados. -->

<?php

class Carro{
    private $marca;
    private $modelo;

    public function __construct($modelo, $marca){
        $this->setMarca($marca);
        $this->setModelo($modelo);
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getMarca(): mixed{
        return $this->marca;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }
}

$carro1 = new Carro("CLA 45 AMG", "Mercedes");

echo "Carro da marca " . $carro1 ->getMarca() . "e de modelo " . $carro1 ->getModelo();

?>


<!-- 2. Pessoa com atributos
Crie uma classe Pessoa com os atributos privados nome, idade e email.
o Utilize os setters para preencher os dados de uma pessoa.
o Em seguida, use os getters para exibir as informações dessa
pessoa em formato de frase, por exemplo:
O nome é Samuel, tem 22 anos e o email é samuel@exemplo.com. -->

<?php

class Pessoa {
    private $nome;
    private $idade;
    private$email;

    public function __construct($nome, $idade, $email) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setEmail($email);
    }

    public function setNome($nome){
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade($idade){
        $this->idade = abs((int)$idade);
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setEmail($email){
        $this->email = strtolower($email);
    }

    public function getEmail(){
        return $this->email;
    }
}

$aluno1 = new Pessoa("Gabriel Furtuanto", 20, "gabrielfurtunato101@gmail.com");

echo "O nome e " . $aluno1 ->getNome() . " tem " . $aluno1 ->getIdade() . " anos, e o seu email é " . $aluno1 ->getEmail();

?>

<!-- 3. Validação em setter
Crie uma classe Aluno com os atributos privados nome e nota.
o No setNota, garanta que a nota só pode ser entre 0 e 10. Se o
valor for inválido, armazene 0.
o Teste criando alunos com notas válidas e inválidas, exibindo os
resultados com getNota(). -->

<?php 

class Aluno {
    private $nome;
    private $nota;

    public function setNota($nota): void {
        if ($nota >= 0 && $nota <= 10) {
            $this->nota = $nota;
        } else {
            echo "Nota inválida! A nota deve estar entre 0 e 10." . PHP_EOL;
        }
    }

    public function getNota(): mixed {
        return $this->nota;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function getNome(): mixed {
        return $this->nome;
    }
}

$aluno1 = new Aluno();
$aluno1->setNome("Gabriel");
$aluno1->setNota(8);

$aluno2 = new Aluno();
$aluno2->setNome("João");
$aluno2->setNota(2);

$aluno3 = new Aluno();
$aluno3->setNome("Maria");
$aluno3->setNota(10);

$aluno4 = new Aluno();
$aluno4->setNome("Lucas");
$aluno4->setNota(21);

echo $aluno1->getNome() . " tem a nota: " . ($aluno1->getNota() ?? 'Nota não atribuída') . PHP_EOL;
echo $aluno2->getNome() . " tem a nota: " . ($aluno2->getNota() ?? 'Nota não atribuída') . PHP_EOL;
echo $aluno3->getNome() . " tem a nota: " . ($aluno3->getNota() ?? 'Nota não atribuída') . PHP_EOL;
echo $aluno4->getNome() . " tem a nota: " . ($aluno4->getNota() ?? 'Nota não atribuída') . PHP_EOL;

?>

<!-- 4. Encapsulamento de Produto
Crie uma classe Produto com os atributos privados nome, preco e
estoque.
o Implemente os setters e getters.
o Faça um objeto da classe e use os setters para definir os
valores.
o Exiba com os getters uma frase como:
O produto X custa R$ Y e possui Z unidades em estoque. -->

<?php

class Produto{
    private $nome1;
    private $preco;
    private $estoque;

    public function __construct($nome1, $preco, $estoque){
        $this->setNome1($nome1);
        $this->setPreco($preco);
        $this->setEstoque($estoque);
    }

    public function setNome1($nome){
        $this->nome1 = ucwords(strtolower($nome));
    }

    public function getNome1(){
        return $this->nome1;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    public function getEstoque(){
        return $this->estoque;
    }
}

$produto1 = new Produto(nome1: 'Teclado Mecânico RGB', preco: 300, estoque: 15);
$produto2 = new Produto(nome1: 'Mouse Gamer Wireless', preco: 250, estoque: 20);
$produto3 = new Produto(nome1: 'Headset Surround 7.1', preco: 400, estoque: 8);
$produto4 = new Produto(nome1: 'Monitor 144Hz 24"', preco: 1200, estoque: 5);
$produto5 = new Produto(nome1: 'Cadeira Gamer Ergonômica', preco: 900, estoque: 3);

echo "O valor do nosso " . $produto3->getNome1() . " esta saindo por apenas " . $produto3->getPreco() . "!! E tem apenas " . $produto3->getEstoque() . " no nosso estoque";

?>

<!-- 5. Alteração de dados
Crie uma classe Funcionario com os atributos privados nome e salario.
o Crie métodos setNome, getNome, setSalario e getSalario.
o Defina os valores de um funcionário com os setters.
o Depois, altere o nome e o salário usando novamente os
setters.
o Mostre, com os getters, que os valores realmente foram
modificados. -->

<?php
class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->setNome($nome);
        $this->setSalario($salario);
    }

    public function setNome($nome) {
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome() {
        return $this->nome;
    }

    public function setSalario($salario) {
        if ($salario >= 0) {
            $this->salario = $salario;
        } else {
            echo "Salário inválido." . PHP_EOL;
        }
    }

    public function getSalario() {
        return $this->salario;
    }
}

$funcionario = new Funcionario("joão silva", 2500);

echo "Nome: " . $funcionario->getNome() . PHP_EOL;
echo "Salário: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . PHP_EOL;

$funcionario->setNome("Higor oliveira");
$funcionario->setSalario(3200);

echo "Nome alterado: " . $funcionario->getNome() . PHP_EOL;
echo "Salário alterado: R$ " . number_format($funcionario->getSalario(), 2, ',', '.') . PHP_EOL;

?>
