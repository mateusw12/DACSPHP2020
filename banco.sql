create database filme;
use database;

CREATE TABLE `filmes` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `estudio` varchar(50) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
);
insert into filmes(nome, estudio, genero) values ('Velozes e Furiosos 1','Universal', 'acao/corrida');
insert into filmes(nome, estudio, genero) values ('Velozes e Furiosos 2','Universal', 'acao/corrida');
insert into filmes(nome, estudio, genero) values ('Vingadores: A Era de Ultron','Marvel', 'acao');

