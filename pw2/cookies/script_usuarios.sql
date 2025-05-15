CREATE DATABASE usuarios;
USE usuarios;
CREATE TABLE usuarios (
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(30) NOT NULL,
    cidade VARCHAR(30) NOT NULL,
    estado VARCHAR(2) NOT NULL,
    PRIMARY KEY(email)
);

INSERT INTO usuarios (email, senha, nome, cidade, estado)
VALUES ('joao@usp.br', '123', 'João Silva', 'São Paulo', 'SP');

DESCRIBE usuarios;