<?php
class cachorro {
    public $nome;
    public $idade;
    public $raca;
    public $castrado;
    public $sexo;

    public function __construct($nome, $idade, $raca, $castrado, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
        $this->castrado = $castrado;
        $this->sexo = $sexo;
    }
}
$cachorro1 = new cachorro(nome: "Maddox", idade: 3,raca: "Rottweiller", castrado: true, sexo: "Macho");
$cachorro2 = new cachorro(nome: "Zeus", idade: 7,raca: "Doberman", castrado: true, sexo: "Macho");
$cachorro3 = new cachorro(nome: "Luna", idade: 4,raca: "Golden Retriver", castrado: true, sexo: "Femea");
$cachorro4 = new cachorro(nome: "Lola", idade: 13,raca: "Husky", castrado: true, sexo: "Femea");
$cachorro5 = new cachorro(nome: "Lili", idade: 9,raca: "Poodle", castrado: false, sexo: "Femea");
$cachorro6 = new cachorro(nome: "Kat", idade: 11,raca: "Chow Chow", castrado: true, sexo: "Femea");
$cachorro7 = new cachorro(nome: "Rex", idade: 7,raca: "Pastor Alemão", castrado: true, sexo: "Femea");
$cachorro8 = new cachorro(nome: "Scherrer", idade: 8,raca: "Chihuahua", castrado: true, sexo: "Macho");
$cachorro9 = new cachorro(nome: "Pingo", idade: 3,raca: "Pinscher", castrado: true, sexo: "Macho");
$cachorro10 = new cachorro(nome: "Caramelo", idade: 3,raca: "Vira-lata", castrado: false, sexo: "Macho");
 
?>

<?php
class Usuario {
    public $nome;
    public $cpf;
    public $sexo;
    public $email;
    public $estado_civil;
    public $cidade;
    public $estado;
    public $endereco;
    public $cep;

    public function __construct($nome, $cpf, $sexo, $email, $estado_civil, $cidade, $estado, $endereco, $cep) {
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->sexo = $sexo;
    $this->email = $email;
    $this->estado_civil = $estado_civil;
    $this->cidade = $cidade;
    $this->estado = $estado;
    $this->endereco = $endereco;
    $this->cep = $cep;
    }
}
$usuario1 = new Usuario(
    nome: "Josenildo Afonso Souza",
    cpf: "100.200.300-40",
    sexo: "Masculino",
    email: "josenewdo.souza@gmail.com",
    estado_civil: "Casado",
    cidade: "Xique-Xique",
    estado: "BH",
    endereco: "Rua da amizade, 99",
    cep: "40123-98"
);

$usuario2 = new Usuario(
    nome: "Valentina Passos Scherrer",
    cpf: "070.070.060-70",
    sexo: "Feminino",
    email: "scherrer.valen@outlook.com",
    estado_civil: "Divorciada",
    cidade: "Iracemápolis",
    estado: "SP",
    endereco: "Avenida da saudade, 1942",
    cep: "23456-24"
);

$usuario3 = new Usuario(
    nome: "Claudio Braz Nepumoceno",
    cpf: "575.575.242-32",
    sexo: "Masculino",
    email: "Clauclau.nepumoceno@gmail.com",
    estado_civil: "Solteiro",
    cidade: "Piripiri",
    estado: "PI",
    endereco: "Estrada 3, 33",
    cep: "12345-99"
);