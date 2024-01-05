-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Abr-2023 às 15:39
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
-- Banco de dados: `bd-empresa`
crate database `bd-empresa`;
use `bd-empresa`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Cod_Cli` int(11) NOT NULL,
  `Nome_Cliente` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contato` varchar(15) NOT NULL,
  `Enderco` varchar(50) NOT NULL,
  `Cod_Forncedor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Cod_Cli`, `Nome_Cliente`, `Email`, `Contato`, `Enderco`, `Cod_Forncedor`) VALUES
(1, 'Sr. Miste', 'zedobarzinho@twiter.com.br', '(11) 98745-4512', 'Av. Tira Dentes', 2),
(2, 'Sra. Carla', 'carliadapaleraira@twiter.com.br', '(11) 99775-4124', 'Av. Itaquera', 4),
(3, 'Sr. Marcelo', 'marcelodacenta@twiter.com.br', '(11) 98214-2412', 'Av. Rua do Santos', 4),
(4, 'Sr. Santos do Dom', 'sempresantos@twiter.com.br', '(11) 28151-8721', 'Av. Quaradro do Pedro', 4),
(5, 'Sra. Froozen', 'froozendadarkwibe@twiter.com.br', '(11) 93123-8432', 'Av. Disney da Florida', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `Cod_Fornecedor` int(11) NOT NULL,
  `Razao_Social` varchar(70) NOT NULL,
  `Nome_Fantasia` varchar(70) NOT NULL,
  `CNPJ` varchar(20) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Num` varchar(7) NOT NULL,
  `Bairro` varchar(25) NOT NULL,
  `Cidade` varchar(25) NOT NULL,
  `Fone` varchar(18) NOT NULL,
  `Nome_Contato` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Site` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`Cod_Fornecedor`, `Razao_Social`, `Nome_Fantasia`, `CNPJ`, `Endereco`, `Num`, `Bairro`, `Cidade`, `Fone`, `Nome_Contato`, `Email`, `Site`) VALUES
(1, 'Comércio de Papéis Yuki Ltda', 'Yuki Papéis', '03.847.655/0001-98', 'Rua das Ameixeiras', '21', 'Penha', 'São Paulo', '(11) 2695-6398', 'Sr. Pedro', 'yuki@provedor.com.br', 'www.yuki.com.br'),
(2, 'Comércio de Papéis ABC Lida', 'Papelaria ABC', '14.218.835/0001-27', 'Av. Iguapé', '1690', 'Tatuapé', 'São Paulo', '(11) 2369 - 9685', 'Sra. Bete', 'p_ABC@provedor.com.br', 'www.p_ABC.com.br'),
(3, 'Distribuídora Kaluunga S.A.', 'Kalunga', '23.222.835/0001-07', 'Av. Rio das Pedras', '1752', 'Itaquera', 'São Paulo', '(11) 2596 - 9656', 'Sr. Marcos', 'kalunga@provedor.com.br', 'www.kalunga.com.br'),
(4, 'Indústria e Comércio Nobel S.A.\r\n ', 'Nobel', '07.256.898/0001-10', 'Rua das Bolhas', '900', 'Itaquera', 'São Paulo', '(11) 2475 - 6598', 'Sr. Paulo', 'Nobel@provedor.com.br', 'www.nobel.com.br'),
(5, 'Papelaria Americanas Ltda', 'Americanas', '01.659.427/0001-04', 'Rua das Ovelhas', '21', 'Pari', 'São Paulo', '(11) 2456 - 9874', 'Sr. Antonio', 'americanas@provedor.com.br', 'www.americanas.com.br'),
(6, 'Distribuidora Brasileiras S.A.\r\n', 'Brasileiras', '01.326.265/0001-04', 'Av. Brasil', '12', 'Brás', 'São Paulo', '(11) 6598-6958', 'Sra. Paula', 'brasileiras@provedor.com.br', 'www.brasileiras.com.br'),
(7, 'Ind e Comércios de Papéis Oi Ltda', 'Papéis Oi', '01.362.126/0001-04', 'Av. dos Trilhos', '1362', 'Pari', 'São Paulo', '(11) 2365-2154', 'Sra. Ana', 'pi@provedor.com.br', 'www.pi.com.br'),
(8, 'Armarinhos Fernando Ltda ', 'Fernando', '01.956.236/0001-04', 'Alameda Santos', '352', 'Centro', 'São Paulo', '(11) 2362-3659', 'Sr. Matheus', 'fernando@provedor.com.br', 'www.fernando.com.br'),
(9, 'Armarinhos Alegria S.A.', 'Alegria', '14.632.326/0001-14', 'Rua das Fagulhas', '12', 'Cambuci', 'São Paulo', '(11) 2362-5487', 'Sr. Alegrete', 'alegria@provedor.com.br', 'www.alegria.com.br'),
(10, 'Comércio de Papéis Tchau Ltda', 'Tchau', '1.659.652/0001-04', 'Alameda dos Anhambiguacas', '326', 'Morumbi', 'São Paulo', '(11) 3265-6958', 'Sr. Berto', 'tchau@provedor.com.br', 'www.tchau.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `Cod_Produto` int(11) NOT NULL,
  `Descricao` varchar(50) NOT NULL,
  `Unidade` varchar(2) NOT NULL,
  `Qtde_Estoque` double NOT NULL,
  `Caracteristicas` varchar(50) NOT NULL,
  `Cod_Fornecedor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`Cod_Produto`, `Descricao`, `Unidade`, `Qtde_Estoque`, `Caracteristicas`, `Cod_Fornecedor`) VALUES
(1, 'Caneta', 'un', 100, 'cor azul', 2),
(2, 'Caneta', 'un', 85, 'cor vermelha', 2),
(3, 'Caneta', 'un', 60, 'cor preta', 2),
(4, 'Lápis', 'un', 150, 'sem borracha', 3),
(5, 'Lápis', 'un', 100, 'com borracha', 4),
(6, 'Lápis de cor', 'cx', 25, '12 cores', 4),
(7, 'Lápis de cor', 'cx', 50, '24 cores', 4),
(8, 'Lápis de cor', 'cx', 35, '36 cores', 5),
(9, 'Borracha', 'dz', 35, 'Azul/Vermelha', 6),
(10, 'Borracha', 'dz', 25, 'Branca', 7),
(11, 'Papel Sulfite', 'pc', 100, 'Colorido', 8),
(12, 'Caderno Universitário', 'pc', 25, '1 matérias', 9),
(13, 'Caderno Universitário', 'pc', 150, '10 matérias', 9),
(14, 'Régua', 'un', 250, 'Acrílica - 30 cm', 10),
(15, 'Lapiseira', 'pc', 86, 'Gratite 0.5', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cod_Cli`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`Cod_Fornecedor`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`Cod_Produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Cod_Cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `Cod_Fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `Cod_Produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
