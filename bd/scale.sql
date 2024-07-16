-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/07/2024 às 03:28
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `scale`
--
CREATE DATABASE IF NOT EXISTS `scale` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `scale`;

-- --------------------------------------------------------

--
-- Banco de dados: `scale`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `afastamento`
--

CREATE TABLE `afastamento` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `motivo` varchar(60) NOT NULL,
  `datainicial` varchar(60) NOT NULL,
  `datafinal` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `afastamento`
--

INSERT INTO `afastamento` (`id`, `id_usuario`, `motivo`, `datainicial`, `datafinal`) VALUES
(1, 1, 'Licença', '14/11/2024', '15/11/2024'),
(2, 1, 'Atestado', '03/07/2024', '10/07/2024'),
(6, 1, 'Férias', '12/07/2024', '12/08/2024'),
(7, 1, 'Folga', '21/07/2024', '21/07/2024'),
(8, 1, 'Folga', '04/08/2024', '04/08/2024');

-- --------------------------------------------------------

--
-- Estrutura para tabela `escala`
--

CREATE TABLE `escala` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(60) NOT NULL,
  `horarioinicio` varchar(60) NOT NULL,
  `intervaloinicio` varchar(60) NOT NULL,
  `intervalofim` varchar(60) NOT NULL,
  `horariofim` varchar(60) NOT NULL,
  `local` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `escala`
--

