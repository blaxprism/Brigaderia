create database brigaderia;

use brigaderia;

CREATE TABLE administradores (
  id_administrador INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  celular VARCHAR(20) NOT NULL,
  telefone VARCHAR(20) NOT NULL,
  cargo VARCHAR(255) NOT NULL
);

CREATE TABLE usuarios (
  id_usuario INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  celular VARCHAR(20) NOT NULL,
  telefone VARCHAR(20) NOT NULL
);

CREATE TABLE brigadeiros (
  id_brigadeiro INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  massa VARCHAR(255) NOT NULL,
  cobertura VARCHAR(255) NOT NULL
);