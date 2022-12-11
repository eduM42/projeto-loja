-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11-Dez-2022 às 23:18
-- Versão do servidor: 10.6.11-MariaDB-0ubuntu0.22.04.1
-- versão do PHP: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `exemplo_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_carrinho`
--

CREATE TABLE `tab_carrinho` (
  `cart_id` int(11) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `cart_qnt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_clientes`
--

CREATE TABLE `tab_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_email` varchar(40) DEFAULT NULL,
  `cli_senha` varchar(32) DEFAULT NULL,
  `cli_nome` varchar(20) NOT NULL,
  `cli_sobrenome` varchar(30) NOT NULL,
  `cli_cpf` int(11) NOT NULL,
  `cli_fone` varchar(15) DEFAULT NULL,
  `cli_end` varchar(80) DEFAULT NULL,
  `cli_data_nasc` date DEFAULT NULL,
  `cli_permissao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tab_clientes`
--

INSERT INTO `tab_clientes` (`cli_id`, `cli_email`, `cli_senha`, `cli_nome`, `cli_sobrenome`, `cli_cpf`, `cli_fone`, `cli_end`, `cli_data_nasc`, `cli_permissao`) VALUES
(1, 'root@root', '123', 'root', '', 0, '0', 'n/a', '2004-01-30', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_produtos`
--

CREATE TABLE `tab_produtos` (
  `prod_id` int(11) NOT NULL,
  `prod_nome` varchar(50) DEFAULT NULL,
  `prod_desc` varchar(180) DEFAULT NULL,
  `prod_valor` float NOT NULL,
  `prod_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tab_produtos`
--

INSERT INTO `tab_produtos` (`prod_id`, `prod_nome`, `prod_desc`, `prod_valor`, `prod_img`) VALUES
(1, 'Notebook Lenovo IdeadPad Gaming 3i', 'Notebook Lenovo de alto desempenho e com uma excelente construção, tela, processador e placa de vídeo', 4759.99, 'notebook.webp'),
(2, 'Teclado e Mouse Logitech MK235', 'Tecnologia sem fio em um pacote completo de teclado e mouse, nunca mais sinta-se preso ao seu dispositivo ou sofra com qualquer desconforto!', 169.9, 'teclado.jpg'),
(3, 'Samsung Galaxy Buds 2 Pro', 'Qualidade de som impecável e conforto inimaginável, atrelados a uma bateria de longa duração. Nunca fique sem suas músicas!', 1499.99, 'fone.png'),
(4, 'Monitor Samsung Odyssey 49\"', 'O melhor display do mundo, sem comparações. Para a melhor qualidade de imagem, melhor fluidez, uso mais fácil, não há outra alternativa.', 11400, 'monitor.jpeg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tab_carrinho`
--
ALTER TABLE `tab_carrinho`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `fk_cli_id` (`cli_id`),
  ADD KEY `fk_prod_id` (`prod_id`);

--
-- Índices para tabela `tab_clientes`
--
ALTER TABLE `tab_clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Índices para tabela `tab_produtos`
--
ALTER TABLE `tab_produtos`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_carrinho`
--
ALTER TABLE `tab_carrinho`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tab_clientes`
--
ALTER TABLE `tab_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tab_produtos`
--
ALTER TABLE `tab_produtos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tab_carrinho`
--
ALTER TABLE `tab_carrinho`
  ADD CONSTRAINT `fk_cli_id` FOREIGN KEY (`cli_id`) REFERENCES `tab_clientes` (`cli_id`),
  ADD CONSTRAINT `fk_prod_id` FOREIGN KEY (`prod_id`) REFERENCES `tab_produtos` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
