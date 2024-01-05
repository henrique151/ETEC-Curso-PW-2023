-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jun-2023 às 12:54
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
-- Banco de dados: `henrique`
--
create database `henrique`;
use `henrique`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `porto`
--

CREATE TABLE `porto` (
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `residencia` varchar(80) NOT NULL,
  `cep` varchar(80) NOT NULL,
  `bairro` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `porto`
--

INSERT INTO `porto` (`nome`, `sobrenome`, `rua`, `residencia`, `cep`, `bairro`) VALUES
('Rique', 'Sousa', 'Rua Porto Da Silva, 48 ', '521B', '08050-150', 'Vila Ferrias'),
('Porto', 'Silva', 'Rua Silva De Sousa', '121B', '125022-143', 'São Paulo'),
('Herique', 'Silva', 'Rua Pedro De Ouro', '82B', '12450-412', 'Vila Jacuir'),
('Guilherme ', 'Mandes', 'Rua Preta de Sangue', '50B', '08050-145', 'Jardim Helana'),
('Silva', 'Santos', 'Rua Ouro Puro', '884B', '99912-188', 'São Paulo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
