-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Abr-2023 às 17:22
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
-- Banco de dados: `rh`
--
create database `rh`;
use  `rh`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `CodigoCargo` int(11) NOT NULL,
  `Descriacao` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`CodigoCargo`, `Descriacao`) VALUES
(1, 'Gerente de Vendas'),
(2, 'Analista de Marketing'),
(3, 'Assistente de Recursos Humanos'),
(4, 'Programador Java'),
(5, 'Desenvolvedor Front-End'),
(6, 'Desenvolvedor Back-End'),
(7, 'Coordenador de Projetos'),
(8, 'Arquiteto de Software'),
(9, 'Analista de Sistemas'),
(10, 'Suporte Técnico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `CodigoDepto` int(11) NOT NULL,
  `Descrição` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`CodigoDepto`, `Descrição`) VALUES
(1, 'Vendas'),
(2, 'Marketing'),
(3, 'Recursos Humanos'),
(4, 'Desenvolvimento de Software'),
(5, 'Suporte Técnico'),
(6, 'Gestão de Projetos'),
(7, 'Qualidade de Software'),
(8, 'Infraestrutura de TI'),
(9, 'Segurança da Informação'),
(10, 'Contabilidade'),
(11, 'Jurídico'),
(12, 'Compras'),
(13, 'Logística'),
(14, 'Atendimento ao Cliente'),
(15, 'Produção');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dependentes`
--

CREATE TABLE `dependentes` (
  `Matricula` int(11) NOT NULL,
  `NomeDependente` varchar(60) NOT NULL,
  `DtNascimento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `dependentes`
--

