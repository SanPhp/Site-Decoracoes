-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `belladecor_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `id_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `legenda` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `miniatura` varchar(100) NOT NULL,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id_galeria`, `legenda`, `categoria`, `imagem`, `miniatura`) VALUES
(15, 'TESTE LEGENDA', 'aniversarios_infantis', '1312084226000000-2.jpg', '1312084226000000-2.jpg'),
(16, 'TESTE LEGENDA', 'aniversarios_infantis', '1312084227000000-3.jpg', '1312084227000000-3.jpg'),
(18, 'mais legenda', 'formaturas', '1312084828000000-1.jpg', '1312084828000000-1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `legenda_video` varchar(200) NOT NULL,
  `link_video` varchar(200) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id_video`, `legenda_video`, `link_video`) VALUES
(3, 'VideoLegenda', '//www.youtube.com/embed/laJRkEq07Po?rel=0'),
(5, 'videooo', '//www.youtube.com/embed/laJRkEq07Po?rel=0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
