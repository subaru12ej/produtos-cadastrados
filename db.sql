create database sistema;

use sistema;


create table IF not exists produtos (   
id int (11)not null auto_increment primary key,
nome varchar (255) not null,
DESCRICAO TEXT not NULL,
PRECO DECIMAL (10, 2)NOT NULL,
FOTO VARCHAR(255)NOT NULL
);