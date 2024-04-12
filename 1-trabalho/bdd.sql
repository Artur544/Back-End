create database loja;
use loja

create table cubos (
    id int primary key auto_increment,
    nome varchar(300) not null,
    preco int not null,
    dificuldade varchar(245) not null,
    imagem varchar(255)
);

