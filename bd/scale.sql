-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/07/2024 às 01:48
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `scale`
--

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
  `dia` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
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
-- Estrutura para tabela `	registroescala`
--

CREATE TABLE `	registroescala` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(60) NOT NULL,
  `horarioinicio` varchar(60) NOT NULL,
  `intervaloinicio` varchar(60) NOT NULL,
  `intervalofim` varchar(60) NOT NULL,
  `horariofim` varchar(60) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `mes` varchar(60) NOT NULL,
  `ano` varchar(60) NOT NULL,
  `loghorario` varchar(60) NOT NULL,
  `logdia` varchar(60) NOT NULL,
  `logmes` varchar(60) NOT NULL,
  `logano` varchar(60) NOT NULL,
  `operador` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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

INSERT INTO `registrousuario` (`id`, `id_usuario`, `login`, `senha`, `nome`, `cpf`, `nascimento`, `email`, `telefone`, `departamento`, `cargo`, `nivel`, `pnivel`, `ativo`, `pativo`, `gerasenha`, `horario`, `dia`, `semana`, `mes`, `ano`, `operador`) VALUES
(1, 2, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', 'admin local', '111111111111', '1111-11-11', '11111111111', '1111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '21:57:50', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(2, 3, 'gestor', 'd41d8cd98f00b204e9800998ecf8427e', 'gestor local', '111111111111', '1111-11-11', '111111111', '11111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '3', '21:58:08', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(3, 4, 'usuario', 'd41d8cd98f00b204e9800998ecf8427e', 'usuario local', '1111111111', '111111-11-11', '11111111111111111', '1111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '21:58:35', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(4, 5, 'desativado', 'd41d8cd98f00b204e9800998ecf8427e', 'desativado local', '11111111111', '1111-11-11', '1111111111111111111', '111111111', NULL, NULL, '1', 'Usuario', '0', 'Desativado', '3', '21:59:33', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque');

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

INSERT INTO `usuario` (`id`, `login`, `senha`, `nome`, `cpf`, `nascimento`, `email`, `telefone`, `departamento`, `cargo`, `nivel`, `pnivel`, `ativo`, `pativo`, `gerasenha`, `horario`, `dia`, `semana`, `mes`, `ano`, `operador`) VALUES
(1, 'alessandro.albuquerque', '123', 'Alessandro Almeida de Albuquerque', '111111111111111111', '14/11/1986', 'alessadro.aalbuquerque', '1111111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativo', '0', '05:14', '30', 'Domingo', 'Junho', '2024', 'Banco de Dados'),
(2, 'admin', '123', 'admin local', '111111111111', '1111-11-11', '11111111111', '1111111111', NULL, NULL, '3', 'Administrador', '1', 'Ativado', '3', '21:57:50', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(3, 'gestor', '123', 'gestor local', '111111111111', '1111-11-11', '111111111', '11111111111', NULL, NULL, '2', 'Gestor', '1', 'Ativado', '3', '21:58:08', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(4, 'usuario', '123', 'usuario local', '11111111111', '111111-11-11', '11111111111111111', '1111111111111', NULL, NULL, '1', 'Usuario', '1', 'Ativado', '3', '21:58:35', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque'),
(5, 'desativado', '123', 'desativado local', '11111111111', '1111-11-11', '1111111111111111111', '111111111', NULL, NULL, '1', 'Usuario', '0', 'Desativado', '3', '21:59:33', '30', 'Domingo', 'Junho', '2024', 'alessandro.albuquerque');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
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
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
