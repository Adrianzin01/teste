-- Criar o banco de dados
CREATE DATABASE sistema_login;

-- Usar o banco de dados criado
USE sistema_login;

-- Criar a tabela 'usuarios'
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Identificador único
    email VARCHAR(100) NOT NULL UNIQUE, -- E-mail do usuário (deve ser único)
    password VARCHAR(255) NOT NULL      -- Senha (armazenada de forma criptografada)
);

 SELECT * FROM usuarios;
