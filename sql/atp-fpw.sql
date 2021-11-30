-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2021 às 06:37
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atp-fpw`
--
CREATE DATABASE IF NOT EXISTS `atp-fpw` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `atp-fpw`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

DROP TABLE IF EXISTS `itens`;
CREATE TABLE `itens` (
  `id_item` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_usuario_emprestimo` int(11) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 0,
  `nome` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `dtdevolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id_item`, `id_usuario`, `id_usuario_emprestimo`, `status`, `nome`, `categoria`, `descricao`, `dtdevolucao`) VALUES
(64, 19, 0, 1, 'Piscina de Bolinhas', 'Brinquedos', 'Empresto para festas infantis, piscina de bolinhas de 2m x 2m contendo 2000 mil bolinhas coloridas.', '2022-05-18'),
(67, 25, 0, 1, 'Parafusadeiraaa', 'Ferramentas & Construção', 'Parafusadeira nova com brocas', '2021-12-11'),
(68, 26, 0, 1, 'Livro', 'Livros e materiais didáticos', 'Livroooo', '2022-03-03'),
(69, 19, 0, 1, 'Parafusadeira', 'Ferramentas & Construção', 'Parafusadeira', '2022-04-03'),
(72, 19, 0, 1, 'Bota de neve', 'Vestuário', 'Bota para andar na neve', '2021-12-03'),
(73, 25, 0, 0, 'Vestido festa', 'Vestuário', 'Vestido com paertes comprido para festas ', '2022-05-04'),
(74, 19, 0, 0, 'Cadeira de praia', 'Móveis', 'Cadeira simples, de alumínio, com tecido colorido. Suporta até 200kg.', '2021-12-10'),
(75, 19, 0, 0, 'Box livros Harry Potter', 'Livros e materiais didáticos', 'Box completo com os 7 livros da saga', '2022-03-09'),
(76, 19, 0, 0, 'Bicicleta', 'Outros', 'Bicicleta aro 26 18 marchas da marca Caloi', '2022-01-31'),
(77, 25, 0, 0, 'Caixa termica', 'Utensílios domésticos', 'Caixa de isopor térmica com capacidade para 30 litros', '2021-12-10'),
(78, 25, 0, 0, 'Martelo', 'Ferramentas & Construção', 'Martelo ', '2022-08-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `celular` varchar(13) NOT NULL,
  `dtnasc` date NOT NULL,
  `genero` varchar(1) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `numero` int(10) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `cpf`, `celular`, `dtnasc`, `genero`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `senha`) VALUES
(19, 'Emanuele Eichholz', 'manu@email.com', '111.222.333', '41988776655', '1994-12-19', 'F', 'Av. João Pessa', 111, 'Apto 1', 'Velha', 'Blumenau', 'SC', '123456'),
(25, 'João da Silva', 'joao@email.com', '12345678910', '4198499887766', '1990-08-05', 'M', 'Rua Irati', 120, 'Apto 501', 'Centro', 'Londrina', 'PR', '123456'),
(26, 'Ricardo Santos', 'ricardo@email.com', '22244455566', '499885566111', '1980-04-15', 'M', 'Av Sete de Setembro', 1000, '100', 'Centro', 'Curitiba', 'PR', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id_item`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
