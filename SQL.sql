CREATE DATABASE crud;
use crud;

CREATE TABLE usuarios(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL, 
    senha VARCHAR(100) NOT NULL
);

use crud;
INSERT INTO usuarios (nome, email, senha) VALUES ('João Fernandes','jv@gmail.com','123456');
/*
use crud_111485;
update usuarios SET nome='Gabriel Barbosa',email='gb_barbosa@yahoo.com',senha='12345678' WHERE id=1;

use crud_111485;
delete from usuarios where id=1;
*/