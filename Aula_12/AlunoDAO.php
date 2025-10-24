<?php

class AlunoDAO // "DAO --> "Data Acess Object"
{
    private $alunos = []; // Array para armazenamento temporario dos objetos e seus atributos, antes de mandar para o banco de dados. Foi criado inicialmente vazios [];

    private $arquivo = "alunos.json"; //Crie o arquivo de json para que os dados sejam armazenados
    //Contrutor AlunoDAO --> carrega os dados do arquivo ao iniciar a aplicação
    public function __construct()
    {
        if (file_exists(filename: $this->arquivo)) {
            // Le o conteudo do arquivo caso ele ja existe
            $conteudo = file_get_contents(filename: $this->arquivo); // Atribui as informações do arquivo existente a variavel $conteudo

            $dados = json_decode(json: $conteudo, associative: true); // Converte um JSON em array associativo

            if ($dados) {
                foreach ($dados as $id => $info) {
                    $this->alunos[$id] = new Aluno(id: $info['id'], nome: $info['nome'], curso: $info['curso']);
                }
            }
        }
    }

    private function salvarEmArquivo(): void{
        $dados = [];

        // Transforma os objetos em arrays convencionais
        foreach ($this->alunos as $id => $aluno){
            $dados[$id]=[
                'id' => $aluno->getId(),
                'nome' => $aluno->getNome(),
                'curso' => $aluno->getCurso(),
            ];
        }

        // Converte para JSON formatado e grava o arquivo
         file_put_contents(filename: $this->arquivo, data: json_encode
         (value: $dados, flags: JSON_PRETTY_PRINT));
    }
    // CREATE
    public function criarAluno(Aluno $aluno)
    { // Metodo create --> para criar um novo objeto;
        $this->alunos[$aluno->getId()] = $aluno;
        $this->salvarEmArquivo();
    }
    // READ
    public function lerAluno()
    {  // Metodo Read --> para ler informações de um objeto ja criado;
        return $this->alunos;
    }
    // UPDATE
    public function atualizarAluno($id, $novoNome, $novoCurso)
    { // Metodo uptade --> para atualizar informações de um objeto ja existente;
        if (isset($this->alunos[$id])) {
            $this->alunos[$id]->setNome($novoNome);
            $this->alunos[$id]->setCurso($novoCurso);
        }
         $this->salvarEmArquivo();
    }
    public function excluirAluno($id)
    { // Metod delete --> para excluir um objeto
        unset($this->alunos[$id]);
        $this->salvarEmArquivo();
    }
}
