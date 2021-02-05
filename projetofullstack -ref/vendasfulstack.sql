-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Nov-2020 às 00:06
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
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `nome`, `email`) VALUES
(1, '', ''),
(2, 'daiana', 'daiana@gmail.com'),
(8, 'Ual', 'ualacem@gmail.com'),
(13, 'maria', 'maria@ual.com.br'),
(19, 'porco', 'porco@gmail.com'),
(21, 'miranda', 'miranda@gmail.com');

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
(2, 'eduarda molinda', 'rua de hoje, 15', '(22) 2222-2222', 'fogao brastemp', 'R$ 599,99', '1', 'R$ 200,00', '2020-10-23'),
(3, 'ualace doido', 'rua sanatorio, 666', '(66)6666-6665', 'fogao ', 'R$ 299,25', '1', 'R$ 100,00', '2020-10-19'),
(4, 'Geralda da silva', 'Rua das flores, 230', '(77)7777777', 'Fogão', 'R$ 999,99', '1', 'R$ 200,00', '2020-10-26'),
(5, 'maria eduarda', 'rua jeronimo, 158', '(88)88888888', 'geladeira', 'R$ 599,99', '1', 'R$ 100,00', '2020-10-25'),
(6, 'camila dos santos', 'rua paulista, 5874', '(99)99999999', 'fogao', 'R$ 578,00', '1', 'R$ 250,00', '2020-10-23'),
(7, 'mara maria', 'rua consolida, 81456156', '(11)11111111', 'geladeira', 'R$ 980,00', '1', 'R$ 200,00', '2020-10-26'),
(8, 'valeria maria', 'rua dos cravos, 651654848', '(55)55555555', 'fogao', 'R$ 168,74', '1', 'R$ 100,00', '2020-10-23'),
(9, 'carla dias', 'rua girasol, 7894', '(33)333333333', 'fogao', 'R$ 890,58', '1', 'R$ 200,00', '2020-10-26'),
(10, 'Larissa de Macedo', 'Avenida das Nações Unidas, 22.540', '(99)999999999', 'geladeira', 'R$ 999,98', '1', 'R$ 380,58', '2020-10-22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtosfs`
--

CREATE TABLE `produtosfs` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `descrição` varchar(80) NOT NULL,
  `preço` char(32) NOT NULL,
  `nomeimg` varchar(80) NOT NULL,
  `precoatual` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtosfs`
--

INSERT INTO `produtosfs` (`id`, `nome`, `descrição`, `preço`, `nomeimg`, `precoatual`) VALUES
(1, 'Fogão Eletrolux', 'Fogão 4 Bocas Electrolux Prata Automático com Forno de 70L (52LXS)', 'R$ 999,99', './img/1.jpeg', 'R$ 1500,00'),
(2, 'Fogão Consul', 'Fogão Consul 4 Bocas CFO4NAB com Acendimento Automático - Branco', 'R$ 899,00', './img/2.jpeg', 'R$ 100,00'),
(3, 'Micro-ondas Brastemp ', 'Micro-ondas Brastemp Branco BMS45 32 Litros - 110v', 'R$ 649,00', './img/3.jpeg', 'R$ 250,00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtosfs`
--
ALTER TABLE `produtosfs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descrição` (`descrição`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtosfs`
--
ALTER TABLE `produtosfs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- Criação da Tabela de Vendedores
CREATE TABLE vendasfullstack.vendedores(
    id int not null PRIMARY KEY AUTO_INCREMENT,
    name varchar(80) not null,
    telphone varchar (30)
);


--   Cadastrando vendedores :
-- INSERT INTO students (name, telphone) VALUES("Daiana", "5511964346536");