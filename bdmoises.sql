-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Fev-2023 às 15:58
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdmoises`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `automoveis`
--

CREATE TABLE `automoveis` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `ano` int(11) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `cor` varchar(255) NOT NULL,
  `acessorio` varchar(255) NOT NULL,
  `combustivel` varchar(255) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `automoveis`
--

INSERT INTO `automoveis` (`id`, `tipo`, `modelo`, `ano`, `marca`, `cor`, `acessorio`, `combustivel`, `foto`) VALUES
(1, 'Carro', 'adasdsa', 321321, 'dasdas', 'Roxo', '3213', 'Etanol', 'https://acervolima.com/como-evitar-erro-de-deslocamento-indefinido-em-php/'),
(2, 'Carro', '21421', 42142, 'dasdas', 'Preto', '24214', 'Gasolina', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Flookaside.fbsbx.com%2Flookaside%2Fcrawler%2Fmedia%2F%3Fmedia_id%3D5751569368233378&imgrefurl=https%3A%2F%2Fwww.facebook.com%2FJornaldoCarro%2F&tbnid=c3TNqXCeqmFlIM&vet=12ahUKEwj85tPY9_b8AhXAIbkGHfQmA50QMygBegUIARCgAQ..i&docid=UkMsoN20sWgTPM&w=2048&h=1152&q=carro&ved=2ahUKEwj85tPY9_b8AhXAIbkGHfQmA50QMygBegUIARCgAQ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'moises', '$2y$10$jQTAAGQBh4YX1uIc2NCBC.LjFV8EmDrD4QZ0LufR/8ty5a1DqDYJ6', '2023-02-02 09:17:44');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `automoveis`
--
ALTER TABLE `automoveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `automoveis`
--
ALTER TABLE `automoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
