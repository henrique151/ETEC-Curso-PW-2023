-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Maio-2023 às 00:21
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
-- Banco de dados: `bd_autoria`
--
create database `bd_autoria`;
use `bd_autoria`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `Cod_Autor` int(11) NOT NULL,
  `NomeAutor` varchar(100) DEFAULT NULL,
  `Sobrenome` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Nasc` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`Cod_Autor`, `NomeAutor`, `Sobrenome`, `Email`, `Nasc`) VALUES
(1, 'J.K.', 'Rowling', 'jkrowling@example.com', '1964-10-31'),
(2, 'Joanne', 'Murray', 'joannemurray@example.com', '1925-12-31'),
(3, 'Robert', 'Galbraith', 'robertgalbraith@example.com', '2002-10-31'),
(4, 'Kennilworthy', 'Whisp', 'kennilworthywhisp@example.com', '1971-10-12'),
(5, 'Newt', 'Scamander', 'newtscamander@example.com', '1897-02-24'),
(6, 'Leta', 'Lestrange', 'letalestrange@example.com', '1926-09-06'),
(7, 'Porpentina', 'Goldstein', 'porpentinagoldstein@example.com', '1901-08-19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autoria`
--

CREATE TABLE `autoria` (
  `Cod_autor` int(11) NOT NULL,
  `Cod_livro` int(11) NOT NULL,
  `DataLancamento` date NOT NULL,
  `Editora` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autoria`
--

INSERT INTO `autoria` (`Cod_autor`, `Cod_livro`, `DataLancamento`, `Editora`) VALUES
(1, 1, '1997-06-26', 'Rocco'),
(2, 1, '1998-01-12', 'Rocco'),
(3, 1, '2002-03-18', 'Aleph'),
(4, 1, '2004-02-28', 'Suma'),
(5, 1, '2006-06-21', 'Intrínseca'),
(6, 4, '2008-05-30', 'Darkside Books'),
(7, 5, '2010-03-12', 'Sextante'),
(8, 7, '2012-11-16', 'Ubu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `Cod_Livro` int(11) NOT NULL,
  `Titulo` varchar(100) DEFAULT NULL,
  `Categoria` varchar(50) DEFAULT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `Idioma` varchar(20) DEFAULT NULL,
  `QtdePag` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`Cod_Livro`, `Titulo`, `Categoria`, `ISBN`, `Idioma`, `QtdePag`) VALUES
(1, 'Harry Potter e a Pedra Filosofal', 'Fantasia', '1238532530788', 'Português', 223),
(2, 'Harry Potter e a Câmara Secreta', 'Fantasia', '1748532530801', 'Inglês', 288),
(3, 'Harry Potter e o Prisioneiro de Azkaban', 'Fantasia', '4798532530818', 'Inglês', 317),
(4, 'Harry Potter e o Cálice de Fogo', 'Fantasia', '7318532530825', 'Português', 556),
(5, 'Harry Potter e a Ordem da Fênix', 'Fantasia', '2138532530832', 'Português', 766);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Cod_Autor`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Cod_Livro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
