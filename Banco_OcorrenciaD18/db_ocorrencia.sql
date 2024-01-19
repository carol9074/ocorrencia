-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/01/2024 às 01:26
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_ocorrencia`
--
CREATE DATABASE IF NOT EXISTS `db_ocorrencia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_ocorrencia`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_usuario`
--

CREATE TABLE `cadastro_usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `permissao` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_usuario`
--

INSERT INTO `cadastro_usuario` (`id`, `nome`, `cpf`, `email`, `senha`, `endereco`, `complemento`, `cidade`, `bairro`, `cep`, `permissao`) VALUES
(4, 'edison oliveira', '12345678912', 'edison@gmail.com', '12345', 'rubem berta 1700', 'casa', 'tramandai', 'São Francisco', '9559000', 2),
(5, 'andreia', '12345678912', 'edison@gmail.com', '', 'rubem berta 1700', 'casa', 'imbe', 'Centro', '95625000', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nome_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `celular_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `feedback`
--

INSERT INTO `feedback` (`id`, `nome_user`, `email_user`, `assunto`, `mensagem`, `celular_user`) VALUES
(1, 'carol pereira', 'carollopes@gmail.com', 'Ocorrencia agua', '', 2147483647),
(2, 'lucas', 'carollopes@gmail.com', 'Ocorrencia agua', '', 2147483647),
(3, 'Leonardo', 'leonardo@leonardo.com', 'Agua', '', 2147483647),
(4, '', 'leonardo@leonardo.com', 'Agua', '', 2147483647),
(5, '', 'carollopes@gmail.com', 'Agua', '', 2147483647),
(6, 'carol pereira', 'carollopes@gmail.com', 'Ocorrencia agua', '', 2147483647),
(7, 'carol pereira', 'carollopes@gmail.com', 'Ocorrencia agua', '', 312231312),
(8, 'leo', 'email@email.com', 'agua', 'shauasuhahsuahsu', 123456),
(9, '', '', '', '', 0),
(10, '', '', '', '', 0),
(11, 'Edishow', 'edishow@edishow.com', 'internet', 'A internet do senac ta complicada.', 1234567890);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ocorrencia`
--

CREATE TABLE `ocorrencia` (
  `id` int(11) NOT NULL,
  `tipo_ocorrencia` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_ocorrencia` varchar(255) NOT NULL,
  `endereco_ocorrencia` varchar(255) NOT NULL,
  `complemento_ocorrencia` varchar(255) NOT NULL,
  `cidade_ocorrencia` varchar(255) NOT NULL,
  `bairro_ocorrencia` varchar(255) NOT NULL,
  `cep_ocorrencia` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ocorrencia`
--

INSERT INTO `ocorrencia` (`id`, `tipo_ocorrencia`, `descricao`, `data_hora`, `status_ocorrencia`, `endereco_ocorrencia`, `complemento_ocorrencia`, `cidade_ocorrencia`, `bairro_ocorrencia`, `cep_ocorrencia`) VALUES
(1, 'luz', '0', '2024-01-10 22:51:50', 'andamento', '', '', '', '', 0),
(2, 'agua', 'faltou agua', '2024-01-12 22:53:42', '', 'santa amaro 123', 'casa', 'tramandai', 'São Francisco', 9559000),
(5, 'ruas', 'teste', '2024-01-13 00:04:52', 'solicitado', 'santa amaro 126', 'casa', 'tramandai', 'Centro', 9559000);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
