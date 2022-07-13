CREATE TABLE cliente
(
   id int PRIMARY KEY auto_increment,
   nome varchar(50),
   cpf char(14) UNIQUE,
   email varchar(50) UNIQUE,
   hash_senha varchar(255),
   data_nascimento date,
   estado_civil varchar(30),
   altura int
) ENGINE=InnoDB;

CREATE TABLE endereco_entrega
(
   id int PRIMARY KEY auto_increment,
   cep char(10),
   endereco varchar(100),
   bairro varchar(50),
   cidade varchar(50),
   id_cliente int not null,
   FOREIGN KEY (id_cliente) REFERENCES cliente(id) ON DELETE CASCADE
) ENGINE=InnoDB;


CREATE table endereco(
	id int not null auto_increment,
	cep varchar(9) not null, 
	logadouro varchar(50) default null, 
	cidade varchar(30) not null, 
	bairro varchar(30) not null,
	estado char(2) not null,
   PRIMARY key(id)
)ENGINE=InnoDB;