CREATE table endereco2 (
	id int not null auto_increment,
	cep varchar(9) not null, 
	rua varchar(50) default null, 
	cidade varchar(30) not null, 
	bairro varchar(30) not null,
   PRIMARY key(id)
)ENGINE=InnoDB;

insert into endereco2 (cep, rua, bairro, cidade) values ('38400-100','Av João Naves', 'Santa Mônica', 'Uberlândia');

insert into endereco2 (cep, rua, bairro, cidade) values ('38400-200','Av Floriano Peixoto', 'Centro', 'Uberlândia');

insert into endereco2 (cep, rua, bairro, cidade) values ('38400-000','Av Afonso Pena','Martins', 'Uberlândia');

