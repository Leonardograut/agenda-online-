create database banco;

use banco;

CREATE TABLE users (
    usuario_id int primary key  AUTO_INCREMENT,
    login VARCHAR(50) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE atividades (
    id int auto_increment primary key,
    nome varchar(100) not null,
    descricao varchar(100) not  null,
    data_inicio datetime not null,
    data_termino datetime not null,
    status ENUM('pendente', 'concluida', 'cancelada') not null,
);