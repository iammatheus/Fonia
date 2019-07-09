-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jul-2019 às 04:19
-- Versão do servidor: 10.1.39-MariaDB
-- versão do PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fonia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `band`
--

CREATE TABLE `band` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `website` varchar(45) NOT NULL,
  `twitter` varchar(45) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `instagram` varchar(45) NOT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `band`
--

INSERT INTO `band` (`id`, `email`, `password`, `name`, `genre`, `description`, `website`, `twitter`, `facebook`, `instagram`, `active`) VALUES
(1, 'matheus.ferreira9@hotmail.com', 'apo7', 'Matheus', 'Rock Gospel', 'Uma banda de rock gospel', 'www.apo7.com.br', 'twitter/apo7', 'facebook/apo7', 'instagram/apo7', NULL),
(2, 'matheus.play.baixista@hotmail.com', '202cb962ac59075b964b07152d234b70', 'A', 'a', 'a', 'a', 'a', 'a', 'a', NULL),
(3, 'matheus.sss@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Apocalipse', 'Rock Gospel', 'lala', '', '', '', '', NULL),
(4, 'matheus.teste@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Guns N\\\' Roses', 'Hard Rock', 'Uma banda de hard rock foda pra krl', 'www.gunsnroses.com', 'twitter/gunsnroses', 'facebook/gunsnroses', 'instagram/gunsnroses', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `band`
--
ALTER TABLE `band`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `band`
--
ALTER TABLE `band`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
