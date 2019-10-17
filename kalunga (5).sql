-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Out-2019 às 09:21
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
-- Estrutura da tabela `cifras`
--

CREATE TABLE `cifras` (
  `id` int(11) NOT NULL,
  `texto` int(11) NOT NULL,
  `idioma` varchar(45) NOT NULL DEFAULT '''pt'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `condolencia`
--

CREATE TABLE `condolencia` (
  `id` int(11) NOT NULL,
  `idMemorial` int(11) NOT NULL,
  `texto` text NOT NULL,
  `parentesco` int(11) NOT NULL DEFAULT '0',
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `condolencia`
--

INSERT INTO `condolencia` (`id`, `idMemorial`, `texto`, `parentesco`, `data`, `nome`) VALUES
(1, 8, 'ola bom dia desejo boa sorte para vosses', 3, '2019-08-26 21:53:53', ''),
(2, 8, 'ola bom dia desejo boa sorte para vosses', 3, '2019-08-26 21:53:53', ''),
(3, 8, 'ola bom dia desejo boa sorte para vosses', 3, '2019-08-26 21:53:53', ''),
(4, 8, '7689', 1, '2019-08-26 21:53:53', ''),
(5, 19, 'Lamento pela sua perda talvez um dia possas superar isto , de todo meu coracao, desejo-vos sorte', 0, '2019-08-26 21:53:53', ''),
(6, 19, 'Forca ai', 0, '2019-08-26 21:53:53', ''),
(7, 33, 'oko', 1, '2019-09-06 12:18:41', ''),
(8, 33, 'olÃ¡', 1, '2019-09-06 12:39:37', ''),
(9, 33, 'esse moÃ§o se foi!', 1, '2019-09-06 12:39:48', ''),
(10, 20, 'voce perdeu ', 2, '2019-09-10 11:02:48', ''),
(11, 25, 'fd', 1, '2019-09-19 14:19:46', ''),
(12, 25, '', 1, '2019-09-19 15:46:37', ''),
(13, 25, 'olÃ¡', 2, '2019-09-19 15:51:10', ''),
(14, 31, 'ty', 1, '2019-10-07 16:42:10', 'gj'),
(15, 24, 'Lamento muito pela sua perda', 1, '2019-10-07 18:20:56', 'Edvanio'),
(16, 35, 'Lamento muito pela sua perda', 2, '2019-10-08 09:39:00', 'Valdemar'),
(17, 35, 'Lamento muito pela sua perda', 2, '2019-10-08 09:39:14', 'Valdemar'),
(18, 35, 'lamento pela sua perda', 1, '2019-10-08 09:40:03', 'edvanio'),
(19, 24, 'Sinto muito ', 1, '2019-10-10 18:39:14', 'Celestino manuel'),
(20, 24, 'Sinto muito ', 1, '2019-10-10 18:39:22', 'Celestino manuel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `idMemorial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `foto`
--

INSERT INTO `foto` (`id`, `foto`, `idMemorial`) VALUES
(10, 'foto.jpg', 19),
(11, 'foto.jpg', 19),
(12, 'foto.jpg', 19),
(13, 'foto.jpg', 19),
(14, 'foto.jpg', 19),
(15, 'foto.jpg', 19),
(16, 'foto.jpg', 19),
(17, 'foto.jpg', 19),
(18, 'foto.jpg', 19),
(19, 'foto.jpg', 19),
(20, 'foto.jpg', 19),
(21, 'foto.jpg', 19),
(22, 'foto.jpg', 19),
(23, 'foto.jpg', 19),
(24, 'foto.jpg', 19),
(25, '1632313800.jpg', 19),
(26, '2404914124.png', 19),
(27, '2122265816.png', 19),
(28, '2519179257.png', 19),
(29, '3295438352.jpg', 33),
(30, '2169179344.jpg', 33),
(31, '2188894671.jpg', 25),
(32, '3408388175.jpg', 25),
(33, '3078560580.jpg', 25),
(34, '2022192710.jpg', 25),
(35, '2773796148.jpg', 31),
(36, '3116897978.png', 24),
(37, '3485598891.jpg', 32),
(38, '3569639195.jpg', 32);

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
  `foto` varchar(100) NOT NULL,
  `idPersonaCad` int(11) DEFAULT NULL,
  `data_nascimento` datetime NOT NULL,
  `capa` varchar(100) NOT NULL,
  `local_funebre` varchar(100) DEFAULT NULL,
  `boletim` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `accept` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `memorial`
--

INSERT INTO `memorial` (`id`, `nome`, `data_die`, `data_funeral`, `bibliografia`, `foto`, `idPersonaCad`, `data_nascimento`, `capa`, `local_funebre`, `boletim`, `descricao`, `tag`, `accept`) VALUES
(22, 'Fill Junior', '2019-08-25 00:00:00', '2019-08-09 00:00:00', 'ksdgcuiasg', '3202139878.jpg', 13, '2019-08-09 00:00:00', '2593412319.jpg', 'hdsghch', '2791419823.jpg', 'ksdvbj', 'PaulAllen2019', 0),
(24, 'Steve Jobs', '2011-08-25 00:00:00', '2019-08-09 00:00:00', '1934-2002, Janas Samimbi foi um polÃ­tico Angolano e lider da UNITA durante mais de 30 anos. Jonas Savimbi nasceu aos 3 de Agosto de 1934 em Munhango, uam pequena cidade da provÃ­ncia do BiÃ©, tendo-se se formado em ciÃªncias polÃ­ticas pela universidade de Lausanne.  ', '1661476588.jpg...', 13, '1885-08-09 00:00:00', '3228554713.jpg...', 'londres', '2791419823.jpg', 'morreu de um cancer', 'PaulAllen2019', 0),
(25, 'Paul Allen', '2018-08-25 00:00:00', '2012-08-09 00:00:00', '1934-2002, Janas Samimbi foi um polÃ­tico Angolano e lider da UNITA durante mais de 30 anos. Jonas Savimbi nasceu aos 3 de Agosto de 1934 em Munhango, uam pequena cidade da provÃ­ncia do BiÃ©, tendo-se se formado em ciÃªncias polÃ­ticas pela universidade de Lausanne.  ', '1.png.....', 13, '1953-08-09 00:00:00', '1782922383.png...', 'Chicago', '2791419823.jpg', 'morreu de uma doenÃ§a', 'PaulAllen2019', 0),
(26, 'Michael Jackson', '2019-08-25 00:00:00', '2019-08-09 00:00:00', 'ksdgcuiasg', '2705780074.jpeg...', 13, '2019-08-09 00:00:00', '3058683591.png..', 'hdsghch', '2791419823.jpg', 'ksdvbj', 'PaulAllen2019', 0),
(27, 'David Koch', '2019-08-25 00:00:00', '2019-08-09 00:00:00', 'ksdgcuiasg', '2213403296.jpg', 13, '2019-08-09 00:00:00', '2264146922.jpg', 'hdsghch', '2791419823.jpg', 'ksdvbj', 'PaulAllen2019', 0),
(31, 'Walt Disney', '2019-08-25 00:00:00', '2019-08-09 00:00:00', 'ksdgcuiasg', '2475159467.jpg.', 13, '2019-08-09 00:00:00', '3386400797.jpg.', 'hdsghch', '2791419823.jpg', 'ksdvbj', 'PaulAllen2019', 0),
(32, 'Witney houston', '2019-08-25 00:00:00', '2019-08-09 00:00:00', 'ksdgcuiasg', '3184314313.png', 13, '2019-08-09 00:00:00', '1717090066.jpg', 'hdsghch', '2791419823.jpg', 'ksdvbj', '@WitneyHouston', 0),
(33, 'Mohamed Alli', '2019-09-04 00:00:00', '2019-09-20 00:00:00', 'ok', '3073836221.jpg.', 13, '2019-09-29 00:00:00', '1632032531.jpg.', 'acelara', '3049962725.ini', 'tyjt', 'edvanio2019', 0),
(35, 'Nelson Mandela', '2019-05-23 00:00:00', '2019-04-12 00:00:00', 'qualquer coisa', '2587880527.jpg', 13, '2018-01-23 00:00:00', '2970816066.jpeg', 'qualquer', '1573671268.ini', 'moreu de overdose', 'edvaniojuaniro2019', 0),
(36, 'Jonas', '2002-02-03 00:00:00', '2018-12-23 00:00:00', '1934-2002, Janas Samimbi foi um polÃ­tico Angolano e lider da UNITA durante mais de 30 anos. Jonas Savimbi nasceu aos 3 de Agosto de 1934 em Munhango, uam pequena cidade da provÃ­ncia do BiÃ©, tendo-se se formado em ciÃªncias polÃ­ticas pela universidade de Lausanne.  ', '3342066563.jpg...', 13, '1934-09-03 00:00:00', '2698941118.jpg...', 'luanda', 'blank.png', 'Morreu de trauma ', '@edvaniofelipe2019', 0);

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
-- Estrutura da tabela `notificacao`
--

CREATE TABLE `notificacao` (
  `id` int(11) NOT NULL,
  `idMemorial` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notificacao`
--

INSERT INTO `notificacao` (`id`, `idMemorial`, `idPersona`) VALUES
(1, 19, 13),
(2, 19, 13),
(3, 19, 13),
(4, 19, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `persona`
--

INSERT INTO `persona` (`id`, `email`, `senha`, `telefone`, `nome`) VALUES
(13, 'edvaniojanuario2013@gmail.com', '1234', '', 'edvanio'),
(14, 'valdemardinis17@gmail.com', 'obito', '', 'Valdemar');

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
-- Indexes for table `cifras`
--
ALTER TABLE `cifras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `condolencia`
--
ALTER TABLE `condolencia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
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
-- Indexes for table `notificacao`
--
ALTER TABLE `notificacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
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
-- AUTO_INCREMENT for table `cifras`
--
ALTER TABLE `cifras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `condolencia`
--
ALTER TABLE `condolencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `memorial`
--
ALTER TABLE `memorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notificacao`
--
ALTER TABLE `notificacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
