CREATE TABLE usuario(
	id int unsigned NOT NULL AUTO_INCREMENT,
	nome varchar(100) NOT NULL,
	apelido varchar(100) NOT NULL,
	obs varchar(250) NOT NULL,
	PRIMARY KEY (id)
);