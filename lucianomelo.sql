-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jan-2020 às 04:29
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lucianomelo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `crm` int(11) DEFAULT NULL,
  `nome` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`crm`, `nome`) VALUES
(2222335, 'CARDIOLOGIA INFANTIL'),
(2222335, 'CIRURGIA CARDÍACA'),
(2222335, 'BUCO MAXILO'),
(43224455, 'CIRURGIA PLÁSTICA'),
(43224455, 'CLINICA MEDICA'),
(43224455, 'ANGIOLOGIA'),
(76322, 'BUCO MAXILO'),
(76322, 'CIRURGIA CARDÍACA'),
(124556, 'ALERGOLOGIA'),
(124556, 'ANGIOLOGIA'),
(72356, 'ANGIOLOGIA'),
(72356, 'CARDIOLOGIA INFANTIL'),
(23456, 'BUCO MAXILO'),
(23456, 'CIRURGIA DE CABEÇA/PESCOÇO'),
(2222, 'ANGIOLOGIA'),
(3455565, 'CIRURGIA DE CABEÇA/PESCOÇO'),
(3455565, 'BUCO MAXILO'),
(3455565, 'CIRURGIA TORÁCICA'),
(3455565, 'CARDIOLOGIA INFANTIL'),
(222234, 'CARDIOLOGIA INFANTIL'),
(222234, 'ANGIOLOGIA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `crm` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`crm`, `nome`, `telefone`) VALUES
(2222, 'LUCIANO MELO SILVA FILHO', '75991139155'),
(23456, 'dr Rosane Almeida', '75991139155'),
(72356, 'dra Aletuza Leitte', '75991139155'),
(76322, 'Fernando Augusto Bulhões', '75991139155'),
(124556, 'Rosanne Trindade', '75991139155'),
(222234, 'dr Amanda Jardins', '75991139155'),
(2222335, 'Lucas Silveira', '75991139155'),
(3455565, 'dr Drauzio Varella', '75991139155'),
(43224455, 'Luciano Filho', '75991139155');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD KEY `crm` (`crm`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`crm`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD CONSTRAINT `especialidade_ibfk_1` FOREIGN KEY (`crm`) REFERENCES `medico` (`crm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
