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
(1, 13, 'Atestado', '23/08/2024', '24/08/2024'),
(2, 12, 'Licença paternidade', '26/08/2024', '31/08/2024'),
(3, 9, 'Férias', '22/08/2024', '07/09/2024'),
(7, 12, 'Atestado', '03/09/2024', '04/09/2024');

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
(3, 'teste'),
(4, 'Validacao');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contrato`
--

CREATE TABLE `contrato` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `tipodeescala` varchar(60) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `contrato`
--

INSERT INTO `contrato` (`id`, `nome`, `tipodeescala`, `status`) VALUES
(1, 'Ragnarok', '', 1),
(2, 'Las Vegas', '', 1),
(3, 'Ragnarok', '', 1),
(4, 'Ragnarok2', '', 0),
(5, 'teste', '', 1),
(6, 'Ragnarok3', '', 1),
(7, 'Ragnarok3', '', 1),
(8, 'Ragnarok3', '', 1),
(9, 'Ragnarok3', '', 1),
(10, 'Ragnarok3', '', 1),
(11, 'Ragnarok3', '', 1),
(12, 'Ragnarok4', '6x1', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `escala`
--

CREATE TABLE `escala` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_afastamento` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  `horarioinicio` varchar(60) NOT NULL,
  `intervaloinicio` varchar(60) NOT NULL,
  `intervalofim` varchar(60) NOT NULL,
  `horariofim` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `escala`
--

