-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Abr-2023 às 23:12
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
create database `escola`;
use `escola`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `matricula` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `codcurso` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matricula`, `nome`, `endereco`, `cidade`, `codcurso`) VALUES
(10001, 'Marcos Moraes', 'Rua Pe Roque, 2057', 'Mogi Mirim', '1'),
(10002, 'Maria Conceição Lopes', 'Rua Araras, 23', 'Mogi Guaçu', '1'),
(10003, 'Ana Carina Lopes', 'Rua Peraltas, 222', 'Santos', '1'),
(10004, 'Carlos Aguiar', 'Rua Botafogo, 33', 'Santos', '1'),
(10005, 'André Luiz dos Santos', 'Rua Lopes Conte, 3343', 'Sapucaí', '1'),
(10006, 'Pedro Antonio Pimenta', 'Rua Altair Lopes, 33', 'Itapira', '2'),
(10007, 'Rita de Cássia da Silva ', 'Rua Eletromais, 33', 'Itapira', '2'),
(10008, 'Caique dos Santos', 'Rua das Amoreiras, 55', 'Campinas', '2'),
(10009, 'Carlos Tavares', 'Rua Peixe, 99', 'Santos', '2'),
(10010, 'Antonio Carlos Caetano', 'Rua Josefina Alface, 987', 'Campinas', '2'),
(10011, 'Ricardo Moreira', 'Rua do Pinhal, 332', 'Aparecida', '3'),
(10012, 'Richardson S. P. Campeao', 'Rua do Tricolor, 443', 'São Paulo', '3'),
(10013, 'Junior Camisa Seis', 'Rua do Morumbi, 433', 'São Paulo', '3'),
(10014, 'Carina Melo', 'Rua Osvaldo Ramos, 88', 'Mogi Guaçu', '3'),
(10015, 'Pedro Mello', 'Rua Itororó, 3999', 'Mogi Mirim', '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `codcurso` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `coddisc1` char(2) NOT NULL,
  `coddisc2` char(2) NOT NULL,
  `coddisc3` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`codcurso`, `nome`, `coddisc1`, `coddisc2`, `coddisc3`) VALUES
(1, 'Auxiliar de Informática', '11', '12', '13'),
(2, 'Programador de Computadores', '21', '22', '23'),
(3, 'Técnico em Informática', '31', '32', '33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `CodDisciplina` int(11) NOT NULL,
  `NomeDisciplina` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`CodDisciplina`, `NomeDisciplina`) VALUES
(11, 'Banco de Dados'),
(12, 'Lógica de Programação'),
(13, 'Desenvolvimento de Software 1'),
(21, 'Banco de Dados 2'),
(22, 'Desenvolvimento de Software 2'),
(23, 'Programação de Computadores 1'),
(31, 'Banco de Dados 3'),
(32, 'Programação de Computadores 2'),
(33, 'Desenvolvimento de Software 3');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`codcurso`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`CodDisciplina`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `matricula` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10016;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `codcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `CodDisciplina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