INSERT INTO `dependentes` (`Matricula`, `NomeDependente`, `DtNascimento`) VALUES
(1001, 'Alex de Pedro', '1999-01-01'),
(1002, 'Pedro Fernandes ', '1995-04-30'),
(1003, 'Larissa Maria', '2000-06-10'),
(1004, 'Laura General ', '2012-11-20'),
(1005, 'Carla Isabela ', '2015-12-25'),
(1006, 'Julia Larissa', '2018-01-31'),
(1007, 'Luciano Huck', '1989-02-14'),
(1008, 'Miguel de Luca', '2002-02-02'),
(1009, 'Helena da Mazza', '2004-03-03'),
(1010, 'Arthur Valente', '2006-04-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionários`
--

CREATE TABLE `funcionários` (
  `Matricula` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `DataNasc` date NOT NULL,
  `Nacionalidade` varchar(50) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `EstadoCivil` varchar(20) NOT NULL,
  `RG` varchar(20) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `Endereco` varchar(60) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `DataAdmissao` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `funcionários`
--

INSERT INTO `funcionários` (`Matricula`, `Nome`, `DataNasc`, `Nacionalidade`, `Sexo`, `EstadoCivil`, `RG`, `CPF`, `Endereco`, `Telefone`, `DataAdmissao`) VALUES
(1001, 'Paulo Ferreira', '2011-04-15', 'Americana', 'Masculino', 'Solteiro', '21214261-5', '232.512.214-78', 'Avenida Paulista, 1234', '(11) 6214-6563', '2015-08-01'),
(1002, 'Sara Ramos', '2001-01-25', 'Portuguesa', 'Feminino', 'Casada', '66778899-1', '901.234.567-89', 'Rua Rio de Janeiro, 567', '(11) 4563-2312', '2018-10-01'),
(1003, 'Gabriel Silva', '2012-06-03', 'Espanhola', 'Masculino', 'Solteiro', '11223344-6', '234.567.890-12', 'Avenida dos Estados, 789', '(11) 3463-3463', '2016-12-01'),
(1004, 'Cristina Rodriguez', '2013-11-18', 'Mexicana', 'Feminino', 'Divorciada', '22113344-5', '345.678.901-23', 'Rua do Comércio, 4321', '(11) 3252-9999', '2019-03-01'),
(1005, 'Ahmed Al-Bashir', '2014-08-10', 'Sudanês', 'Masculino', 'Solteiro', '33445566-1', '456.789.012-34', 'Rua dos Pinheiros, 987', '(11) 0212-0422', '2022-01-01'),
(1006, 'Fatima Abdullah', '2001-02-22', 'Emiradense', 'Feminino', 'Solteira', '24124124-3', '567.890.123-45', 'Rua Brigadeiro Faria Lima, 2468', '(11) 3423-6235', '2020-05-01'),
(1007, 'Jorge Martinez', '2002-07-08', 'Argentino', 'Masculino', 'Casado', '87612442-7', '678.901.234-56', 'Avenida Paulista, 5678', '(11) 2342-8542', '2017-11-01'),
(1008, 'Anna Petrova', '2021-04-20', 'Russa', 'Feminino', 'Solteira', '33245122-2', '789.012.345-67', 'Rua Tietê, 432', '(11) 1241-3251', '2016-06-01'),
(1009, 'Ali Ahmed', '2001-09-15', 'Iemenita', 'Masculino', 'Casado', '22113344-9', '890.123.456-78', 'Rua Augusta, 123', '(11) 4742-4212', '2021-02-01'),
(1010, 'Yui Nakamura', '1988-12-12', 'Japonesa', 'Feminino', 'Solteira', '76845412-7', '901.234.567-89', 'Rua da Consolação, 456', '(11) 1241-4521', '2017-07-01'),
(1011, 'Diego Hernandez', '1981-09-28', 'Colombiano', 'Masculino', 'Divorciado', '97124216-9', '123.456.789-01', 'Avenida Rebouças, 789', '(11) 3451-4542', '2014-03-01'),
(1012, 'Sophie Dubois', '1997-05-05', 'Francesa', 'Feminino', 'Solteira', '66778899-5', '212.582.671-12', 'Rua Oscar Freire, 123', '(11) 8565-1215', '2020-11-01'),
(1013, 'Mario Bianchi', '2012-03-10', 'Italiano', 'Masculino', 'Solteiro', '11223344-3', '962.278.921-23', 'Rua Haddock Lobo, 567', '(11) 8454-5463', '2018-04-01'),
(1014, 'Sofia Rodriguez', '2022-02-14', 'Mexicana', 'Feminino', 'Casada', '22113344-7', '124.212.012-34', 'Rua Augusta, 456', '(11) 4563-5863', '2019-09-01'),
(1015, 'Mohamed Salah', '2001-06-15', 'Brasileiro', 'Masculino', 'Casado', '12345678-7', '992.812.512-45', 'Avenida Brigadeiro Luis Antonio, 2468', '(11) 4363-3521', '2016-01-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lotação`
--

CREATE TABLE `lotação` (
  `Matricula` int(11) NOT NULL,
  `CódigoDepto` int(11) NOT NULL,
  `Dtinicio` date NOT NULL,
  `Dtfim` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `lotação`
--

INSERT INTO `lotação` (`Matricula`, `CódigoDepto`, `Dtinicio`, `Dtfim`) VALUES
(1001, 1, '2021-01-29', '2022-12-31'),
(1002, 2, '2021-03-12', '2021-11-20'),
(1003, 3, '2021-05-16', '2023-12-30'),
(1004, 8, '2022-06-01', '2022-06-30'),
(1005, 7, '2022-08-21', '2023-11-25'),
(1006, 9, '2021-09-30', '2022-06-30'),
(1007, 8, '2022-11-03', '2024-04-30'),
(1008, 9, '2023-01-05', '2023-12-20'),
(1009, 14, '2021-01-02', '2021-12-31'),
(1010, 6, '2022-03-25', '2023-10-20'),
(1011, 13, '2019-03-01', '2023-04-23'),
(1012, 12, '2022-04-04', '2023-06-20'),
(1013, 15, '2020-02-21', '2023-05-29'),
(1014, 4, '2021-10-11', '2023-10-25'),
(1015, 14, '2020-12-12', '2022-07-25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocupacao`
--

CREATE TABLE `ocupacao` (
  `Matricula` int(11) NOT NULL,
  `CodigoCargo` int(11) NOT NULL,
  `DtInicio` date NOT NULL,
  `DtFim` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ocupacao`
--

INSERT INTO `ocupacao` (`Matricula`, `CodigoCargo`, `DtInicio`, `DtFim`) VALUES
(1001, 1, '2020-11-11', '2022-06-30'),
(1002, 2, '2021-12-28', '2022-12-31'),
(1003, 3, '2021-04-15', '2023-03-31'),
(1004, 4, '2020-06-11', '2022-12-31'),
(1005, 5, '2022-10-25', '2023-06-30'),
(1006, 6, '2022-02-01', '2022-12-31'),
(1007, 7, '2022-04-01', '2023-02-12'),
(1008, 8, '2020-10-19', '2022-05-20'),
(1009, 9, '2022-01-01', '2023-12-31'),
(1010, 10, '2020-07-12', '2023-02-15'),
(1011, 11, '2022-01-04', '2022-04-30'),
(1012, 12, '2022-06-09', '2023-02-21'),
(1013, 13, '2022-03-31', '2022-12-31'),
(1014, 14, '2022-12-21', '2022-12-10'),
(1015, 15, '2022-02-04', '2023-11-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`CodigoCargo`);

--
-- Índices para tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`CodigoDepto`);

--
-- Índices para tabela `dependentes`
--
ALTER TABLE `dependentes`
  ADD PRIMARY KEY (`Matricula`);

--
-- Índices para tabela `funcionários`
--
ALTER TABLE `funcionários`
  ADD PRIMARY KEY (`Matricula`);

--
-- Índices para tabela `lotação`
--
ALTER TABLE `lotação`
  ADD PRIMARY KEY (`Matricula`);

--
-- Índices para tabela `ocupacao`
--
ALTER TABLE `ocupacao`
  ADD PRIMARY KEY (`Matricula`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `CodigoCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `CodigoDepto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `dependentes`
--
ALTER TABLE `dependentes`
  MODIFY `Matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT de tabela `funcionários`
--
ALTER TABLE `funcionários`
  MODIFY `Matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- AUTO_INCREMENT de tabela `lotação`
--
ALTER TABLE `lotação`
  MODIFY `Matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- AUTO_INCREMENT de tabela `ocupacao`
--
ALTER TABLE `ocupacao`
  MODIFY `Matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
