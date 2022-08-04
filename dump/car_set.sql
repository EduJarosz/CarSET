-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2017 às 19:16
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_set`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `cai_id` int(9) NOT NULL,
  `cai_fun_id` int(9) NOT NULL,
  `cai_res_id` int(9) NOT NULL,
  `cai_pat_id` int(9) NOT NULL,
  `cai_form_pag` varchar(9) NOT NULL,
  `cai_valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cli_id` int(9) NOT NULL,
  `cli_log_id` int(9) NOT NULL,
  `cli_nome` varchar(30) NOT NULL,
  `cli_contato` varchar(13) NOT NULL,
  `cli_sexo` char(1) NOT NULL,
  `cli_dtn` date NOT NULL,
  `cli_rg` int(11) NOT NULL,
  `cli_cpf` int(11) NOT NULL,
  `cli_online` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cli_id`, `cli_log_id`, `cli_nome`, `cli_contato`, `cli_sexo`, `cli_dtn`, `cli_rg`, `cli_cpf`, `cli_online`) VALUES
(1, 0, 'Eder', '231231321', 'm', '0000-00-00', 0, 31311233, ''),
(2, 0, 'Jose', '4130445567', 'm', '0000-00-00', 0, 2147483647, ''),
(3, 0, 'Bruno', '231231321', 'm', '0000-00-00', 0, 2147483647, ''),
(4, 0, 'fulano', '41283154', 'm', '0000-00-00', 0, 345678911, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricante`
--

CREATE TABLE `fabricante` (
  `fab_id` int(9) NOT NULL,
  `fab_nome` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fabricante`
--

INSERT INTO `fabricante` (`fab_id`, `fab_nome`) VALUES
(1, 'citroen'),
(2, 'fiat'),
(3, 'ford'),
(4, 'honda'),
(5, 'hyundai'),
(6, 'kia'),
(7, 'nissan'),
(8, 'renault'),
(9, 'peugeot'),
(10, 'toyota'),
(11, 'vw'),
(12, 'chevrolet');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `fun_id` int(9) NOT NULL,
  `fun_log_id` int(9) NOT NULL,
  `fun_nome` varchar(30) NOT NULL,
  `fun_contato` varchar(13) NOT NULL,
  `fun_sexo` varchar(1) NOT NULL,
  `fun_dtn` date NOT NULL,
  `fun_rg` int(11) NOT NULL,
  `fun_cpf` int(11) NOT NULL,
  `fun_cargo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`fun_id`, `fun_log_id`, `fun_nome`, `fun_contato`, `fun_sexo`, `fun_dtn`, `fun_rg`, `fun_cpf`, `fun_cargo`) VALUES
(4, 0, 'Joao', '', 'm', '2017-11-14', 2147483647, 456464654, 'Gerente'),
(5, 0, 'Leandro', '', 'm', '0000-00-00', 2147483647, 2147483647, 'Funcionari');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `log_id` int(9) NOT NULL,
  `log_usuario` varchar(10) NOT NULL,
  `log_senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`log_id`, `log_usuario`, `log_senha`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `mod_id` int(9) NOT NULL,
  `mod_fab_id` int(9) NOT NULL,
  `mod_nome` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`mod_id`, `mod_fab_id`, `mod_nome`) VALUES
