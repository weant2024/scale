-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/06/2024 às 21:40
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `apontamentosti`
--

CREATE TABLE `apontamentosti` (
  `id` int(255) NOT NULL,
  `data` varchar(10) NOT NULL,
  `atividade` varchar(20) NOT NULL,
  `outraatividade` varchar(60) NOT NULL,
  `tempo` varchar(8) NOT NULL,
  `horario` varchar(8) NOT NULL,
  `dia` int(2) NOT NULL,
  `semana` varchar(7) NOT NULL,
  `mes` varchar(9) NOT NULL,
  `ano` int(4) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `apontamentosti`
--

INSERT INTO `apontamentosti` (`id`, `data`, `atividade`, `outraatividade`, `tempo`, `horario`, `dia`, `semana`, `mes`, `ano`, `operador`) VALUES
(1, '05/04/2017', 'Redes', '', '01:05:20', '18:21:33', 5, 'Quarta', 'Abril', 2017, ''),
(2, '05/04/2017', 'OrganizaÃ§Ã£o', '', '00:40:05', '18:21:55', 5, 'Quarta', 'Abril', 2017, ''),
(3, '05/04/2017', 'Desenvolvimento', '', '01:05:20', '18:22:19', 5, 'Quarta', 'Abril', 2017, ''),
(4, '05/04/2017', 'Desenvolvimento', '', '02:12:00', '18:22:41', 5, 'Quarta', 'Abril', 2017, ''),
(5, '05/04/2017', 'Outros', 'Levantamento de equipamentos', '01:10:20', '18:23:10', 5, 'Quarta', 'Abril', 2017, 'alessandro.albuquerque'),
(6, '05/04/2017', 'OrientaÃ§Ã£o', '', '00:25:12', '18:34:25', 5, 'Quarta', 'Abril', 2017, ''),
(7, '05/04/2017', 'Desenvolvimento', '', '02:12:00', '20:29:42', 5, 'Quarta', 'Abril', 2017, ''),
(8, '05/04/2017', 'Desenvolvimento', '', '00:25:12', '20:50:55', 5, 'Quarta', 'Abril', 2017, 'alessandro.albuquerque'),
(9, '06/04/2017', 'Desenvolvimento', '', '02:12:00', '14:58:44', 6, 'Quinta', 'Abril', 2017, 'alessandro.albuquerque'),
(11, '06//', 'Desenvolvimento', '', '', '20:20:43', 6, 'Quinta', 'Abril', 2017, 'alessandro.albuquerque'),
(12, '06/04/2017', 'OrientaÃ§Ã£o', '', '00:45:47', '20:21:13', 6, 'Quinta', 'Abril', 2017, 'alessandro.albuquerque'),
(13, '06/04/2017', 'OrganizaÃ§Ã£o', '', '01:20:00', '20:41:19', 6, 'Quinta', 'Abril', 2017, 'diego.bordini'),
(14, '28/04/2017', 'Desenvolvimento', '', '', '16:56:13', 28, 'Sexta', 'Abril', 2017, 'alessandro.albuquerque'),
(15, '28/04/2017', 'Desenvolvimento', '', '', '16:56:57', 28, 'Sexta', 'Abril', 2017, 'alessandro.albuquerque'),
(16, '28/04/2017', 'Desenvolvimento', '', '04:00:00', '16:58:02', 28, 'Sexta', 'Abril', 2017, 'alessandro.albuquerque'),
(17, '03/05/2017', 'Desenvolvimento', '', '02:10:00', '18:00:05', 3, 'Quarta', 'Maio', 2017, 'alessandro.albuquerque'),
(18, '03/05/2017', 'Desenvolvimento', '', '01:10:00', '18:00:35', 3, 'Quarta', 'Maio', 2017, 'alessandro.albuquerque'),
(19, '09/05/2017', 'Outros', 'Apresentando sistema', '00:40:00', '20:56:43', 9, 'Terça', 'Maio', 2017, 'alessandro.albuquerque');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `mensagem` varchar(60) NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `so` varchar(60) NOT NULL,
  `navegador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `email`, `telefone`, `mensagem`, `horario`, `dia`, `semana`, `mes`, `ano`, `ip`, `so`, `navegador`) VALUES
(1, 'Alessandro Almeida', 'alessandro.aalbuquerque@gmail.com', '+55 51 82313891', '', '23:48:10', '28', 'TerÃ§a', 'Junho', '2016', 'b:u:alohati1:1', 'Windows 8', 'Chrome 51.0.2704.103'),
(3, 'Valter Gonzaga', 'vgcjr.id@gmail.com', '+55 61 91700952', '', '00:02:19', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Windows 7', 'Chrome 51.0.2704.103'),
(4, 'sabrina bastos', 'sabrinaichat@aol.com', '+55 51 36631456', '', '11:31:01', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Mac', 'Chrome 21.0.1180.90'),
(5, 'Rafael Torres ', 'torres@dimas.com.br', '+55 48 99850583', '', '12:21:38', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Mac', 'Browser Desconhecido'),
(6, 'FÃ¡bio chaves cimirro', 'fabiocimirro.vendas@hotmail.com', '+55 51 84095950', '', '12:50:22', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 50.0.2661.86'),
(7, 'Luciara dos Santos Batista ', 'lu.santos.batista@gmail.com', '+55 51 96788655', '', '14:06:09', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 51.0.2704.81'),
(8, 'joao ferreira', 'joaofelipefgs@oi.com.br', '+55 21 987586218', '', '14:23:25', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Sistema Operativo Desconhecido', 'Chrome 51.0.2704.103'),
(9, 'RÃ©gis Fonseca', 'regisrfonseca@gmail.com', '+55 51 99635606', '', '14:33:17', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Sistema Operativo Desconhecido', 'Chrome 51.0.2704.84'),
(10, 'Andre Costa', 'andre.bairos@bol.com.br', '+55 51 93913757', '', '22:03:03', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 51.0.2704.81'),
(19, 'Cristian steffen', 'Cristiansteffen12345@hotmail.com', '+55 51 95118318', '', '15:03:10', '30', 'Quinta', 'Junho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 50.0.2661.86'),
(20, 'Ferpa Becker', 'ferpabecker@gmail.com', '+55 51 95829889', '', '17:33:24', '30', 'Quinta', 'Junho', '2016', 'b:u:alohati1:1', 'Windows 7', 'Chrome 51.0.2704.103'),
(21, 'paulo rodrigo', 'paulotestemunha@hotmail.com', '+55 22 992290236', '', '23:08:07', '30', 'Quinta', 'Junho', '2016', 'b:u:alohati1:1', 'Windows 7', 'Chrome 51.0.2704.103'),
(22, 'duka junior', 'duka_junior@hotmail.com', '+55 41 9774-2252', '', '11:02:26', '03', 'Domingo', 'Julho', '2016', 'b:u:alohati1:1', 'Mac', 'Mobile Safari 537'),
(23, 'Aloha TI - SoluÃ§Ãµes em InformÃ¡tica', 'conctato.alohatiegt@gmail.com', '+55 51 8065-2322', '', '13:34:53', '03', 'Domingo', 'Julho', '2016', 'b:u:alohati1:1', 'Windows 8', 'Chrome 51.0.2704.106'),
(24, 'fabio souza', 'fabcapao73@gmail.com', '+55 51 95766357', '', '12:02:58', '05', 'TerÃ§a', 'Julho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 30.0.0.0'),
(25, 'fabio souza', 'fabcapao73@gmail.com', '+55 51 95766357', '', '12:02:58', '05', 'TerÃ§a', 'Julho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 30.0.0.0'),
(31, 'roni dela pace', 'rd.pace@hotmail.com', '+55 51 84090697', '', '14:55:27', '06', 'Quarta', 'Julho', '2016', 'b:u:alohati1:1', 'Sistema Operativo Desconhecido', 'Firefox 47.0'),
(32, 'Regis Oliveira ', 'racoblog@gmail.com', '+55 51 93218964', '', '03:07:16', '13', 'Quarta', 'Julho', '2016', 'b:u:alohati1:1', 'Mac', 'Browser Desconhecido'),
(33, 'Ana Lucia Saccomani', 'anasacomani2016@gmail.com', '+55 11 970992249', '', '11:38:49', '13', 'Quarta', 'Julho', '2016', 'b:u:alohati1:1', 'Windows 7', 'Chrome 51.0.2704.103'),
(34, 'Jonathan de Oliveira Garcia', 'jonyx97@hotmail.com', '+55 51 9528-5182', '', '16:16:56', '14', 'Quinta', 'Julho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 51.0.2704.81'),
(36, 'Nelson Junior', 'jr.kbca.rj2@gmail.com', '+55 21 964163532', '', '20:08:05', '14', 'Quinta', 'Julho', '2016', 'b:u:alohati1:1', 'Mac', 'Browser Desconhecido'),
(40, 'Teste', 'tedte@gf.cim', '+55 555565566666', '', '21:28:23', '16', 'SÃ¡bado', 'Julho', '2016', '186.230.20.245', 'Linux', 'Chrome 51.0.2704.81'),
(41, '', '', '+55 ', '', '21:28:28', '16', 'SÃ¡bado', 'Julho', '2016', '186.230.20.245', 'Linux', 'Browser Desconhecido'),
(42, 'Alessandro Almeida de Albuquerque', 'alessandro.aalbuquerque@gmail.com', '+55 5182313891', '', '21:28:30', '16', 'SÃ¡bado', 'Julho', '2016', '186.230.20.245', 'Windows 8', 'Chrome 51.0.2704.106'),
(43, 'Alessandro Almeida de Albuquerque', 'alessandro.aalbuquerque@gmail.com', '+55 5182313891', '', '21:36:22', '16', 'SÃ¡bado', 'Julho', '2016', '186.230.20.245', 'Windows 8', 'Chrome 51.0.2704.106'),
(44, 'Alessandro Almeida de Albuquerque', 'alessandro.aalbuquerque@gmail.com', '+55 5182313891', '', '21:37:12', '16', 'SÃ¡bado', 'Julho', '2016', '186.230.20.245', 'Windows 8', 'Chrome 51.0.2704.106'),
(45, 'Luciara dos Santos Batista ', 'lu.santos.batista@gmail.com', '+55 51 96788655', '', '21:51:59', '16', 'SÃ¡bado', 'Julho', '2016', '186.230.20.245', 'Linux', 'Chrome 51.0.2704.81'),
(46, '', '', '+55 ', '', '21:52:03', '16', 'SÃ¡bado', 'Julho', '2016', '186.230.20.245', 'Linux', 'Browser Desconhecido'),
(47, '', '', '+55 ', '', '21:52:04', '16', 'SÃ¡bado', 'Julho', '2016', '186.230.20.245', 'Linux', 'Browser Desconhecido'),
(48, 'Gabriela Couto Glen', 'hannah.gaga@hotmail.com', '+55 51 97851202', '', '11:44:15', '24', 'Domingo', 'Julho', '2016', 'b:u:alohati1:1', 'Mac', 'Mobile Safari 537'),
(49, 'Gabriela Couto Glen', 'hannah.gaga@hotmail.com', '+55 51 97851202', '', '11:45:22', '24', 'Domingo', 'Julho', '2016', 'b:u:alohati1:1', 'Mac', 'Mobile Safari 537');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos_acquasurf`
--

CREATE TABLE `contatos_acquasurf` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `mensagem` varchar(60) NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `so` varchar(60) NOT NULL,
  `navegador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `contatos_acquasurf`
--

INSERT INTO `contatos_acquasurf` (`id`, `nome`, `email`, `telefone`, `mensagem`, `horario`, `dia`, `semana`, `mes`, `ano`, `ip`, `so`, `navegador`) VALUES
(1, 'Alessandro Almeida', 'alessandro.aalbuquerque@gmail.com', '+55 51 82313891', '', '23:48:10', '28', 'TerÃ§a', 'Junho', '2016', 'b:u:alohati1:1', 'Windows 8', 'Chrome 51.0.2704.103'),
(2, 'Valter Gonzaga', 'vgcjr.id@gmail.com', '+55 61 91700952', '', '00:02:19', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Windows 7', 'Chrome 51.0.2704.103'),
(3, 'sabrina bastos', 'sabrinaichat@aol.com', '+55 51 36631456', '', '11:31:01', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Mac', 'Chrome 21.0.1180.90'),
(4, 'Rafael Torres ', 'torres@dimas.com.br', '+55 48 99850583', '', '12:21:38', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Mac', 'Browser Desconhecido'),
(5, 'FÃ¡bio chaves cimirro', 'fabiocimirro.vendas@hotmail.com', '+55 51 84095950', '', '12:50:22', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 50.0.2661.86'),
(6, 'Luciara dos Santos Batista ', 'lu.santos.batista@gmail.com', '+55 51 96788655', '', '14:06:09', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 51.0.2704.81'),
(7, 'joao ferreira', 'joaofelipefgs@oi.com.br', '+55 21 987586218', '', '14:23:25', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Sistema Operativo Desconhecido', 'Chrome 51.0.2704.103'),
(8, 'RÃ©gis Fonseca', 'regisrfonseca@gmail.com', '+55 51 99635606', '', '14:33:17', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Sistema Operativo Desconhecido', 'Chrome 51.0.2704.84'),
(9, 'Andre Costa', 'andre.bairos@bol.com.br', '+55 51 93913757', '', '22:03:03', '29', 'Quarta', 'Junho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 51.0.2704.81'),
(10, 'Cristian steffen', 'Cristiansteffen12345@hotmail.com', '+55 51 95118318', '', '15:03:10', '30', 'Quinta', 'Junho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 50.0.2661.86'),
(11, 'Ferpa Becker', 'ferpabecker@gmail.com', '+55 51 95829889', '', '17:33:24', '30', 'Quinta', 'Junho', '2016', 'b:u:alohati1:1', 'Windows 7', 'Chrome 51.0.2704.103'),
(12, 'paulo rodrigo', 'paulotestemunha@hotmail.com', '+55 22 992290236', '', '23:08:07', '30', 'Quinta', 'Junho', '2016', 'b:u:alohati1:1', 'Windows 7', 'Chrome 51.0.2704.103'),
(13, 'duka junior', 'duka_junior@hotmail.com', '+55 41 9774-2252', '', '11:02:26', '03', 'Domingo', 'Julho', '2016', 'b:u:alohati1:1', 'Mac', 'Mobile Safari 537'),
(14, 'Aloha TI - SoluÃ§Ãµes em InformÃ¡tica', 'conctato.alohatiegt@gmail.com', '+55 51 8065-2322', '', '13:34:53', '03', 'Domingo', 'Julho', '2016', 'b:u:alohati1:1', 'Windows 8', 'Chrome 51.0.2704.106'),
(15, 'fabio souza', 'fabcapao73@gmail.com', '+55 51 95766357', '', '12:02:58', '05', 'TerÃ§a', 'Julho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 30.0.0.0'),
(16, 'roni dela pace', 'rd.pace@hotmail.com', '+55 51 84090697', '', '14:55:27', '06', 'Quarta', 'Julho', '2016', 'b:u:alohati1:1', 'Sistema Operativo Desconhecido', 'Firefox 47.0'),
(17, 'Regis Oliveira ', 'racoblog@gmail.com', '+55 51 93218964', '', '03:07:16', '13', 'Quarta', 'Julho', '2016', 'b:u:alohati1:1', 'Mac', 'Browser Desconhecido'),
(18, 'Ana Lucia Saccomani', 'anasacomani2016@gmail.com', '+55 11 970992249', '', '11:38:49', '13', 'Quarta', 'Julho', '2016', 'b:u:alohati1:1', 'Windows 7', 'Chrome 51.0.2704.103'),
(19, 'Jonathan de Oliveira Garcia', 'jonyx97@hotmail.com', '+55 51 9528-5182', '', '16:16:56', '14', 'Quinta', 'Julho', '2016', 'b:u:alohati1:1', 'Linux', 'Chrome 51.0.2704.81'),
(36, 'Nelson Junior', 'jr.kbca.rj2@gmail.com', '+55 21 964163532', '', '20:08:05', '14', 'Quinta', 'Julho', '2016', 'b:u:alohati1:1', 'Mac', 'Browser Desconhecido'),
(37, 'Gabriela Couto Glen', 'hannah.gaga@hotmail.com', '+55 51 97851202', '', '11:44:15', '24', 'Domingo', 'Julho', '2016', 'b:u:alohati1:1', 'Mac', 'Mobile Safari 537');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos_ngdefrance`
--

CREATE TABLE `contatos_ngdefrance` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `mensagem` varchar(60) NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `ip` varchar(60) NOT NULL,
  `so` varchar(60) NOT NULL,
  `navegador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `contatos_ngdefrance`
--

INSERT INTO `contatos_ngdefrance` (`id`, `nome`, `email`, `telefone`, `mensagem`, `horario`, `dia`, `semana`, `mes`, `ano`, `ip`, `so`, `navegador`) VALUES
(1, 'Alessandro Almeida', 'alessandro.aalbuquerque@gmail.com', '+55 51 82313891', '', '16:31:30', '26', 'Domingo', 'Junho', '2016', 'b:u:alohati1:1', 'Windows 8', 'Chrome 51.0.2704.103'),
(2, 'Sabrina Castilhos', 'sabrinacastilhos@hotmail.com', '+55 51 82420056', '', '16:35:52', '27', 'Segunda', 'Junho', '2016', 'b:u:alohati1:1', 'Windows 7', 'Chrome 51.0.2704.103');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `id` int(11) NOT NULL,
  `unidades` varchar(60) NOT NULL,
  `observacao` text NOT NULL,
  `statusequip` varchar(60) NOT NULL,
  `filial` varchar(60) NOT NULL,
  `equipamento` varchar(60) NOT NULL,
  `serialequipamento` varchar(60) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `modelo` varchar(60) NOT NULL,
  `fonte` varchar(60) NOT NULL,
  `serialfonte` varchar(60) NOT NULL,
  `bateria` varchar(60) NOT NULL,
  `serialbateria` varchar(60) NOT NULL,
  `garantia` varchar(60) NOT NULL,
  `descricao` text NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `equipamento`
--

INSERT INTO `equipamento` (`id`, `unidades`, `observacao`, `statusequip`, `filial`, `equipamento`, `serialequipamento`, `marca`, `modelo`, `fonte`, `serialfonte`, `bateria`, `serialbateria`, `garantia`, `descricao`, `horario`, `dia`, `semana`, `mes`, `ano`, `operador`) VALUES
(1, '58', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(49, '79', '', '', 'BR01', 'Velcro', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(50, '10', '', 'Operante', 'BR02', 'VOIP', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(51, '15', '', 'Operante', 'BR03', 'VOIP', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(52, '7', '', 'Operante', 'BRR1', 'Velcro', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(53, '36', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(54, '6', '', 'Operante', 'BRN1', 'Velcro', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(55, '11', '', 'Operante', 'BRN1', 'VOIP', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(56, '8', '', 'Operante', 'BRJ1', 'VOIP', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(57, '7', '', 'Operante', 'BRR1', 'VOIP', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(58, '5', 'SD 999', 'Operante', 'BR03', 'Velcro', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(59, '11', '', 'Operante', 'BR04', 'VOIP', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(60, '10', '', 'Operante', 'BR02', 'Velcro', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(61, '25', '', 'Operante', 'BR01', 'VOIP', '', '', '', '', '', '', '', '', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque');

-- --------------------------------------------------------

--
-- Estrutura para tabela `os`
--

CREATE TABLE `os` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `observacao` text NOT NULL,
  `status` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `matricula` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `avaliacao` varchar(60) NOT NULL,
  `login` varchar(60) NOT NULL,
  `departamento` varchar(60) NOT NULL,
  `cargo` varchar(60) NOT NULL,
  `equipamento` varchar(60) NOT NULL,
  `serialequipamento` varchar(60) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `modelo` varchar(60) NOT NULL,
  `fonte` varchar(60) NOT NULL,
  `serialfonte` varchar(60) NOT NULL,
  `bateria` varchar(60) NOT NULL,
  `serialbateria` varchar(60) NOT NULL,
  `senhaso` varchar(60) NOT NULL,
  `voltagem` varchar(60) NOT NULL,
  `garantia` varchar(60) NOT NULL,
  `backup` varchar(60) NOT NULL,
  `softwareespecifico` varchar(60) NOT NULL,
  `outlook` varchar(60) NOT NULL,
  `problema` text NOT NULL,
  `nosi` varchar(60) NOT NULL,
  `nos` varchar(60) NOT NULL,
  `laudo` text NOT NULL,
  `conclusao` text NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `confirmacao` varchar(60) NOT NULL,
  `permissao` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `os`
--

INSERT INTO `os` (`id`, `idusuario`, `observacao`, `status`, `nome`, `telefone`, `matricula`, `email`, `avaliacao`, `login`, `departamento`, `cargo`, `equipamento`, `serialequipamento`, `marca`, `modelo`, `fonte`, `serialfonte`, `bateria`, `serialbateria`, `senhaso`, `voltagem`, `garantia`, `backup`, `softwareespecifico`, `outlook`, `problema`, `nosi`, `nos`, `laudo`, `conclusao`, `horario`, `dia`, `semana`, `mes`, `ano`, `confirmacao`, `permissao`, `operador`) VALUES
(1, 1, 'JÃ¡ foi realizado o pagamento combinado de R$60,00.\r\nFoi combinado a entrega do equipamento dia 11/06/2016.\r\n', 'pronto', '', '', '', '', '', '', '', '', 'Ultrabook', 'BRG327F5ZQ', 'HP', '14-b060br', 'HP', 'F120891242633103', 'HP', 'B053R015-2024', '', 'bivolt', 'AlohaTI - 7dias', 'nao', 'Microsoft Office 2010', 'nao', 'Solicita instalaÃ§Ã£o do Windows 7 e Microsoft Office 2010.', '', 'Moderada', 'Foi verificado o serial do SO na BIOS.', 'Foi realizado a formataÃ§Ã£o e instalaÃ§Ã£o do Windows 7 Professional 64b, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do Microsoft Office 2010 Professional, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do AntivÃ­rus ESET NOD32 9, configurado, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do WINRAR 64b e ativado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE FLASH e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE READER e atualizado.\r\nFoi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o dos drivers.', '01:50:38', '11', 'SÃ¡bado', 'Junho', '2016', 'NAO', '1', ''),
(11, 10, 'Foi necessÃ¡rio o transporte dos equipamentos para o escritÃ³rio onde serÃ¡ realizado uma anÃ¡lise mais profunda.\r\nFica pendente realizar testes tÃ©cnicos nas 3 impressoras.', 'concluido', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TrÃªs impressoras e um desktop nÃ£o estÃ£o funcionando. ', '1', 'Alta', 'Foi verificado que o DESKTOP, marca POSITIVO, modelo PLUS F125, S/N 2849332, NG0001 estava com a fonte queimada, memÃ³ria ram e bateria bios com defeito. Sendo ocasionada provavelmente por uma oscilaÃ§Ã£o de corrente elÃ©trica.\r\n\r\nA impressora marca Lexmarc, modelo E120, s/n 994P5T0, cie NG0033 apresnta fonte queimada, placa lÃ³gica com defeito e a cabeÃ§a de impressÃ£o obstruÃ­da. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo para doaÃ§Ã£o de equipamento.\r\n\r\nA impressora marca HP, modelo OfficeJet 4355, s/n CN775GZ162, cie NG0031, apresenta cabeÃ§a de impressÃ£o obstruÃ­da, engrenagens e suporte de fax danificado. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo para doaÃ§Ã£o de equipamento.\r\n\r\nA impressora marca HP, modelo PSC 14-10, s/n BR68R3G08X, cie NG0029 apresenta fonte queimada e placa lÃ³gica com defeito. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo tÃ©cnico para doaÃ§Ã£o de equipamento.', 'Foi realizado a substituiÃ§Ã£o da fonte, memÃ³ria ram e bateria bios do equipamento NG0001.', '16:40:49', '16', 'Quinta', 'Junho', '2016', '', '', 'alessandro.albuquerque'),
(13, 1, 'JÃ¡ estÃ¡ pago o combinado de R$60,00.', 'concluido', 'Daniel Blaya Batista', '+55 51 98981614', '', 'Danielblayab@gmail.com', '', '', '', '', 'Notebook', '', '', '', '', '', '', '', '', 'bivolt', '', 'nao', 'Certificado Digital TRE', 'nao', 'Precisa formatar e instalar Windows 10', '', 'Moderada', 'Foi verificado divergÃªncia de compatibilidade entre o JAVA, NAVEGADORES e as cadeias do CERTIFICADO DIGITAL TRE', 'Foi realizado a formataÃ§Ã£o e instalaÃ§Ã£o do Windows 10 Professional 64b, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do Microsoft Office 2013 Professional, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do AntivÃ­rus ESET NOD32 8, configurado, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do WINRAR 64b e ativado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE FLASH e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE READER X PROFESSIONAL e atualizado.\r\nFoi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o dos drivers.\r\nFoi realizado a configuraÃ§Ã£o do CERTIFICADO DIGITAL TRE.', '20:28:01', '18', 'SÃ¡bado', 'Junho', '2016', 'SIM', '0', 'alessandro.albuquerque'),
(24, 10, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'IMPRESSORA', 'BR11LFN17W', 'HP DESKJET', '2550', '', '', '', '', '', 'bivolt', '', '', '', '', 'Impressora com defeito', '2', 'Alta', 'Foi realizado testes no sistema da HP e precisa substituir os cartuchos.', 'Foi realizado a substituiÃ§Ã£o do cartucho de tinta preto e colorido.', '17:08:22', '22', 'Quarta', 'Junho', '2016', '', '', 'alessandro.albuquerque'),
(25, 1, 'Foi combinado que nÃ£o serÃ¡ necessÃ¡rio o pagamento do serviÃ§o.', 'pronto', 'Sabrina Bastos Castilhos', '+55 51 82420056', '', '', '', '', '', '', 'Notebook', '5B369716Q', 'Toshiba', 'Satellite C655D-S521', 'Toshiba', 'T11173810122A02', 'Toshiba', 'G71C000B3110', '', 'bivolt', 'AlohaTI - 7 dias', 'sim', '', 'nao', 'Tudo travado.', '2', 'Moderada', 'Foi verificado a necessidade de formatar. \r\nFoi realizado testes e verificado que a placa mÃ£e estÃ¡ em curto circuito.', 'Foi realizado a formataÃ§Ã£o e instalaÃ§Ã£o do Windows 10 Professional 64b, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do Microsoft Office 2013 Professional, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do AntivÃ­rus ESET NOD32 8, configurado, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do WINRAR 64b e ativado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE FLASH e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE READER X PROFESSIONAL e atualizado.\r\nFoi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o dos drivers.\r\n', '19:31:40', '22', 'Quarta', 'Junho', '2016', 'NAO', '1', 'alessandro.albuquerque'),
(26, 10, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'IMPRESSORA', 'BR46U1D1H2', 'HP DESKJET', '2546', '', '', '', '', '', 'bivolt', '', '', '', '', 'instalar a impressora', '2', 'Alta', 'Foi verificado a necessidade de instalar o software da HP.\r\nFoi verificado alguns bugs no Windows 10 do CIE NG0010.', 'Foi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o do software especÃ­fico da HP para realizar a digitalizaÃ§Ã£o de modo prÃ¡tico.\r\nFoi realizado a instalaÃ§Ã£o do ESET NOD32 trial e a instalaÃ§Ã£o do PICASA para visualizaÃ§Ã£o das imagens, sendo assim a soluÃ§Ã£o para os bugs encontrados. ', '08:11:04', '23', 'Quinta', 'Junho', '2016', '', '', 'alessandro.albuquerque'),
(27, 11, 'O equipamento foi transportado para o escritÃ³rio para realizar a formataÃ§Ã£o.', 'concluido', 'BÃ¡rbara Ehlers Franke de Oliveira', '', '7085703184', 'qualidade@ngdefrance.com.br', '', 'ng.barbara.oliveira', 'Departamento de Qualidade', 'Analista', 'NOTEBOOK', '4002332500052', 'ITAUTEC', 'INFOWAY W7430', '', '', '', '', 'bios2014', '', '', 'nao', '', 'sim', 'Computador muito devagar e teclado com defeito.', '2', 'Baixa', 'Foi verificado a necessidade de formataÃ§Ã£o.', 'Foi formatado e instalaÃ§Ã£o o Windows 10.\r\nFoi instalado e configurado os softwares padrÃµes.', '12:00:58', '23', 'Quinta', 'Junho', '2016', '', '', 'alessandro.albuquerque'),
(28, 10, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', '', '', '', '', '', 'necessidade de impressÃ£o em pdf', '1', 'Moderada', 'Foi verificado uma limitaÃ§Ã£o no switch.\r\n', 'Foi a troca de porta do switch e a impressora estÃ¡ funcionando corretamente.', '11:20:48', '27', 'Segunda', 'Junho', '2016', '', '', 'alessandro.albuquerque'),
(29, 1, 'Foi combinado o valor de R$40 para a manutenÃ§Ã£o do notebook.', 'pronto', 'Lucas Wayne Lopes', '', '', '', '', '', '', '', 'Notebook', 'JH0F9QAD801280Y', 'Samsung', '270E', 'Samsung', 'BRBA9605161A00JCD805', 'Samsung', 'CNBA4300282AI00635S3', '9514', 'bivolt', 'Aloha TI', 'nao', 'AntivÃ­rus ESET NOD32', 'nao', 'NÃ£o entra no SO e ao desconectar o carregador o notebook desliga.', '2', 'Moderada', 'Foi detectado que o conector da bateria estÃ¡ danificado.\r\nFoi realizado que o Sistema Operacional estÃ¡ corrompido.\r\nFoi verificado uma oscilaÃ§Ã£o nas tomadas do apartamento do cliente.', 'Foi realizado a restauraÃ§Ã£o do SO Windows 8 e ativaÃ§Ã£o.\r\nFoi realizado a instalaÃ§Ã£o do Microsoft Office 2013 Professional e ativaÃ§Ã£o.\r\nFoi realizado a instalaÃ§Ã£o do antivÃ­rus ESET NOD32, configurado e ativado.\r\nFoi realizado uma pequena rejunte de solda no conector da bateria, sendo assim, foi restaurado a bateria.\r\nFoi realizado testes com multÃ­metro nas tomadas do apartamento do cliente.\r\n', '12:07:01', '30', 'Quinta', 'Junho', '2016', 'NAO', '1', 'alessandro.albuquerque'),
(30, 13, 'Foi combinado com o JÃºnior o aguardo do login e senha de acesso e tipo de acesso para cada diretÃ³rio.', 'pronto', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', 'bivolt', '', '', 'Servidor', '', 'Preciso de ajuda para criar pasta pÃºblica no servidor', '1', 'Moderada', 'Foi verificado que o servidor estÃ¡ configurado uma Ã¡rvore de domÃ­nio.', 'Foi mapeado a unidade de rede \"Z\" para acesso ao servidor de arquivos.', '16:53:49', '30', 'Quinta', 'Junho', '2016', '', '', 'alessandro.albuquerque'),
(31, 13, 'Vinculado a OS0033', 'pronto', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', 'bivolt', '', '', 'IMPRESSORA', '', 'IMPRESSORA NÃƒO ESTÃ FUNCIONANDO', '1', 'Moderada', '', '', '08:15:13', '04', 'Segunda', 'Julho', '2016', '', '', 'alessandro.albuquerque'),
(32, 13, 'Vinculada a OS0033', 'pronto', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'impre', '', '', '1', 'Moderada', '', '', '10:42:10', '04', 'Segunda', 'Julho', '2016', '', '', 'alessandro.albuquerque'),
(33, 13, '', 'pronto', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'IMPRESSORA', '', 'Estamos sem conseguir utilizar a impressora. A Os anterior foi errada pois nÃ£o sabia que com o enter enviava.', '2', 'Moderada', 'Foi verificado uma falha de comunicaÃ§Ã£o. Ainda estÃ¡ em teste para uma soluÃ§Ã£o.', 'Foi realizado a substituiÃ§Ã£o do uso de porta do switch e voltou a funcionar corretamente.', '10:42:59', '04', 'Segunda', 'Julho', '2016', '', '', 'alessandro.albuquerque'),
(34, 10, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', 'bivolt', '', '', '', '', 'nÃ£o consigo utilizar o excell - urgente!!', '2', 'Alta', 'Foi verificado bugs no Windows 10.\r\n', 'Foi realizado a configuraÃ§Ã£o do windows update e desabilitados alguns softwares na inicializaÃ§Ã£o do SO.', '09:17:45', '05', 'TerÃ§a', 'Julho', '2016', '', '', 'alessandro.albuquerque'),
(35, 10, 'Foi necessÃ¡rio o transporte do toner CE320A para a recarga.', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'acabou o tonner da impressora HP Laser JET 1525', '1', 'Moderada', 'Foi verificado que o toner preto e o magenta acabou a tinta.', 'Foi realizado a recarga do cartucho CE320a black.', '09:13:19', '08', 'Sexta', 'Julho', '2016', '', '', 'alessandro.albuquerque'),
(36, 10, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', 'bivolt', '', '', '', '', 'transporte da maquina ', '1', 'Moderada', 'Foi verificado a mÃ¡quina e estÃ¡ funcionando corretamente.', 'Reinstalado a impressora HP LaserJet CP1525nw.', '17:05:28', '08', 'Sexta', 'Julho', '2016', '', '', 'alessandro.albuquerque'),
(37, 1, 'Foi combinado o valor de R$30,00 pela configuraÃ§Ã£o do equipamento.', 'pronto', 'Digite aqui seu nome completo', '+55 51 95307500', '', 'digite aqui seu email', '', '', '', '', 'Netbook', '15G29L001040', 'Asus', 'Eee PC Seashell', 'Asus', '04G26B001082216001712', 'Asus', 'CCOAB2000638', 'IIO5226', 'bivolt', 'Aloha TI - 7 dias', 'nao', 'Wirelles - ESET', 'nao', 'NÃ£o consegue acessar WiFi.', '2', 'Moderada', 'Foi verificado que a instalaÃ§Ã£o do AntivÃ­rus BAIDU alterou configuraÃ§Ãµes da firmware da placa mÃ£e e conflitou driver de wifi', 'Foi realizado a desisntalaÃ§Ã£o do antivÃ­rus BAIDU.\r\nFoi realizado a configuraÃ§Ã£o da firmware da placa mÃ£e.\r\nFoi realizado a instalaÃ§Ã£o, configuraÃ§Ã£o e ativaÃ§Ã£o do ESET NOD32 antivÃ­rus.', '12:40:14', '18', 'Segunda', 'Julho', '2016', 'NAO', '1', 'alessandro.albuquerque'),
(38, 1, 'O valor combinado de R$510,00 para os KIT 4 TONER 128A, CE320a, CE321aa, CE322a, CE323a.\r\nJÃ¡ foi realizado a emissÃ£o da NF serÃ¡ depositado em conta bancÃ¡ria.', 'pronto', 'Alessandro Almeida de Albuquerque', '+55 51 82313891', '2314818', 'alessandro.aalbuquerque@gmail.com', '', 'alessandro.albuquerque', 'Departamento de TI', 'Diretor', 'IMPRESSORA', 'BRBFC9FD7F', 'HP LASERJET COLOR', 'CP1525NW', '', '', '', '', '', 'centoedez', '', 'nao', '', 'nao', 'Terminou a tinta dos toners CE321a, CE322a, CE323a', '1', 'Moderada', 'Foi verificado que acabou a tinta dos toners CE321a, CE322a, CE323a.\r\n', 'Foi realizado a substituiÃ§Ã£o dos toners descritos acima.', '16:42:32', '19', 'TerÃ§a', 'Julho', '2016', '', '', 'alessandro.albuquerque'),
(39, 1, 'Estou aguardando resposta para negociaÃ§Ã£o da mÃ¡quina.', 'pendente', 'Jornal Bons Ventos', '', '', '', '', '', '', '', 'Cartuchos de Impress', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Foi transportado para o escritÃ³rio, 4 cartuchos HP21 e 1 cartucho HP22', '1', 'Baixa', 'Foi testado 3 cartuchos. 2 estÃ£o funcionando corretamente e 1 estÃ¡ queimado.', '', '16:24:11', '20', 'Quarta', 'Julho', '2016', 'NAO', '1', 'alessandro.albuquerque'),
(40, 10, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', 'bivolt', '', '', '', '', 'nÃ£o consigo nem imprimir nem escanear....urgente', '1', 'Moderada', 'Necessita instalar driver de digitalizaÃ§Ã£o.', 'Foi realizado atendimento via acesso remoto.\r\nFoi instalado e configurado o sistema de digitalizaÃ§Ã£o da HP.', '15:54:03', '26', 'TerÃ§a', 'Julho', '2016', '', '', 'alessandro.albuquerque'),
(41, 10, 'Ordem de serviÃ§o vinculada com OS 0040.', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', '', '', '', '', '', 'nÃ£o consigo nem escanear, nem imprimir...urgente', '1', 'Moderada', '', '', '15:55:53', '26', 'TerÃ§a', 'Julho', '2016', '', '', 'alessandro.albuquerque'),
(42, 13, 'Foi combinado a atendimento pela pela tarde do dia 27/07/2016.', 'pronto', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'scanner', '', 'Preciso que tu instales o programa de scan no meu computador.', '1', 'Moderada', 'Foi verificado a necessidade da instalaÃ§Ã£o dos drivers da impressora.', 'Foi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o do sistema da HP.\r\nFoi realizado a configuraÃ§Ã£o do TEAM VIEWER.', '09:20:45', '27', 'Quarta', 'Julho', '2016', '', '', 'alessandro.albuquerque'),
(43, 8, '', 'pronto', 'Anelize Santos Sampaio', '', '5094279618', 'comunicacao@ngdefrance.com.br', '', 'ng.anelize.sampaio', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'DESKTOP', '1Y1M8S1', 'DELL', 'XPS8300	', '', '', '', '', '', 'bivolt', '', '', '', 'sim', '', '1', 'Moderada', 'Foi verificado um email de 198mb na caixa de saÃ­da, assim travando o Outlook.', 'Foi excluÃ­do o email travado em modo Off-Line.', '08:57:38', '01', 'Segunda', 'Agosto', '2016', '', '', 'alessandro.albuquerque'),
(44, 2, '', 'nafila', 'Teste UsuÃ¡rio', '', '12345678', '', '', 'teste.usuario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '12345678', '', '', 'sim', '', 'nao', 'Teste de BD', '2', 'Moderada', '', '', '20:44:04', '05', 'Quarta', 'Abril', '2017', '', '', 'teste.usuario');

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
-- Estrutura para tabela `registroapontamentosti`
--

CREATE TABLE `registroapontamentosti` (
  `id` int(255) NOT NULL,
  `idapontamento` int(255) NOT NULL,
  `data` varchar(10) NOT NULL,
  `atividade` varchar(20) NOT NULL,
  `outraatividade` varchar(60) NOT NULL,
  `tempo` varchar(8) NOT NULL,
  `horario` varchar(8) NOT NULL,
  `dia` int(2) NOT NULL,
  `semana` varchar(7) NOT NULL,
  `mes` varchar(9) NOT NULL,
  `ano` int(4) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `registroapontamentosti`
--

INSERT INTO `registroapontamentosti` (`id`, `idapontamento`, `data`, `atividade`, `outraatividade`, `tempo`, `horario`, `dia`, `semana`, `mes`, `ano`, `operador`) VALUES
(5, 5, '05/04/2017', 'Outros', 'Levantamento de equipamentos', '01:10:20', '18:23:10', 5, 'Quarta', 'Abril', 2017, 'alessandro.albuquerque'),
(6, 9, '06/04/2017', 'Desenvolvimento', '', '02:12:00', '14:58:44', 6, 'Quinta', 'Abril', 2017, 'alessandro.albuquerque'),
(8, 11, '06//', 'Desenvolvimento', '', '', '20:20:43', 6, 'Quinta', 'Abril', 2017, 'alessandro.albuquerque'),
(9, 12, '06/04/2017', 'OrientaÃ§Ã£o', '', '00:45:47', '20:21:13', 6, 'Quinta', 'Abril', 2017, 'alessandro.albuquerque'),
(10, 13, '06/04/2017', 'OrganizaÃ§Ã£o', '', '01:20:00', '20:41:19', 6, 'Quinta', 'Abril', 2017, 'diego.bordini'),
(11, 14, '28/04/2017', 'Desenvolvimento', '', '', '16:56:13', 28, 'Sexta', 'Abril', 2017, 'alessandro.albuquerque'),
(12, 15, '28/04/2017', 'Desenvolvimento', '', '', '16:56:57', 28, 'Sexta', 'Abril', 2017, 'alessandro.albuquerque'),
(13, 16, '28/04/2017', 'Desenvolvimento', '', '04:00:00', '16:58:02', 28, 'Sexta', 'Abril', 2017, 'alessandro.albuquerque'),
(14, 17, '03/05/2017', 'Desenvolvimento', '', '02:10:00', '18:00:05', 3, 'Quarta', 'Maio', 2017, 'alessandro.albuquerque'),
(15, 18, '03/05/2017', 'Desenvolvimento', '', '01:10:00', '18:00:35', 3, 'Quarta', 'Maio', 2017, 'alessandro.albuquerque'),
(16, 19, '09/05/2017', 'Outros', 'Apresentando sistema', '00:40:00', '20:56:43', 9, 'Terça', 'Maio', 2017, 'alessandro.albuquerque');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registroequipamento`
--

CREATE TABLE `registroequipamento` (
  `id` int(11) NOT NULL,
  `idequip` int(11) NOT NULL,
  `unidades` varchar(60) NOT NULL,
  `observacao` text NOT NULL,
  `statusequip` varchar(60) NOT NULL,
  `filial` varchar(60) NOT NULL,
  `equipamento` varchar(60) NOT NULL,
  `serialequipamento` varchar(60) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `modelo` varchar(60) NOT NULL,
  `fonte` varchar(60) NOT NULL,
  `serialfonte` varchar(60) NOT NULL,
  `bateria` varchar(60) NOT NULL,
  `serialbateria` varchar(60) NOT NULL,
  `garantia` varchar(60) NOT NULL,
  `descricao` text NOT NULL,
  `movimento` varchar(60) NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `registroequipamento`
--

INSERT INTO `registroequipamento` (`id`, `idequip`, `unidades`, `observacao`, `statusequip`, `filial`, `equipamento`, `serialequipamento`, `marca`, `modelo`, `fonte`, `serialfonte`, `bateria`, `serialbateria`, `garantia`, `descricao`, `movimento`, `horario`, `dia`, `semana`, `mes`, `ano`, `operador`) VALUES
(1, 0, 'NG0001', 'JÃ¡ foi realizado um laudo para a mÃ¡quina pois jÃ¡ passou por uma possÃ­vel descarga elÃ©trica, sendo danificada a fonte, memÃ³ria ram e bateria bios.\r\nMais informaÃ§Ãµes na OS0011.', 'Operante', '', 'DESKTOP', '2849332 ', 'POSITIVO', 'PLUS F125', '', '', '', '', '', 'MEMÃ“RIA RAM APACER 2GB 800MHZ DDR2\r\nFONTE POWERRX PX230', '', '00:53:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(2, 2, 'NG0002', '', 'Operante', '', 'MONITOR', 'A3287DA000407', 'POSITIVO', '212-VA-P', '', '', '', '', '', '', '', '01:00:15', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(3, 0, 'NG0001', 'JÃ¡ foi realizado um laudo para a mÃ¡quina pois jÃ¡ passou por uma possÃ­vel descarga elÃ©trica, sendo danificada a fonte, memÃ³ria ram e bateria bios.\r\n', 'Operante', '', 'DESKTOP', '2849332 ', 'POSITIVO', 'PLUS F125', '', '', '', '', '', 'MEMÃ“RIA RAM APACER 2GB 800MHZ DDR2\r\nFONTE POWERRX PX230', '', '02:37:56', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(4, 0, 'NG0001', 'JÃ¡ foi realizado um laudo para a mÃ¡quina pois jÃ¡ passou por uma possÃ­vel descarga elÃ©trica, sendo danificada a fonte, memÃ³ria ram e bateria bios.\r\nMais informaÃ§Ãµes na OS0011.', 'Operante', '', 'DESKTOP', '2849332 ', 'POSITIVO', 'PLUS F125', '', '', '', '', '', 'MEMÃ“RIA RAM APACER 2GB 800MHZ DDR2\r\nFONTE POWERRX PX230', '', '02:38:06', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(5, 0, 'NG0001', 'JÃ¡ foi realizado um laudo para a mÃ¡quina pois jÃ¡ passou por uma possÃ­vel descarga elÃ©trica, sendo danificada a fonte, memÃ³ria ram e bateria bios.\r\nMais informaÃ§Ãµes na OS0011.', 'Operante', '', 'DESKTOP', '2849332 ', 'POSITIVO', 'PLUS F125', '', '', '', '', '', 'MEMÃ“RIA RAM APACER 2GB 800MHZ DDR2\r\nFONTE POWERRX PX230', '', '02:42:20', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(6, 0, 'NG0002', '', 'Operante', '', 'MONITOR', 'A3287DA000407', 'POSITIVO', '212-VA-P', '', '', '', '', '', '', '', '02:42:33', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(7, 3, 'NG0003', '', 'Operante', '', 'TECLADO', '', 'MULTILASER', 'TC142', '', '', '', '', '', '', '', '03:53:30', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(8, 0, 'NG0003', '', 'Operante', '', 'TECLADO', '', 'MULTILASER', 'TC142', '', '', '', '', '', '', '', '03:54:06', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(9, 4, 'NG0004', '', 'Operante', '', 'DESKTOP', '1Y1M8S1', 'DELL', 'XPS8300	', '', '', '', '', '', '', '', '03:58:15', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(10, 5, 'NG0005', '', 'Operante', '', 'MONITOR', 'S2330MXC', 'DELL', 'CN-0597GG-64180', 'DELTA ELETRONICS ADP-40DDB', '378W16P03SC', '', '', '', '', '', '11:45:56', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(11, 6, 'NG0006', '', 'Operante', '', 'TRANSFORMADOR', '378W16P03SC', 'DELTA ELETRONICS', 'ADP-40DDB', '', '', '', '', '', '', '', '11:47:06', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(12, 7, 'NG0007', '', 'Operante', '', 'TECLADO', '', 'MULTILASER', 'TC142', '', '', '', '', '', '', '', '20:59:18', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(13, 8, 'NG0008', '', 'Operante', '', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '21:01:49', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(14, 9, 'NG0009', '', 'Operante', '', 'TRANSFORMADOR', '', 'LENOVO', 'ADLX45NLC3B', '', '', '', '', '', '', '', '21:03:24', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(15, 10, 'NG0010', '', 'Operante', '', 'ULTRABOOK', 'PE0221BP', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '21:06:22', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(16, 11, 'NG0011', '', 'Operante', '', 'TRANSFORMADOR', '', 'LENOVO', 'ADLX45NLC3B', '', '', '', '', '', '', '', '21:07:47', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(17, 12, 'NG0012', '', 'Operante', '', 'IMPRESSORA', 'BRBFC9FD7F', 'HP LASERJET COLOR', 'CP1525NW', '', '', '', '', '', '', '', '21:09:39', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(18, 13, 'NG0013', '', 'Operante', '', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', '', '', '21:12:59', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(19, 14, 'NG0014', '', 'Operante', '', 'TRANSFORMADOR', 'PA-1650-22', 'ACER', 'LITE ON', '', '', '', '', '', '', '', '21:14:18', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(20, 15, '', '', 'Operante', '', '', '', '', '', '', '', '', '', '', '', '', '21:14:21', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(21, 16, 'NG0015', '', 'Operante', '', 'ESTABILIZADOR', '8F1304P88393865406', 'ENERMAX', 'EXXA 3 POWER', '', '', '', '', '', '', '', '21:16:20', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(22, 17, 'NG0016', '', 'Operante', '', 'DESKTOP', '865406', 'DIGIMIX', '', '', '', '', '', '', '', '', '21:18:35', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(23, 18, 'NG0017', '', 'Operante', '', 'HD EXTERNO', '', 'COMTAC', 'CASE USB 2.0', '', '', '', '', '', '', '', '21:20:53', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(24, 19, 'NG0018', '', 'Operante', '', 'NOTEBOOK', '4002897000275', 'ITAUTEC', 'INFOWAY W7430', '', '', '', '', '', '', '', '21:22:41', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(25, 20, 'NG0019', '', 'Operante', '', 'TRANSFORMADOR', '65PW0AS0365', 'DELTA ELETRONICS', '', '', '', '', '', '', '', '', '21:24:04', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(26, 21, 'NG0020', '', 'Operante', '', 'NOTEBOOK', '5N0B20-2399323', 'ASUS', 'X451C', '', '', '', '', '', '', '', '21:25:38', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(27, 22, 'NG0021', '', 'Operante', '', 'TRANSFORMADOR', '', 'ASUS', 'ADP45PW', '', '', '', '', '', '', '', '21:26:53', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(28, 23, 'NG0022', '', 'Operante', '', 'IMPRESSORA', 'BR46U1D1H2', 'HP DESKJET', '2546', '', '', '', '', '', '', '', '21:28:41', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(29, 24, 'NG0023', '', 'Operante', '', 'TRANSFORMADOR', 'ECLD44B03JAD3', 'HP', '0957-2385', '', '', '', '', '', '', '', '21:29:50', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(30, 25, 'NG0024', '', 'Operante', '', 'IMPRESSORA', 'BR11LFN17W', 'HP DESKJET', '2550', '', '', '', '', '', '', '', '21:31:11', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(31, 26, 'NG0025', '', 'Operante', '', 'TRANSFORMADOR', 'H622H82VVAJ0AL', 'HP', '0957-2286', '', '', '', '', '', '', '', '21:32:22', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(32, 27, 'NG0026', '', 'Operante', '', 'TELEVISÃƒO', '918564', 'SEMP TOSHIBA', 'LCD4241W', '', '', '', '', '', '', '', '21:33:59', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(33, 28, 'NG0027', '', 'Operante', '', 'NOTEBOOK', '4002332500052', 'ITAUTEC', 'INFOWAY W7430', '', '', '', '', '', '', '', '21:35:23', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(34, 29, 'NG0028', '', 'Operante', '', 'TRANSFORMADOR', '7893007790288', 'UNICOBA', 'UF-65W2P', '', '', '', '', '', '', '', '21:36:42', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(35, 30, 'NG0029', '', 'Queimado', '', 'IMPRESSORA', 'BR68R3G08X', 'HP', 'PSC 14-10', '', '', '', '', '', '', '', '21:38:26', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(36, 31, 'NG0030', '', 'Inoperante', '', 'TRANSFORMADOR', '07G018KG0', 'HP', '0957-2146', '', '', '', '', '', '', '', '21:39:30', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(37, 32, 'NG0031', '', 'Inoperante', '', 'IMPRESSORA', 'CN775GZ162', 'HP OFFICEJET', '4355', '', '', '', '', '', '', '', '21:41:04', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(38, 33, 'NG0032', '', 'Inoperante', '', 'TRANSFORMADOR', '6604910807', 'HP', '0957-2054', '', '', '', '', '', '', '', '21:42:31', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(39, 34, 'NG0033', '', 'Inoperante', '', 'IMPRESSORA', '994P5T0', 'LEXMARK', 'E120', '', '', '', '', '', '', '', '21:43:27', '19', 'Domingo', 'Junho', '2016', 'alessandro.albuquerque'),
(40, 0, 'NG0016', '', 'Operante', '', 'DESKTOP', '865406', 'DIGIMIX', '', '', '', '', '', '', '', '', '11:32:57', '20', 'Segunda', 'Junho', '2016', 'alessandro.albuquerque'),
(41, 0, 'NG0017', '', 'Operante', '', 'HD EXTERNO', '', 'COMTAC', 'CASE USB 2.0', '', '', '', '', '', '', '', '11:33:24', '20', 'Segunda', 'Junho', '2016', 'alessandro.albuquerque'),
(42, 0, 'NG0032', '', 'Inoperante', '', 'TRANSFORMADOR', '6604910807', 'HP', '0957-2054', '', '', '', '', '', '', '', '13:31:53', '22', 'Quarta', 'Junho', '2016', 'alessandro.albuquerque'),
(43, 0, 'NG0033', 'Impressora estÃ¡ com a fonte queimada e a cabeÃ§a de impressÃ£o obstruÃ­da.\r\nSendo necessÃ¡rio a substituiÃ§Ã£o da fonte e cabeÃ§a de impressÃ£o, nÃ£o fica viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova.', 'Queimado', '', 'IMPRESSORA', '994P5T0', 'LEXMARK', 'E120', '', '', '', '', '', '', '', '13:34:09', '22', 'Quarta', 'Junho', '2016', 'alessandro.albuquerque'),
(44, 0, 'NG0031', 'Impressora estÃ¡ com a fonte com a cabeÃ§a de impressÃ£o obstruÃ­da, engrenagens e suporte de fax danificado.\r\nSendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova.', 'Inoperante', '', 'IMPRESSORA', 'CN775GZ162', 'HP OFFICEJET', '4355', '', '', '', '', '', '', '', '13:36:28', '22', 'Quarta', 'Junho', '2016', 'alessandro.albuquerque'),
(45, 0, 'NG0029', 'Impressora estÃ¡ com a fonte queimada e placa lÃ³gica com defeito.\r\nSendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova.\r\n\r\nFoi realizado um laudo tÃ©cnico para doaÃ§Ã£o de equipamento.', 'Queimado', '', 'IMPRESSORA', 'BR68R3G08X', 'HP', 'PSC 14-10', '', '', '', '', '', '', '', '13:39:26', '22', 'Quarta', 'Junho', '2016', 'alessandro.albuquerque'),
(46, 0, 'NG0033', 'Impressora estÃ¡ com a fonte queimada e a cabeÃ§a de impressÃ£o obstruÃ­da.\r\nSendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova.\r\n\r\nFoi realizado um laudo para doaÃ§Ã£o de equipamento.', 'Queimado', '', 'IMPRESSORA', '994P5T0', 'LEXMARK', 'E120', '', '', '', '', '', '', '', '13:41:05', '22', 'Quarta', 'Junho', '2016', 'alessandro.albuquerque'),
(47, 0, 'NG0031', 'Impressora estÃ¡ com a fonte com a cabeÃ§a de impressÃ£o obstruÃ­da, engrenagens e suporte de fax danificado.\r\nSendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova.\r\n\r\nFoi realizado um laudo para doaÃ§Ã£o de equipamento.', 'Inoperante', '', 'IMPRESSORA', 'CN775GZ162', 'HP OFFICEJET', '4355', '', '', '', '', '', '', '', '13:41:22', '22', 'Quarta', 'Junho', '2016', 'alessandro.albuquerque'),
(48, 0, 'NG0031', 'Impressora estÃ¡ com a cabeÃ§a de impressÃ£o obstruÃ­da, engrenagens e suporte de fax danificado.\r\nSendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova.\r\n\r\nFoi realizado um laudo para doaÃ§Ã£o de equipamento.', 'Inoperante', '', 'IMPRESSORA', 'CN775GZ162', 'HP OFFICEJET', '4355', '', '', '', '', '', '', '', '13:48:49', '22', 'Quarta', 'Junho', '2016', 'alessandro.albuquerque'),
(49, 0, 'NG0033', 'Impressora estÃ¡ com a fonte queimada, placa lÃ³gica com defeito e a cabeÃ§a de impressÃ£o obstruÃ­da.\r\nSendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova.\r\n\r\nFoi realizado um laudo para doaÃ§Ã£o de equipamento.', 'Queimado', '', 'IMPRESSORA', '994P5T0', 'LEXMARK', 'E120', '', '', '', '', '', '', '', '13:52:09', '22', 'Quarta', 'Junho', '2016', 'alessandro.albuquerque'),
(50, 0, 'NG0024', '', 'Operante', '', 'IMPRESSORA', 'BR11LFN17W', 'HP DESKJET', '2550', '', '', '', '', '', '', '', '19:12:40', '22', 'Quarta', 'Junho', '2016', 'alessandro.albuquerque'),
(51, 0, 'NG0012', '', 'Operante', '', 'IMPRESSORA', 'BRBFC9FD7F', 'HP LASERJET COLOR', 'CP1525NW', '', '', '', '', '', 'CE320A Cartucho de impressÃ£o preto com toner HP ColorSphere\r\nCE321A Cartucho de impressÃ£o ciano com toner HP ColorSphere\r\nCE322A Cartucho de impressÃ£o amarelo com toner HP ColorSphere\r\nCE323A Cartucho de impressÃ£o magenta com toner HP ColorSphere', '', '15:25:55', '30', 'Quinta', 'Junho', '2016', 'alessandro.albuquerque'),
(52, 0, 'NG0024', '', 'Operante', '', 'IMPRESSORA', 'BR11LFN17W', 'HP DESKJET', '2050', '', '', '', '', '', '', '', '18:07:32', '30', 'Quinta', 'Junho', '2016', 'alessandro.albuquerque'),
(53, 35, '1', 'teste', 'Operante', '', 'Fita da etiquetadora Brothert', 'testeseriale', 'testemarca', 'testemodelo', 'testefonte', 'testeserialf', 'testebateria', 'testeserialb', 'testegarantia', 'teasdtae', '', '19:24:38', '05', 'Quinta', 'Outubro', '2017', 'alessandro.albuquerque'),
(54, 36, '1', 'testeas', 'Operante', '', 'Fita da etiquetadora Brother', 'testeseriale', 'testemarca', 'testemodelo', 'testefonte', 'testeserialf', 'testebateria', 'testeserialb', 'testegarantia', 'testeasdte', '', '19:28:51', '05', 'Quinta', 'Outubro', '2017', 'alessandro.albuquerque'),
(55, 37, '1', '', 'Operante', 'BR04', 'Fita de etiquetadora', 'testeseriale', '2', 'testemodelo', 'testefonte', 'testeserialf', 'testebateria', 'testeserialb', 'testegarantia', 'teaste', '', '20:05:39', '05', 'Quinta', 'Outubro', '2017', 'alessandro.albuquerque'),
(56, 38, '5', 'teste1', 'Operante', 'BR04', 'Fita de etiquetadora', 'testeseriale', 'testemarca', 'testemodelo', 'testefonte', 'testeserialf', 'testebateria', 'testeserialb', 'testegarantia', 'teste1', '', '13:09:34', '06', 'Sexta', 'Outubro', '2017', 'alessandro.albuquerque'),
(57, 39, '5', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '14:10:16', '06', 'Sexta', 'Outubro', '2017', 'alessandro.albuquerque'),
(58, 0, '', 'teste1', 'Operante', 'BR04', 'Fita de etiquetadora', 'testeseriale', '2', 'testemodelo', 'testefonte', 'testeserialf', '', '', 'testegarantia', 'teaste', '', '17:20:24', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(59, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '17:35:09', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(60, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:35:44', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(61, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:36:09', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(62, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:36:46', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(63, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:37:00', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(64, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:37:48', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(65, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:37:57', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(66, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:38:24', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(67, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:39:57', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(68, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:41:27', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(69, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:44:03', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(70, 0, '5', 'teste1', 'Operante', 'BR04', 'Fita de etiquetadora', 'testeseriale', '2', 'testemodelo', 'testefonte', 'testeserialf', '', '', 'testegarantia', 'teaste', '', '18:44:17', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(71, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:45:20', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(72, 0, '4', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:46:22', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(73, 0, '4', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:47:46', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(74, 0, '4', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:47:50', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(75, 0, '4', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '18:48:26', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(76, 40, '4', '', 'Operante', 'BR04', 'Fita de etiquetadora', '', '', '', '', '', '', '', '', '', '', '19:28:16', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(77, 0, '9', '', 'Operante', 'BR04', 'Fita de etiquetadora', '', '', '', '', '', '', '', '', '', '', '19:33:26', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(78, 0, '9', '', 'Operante', 'BR01', 'Fita de etiquetadora', '', '', '', '', '', '', '', '', '', '', '19:35:08', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(79, 0, '1', '', 'Operante', 'BRN1', 'Fita de etiquetadora', '', '', '', '', '', '', '', '', '', '', '19:35:35', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(80, 0, '6', 'testeas', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teset', '', '20:00:12', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(81, 41, '5', '', 'Operante', 'BR01', 'Velcro', '', '', '', '', '', '', '', '', '', '', '20:01:46', '09', 'Segunda', 'Outubro', '2017', 'alessandro.albuquerque'),
(82, 0, '7', '', 'Operante', 'BR01', 'Velcro', '', '', '', '', '', '', '', '', '', '', '16:52:05', '10', 'TerÃ§a', 'Outubro', '2017', 'alessandro.albuquerque'),
(83, 0, '10', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '18:33:16', '10', 'TerÃ§a', 'Outubro', '2017', 'alessandro.albuquerque'),
(84, 42, '7', '', 'Operante', 'BRN1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '18:33:51', '10', 'TerÃ§a', 'Outubro', '2017', 'alessandro.albuquerque'),
(85, 0, '10', '', 'Operante', 'BRN1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '18:34:02', '10', 'TerÃ§a', 'Outubro', '2017', 'alessandro.albuquerque'),
(86, 0, '20', '', 'Operante', 'BRN1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '18:34:15', '10', 'TerÃ§a', 'Outubro', '2017', 'alessandro.albuquerque'),
(87, 0, '10', '', 'Operante', 'BR01', 'Velcro', '', '', '', '', '', '', '', '', '', '', '20:27:57', '10', 'TerÃ§a', 'Outubro', '2017', 'alessandro.albuquerque'),
(88, 0, '10', '', 'Operante', 'BR01', 'Velcro', '', '', '', '', '', '', '', '', '', '', '20:29:06', '10', 'TerÃ§a', 'Outubro', '2017', 'alessandro.albuquerque'),
(89, 0, '15', '', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '20:29:18', '10', 'TerÃ§a', 'Outubro', '2017', 'alessandro.albuquerque'),
(90, 43, '5', '', 'Operante', 'BR03', 'Velcro', '', '', '', '', '', '', '', '', '', '', '12:41:34', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(91, 44, '3', '', 'Operante', 'BRR1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '12:42:10', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(92, 45, '7', '', 'Operante', 'BRR1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '12:42:30', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(93, 0, '7', '', 'Operante', 'BR02', 'Velcro', '', '', '', '', '', '', '', '', '', '', '12:42:45', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(94, 46, '2', '', 'Operante', 'BR02', 'Velcro', '', '', '', '', '', '', '', '', '', '', '12:43:14', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(95, 0, '7', '', 'Operante', 'BR02', 'Velcro', '', '', '', '', '', '', '', '', '', '', '12:43:24', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(96, 0, '7', '', 'Operante', 'BR02', 'Velcro', '', '', '', '', '', '', '', '', '', '', '12:45:06', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(97, 0, '2', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '14:55:16', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(98, 47, '2', 'Para uso geral do SERVICE', 'Operante', 'BRJ1', 'Fita de etiquetadora', '', '', '', '', '', '', '', '', '', '', '14:57:44', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(99, 0, '1', 'Para uso geral do SERVICE', 'Operante', 'BRJ1', 'Fita de etiquetadora', '', '', '', '', '', '', '', '', '', '', '14:58:25', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(100, 0, '2', 'Para uso geral do SERVICE', 'Operante', 'BRJ1', 'Fita de etiquetadora', '', '', '', '', '', '', '', '', '', '', '14:58:54', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(101, 0, '1', 'Para uso geral do SERVICE\r\n\r\nFoi enviado 1 fita etiquetadora para BR04', 'Operante', 'BRJ1', 'Fita de etiquetadora', '', '', '', '', '', '', '', '', '', '', '14:59:24', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(102, 0, '2', 'Recebido uma fita de etiquetadora de BRJ1', 'Operante', 'BR04', 'Fita de etiquetadora', '', '', '', '', '', '', '', '', '', '', '15:00:37', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(103, 48, '10', 'NF 123', 'Operante', 'BR04', 'Teclado', '', 'dell', '', '', '', '', '', 'sem garantia', 'Layout espanhol', '', '16:47:06', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(104, 0, '9', 'Service Desk xxx do usuÃ¡rio xx', 'Operante', 'BR04', 'Teclado', '', 'dell', '', '', '', '', '', 'sem garantia', 'Layout espanhol', '', '16:49:08', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(105, 0, '8', 'Service Desk xxx do usuÃ¡rio xx', 'Operante', 'BR04', 'Teclado', '', 'dell', '', '', '', '', '', 'sem garantia', 'Layout espanhol', '', '16:58:23', '11', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(106, 0, '3', 'teste1', 'Operante', 'BRN1', 'Velcro', '', '', '', '', '', '', '', '', 'teste1', '', '19:16:21', '18', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(107, 0, '3', 'teste1', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teste1', '', '19:57:14', '18', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(108, 0, '0', '', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '20:01:19', '18', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(109, 0, '0', 'teste1', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teste1', '', '20:03:34', '18', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(110, 0, '0', 'teste1', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teste1', '', '20:04:34', '18', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(111, 0, '0', 'teste1', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teste1', '', '20:04:35', '18', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(112, 0, '0', 'teste1', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', 'teste1', '', '20:04:37', '18', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(113, 0, '3', '', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '20:04:52', '18', 'Quarta', 'Outubro', '2017', 'alessandro.albuquerque'),
(114, 0, '0', '', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '13:39:30', '19', 'Quinta', 'Outubro', '2017', 'alessandro.albuquerque'),
(115, 0, '0', '', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '13:40:33', '19', 'Quinta', 'Outubro', '2017', 'alessandro.albuquerque'),
(116, 0, '0', '', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '13:41:26', '19', 'Quinta', 'Outubro', '2017', 'alessandro.albuquerque'),
(117, 0, '5', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:34:07', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(118, 0, '', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:38:32', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(119, 0, '', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:39:01', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(120, 0, '5', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:40:29', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(121, 0, '5', '', 'Operante', 'BRN1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:41:07', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(122, 0, '15', '', 'Operante', 'BRN1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:42:34', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(123, 0, '10', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:43:32', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(124, 0, '25', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:53:18', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(125, 0, '25', '', 'Operante', 'BR01', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:54:28', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(126, 0, '30', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:55:47', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(127, 0, '30', '', 'Operante', 'BR01', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:56:56', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(128, 0, '40', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:57:18', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(129, 0, '40', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:58:50', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(130, 0, '35', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '17:59:54', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(131, 0, '55', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '18:05:09', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(132, 0, '10', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '18:16:42', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(133, 0, '10', '', 'Operante', 'BR01', 'Velcro', '', '', '', '', '', '', '', '', '', '', '18:18:10', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(134, 0, '6', '', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', '', '19:43:54', '16', 'TerÃ§a', 'Janeiro', '2018', 'alessandro.albuquerque'),
(135, 0, '10', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', '', '11:36:12', '17', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(136, 0, '10', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'saida', '11:40:25', '17', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(137, 0, '4', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '18:26:10', '17', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(138, 0, '10', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '19:33:20', '17', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(139, 0, '9', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'saida', '19:33:45', '17', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(140, 0, '10', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'saida', '19:50:15', '17', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(141, 0, '5', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'saida', '19:50:39', '17', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(142, 0, '5', '', '', 'BR03', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '19:52:37', '17', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(143, 0, '3', '', 'Operante', 'BR03', 'Velcro', '', '', '', '', '', '', '', '', '', 'saida', '19:52:54', '17', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(144, 0, '2', 'SD 999', 'Operante', 'BR03', 'Velcro', '', '', '', '', '', '', '', '', '', 'saida', '19:53:20', '17', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(145, 0, '50', '', '', 'BR01', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '11:07:55', '18', 'Quinta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(146, 0, '1', 'SD 999', 'Operante', 'BR01', 'Velcro', '', '', '', '', '', '', '', '', '', 'saida', '11:08:34', '18', 'Quinta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(147, 0, '4', 'asdasdblala SD 999', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'saida', '11:19:23', '18', 'Quinta', 'Janeiro', '2018', 'diego.bordini'),
(148, 0, '5', 'Uso no Rack', 'Operante', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'saida', '11:31:31', '22', 'Segunda', 'Janeiro', '2018', 'igor.pinheiro'),
(149, 0, '5', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '12:42:03', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(150, 0, '1', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '12:45:02', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(151, 0, '1', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '12:45:38', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(152, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'entrada', '12:45:40', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(153, 0, '1', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '12:58:25', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(154, 0, '4', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '12:58:37', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(155, 0, '6', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:00:30', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(156, 0, '1', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:03:45', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(157, 0, '1', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:03:59', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(158, 0, '1', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:05:32', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(159, 0, '1', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:05:44', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(160, 0, '2', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:06:58', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(161, 0, '2', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:07:10', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(162, 0, '5', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:10:48', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(163, 0, '2', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:11:06', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(164, 0, '2', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:11:08', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(165, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'entrada', '13:11:11', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(166, 0, '1', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:17:30', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(167, 0, '1', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:17:47', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(168, 0, '2', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:19:40', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(169, 0, '1', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:20:04', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(170, 0, '1', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:31:25', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(171, 0, '1', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '13:31:40', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(172, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'entrada', '13:31:51', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(173, 0, '7', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '15:15:27', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(174, 0, '7', '', '', 'BRJ1', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '15:16:15', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(175, 0, '5', '', '', 'BR01', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '15:16:29', '22', 'Segunda', 'Janeiro', '2018', 'alessandro.albuquerque'),
(176, 0, '5', '', '', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'entrada', '10:37:08', '24', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque'),
(177, 0, '5', '', 'Operante', 'BR04', 'Velcro', '', '', '', '', '', '', '', '', '', 'saida', '10:37:20', '24', 'Quarta', 'Janeiro', '2018', 'alessandro.albuquerque');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registroos`
--

CREATE TABLE `registroos` (
  `id` int(11) NOT NULL,
  `idos` int(11) NOT NULL,
  `observacao` text NOT NULL,
  `status` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(60) NOT NULL,
  `matricula` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `avaliacao` varchar(60) NOT NULL,
  `login` varchar(60) NOT NULL,
  `departamento` varchar(60) NOT NULL,
  `cargo` varchar(60) NOT NULL,
  `equipamento` varchar(60) NOT NULL,
  `serialequipamento` varchar(60) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `modelo` varchar(60) NOT NULL,
  `fonte` varchar(60) NOT NULL,
  `serialfonte` varchar(60) NOT NULL,
  `bateria` varchar(60) NOT NULL,
  `serialbateria` varchar(60) NOT NULL,
  `senhaso` varchar(60) NOT NULL,
  `voltagem` varchar(60) NOT NULL,
  `garantia` varchar(60) NOT NULL,
  `backup` varchar(60) NOT NULL,
  `softwareespecifico` varchar(60) NOT NULL,
  `outlook` varchar(60) NOT NULL,
  `problema` text NOT NULL,
  `nosi` varchar(60) NOT NULL,
  `nos` varchar(60) NOT NULL,
  `laudo` text NOT NULL,
  `conclusao` text NOT NULL,
  `horario` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `semana` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `confirmacao` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `registroos`
--

INSERT INTO `registroos` (`id`, `idos`, `observacao`, `status`, `nome`, `telefone`, `matricula`, `email`, `avaliacao`, `login`, `departamento`, `cargo`, `equipamento`, `serialequipamento`, `marca`, `modelo`, `fonte`, `serialfonte`, `bateria`, `serialbateria`, `senhaso`, `voltagem`, `garantia`, `backup`, `softwareespecifico`, `outlook`, `problema`, `nosi`, `nos`, `laudo`, `conclusao`, `horario`, `dia`, `semana`, `mes`, `ano`, `confirmacao`, `operador`) VALUES
(1, 1, '', 'nafila', 'JÃºlia Nunes', '+55 51 98189840', '', '', '', '', '', '', 'Ultrabook', 'BRG327F5ZQ', 'HP', '14-b060br', 'HP', 'F120891242633103', 'HP', 'B053R015-2024', '', 'bivolt', 'AlohaTI - 7dias', 'nao', 'Microsoft Office 2010', 'nao', 'Solicita instalaÃ§Ã£o do Windows 7 e Microsoft Office 2010.', '', 'Moderada', '', '', '01:50:38', '11', 'SÃ¡bado', 'Junho', '2016', 'NAO', 'alessandro.albuquerque'),
(2, 1, 'JÃ¡ foi realizado o pagamento combinado de R$60,00.\r\nFoi combinado a entrega do equipamento dia 11/06/2016.\r\n', 'pronto', 'JÃºlia Nunes', '+55 51 98189840', '', '', '', '', '', '', 'Ultrabook', 'BRG327F5ZQ', 'HP', '14-b060br', 'HP', 'F120891242633103', 'HP', 'B053R015-2024', '', 'bivolt', 'AlohaTI - 7dias', 'nao', 'Microsoft Office 2010', 'nao', 'Solicita instalaÃ§Ã£o do Windows 7 e Microsoft Office 2010.', '', 'Moderada', 'Foi verificado o serial do SO na BIOS.', 'Foi realizado a formataÃ§Ã£o e instalaÃ§Ã£o do Windows 7 Professional 64b, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do Microsoft Office 2010 Professional, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do AntivÃ­rus ESET NOD32 9, configurado, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do WINRAR 64b e ativado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE FLASH e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE READER e atualizado.\r\nFoi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o dos drivers.', '01:51:48', '11', 'SÃ¡bado', 'Junho', '2016', 'NAO', 'alessandro.albuquerque'),
(24, 13, '', 'nafila', 'Teste UsuÃ¡rio', '', '12345678', '', '', 'teste.usuario', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'teste relato', '2', 'Baixa', '', '', '17:11:32', '16', 'Quinta', 'Junho', '2016', '', 'teste.usuario'),
(26, 11, 'Fica pendente realizar testes tÃ©cnicos nas 3 impressoras.', 'pendente', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TrÃªs impressoras e um desktop nÃ£o estÃ£o funcionando. ', '1', 'Baixa', 'Foi verificado que o DESKTOP, marca POSITIVO, modelo PLUS F125, S/N 2849332 estava com a fonte queimada, memÃ³ria ram e bateria bios com defeito. Sendo ocasionada provavelmente por uma oscilaÃ§Ã£o de corrente elÃ©trica.', 'Foi realizado a substituiÃ§Ã£o da fonte, memÃ³ria ram e bateria bios.', '21:01:20', '16', 'Quinta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(27, 11, 'Foi necessÃ¡rio o transporte dos equipamentos para o escritÃ³rio para anÃ¡lise mais profunda.\r\nFica pendente realizar testes tÃ©cnicos nas 3 impressoras.', 'pendente', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TrÃªs impressoras e um desktop nÃ£o estÃ£o funcionando. ', '1', 'Baixa', 'Foi verificado que o DESKTOP, marca POSITIVO, modelo PLUS F125, S/N 2849332 estava com a fonte queimada, memÃ³ria ram e bateria bios com defeito. Sendo ocasionada provavelmente por uma oscilaÃ§Ã£o de corrente elÃ©trica.', 'Foi realizado a substituiÃ§Ã£o da fonte, memÃ³ria ram e bateria bios.', '21:48:42', '16', 'Quinta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(28, 13, '', 'nafila', 'Daniel Blaya Batista', '', '', '', 'Excelente', '', '', '', 'Notebook', '', '', '', '', '', '', '', '', 'bivolt', '', 'nao', 'Certificado Digital TRE', 'nao', 'Precisa formatar e instalar Windows 10', '', 'Moderada', '', '', '20:28:01', '18', 'SÃ¡bado', 'Junho', '2016', 'NAO', 'alessandro.albuquerque'),
(29, 13, '', 'pronto', 'Daniel Blaya Batista', '', '', '', '', '', '', '', 'Notebook', '', '', '', '', '', '', '', '', 'bivolt', '', 'nao', 'Certificado Digital TRE', 'nao', 'Precisa formatar e instalar Windows 10', '', 'Moderada', 'Foi verificado divergÃªncia de compatibilidade entre o JAVA, NAVEGADORES e as cadeias do CERTIFICADO DIGITAL TRE', 'Foi realizado a formataÃ§Ã£o e instalaÃ§Ã£o do Windows 10 Professional 64b, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do Microsoft Office 2013 Professional, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do AntivÃ­rus ESET NOD32 8, configurado, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do WINRAR 64b e ativado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE FLASH e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE READER X PROFESSIONAL e atualizado.\r\nFoi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o dos drivers.\r\nFoi realizado a configuraÃ§Ã£o do CERTIFICADO DIGITAL TRE.', '20:46:00', '18', 'SÃ¡bado', 'Junho', '2016', '', 'alessandro.albuquerque'),
(30, 11, 'Foi necessÃ¡rio o transporte dos equipamentos para o escritÃ³rio onde serÃ¡ realizado uma anÃ¡lise mais profunda.\r\nFica pendente realizar testes tÃ©cnicos nas 3 impressoras.', 'pendente', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TrÃªs impressoras e um desktop nÃ£o estÃ£o funcionando. ', '1', 'Baixa', 'Foi verificado que o DESKTOP, marca POSITIVO, modelo PLUS F125, S/N 2849332 estava com a fonte queimada, memÃ³ria ram e bateria bios com defeito. Sendo ocasionada provavelmente por uma oscilaÃ§Ã£o de corrente elÃ©trica.', 'Foi realizado a substituiÃ§Ã£o da fonte, memÃ³ria ram e bateria bios.', '00:33:56', '19', 'Domingo', 'Junho', '2016', '', 'alessandro.albuquerque'),
(31, 11, 'Foi necessÃ¡rio o transporte dos equipamentos para o escritÃ³rio onde serÃ¡ realizado uma anÃ¡lise mais profunda.\r\nFica pendente realizar testes tÃ©cnicos nas 3 impressoras.', 'pendente', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TrÃªs impressoras e um desktop nÃ£o estÃ£o funcionando. ', '1', 'Baixa', 'Foi verificado que o DESKTOP, marca POSITIVO, modelo PLUS F125, S/N 2849332 estava com a fonte queimada, memÃ³ria ram e bateria bios com defeito. Sendo ocasionada provavelmente por uma oscilaÃ§Ã£o de corrente elÃ©trica.', 'Foi realizado a substituiÃ§Ã£o da fonte, memÃ³ria ram e bateria bios.', '00:51:30', '19', 'Domingo', 'Junho', '2016', '', 'alessandro.albuquerque'),
(34, 13, 'JÃ¡ estÃ¡ pago o combinado de R$60,00.', 'concluido', 'Daniel Blaya Batista', '+55 51 98981614', '', 'Danielblayab@gmail.com', '', '', '', '', 'Notebook', '', '', '', '', '', '', '', '', 'bivolt', '', 'nao', 'Certificado Digital TRE', 'nao', 'Precisa formatar e instalar Windows 10', '', 'Moderada', 'Foi verificado divergÃªncia de compatibilidade entre o JAVA, NAVEGADORES e as cadeias do CERTIFICADO DIGITAL TRE', 'Foi realizado a formataÃ§Ã£o e instalaÃ§Ã£o do Windows 10 Professional 64b, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do Microsoft Office 2013 Professional, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do AntivÃ­rus ESET NOD32 8, configurado, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do WINRAR 64b e ativado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE FLASH e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE READER X PROFESSIONAL e atualizado.\r\nFoi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o dos drivers.\r\nFoi realizado a configuraÃ§Ã£o do CERTIFICADO DIGITAL TRE.', '16:43:05', '19', 'Domingo', 'Junho', '2016', '', 'alessandro.albuquerque'),
(45, 11, 'Foi necessÃ¡rio o transporte dos equipamentos para o escritÃ³rio onde serÃ¡ realizado uma anÃ¡lise mais profunda.\r\nFica pendente realizar testes tÃ©cnicos nas 3 impressoras.', 'pendente', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TrÃªs impressoras e um desktop nÃ£o estÃ£o funcionando. ', '1', 'Alta', 'Foi verificado que o DESKTOP, marca POSITIVO, modelo PLUS F125, S/N 2849332, NG0001 estava com a fonte queimada, memÃ³ria ram e bateria bios com defeito. Sendo ocasionada provavelmente por uma oscilaÃ§Ã£o de corrente elÃ©trica.\r\n\r\nA impressora marca Lexmarc, modelo E120, s/n 994P5T0, cie NG0033 apresnta fonte queimada, placa lÃ³gica com defeito e a cabeÃ§a de impressÃ£o obstruÃ­da. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo para doaÃ§Ã£o de equipamento.\r\n\r\nA impressora marca HP, modelo OfficeJet 4355, s/n CN775GZ162, cie NG0031, apresenta cabeÃ§a de impressÃ£o obstruÃ­da, engrenagens e suporte de fax danificado. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo para doaÃ§Ã£o de equipamento.\r\n\r\nA impressora marca HP, modelo PSC 14-10, s/n BR68R3G08X, cie NG0029 apresenta fonte queimada e placa lÃ³gica com defeito. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo tÃ©cnico para doaÃ§Ã£o de equipamento.', 'Foi realizado a substituiÃ§Ã£o da fonte, memÃ³ria ram e bateria bios do equipamento NG0001.', '13:53:29', '22', 'Quarta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(46, 11, 'Foi necessÃ¡rio o transporte dos equipamentos para o escritÃ³rio onde serÃ¡ realizado uma anÃ¡lise mais profunda.\r\nFica pendente realizar testes tÃ©cnicos nas 3 impressoras.', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TrÃªs impressoras e um desktop nÃ£o estÃ£o funcionando. ', '1', 'Alta', 'Foi verificado que o DESKTOP, marca POSITIVO, modelo PLUS F125, S/N 2849332, NG0001 estava com a fonte queimada, memÃ³ria ram e bateria bios com defeito. Sendo ocasionada provavelmente por uma oscilaÃ§Ã£o de corrente elÃ©trica.\r\n\r\nA impressora marca Lexmarc, modelo E120, s/n 994P5T0, cie NG0033 apresnta fonte queimada, placa lÃ³gica com defeito e a cabeÃ§a de impressÃ£o obstruÃ­da. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo para doaÃ§Ã£o de equipamento.\r\n\r\nA impressora marca HP, modelo OfficeJet 4355, s/n CN775GZ162, cie NG0031, apresenta cabeÃ§a de impressÃ£o obstruÃ­da, engrenagens e suporte de fax danificado. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo para doaÃ§Ã£o de equipamento.\r\n\r\nA impressora marca HP, modelo PSC 14-10, s/n BR68R3G08X, cie NG0029 apresenta fonte queimada e placa lÃ³gica com defeito. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo tÃ©cnico para doaÃ§Ã£o de equipamento.', 'Foi realizado a substituiÃ§Ã£o da fonte, memÃ³ria ram e bateria bios do equipamento NG0001.', '13:54:35', '22', 'Quarta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(47, 11, 'Foi necessÃ¡rio o transporte dos equipamentos para o escritÃ³rio onde serÃ¡ realizado uma anÃ¡lise mais profunda.\r\nFica pendente realizar testes tÃ©cnicos nas 3 impressoras.', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', 'Excelente', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TrÃªs impressoras e um desktop nÃ£o estÃ£o funcionando. ', '1', 'Alta', 'Foi verificado que o DESKTOP, marca POSITIVO, modelo PLUS F125, S/N 2849332, NG0001 estava com a fonte queimada, memÃ³ria ram e bateria bios com defeito. Sendo ocasionada provavelmente por uma oscilaÃ§Ã£o de corrente elÃ©trica.\r\n\r\nA impressora marca Lexmarc, modelo E120, s/n 994P5T0, cie NG0033 apresnta fonte queimada, placa lÃ³gica com defeito e a cabeÃ§a de impressÃ£o obstruÃ­da. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo para doaÃ§Ã£o de equipamento.\r\n\r\nA impressora marca HP, modelo OfficeJet 4355, s/n CN775GZ162, cie NG0031, apresenta cabeÃ§a de impressÃ£o obstruÃ­da, engrenagens e suporte de fax danificado. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo para doaÃ§Ã£o de equipamento.\r\n\r\nA impressora marca HP, modelo PSC 14-10, s/n BR68R3G08X, cie NG0029 apresenta fonte queimada e placa lÃ³gica com defeito. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo tÃ©cnico para doaÃ§Ã£o de equipamento.', 'Foi realizado a substituiÃ§Ã£o da fonte, memÃ³ria ram e bateria bios do equipamento NG0001.', '15:10:18', '22', 'Quarta', 'Junho', '2016', '', 'ng.christiane.rosario'),
(48, 24, '', 'nafila', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'IMPRESSORA', 'BR11LFN17W', 'HP DESKJET', '2550', '', '', '', '', '', '', '', '', '', '', 'Impressora com defeito', '2', 'Alta', '', '', '17:08:22', '22', 'Quarta', 'Junho', '2016', '', 'ng.christiane.rosario'),
(49, 24, '', 'pendente', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'IMPRESSORA', 'BR11LFN17W', 'HP DESKJET', '2550', '', '', '', '', '', '', '', '', '', '', 'Impressora com defeito', '2', 'Alta', 'Foi realizado testes no sistema da HP e precisa substituir os cartuchos.', '', '19:11:32', '22', 'Quarta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(50, 25, '', 'nafila', 'Sabrina Bastos Castilhos', '+55 51 82420056', '', '', '', '', '', '', 'Notebook', '5B369716Q', 'Toshiba', 'Satellite C655D-S521', 'Toshiba', 'T11173810122A02', 'Toshiba', 'G71C000B3110', '', 'bivolt', 'AlohaTI - 7 dias', 'sim', '', 'nao', 'Tudo travado.', '2', 'Moderada', '', '', '19:31:40', '22', 'Quarta', 'Junho', '2016', 'NAO', 'alessandro.albuquerque'),
(51, 25, '', 'pendente', 'Sabrina Bastos Castilhos', '+55 51 82420056', '', '', '', '', '', '', 'Notebook', '5B369716Q', 'Toshiba', 'Satellite C655D-S521', 'Toshiba', 'T11173810122A02', 'Toshiba', 'G71C000B3110', '', 'bivolt', 'AlohaTI - 7 dias', 'sim', '', 'nao', 'Tudo travado.', '2', 'Moderada', 'Foi verificado a necessidade de formatar.', '', '19:32:39', '22', 'Quarta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(52, 25, '', 'pendente', 'Sabrina Bastos Castilhos', '+55 51 82420056', '', '', '', '', '', '', 'Notebook', '5B369716Q', 'Toshiba', 'Satellite C655D-S521', 'Toshiba', 'T11173810122A02', 'Toshiba', 'G71C000B3110', '', 'bivolt', 'AlohaTI - 7 dias', 'sim', '', 'nao', 'Tudo travado.', '2', 'Moderada', 'Foi verificado a necessidade de formatar.', '', '19:32:40', '22', 'Quarta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(53, 26, '', 'nafila', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'IMPRESSORA', 'BR46U1D1H2', 'HP DESKJET', '2546', '', '', '', '', '', '', '', '', '', '', 'instalar a impressora', '2', 'Alta', '', '', '08:11:04', '23', 'Quinta', 'Junho', '2016', '', 'ng.christiane.rosario'),
(54, 26, '', 'pendente', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'IMPRESSORA', 'BR46U1D1H2', 'HP DESKJET', '2546', '', '', '', '', '', '', '', '', '', '', 'instalar a impressora', '2', 'Alta', 'Foi verificado a necessidade de instalar o software da HP.', '', '11:09:42', '23', 'Quinta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(55, 27, '', 'nafila', 'BÃ¡rbara Ehlers Franke de Oliveira', '', '7085703184', 'qualidade@ngdefrance.com.br', '', 'ng.barbara.oliveira', 'Departamento de Qualidade', 'Analista', 'NOTEBOOK', '4002332500052', 'ITAUTEC', 'INFOWAY W7430', '', '', '', '', 'bios2014', '', '', 'nao', '', 'sim', 'Computador muito devagar e teclado com defeito.', '2', 'Baixa', '', '', '12:00:58', '23', 'Quinta', 'Junho', '2016', '', 'ng.barbara.oliveira'),
(56, 27, 'O equipamento foi transportado para o escritÃ³rio para realizar a formataÃ§Ã£o.', 'pendente', 'BÃ¡rbara Ehlers Franke de Oliveira', '', '7085703184', 'qualidade@ngdefrance.com.br', '', 'ng.barbara.oliveira', 'Departamento de Qualidade', 'Analista', 'NOTEBOOK', '4002332500052', 'ITAUTEC', 'INFOWAY W7430', '', '', '', '', 'bios2014', '', '', 'nao', '', 'sim', 'Computador muito devagar e teclado com defeito.', '2', 'Baixa', '', '', '12:30:50', '23', 'Quinta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(57, 27, 'O equipamento foi transportado para o escritÃ³rio para realizar a formataÃ§Ã£o.', 'pendente', 'BÃ¡rbara Ehlers Franke de Oliveira', '', '7085703184', 'qualidade@ngdefrance.com.br', '', 'ng.barbara.oliveira', 'Departamento de Qualidade', 'Analista', 'NOTEBOOK', '4002332500052', 'ITAUTEC', 'INFOWAY W7430', '', '', '', '', 'bios2014', '', '', 'nao', '', 'sim', 'Computador muito devagar e teclado com defeito.', '2', 'Baixa', 'Foi verificado a necessidade de formataÃ§Ã£o.', '', '12:31:29', '23', 'Quinta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(58, 26, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'IMPRESSORA', 'BR46U1D1H2', 'HP DESKJET', '2546', '', '', '', '', '', '', '', '', '', '', 'instalar a impressora', '2', 'Alta', 'Foi verificado a necessidade de instalar o software da HP.\r\nFoi verificado alguns bugs no Windows 10 do CIE NG0010.', 'Foi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o do software especÃ­fico da HP para realizar a digitalizaÃ§Ã£o de modo prÃ¡tico.\r\nFoi realizado a instalaÃ§Ã£o do ESET NOD32 trial e a instalaÃ§Ã£o do PICASA para visualizaÃ§Ã£o das imagens, sendo assim a soluÃ§Ã£o para os bugs encontrados. ', '12:37:10', '23', 'Quinta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(59, 26, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'IMPRESSORA', 'BR46U1D1H2', 'HP DESKJET', '2546', '', '', '', '', '', 'bivolt', '', '', '', '', 'instalar a impressora', '2', 'Alta', 'Foi verificado a necessidade de instalar o software da HP.\r\nFoi verificado alguns bugs no Windows 10 do CIE NG0010.', 'Foi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o do software especÃ­fico da HP para realizar a digitalizaÃ§Ã£o de modo prÃ¡tico.\r\nFoi realizado a instalaÃ§Ã£o do ESET NOD32 trial e a instalaÃ§Ã£o do PICASA para visualizaÃ§Ã£o das imagens, sendo assim a soluÃ§Ã£o para os bugs encontrados. ', '12:39:46', '23', 'Quinta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(60, 28, '', 'nafila', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', '', '', '', '', '', 'necessidade de impressÃ£o em pdf', '1', 'Moderada', '', '', '11:20:48', '27', 'Segunda', 'Junho', '2016', '', 'ng.christiane.rosario'),
(61, 27, 'O equipamento foi transportado para o escritÃ³rio para realizar a formataÃ§Ã£o.', 'pronto', 'BÃ¡rbara Ehlers Franke de Oliveira', '', '7085703184', 'qualidade@ngdefrance.com.br', '', 'ng.barbara.oliveira', 'Departamento de Qualidade', 'Analista', 'NOTEBOOK', '4002332500052', 'ITAUTEC', 'INFOWAY W7430', '', '', '', '', 'bios2014', '', '', 'nao', '', 'sim', 'Computador muito devagar e teclado com defeito.', '2', 'Baixa', 'Foi verificado a necessidade de formataÃ§Ã£o.', 'Foi formatado e instalaÃ§Ã£o o Windows 10.\r\nFoi instalado e configurado os softwares padrÃµes.', '12:16:33', '27', 'Segunda', 'Junho', '2016', '', 'alessandro.albuquerque'),
(62, 27, 'O equipamento foi transportado para o escritÃ³rio para realizar a formataÃ§Ã£o.', 'pronto', 'BÃ¡rbara Ehlers Franke de Oliveira', '', '7085703184', 'qualidade@ngdefrance.com.br', 'Excelente', 'ng.barbara.oliveira', 'Departamento de Qualidade', 'Analista', 'NOTEBOOK', '4002332500052', 'ITAUTEC', 'INFOWAY W7430', '', '', '', '', 'bios2014', '', '', '', '', '', 'Computador muito devagar e teclado com defeito.', '2', 'Baixa', 'Foi verificado a necessidade de formataÃ§Ã£o.', 'Foi formatado e instalaÃ§Ã£o o Windows 10.\r\nFoi instalado e configurado os softwares padrÃµes.', '12:18:07', '27', 'Segunda', 'Junho', '2016', '', 'ng.barbara.oliveira'),
(63, 27, 'O equipamento foi transportado para o escritÃ³rio para realizar a formataÃ§Ã£o.', 'concluido', 'BÃ¡rbara Ehlers Franke de Oliveira', '', '7085703184', 'qualidade@ngdefrance.com.br', '', 'ng.barbara.oliveira', 'Departamento de Qualidade', 'Analista', 'NOTEBOOK', '4002332500052', 'ITAUTEC', 'INFOWAY W7430', '', '', '', '', 'bios2014', '', '', 'nao', '', 'sim', 'Computador muito devagar e teclado com defeito.', '2', 'Baixa', 'Foi verificado a necessidade de formataÃ§Ã£o.', 'Foi formatado e instalaÃ§Ã£o o Windows 10.\r\nFoi instalado e configurado os softwares padrÃµes.', '14:17:38', '27', 'Segunda', 'Junho', '2016', '', 'alessandro.albuquerque'),
(64, 28, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', '', '', '', '', '', 'necessidade de impressÃ£o em pdf', '1', 'Moderada', 'Foi verificado uma limitaÃ§Ã£o no switch.\r\n', 'Foi a troca de porta do switch e a impressora estÃ¡ funcionando corretamente.', '14:19:08', '27', 'Segunda', 'Junho', '2016', '', 'alessandro.albuquerque'),
(65, 29, '', 'nafila', 'Lucas Wayne Lopes', '', '', '', '', '', '', '', 'Notebook', 'JH0F9QAD801280Y', 'Samsung', '270E', 'Samsung', 'BRBA9605161A00JCD805', '', '', '9514', 'bivolt', 'Aloha TI', 'nao', 'AntivÃ­rus ESET NOD32', 'nao', 'NÃ£o entra no SO e ao desconectar o carregador o notebook desliga.', '2', 'Moderada', '', '', '12:07:01', '30', 'Quinta', 'Junho', '2016', 'NAO', 'alessandro.albuquerque'),
(66, 30, '', 'nafila', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'Servidor', '', 'Preciso de ajuda para criar pasta pÃºblica no servidor', '1', 'Moderada', '', '', '16:53:49', '30', 'Quinta', 'Junho', '2016', '', 'ng.juliana.bertoli'),
(67, 30, 'Foi combinado com o JÃºnior o aguardo do login e senha de acesso e tipo de acesso para cada diretÃ³rio.', 'pendente', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'Servidor', '', 'Preciso de ajuda para criar pasta pÃºblica no servidor', '1', 'Moderada', '', '', '19:21:28', '30', 'Quinta', 'Junho', '2016', '', 'alessandro.albuquerque'),
(68, 29, 'Foi combinado o valor de R$30 para a manutenÃ§Ã£o do notebook.', 'pronto', 'Lucas Wayne Lopes', '', '', '', '', '', '', '', 'Notebook', 'JH0F9QAD801280Y', 'Samsung', '270E', 'Samsung', 'BRBA9605161A00JCD805', 'Samsung', 'CNBA4300282AI00635S3', '9514', 'bivolt', 'Aloha TI', 'nao', 'AntivÃ­rus ESET NOD32', 'nao', 'NÃ£o entra no SO e ao desconectar o carregador o notebook desliga.', '2', 'Moderada', 'Foi detectado que o conector da bateria estÃ¡ danificado.\r\nFoi realizado que o Sistema Operacional estÃ¡ corrompido.', 'Foi realizado a restauraÃ§Ã£o do SO Windows 8 e ativaÃ§Ã£o.\r\nFoi realizado a instalaÃ§Ã£o do Microsoft Office 2013 Professional e ativaÃ§Ã£o.\r\nFoi realizado a instalaÃ§Ã£o do antivÃ­rus ESET NOD32, configurado e ativado.\r\nFoi realizado uma pequena rejunte de solda no conector da bateria, sendo assim, foi restaurado a bateria.\r\n', '18:56:56', '01', 'Sexta', 'Julho', '2016', '', 'alessandro.albuquerque'),
(69, 31, '', 'nafila', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'IMPRESSORA', '', 'IMPRESSORA NÃƒO ESTÃ FUNCIONANDO', '1', 'Moderada', '', '', '08:15:13', '04', 'Segunda', 'Julho', '2016', '', 'ng.juliana.bertoli'),
(70, 32, '', 'nafila', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'impre', '', '', '1', 'Moderada', '', '', '10:42:10', '04', 'Segunda', 'Julho', '2016', '', 'ng.juliana.bertoli'),
(71, 33, '', 'nafila', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'IMPRESSORA', '', 'Estamos sem conseguir utilizar a impressora. A Os anterior foi errada pois nÃ£o sabia que com o enter enviava.', '2', 'Moderada', '', '', '10:42:59', '04', 'Segunda', 'Julho', '2016', '', 'ng.juliana.bertoli'),
(72, 31, '', 'pronto', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', 'bivolt', '', '', 'IMPRESSORA', '', 'IMPRESSORA NÃƒO ESTÃ FUNCIONANDO', '1', 'Moderada', 'Foi verificado uma falha de comunicaÃ§Ã£o. Ainda estÃ¡ em teste para uma soluÃ§Ã£o.', 'Foi realizado a troca da porta do switch e jÃ¡ estÃ¡ funcionando corretamente', '13:02:26', '04', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(73, 33, '', 'pronto', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'IMPRESSORA', '', 'Estamos sem conseguir utilizar a impressora. A Os anterior foi errada pois nÃ£o sabia que com o enter enviava.', '2', 'Moderada', 'Foi verificado uma falha de comunicaÃ§Ã£o. Ainda estÃ¡ em teste para uma soluÃ§Ã£o.', 'Foi realizado a substituiÃ§Ã£o do uso de porta do switch e voltou a funcionar corretamente.', '13:04:24', '04', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(74, 32, 'Vinculada a OS0033', 'pronto', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'impre', '', '', '1', 'Moderada', '', '', '13:04:53', '04', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(75, 31, 'Vinculado a OS0033', 'pronto', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', 'bivolt', '', '', 'IMPRESSORA', '', 'IMPRESSORA NÃƒO ESTÃ FUNCIONANDO', '1', 'Moderada', '', '', '13:05:20', '04', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(76, 34, '', 'nafila', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', '', '', '', '', '', 'nÃ£o consigo utilizar o excell - urgente!!', '2', 'Alta', '', '', '09:17:45', '05', 'TerÃ§a', 'Julho', '2016', '', 'ng.christiane.rosario'),
(77, 34, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', 'bivolt', '', '', '', '', 'nÃ£o consigo utilizar o excell - urgente!!', '2', 'Alta', 'Foi verificado bugs no Windows 10.\r\n', 'Foi realizado a configuraÃ§Ã£o do windows update e desabilitados alguns softwares na inicializaÃ§Ã£o do SO.', '12:17:03', '05', 'TerÃ§a', 'Julho', '2016', '', 'alessandro.albuquerque'),
(78, 35, '', 'nafila', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'acabou o tonner da impressora HP Laser JET 1525', '1', 'Moderada', '', '', '09:13:19', '08', 'Sexta', 'Julho', '2016', '', 'ng.christiane.rosario'),
(79, 36, '', 'nafila', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', '', '', '', '', '', 'transporte da maquina ', '1', 'Moderada', '', '', '17:05:28', '08', 'Sexta', 'Julho', '2016', '', 'ng.christiane.rosario'),
(80, 35, 'Foi necessÃ¡rio o transporte do toner CE320A para a recarga.', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'acabou o tonner da impressora HP Laser JET 1525', '1', 'Moderada', 'Foi verificado que o toner preto e o magenta acabou a tinta.', 'Foi realizado a recarga do cartucho CE320a black.', '20:27:33', '08', 'Sexta', 'Julho', '2016', '', 'alessandro.albuquerque'),
(81, 36, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', 'bivolt', '', '', '', '', 'transporte da maquina ', '1', 'Moderada', 'Foi verificado a mÃ¡quina e estÃ¡ funcionando corretamente.', 'Reinstalado a impressora HP LaserJet CP1525nw.', '13:58:27', '11', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(82, 30, 'Foi combinado com o JÃºnior o aguardo do login e senha de acesso e tipo de acesso para cada diretÃ³rio.', 'pronto', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', 'bivolt', '', '', 'Servidor', '', 'Preciso de ajuda para criar pasta pÃºblica no servidor', '1', 'Moderada', 'Foi verificado que o servidor estÃ¡ configurado uma Ã¡rvore de domÃ­nio.', 'Foi mapeado a unidade de rede \"Z\" para acesso ao servidor de arquivos.', '13:59:59', '11', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(83, 24, '', 'pendente', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'IMPRESSORA', 'BR11LFN17W', 'HP DESKJET', '2550', '', '', '', '', '', 'bivolt', '', '', '', '', 'Impressora com defeito', '2', 'Alta', 'Foi realizado testes no sistema da HP e precisa substituir os cartuchos.', 'Foi realizado a substituiÃ§Ã£o do cartucho de tinta preto e colorido.', '14:02:29', '11', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(84, 11, 'Foi necessÃ¡rio o transporte dos equipamentos para o escritÃ³rio onde serÃ¡ realizado uma anÃ¡lise mais profunda.\r\nFica pendente realizar testes tÃ©cnicos nas 3 impressoras.', 'concluido', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'TrÃªs impressoras e um desktop nÃ£o estÃ£o funcionando. ', '1', 'Alta', 'Foi verificado que o DESKTOP, marca POSITIVO, modelo PLUS F125, S/N 2849332, NG0001 estava com a fonte queimada, memÃ³ria ram e bateria bios com defeito. Sendo ocasionada provavelmente por uma oscilaÃ§Ã£o de corrente elÃ©trica.\r\n\r\nA impressora marca Lexmarc, modelo E120, s/n 994P5T0, cie NG0033 apresnta fonte queimada, placa lÃ³gica com defeito e a cabeÃ§a de impressÃ£o obstruÃ­da. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo para doaÃ§Ã£o de equipamento.\r\n\r\nA impressora marca HP, modelo OfficeJet 4355, s/n CN775GZ162, cie NG0031, apresenta cabeÃ§a de impressÃ£o obstruÃ­da, engrenagens e suporte de fax danificado. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo para doaÃ§Ã£o de equipamento.\r\n\r\nA impressora marca HP, modelo PSC 14-10, s/n BR68R3G08X, cie NG0029 apresenta fonte queimada e placa lÃ³gica com defeito. Sendo necessÃ¡rio a substituiÃ§Ã£o das peÃ§as danificadas, entÃ£o nÃ£o Ã© viÃ¡vel o conserto, pois serÃ¡ mais caro que a aquisiÃ§Ã£o de uma nova. Foi realizado um laudo tÃ©cnico para doaÃ§Ã£o de equipamento.', 'Foi realizado a substituiÃ§Ã£o da fonte, memÃ³ria ram e bateria bios do equipamento NG0001.', '14:03:03', '11', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(85, 24, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'IMPRESSORA', 'BR11LFN17W', 'HP DESKJET', '2550', '', '', '', '', '', 'bivolt', '', '', '', '', 'Impressora com defeito', '2', 'Alta', 'Foi realizado testes no sistema da HP e precisa substituir os cartuchos.', 'Foi realizado a substituiÃ§Ã£o do cartucho de tinta preto e colorido.', '14:03:37', '11', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(86, 25, 'Foi combinado que nÃ£o serÃ¡ necessÃ¡rio o pagamento do serviÃ§o.', 'pronto', 'Sabrina Bastos Castilhos', '+55 51 82420056', '', '', '', '', '', '', 'Notebook', '5B369716Q', 'Toshiba', 'Satellite C655D-S521', 'Toshiba', 'T11173810122A02', 'Toshiba', 'G71C000B3110', '', 'bivolt', 'AlohaTI - 7 dias', 'sim', '', 'nao', 'Tudo travado.', '2', 'Moderada', 'Foi verificado a necessidade de formatar. \r\nFoi realizado testes e verificado que a placa mÃ£e estÃ¡ em curto circuito.', 'Foi realizado a formataÃ§Ã£o e instalaÃ§Ã£o do Windows 10 Professional 64b, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do Microsoft Office 2013 Professional, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do AntivÃ­rus ESET NOD32 8, configurado, ativado e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do WINRAR 64b e ativado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE FLASH e atualizado.\r\nFoi realizado a instalaÃ§Ã£o do ADOBE READER X PROFESSIONAL e atualizado.\r\nFoi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o dos drivers.\r\n', '14:06:15', '11', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(87, 29, 'Foi combinado o valor de R$40 para a manutenÃ§Ã£o do notebook.', 'pronto', 'Lucas Wayne Lopes', '', '', '', '', '', '', '', 'Notebook', 'JH0F9QAD801280Y', 'Samsung', '270E', 'Samsung', 'BRBA9605161A00JCD805', 'Samsung', 'CNBA4300282AI00635S3', '9514', 'bivolt', 'Aloha TI', 'nao', 'AntivÃ­rus ESET NOD32', 'nao', 'NÃ£o entra no SO e ao desconectar o carregador o notebook desliga.', '2', 'Moderada', 'Foi detectado que o conector da bateria estÃ¡ danificado.\r\nFoi realizado que o Sistema Operacional estÃ¡ corrompido.\r\nFoi verificado uma oscilaÃ§Ã£o nas tomadas do apartamento do cliente.', 'Foi realizado a restauraÃ§Ã£o do SO Windows 8 e ativaÃ§Ã£o.\r\nFoi realizado a instalaÃ§Ã£o do Microsoft Office 2013 Professional e ativaÃ§Ã£o.\r\nFoi realizado a instalaÃ§Ã£o do antivÃ­rus ESET NOD32, configurado e ativado.\r\nFoi realizado uma pequena rejunte de solda no conector da bateria, sendo assim, foi restaurado a bateria.\r\nFoi realizado testes com multÃ­metro nas tomadas do apartamento do cliente.\r\n', '14:11:16', '11', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(88, 37, '', 'nafila', 'Alessandro Almeida de Albuquerque', '5182313891', '', 'alessandro.aalbuquerque@gmail.com', '', '', '', '', 'Netbook', '15G29L001040', 'Asus', 'Eee PC Seashell', 'Asus', '04G26B00108221600171', '', '', 'IIO5226', 'bivolt', 'Aloha TI - 7 dias', 'nao', 'Wirelles - ESET', 'nao', 'NÃ£o consegue acessar WiFi.', '2', 'Moderada', '', '', '12:40:14', '18', 'Segunda', 'Julho', '2016', 'NAO', 'alessandro.albuquerque'),
(89, 37, '', 'pronto', 'Alessandro Almeida de Albuquerque', '5182313891', '', 'alessandro.aalbuquerque@gmail.com', '', '', '', '', 'Netbook', '15G29L001040', 'Asus', 'Eee PC Seashell', 'Asus', '04G26B00108221600171', 'Asus', 'CCOAB2000638', 'IIO5226', 'bivolt', 'Aloha TI - 7 dias', 'nao', 'Wirelles - ESET', 'nao', 'NÃ£o consegue acessar WiFi.', '2', 'Moderada', 'Foi verificado que a instalaÃ§Ã£o do AntivÃ­rus BAIDU alterou configuraÃ§Ãµes da firmware da placa mÃ£e e conflitou driver de wifi', 'Foi realizado a desisntalaÃ§Ã£o do antivÃ­rus BAIDU.\r\nFoi realizado a configuraÃ§Ã£o da firmware da placa mÃ£e.\r\nFoi realizado a instalaÃ§Ã£o, configuraÃ§Ã£o e ativaÃ§Ã£o do ESET NOD32 antivÃ­rus.', '12:43:56', '18', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(90, 37, 'Foi combinado o valor de R$30,00 pela configuraÃ§Ã£o do equipamento.', 'pronto', 'Alessandro Almeida de Albuquerque', '5182313891', '', 'alessandro.aalbuquerque@gmail.com', '', '', '', '', 'Netbook', '15G29L001040', 'Asus', 'Eee PC Seashell', 'Asus', '04G26B00108221600171', 'Asus', 'CCOAB2000638', 'IIO5226', 'bivolt', 'Aloha TI - 7 dias', 'nao', 'Wirelles - ESET', 'nao', 'NÃ£o consegue acessar WiFi.', '2', 'Moderada', 'Foi verificado que a instalaÃ§Ã£o do AntivÃ­rus BAIDU alterou configuraÃ§Ãµes da firmware da placa mÃ£e e conflitou driver de wifi', 'Foi realizado a desisntalaÃ§Ã£o do antivÃ­rus BAIDU.\r\nFoi realizado a configuraÃ§Ã£o da firmware da placa mÃ£e.\r\nFoi realizado a instalaÃ§Ã£o, configuraÃ§Ã£o e ativaÃ§Ã£o do ESET NOD32 antivÃ­rus.', '12:48:43', '18', 'Segunda', 'Julho', '2016', '', 'alessandro.albuquerque'),
(91, 38, '', 'nafila', 'Alessandro Almeida de Albuquerque', '+55 51 82313891', '2314818', 'alessandro.aalbuquerque@gmail.com', '', 'alessandro.albuquerque', 'Departamento de TI', 'Diretor', 'IMPRESSORA', 'BRBFC9FD7F', 'HP LASERJET COLOR', 'CP1525NW', '', '', '', '', '', 'centoedez', '', 'nao', '', 'nao', 'Terminou a tinta dos toners CE321a, CE322a, CE323a', '1', 'Moderada', '', '', '16:42:32', '19', 'TerÃ§a', 'Julho', '2016', '', 'alessandro.albuquerque'),
(92, 38, 'O valor combinado de R$510,00 para os KIT 4 TONER 128A, CE320a, CE321aa, CE322a, CE323a.\r\nJÃ¡ foi realizado a emissÃ£o da NF serÃ¡ depositado em conta bancÃ¡ria.', 'pronto', 'Alessandro Almeida de Albuquerque', '+55 51 82313891', '2314818', 'alessandro.aalbuquerque@gmail.com', '', 'alessandro.albuquerque', 'Departamento de TI', 'Diretor', 'IMPRESSORA', 'BRBFC9FD7F', 'HP LASERJET COLOR', 'CP1525NW', '', '', '', '', '', 'centoedez', '', 'nao', '', 'nao', 'Terminou a tinta dos toners CE321a, CE322a, CE323a', '1', 'Moderada', 'Foi verificado que acabou a tinta dos toners CE321a, CE322a, CE323a.\r\n', 'Foi realizado a substituiÃ§Ã£o dos toners descritos acima.', '16:45:19', '19', 'TerÃ§a', 'Julho', '2016', '', 'alessandro.albuquerque'),
(93, 39, '', 'nafila', 'Jornal Bons Ventos', '', '', '', '', '', '', '', 'Cartuchos de Impress', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Foi transportado para o escritÃ³rio, 4 cartuchos HP21 e 1 cartucho HP22', '1', 'Baixa', '', '', '16:24:11', '20', 'Quarta', 'Julho', '2016', 'NAO', 'alessandro.albuquerque'),
(94, 40, '', 'nafila', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', '', '', '', '', '', 'nÃ£o consigo nem imprimir nem escanear....urgente', '1', 'Moderada', '', '', '15:54:03', '26', 'TerÃ§a', 'Julho', '2016', '', 'ng.christiane.rosario'),
(95, 41, '', 'nafila', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', '', '', '', '', '', 'nÃ£o consigo nem escanear, nem imprimir...urgente', '1', 'Moderada', '', '', '15:55:53', '26', 'TerÃ§a', 'Julho', '2016', '', 'ng.christiane.rosario'),
(96, 39, 'Estou aguardando resposta para negociaÃ§Ã£o da mÃ¡quina.', 'pendente', 'Jornal Bons Ventos', '', '', '', '', '', '', '', 'Cartuchos de Impress', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Foi transportado para o escritÃ³rio, 4 cartuchos HP21 e 1 cartucho HP22', '1', 'Baixa', 'Foi testado 3 cartuchos. 2 estÃ£o funcionando corretamente e 1 estÃ¡ queimado.', '', '16:45:55', '26', 'TerÃ§a', 'Julho', '2016', '', 'alessandro.albuquerque'),
(97, 40, '', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', 'bivolt', '', '', '', '', 'nÃ£o consigo nem imprimir nem escanear....urgente', '1', 'Moderada', 'Necessita instalar driver de digitalizaÃ§Ã£o.', 'Foi realizado atendimento via acesso remoto.\r\nFoi instalado e configurado o sistema de digitalizaÃ§Ã£o da HP.', '16:47:49', '26', 'TerÃ§a', 'Julho', '2016', '', 'alessandro.albuquerque'),
(98, 41, 'Ordem de serviÃ§o vinculada com OS 0040.', 'pronto', 'Christiane Seelig RosÃ¡rio', '', '1041249721', 'compras@ngdefrance.com.br', '', 'ng.christiane.rosario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'NOTEBOOK', 'LXRP401008142B', 'ACER ASPIRE', '57-50-6697', '', '', '', '', '', '', '', '', '', '', 'nÃ£o consigo nem escanear, nem imprimir...urgente', '1', 'Moderada', '', '', '16:48:38', '26', 'TerÃ§a', 'Julho', '2016', '', 'alessandro.albuquerque'),
(99, 42, '', 'nafila', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'scanner', '', 'Preciso que tu instales o programa de scan no meu computador.', '1', 'Moderada', '', '', '09:20:45', '27', 'Quarta', 'Julho', '2016', '', 'ng.juliana.bertoli'),
(100, 42, 'Foi combinado a atendimento pela pela tarde do dia 27/07/2016.', 'pendente', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'scanner', '', 'Preciso que tu instales o programa de scan no meu computador.', '1', 'Moderada', '', '', '12:01:26', '27', 'Quarta', 'Julho', '2016', '', 'alessandro.albuquerque'),
(101, 42, 'Foi combinado a atendimento pela pela tarde do dia 27/07/2016.', 'pronto', 'Juliana Bertoli', '', '7085703358', 'sac@ngdefrance.com.br', '', 'ng.juliana.bertoli', 'Assessoria de ComunicaÃ§Ã£o', 'Auxiliar', 'ULTRABOOK', 'PE1YF0L', 'LENOVO', 'G50-08', '', '', '', '', '', '', '', '', 'scanner', '', 'Preciso que tu instales o programa de scan no meu computador.', '1', 'Moderada', 'Foi verificado a necessidade da instalaÃ§Ã£o dos drivers da impressora.', 'Foi realizado a instalaÃ§Ã£o e configuraÃ§Ã£o do sistema da HP.\r\nFoi realizado a configuraÃ§Ã£o do TEAM VIEWER.', '20:09:54', '27', 'Quarta', 'Julho', '2016', '', 'alessandro.albuquerque'),
(102, 43, '', 'nafila', 'Anelize Santos Sampaio', '', '5094279618', 'comunicacao@ngdefrance.com.br', '', 'ng.anelize.sampaio', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'DESKTOP', '1Y1M8S1', 'DELL', 'XPS8300	', '', '', '', '', '', 'bivolt', '', '', '', 'sim', '', '1', 'Moderada', '', '', '08:57:38', '01', 'Segunda', 'Agosto', '2016', '', 'ng.anelize.sampaio'),
(103, 43, '', 'pronto', 'Anelize Santos Sampaio', '', '5094279618', 'comunicacao@ngdefrance.com.br', '', 'ng.anelize.sampaio', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', 'DESKTOP', '1Y1M8S1', 'DELL', 'XPS8300	', '', '', '', '', '', 'bivolt', '', '', '', 'sim', '', '1', 'Moderada', 'Foi verificado um email de 198mb na caixa de saÃ­da, assim travando o Outlook.', 'Foi excluÃ­do o email travado em modo Off-Line.', '10:11:58', '01', 'Segunda', 'Agosto', '2016', '', 'alessandro.albuquerque'),
(104, 44, '', 'nafila', 'Teste UsuÃ¡rio', '', '12345678', '', '', 'teste.usuario', 'NÃ£o Cadastrado', 'NÃ£o Cadastrado', '', '', '', '', '', '', '', '', '12345678', '', '', 'sim', '', 'nao', 'Teste de BD', '2', 'Moderada', '', '', '20:44:04', '05', 'Quarta', 'Abril', '2017', '', 'teste.usuario');

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
  `rg` varchar(60) NOT NULL,
  `rgorgao` varchar(60) NOT NULL,
  `rguf` varchar(60) NOT NULL,
  `matricula` varchar(60) DEFAULT NULL,
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

INSERT INTO `registrousuario` (`id`, `id_usuario`, `login`, `senha`, `nome`, `rg`, `rgorgao`, `rguf`, `matricula`, `email`, `telefone`, `departamento`, `cargo`, `nivel`, `pnivel`, `ativo`, `pativo`, `gerasenha`, `horario`, `dia`, `semana`, `mes`, `ano`, `operador`) VALUES
(1, 36, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '123', '123', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:33:08', '26', 'Quarta', 'Junho', '2024', 'admin'),
(2, 37, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '123', '123', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:34:43', '26', 'Quarta', 'Junho', '2024', 'admin'),
(3, 38, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '123', '123', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:36:56', '26', 'Quarta', 'Junho', '2024', 'admin'),
(4, 39, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '123', '123', '123', NULL, '123@123.com', '+55 12 311231231', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:37:20', '26', 'Quarta', 'Junho', '2024', 'admin'),
(5, 40, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '123', '123', '123', NULL, '123@123.com', '+55 12 311231231', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:38:09', '26', 'Quarta', 'Junho', '2024', 'admin'),
(6, 41, '123', 'd41d8cd98f00b204e9800998ecf8427e', '123', '123', '123', '123', NULL, '123', '+55 12 312312', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:38:23', '26', 'Quarta', 'Junho', '2024', 'admin'),
(7, 42, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '123', '123', '123', NULL, '123', '+55 12 3', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:40:41', '26', 'Quarta', 'Junho', '2024', 'admin'),
(8, 43, 'qweqwe', 'd41d8cd98f00b204e9800998ecf8427e', 'qweqwe', '', '', '', NULL, '', '', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '02:00:14', '26', 'Quarta', 'Junho', '2024', 'admin'),
(9, 44, 'qwe', 'd41d8cd98f00b204e9800998ecf8427e', 'qwe', '123', 'asad', 'asd', NULL, 'asdasd', '', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '02:00:33', '26', 'Quarta', 'Junho', '2024', 'admin'),
(10, 26, 'teste', '3654fc2d0cb8280598d849817945979c', '123', '123', '', '', '', '321@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '07:06:22', '27', 'Quinta', 'Junho', '2024', 'admin'),
(11, 26, 'teste', '3654fc2d0cb8280598d849817945979c', '123', '123', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '07:06:58', '27', 'Quinta', 'Junho', '2024', 'admin'),
(12, 26, 'teste', '3654fc2d0cb8280598d849817945979c', '123', '123', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '07:19:58', '27', 'Quinta', 'Junho', '2024', 'admin'),
(13, 26, 'teste', '3654fc2d0cb8280598d849817945979c', '123', '123', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '07:21:19', '27', 'Quinta', 'Junho', '2024', 'admin'),
(14, 26, 'teste', '3654fc2d0cb8280598d849817945979c', '123', '123', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '1', '07:39:00', '27', 'Quinta', 'Junho', '2024', 'admin'),
(15, 26, 'teste', '3654fc2d0cb8280598d849817945979c', '123', '321', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '07:40:03', '27', 'Quinta', 'Junho', '2024', 'admin'),
(16, 26, 'teste', '3654fc2d0cb8280598d849817945979c', '123', '321', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '1', '07:40:13', '27', 'Quinta', 'Junho', '2024', 'admin'),
(17, 26, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '321', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '1', '07:42:30', '27', 'Quinta', 'Junho', '2024', 'admin'),
(18, 26, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '321', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '1', '07:43:56', '27', 'Quinta', 'Junho', '2024', 'admin'),
(19, 26, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '321', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '0', 'Desativado', '4', '08:14:48', '27', 'Quinta', 'Junho', '2024', 'admin'),
(20, 45, 'asdas', 'd41d8cd98f00b204e9800998ecf8427e', 'asdas', 'a12312', 'qweq\'', '123asd', NULL, 'qwqwe', '+55 41 123123123', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '14:56:16', '27', 'Quinta', 'Junho', '2024', 'gestor'),
(21, 26, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '321', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '4', '15:00:26', '27', 'Quinta', 'Junho', '2024', 'admin'),
(22, 26, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '321', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '0', 'Desativado', '4', '15:01:34', '27', 'Quinta', 'Junho', '2024', 'admin'),
(23, 26, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', '123', '321', '', '', '', '231@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '0', 'Desativado', '1', '15:02:47', '27', 'Quinta', 'Junho', '2024', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `rg` varchar(60) NOT NULL,
  `rgorgao` varchar(60) NOT NULL,
  `rguf` varchar(60) NOT NULL,
  `matricula` varchar(60) DEFAULT NULL,
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

INSERT INTO `usuario` (`id`, `login`, `senha`, `nome`, `rg`, `rgorgao`, `rguf`, `matricula`, `email`, `telefone`, `departamento`, `cargo`, `nivel`, `pnivel`, `ativo`, `pativo`, `gerasenha`, `horario`, `dia`, `semana`, `mes`, `ano`, `operador`) VALUES
(1, 'admin', 'admin', 'Alessandro Almeida de Albuquerque', '2314818', 'SSP', 'DF', '2314818', 'alessandro.aalbuquerque@gmail.com', '+55 51 82313891', 'Departamento de TI', 'Diretor', '3', 'Administrador', '1', 'Ativado', '', '18:00:00', '18', 'Quarta', 'Maio', '2016', 'banco de dados'),
(5, 'gestor', 'gestor', 'teste usuario', '23123123', 'SSU', 'RS', '123', 'aseasda', '+55 12 312312312', 'Secretaria Executiva', 'NÃ£o Cadastrado', '2', 'Usuario', '1', 'Desativado', '0', '10:37:24', '16', 'Terça', 'Junho', '2016', 'alessandro.albuquerque'),
(6, 'operador', 'operador', 'testebeetles', '123123123', 'SSP', 'RS', '123123123123', 'alessandro.aalbuquerque@gmail.com', '+55 12 312312312', 'Almoxarifado', 'Assistente', '1', 'Usuario', '1', 'Desativado', '0', '10:37:38', '16', 'Terça', 'Junho', '2016', 'alessandro.albuquerque'),
(25, 'teste123', '123', 'teste', '', '', '', '123', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '0', 'Ativado', '0', '23:56:09', '25', 'Ter?a', 'Junho', '2024', 'admin'),
(27, 'teste321', '321', '123', '123', 'SSP', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '00:15:51', '26', 'Quarta', 'Junho', '2024', 'admin'),
(28, 'teste', '123', '123', '123', 'SSP', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '00:16:44', '26', 'Quarta', 'Junho', '2024', 'admin'),
(29, 'teste', '123', '123', '123', 'SSP', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '00:16:46', '26', 'Quarta', 'Junho', '2024', 'admin'),
(30, 'teste', '123', '123', '123', 'SSP', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '00:19:53', '26', 'Quarta', 'Junho', '2024', 'admin'),
(31, 'teste', '123', '123', '123', 'SSP', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '00:21:01', '26', 'Quarta', 'Junho', '2024', 'admin'),
(32, 'teste', '123', '123', '123', 'SSP', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '00:21:44', '26', 'Quarta', 'Junho', '2024', 'admin'),
(33, 'teste', '123', '123', '123', 'SSP', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '00:23:06', '26', 'Quarta', 'Junho', '2024', 'admin'),
(34, 'teste', '123', '123', '123', '123', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:25:12', '26', 'Quarta', 'Junho', '2024', 'admin'),
(35, 'teste', '123', '123', '123', '123', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:30:17', '26', 'Quarta', 'Junho', '2024', 'admin'),
(36, 'teste', '123', '123', '123', '123', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:33:08', '26', 'Quarta', 'Junho', '2024', 'admin'),
(37, 'teste', '123', '123', '123', '123', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:34:43', '26', 'Quarta', 'Junho', '2024', 'admin'),
(38, 'teste', '123', '123', '123', '123', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:36:56', '26', 'Quarta', 'Junho', '2024', 'admin'),
(39, 'teste', '123', '123', '123', '123', '123', NULL, '123@123.com', '+55 12 311231231', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:37:20', '26', 'Quarta', 'Junho', '2024', 'admin'),
(40, 'teste', '123', '123', '123', '123', '123', NULL, '123@123.com', '+55 12 311231231', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:38:09', '26', 'Quarta', 'Junho', '2024', 'admin'),
(41, '123', '123', '123', '123', '123', '123', NULL, '123', '+55 12 312312', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:38:23', '26', 'Quarta', 'Junho', '2024', 'admin'),
(42, 'teste', '123', '123', '123', '123', '123', NULL, '123', '+55 12 3', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:40:41', '26', 'Quarta', 'Junho', '2024', 'admin'),
(43, 'qweqwe', '', 'qweqwe', '', '', '', NULL, '', '', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '02:00:14', '26', 'Quarta', 'Junho', '2024', 'admin'),
(44, 'qwe', '123', 'qwe', '123', 'asad', 'asd', NULL, 'asdasd', '', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '02:00:33', '26', 'Quarta', 'Junho', '2024', 'admin'),
(45, 'asdas', 'a12312', 'asdas', 'a12312', 'qweq\'', '123asd', NULL, 'qwqwe', '+55 41 123123123', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '14:56:16', '27', 'Quinta', 'Junho', '2024', 'gestor');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `apontamentosti`
--
ALTER TABLE `apontamentosti`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contatos_acquasurf`
--
ALTER TABLE `contatos_acquasurf`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contatos_ngdefrance`
--
ALTER TABLE `contatos_ngdefrance`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registroapontamentosti`
--
ALTER TABLE `registroapontamentosti`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registroequipamento`
--
ALTER TABLE `registroequipamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registroos`
--
ALTER TABLE `registroos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `registrousuario`
--
ALTER TABLE `registrousuario`
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
-- AUTO_INCREMENT de tabela `apontamentosti`
--
ALTER TABLE `apontamentosti`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `contatos_acquasurf`
--
ALTER TABLE `contatos_acquasurf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `contatos_ngdefrance`
--
ALTER TABLE `contatos_ngdefrance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `os`
--
ALTER TABLE `os`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `registroapontamentosti`
--
ALTER TABLE `registroapontamentosti`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `registroequipamento`
--
ALTER TABLE `registroequipamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT de tabela `registroos`
--
ALTER TABLE `registroos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de tabela `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

