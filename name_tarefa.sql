-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Abr-2020 às 18:53
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tarefa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `name_tarefa`
--

CREATE TABLE `name_tarefa` (
  `tarefa_id` int(11) NOT NULL,
  `tarefa_name` varchar(250) NOT NULL,
  `tarefa_data` varchar(45) NOT NULL DEFAULT current_timestamp(),
  `tarefa_status` varchar(45) NOT NULL,
  `tarefa_data_final` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `name_tarefa`
--

INSERT INTO `name_tarefa` (`tarefa_id`, `tarefa_name`, `tarefa_data`, `tarefa_status`, `tarefa_data_final`) VALUES
(67, 'Estudar Pentest', '2020-04-16 13:51:32', 'pendente', 'aguardando...'),
(68, 'Estudar Framework PHP', '2020-04-16 13:51:59', 'pendente', 'aguardando...'),
(69, 'Estudar Vue.js', '2020-04-16 13:52:46', 'pendente', 'aguardando...');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `name_tarefa`
--
ALTER TABLE `name_tarefa`
  ADD PRIMARY KEY (`tarefa_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `name_tarefa`
--
ALTER TABLE `name_tarefa`
  MODIFY `tarefa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
