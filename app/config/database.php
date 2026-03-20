<?php

namespace App\Config;

use PDO;
use PDOException;

class Database {
    // Aplicando encapsulamento com modificadores 'private'
    private $host = "localhost";
    private $db_name = "clinica_estetica";
    private $username = "root"; // Coloque o usuário do seu MySQL (geralmente root)
    private $password = "Matheuszk@123";     // Coloque a senha do seu MySQL (no XAMPP/WAMP geralmente é vazia)
    public $conn;

    // Método público para obter a conexão
    public function getConnection() {
        $this->conn = null;

        // Tratamento de erros com Try-Catch (exigência da rubrica)
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            
            // Define o modo de erro do PDO para lançar exceções
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Garante que a acentuação (UTF-8) venha correta do banco
            $this->conn->exec("set names utf8");
            
        } catch(PDOException $exception) {
            // Se der erro, captura aqui e exibe uma mensagem amigável, sem vazar erros nativos do PHP
            echo "Erro de conexão com o banco de dados. Por favor, contate o suporte.";
            // Opcional para você como desenvolvedor (comente em produção):
            // echo " Detalhe do erro: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>