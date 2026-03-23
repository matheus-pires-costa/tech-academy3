<?php
namespace App\Models;

use App\Config\Database;
use PDO;

class Servico {
    private $conn;
    private $table_name = "servicos";

    // Atributos privados (Encapsulamento)
    private $id;
    private $nome_servico;
    private $preco;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Método que substitui a leitura do JSON
    public function listarTodos() {
        $query = "SELECT id, nome_servico, descricao, preco FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}