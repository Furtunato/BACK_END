<?php

Class AlunoDAO{
    private $alunos = []; // Array para armazenamento temporario dos objetos e seus atributos, antes de mandar para o banco de dados. Foi criado inicialmente vazios [];
    public function criarAluno(Aluno $aluno){ // Metodo create --> para criar um novo objeto;
        $this->alunos[$aluno-> getId()] = $aluno;
    }
    public function lerAluno(){  // Metodo Read --> para ler informações de um objeto ja criado;
        return $this->alunos;       
    }
    public function atualizarAluno($id, $novoNome, $novoCurso){ // Metodo uptade --> para atualizar informações de um objeto ja existente;
        if (isset($this->alunos[$id])) {
            $this->alunos[$id]->setNome($novoNome);
            $this->alunos[$id]->setCurso($novoCurso);
        }
    }
    public function excluirAluno($id){ // Metod delete --> para excluir um objeto
        unset($this->alunos[$id]);
    }

}