
CREATE table pessoa (
	id int not null auto_increment,
    nome varchar(50) not null,
    sexo char(1) not null,
    email varchar(50) not null unique,
    telefone varchar(11) default null,
	cep varchar(9) not null, 
	logadouro varchar(50) default null, 
	cidade varchar(30) not null, 
	estado char(2) not null,
    PRIMARY key(id)
)ENGINE=InnoDB;

CREATE table paciente (
    id int not null auto_increment,
    peso float not null,
    altura float not null,
    tipo_sanquineo varchar(3),
    pessoa_id int not null unique,
    PRIMARY key(id),
    FOREIGN key(pessoa_id) REFERENCES pessoa(id)
)ENGINE=InnoDB;
