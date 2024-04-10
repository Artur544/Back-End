create database loginbd;

use loginbd;

create table usuarios (
    id int primary key auto_increment,
    nome varchar(255) not null,
    email varchar(200) not null,
    senha varchar(100) not null
);