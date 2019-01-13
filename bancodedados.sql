-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jan-2019 às 19:10
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aneru`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `armazem`
--

CREATE TABLE `armazem` (
  `armazem_id` int(11) NOT NULL,
  `id_est` int(11) DEFAULT NULL,
  `id_cid` int(11) DEFAULT NULL,
  `nome_armazem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `armazem`
--

INSERT INTO `armazem` (`armazem_id`, `id_est`, `id_cid`, `nome_armazem`) VALUES
(1, 1, 1, 'Armazem Lins 1'),
(2, 1, 3, 'Armazem Americana 1'),
(3, 2, 2, 'Armazem 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_pro` int(255) NOT NULL,
  `end_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quant` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `categ_id` int(100) NOT NULL,
  `categ_titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`categ_id`, `categ_titulo`) VALUES
(1, 'Mercado'),
(2, 'Oficina'),
(3, 'Eletrônicos'),
(4, 'Camping'),
(5, 'Esportes'),
(6, 'Brinquedos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id_cid` int(11) NOT NULL,
  `nome_cid` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_est` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id_cid`, `nome_cid`, `id_est`) VALUES
(1, 'Lins', 1),
(2, 'Sabino', 1),
(3, 'Americana', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id_est` int(11) NOT NULL,
  `nome_est` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sigla_est` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_pais` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_est`, `nome_est`, `sigla_est`, `id_pais`) VALUES
