CREATE table logar (
	email varchar(30) not null,
	senhaHash varchar(60) not null,
	primary key(email)
)ENGINE=InnoDB;
