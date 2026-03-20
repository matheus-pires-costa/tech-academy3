agendamentos-- Cria o banco de dados e define o uso
CREATE DATABASE clinica_estetica CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE clinica_estetica;

-- 1. Tabela Clientes
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(100)
);

-- 2. Tabela Serviços
CREATE TABLE servicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_servico VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL
);

-- 3. Tabela Agendamentos (Tabela Relacional)
CREATE TABLE agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    servico_id INT NOT NULL,
    data_hora DATETIME NOT NULL,
    status ENUM('Pendente', 'Confirmado', 'Concluido', 'Cancelado') DEFAULT 'Pendente',
    
    -- Definição das Chaves Estrangeiras (Foreign Keys)
    CONSTRAINT fk_cliente FOREIGN KEY (cliente_id) REFERENCES clientes(id) ON DELETE CASCADE,
    CONSTRAINT fk_servico FOREIGN KEY (servico_id) REFERENCES servicos(id) ON DELETE CASCADE
);