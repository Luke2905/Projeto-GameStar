SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

create database gamestar;

create table jogos(  
     nome varchar(30),
     genero varchar(20),
     classificacao int,
    preco decimal (10,2)
);