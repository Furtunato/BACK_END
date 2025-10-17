<?php

require_once "CRUD.php";
require_once "AlunoDAO.php";

// Objeto da classe AlunoDAO para gerenciar os métodos do CRUD
$dao = new AlunoDAO();

// CREATE
$dao->criarAluno(new aluno(1, 'Maria', 'Design'));
$dao->criarAluno(new aluno(2, 'Gabriel', 'Moda'));
$dao->criarAluno(new aluno(3, 'Eduardo', 'Manicure'));
$dao->criarAluno(new aluno(4, 'Geyse', 'Estética'));
$dao->criarAluno(new aluno(5, 'Joab', 'Fotografia'));
$dao->criarAluno(new aluno(6, 'Bernardo', 'Arquitetura'));
$dao->criarAluno(new aluno(7, 'Amanda', 'Administração'));
$dao->criarAluno(new aluno(8, 'Oliver', 'Mecânica'));

// READ
echo "\nListagem Inicial:\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}

// UPTADE
// Alterar nome da Geyse para Clotilde
$dao->atualizarAluno(4, 'Clotilde', 'Estética');  
// Alterar nome do Joab para Joana
$dao->atualizarAluno(5, 'Joana', 'Fotografia');  
// Alterar curso do Bernardo para Dev
$dao->atualizarAluno(6, 'Bernardo', 'Dev');      
// Alterar curso da Amanda para Logística
$dao->atualizarAluno(7, 'Amanda', 'Logística');  
// Alterar curso de Oliver para Elétrica
$dao->atualizarAluno(8, 'Oliver', 'Elétrica');   

echo "\nApós Atualização:\n";
foreach ($dao->lerAluno() as $aluno) {
    echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}

// DELETE
$dao->excluirAluno(2); // Excluindo o aluno com ID 2 (Gabriel)

echo "\nApós exclusão:\n";
foreach ($dao->lerAluno() as $aluno) {
   echo "{$aluno->getId()} - {$aluno->getNome()} - {$aluno->getCurso()} \n";
}

?>
