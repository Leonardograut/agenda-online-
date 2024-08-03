create database agenda;

use agenda;


create table usuario(
 id int primary key auto_increment,
 nome varchar(100)not null,
 descricao varchar(100) not null
)