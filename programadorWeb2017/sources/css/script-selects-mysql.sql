use cursos;

show tables;

-- pega tudo na tabela aluno
select * from aluno;

-- pega tudo na tabela aluno ordenado pelo nome
select * from aluno order by nome;

-- pega, na tabela aluno, o aluno com a maior nota
select max(nota) as maior_nota from aluno;

-- ******* subconsulta - aluno com a maior nota
select * from aluno where nota = (select max(nota) from aluno);

-- pega, na tabela aluno, o aluno com a menor nota
select min(nota) from aluno;

-- ******* subconsulta - aluno com a menor nota
select * from aluno where nota = (select min(nota) from aluno);

-- pega, na tabela aluno, o aluno com a menor nota
select min(nota) from aluno where nome="José";

-- pega tudo na tabela aluno, onde a nota é menor que 5, ordenando pelo nome
select * from aluno where nota <= 5 order by nome;

-- pega tudo na tabela aluno onde a nota está entre 9 e 10
select * from aluno where nota between 9 and 10;

-- faz uma contagem na tabela aluno, a partir do id, agrupando as notas entre 7 e 10 
select count(id) as retorno_do_id, nota 
from aluno 
where nota between 7 and 10
group by nota
order by count(id);

-- faz uma contagem na tabela aluno, a partir do id, agrupando pelo id da disciplina
select count(id) as retorno_do_id, disciplina_id 
from aluno 
group by disciplina_id
order by count(id);

-- faz uma média das notas dos alunos
select avg(nota) from aluno;

-- faz a soma das notas dos alunos
select sum(nota) from aluno;

-- uso do like - aluno que tem a letra F no nome.
select * from aluno where nome like "%F%";

-- uso do like - aluno que não tem a letra F no nome.
select * from aluno where nome not like "%F%";

-- uso do like - aluno que não tem a letra A no nome.
select * from aluno where nome not like "%A%";

-- uso do like - aluno que tem a letra A no final.
select * from aluno where nome like "%A";

-- uso do like - aluno que começa com a letra Z e termina com a letra A.
select * from aluno where nome like "Z%A";

-- uso do like - aluno que começa com a letra G, tem a letra h no meio e termina com a letra E.
select * from aluno where nome like "G%h%E";

/*Uso apenas para não rolar página*/
select * from aluno;

-- adicionar o campo sexo, após do campo nome na tabela aluno, e setar com 1 (true) para todos os valores.
alter table aluno add sexo tinyint(1) default 1 after nome; 

-- atualize para 0 os valores do compo sexo para as mulheres cadastradas no sistema.
update aluno set sexo = 0 where id = 3;

-- update aluno 
-- set sexo = 0 
-- where nome in (
-- 	select id 
--     from aluno 
--     where nome in ("Marta", "Sandra", "Fátima", "Conceição", "Zumira")
--     ); 
-- 