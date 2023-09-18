-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Set-2023 às 17:15
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitec_2023`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(5) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `nascimento` date NOT NULL,
  `UF` varchar(110) NOT NULL,
  `semestre` int(2) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `email`, `telefone`, `genero`, `nascimento`, `UF`, `semestre`, `descricao`) VALUES
(4, 'JOE', 'JOE@gmail.com', '11 99999-99', 'masculino', '2023-02-04', 'Pa', 1, 'fbwjdv'),
(5, 'Fillipe Fillipe eron', 'fillipeeron@gmail.com', '11 99999-99', 'Masculino', '2023-09-04', 'PB', 1, 'dvsfvs'),
(6, 'Fillipe Fillipe eron', 'fillipeeron@gmail.com', '11 99999-99', 'Masculino', '2023-09-20', 'PB', 1, 'dfsdfs'),
(7, 'Fillipe Fillipe eron', 'fillipeeron@gmail.com', '11 99999-99', 'Masculino', '2023-09-20', 'PB', 1, 'dfsdfs'),
(8, 'teste', 'fillipeeron@gmail.com', '11 99999-99', 'Feminino', '2023-09-13', 'PB', -2, 'adDF'),
(9, 'teste1', 'joe@gmail.com', '11 99999-99', 'Masculino', '2023-09-13', 'PB', 3, 'asdasdasd'),
(10, 'teste2', 'joe@gmail.com', '11 99999-99', 'Feminino', '2023-09-21', 'PB', 2, 'dqdqdq'),
(11, 'teste3', 'fillipeeron@gmail.com', '11 99999-99', 'Masculino', '2023-09-28', 'SP', 2, 'tetstetette'),
(12, 'teste 4', 'joe@gmail.com', '11 99999-99', 'Feminino', '2023-10-05', 'RJ', 2, 'qweqweqwe'),
(13, 'teste', 'joemiran06@gmail.com', '11 99999-99', 'Masculino', '2023-09-08', 'SP', 1, 'qsq'),
(14, 'Joel Tavares Miranda', 'joemiran06@gmail.com', '11 99999-99', 'Masculino', '2023-09-20', 'SP', 4, ''),
(15, 'Joel Tavares Miranda', 'joemiran06@gmail.com', '11 99999-99', 'Masculino', '2023-09-13', 'PB', 4, 'dwdfwefw'),
(16, 'Fillipe Fillipe eron', 'fillipeeron@gmail.com', '11 99999-99', 'Masculino', '2023-09-21', 'PB', 1, 'saca'),
(17, 'Fillipe Fillipe eron', 'fillipeeron@gmail.com', '11 99999-99', 'Masculino', '2023-09-20', 'PB', 1, 'fvdfv');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idPessoa` int(5) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idPessoa`, `login`, `senha`) VALUES
(0, '', ''),
(4, 'joel', 'senha'),
(5, 'cellepassos', '$2y$10$UHLc3H97CdvPEeeKVLKmT.wBwG2uVmwF4q5AbN8R4VmXwwWeu0CXO'),
(6, 'cellepassos', '$2y$10$/LiZzhdEOHgt4EXVtIiE9uAXRziPw/JWl1vnH4LFw9o6s1pNTLxuW'),
(7, 'cellepassos', '$2y$10$2pEFB/wWdiuD8AAiHmn1iOQy9lPdqC64KAnQjeLLSiDzfnV8XfWBm'),
(8, 'ayllabrito_@hotmail.com', '$2y$10$8Poq4WQYo8PChv5a2h8Zgeje0AbHcBdJ1iiSxxAub4QFddA07Q.N2'),
(9, 'asda', '$2y$10$eD9H9dDAsPszPs7Zwod1HuWbOauXmTF8970ntTZzZO87T723TtxXS'),
(10, 'qdqd', '$2y$10$4hy/tx6JmDgyvRIauwg5iOxhDdMcBQpc5n6RoaVybPZMFJUNFr6ZW'),
(11, 'teste', '$2y$10$ZOmt2nNQ4NpPKOOrhUUJyOLTmHpR47e5X7XP0rSbQ36SYIw0AjBRi'),
(12, 'cellepassos', '$2y$10$.vfoXxD6RWLpM7XI3182nut1bi6vrhdtdRgoGphdCSam7yn4zdxNC'),
(13, 'qqs', '$2y$10$VuA6GEkw0.Uw9SNwIuo0ZO5yETrlLPtcqrRfahFW/1h7DiZEG7i5G'),
(14, 'joel', '$2y$10$diJSOiCdXebqah3Bbbrg.OsKrxCUZKr7hhNhedD/XMtPXessJtPuK'),
(15, 'teste', '$2y$10$M1LbKi5cqWpBUgfuKw4blOlx2MRO3DqVcya3sER/iyF7IFScT6p2O'),
(16, 'sacsc', '$2y$10$I28Torb5RdnPZsQsI/NhJuC2pz1mLXuQ2mHalgX0BnUGNojnqd.Vi'),
(17, 'fsfvfdvd', '$2y$10$65ijgY1Yv6PhUqpvz/Dvgu/TJMp46u2nAcixnySpdGhmDO83JTtsy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idPessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
