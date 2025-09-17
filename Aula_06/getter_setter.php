<?php
class Pessoa {
    private $nome;
    private $cpf;
    private $celular;
    private $idade;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $celular, $idade, $email, $senha)
    {
        $this-> setNome($nome);
        $this-> setCpf($cpf);
        $this-> setcelular($celular);
        $this-> setIdade($idade);
        $this-> email = $email;
        $this-> senha = $senha;
    }

    public function setNome($nome): void{
        $this->nome= ucwords(string: strtolower(string: $nome));
    }

    public function getNome(): mixed{
        return $this->nome;
    }

    public function setCpf($cpf): void{
        $this->cpf = preg_replace(pattern: '/\D/', replacement: '', subject: $cpf);
    }

    public function getCpf(): mixed{
        return $this->cpf;
    }

    public function setcelular($celular): void{
        $this->celular = preg_replace(pattern: '/\D/', replacement: '', subject: $celular);
    }

    public function getcelular(): mixed{
        return $this->celular;
    }

    public function setIdade($idade){
        $this->idade = abs((int)$idade);
    }
}

$aluno1 = new Pessoa("GaBrIeL", "532.293.687-27", "(19) 99760-4590", -20, "gabrielfurtunato101@gmail.com", "joaopessoa");

echo $aluno1 -> getNome();

?>