<?php 

class Connection {

    private static $instance;
    private static function getInstance(){
        if (!self::$instance) {

            try {
                // AJUSTE SEU USUARIO E SENHA AQUI:
                $host = 'localhost';
                $dbname = 'projeto_bebeidas';
                $user = 'root';
                $pass = '0719';

                // CONECTA AO MYQSL
                self::$instance = new PDO(
                    dsn: "mysql:host=$host;charset=utf8",
                    username: $user,
                    password: $pass
                );
                self::$instance->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);

                // CRIA O BANCO DE DADOS SE NAO EXISTIR
                self::$instance->exec(statement: "CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
            
            } catch (PDOException $e) {
                die("Erro ao conectar ao MySQL: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}