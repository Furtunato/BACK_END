<?php

class Connection {

    private static $instance = null;
        public static function getInstance(){
            
        if (!self::$instance) {
            try {
                // AJUSTE SEU USUARIO E SENHA AQUI:
                $host = 'localhost';
                $dbname = 'bebidas';  // Banco de dados a ser utilizado
                $user = 'root';
                $pass = '0719';

                // CONECTA AO MYSQL
                self::$instance = new PDO(
                    "mysql:host=$host;dbname=$dbname;charset=utf8",  // Agora conecta ao banco
                    $user,
                    $pass
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Garante que erros sejam lançados como exceções

            } catch (PDOException $e) {
                die("Erro ao conectar ao MySQL: " . $e->getMessage());  // Exibe a mensagem detalhada
            }
        }
        return self::$instance;
    }
}

?>
