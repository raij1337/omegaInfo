-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `omegainfo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fonte`
--

CREATE TABLE IF NOT EXISTS `fonte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `potencia` varchar(250) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `fonte`
--

INSERT INTO `fonte` (`id`, `nome`, `potencia`, `preco`, `imagem`) VALUES
(1, 'Corsair', '800', '250.00', 'img/fonte.png'),
(2, 'EVGA', '430', '300.00', 'img/fonte2.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `placa_mae`
--

CREATE TABLE IF NOT EXISTS `placa_mae` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `watts` varchar(250) NOT NULL,
  `socket` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `placa_mae`
--

INSERT INTO `placa_mae` (`id`, `nome`, `preco`, `imagem`, `watts`, `socket`) VALUES
(1, 'ASUS Z97 SABERTOOTH', '1300.00', 'img/placamae.png', '9', 'LGA-1150'),
(2, 'GIGABYTE ATX GA-970A', '470.47', 'img/placamaeamd.png', '9', 'AM3+');

-- --------------------------------------------------------

--
-- Estrutura da tabela `processador`
--

CREATE TABLE IF NOT EXISTS `processador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `watts` varchar(250) NOT NULL,
  `socket` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `processador`
--

INSERT INTO `processador` (`id`, `nome`, `preco`, `imagem`, `watts`, `socket`) VALUES
(1, 'Core i7 4790K', '1500.00', 'img/corei7.png', '88', 'LGA-1150'),
(2, 'FX 6300', '500.00', 'img/fx6300.png', '78', 'AM3+');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `categoria` varchar(250) NOT NULL,
  `watts` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `imagem`, `descricao`, `categoria`, `watts`) VALUES
(1, 'Master', '3545.90', 'master.png', 'Intel core i5, GTX 650TI 2GB, Fonte corsair 600w, gravador asus, hd 500GB, 4GB ddr3, placa-mãe asus', 'computador', 0),
(2, 'Warrior', '4934.90', 'warrior.png', 'Intel core i7, GTX 750TI 2GB, Fonte Corsair 1200w, gravador asus, 1TB, 8GB ddr3, placa-mãe asus', 'computador', 0),
(3, 'Destructor', '2456.20', 'destructor.png', 'Intel core i3, GTX 650 1GB, Fonte corsair 600w, gravador asus, hd 500GB, 4GB ddr3, placa-mãe asus', 'computador', 0),
(4, 'Placa de Vídeo VGA EVGA GeForce GTX 1080', '3882.23', '1080.png', 'NVIDIA EVGA GeForce@ GTX 1080 é a mais avançada GPU já criada, impulsionada pela nova arquitetura Pascal™. Geforce GTX 1080 oferece FinFET ultrarrápido e tecnologias de memória GDDR5 de alta banda larga, além de suporte para DirectX12, capaz de oferecer a', 'placadevideo', 0),
(5, 'HD Seagate SATA 3,5´ Desktop HDD 1TB 7200RPM 64MB Cache SATA 6Gb/s - ST1000DM003', '305.76', 'hd.png', 'Os Seagate Desktop HDDs com 1 TB por disco contam com modos de alimentação avançados para economizar mais energia durante estados de inatividade, sem sacrificar o desempenho', 'hd', 0),
(6, 'SSD Kingston 2.5´ 120GB UV400 SATA III Leituras: 550MBs / Gravações: 350MBs', '258.71', 'ssd.png', '10x mais rápido que um HDD: Suas incríveis velocidades de leitura/gravação não apenas aumentarão o desempenho como também tornarão mais eficientes os sistemas existentes.', 'ssd', 0),
(7, 'WaterCooler CoolerMaster Seidon 120V 120mm RL-S12V-24PK-R1', '344.59', 'watercooler.png', 'O Seidon 120V da Cooler Master apresenta um radiador compacto de 120 milímetros, que se adapta a praticamente todos os cases. Seidon pode operar silenciosamente ou desencadear uma poderosa tempestade de refrigeração, de acordo com o seu comando.', 'watercooler', 0),
(8, 'Drive ASUS Gravador de DVD 24x Black - DRW-24F1MT/BLK/B/AS 90DD01V0-B3B00', '74.00', 'gravador.png', 'Drive ASUS Gravador Interno de DVD 24x Black - DRW-24F1MT/BLK/B/AS 90DD01V0 - B3B00', 'gravador', 0),
(9, 'Microsoft Windows 7 Professional 64 Bits SP1 Português FQC-08286 COEM', '645.91', 'w7.png', 'O Windows 7 é uma versão do Microsoft Windows, uma série de sistemas operativos produzidos pela Microsoft para uso em computadores pessoais, incluindo computadores domésticos e empresariais, notebooks e PCs de centros de mídia, entre outros. ', 'so', 0),
(10, 'Memória Corsair 4GB 1333MHz DDR3 CL9 - CMV4GX3M1A1333C9', '118.71', 'mem_ram.png', '', 'mem_ram', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `dataNasc` varchar(10) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `dataNasc`, `senha`) VALUES
(1, 'adm', 'adm@adm.com', '10 10 1982', 'adm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
