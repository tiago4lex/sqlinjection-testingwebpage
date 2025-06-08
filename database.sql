-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS test_db;
USE test_db;

-- Criação da tabela de usuários
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Inserção de dados de teste
INSERT INTO users (username, password, email) VALUES
('admin', 'senha123', 'admin@example.com'),
('usuario1', '123456', 'usuario1@example.com'),
('teste', 'teste123', 'teste@example.com');
('usuario2', 'senha456', 'emailtest@idk.com');
('gerente', 'gerente123', 'gerente@example.com');
