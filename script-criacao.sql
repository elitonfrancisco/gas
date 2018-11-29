create database gas;
use gas;

create table interesados (
codigo int  auto_increment ,
nome varchar(255),
cpf varchar(11),
primary key (codigo)
);
create table grupos_de_estudos(

codigo int auto_increment,
onde varchar(150),
assunto varchar(150),
quando datetime,
tempo_de_duracao int,
quantidade_de_pessoas int,
interessado_id int,
primary key (codigo),
foreign key (interessado_id) references interessados(codigo)
);

create table interessados_grupos (
codigo int auto_increment,
interessado_id int,
grupo_id int,
primary key (codigo),
foreign key (interessado_id) references interessados(codigo),
foreign key (grupo_id) references grupos_de_estudos(codigo)

);