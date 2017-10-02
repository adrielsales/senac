-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 25/09/2017 às 20:20
-- Versão do servidor: 10.1.13-MariaDB
-- Versão do PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cursos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `nota` float DEFAULT NULL,
  `disciplina_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `aluno`
--

INSERT INTO `aluno` (`id`, `matricula`, `nome`, `telefone`, `nota`, `disciplina_id`) VALUES
(1, 123, 'José', '3333-2222', 5.5, 1),
(2, 456, 'José', '1111-2222', 8.5, 2),
(3, 321, 'Maria', '4444-2222', 3.5, 3),
(4, 232, 'Marta', '5555-2222', 9.5, 4),
(5, 789, 'Douglas', '6666-2222', 10, 1),
(6, 987, 'Pedro', '7777-2222', 5, 1),
(7, 852, 'Júlio', '8888-2222', 7.5, 2),
(8, 258, 'Júnior', '9999-2222', 7.5, 3),
(9, 741, 'André', '1212-2222', 8, 4),
(10, 147, 'Marcos', '1314-2222', 2.3, 3),
(11, 369, 'Michel', '1415-2222', 4.8, 3),
(12, 9631, 'Vaberto', '1516-2222', 3.3, 2),
(13, 9632, 'Guilherme', '1516-2222', 8.8, 2),
(14, 9633, 'Paulo', '1516-2222', 8.6, 2),
(15, 9634, 'Mariano', '1516-2222', 5, 1),
(16, 9635, 'Sandra', '1516-2222', 7.7, 1),
(17, 9636, 'Conceição', '1516-2222', 4.6, 1),
(18, 9637, 'Elison', '1516-2222', 3.2, 1),
(19, 9638, 'Fátima', '1516-2222', 9.9, 3),
(20, 9639, 'Waldisney', '1516-2222', 9.7, 3),
(21, 9630, 'Zumira', '1516-2222', 7.7, 4),
(22, 985, 'Ziraldoswisk', '1161-2222', 1.5, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `nome`, `descricao`) VALUES
(1, 'Matemática', 'Mussum Ipsum, cacilds vidis litro abertis.'),
(2, 'Português', 'Todo mundo vê os porris que eu tomo, mas ninguém vê os tombis que eu levo!'),
(3, 'Física', 'Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.'),
(4, 'História', 'Nullam volutpat risus nec leo commodo, ut interdum diam laoreet.');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disciplina_id` (`disciplina_id`);

--
-- Índices de tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
