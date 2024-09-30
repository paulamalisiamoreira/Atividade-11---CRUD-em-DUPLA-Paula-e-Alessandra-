create database notas;
use notas;

create table categoria(
pk_categoria int primary key not null auto_increment,
nome_categoria varchar(30)
);

create table usuario (
pk_usuario int primary key not null auto_increment,
nome_usuario varchar(50)
);

create table nota(
fk_categoria int not null, 
foreign key (fk_categoria) references categoria(pk_categoria),
fk_usuario int not null,
foreign key (fk_usuario) references usuario(pk_usuario),
titulo varchar (20),
conteudo varchar(1000)
);