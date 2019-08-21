-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Ago-2019 às 08:13
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalunga`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `condolencia`
--

CREATE TABLE `condolencia` (
  `id` int(11) NOT NULL,
  `idMemorial` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `texto` text NOT NULL,
  `parentesco` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(100) NOT NULL,
  `notificacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `condolencia`
--

INSERT INTO `condolencia` (`id`, `idMemorial`, `idPersona`, `texto`, `parentesco`, `nome`, `notificacao`) VALUES
(1, 8, 1, 'ola bom dia desejo boa sorte para vosses', 3, 'edanio', ''),
(2, 8, 1, 'ola bom dia desejo boa sorte para vosses', 3, 'edvanio', ''),
(3, 8, 1, 'ola bom dia desejo boa sorte para vosses', 3, 'edvanio', ''),
(4, 8, 996677880, '7689', 1, 'edvanio', 'on');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `descricao` int(11) DEFAULT NULL,
  `idMemorial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`id`, `foto`, `descricao`, `idMemorial`) VALUES
(10, 'foto.jpg', NULL, 8),
(11, 'foto.jpg', NULL, 8),
(12, 'foto.jpg', NULL, 8),
(13, 'foto.jpg', NULL, 8),
(14, 'foto.jpg', NULL, 8),
(15, 'foto.jpg', NULL, 8),
(16, 'foto.jpg', NULL, 8),
(17, 'foto.jpg', NULL, 8),
(18, 'foto.jpg', NULL, 8),
(19, 'foto.jpg', NULL, 8),
(20, 'foto.jpg', NULL, 8),
(21, 'foto.jpg', NULL, 8),
(22, 'foto.jpg', NULL, 8),
(23, 'foto.jpg', NULL, 8),
(24, 'foto.jpg', NULL, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `memorial`
--

CREATE TABLE `memorial` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_die` datetime NOT NULL,
  `data_funeral` datetime DEFAULT NULL,
  `bibliografia` text NOT NULL,
  `condolencia` int(11) NOT NULL DEFAULT '0',
  `telefone` varchar(100) DEFAULT NULL,
  `tag` varchar(100) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `idPersonaCad` int(11) NOT NULL DEFAULT '1',
  `data_nascimento` datetime NOT NULL,
  `capa` varchar(100) NOT NULL,
  `local_funebre` varchar(100) DEFAULT NULL,
  `data_funeral_2` datetime DEFAULT NULL,
  `data_funeral_3` datetime DEFAULT NULL,
  `video_url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `memorial`
--

INSERT INTO `memorial` (`id`, `nome`, `data_die`, `data_funeral`, `bibliografia`, `condolencia`, `telefone`, `tag`, `foto`, `idPersonaCad`, `data_nascimento`, `capa`, `local_funebre`, `data_funeral_2`, `data_funeral_3`, `video_url`) VALUES
(8, 'EdvÃ¢nio JanuÃ¡rio', '2019-08-14 00:00:00', NULL, 'programador jovem e estudioso CEO da garimpo e muitas outras empresas, possui experiÃªncias no Marketing Digital e desenvolvimento web, desktop e mobile. Trabalha hÃ¡ mais de 3 anos com programaÃ§Ã£o  planejamento/estratÃ©gia, SE,. Ã‰ apaixonado por empreendedorismo, aprendizado, games e cafÃ©! Obcecado por otimizaÃ§Ã£o e melhoria, empreendendo a cada dia.\n\n', 0, '996677880', 'EdvÃ¢nioJanuÃ¡rio2013', '3605289122.jpg', 1, '2019-08-14 00:00:00', '2973234146.jpg', NULL, NULL, NULL, NULL),
(12, 'edvanio', '2019-08-13 00:00:00', NULL, 'gfsjj', 0, '98546', 'edvanio119', '1701418283.png', 1, '2019-08-13 00:00:00', '2988981804.jpg', NULL, NULL, NULL, NULL),
(13, 'edvanio', '2019-08-13 00:00:00', NULL, 'gfsjj', 0, '98546', 'edvanio119', '2899613700.png', 1, '2019-08-13 00:00:00', '2107920664.jpg', NULL, NULL, NULL, NULL),
(14, 'edvanio', '2019-08-13 00:00:00', NULL, 'gfsjj', 0, '98546', 'edvanio119', '3515387263.png', 1, '2019-08-13 00:00:00', '2775841916.jpg', NULL, NULL, NULL, NULL),
(15, '6u5u', '2019-08-14 00:00:00', NULL, '5ie5', 0, '56i6', '6u5u119', '3583634448.jpg', 1, '2019-08-14 00:00:00', '2257172251.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `foto` varchar(100) NOT NULL,
  `idMemorial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `idProspect` int(11) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prospect`
--

CREATE TABLE `prospect` (
  `id` int(11) NOT NULL,
  `contacto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prospect`
--

INSERT INTO `prospect` (`id`, `contacto`) VALUES
(1, '2bd27bb5b7732c45c2bf'),
(2, 'd6c2155e74cc04450aaf'),
(3, '5e8877e7281a7fae59be'),
(4, 'a1ca24afd5f6434f5606'),
(5, 'ccbdd29fe1ee0f64f6f7'),
(6, '61b0aa62d511e7abdaa1'),
(7, 'a6bb4487e22c62d2af56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacao`
--

CREATE TABLE `relacao` (
  `id` int(11) NOT NULL,
  `idMemorial` int(11) NOT NULL,
  `idMemorial_rel` int(11) NOT NULL,
  `parente` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sugestao`
--

CREATE TABLE `sugestao` (
  `id` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `idMemorial` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `importancia` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `condolencia`
--
ALTER TABLE `condolencia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memorial`
--
ALTER TABLE `memorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prospect`
--
ALTER TABLE `prospect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relacao`
--
ALTER TABLE `relacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugestao`
--
ALTER TABLE `sugestao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `condolencia`
--
ALTER TABLE `condolencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `memorial`
--
ALTER TABLE `memorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prospect`
--
ALTER TABLE `prospect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `relacao`
--
ALTER TABLE `relacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sugestao`
--
ALTER TABLE `sugestao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