(1, 'São Paulo', 'SP', 1),
(2, 'Minas Gerais', 'MG', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE `marcas` (
  `marca_id` int(100) NOT NULL,
  `marca_titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`marca_id`, `marca_titulo`) VALUES
(1, 'Coca Cola'),
(2, 'Parmalat'),
(3, 'Paulista'),
(4, 'LG'),
(5, 'Tio João'),
(6, 'Império'),
(7, 'Urbano'),
(8, 'Nestlé'),
(9, 'Hersheys'),
(10, 'Del Valle'),
(11, 'Bauducco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nome_pais` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sigla_pais` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pais`
--

INSERT INTO `pais` (`id_pais`, `nome_pais`, `sigla_pais`) VALUES
(1, 'Brasil', 'BR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `produto_id` int(100) NOT NULL,
  `produto_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `produto_marca` text COLLATE utf8_unicode_ci NOT NULL,
  `produto_cat` int(100) DEFAULT NULL,
  `produto_subcateg` int(100) NOT NULL,
  `produto_tipo` int(100) DEFAULT NULL,
  `produto_preco` double(9,2) NOT NULL,
  `produto_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `produto_keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `produto_img` text COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `armazem_id` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `qtd_seg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`produto_id`, `produto_nome`, `produto_marca`, `produto_cat`, `produto_subcateg`, `produto_tipo`, `produto_preco`, `produto_desc`, `produto_keywords`, `produto_img`, `code`, `armazem_id`, `quantidade`, `qtd_seg`) VALUES
(1, 'Leite Paulista 1L', '3', 1, 1, 1, 2.50, 'Leite Paulista 1 Litro  - Conservante', 'leite, bebidas, paulista', 'leite-paulista-1l.jpg', 'LTEPLST1L', 1, 5, 0),
(2, 'Coca Cola 1L', '1', 1, 4, 2, 2.85, 'Coca Cola 1 Litro - Contém glúten', 'Coca Cola, refrigerante, bebida', 'coca-cola-1l.jpg', 'CCLA1L', 3, 100, 100),
(3, 'Arroz Branco Longo-fino Tipo 1 Tio João 5Kg', '5', 1, 2, 3, 11.00, 'Arroz tipo fino', 'arroz, grãos, tio joao', 'arroz-tio-joao-5kg.jpg', 'ARR5KGTJO', 1, 0, 100),
(5, 'Feijão Preto Tipo 1 Urbano 1Kg', '7', 1, 2, 3, 3.99, 'O feijão preto Urbano é o mais gostoso que existe! é tão bom que lembra a feijoada da vovó... Compre já e delicie-se.', 'feijão, grãos, mercado', 'feijao-preto-urbano-alimentos.png', 'FJOTJO1KG', 2, 32, 0),
(6, 'Nescau 400g', '8', 1, 1, 5, 5.99, 'É gostoso pra caramba!', 'nescau, achocolatado, nestle, matinais', 'nescau-nestle.jpg', 'NESCAU400G', 2, 0, 0),
(7, 'Chocolate Hersheys', '9', 1, 2, 6, 4.00, 'Muito gostoso', 'chocolate', 'chocolate-barra-hersheys.jpg', 'CHOCHRSH500G', 2, 20, 0),
(8, 'Cerveja Império Long Neck 350ml', '6', 1, 4, 4, 2.25, 'A cerveja que tem gosto de história', 'cerveja, imperio, bebidas', 'cerveja-imperio-350ml.jpg', 'CVJIMP350ML', 2, 0, 0),
(9, 'Suco de Laranja Del Valle 100% Natural 1L', '10', 1, 4, 7, 4.00, 'Este suco é 100% feito com laranja especialmente selecionadas', 'suco, laranja, suco de laranja, del valle, bebidas', 'Suco-Del-Valle-100--Suco-de-Laranja-1l.jpg', 'SCLAR1LDLLVL', 2, 83, 0),
(10, 'Panettone Bauducco 500g', '11', 1, 9, 8, 25.00, 'O natal chegou, e com ele vieram as gostosuras da bauducco!', 'panettone, natal, bauducco', 'PANETONE-BAUDUCCO-500G-FRUTAS.jpg', 'PTONNE500GBDCO', 2, 40, 0),
(11, 'Chocottone Bauducco 500g', '11', 1, 9, 9, 13.00, 'O chocottone mais delicioso já chegou para as festividades de final de ano!', 'chocottone, bauducco, natal', 'chocotone-bauducco-gotas-de-chocolate-500-g_600x600-PU6c8dc_1.jpg', 'CTONNE500GBAU', 2, 50, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcateg`
--

CREATE TABLE `subcateg` (
  `subcateg_id` int(100) NOT NULL,
  `subcateg_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `categ_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `subcateg`
--

INSERT INTO `subcateg` (`subcateg_id`, `subcateg_name`, `categ_id`) VALUES
(1, 'Matinais', 1),
(2, 'Alimentos Básicos', 1),
(3, 'Frescos e Gelados', 1),
(4, 'Bebidas', 1),
(5, 'Limpeza e Perfumaria', 1),
(6, 'Saudáveis', 1),
(7, 'Cozinha Tecnológica', 3),
(8, 'Smartphones', 3),
(9, 'Natal', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoprod`
--

CREATE TABLE `tipoprod` (
  `tipoprod_id` int(100) NOT NULL,
  `tipoprod_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subcateg_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tipoprod`
--

INSERT INTO `tipoprod` (`tipoprod_id`, `tipoprod_name`, `subcateg_id`) VALUES
(1, 'Leite', 1),
(2, 'Refrigerante', 4),
(3, 'Arroz e grãos', 2),
(4, 'Cerveja', 4),
(5, 'Achocolatado', 1),
(6, 'Chocolate', 2),
(7, 'Sucos', 4),
(8, 'Panettone', 9),
(9, 'Chocottone', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `armazem`
--
ALTER TABLE `armazem`
  ADD PRIMARY KEY (`armazem_id`),
  ADD KEY `id_est` (`id_est`),
  ADD KEY `id_cid` (`id_cid`);

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categ_id`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id_cid`),
  ADD KEY `id_est` (`id_est`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_est`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`marca_id`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`produto_id`),
  ADD KEY `armazem_id` (`armazem_id`),
  ADD KEY `subcateg_id_fk` (`produto_subcateg`),
  ADD KEY `produtos_categorias_fk` (`produto_cat`),
  ADD KEY `produtos_tipo_fk` (`produto_tipo`);

--
-- Indexes for table `subcateg`
--
ALTER TABLE `subcateg`
  ADD PRIMARY KEY (`subcateg_id`),
  ADD KEY `categ_id_fk` (`categ_id`);

--
-- Indexes for table `tipoprod`
--
ALTER TABLE `tipoprod`
  ADD PRIMARY KEY (`tipoprod_id`),
  ADD KEY `subcateg_id_fk` (`subcateg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `armazem`
--
ALTER TABLE `armazem`
  MODIFY `armazem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_pro` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categ_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id_cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `marca_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `produto_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subcateg`
--
ALTER TABLE `subcateg`
  MODIFY `subcateg_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tipoprod`
--
ALTER TABLE `tipoprod`
  MODIFY `tipoprod_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `armazem`
--
ALTER TABLE `armazem`
  ADD CONSTRAINT `armazem_ibfk_1` FOREIGN KEY (`id_est`) REFERENCES `estado` (`id_est`),
  ADD CONSTRAINT `armazem_ibfk_2` FOREIGN KEY (`id_cid`) REFERENCES `cidade` (`id_cid`);

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`id_est`) REFERENCES `estado` (`id_est`);

--
-- Limitadores para a tabela `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `estado_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_categorias_fk` FOREIGN KEY (`produto_cat`) REFERENCES `categorias` (`categ_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`armazem_id`) REFERENCES `armazem` (`armazem_id`),
  ADD CONSTRAINT `produtos_tipo_fk` FOREIGN KEY (`produto_tipo`) REFERENCES `tipoprod` (`tipoprod_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Limitadores para a tabela `subcateg`
--
ALTER TABLE `subcateg`
  ADD CONSTRAINT `categ_id_fk` FOREIGN KEY (`categ_id`) REFERENCES `categorias` (`categ_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tipoprod`
--
ALTER TABLE `tipoprod`
  ADD CONSTRAINT `subcateg_id_fk` FOREIGN KEY (`subcateg_id`) REFERENCES `subcateg` (`subcateg_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
