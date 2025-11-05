<?php
namespace Model;

require_once __DIR__ . '/bebida.php';

use Model\Bebida;

class BebidaDAO {
    private $bebidas = [];
    private $arquivo = __DIR__ . "/../bebidas.json";

    public function __construct() {
        // Força o PHP a verificar novamente o estado do arquivo
        clearstatcache(true, $this->arquivo);

        if (file_exists($this->arquivo)) {
            $conteudo = file_get_contents($this->arquivo);
            $dados = json_decode($conteudo, true);

            if ($dados) {
                foreach ($dados as $nome => $info) {
                    $this->bebidas[$nome] = new Bebida(
                        $info['nome'],
                        $info['categoria'],
                        $info['volume'],
                        $info['valor'],
                        $info['qtde']
                    );
                }
            }
        }
    }



    private function salvarEmArquivo() {
        $dados = [];
        foreach ($this->bebidas as $nome => $bebida) {
            $dados[$nome] = [
                'nome' => $bebida->getNome(),
                'categoria' => $bebida->getCategoria(),
                'volume' => $bebida->getVolume(),
                'valor' => $bebida->getValor(),
                'qtde' => $bebida->getQtde(),
            ];
        }
        file_put_contents($this->arquivo, json_encode($dados, JSON_PRETTY_PRINT));
    }

    public function criarBebida(Bebida $bebida) {
        $this->bebidas[$bebida->getNome()] = $bebida;
        $this->salvarEmArquivo();
    }

    public function lerBebidas() {
        return $this->bebidas;
    }

    public function atualizarBebida($nome, $valor, $qtde) {
        if (isset($this->bebidas[$nome])) {
            $this->bebidas[$nome]->setValor($valor);
            $this->bebidas[$nome]->setQtde($qtde);
            $this->salvarEmArquivo();
        }
    }

    public function excluirBebida($nome) {
        if (isset($this->bebidas[$nome])) {
            unset($this->bebidas[$nome]);
            $this->salvarEmArquivo();
        }
    }
}
?>
