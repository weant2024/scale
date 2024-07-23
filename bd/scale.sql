SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
CREATE DATABASE IF NOT EXISTS `scale` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `scale`;
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
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `cnpj_cpf` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `cnpj_cpf`) VALUES
(1, '12345678901234'),
(2, 'Valhalla'),
(3, 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contrato`
--

CREATE TABLE `contrato` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `contrato`
--

INSERT INTO `contrato` (`id`, `nome`, `status`) VALUES
(1, 'Ragnarok', 1);

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
-- Estrutura para tabela `licenca`
--

CREATE TABLE `licenca` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `licenca`
--

INSERT INTO `licenca` (`id`, `tipo`, `id_cliente`, `id_usuario`, `id_pagamento`) VALUES
(1, 6, 1, 1, 1),
(2, 5, 2, 11, 2),
(3, 5, 2, 12, 2),
(4, 5, 2, 13, 2),
(5, 5, 2, 14, 2),
(7, 5, 2, 31, 2),
(8, 5, 2, 32, 2),
(9, 5, 2, 15, 2),
(10, 5, 3, 2, 3),
(11, 5, 3, 3, 3),
(12, 5, 3, 4, 3),
(13, 5, 3, 5, 3),
(14, 6, 1, 6, 1),
(15, 6, 1, 10, 1),
(16, 6, 1, 9, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `local`
--

CREATE TABLE `local` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `id_contrato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `local`
--

INSERT INTO `local` (`id`, `nome`, `id_contrato`) VALUES
(1, 'Asgard', 1),
(2, 'Midgard', 1),
(4, 'Nidavellir', 1),
(5, 'Álfheim', 1),
(6, 'Jotunheim', 1),
(7, 'Svartalfheim', 1),
(8, 'Niflheim', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id` int(11) NOT NULL,
  `cnpj_cpf` varchar(60) NOT NULL,
  `token` varchar(60) NOT NULL,
  `diasativo` varchar(60) NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `tipodelicenca` int(11) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `pagamento`
--

INSERT INTO `pagamento` (`id`, `cnpj_cpf`, `token`, `diasativo`, `horario`, `dia`, `semana`, `mes`, `ano`, `tipodelicenca`, `valor`, `status`) VALUES
(1, '12345678901234', '1c2o3n4t5r6a7t8o9s', '360', '08:00:00', '06', 'Terça', 'Junho', '2024', 6, 'R$0', 'reservada'),
(2, 'Valhalla', '1c2o3n4t5r6a7t8o9s', '300', '08:00:00', '06', 'Terça', 'Junho', '2024', 0, 'R$25000', 'ativo'),
(3, 'teste', '1c2o3n4t5r6a7t8o9s', '300', '08:00:00', '06', 'Terça', 'Junho', '2024', 0, 'R$25000', 'ativo');

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
-- Estrutura para tabela `registrocontrato`
--

CREATE TABLE `registrocontrato` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `status` int(11) NOT NULL,
  `loghorario` varchar(60) NOT NULL,
  `logdia` varchar(60) NOT NULL,
  `logsemana` varchar(60) NOT NULL,
  `logmes` varchar(60) NOT NULL,
  `logano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(7, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', '', '', '1', 'Usuario', '1', 'Ativado', '4', '20:20:35', '04', 'Quinta', 'Julho', '2024', 'alessandro.albuquerque'),
(8, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '20:20:45', '04', 'Quinta', 'Julho', '2024', 'alessandro.albuquerque'),
(9, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '15:04:55', '05', 'Sexta', 'Julho', '2024', 'alessandro.albuquerque'),
(10, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '111111111111', '14/11/1986', '', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '1', '15:05:05', '05', 'Sexta', 'Julho', '2024', 'alessandro.albuquerque'),
(11, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '15:05:05', '05', 'Sexta', 'Julho', '2024', 'alessandro.albuquerque'),
(16, 11, 'thor.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Thor Ragnarok', '123', '1970-07-20', 'Masculino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:13:56', '16', 'Terça', 'Julho', '2024', 'admin'),
(17, 11, 'odin.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Odin Ragnarok', '321', '1960-07-20', 'Não definido', '321@123.com', '123456', '', '', '2', 'Gestor', '0', 'Desativado', '4', '15:16:47', '16', 'Terça', 'Julho', '2024', 'admin'),
(18, 11, 'odin.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Odin Ragnarok', '321', '1960-07-20', 'Não definido', '321@123.com', '123456', '', '', '2', 'Gestor', '0', 'Desativado', '4', '15:17:06', '16', 'Terça', 'Julho', '2024', 'admin'),
(19, 11, 'odin.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Odin Ragnarok', '321', '1960-07-20', 'Não definido', '321@123.com', '123456', '', '', '2', 'Gestor', '0', 'Desativado', '4', '15:19:48', '16', 'Terça', 'Julho', '2024', 'admin'),
(20, 11, 'odin.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Odin Ragnarok', '321', '1960-07-20', '', '321@123.com', '123456', '', '', '2', 'Tecnico', '0', 'Desativado', '1', '15:24:30', '16', 'Terça', 'Julho', '2024', 'admin'),
(21, 12, 'thor.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Thor Ragnarok', '123', '1980-07-20', 'Masculino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:01', '16', 'Terça', 'Julho', '2024', 'admin'),
(22, 13, 'lagertha.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Lagertha Ragnarok', '123', '1990-07-21', 'Feminino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:59', '16', 'Terça', 'Julho', '2024', 'admin'),
(23, 14, 'freya.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '15:27:44', '16', 'Terça', 'Julho', '2024', 'admin'),
(24, 15, 'loki.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Loki Ragnarok', '123', '1990-07-23', 'Masculino', '123@gmail.com', '111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '07:15:59', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(41, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativo', '3', '17:09:22', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(42, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '1', 'Ativado', '4', '22:07:09', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(43, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '1', 'Ativado', '4', '22:07:18', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(44, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '1', 'Ativado', '4', '22:07:40', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(45, 14, 'freya.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Freya Ragnarok', '123', '1970-07-22', '', '123@123.com', '1111111', '', '', '2', 'Tecnico', '1', 'Ativado', '1', '22:17:57', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(46, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '1', 'Ativado', '4', '22:18:08', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(47, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '0', 'Desativado', '4', '00:12:50', '22', 'Segunda', 'Julho', '2024', 'freya.ragnarok'),
(48, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '0', 'Desativado', '4', '00:13:02', '22', 'Segunda', 'Julho', '2024', 'freya.ragnarok'),
(49, 14, 'freya.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', '', '', '2', 'Gestor', '1', 'Ativado', '4', '00:26:08', '23', 'Terça', 'Julho', '2024', 'freya.ragnarok'),
(50, 14, 'freya.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', '', '', '2', 'Gestor', '1', 'Ativado', '4', '00:26:13', '23', 'Terça', 'Julho', '2024', 'freya.ragnarok');

-- --------------------------------------------------------

--
-- Estrutura para tabela `relacao_cliente`
--

CREATE TABLE `relacao_cliente` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `relacao_cliente`
--

INSERT INTO `relacao_cliente` (`id`, `id_usuario`, `id_contrato`, `id_cliente`) VALUES
(21, 11, 1, 2),
(22, 12, 1, 2),
(23, 13, 1, 2),
(24, 14, 1, 2),
(25, 32, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `relacao_contrato`
--

CREATE TABLE `relacao_contrato` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `id_local` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `relacao_contrato`
--

INSERT INTO `relacao_contrato` (`id`, `id_cliente`, `id_contrato`, `id_local`) VALUES
(12, 2, 1, 1),
(13, 2, 1, 2),
(14, 2, 1, 6),
(15, 2, 1, 7),
(16, 2, 1, 8);

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
  `nascimento` varchar(60) NOT NULL,
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
(1, 'alessandro.albuquerque', '123', 'Alessandro Almeida de Albuquerque', '1111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '4', '05:14', '30', 'Domingo', 'Junho', '2024', 'Banco de Dados'),
(3, 'gestor', '123', 'gestor local', '123', '17/03/1984', 'Não definido', '111111111', '11111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '3', '21:58:08', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(4, 'usuario', '123', 'usuario local', '123', '17/03/1984', 'Masculino', '11111111111111111', '1111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '21:58:35', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(5, 'desativado', '123', 'desativado local', '123', '28/02/1990', 'Não definido', '123@123.com', '123123123', '', '', '1', 'Usuario', '0', 'Desativado', '4', '21:59:33', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(6, 'wagner.caldas', '123', 'Wagner Rocha Caldas', '123', '17/03/1984', '', '123@asd.com', '111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '3', '20:32:43', '02', 'Ter?a', 'Julho', '2024', 'alessandro.albuquerque'),
(9, 'nikolas.giordani', '111111111111', 'Nikolas Giordani', '111111111111', '11/05/1994', 'Masculino', '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '22:13:48', '02', 'Ter?a', 'Julho', '2024', 'admin'),
(10, 'eduardo.goncalves', '111111111111', 'Eduardo Gonçalves', '111111111111', '16/09/1996', 'Masculino', '123@123', '1111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '22:18:48', '02', 'Terça', 'Julho', '2024', 'admin'),
(11, 'odin.ragnarok', '321', 'Odin Ragnarok', '321', '1960-07-20', 'Outro', '321@123.com', '123456', NULL, NULL, '2', 'Gestor', '0', 'Desativado', '4', '15:13:56', '16', 'Terça', 'Julho', '2024', 'admin'),
(12, 'thor.ragnarok', '123', 'Thor Ragnarok', '123', '1980-07-20', 'Masculino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:01', '16', 'Terça', 'Julho', '2024', 'admin'),
(13, 'lagertha.ragnarok', '123', 'Lagertha Ragnarok', '123', '1990-07-21', 'Feminino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:59', '16', 'Terça', 'Julho', '2024', 'admin'),
(14, 'freya.ragnarok', '123', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '4', '15:27:44', '16', 'Terça', 'Julho', '2024', 'admin'),
(15, 'loki.ragnarok', '123', 'Loki Ragnarok', '123', '1990-07-23', 'Masculino', '123@gmail.com', '111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '07:15:59', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(32, 'tyr.ragnarok', '123', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', NULL, NULL, '1', 'Usuario', '0', 'Desativado', '4', '17:09:22', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `afastamento`
--
ALTER TABLE `afastamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contrato`
--
ALTER TABLE `contrato`
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
-- Índices de tabela `licenca`
--
ALTER TABLE `licenca`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `local`
--
ALTER TABLE `local`
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
-- Índices de tabela `registrocontrato`
--
ALTER TABLE `registrocontrato`
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
-- Índices de tabela `relacao_cliente`
--
ALTER TABLE `relacao_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `relacao_contrato`
--
ALTER TABLE `relacao_contrato`
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
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT de tabela `licenca`
--
ALTER TABLE `licenca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `registroafastamento`
--
ALTER TABLE `registroafastamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `registrocontrato`
--
ALTER TABLE `registrocontrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `registroescala`
--
ALTER TABLE `registroescala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `relacao_cliente`
--
ALTER TABLE `relacao_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `relacao_contrato`
--
ALTER TABLE `relacao_contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


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
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `cnpj_cpf` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `cnpj_cpf`) VALUES
(1, '12345678901234'),
(2, 'Valhalla'),
(3, 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contrato`
--

CREATE TABLE `contrato` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `contrato`
--

INSERT INTO `contrato` (`id`, `nome`, `status`) VALUES
(1, 'Ragnarok', 1),
(2, 'Ragnarok2', 1),
(3, 'Ragnarok3', 1),
(7, 'Ragnarok4', 0),
(8, 'Ragnarok5', 1);

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
-- Estrutura para tabela `licenca`
--

CREATE TABLE `licenca` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_pagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `licenca`
--

INSERT INTO `licenca` (`id`, `tipo`, `id_cliente`, `id_usuario`, `id_pagamento`) VALUES
(1, 6, 1, 1, 1),
(2, 5, 2, 11, 2),
(3, 5, 2, 12, 2),
(4, 5, 2, 13, 2),
(5, 5, 2, 14, 2),
(7, 5, 2, 31, 2),
(8, 5, 2, 32, 2),
(9, 5, 2, 15, 2),
(10, 5, 3, 2, 3),
(11, 5, 3, 3, 3),
(12, 5, 3, 4, 3),
(13, 5, 3, 5, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `local`
--

CREATE TABLE `local` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `id_contrato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `local`
--

INSERT INTO `local` (`id`, `nome`, `id_contrato`) VALUES
(1, 'Asgard', 1),
(2, 'Midgard', 1),
(3, 'Niflheim', 1),
(4, 'Jotunheim', 1),
(5, 'Svartalfheim', 1),
(6, 'Asgard2', 2),
(7, 'Midgard2', 2),
(8, 'Niflheim2', 2),
(13, 'Asgard3', 7),
(14, 'Midgard3', 7),
(15, 'Niflheim3', 7),
(16, 'Asgard5', 8),
(17, 'Midgard5', 8),
(18, 'Niflheim5', 8),
(19, 'Jotunheim5', 8),
(20, 'Svartalfheim5', 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id` int(11) NOT NULL,
  `cnpj_cpf` varchar(60) NOT NULL,
  `token` varchar(60) NOT NULL,
  `diasativo` varchar(60) NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `tipodelicenca` int(11) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `pagamento`
--

INSERT INTO `pagamento` (`id`, `cnpj_cpf`, `token`, `diasativo`, `horario`, `dia`, `semana`, `mes`, `ano`, `tipodelicenca`, `valor`, `status`) VALUES
(1, '12345678901234', '1c2o3n4t5r6a7t8o9s', '360', '08:00:00', '06', 'Terça', 'Junho', '2024', 6, 'R$0', 'reservada'),
(2, 'Valhalla', '1c2o3n4t5r6a7t8o9s', '300', '08:00:00', '06', 'Terça', 'Junho', '2024', 0, 'R$25000', 'ativo'),
(3, 'teste', '1c2o3n4t5r6a7t8o9s', '300', '08:00:00', '06', 'Terça', 'Junho', '2024', 0, 'R$25000', 'ativo');

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
-- Estrutura para tabela `registrocontrato`
--

CREATE TABLE `registrocontrato` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `status` int(11) NOT NULL,
  `loghorario` varchar(60) NOT NULL,
  `logdia` varchar(60) NOT NULL,
  `logsemana` varchar(60) NOT NULL,
  `logmes` varchar(60) NOT NULL,
  `logano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `registrocontrato`
--

INSERT INTO `registrocontrato` (`id`, `nome`, `status`, `loghorario`, `logdia`, `logsemana`, `logmes`, `logano`, `operador`) VALUES
(1, 'Ragnarok', 1, '', '', '', '', '', ''),
(2, 'Ragnarok2', 1, '', '', '', '', '', ''),
(3, 'Ragnarok3', 1, '', '', '', '', '', ''),
(7, 'Ragnarok4', 0, '', '', '', '', '', ''),
(8, 'Ragnarok5', 1, '', '', '', '', '', '');

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
(23, 14, 'freya.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '15:27:44', '16', 'Terça', 'Julho', '2024', 'admin'),
(24, 15, 'loki.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Loki Ragnarok', '123', '1990-07-23', 'Masculino', '123@gmail.com', '111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '07:15:59', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(41, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativo', '3', '17:09:22', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(42, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '1', 'Ativado', '4', '22:07:09', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(43, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '1', 'Ativado', '4', '22:07:18', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(44, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '1', 'Ativado', '4', '22:07:40', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(45, 14, 'freya.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Freya Ragnarok', '123', '1970-07-22', '', '123@123.com', '1111111', '', '', '2', 'Tecnico', '1', 'Ativado', '1', '22:17:57', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(46, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '1', 'Ativado', '4', '22:18:08', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(47, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '0', 'Desativado', '4', '00:12:50', '22', 'Segunda', 'Julho', '2024', 'freya.ragnarok'),
(48, 32, 'tyr.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', '', '', '1', 'Usuario', '0', 'Desativado', '4', '00:13:02', '22', 'Segunda', 'Julho', '2024', 'freya.ragnarok'),
(49, 14, 'freya.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', '', '', '2', 'Gestor', '1', 'Ativado', '4', '00:26:08', '23', 'Terça', 'Julho', '2024', 'freya.ragnarok'),
(50, 14, 'freya.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', '', '', '2', 'Gestor', '1', 'Ativado', '4', '00:26:13', '23', 'Terça', 'Julho', '2024', 'freya.ragnarok');

-- --------------------------------------------------------

--
-- Estrutura para tabela `relacao_cliente`
--

CREATE TABLE `relacao_cliente` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `relacao_cliente`
--

INSERT INTO `relacao_cliente` (`id`, `id_usuario`, `id_contrato`, `id_cliente`) VALUES
(1, 11, 1, 2),
(2, 12, 1, 2),
(3, 13, 1, 2),
(5, 11, 2, 2),
(6, 12, 2, 2),
(7, 13, 2, 2),
(9, 11, 3, 2),
(10, 12, 3, 2),
(11, 13, 3, 2),
(55, 32, 1, 2),
(56, 32, 3, 2),
(63, 11, 7, 2),
(68, 13, 7, 2),
(69, 14, 7, 2),
(70, 12, 7, 2),
(72, 15, 7, 2),
(73, 15, 3, 2),
(74, 12, 8, 2),
(75, 13, 8, 2),
(76, 32, 8, 2),
(77, 32, 7, 2),
(78, 11, 8, 2),
(79, 14, 8, 2),
(80, 15, 8, 2),
(81, 14, 3, 2);

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
  `nascimento` varchar(60) NOT NULL,
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
(1, 'alessandro.albuquerque', '123', 'Alessandro Almeida de Albuquerque', '1111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '4', '05:14', '30', 'Domingo', 'Junho', '2024', 'Banco de Dados'),
(2, 'admin', '123', 'admin local', '123', '17/03/1984', '', '11111111111', '1111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '4', '21:57:50', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(3, 'gestor', '123', 'gestor local', '123', '17/03/1984', 'Não definido', '111111111', '11111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '3', '21:58:08', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(4, 'usuario', '123', 'usuario local', '123', '17/03/1984', 'Masculino', '11111111111111111', '1111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '21:58:35', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(5, 'desativado', '123', 'desativado local', '123', '28/02/1990', 'Não definido', '123@123.com', '123123123', '', '', '1', 'Usuario', '0', 'Desativado', '4', '21:59:33', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(6, 'wagner.caldas', '123', 'Wagner Rocha Caldas', '123', '17/03/1984', '', '123@asd.com', '111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '3', '20:32:43', '02', 'Ter?a', 'Julho', '2024', 'alessandro.albuquerque'),
(9, 'nikolas.giordani', '111111111111', 'Nikolas Giordani', '111111111111', '11/05/1994', 'Masculino', '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '22:13:48', '02', 'Ter?a', 'Julho', '2024', 'admin'),
(10, 'eduardo.goncalves', '111111111111', 'Eduardo Gonçalves', '111111111111', '16/09/1996', 'Masculino', '123@123', '1111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '22:18:48', '02', 'Terça', 'Julho', '2024', 'admin'),
(11, 'odin.ragnarok', '321', 'Odin Ragnarok', '321', '1960-07-20', 'Outro', '321@123.com', '123456', NULL, NULL, '2', 'Gestor', '0', 'Desativado', '4', '15:13:56', '16', 'Terça', 'Julho', '2024', 'admin'),
(12, 'thor.ragnarok', '123', 'Thor Ragnarok', '123', '1980-07-20', 'Masculino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:01', '16', 'Terça', 'Julho', '2024', 'admin'),
(13, 'lagertha.ragnarok', '123', 'Lagertha Ragnarok', '123', '1990-07-21', 'Feminino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:59', '16', 'Terça', 'Julho', '2024', 'admin'),
(14, 'freya.ragnarok', '123', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '4', '15:27:44', '16', 'Terça', 'Julho', '2024', 'admin'),
(15, 'loki.ragnarok', '123', 'Loki Ragnarok', '123', '1990-07-23', 'Masculino', '123@gmail.com', '111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '07:15:59', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(32, 'tyr.ragnarok', '123', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', NULL, NULL, '1', 'Usuario', '0', 'Desativado', '4', '17:09:22', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `afastamento`
--
ALTER TABLE `afastamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contrato`
--
ALTER TABLE `contrato`
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
-- Índices de tabela `licenca`
--
ALTER TABLE `licenca`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `local`
--
ALTER TABLE `local`
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
-- Índices de tabela `registrocontrato`
--
ALTER TABLE `registrocontrato`
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
-- Índices de tabela `relacao_cliente`
--
ALTER TABLE `relacao_cliente`
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
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
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
-- AUTO_INCREMENT de tabela `licenca`
--
ALTER TABLE `licenca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `registroafastamento`
--
ALTER TABLE `registroafastamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `registrocontrato`
--
ALTER TABLE `registrocontrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `registroescala`
--
ALTER TABLE `registroescala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `relacao_cliente`
--
ALTER TABLE `relacao_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
