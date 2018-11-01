create database gas;
use gas;

create table interesados (
codigo int  auto_increment ,
nome varchar(255),
cpf varchar(11),
primary key (cod_cliente)
);
create table grupos_de_estudos(

codigo int auto_increment,
onde varchar(150),
assunto varchar(150),
quando datetime,
tempo_de_duracao int,
quantidade_de_pessoas int,
primary key (codigo)

);
