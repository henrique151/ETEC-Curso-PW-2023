-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Ago-2023 às 16:44
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

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
(7, 'Porpentina', 'Goldstein', 'porpentinagoldstein@example.com', '1901-08-19'),
(8, 'Henrique', 'Lendas', 'lenda@example.coms', '0000-00-00'),
(9, 'Caneta', 'Lenda', 'lenda@example.coms', '0000-00-00'),
(10, 'Canetas', 'Azul', 'lendas@example.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autoria`
--

CREATE TABLE `autoria` (
  `Cod_Autoria` int(11) NOT NULL,
  `Cod_autor` int(11) DEFAULT NULL,
  `Cod_livro` int(11) DEFAULT NULL,
  `DataLancamento` date DEFAULT NULL,
  `Editora` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autoria`
--

INSERT INTO `autoria` (`Cod_Autoria`, `Cod_autor`, `Cod_livro`, `DataLancamento`, `Editora`) VALUES
(1, 1, 1, '1997-10-30', 'Rocco'),
(2, 2, 2, '1999-06-29', 'Rocco'),
(3, 3, 3, '2002-03-15', 'Rocco'),
(4, 4, 4, '2005-07-20', 'DarkSide Books'),
(5, 5, 4, '2006-09-25', 'Grupo Companhia das Letras'),
(6, 6, 3, '2009-04-21', 'Sextante'),
(7, 7, 6, '2011-02-10', 'Rocco'),
(8, 8, 5, '2013-01-06', 'Rocco');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`Cod_Livro`, `Titulo`, `Categoria`, `ISBN`, `Idioma`, `QtdePag`) VALUES
(1, 'Harry Potter e a Pedra Filosofal', 'Fantasia', '1238532530788', 'Português', 223),
(2, 'Harry Potter e a Câmara Secreta', 'Fantasia', '1748532530801', 'Inglês', 288),
(3, 'Harry Potter e o Prisioneiro de Azkaban', 'Fantasia', '4798532530818', 'Inglês', 317),
(4, 'Harry Potter e o Cálice de Fogo', 'Fantasia', '7318532530825', 'Português', 556),
(5, 'Harry Potter e a Ordem da Fênix', 'Fantasia', '2138532530832', 'Português', 766),
(6, 'Harry', 'Ação', '987654321', 'Inglês', 400);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Cod_Autor`);

--
-- Índices para tabela `autoria`
--
ALTER TABLE `autoria`
  ADD PRIMARY KEY (`Cod_Autoria`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Cod_Livro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `Cod_Autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `autoria`
--
ALTER TABLE `autoria`
  MODIFY `Cod_Autoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `Cod_Livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