INSERT INTO `escala` (`id`, `id_usuario`, `id_afastamento`, `id_contrato`, `id_local`, `horarioinicio`, `intervaloinicio`, `intervalofim`, `horariofim`, `dia`, `mes`, `ano`, `operador`) VALUES
(4, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '26', '08', '2024', 'freya.ragnarok'),
(5, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '27', '08', '2024', 'freya.ragnarok'),
(6, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '28', '08', '2024', 'freya.ragnarok'),
(7, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '29', '08', '2024', 'freya.ragnarok'),
(8, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '30', '08', '2024', 'freya.ragnarok'),
(9, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '31', '08', '2024', 'freya.ragnarok'),
(10, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '22', '08', '2024', 'alessandro.albuquerque'),
(12, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '24', '08', '2024', 'alessandro.albuquerque'),
(13, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '25', '08', '2024', 'alessandro.albuquerque'),
(14, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '26', '08', '2024', 'alessandro.albuquerque'),
(15, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '27', '08', '2024', 'alessandro.albuquerque'),
(16, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '28', '08', '2024', 'alessandro.albuquerque'),
(17, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '29', '08', '2024', 'alessandro.albuquerque'),
(18, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '30', '08', '2024', 'alessandro.albuquerque'),
(19, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '31', '08', '2024', 'alessandro.albuquerque'),
(20, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '01', '09', '2024', 'alessandro.albuquerque'),
(21, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '02', '09', '2024', 'alessandro.albuquerque'),
(22, 14, 3, 3, 12, '13:00', '19:33', '19:48', '19:00', '03', '09', '2024', 'freya.ragnarok'),
(23, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '04', '09', '2024', 'alessandro.albuquerque'),
(24, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '05', '09', '2024', 'alessandro.albuquerque'),
(25, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '06', '09', '2024', 'alessandro.albuquerque'),
(26, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '07', '09', '2024', 'alessandro.albuquerque'),
(32, 12, 0, 11, 22, '13:00', '19:00', '19:15', '19:00', '29', '08', '2024', 'freya.ragnarok'),
(33, 12, 0, 11, 22, '13:00', '15:52', '16:07', '19:00', '28', '08', '2024', 'freya.ragnarok'),
(34, 13, 0, 3, 11, '13:00', '19:36', '19:51', '19:00', '25', '08', '2024', 'freya.ragnarok'),
(35, 14, 0, 3, 14, '13:00', '16:52', '17:07', '21:00', '27', '08', '2024', 'freya.ragnarok'),
(36, 12, 0, 12, 23, '01:00', '04:52', '05:07', '09:00', '01', '08', '2024', 'freya.ragnarok'),
(37, 12, 0, 12, 23, '01:00', '04:52', '05:07', '09:00', '02', '08', '2024', 'freya.ragnarok'),
(38, 13, 0, 3, 15, '01:00', '04:52', '05:07', '09:00', '01', '09', '2024', 'freya.ragnarok'),
(39, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '01', '08', '2024', 'freya.ragnarok'),
(40, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '02', '08', '2024', 'freya.ragnarok'),
(41, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '03', '08', '2024', 'freya.ragnarok'),
(42, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '04', '08', '2024', 'freya.ragnarok'),
(43, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '05', '08', '2024', 'freya.ragnarok'),
(44, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '06', '08', '2024', 'freya.ragnarok'),
(50, 12, 7, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '03', '09', '2024', 'freya.ragnarok'),
(51, 12, 7, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '04', '09', '2024', 'freya.ragnarok'),
(52, 13, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '01', '08', '2024', 'freya.ragnarok'),
(53, 13, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '02', '08', '2024', 'freya.ragnarok'),
(54, 13, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '10', '08', '2024', 'freya.ragnarok'),
(55, 13, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '20', '08', '2024', 'freya.ragnarok');

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
(16, 6, 1, 9, 1),
(17, 6, 1, 33, 1),
(18, 5, 4, 34, 4);

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
(8, 'Niflheim', 1),
(9, 'Cassino Royale', 2),
(10, 'Hotel Grand Life', 2),
(11, 'Asgard', 3),
(12, 'Midgard', 3),
(13, 'Niflheim', 3),
(14, 'Jotunheim', 3),
(15, 'Svartalfheim', 3),
(16, 'Asgard2', 4),
(17, 'Midgard2', 4),
(18, 'Niflheim2', 4),
(19, 'teste', 5),
(20, 'Asgard3', 11),
(21, 'Midgard3', 11),
(22, 'Niflheim3', 11),
(23, 'Asgard4', 12),
(24, 'Midgard4', 12);

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
(3, 'teste', '1c2o3n4t5r6a7t8o9s', '300', '08:00:00', '06', 'Terça', 'Junho', '2024', 0, 'R$25000', 'ativo'),
(4, 'Validacao', '1c2o3n4t5r6a7t8o9s', '300', '23:00:00', '30', 'Terça', 'Junho', '2024', 5, 'R$25000', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registroafastamento`
--

CREATE TABLE `registroafastamento` (
  `id` int(11) NOT NULL,
  `id_afastamento` int(11) NOT NULL,
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

INSERT INTO `registroafastamento` (`id`, `id_afastamento`, `id_usuario`, `motivo`, `datanicial`, `datafinal`, `loghorario`, `logdia`, `logsemana`, `logmes`, `logano`, `operador`) VALUES
(1, 1, 13, 'Atestado', '23/08/2024', '25/08/2024', '22:20:52', '22', 'Quinta', 'Agosto', '2024', 'freya.ragnarok'),
(2, 2, 12, 'Licença paternidade', '26/08/2024', '31/08/2024', '22:44:42', '22', 'Quinta', 'Agosto', '2024', 'freya.ragnarok'),
(3, 3, 9, 'Férias', '22/08/2024', '07/09/2024', '22:55:57', '22', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(4, 1, 13, 'Atestado', '23/08/2024', '24/08/2024', '15:44:45', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(5, 4, 12, 'Atestado', '03/09/2024', '06/09/2024', '06:02:01', '31', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(6, 5, 12, 'Atestado', '03/09/2024', '06/09/2024', '06:08:38', '31', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(7, 6, 12, 'Atestado', '03/09/2024', '06/09/2024', '06:09:50', '31', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(8, 7, 12, 'Atestado', '03/09/2024', '04/09/2024', '06:17:58', '31', 'Sábado', 'Agosto', '2024', 'freya.ragnarok');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registrocontrato`
--

CREATE TABLE `registrocontrato` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `tipodeescala` varchar(60) NOT NULL,
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
  `id_afastamento` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  `horarioinicio` varchar(60) NOT NULL,
  `intervaloinicio` varchar(60) NOT NULL,
  `intervalofim` varchar(60) NOT NULL,
  `horariofim` varchar(60) NOT NULL,
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

INSERT INTO `registroescala` (`id`, `id_escala`, `id_usuario`, `id_afastamento`, `id_contrato`, `id_local`, `horarioinicio`, `intervaloinicio`, `intervalofim`, `horariofim`, `dia`, `mes`, `ano`, `loghorario`, `logdia`, `logsemana`, `logmes`, `logano`, `operador`) VALUES
(1, 1, 13, 1, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '23', '08', '2024', '22:20:52', '23/08/2024', 'Quinta', 'Agosto', '2024', 'freya.ragnarok'),
(2, 2, 13, 1, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '24', '08', '2024', '22:20:52', '24/08/2024', 'Quinta', 'Agosto', '2024', 'freya.ragnarok'),
(3, 3, 13, 1, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '25', '08', '2024', '22:20:52', '25/08/2024', 'Quinta', 'Agosto', '2024', 'freya.ragnarok'),
(4, 4, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '26', '08', '2024', '22:44:42', '26/08/2024', 'Quinta', 'Agosto', '2024', 'freya.ragnarok'),
(5, 5, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '27', '08', '2024', '22:44:42', '27/08/2024', 'Quinta', 'Agosto', '2024', 'freya.ragnarok'),
(6, 6, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '28', '08', '2024', '22:44:42', '28/08/2024', 'Quinta', 'Agosto', '2024', 'freya.ragnarok'),
(7, 7, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '29', '08', '2024', '22:44:42', '29/08/2024', 'Quinta', 'Agosto', '2024', 'freya.ragnarok'),
(8, 8, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '30', '08', '2024', '22:44:42', '30/08/2024', 'Quinta', 'Agosto', '2024', 'freya.ragnarok'),
(9, 9, 12, 2, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '31', '08', '2024', '22:44:42', '31/08/2024', 'Quinta', 'Agosto', '2024', 'freya.ragnarok'),
(10, 10, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '22', '08', '2024', '22:55:57', '22/08/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(11, 11, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '23', '08', '2024', '22:55:57', '23/08/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(12, 12, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '24', '08', '2024', '22:55:57', '24/08/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(13, 13, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '25', '08', '2024', '22:55:57', '25/08/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(14, 14, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '26', '08', '2024', '22:55:57', '26/08/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(15, 15, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '27', '08', '2024', '22:55:57', '27/08/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(16, 16, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '28', '08', '2024', '22:55:57', '28/08/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(17, 17, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '29', '08', '2024', '22:55:57', '29/08/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(18, 18, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '30', '08', '2024', '22:55:57', '30/08/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(19, 19, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '31', '08', '2024', '22:55:57', '31/08/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(20, 20, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '01', '09', '2024', '22:55:57', '01/09/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(21, 21, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '02', '09', '2024', '22:55:57', '02/09/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(22, 22, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '03', '09', '2024', '22:55:57', '03/09/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(23, 23, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '04', '09', '2024', '22:55:57', '04/09/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(24, 24, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '05', '09', '2024', '22:55:57', '05/09/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(25, 25, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '06', '09', '2024', '22:55:57', '06/09/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(26, 26, 9, 3, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '07', '09', '2024', '22:55:57', '07/09/2024', 'Quinta', 'Agosto', '2024', 'alessandro.albuquerque'),
(27, 27, 13, 0, 3, 11, '07:00', '12:52', '13:07', '19:00', '23', '08', '2024', '16:02:27', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(28, 28, 13, 0, 3, 11, '01:00', '06:52', '07:07', '13:00', '<br ', '>\r\n<b>Warning<', 'b>:  Undefined variable $data in <b>C:\\xampp\\htdocs\\scale\\ed', '16:10:01', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(29, 27, 13, 0, 3, 11, '13:00', '16:52', '17:07', '21:00', '<br ', '>\r\n<b>Warning<', 'b>:  Undefined variable $data in <b>C:\\xampp\\htdocs\\scale\\ed', '16:37:40', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(30, 29, 13, 0, 3, 11, '', '16:30', '16:45', '', '25', '08', '2024', '16:38:00', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(31, 29, 12, 0, 11, 0, '', '16:30', '16:45', '', '<br ', '>\r\n<b>Warning<', 'b>:  Undefined variable $data in <b>C:\\xampp\\htdocs\\scale\\ed', '16:38:23', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(32, 30, 13, 0, 3, 11, '07:00', '12:52', '13:07', '19:00', '28', '08', '2024', '18:01:33', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(33, 30, 12, 0, 11, 0, '01:00', '06:52', '07:07', '13:00', '<br ', '>\r\n<b>Warning<', 'b>:  Undefined variable $data in <b>C:\\xampp\\htdocs\\scale\\ed', '18:04:28', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(34, 31, 13, 0, 3, 11, '01:00', '06:52', '07:07', '13:00', '28', '08', '2024', '18:09:43', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(35, 31, 12, 0, 11, 0, '13:00', '15:52', '16:07', '19:00', '<br ', '>\r\n<b>Warning<', 'b>:  Undefined variable $data in <b>C:\\xampp\\htdocs\\scale\\ed', '18:10:15', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(36, 31, 13, 0, 3, 0, '13:00', '15:52', '16:07', '19:00', '<br ', '>\r\n<b>Warning<', 'b>:  Undefined variable $data in <b>C:\\xampp\\htdocs\\scale\\ed', '18:16:51', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(37, 31, 13, 0, 3, 0, '13:00', '15:52', '16:07', '19:00', '28', '08', '2024', '18:32:37', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(38, 31, 13, 0, 3, 0, '13:00', '15:52', '16:07', '19:00', '28', '08', '2024', '18:34:09', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(39, 31, 14, 0, 3, 0, '13:00', '15:52', '16:07', '19:00', '28', '08', '2024', '18:44:12', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(40, 32, 13, 0, 3, 15, '', '18:52', '19:07', '', '29', '08', '2024', '19:00:21', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(41, 33, 12, 0, 11, 22, '13:00', '15:52', '16:07', '19:00', '28', '08', '2024', '19:01:25', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(42, 32, 12, 0, 11, 0, '', '19:00', '19:15', '', '29', '08', '2024', '19:07:49', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(43, 22, 15, 0, 3, 14, '', '19:32', '19:47', '', '29', '08', '2024', '19:40:06', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(44, 22, 13, 0, 3, 14, '', '19:33', '19:48', '', '29', '08', '2024', '19:40:41', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(45, 22, 14, 0, 3, 12, '', '19:33', '19:48', '', '29', '08', '2024', '19:41:28', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(46, 34, 13, 0, 3, 11, '', '19:36', '19:51', '', '25', '08', '2024', '19:44:07', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(47, 11, 12, 0, 11, 20, '', '19:36', '19:51', '', '25', '08', '2024', '19:44:12', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(48, 11, 13, 0, 3, 11, '14:00', '17:22', '17:37', '21:00', '25', '08', '2024', '19:47:03', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(49, 11, 12, 0, 11, 22, '', '19:39', '19:54', '', '25', '08', '2024', '19:47:21', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(50, 11, 13, 0, 3, 11, '', '19:41', '19:56', '', '25', '08', '2024', '19:48:51', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(51, 11, 14, 0, 11, 22, '', '19:41', '19:56', '', '25', '08', '2024', '19:49:03', '23', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(52, 35, 14, 0, 3, 14, '13:00', '16:52', '17:07', '21:00', '27', '08', '2024', '21:17:21', '27', 'Terça', 'Agosto', '2024', 'freya.ragnarok'),
(53, 36, 12, 0, 12, 23, '01:00', '04:52', '05:07', '09:00', '01', '08', '2024', '15:54:46', '28', 'Quarta', 'Agosto', '2024', 'freya.ragnarok'),
(54, 37, 12, 0, 12, 23, '01:00', '04:52', '05:07', '09:00', '02', '08', '2024', '15:54:46', '28', 'Quarta', 'Agosto', '2024', 'freya.ragnarok'),
(55, 38, 13, 0, 3, 15, '01:00', '04:52', '05:07', '09:00', '01', '09', '2024', '20:32:45', '30', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(56, 39, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '01', '08', '2024', '20:33:40', '30', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(57, 40, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '02', '08', '2024', '20:33:40', '30', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(58, 41, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '03', '08', '2024', '20:33:40', '30', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(59, 42, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '04', '08', '2024', '20:33:40', '30', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(60, 43, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '05', '08', '2024', '20:33:40', '30', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(61, 44, 15, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '06', '08', '2024', '20:33:40', '30', 'Sexta', 'Agosto', '2024', 'freya.ragnarok'),
(62, 36, 12, 0, 12, 23, '01:00', '04:52', '05:07', '09:00', '01', '08', '2024', '04:50:38', '31', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(63, 46, 12, 6, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '03', '09', '2024', '06:09:50', '03/09/2024', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(64, 47, 12, 6, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '04', '09', '2024', '06:09:50', '04/09/2024', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(65, 48, 12, 6, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '05', '09', '2024', '06:09:50', '05/09/2024', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(66, 49, 12, 6, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '06', '09', '2024', '06:09:50', '06/09/2024', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(67, 50, 12, 7, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '03', '09', '2024', '06:17:58', '03/09/2024', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(68, 51, 12, 7, 0, 0, 'afastado', 'afastado', 'afastado', 'afastado', '04', '09', '2024', '06:17:58', '04/09/2024', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(69, 52, 13, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '01', '08', '2024', '16:58:09', '31', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(70, 53, 13, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '02', '08', '2024', '16:58:09', '31', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(71, 54, 13, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '10', '08', '2024', '16:58:09', '31', 'Sábado', 'Agosto', '2024', 'freya.ragnarok'),
(72, 55, 13, 0, 12, 23, '07:00', '09:52', '10:07', '13:00', '20', '08', '2024', '16:58:09', '31', 'Sábado', 'Agosto', '2024', 'freya.ragnarok');

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
(50, 14, 'freya.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', '', '', '2', 'Gestor', '1', 'Ativado', '4', '00:26:13', '23', 'Terça', 'Julho', '2024', 'freya.ragnarok'),
(51, 4, 'usuario', 'd41d8cd98f00b204e9800998ecf8427e', 'usuario local', '123', '17/03/1984', 'Masculino', '123@gmail.com', '1111111111111', '', '', '1', 'Usuario', '1', 'Ativado', '4', '23:25:33', '30', 'Terça', 'Julho', '2024', 'gestor'),
(52, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '1111111111111', '14/11/1986', 'Masculino', '123@123.com.br', '+55 11 111111111', '', '', '', '', '1', 'Ativado', '4', '02:13:46', '31', 'Quarta', 'Julho', '2024', 'alessandro.albuquerque'),
(53, 1, 'alessandro.albuquerque', 'd41d8cd98f00b204e9800998ecf8427e', 'Alessandro Almeida de Albuquerque', '1111111111111', '14/11/1986', 'Masculino', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '02:50:04', '31', 'Quarta', 'Julho', '2024', 'alessandro.albuquerque'),
(54, 11, 'odin.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Odin Ragnarok', '123', '1960-07-20', 'Outro', '321@123.com.br', '12345678', '', '', '2', 'Gestor', '1', 'Ativado', '4', '03:25:29', '31', 'Quarta', 'Julho', '2024', 'alessandro.albuquerque'),
(55, 11, 'odin.ragnarok', 'd41d8cd98f00b204e9800998ecf8427e', 'Odin Ragnarok', '123', '1960-07-20', 'Outro', '321@123.com.br', '12345678', '', '', '2', 'Gestor', '0', 'Desativado', '4', '03:37:55', '31', 'Quarta', 'Julho', '2024', 'alessandro.albuquerque'),
(56, 33, 'tamires.vieira', 'd41d8cd98f00b204e9800998ecf8427e', 'Tamires Vianna Vieira', '123', '1992-02-29', 'Feminino', '123@gmail.com', '111111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativo', '3', '03:40:22', '31', 'Quarta', 'Julho', '2024', 'alessandro.albuquerque'),
(57, 33, 'tamires.vieira', 'd41d8cd98f00b204e9800998ecf8427e', 'Tamires Vianna Vieira', '123', '29/02/1992', 'Feminino', '123@gmail.com', '111111111111', '', '', '2', 'Gestor', '1', 'Ativado', '4', '03:48:08', '31', 'Quarta', 'Julho', '2024', 'alessandro.albuquerque'),
(58, 33, 'tamires.vieira', 'd41d8cd98f00b204e9800998ecf8427e', 'Tamires Vianna Vieira', '123', '30/03/1992', 'Feminino', '123@gmail.com', '111111111111', '', '', '2', 'Gestor', '1', 'Ativado', '4', '03:53:43', '31', 'Quarta', 'Julho', '2024', 'alessandro.albuquerque'),
(59, 33, 'tamires.vieira', 'd41d8cd98f00b204e9800998ecf8427e', 'Tamires Vianna Vieira', '123', '03/03/1992', 'Feminino', '123@gmail.com', '111111111111', '', '', '2', 'Gestor', '0', 'Desativado', '4', '03:56:15', '31', 'Quarta', 'Julho', '2024', 'alessandro.albuquerque');

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
(28, 6, 2, 1),
(29, 10, 2, 1),
(41, 13, 3, 2),
(42, 14, 3, 2),
(43, 32, 3, 2),
(44, 15, 3, 2),
(45, 3, 0, 3),
(47, 5, 0, 3),
(48, 3, 5, 3),
(49, 4, 5, 3),
(50, 5, 5, 3),
(53, 1, 1, 1),
(54, 1, 2, 1),
(58, 34, 0, 1),
(59, 12, 4, 2),
(60, 13, 4, 2),
(61, 14, 4, 2),
(62, 32, 4, 2),
(63, 11, 11, 2),
(64, 12, 11, 2),
(65, 13, 11, 2),
(66, 14, 11, 2),
(67, 32, 11, 2),
(68, 15, 11, 2),
(69, 11, 12, 2),
(70, 12, 12, 2),
(71, 13, 12, 2),
(72, 14, 12, 2),
(73, 32, 12, 2),
(74, 15, 12, 2);

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
(17, 1, 2, 9),
(18, 1, 2, 10),
(27, 2, 3, 11),
(28, 2, 3, 12),
(29, 2, 3, 13),
(30, 2, 3, 14),
(31, 2, 3, 15),
(32, 3, 5, 19),
(33, 2, 4, 16),
(34, 2, 4, 17),
(35, 2, 4, 18),
(36, 2, 11, 20),
(37, 2, 11, 21),
(38, 2, 11, 22),
(39, 2, 12, 23),
(40, 2, 12, 24);

-- --------------------------------------------------------

--
-- Estrutura para tabela `teste`
--

CREATE TABLE `teste` (
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
  `motivo` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `teste`
--

INSERT INTO `teste` (`id`, `id_usuario`, `horarioinicio`, `intervaloinicio`, `intervalofim`, `horariofim`, `local`, `dia`, `mes`, `ano`, `motivo`, `operador`) VALUES
(1, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '01', '07', '2024', '', 'admin'),
(2, '10', '07:00:00', '10:00:00', '10:15:00', '13:00:00', 'TJ', '01', '07', '2024', '', 'admin'),
(3, '9', '13:00:00', '16:00:00', '16:15:00', '19:00:00', 'TJ', '01', '07', '2024', '', 'admin'),
(4, '6', '19:00:00', '21:00:00', '21:15:00', '01:00:00', 'TJ', '01', '07', '2024', '', 'admin'),
(5, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '02', '07', '2024', '', 'admin'),
(6, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '03', '07', '2024', '', 'admin'),
(7, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '04', '07', '2024', '', 'admin'),
(8, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '05', '07', '2024', '', 'admin'),
(9, '1', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '06', '07', '2024', '', 'admin'),
(10, '6', '01:00:00', '04:00:00', '04:15:00', '07:00:00', 'TJ', '14', '11', '2024', '', 'admin'),
(11, '1', '123', '123', '123', '123', 'teste', '30', '07', '2024', 'Folga', 'teste');

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
(4, 'usuario', '123', 'usuario local', '123', '17/03/1984', 'Masculino', '123@gmail.com', '1111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '4', '21:58:35', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(5, 'desativado', '123', 'desativado local', '123', '28/02/1990', 'Não definido', '123@123.com', '123123123', '', '', '1', 'Usuario', '0', 'Desativado', '4', '21:59:33', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(6, 'wagner.caldas', '123', 'Wagner Rocha Caldas', '123', '17/03/1984', '', '123@asd.com', '111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '3', '20:32:43', '02', 'Ter?a', 'Julho', '2024', 'alessandro.albuquerque'),
(9, 'nikolas.giordani', '111111111111', 'Nikolas Giordani', '111111111111', '11/05/1994', 'Masculino', '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '22:13:48', '02', 'Ter?a', 'Julho', '2024', 'admin'),
(10, 'eduardo.goncalves', '111111111111', 'Eduardo Gonçalves', '111111111111', '16/09/1996', 'Masculino', '123@123', '1111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '22:18:48', '02', 'Terça', 'Julho', '2024', 'admin'),
(11, 'odin.ragnarok', '321', 'Odin Ragnarok', '123', '1960-07-20', 'Outro', '321@123.com.br', '12345678', NULL, NULL, '2', 'Gestor', '0', 'Desativado', '4', '15:13:56', '16', 'Terça', 'Julho', '2024', 'admin'),
(12, 'thor.ragnarok', '123', 'Thor Ragnarok', '123', '1980-07-20', 'Masculino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:01', '16', 'Terça', 'Julho', '2024', 'admin'),
(13, 'lagertha.ragnarok', '123', 'Lagertha Ragnarok', '123', '1990-07-21', 'Feminino', '123@123.com', '1111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '15:26:59', '16', 'Terça', 'Julho', '2024', 'admin'),
(14, 'freya.ragnarok', '123', 'Freya Ragnarok', '123', '1970-07-22', 'Feminino', '123@123.com', '1111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '4', '15:27:44', '16', 'Terça', 'Julho', '2024', 'admin'),
(15, 'loki.ragnarok', '123', 'Loki Ragnarok', '123', '1990-07-23', 'Masculino', '123@gmail.com', '111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '07:15:59', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(32, 'tyr.ragnarok', '123', 'Tyr Ragnarok', '123', '1990-02-28', 'Outro', '123@gmail.com', '111111111111', NULL, NULL, '1', 'Usuario', '0', 'Desativado', '4', '17:09:22', '21', 'Domingo', 'Julho', '2024', 'freya.ragnarok'),
(33, 'tamires.vieira', '123', 'Tamires Vianna Vieira', '123', '03/03/1992', 'Feminino', '123@gmail.com', '111111111111', NULL, NULL, '2', 'Gestor', '0', 'Desativado', '4', '03:40:22', '31', 'Quarta', 'Julho', '2024', 'alessandro.albuquerque'),
(34, 'validacao', '123', 'Validacao', '123', '03/03/1992', 'Feminino', '123@gmail.com', '111111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '4', '03:40:22', '31', 'Quarta', 'Julho', '2024', 'Banco de Dados');

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
-- Índices de tabela `teste`
--
ALTER TABLE `teste`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `escala`
--
ALTER TABLE `escala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `jornada`
--
ALTER TABLE `jornada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `licenca`
--
ALTER TABLE `licenca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `local`
--
ALTER TABLE `local`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `registroafastamento`
--
ALTER TABLE `registroafastamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `registrocontrato`
--
ALTER TABLE `registrocontrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `registroescala`
--
ALTER TABLE `registroescala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `relacao_cliente`
--
ALTER TABLE `relacao_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de tabela `relacao_contrato`
--
ALTER TABLE `relacao_contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `teste`
--
ALTER TABLE `teste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
