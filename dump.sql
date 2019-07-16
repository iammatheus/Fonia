-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jul-2019 às 21:48
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
  `img` varchar(50) NOT NULL,
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

INSERT INTO `band` (`id`, `email`, `password`, `img`, `name`, `genre`, `description`, `website`, `twitter`, `facebook`, `instagram`, `active`) VALUES
(16, 'admin@hotmail.com', '123', 'kiss.jpg', 'Kiss', 'Rock', 'Uma banda de rock', 'www.kiss.com', 'twitter/kiss', 'facebook/kiss', 'instagram/kiss', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
