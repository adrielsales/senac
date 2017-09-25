-- Criando um Banco de Dados MySql
-- Neste banco de dados, a lógica de negócio permite que
-- um aluno tenha apenas uma disciplina,
-- enquanto que uma disciplina poderá ter vários alunos.

-- 1. Criar o banco
create database cursos;

-- 2. Informar que queremos usar o banco cursos.
use cursos;

-- 3. Criando a tabela disciplina

create table disciplina (
	id int not null auto_increment,
	nome varchar(55) not null,
	descricao text,
	primary key(id)
);

-- 4. Criando a tabela aluno
-- Obs.: observar que uma chave estrangeira foi criada referenciando uma disciplina.
create table aluno (
	id int not null auto_increment,
	matricula int not null,
	nome varchar(55) not null,
	telefone varchar(15),
	nota float null,
	disciplina_id int,
	primary key(id),
	FOREIGN key (disciplina_id) REFERENCES disciplina(id)
);

-- 5. Inserindo disciplinas e alunos
insert into disciplina (id, nome, descricao)
	values
	(1, "Matemática", "Mussum Ipsum, cacilds vidis litro abertis."),
	(2, "Português", "Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!"),
	(3, "Física", "Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis."),
	(4, "História", "Nullam volutpat risus nec leo commodo, ut interdum diam laoreet.");

insert into aluno (id, nome, matricula, telefone, nota, disciplina_id)
	values
	(1, "José", 123, "3333-2222",5.5, 1),
	(2, "José", 456, "1111-2222",8.5, 2),
	(3, "Maria", 321, "4444-2222",3.5, 3),
	(4, "Marta", 232, "5555-2222",9.5, 4),
	(5, "Douglas", 789, "6666-2222",10.0, 1),
	(6, "Pedro", 987, "7777-2222",5.0, 1),
	(7, "Júlio", 852, "8888-2222",7.5, 2),
	(8, "Júnior", 258, "9999-2222",7.5, 3),
	(9, "André", 741, "1212-2222",8.0, 4),
	(10, "Marcos", 147, "1314-2222",2.3, 3),
	(11, "Michel", 369, "1415-2222",4.8, 3),
	(12, "Wilker", 963, "1516-2222",5.5, 4),
	(13, "Ziraldoswisk", 985, "1161-2222",9.3, 1);



	-- unindo tabelas

	-- select disciplina.nome, aluno.nome, aluno.nota  
	-- from aluno, disciplina
	-- where aluno.disciplina_id = disciplina.id
	-- and disciplina.nome = "Matemática";
