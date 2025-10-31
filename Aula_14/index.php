    <?php

    use Aula_14\ProdutoDAO;

    require_once "produto.php";
    require_once "produtoDAO.php";

    $dao = new ProdutoDAO();

    // CREATE
    $dao->criarProduto( new Produto( 1, 'Tomate', "R$7,00"));
    $dao->criarProduto( new Produto( 2, "Maça", "R$5,00"));
    $dao->criarProduto( new Produto( 3, "Queijo brie", "R$15,00"));
    $dao->criarProduto( new Produto( 4, "Iogurte Grego", "R$10,00"));
    $dao->criarProduto( new Produto( 5, "Guarana Jesus", "R$16,00"));
    $dao->criarProduto( new Produto( 6, "Bolacha Bono", "R$7,00"));
    $dao->criarProduto( new Produto( 7, "Desifetante Urca", "R$17,00"));
    $dao->criarProduto( new Produto( 8, "Prestorbarba Bic", "R$4,00"));

    // READ
    echo "\nListagem Inicial: \n";
    foreach ($dao->lerProduto() as $produto) {
        echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()} \n";
    }

    // UPTADE
    $dao->atualizarProduto(codigo: 7, novoNome: "Desifetante Barbarex", novoPreco: "R$16,00");
    $dao->atualizarProduto(codigo: 8, novoNome: "Prestorbarba Bic", novoPreco: "R$5,00");
    $dao->atualizarProduto(codigo: 6, novoNome: "Bolacha Bono", novoPreco: "R$10,00");

    echo "\nApós Atualização:\n";
    foreach ($dao->lerProduto() as $produto) {
        echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()} \n";
    }

    // DELETE
    $dao->excluirProduto(codigo: 1);
    $dao->excluirProduto(codigo: 2);

    echo "\nApós Exclusão:\n";
    foreach ($dao->lerProduto() as $produto) {
        echo "{$produto->getCodigo()} - {$produto->getNome()} - {$produto->getPreco()} \n";
    }

    ?>