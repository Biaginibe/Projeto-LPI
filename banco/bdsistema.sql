-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2019 às 01:29
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdsistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `cod` int(11) NOT NULL,
  `empresa` varchar(90) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `contato` varchar(90) NOT NULL,
  `cnpj` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbobstecnica`
--

CREATE TABLE `tbobstecnica` (
  `cod` int(11) NOT NULL,
  `obs_tecnica` varchar(500) NOT NULL,
  `status` varchar(30) NOT NULL,
  `data_conclusao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbservico`
--

CREATE TABLE `tbservico` (
  `cod` int(11) NOT NULL,
  `codtecnico` int(11) NOT NULL,
  `codcliente` int(11) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtecnico`
--

CREATE TABLE `tbtecnico` (
  `cod` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbtecnico`
--

INSERT INTO `tbtecnico` (`cod`, `nome`, `endereco`, `telefone`) VALUES
(1, 'anselmo', 'IFSP', '123456'),
(2, 'anselmo', 'IFSP', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `cod` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `user` varchar(30) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `perfil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`cod`, `nome`, `user`, `senha`, `perfil`) VALUES
(5, 'anselmo', 'prof', 'a906449d5769fa7361d7ecc6aa3f6d28', 'user'),
(7, 'aaa', 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'adm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `tbobstecnica`
--
ALTER TABLE `tbobstecnica`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `tbservico`
--
ALTER TABLE `tbservico`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `CODcodcod` (`codcliente`),
  ADD KEY `lalalala` (`codtecnico`);

--
-- Indexes for table `tbtecnico`
--
ALTER TABLE `tbtecnico`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbobstecnica`
--
ALTER TABLE `tbobstecnica`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbservico`
--
ALTER TABLE `tbservico`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbtecnico`
--
ALTER TABLE `tbtecnico`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbservico`
--
ALTER TABLE `tbservico`
  ADD CONSTRAINT `CODcodcod` FOREIGN KEY (`codcliente`) REFERENCES `tbcliente` (`cod`),
  ADD CONSTRAINT `lalalala` FOREIGN KEY (`codtecnico`) REFERENCES `tbtecnico` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
