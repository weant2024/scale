<<<<<<< HEAD
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/06/2024 às 01:41
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
(5, 'gestor', 'gestor', 'teste usuario', '23123123', 'SSU', 'RS', '123', 'aseasda', '+55 12 312312312', 'Secretaria Executiva', 'NÃ£o Cadastrado', '2', 'Usuario', '0', 'Desativado', '0', '10:37:24', '16', 'Terça', 'Junho', '2016', 'alessandro.albuquerque'),
(6, 'operador', 'operador', 'testebeetles', '123123123', 'SSP', 'RS', '123123123123', 'alessandro.aalbuquerque@gmail.com', '+55 12 312312312', 'Almoxarifado', 'Assistente', '1', 'Usuario', '0', 'Desativado', '0', '10:37:38', '16', 'Terça', 'Junho', '2016', 'alessandro.albuquerque'),
(25, 'teste', '123', 'teste', '', '', '', '123', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '0', '23:56:09', '25', 'Ter?a', 'Junho', '2024', 'admin'),
(26, 'teste', '123', '123', '123', 'SSP', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '00:15:25', '26', 'Quarta', 'Junho', '2024', 'admin'),
(27, 'teste', '123', '123', '123', 'SSP', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '00:15:51', '26', 'Quarta', 'Junho', '2024', 'admin'),
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
(42, 'teste', '123', '123', '123', '123', '123', NULL, '123', '+55 12 3', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:40:41', '26', 'Quarta', 'Junho', '2024', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/06/2024 às 01:41
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
(5, 'gestor', 'gestor', 'teste usuario', '23123123', 'SSU', 'RS', '123', 'aseasda', '+55 12 312312312', 'Secretaria Executiva', 'NÃ£o Cadastrado', '2', 'Usuario', '0', 'Desativado', '0', '10:37:24', '16', 'Terça', 'Junho', '2016', 'alessandro.albuquerque'),
(6, 'operador', 'operador', 'testebeetles', '123123123', 'SSP', 'RS', '123123123123', 'alessandro.aalbuquerque@gmail.com', '+55 12 312312312', 'Almoxarifado', 'Assistente', '1', 'Usuario', '0', 'Desativado', '0', '10:37:38', '16', 'Terça', 'Junho', '2016', 'alessandro.albuquerque'),
(25, 'teste', '123', 'teste', '', '', '', '123', '123@123.com', '+55 11 111111111', '', '', '3', 'Administrador', '1', 'Ativado', '0', '23:56:09', '25', 'Ter?a', 'Junho', '2024', 'admin'),
(26, 'teste', '123', '123', '123', 'SSP', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '00:15:25', '26', 'Quarta', 'Junho', '2024', 'admin'),
(27, 'teste', '123', '123', '123', 'SSP', '123', NULL, '123@123.com', '+55 11 111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '00:15:51', '26', 'Quarta', 'Junho', '2024', 'admin'),
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
(42, 'teste', '123', '123', '123', '123', '123', NULL, '123', '+55 12 3', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '00:40:41', '26', 'Quarta', 'Junho', '2024', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> a4b6e3aca82ddf8eb97c50f4a89e9c1878f8464b
