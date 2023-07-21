create database brigaderia;

use brigaderia;

CREATE TABLE administradores (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  celular VARCHAR(20) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  cargo VARCHAR(255) NOT NULL
);

CREATE TABLE usuarios (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  celular VARCHAR(20) NOT NULL,
  telefone VARCHAR(20) NOT NULL
);
