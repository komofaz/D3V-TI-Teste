create database db_teste;
use db_teste;

create table Cliente(
    cod_cliente BIGINT NOT NULL AUTO_INCREMENT,
    razao_social VARCHAR(100) NOT NULL,
    nome_fantasia VARCHAR(50) NOT NULL,
    endereco VARCHAR(100),
    complemento VARCHAR(50),
    bairro VARCHAR(50),
    cidade VARCHAR(50),
    estado CHAR(2),
    data_inclusao DATE,
    PRIMARY KEY (cod_cliente)
);

create table Contato(
    cod_cliente BIGINT NOT NULL,
    cod_contato INT NOT NULL AUTO_INCREMENT,
    nome_contato VARCHAR(100) NOT NULL,
    telefone_1 CHAR(13),
    telefone_2 CHAR(13),
    celular CHAR(14),
    email VARCHAR(50),
    PRIMARY KEY (cod_contato),
    FOREIGN Key (cod_cliente) REFERENCES Cliente(cod_cliente)
);