-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 29-Maio-2021 às 14:19
-- Versão do servidor: 10.2.37-MariaDB-cll-lve
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `visaotec_systemcar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estacionar`
--

CREATE TABLE `estacionar` (
  `estacionar_id` int(11) NOT NULL,
  `estacionar_precificacao_id` int(11) NOT NULL,
  `estacionar_forma_pagamento_id` int(11) DEFAULT NULL,
  `estacionar_valor_hora` varchar(20) NOT NULL,
  `estacionar_numero_vaga` int(11) NOT NULL,
  `estacionar_placa_veiculo` varchar(8) NOT NULL,
  `estacionar_marca_veiculo` varchar(30) NOT NULL,
  `estacionar_modelo_veiculo` varchar(20) NOT NULL,
  `estacionar_data_entrada` datetime NOT NULL DEFAULT current_timestamp(),
  `estacionar_data_saida` datetime DEFAULT NULL,
  `estacionar_tempo_decorrido` varchar(20) DEFAULT NULL,
  `estacionar_valor_devido` varchar(30) DEFAULT NULL,
  `estacionar_status` tinyint(1) NOT NULL,
  `estacionar_data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estacionar`
--

INSERT INTO `estacionar` (`estacionar_id`, `estacionar_precificacao_id`, `estacionar_forma_pagamento_id`, `estacionar_valor_hora`, `estacionar_numero_vaga`, `estacionar_placa_veiculo`, `estacionar_marca_veiculo`, `estacionar_modelo_veiculo`, `estacionar_data_entrada`, `estacionar_data_saida`, `estacionar_tempo_decorrido`, `estacionar_valor_devido`, `estacionar_status`, `estacionar_data_alteracao`) VALUES
(1, 1, 1, '10,00', 5, 'PDT-0505', 'Fiat', 'Strada ', '2020-12-08 10:04:18', '2020-12-10 23:13:43', '61.9 hrs', '619', 1, '2020-12-13 20:24:33'),
(2, 2, 1, '15,00', 20, 'JJT-5050', 'Volkswagen', 'Fusca', '2020-12-08 10:04:18', '2020-12-13 14:41:45', '124.36 hrs', '1865.4', 1, '2020-12-13 20:24:38'),
(3, 4, 1, '25,00', 15, 'TRE-8958', 'Scania', 'FH440', '2020-12-09 08:35:44', '2021-03-29 20:29:03', '2651.52', '66288', 1, '2021-03-29 23:29:03'),
(4, 4, NULL, '25,00', 10, 'HHH-4040', 'Ford', 'Cargo 1212', '2020-12-09 17:50:55', NULL, NULL, NULL, 0, NULL),
(5, 5, NULL, '5,00', 22, 'XXX-9090', 'Honda', 'CG190', '2020-12-10 17:21:47', NULL, NULL, NULL, 0, NULL),
(6, 5, 4, '5,00', 10, 'PAD-2020', 'Yamaha', 'Lander 250CC', '2020-12-10 18:50:56', '2020-12-13 07:25:56', '60.34 hrs', '301.7', 1, '2020-12-13 20:24:43'),
(7, 5, 1, '5,00', 15, 'xxx-9999', 'Honda', 'Elite', '2020-12-12 22:14:59', '2020-12-12 23:00:10', '0.45 hrs', '2.25', 1, '2020-12-13 20:24:48'),
(8, 1, 1, '10,00', 8, 'DPO-5080', 'Honda', 'Civic GWT', '2020-12-13 07:33:52', '2020-12-13 10:01:51', '2.27 hrs', '22.7', 1, '2020-12-13 20:24:54'),
(9, 1, NULL, '10,00', 5, 'LLP-2222', 'Ford', 'Focus', '2020-12-14 10:36:14', NULL, NULL, NULL, 0, NULL),
(10, 2, 1, '15,00', 10, 'POW-9475', 'GM', 'S10', '2020-12-14 10:37:14', '2021-04-23 20:08:42', '3129.31', '46939.65', 1, '2021-04-23 23:08:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formas_pagamentos`
--

CREATE TABLE `formas_pagamentos` (
  `forma_pagamento_id` int(11) NOT NULL,
  `forma_pagamento_nome` varchar(30) NOT NULL,
  `forma_pagamento_ativa` tinyint(1) NOT NULL,
  `forma_pagamento_data_alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formas_pagamentos`
--

INSERT INTO `formas_pagamentos` (`forma_pagamento_id`, `forma_pagamento_nome`, `forma_pagamento_ativa`, `forma_pagamento_data_alteracao`) VALUES
(1, 'Dinheiro', 1, '2020-12-08 16:26:35'),
(2, 'Cartão de crédito', 1, '2020-12-06 19:18:29'),
(4, 'Cartão de débito', 1, '2020-12-06 19:18:41'),
(6, 'Grátis', 0, '2020-12-08 23:08:49'),
(7, 'Cheque', 0, '2020-12-11 16:16:03'),
(8, 'Transferência bancária', 0, '2020-12-11 16:16:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(29, '177.54.47.244', 'admin@admin.com', 1621999061);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalidades`
--

CREATE TABLE `mensalidades` (
  `mensalidade_id` int(11) NOT NULL,
  `mensalidade_mensalista_id` int(11) NOT NULL,
  `mensalidade_precificacao_id` int(11) NOT NULL,
  `mensalidade_valor_mensalidade` varchar(20) NOT NULL,
  `mensalidade_mensalista_dia_vencimento` int(11) NOT NULL,
  `mensalidade_data_vencimento` date NOT NULL,
  `mensalidade_data_pagamento` datetime DEFAULT NULL,
  `mensalidade_status` tinyint(1) NOT NULL,
  `mensalidade_data_alteracao` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mensalidades`
--

INSERT INTO `mensalidades` (`mensalidade_id`, `mensalidade_mensalista_id`, `mensalidade_precificacao_id`, `mensalidade_valor_mensalidade`, `mensalidade_mensalista_dia_vencimento`, `mensalidade_data_vencimento`, `mensalidade_data_pagamento`, `mensalidade_status`, `mensalidade_data_alteracao`) VALUES
(1, 1, 2, '150,00', 26, '2020-12-31', '2020-12-11 15:00:45', 1, '2020-12-11 17:00:45'),
(2, 2, 4, '180,00', 10, '2020-12-10', '2020-12-11 11:59:42', 1, '2020-12-11 16:13:22'),
(3, 3, 2, '150,00', 12, '2020-12-12', '2020-12-12 21:41:46', 1, '2020-12-12 23:41:46'),
(4, 4, 5, '40,00', 17, '2020-12-17', NULL, 0, NULL),
(5, 3, 2, '150,00', 12, '2021-01-12', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensalistas`
--

CREATE TABLE `mensalistas` (
  `mensalista_id` int(11) NOT NULL,
  `mensalista_data_cadastro` timestamp NULL DEFAULT current_timestamp(),
  `mensalista_nome` varchar(45) NOT NULL,
  `mensalista_sobrenome` varchar(150) NOT NULL,
  `mensalista_data_nascimento` date DEFAULT NULL,
  `mensalista_cpf` varchar(20) NOT NULL,
  `mensalista_rg` varchar(20) NOT NULL,
  `mensalista_email` varchar(50) NOT NULL,
  `mensalista_telefone_fixo` varchar(20) DEFAULT NULL,
  `mensalista_telefone_movel` varchar(20) NOT NULL,
  `mensalista_cep` varchar(10) NOT NULL,
  `mensalista_endereco` varchar(155) NOT NULL,
  `mensalista_numero_endereco` varchar(20) NOT NULL,
  `mensalista_bairro` varchar(45) NOT NULL,
  `mensalista_cidade` varchar(105) NOT NULL,
  `mensalista_estado` varchar(2) NOT NULL,
  `mensalista_complemento` varchar(145) NOT NULL,
  `mensalista_ativo` tinyint(1) NOT NULL,
  `mensalista_dia_vencimento` int(11) NOT NULL,
  `mensalista_observacao` tinytext DEFAULT NULL,
  `mensalista_data_alteracao` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensalistas`
--

INSERT INTO `mensalistas` (`mensalista_id`, `mensalista_data_cadastro`, `mensalista_nome`, `mensalista_sobrenome`, `mensalista_data_nascimento`, `mensalista_cpf`, `mensalista_rg`, `mensalista_email`, `mensalista_telefone_fixo`, `mensalista_telefone_movel`, `mensalista_cep`, `mensalista_endereco`, `mensalista_numero_endereco`, `mensalista_bairro`, `mensalista_cidade`, `mensalista_estado`, `mensalista_complemento`, `mensalista_ativo`, `mensalista_dia_vencimento`, `mensalista_observacao`, `mensalista_data_alteracao`) VALUES
(1, '2020-03-13 22:00:02', 'Lucio', 'Souza', '2020-03-13', '359.731.420-19', '334.44644-12', 'lucio@gmail.com', '(35) 3241-2558', '(41) 99999-9999', '80530-000', 'Rua de Curitiba', '45', 'Centro', 'Curitiba', 'PR', 'Ao lado da Farmácia', 1, 26, 'Cobrar quinto dia útil se possível', '2020-12-12 23:34:59'),
(2, '2020-12-08 11:57:26', 'Keila', 'Sousa Neves', '2006-05-08', '125.215.150-00', '24.752.091-3', 'keila@gmail.com', '(34) 9885-6254', '(34) 95586-5965', '38443-227', 'Rua da Saudade', '800', 'Centro', 'Araguari', 'MG', 'Casa', 1, 10, 'Observar sempre o melhor dia de vencimento', '2020-12-12 23:34:38'),
(3, '2020-12-12 23:39:20', 'Anaisa', 'Oliveira da Silva', '2004-06-09', '183.169.120-58', '47.466.663-3', 'anaisa@gmail.com', '(34) 9998-9274', '(34) 99989-2740', '38443-166', 'Rua dos Cedros', '392', 'São Sebastião', 'Araguari', 'MG', 'Fundos', 1, 12, 'Cobrar antes do vencimento', '2020-12-13 01:06:00'),
(4, '2020-12-13 01:16:16', 'Ana Paula', 'Ana', '1983-09-11', '572.577.680-80', '50.614.286-3', 'ana.lindari@gmail.com', '', '(34) 99884-2054', '38440-000', 'Rua Paz no coração', '20', 'São Sebastião', 'Araguari', 'MG', '', 1, 17, '', '2020-12-13 01:16:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `precificacoes`
--

CREATE TABLE `precificacoes` (
  `precificacao_id` int(11) NOT NULL,
  `precificacao_categoria` varchar(50) NOT NULL,
  `precificacao_valor_hora` varchar(50) NOT NULL,
  `precificacao_valor_mensalidade` varchar(20) NOT NULL,
  `precificacao_numero_vagas` int(11) NOT NULL,
  `precificacao_ativa` tinyint(1) NOT NULL,
  `precificacao_data_alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `precificacoes`
--

INSERT INTO `precificacoes` (`precificacao_id`, `precificacao_categoria`, `precificacao_valor_hora`, `precificacao_valor_mensalidade`, `precificacao_numero_vagas`, `precificacao_ativa`, `precificacao_data_alteracao`) VALUES
(1, 'Veiculo Pequeno', '10,00', '130,00', 30, 1, '2021-02-06 22:50:08'),
(2, 'Veiculo Médio', '15,00', '150,00', 30, 1, '2020-12-10 14:24:06'),
(4, 'Veículo grande', '25,00', '180,00', 30, 1, '2020-12-11 13:33:13'),
(5, 'Motos', '5,00', '40,00', 30, 1, '2020-12-10 21:51:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sistema`
--

CREATE TABLE `sistema` (
  `sistema_id` int(11) NOT NULL,
  `sistema_razao_social` varchar(145) DEFAULT NULL,
  `sistema_nome_fantasia` varchar(145) DEFAULT NULL,
  `sistema_cnpj` varchar(25) DEFAULT NULL,
  `sistema_ie` varchar(25) DEFAULT NULL,
  `sistema_telefone_fixo` varchar(25) DEFAULT NULL,
  `sistema_telefone_movel` varchar(25) NOT NULL,
  `sistema_email` varchar(100) DEFAULT NULL,
  `sistema_site_url` varchar(100) DEFAULT NULL,
  `sistema_cep` varchar(25) DEFAULT NULL,
  `sistema_endereco` varchar(145) DEFAULT NULL,
  `sistema_numero` varchar(25) DEFAULT NULL,
  `sistema_cidade` varchar(45) DEFAULT NULL,
  `sistema_estado` varchar(2) DEFAULT NULL,
  `sistema_texto_ticket` tinytext DEFAULT NULL,
  `sistema_data_alteracao` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sistema`
--

INSERT INTO `sistema` (`sistema_id`, `sistema_razao_social`, `sistema_nome_fantasia`, `sistema_cnpj`, `sistema_ie`, `sistema_telefone_fixo`, `sistema_telefone_movel`, `sistema_email`, `sistema_site_url`, `sistema_cep`, `sistema_endereco`, `sistema_numero`, `sistema_cidade`, `sistema_estado`, `sistema_texto_ticket`, `sistema_data_alteracao`) VALUES
(1, 'System Car', 'System Car Estacionamentos', '80.838.809/0001-26', '683.90228-49', '(34) 3241-2525', '(34) 99989-2740', 'visaotec.com@gmail.com', 'www.nacionalvendas.com.br', '38443-166', 'Av das Palmeiras', '1005', 'Araguari', 'MG', '&quot;Um novo conceito em estacionamentos.&quot;', '2020-12-09 20:58:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `data_ultima_alteracao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `data_ultima_alteracao`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$A0fKdmYmP.rKidq4BoYslO7bQE74VEfhXeI6lK.3zOXh/h/jbx8e6', 'visaotec.com@gmail.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1621999067, 1, 'Isaias', 'Oliveira', 'ADMIN', '0', '2021-05-26 03:17:47'),
(2, '127.0.0.1', 'Usuário', '$2y$10$f7WDTR4e0.gVHSI21T0oOOy9YjIiJ2BGBOPZfRtvFsf3o5y.UtxU2', 'usuario@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1607120040, 1617237060, 1, 'Usuário', 'Usuario', NULL, NULL, '2021-04-01 00:31:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(8, 1, 1),
(12, 2, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estacionar`
--
ALTER TABLE `estacionar`
  ADD PRIMARY KEY (`estacionar_id`);

--
-- Índices para tabela `formas_pagamentos`
--
ALTER TABLE `formas_pagamentos`
  ADD PRIMARY KEY (`forma_pagamento_id`);

--
-- Índices para tabela `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mensalidades`
--
ALTER TABLE `mensalidades`
  ADD PRIMARY KEY (`mensalidade_id`);

--
-- Índices para tabela `mensalistas`
--
ALTER TABLE `mensalistas`
  ADD PRIMARY KEY (`mensalista_id`);

--
-- Índices para tabela `precificacoes`
--
ALTER TABLE `precificacoes`
  ADD PRIMARY KEY (`precificacao_id`);

--
-- Índices para tabela `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`sistema_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Índices para tabela `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estacionar`
--
ALTER TABLE `estacionar`
  MODIFY `estacionar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `formas_pagamentos`
--
ALTER TABLE `formas_pagamentos`
  MODIFY `forma_pagamento_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `mensalidades`
--
ALTER TABLE `mensalidades`
  MODIFY `mensalidade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `mensalistas`
--
ALTER TABLE `mensalistas`
  MODIFY `mensalista_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `precificacoes`
--
ALTER TABLE `precificacoes`
  MODIFY `precificacao_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `sistema`
--
ALTER TABLE `sistema`
  MODIFY `sistema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
