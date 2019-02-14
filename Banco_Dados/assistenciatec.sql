-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Fev-2019 às 11:32
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assistenciatec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadcliente`
--

CREATE TABLE `cadcliente` (
  `idcadcliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadservico`
--

CREATE TABLE `cadservico` (
  `idcadservico` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `modeloeq` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordemservico`
--

CREATE TABLE `ordemservico` (
  `idordemservico` int(11) NOT NULL,
  `modeoeq` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `tempo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadcliente`
--
ALTER TABLE `cadcliente`
  ADD PRIMARY KEY (`idcadcliente`);

--
-- Indexes for table `cadservico`
--
ALTER TABLE `cadservico`
  ADD PRIMARY KEY (`idcadservico`);

--
-- Indexes for table `ordemservico`
--
ALTER TABLE `ordemservico`
  ADD PRIMARY KEY (`idordemservico`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadcliente`
--
ALTER TABLE `cadcliente`
  MODIFY `idcadcliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cadservico`
--
ALTER TABLE `cadservico`
  MODIFY `idcadservico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordemservico`
--
ALTER TABLE `ordemservico`
  MODIFY `idordemservico` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