(125, 1, 'aircross'),
(126, 1, 'ax'),
(127, 1, 'berlin'),
(128, 1, 'bx'),
(129, 1, 'c3'),
(130, 1, 'c4'),
(131, 1, 'c5'),
(132, 1, 'c6'),
(133, 1, 'c8'),
(134, 1, 'ds3'),
(135, 1, 'ds4'),
(136, 1, 'ds5'),
(137, 1, 'evasion'),
(138, 1, 'grand c4'),
(139, 1, 'jumper'),
(140, 1, 'xantia'),
(141, 1, 'xm'),
(142, 1, 'xsara'),
(143, 1, 'zx'),
(144, 2, '147'),
(145, 2, '500'),
(146, 2, 'argo'),
(147, 2, 'brava'),
(148, 2, 'bravo'),
(149, 2, 'coupe'),
(150, 2, 'doblo'),
(151, 2, 'ducato'),
(152, 2, 'fiorino'),
(153, 2, 'freemont'),
(154, 2, 'grand siena'),
(155, 2, 'idea'),
(156, 2, 'linea'),
(157, 2, 'palio'),
(158, 2, 'premio'),
(159, 2, 'punto'),
(160, 2, 'siena'),
(161, 2, 'stilo'),
(162, 2, 'strada'),
(163, 2, 'tempra'),
(164, 2, 'tipo'),
(165, 2, 'toro'),
(166, 2, 'uno'),
(167, 3, 'belina'),
(168, 3, 'corsel'),
(169, 3, 'delrey'),
(170, 3, 'ecosport'),
(171, 3, 'scort'),
(172, 3, 'fiesta'),
(173, 3, 'focus'),
(174, 3, 'fusion'),
(175, 3, 'ka'),
(176, 3, 'maveric'),
(177, 3, 'mustang'),
(178, 3, 'pampa'),
(179, 3, 'ranger'),
(180, 3, 'taurus'),
(181, 4, 'accord'),
(182, 4, 'city'),
(183, 4, 'civic'),
(184, 4, 'cr-v'),
(185, 4, 'fit'),
(186, 4, 'hr-v'),
(187, 4, 'odyssey'),
(188, 4, 'passport'),
(189, 4, 'prelude'),
(190, 4, 'wr-v'),
(191, 4, 'atos'),
(192, 4, 'azera'),
(193, 4, 'elantra'),
(194, 4, 'veracruz'),
(195, 4, 'hb20'),
(196, 4, 'i30'),
(197, 4, 'ex35'),
(198, 4, 'santa fe'),
(199, 4, 'sonata'),
(200, 4, 'tucson'),
(201, 4, 'veloster'),
(202, 5, 'picanto'),
(203, 5, 'sorento'),
(204, 5, 'soul'),
(205, 5, 'sportage'),
(206, 5, 'livina'),
(207, 5, 'march'),
(208, 5, 'primera'),
(209, 5, 'sentra'),
(210, 5, 'tiida'),
(211, 5, 'versa'),
(212, 6, 'captur'),
(213, 6, 'clio'),
(214, 6, 'duster'),
(215, 6, 'fluence'),
(216, 6, 'kwid'),
(217, 6, 'logan'),
(218, 6, 'megane'),
(219, 6, 'sandero'),
(220, 6, 'scenic'),
(221, 6, 'symbol'),
(222, 6, 'twingo'),
(223, 7, '350z'),
(224, 7, 'frontier'),
(225, 7, 'livina'),
(226, 7, 'kicks'),
(227, 7, 'march'),
(228, 7, 'sentra'),
(229, 7, 'stanza'),
(230, 7, 'versa'),
(231, 7, 'zx'),
(232, 8, ''),
(233, 8, 'captur'),
(234, 8, 'clio'),
(235, 8, 'duster'),
(236, 8, 'fluence'),
(237, 8, 'kangoo'),
(238, 8, 'laguna'),
(239, 8, 'logan'),
(240, 8, 'master'),
(241, 8, 'megane'),
(242, 8, 'sandero'),
(243, 8, 'scenic'),
(244, 8, 'symbol'),
(245, 8, 'trafic'),
(246, 8, 'twingo'),
(247, 9, '106'),
(248, 9, '2008'),
(249, 9, '205'),
(250, 9, '206'),
(251, 9, '207'),
(252, 9, '208'),
(253, 9, '3008'),
(254, 9, '306'),
(255, 9, '307'),
(256, 9, '308'),
(257, 9, '405'),
(258, 9, '406'),
(259, 9, '407'),
(260, 9, '408'),
(261, 9, '504'),
(262, 9, '505'),
(263, 9, '508'),
(264, 9, '605'),
(265, 9, '607'),
(266, 9, '806'),
(267, 9, '807'),
(268, 10, 'avalon'),
(269, 10, 'band'),
(270, 10, 'camry'),
(271, 10, 'celica'),
(272, 10, 'corolla'),
(273, 10, 'corona'),
(274, 10, 'etios'),
(275, 10, 'hilux'),
(276, 10, 'land cruiser'),
(277, 10, 'previa'),
(278, 10, 'supra'),
(279, 10, 't-100'),
(280, 11, 'amarok'),
(281, 11, 'apolo'),
(282, 11, 'bora'),
(283, 11, 'brasilia'),
(284, 11, 'caravele'),
(285, 11, 'corrado'),
(286, 11, 'crossfox'),
(287, 11, 'eos'),
(288, 11, 'fox'),
(289, 11, 'fusca'),
(290, 11, 'gol'),
(291, 11, 'golf'),
(292, 11, 'jetta'),
(293, 11, 'logus'),
(294, 11, 'parati'),
(295, 11, 'passat'),
(296, 11, 'point'),
(297, 11, 'polo'),
(298, 11, 'quantum'),
(299, 11, 'santana'),
(300, 11, 'saveiro'),
(301, 11, 'space'),
(302, 11, 'tiguan'),
(303, 11, 'up!'),
(304, 11, 'voyage'),
(305, 11, 'variant'),
(306, 12, 'agile'),
(307, 12, 'astra'),
(308, 12, 'blazer'),
(309, 12, 'camaro'),
(310, 12, 'captiva'),
(311, 12, 'caravan'),
(312, 12, 'cavalier'),
(313, 12, 'celta'),
(314, 12, 'chevette'),
(315, 12, 'classic'),
(316, 12, 'cobalt'),
(317, 12, 'corsa'),
(318, 12, 'cruze'),
(319, 12, 'ipanema'),
(320, 12, 'kadett'),
(321, 12, 'malibu'),
(322, 12, 'meriva'),
(323, 12, 'montana'),
(324, 12, 'monza'),
(325, 12, 'omega'),
(326, 12, 'onix'),
(327, 12, 'opala'),
(328, 12, 'prisma'),
(329, 12, 's10'),
(330, 12, 'vectra'),
(331, 12, 'veraneio'),
(332, 12, 'zafira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `patio`
--

CREATE TABLE `patio` (
  `pat_id` int(9) NOT NULL,
  `pat_vag_id` int(9) NOT NULL,
  `pat_pla_id` int(9) NOT NULL,
  `pat_vei_id` int(9) NOT NULL,
  `pat_cli_id` int(10) NOT NULL,
  `pat_ent_data` date NOT NULL,
  `pat_ent_hora` time NOT NULL,
  `pat_sai_data` date NOT NULL,
  `pat_sai_hora` time NOT NULL,
  `pat_reserva` varchar(1) NOT NULL,
  `pat_del` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `patio`
--

INSERT INTO `patio` (`pat_id`, `pat_vag_id`, `pat_pla_id`, `pat_vei_id`, `pat_cli_id`, `pat_ent_data`, `pat_ent_hora`, `pat_sai_data`, `pat_sai_hora`, `pat_reserva`, `pat_del`) VALUES
(1, 1, 0, 1, 0, '2017-11-29', '12:00:00', '2017-11-29', '14:00:00', '', '*'),
(2, 1, 0, 2, 0, '2017-11-29', '16:00:00', '0000-00-00', '00:00:00', '', ''),
(3, 2, 0, 3, 0, '2017-12-05', '10:00:00', '0000-00-00', '00:00:00', '', ''),
(4, 3, 0, 4, 0, '2017-12-05', '11:01:00', '0000-00-00', '00:00:00', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE `planos` (
  `pla_id` int(9) NOT NULL,
  `pla_tipo` varchar(10) NOT NULL,
  `pla_valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`pla_id`, `pla_tipo`, `pla_valor`) VALUES
(1, 'hora', 5),
(2, 'dia', 15),
(3, 'mes', 90);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `res_id` int(9) NOT NULL,
  `res_cli_id` int(9) NOT NULL,
  `res_vag_id` int(9) NOT NULL,
  `res_pla_id` int(9) NOT NULL,
  `pla_vei_id` int(9) NOT NULL,
  `res_ent_hora` time(5) NOT NULL,
  `res_ent_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `permissao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `nome`, `senha`, `permissao`) VALUES
(37, 'admin', 'eder z', '827ccb0eea8a706c4c34a16891f84e7b', 'adm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

CREATE TABLE `vaga` (
  `vag_id` int(10) NOT NULL,
  `vag_numero` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`vag_id`, `vag_numero`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `vei_id` int(9) NOT NULL,
  `vei_cli_id` int(9) NOT NULL,
  `vei_mod_id` int(9) NOT NULL,
  `vei_placa` varchar(10) NOT NULL,
  `vei_tipo` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`vei_id`, `vei_cli_id`, `vei_mod_id`, `vei_placa`, `vei_tipo`) VALUES
(1, 1, 0, 'ABC-123', ''),
(2, 2, 0, 'hhh123', ''),
(3, 3, 0, 'ABC-123', ''),
(4, 4, 0, 'AAA-333', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`cai_id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indexes for table `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`fab_id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`fun_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`mod_id`);

--
-- Indexes for table `patio`
--
ALTER TABLE `patio`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`pla_id`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaga`
--
ALTER TABLE `vaga`
  ADD PRIMARY KEY (`vag_id`);

--
-- Indexes for table `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`vei_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caixa`
--
ALTER TABLE `caixa`
  MODIFY `cai_id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fabricante`
--
ALTER TABLE `fabricante`
  MODIFY `fab_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `fun_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `mod_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;
--
-- AUTO_INCREMENT for table `patio`
--
ALTER TABLE `patio`
  MODIFY `pat_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `planos`
--
ALTER TABLE `planos`
  MODIFY `pla_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `res_id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `vaga`
--
ALTER TABLE `vaga`
  MODIFY `vag_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `vei_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
