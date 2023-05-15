-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Maio-2023 às 03:49
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agendaservice`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` text NOT NULL,
  `endereco` varchar(90) NOT NULL,
  `title` text NOT NULL,
  `msg` text NOT NULL,
  `start` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id`, `nome`, `email`, `telefone`, `endereco`, `title`, `msg`, `start`, `end`) VALUES
(8, 'Leila Lima', 'leilalimaprofessora@gmail.com', '(91) 984486627', 'Rua W7 - Conj. Rio Grande n 16', 'Higienização de sofá', 'testetete', '2023-05-16 17:00:00', '2023-05-16 17:00:00'),
(9, 'Augusto Cavalcante', 'augusto@hotmail.com', '(91) 999797494', 'Rua Nova 16 - Pedreira', 'Higienização de interior de carros', 'testet', '2023-05-12 10:00:00', '2023-05-12 10:00:00'),
(10, 'Carla Amador', 'carla@teste.com.br', '91 985166465', 'Av. duque de caxias nº 156', 'Higienização de sofá', 'teste', '2023-05-20 11:00:00', '2023-05-20 11:00:00'),
(11, 'Rodrigo Bastos', 'rodrigobastos@hotmail.com', '91 988067101', 'Rua Capri 25 - Resid. Belo Jardim 1', 'Higienização de sofá', 'testete', '2023-05-09 11:00:00', '2023-05-09 11:00:00'),
(12, 'Rodrigo Bastos', 'rodrigobastos@hotmail.com', '91 988067101', 'Rua Capri 25 - Resid. Belo Jardim 1', 'Higienização de sofá', 'testete', '2023-05-09 11:00:00', '2023-05-09 11:00:00'),
(13, 'Rodrigo Bastos', 'rodrigobastos@hotmail.com', '91 988067101', 'Rua Capri 25 - Resid. Belo Jardim 1', 'Higienização de sofá', 'testete', '2023-05-09 11:00:00', '2023-05-09 11:00:00'),
(14, 'José Laranjeira', 'leilalimaprofessora@gmail.com', '(91) 999797498', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de colchão', 'teste', '2023-05-24 11:00:00', '2023-05-24 11:00:00'),
(15, 'Claudia Cruz', 'claudiacruz@hotmail.com', '99999999999', 'Rua Belo Horizonte 26', 'Higienização de sofá', 'testetet', '2023-05-12 09:00:00', '2023-05-12 09:00:00'),
(16, 'Cleber Rabelo', 'cleber@rabelo.com.br', '91999999999', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de sofá', 'testet', '2023-05-19 11:00:00', '2023-05-19 11:00:00'),
(17, 'Flavia alencar', 'jose@dasilva.com', '(91) 984486627', 'Rua Poço sem fundo 16', 'Higienização de colchão', 'teste', '2023-05-09 13:00:00', '2023-05-09 13:00:00'),
(18, 'Claudionor Siqueira', 'siqueira@claudio.com.br', '91 988161564', 'Rua das Flores 26 - Anapoles', 'Higienização de sofá', 'teste', '2023-05-17 13:00:00', '2023-05-17 13:00:00'),
(19, 'Claudionor Siqueira', 'siqueira@claudio.com.br', '91 988161564', 'Rua das Flores 26 - Anapoles', 'Higienização de sofá', 'teste', '2023-05-17 13:00:00', '2023-05-17 13:00:00'),
(20, 'Claudionor Siqueira', 'siqueira@claudio.com.br', '91 988161564', 'Rua das Flores 26 - Anapoles', 'Higienização de sofá', 'teste', '2023-05-17 13:00:00', '2023-05-17 13:00:00'),
(21, 'Claudionor Siqueira', 'siqueira@claudio.com.br', '91 988161564', 'Rua das Flores 26 - Anapoles', 'Higienização de sofá', 'teste', '2023-05-17 13:00:00', '2023-05-17 13:00:00'),
(22, 'José Laranjeira ', 'jlaranjeirasupor@gmail.com', '(91) 9844862525', 'Rua Poço sem fundo 16', 'Impermibialização de estofados', 'teste', '2023-05-23 13:00:00', '2023-05-23 12:00:00'),
(23, 'Carlos Braga', 'braga@aguiar.com.br', '91 991351522', 'Conj. cidade Nova 6 We 68 n 321', 'Lavagem de Tapete', 'sfsaasf', '2023-05-09 12:00:00', '2023-05-09 12:00:00'),
(24, 'José Laranjeira', 'jlaranjeira@hotmail.com', '91 991351522', 'Rua Cerro azul 35', 'Higienização de sofá', 'teste', '2023-05-23 12:00:00', '2023-05-23 12:00:00'),
(25, '', 'ricardo@silva.com.br', '91991321445', 'Rua W7 - Conj. Rio Grande n 16', 'Impermibialização de estofados', 'Testee', '2023-05-18 13:00:00', '2023-05-18 13:00:00'),
(26, 'Ricardo SILVA', 'flaia@alencar.com.br', '91 988161524', 'Rua W7 - Conj. Rio Grande n 16', 'Lavagem de Tapete', 'Teste', '2023-05-20 13:00:00', '2023-05-20 13:00:00'),
(27, 'José Laranjeira', 'jlaranjeira@hotmail.com', '(91) 984486627', 'Rua Poço sem fundo 16', 'Higienização de colchão', 'sadasd', '2023-05-24 11:00:00', '2023-05-24 11:00:00'),
(28, 'Flavia alencar', 'jlaranjeirasupor@gmail.com', '(91) 999797498', 'Rua Poço sem fundo 16', 'Higienização de colchão', 'teste', '2023-05-16 13:00:00', '2023-05-16 13:00:00'),
(29, 'Diogo', 'diogo_gouveia@teste.com', '62 9888585959', 'rua', 'Lavagem de Tapete', 'tapete 2 metros', '2023-05-09 05:00:00', '2023-05-09 05:00:00'),
(30, 'José Laranjeira', 'jlaranjeira@hotmail.com', '(91) 999797498', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de sofá', 'ter', '2023-05-11 16:00:00', '2023-05-11 16:00:00'),
(31, 'José Laranjeira', 'jlaranjeira@hotmail.com', '(91) 999797498', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de sofá', 'ter', '2023-05-11 16:00:00', '2023-05-11 16:00:00'),
(32, 'José Laranjeira', 'jlaranjeira@hotmail.com', '(91) 999797498', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de sofá', 'tert', '2023-05-11 16:00:00', '2023-05-11 16:00:00'),
(33, 'José Laranjeira', 'jlaranjeira@hotmail.com', '(91) 999797498', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de sofá', 'tert', '2023-05-11 16:00:00', '2023-05-11 16:00:00'),
(34, 'José Laranjeira', 'jlaranjeira@hotmail.com', '(91) 999797498', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de sofá', 'tert', '2023-05-11 16:00:00', '2023-05-11 16:00:00'),
(35, 'José Laranjeira', 'jlaranjeira@hotmail.com', '(91) 999797498', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de sofá', 'teste', '2023-05-11 16:00:00', '2023-05-11 16:00:00'),
(36, 'Leila lima', 'jose@dasilva.com', '91 991351522', 'Conj. cidade Nova 6 We 68 n 321', 'Higienização de sofá', 'teste', '2023-05-11 16:00:00', '2023-05-11 16:00:00'),
(37, 'Leila lima', 'jose@dasilva.com', '91 991351522', 'Conj. cidade Nova 6 We 68 n 321', 'Higienização de sofá', 'teste', '2023-05-11 16:00:00', '2023-05-11 16:00:00'),
(38, 'Rita de Cassia Borges', 'ritaborges@hotmail.com', '(91) 999797498', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de sofá', 'tste', '2023-05-11 16:00:00', '2023-05-11 16:00:00'),
(39, 'Douglas Brito', 'dougla@brito.com.br', '91991919191', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de sofá', 'teste', '2023-05-11 16:00:00', '2023-05-11 16:00:00'),
(40, 'Douglas Brito', 'dougla@brito.com.br', '91991919191', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de sofá', 'teste', '2023-05-11 16:00:00', '2023-05-11 16:00:00'),
(41, 'Flavia alencar', 'jose@dasilva.com', '91 988161564', 'Res. Belo Jardim I Rua Bolonha nº 25', 'Higienização de colchão', '', '2023-05-31 11:00:00', '2023-05-31 11:00:00'),
(42, 'Flavia alencar', 'leilalimaprofessora@gmail.com', '91 991351522', 'Conj. cidade Nova 6 We 68 n 321', 'Impermibialização de estofados', 'asdasdas', '2023-05-30 13:00:00', '2023-05-30 13:00:00'),
(43, 'Diogo', 'teste@hotmail.com', '62984997089', 'diogo_gouveia97@hotmail.com', 'Higienização de sofá', 'teste', '2023-05-14 00:30:00', '2023-05-14 00:30:00'),
(44, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62984848484', 'Rua 01 numero 01, Bairro', 'Higienização de sofá', 'sofá', '2023-05-14 15:00:00', '2023-05-14 15:00:00'),
(45, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62984848484', 'Rua 01 numero 01, Bairro', 'Higienização de sofá', 'sofá', '2023-05-14 15:00:00', '2023-05-14 15:00:00'),
(46, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62984848484', 'Rua 01 numero 01, Bairro', 'Higienização de sofá', 'sofá', '2023-05-14 15:00:00', '2023-05-14 15:00:00'),
(47, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62984848484', 'Rua 01 numero 01, Bairro', 'Higienização de sofá', 'sofá', '2023-05-14 15:00:00', '2023-05-14 15:00:00'),
(48, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62984848484', 'Rua 01 numero 01, Bairro', 'Higienização de sofá', 'Tecido delicado', '2023-06-01 15:00:00', '2023-06-01 15:00:00'),
(49, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62984848484', 'Rua 01 numero 01, Bairro', 'Higienização de sofá', 'Tecido delicado', '2023-06-02 15:00:00', '2023-06-02 15:00:00'),
(50, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62984848484', 'Rua 01 numero 01, Bairro', 'Higienização de sofá', 'Tecido delicado', '2023-06-02 15:00:00', '2023-06-02 15:00:00'),
(51, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-05-14 15:00:00', '2023-05-14 15:00:00'),
(52, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-21 09:00:00', '2023-06-21 09:00:00'),
(53, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(54, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(55, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(56, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(57, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(58, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(59, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(60, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(61, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(62, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(63, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(64, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(65, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(66, 'Diogo Gouveia', 'diogo_teste@hotmail.com', '62 8484848484', 'Rua 1 Lote 1 Quadra 1 Bairro 1', 'Higienização de sofá', 'Tecido delicado', '2023-06-22 09:00:00', '2023-06-22 09:00:00'),
(67, 'Diogo Gouveia de Siqueira', 'diogo_teste@hotmail.com', '62 999999999', 'Rua 1 LOTE 1 Quadra 1', 'Higienização de sofá', 'Teste', '2023-06-21 09:00:00', '2023-06-21 09:00:00'),
(68, 'Diogo Gouveia de Siqueira', 'diogo_teste@hotmail.com', '62 999999999', 'Rua 1 LOTE 1 Quadra 1', 'Higienização de sofá', 'Teste', '2023-06-21 09:00:00', '2023-06-21 09:00:00'),
(69, 'Diogo Gouveia de Siqueira', 'diogo_teste@hotmail.com', '62 999999999', 'Rua 1 LOTE 1 Quadra 1', 'Higienização de sofá', 'Teste', '2023-06-21 09:00:00', '2023-06-21 09:00:00'),
(70, 'Douglas Frederico Campos Ribeiro Cesar', 'dfcrcesar@gmail.com', '21999999999', 'Sem Teto', 'Impermibialização de estofados', '', '2023-05-16 13:00:00', '2023-05-16 13:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
