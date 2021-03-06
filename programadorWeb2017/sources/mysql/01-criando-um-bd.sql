-- Criando um Banco de Dados MySql
-- Neste banco de dados, a lógica de negócio permite que
-- um aluno tenha apenas uma disciplina,
-- enquanto que uma disciplina poderá ter vários alunos.

-- 1. Criar o banco, caso ainda não exita.
create database if not exists cursos;

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

insert into aluno (nome, matricula, telefone, nota, disciplina_id)
	values
	("José", 0123, "3333-2222",5.5, 1),
	("José", 0456, "1111-2222",8.5, 2),
	("Maria", 0321, "4444-2222",3.5, 3),
	("Marta", 0232, "5555-2222",9.5, 4),
	("Douglas", 0789, "6666-2222",10.0, 1),
	("Pedro", 0987, "7777-2222",5.0, 1),
	("Júlio", 0852, "8888-2222",7.5, 2),
	("Júnior", 0258, "9999-2222",7.5, 3),
	("André", 0741, "1212-2222",8.0, 4),
	("Marcos", 0147, "1314-2222",2.3, 3),
	("Michel", 369, "1415-2222",4.8, 3),
	("Vaberto", 9631, "1516-2222",3.3, 2),
	("Guilherme", 9632, "1516-2222",8.8, 2),
	("Paulo", 9633, "1516-2222",8.6, 2),
	("Mariano", 9634, "1516-2222",5.0, 1),
	("Sandra", 9635, "1516-2222",7.7, 1),
	("Conceição", 9636, "1516-2222",4.6, 1),
	("Elison", 9637, "1516-2222",3.2, 1),
	("Fátima", 9638, "1516-2222",9.9, 3),
	("Waldisney", 9639, "1516-2222",9.7, 3),
	("Zumira", 9630, "1516-2222",7.7, 4),
	("Ziraldoswisk", 985, "1161-2222",1.3, 4);



	-- unindo tabelas

	-- select disciplina.nome, aluno.nome, aluno.nota
	-- from aluno, disciplina
	-- where aluno.disciplina_id = disciplina.id
	-- and disciplina.nome = "Matemática";
