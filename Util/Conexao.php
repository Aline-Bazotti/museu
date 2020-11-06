<?php

final class Conexao
{
    private static $instance = null;
    private function __construct(){}
    private function __clone(){}


    // método de conexão
    public static function conectar() {
        if (!isset(self::$instance)) {
            // Use a Data source name (DSN) to connect to Cloud SQL through the proxy
            $dsn = 'pgsql:host=ec2-34-237-236-32.compute-1.amazonaws.com;port=5432;dbname=du7gl8gp9qjkd';
            // Instantiate your DB using the DSN, username, and password
            $dbUser = 'ucorpjsictysqj';
            $dbPass = 'bd5ce8029cb3933e54a4e7bbb184cf7280e526c80b38f20bdc5e80e45f60bb9a';
            // conexão não existe, então cria
            try {
                self::$instance = new PDO($dsn, $dbUser, $dbPass);
                self::$instance->setAttribute(
                    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
                );
            } catch(PDOException $e) {
                echo "Erro na conexão: " .
                    $e->getMessage();
            }
        }

        return self::$instance;
    }
}