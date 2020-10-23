-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Out-2020 às 00:49
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vendasfullstack`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nomecliente` varchar(80) NOT NULL,
  `endereço` varchar(80) NOT NULL,
  `telefone` char(32) NOT NULL,
  `nomeproduto` varchar(80) NOT NULL,
  `valorunitario` char(32) NOT NULL,
  `quantidade` char(32) NOT NULL,
  `valortotal` char(32) NOT NULL,
  `datapedido` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `nomecliente`, `endereço`, `telefone`, `nomeproduto`, `valorunitario`, `quantidade`, `valortotal`, `datapedido`) VALUES
(1, 'claudia maria', 'rua de ontem,53', '(11) 1111-1111', 'fogao brastemp', 'R$ 999,99', '1', 'R$ 500,00', '2020-09-01'),
(2, 'eduarda molinda', 'rua de hoje, 15', '(22) 2222-2222', 'fogao brastemp', 'R$ 599,99', '1', 'R$ 200,00', '2020-10-23');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