INSERT INTO `escala` (`id`, `id_usuario`, `horarioinicio`, `intervaloinicio`, `intervalofim`, `horariofim`, `local`, `dia`, `mes`, `ano`, `operador`) VALUES
(1, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '01', '07', '2024', 'admin'),
(2, '10', '07:00:00', '10:00:00', '10:15:00', '13:00:00', 'TJ', '01', '07', '2024', 'admin'),
(3, '9', '13:00:00', '16:00:00', '16:15:00', '19:00:00', 'TJ', '01', '07', '2024', 'admin'),
(4, '6', '19:00:00', '21:00:00', '21:15:00', '01:00:00', 'TJ', '01', '07', '2024', 'admin'),
(5, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '02', '07', '2024', 'admin'),
(6, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '03', '07', '2024', 'admin'),
(7, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '04', '07', '2024', 'admin'),
(8, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '05', '07', '2024', 'admin'),
(9, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '06', '07', '2024', 'admin'),
(10, '6', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '14', '11', '2024', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `jornada`
--

CREATE TABLE `jornada` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `tipo_de_escala` varchar(60) NOT NULL,
  `inicio_de_expediente` varchar(60) NOT NULL,
  `fim_de_expediente` varchar(60) NOT NULL,
  `contrato` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id` int(11) NOT NULL,
  `serial` varchar(60) NOT NULL,
  `diasativo` varchar(60) NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `reserva` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `pagamento`
--

INSERT INTO `pagamento` (`id`, `serial`, `diasativo`, `horario`, `dia`, `semana`, `mes`, `ano`, `reserva`) VALUES
(1, '1c2o3n4t5r6a7t8o9s', '300', '08:00:00', '06', 'Terça', 'Junho', '2024', 'contratos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registroafastamento`
--

CREATE TABLE `registroafastamento` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `motivo` varchar(60) NOT NULL,
  `datanicial` varchar(60) NOT NULL,
  `datafinal` varchar(60) NOT NULL,
  `loghorario` varchar(60) NOT NULL,
  `logdia` varchar(60) NOT NULL,
  `logsemana` varchar(60) NOT NULL,
  `logmes` varchar(60) NOT NULL,
  `logano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `registroafastamento`
--

INSERT INTO `registroafastamento` (`id`, `id_usuario`, `motivo`, `datanicial`, `datafinal`, `loghorario`, `logdia`, `logsemana`, `logmes`, `logano`, `operador`) VALUES
(1, 1, 'Doidera', '', '', '23:16:40', '02', 'Terça', 'Julho', '2024', 'alessandro.albuquerque'),
(2, 1, 'Doidera2', '03/07/2024', '09/07/2024', '23:35:13', '02', 'Terça', 'Julho', '2024', 'alessandro.albuquerque'),
(3, 1, 'asdawdasdw', '03/07/2024', '10/07/2024', '20:43:46', '03', 'Quarta', 'Julho', '2024', 'alessandro.albuquerque'),
(4, 1, 'Férias', '12/07/2024', '12/08/2024', '15:02:48', '04', 'Quinta', 'Julho', '2024', 'alessandro.albuquerque');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registroescala`
--

CREATE TABLE `registroescala` (
  `id` int(11) NOT NULL,
  `id_escala` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `horarioinicio` varchar(60) NOT NULL,
  `intervaloinicio` varchar(60) NOT NULL,
  `intervalofim` varchar(60) NOT NULL,
  `horariofim` varchar(60) NOT NULL,
  `local` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `loghorario` varchar(60) NOT NULL,
  `logdia` varchar(60) NOT NULL,
  `logsemana` varchar(60) NOT NULL,
  `logmes` varchar(60) NOT NULL,
  `logano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `registroescala`
--

INSERT INTO `registroescala` (`id`, `id_escala`, `id_usuario`, `horarioinicio`, `intervaloinicio`, `intervalofim`, `horariofim`, `local`, `dia`, `mes`, `ano`, `loghorario`, `logdia`, `logsemana`, `logmes`, `logano`, `operador`) VALUES
(1, 1, 1, '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '01', '07', '2024', '01:59:55', '16', 'Terça', 'Julho', '2024', 'admin'),
(2, 2, 10, '07:00:00', '10:00:00', '10:15:00', '13:00:00', 'TJ', '01', '07', '2024', '02:00:06', '16', 'Terça', 'Julho', '2024', 'admin'),
(3, 3, 9, '13:00:00', '16:00:00', '16:15:00', '19:00:00', 'TJ', '01', '07', '2024', '02:00:18', '16', 'Terça', 'Julho', '2024', 'admin'),
(4, 4, 6, '19:00:00', '21:00:00', '21:15:00', '01:00:00', 'TJ', '01', '07', '2024', '02:00:25', '16', 'Terça', 'Julho', '2024', 'admin'),
(5, 5, 1, '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '02', '07', '2024', '03:04:30', '16', 'Terça', 'Julho', '2024', 'admin'),
(6, 6, 1, '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '03', '07', '2024', '03:04:30', '16', 'Terça', 'Julho', '2024', 'admin'),
(7, 7, 1, '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '04', '07', '2024', '03:04:30', '16', 'Terça', 'Julho', '2024', 'admin'),
(8, 8, 1, '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '05', '07', '2024', '03:04:30', '16', 'Terça', 'Julho', '2024', 'admin'),
(9, 9, 1, '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '06', '07', '2024', '03:04:30', '16', 'Terça', 'Julho', '2024', 'admin'),
(10, 1, 1, '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '01', '07', '2024', '03:15:24', '16', 'Terça', 'Julho', '2024', 'admin'),
(11, 10, 6, '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '14', '11', '2024', '05:47:05', '16', 'Terça', 'Julho', '2024', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registrousuario`
--

CREATE TABLE `registrousuario` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(60) NOT NULL,
  `nascimento` varchar(60) NOT NULL,
  `genero` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `departamento` varchar(60) DEFAULT NULL,
  `cargo` varchar(60) DEFAULT NULL,
  `nivel` varchar(11) NOT NULL,
  `pnivel` varchar(60) NOT NULL,
  `ativo` varchar(11) NOT NULL,
  `pativo` varchar(60) NOT NULL,
  `gerasenha` varchar(60) NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `registrousuario`
--

INSERT INTO `registrousuario` (`id`, `id_usuario`, `login`, `senha`, `nome`, `cpf`, `nascimento`, `genero`, `email`, `telefone`, `departamento`, `cargo`, `nivel`, `pnivel`, `ativo`, `pativo`, `gerasenha`, `horario`, `dia`, `semana`, `mes`, `ano`, `operador`) VALUES
(1, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '123', '14/11/1986', 'Masculino', 'alessadro.aalbuquerque', '1111111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '19:33:58', '04', 'Quinta', 'Julho', '2024', 'alessandro.albuquerque'),
(2, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '123', '14/11/1986', 'Masculino', 'alessadro.aalbuquerque', '1111111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '19:34:05', '04', 'Quinta', 'Julho', '2024', 'alessandro.albuquerque'),
(3, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '123', '14/11/1986', '', 'alessadro.aalbuquerque', '1111111111111', '', '', '3', 'Administrador', '1', 'Ativado', '1', '20:05:38', '04', 'Quinta', 'Julho', '2024', 'alessandro.albuquerque'),
(4, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '123', '14/11/1986', '', 'alessadro.aalbuquerque', '1111111111111', '', '', '3', 'Administrador', '1', 'Ativado', '1', '20:08:42', '04', 'Quinta', 'Julho', '2024', 'alessandro.albuquerque'),
(5, 1, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', '', '', '', '', 'Desativado', '4', '20:10:01', '04', 'Quinta', 'Julho', '2024', 'alessandro.albuquerque'),
(6, 1, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', '', '', '', '', 'Desativado', '4', '20:11:50', '04', 'Quinta', 'Julho', '2024', 'alessandro.albuquerque'),
(7, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', '', '', '1', 'Usuario', '1', 'Ativado', '4', '20:20:35', '04', 'Quinta', 'Julho', '2024', 'alessandro.albuquerque'),
(8, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '20:20:45', '04', 'Quinta', 'Julho', '2024', 'alessandro.albuquerque'),
(9, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '15:04:55', '05', 'Sexta', 'Julho', '2024', 'alessandro.albuquerque'),
(10, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '111111111111', '14/11/1986', '', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '1', '15:05:05', '05', 'Sexta', 'Julho', '2024', 'alessandro.albuquerque'),
(11, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '15:05:05', '05', 'Sexta', 'Julho', '2024', 'alessandro.albuquerque'),
(12, 2, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', 'admin local', '123', '17/03/1984', '', '11111111111', '1111111111', '', '', '', 'Administrador', '', 'Desativado', '4', '01:14:35', '12', 'Sexta', 'Julho', '2024', 'admin'),
(13, 2, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', 'admin local', '123', '17/03/1984', '', '11111111111', '1111111111', '', '', '', 'Administrador', '', 'Desativado', '4', '01:15:55', '12', 'Sexta', 'Julho', '2024', 'admin'),
(14, 2, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', 'admin local', '123', '17/03/1984', '', '11111111111', '1111111111', '', '', '', 'Administrador', '', 'Desativado', '4', '01:16:45', '12', 'Sexta', 'Julho', '2024', 'admin'),
(15, 2, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', 'admin local', '123', '17/03/1984', '', '11111111111', '1111111111', '', '', '2', 'Gestor', '1', 'Ativado', '4', '01:18:46', '12', 'Sexta', 'Julho', '2024', 'admin'),
(16, 11, 'thor.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Thor Ragnarok', '123', '1970-07-20', 'Masculino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:13:56', '16', 'Terça', 'Julho', '2024', 'admin'),
(17, 11, 'odin.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Odin Ragnarok', '321', '1960-07-20', 'Não definido', '321@123.com', '123456', '', '', '2', 'Gestor', '0', 'Desativado', '4', '15:16:47', '16', 'Terça', 'Julho', '2024', 'admin'),
(18, 11, 'odin.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Odin Ragnarok', '321', '1960-07-20', 'Não definido', '321@123.com', '123456', '', '', '2', 'Gestor', '0', 'Desativado', '4', '15:17:06', '16', 'Terça', 'Julho', '2024', 'admin'),
(19, 11, 'odin.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Odin Ragnarok', '321', '1960-07-20', 'Não definido', '321@123.com', '123456', '', '', '2', 'Gestor', '0', 'Desativado', '4', '15:19:48', '16', 'Terça', 'Julho', '2024', 'admin'),
(20, 11, 'odin.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Odin Ragnarok', '321', '1960-07-20', '', '321@123.com', '123456', '', '', '2', 'Tecnico', '0', 'Desativado', '1', '15:24:30', '16', 'Terça', 'Julho', '2024', 'admin'),
(21, 12, 'thor.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Thor Ragnarok', '123', '1980-07-20', 'Masculino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:01', '16', 'Terça', 'Julho', '2024', 'admin'),
(22, 13, 'lagertha.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Lagertha Ragnarok', '123', '1990-07-21', 'Feminino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:59', '16', 'Terça', 'Julho', '2024', 'admin'),
(23, 14, 'freya.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '15:27:44', '16', 'Terça', 'Julho', '2024', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `testeescala`
--

CREATE TABLE `testeescala` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(60) NOT NULL,
  `horarioinicio` varchar(60) NOT NULL,
  `intervaloinicio` varchar(60) NOT NULL,
  `intervalofim` varchar(60) NOT NULL,
  `horariofim` varchar(60) NOT NULL,
  `local` varchar(60) NOT NULL,
  `data` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `testeescala`
--

INSERT INTO `testeescala` (`id`, `id_usuario`, `horarioinicio`, `intervaloinicio`, `intervalofim`, `horariofim`, `local`, `data`, `operador`) VALUES
(1, '1', '[123]', '[123]', '[123]', '[123]', '[123]', '30/06/2024', '[admin]'),
(2, '1', '[123]', '[123]', '[123]', '[123]', '[123]', '01/07/2024', '[admin]'),
(3, '1', '[123]', '[123]', '[123]', '[123]', '[123]', '02/07/2024', '[admin]'),
(4, '1', '[123]', '[123]', '[123]', '[123]', '[123]', '03/07/2024', '[admin]'),
(5, '1', '[123]', '[123]', '[123]', '[123]', '[123]', '04/07/2024', '[admin]'),
(6, '1', '[123]', '[123]', '[123]', '[123]', '[123]', '05/07/2024', '[admin]'),
(7, '1', '[123]', '[123]', '[123]', '[123]', '[123]', '06/07/2024', '[admin]'),
(8, '1', '[123]', '[123]', '[123]', '[123]', '[123]', '30/07/2024', '[admin]'),
(9, '2', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '10/07/2024', '[value-9]'),
(10, '2', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '11/07/2024', '[value-9]'),
(11, '2', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '12/07/2024', '[value-9]'),
(12, '2', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '13/07/2024', '[value-9]'),
(13, '2', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '14/07/2024', '[value-9]'),
(14, '2', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '15/07/2024', '[value-9]'),
(15, '2', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '16/07/2024', '[value-9]');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(60) NOT NULL,
  `nascimento` varchar(60) DEFAULT NULL,
  `genero` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `departamento` varchar(60) DEFAULT NULL,
  `cargo` varchar(60) DEFAULT NULL,
  `nivel` varchar(60) NOT NULL,
  `pnivel` varchar(60) NOT NULL,
  `ativo` varchar(60) NOT NULL,
  `pativo` varchar(60) NOT NULL,
  `gerasenha` varchar(60) NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `nome`, `cpf`, `nascimento`, `genero`, `email`, `telefone`, `departamento`, `cargo`, `nivel`, `pnivel`, `ativo`, `pativo`, `gerasenha`, `horario`, `dia`, `semana`, `mes`, `ano`, `operador`) VALUES
(1, 'alessandro.albuquerque', '111111111111', 'Alessandro Almeida de Albuquerque', '111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '4', '05:14', '30', 'Domingo', 'Junho', '2024', 'Banco de Dados'),
(2, 'admin', '123', 'admin local', '123', '17/03/1984', '', '11111111111', '1111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '4', '21:57:50', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(3, 'gestor', '123', 'gestor local', '123', '17/03/1984', 'Não definido', '111111111', '11111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '3', '21:58:08', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(4, 'usuario', '123', 'usuario local', '123', '17/03/1984', 'Masculino', '11111111111111111', '1111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '21:58:35', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(5, 'desativado', '123', 'desativado local', '123', '28/02/1990', 'Não definido', '123@123.com', '123123123', '', '', '1', 'Usuario', '0', 'Desativado', '4', '21:59:33', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(6, 'wagner.caldas', '123', 'Wagner Rocha Caldas', '123', '17/03/1984', '', '123@asd.com', '111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '3', '20:32:43', '02', 'Ter?a', 'Julho', '2024', 'alessandro.albuquerque'),
(9, 'nikolas.giordani', '111111111111', 'Nikolas Giordani', '111111111111', '11/05/1994', 'Masculino', '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '22:13:48', '02', 'Ter?a', 'Julho', '2024', 'admin'),
(10, 'eduardo.goncalves', '111111111111', 'Eduardo Gonçalves', '111111111111', '16/09/1996', 'Masculino', '123@123', '1111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '22:18:48', '02', 'Terça', 'Julho', '2024', 'admin'),
(11, 'odin.ragnarok', '321', 'Odin Ragnarok', '321', '1960-07-20', 'Não definido', '321@123.com', '123456', NULL, NULL, '2', 'Gestor', '0', 'Desativado', '4', '15:13:56', '16', 'Terça', 'Julho', '2024', 'admin'),
(12, 'thor.ragnarok', '123', 'Thor Ragnarok', '123', '1980-07-20', 'Masculino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:01', '16', 'Terça', 'Julho', '2024', 'admin'),
(13, 'lagertha.ragnarok', '123', 'Lagertha Ragnarok', '123', '1990-07-21', 'Feminino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:59', '16', 'Terça', 'Julho', '2024', 'admin'),
(14, 'freya.ragnarok', '123', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '15:27:44', '16', 'Terça', 'Julho', '2024', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `afastamento`
--
ALTER TABLE `afastamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `escala`
--
ALTER TABLE `escala`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registroafastamento`
--
ALTER TABLE `registroafastamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registroescala`
--
ALTER TABLE `registroescala`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registrousuario`
--
ALTER TABLE `registrousuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `testeescala`
--
ALTER TABLE `testeescala`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `afastamento`
--
ALTER TABLE `afastamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `escala`
--
ALTER TABLE `escala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `jornada`
--
ALTER TABLE `jornada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `registroafastamento`
--
ALTER TABLE `registroafastamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `registroescala`
--
ALTER TABLE `registroescala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `testeescala`
--
ALTER TABLE `testeescala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
