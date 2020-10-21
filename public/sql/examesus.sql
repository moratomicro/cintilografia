-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03-Out-2019 às 19:06
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `examesus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pacienteNome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dtNasc` date NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procedimento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valorUnitario` decimal(10,0) NOT NULL,
  `dtExame` date NOT NULL,
  `horario` time NOT NULL,
  `mes` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`id`, `codigo`, `nome`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aparelho Cardiovascular', '2019-10-01 15:38:11', '2019-10-01 15:38:11'),
(2, 2, 'Aparelho Digestivo', '2019-10-01 15:38:27', '2019-10-01 15:38:27'),
(3, 3, 'Aparelho Endócrino', '2019-10-01 15:38:44', '2019-10-01 15:38:44'),
(4, 4, 'Aparelho Geniturinário', '2019-10-01 15:39:06', '2019-10-01 15:39:06'),
(5, 5, 'Aparelho Esquelético', '2019-10-01 15:39:25', '2019-10-01 15:39:25'),
(6, 6, 'Aparelho Nervoso', '2019-10-01 15:39:39', '2019-10-01 15:40:28'),
(7, 7, 'Aparelho Respiratório', '2019-10-01 15:40:44', '2019-10-01 15:40:44'),
(8, 8, 'Aparelho Hematológico', '2019-10-01 15:41:07', '2019-10-01 15:41:07'),
(9, 9, 'Outros Métodos De Diagnóstico Em Medicina Nuclear In Vivo', '2019-10-01 15:41:42', '2019-10-01 15:41:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_09_13_184123_create_municipios_table', 1),
(20, '2019_09_13_223714_create_paciente_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `municipio`
--

CREATE TABLE `municipio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `municipio`
--

INSERT INTO `municipio` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'BRAZÓPOLIS', '2019-10-01 19:43:29', '2019-10-01 19:43:29'),
(2, 'CONCEIÇÃO DAS PEDRAS', '2019-10-01 19:43:39', '2019-10-01 19:43:39'),
(3, 'CONSOLAÇÃO', '2019-10-01 19:43:44', '2019-10-01 19:43:44'),
(4, 'DELFIM MOREIRA', '2019-10-01 19:43:51', '2019-10-01 19:43:51'),
(5, 'GONÇALVES', '2019-10-01 19:43:55', '2019-10-01 19:43:55'),
(6, 'ITAJUBÁ', '2019-10-01 19:44:03', '2019-10-01 19:44:03'),
(7, 'MARIA DA FÉ', '2019-10-01 19:44:09', '2019-10-01 19:44:09'),
(8, 'MARMELÓPOLIS', '2019-10-01 19:44:18', '2019-10-01 19:44:18'),
(9, 'PARAISÓPOLIS', '2019-10-01 19:44:24', '2019-10-01 19:44:24'),
(10, 'PEDRALVA', '2019-10-01 19:44:31', '2019-10-01 19:44:31'),
(11, 'PIRANGUÇU', '2019-10-01 19:44:39', '2019-10-01 19:44:39'),
(12, 'PIRANGUINHO', '2019-10-01 19:44:44', '2019-10-01 19:44:44'),
(13, 'SÃO JOSÉ DO ALEGRE', '2019-10-01 19:44:51', '2019-10-01 19:44:51'),
(14, 'SAPUCAÍ MIRIM', '2019-10-01 19:45:01', '2019-10-01 19:45:01'),
(15, 'WENCESLAU BRÁZ', '2019-10-01 19:45:11', '2019-10-01 19:45:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datanasc` date NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `datanasc`, `municipio`, `created_at`, `updated_at`) VALUES
(1, 'Reine Alexandre Morato', '1975-05-14', 'ITAJUBÁ', '2019-10-01 19:45:33', '2019-10-03 19:40:31'),
(2, 'Ana Paula Da Silva Morato', '0981-11-21', 'ITAJUBÁ', '2019-10-01 19:45:53', '2019-10-03 19:40:36'),
(3, 'Letícia Da Silva Morato', '2008-06-11', 'ITAJUBÁ', '2019-10-01 19:46:17', '2019-10-03 19:40:41'),
(4, 'Luiz Alexandre Morato', '2014-04-19', 'ITAJUBÁ', '2019-10-01 19:46:40', '2019-10-03 19:40:47'),
(5, 'Rosilene Morato Da Silva Miguel', '1971-07-06', 'PEDRALVA', '2019-10-01 19:47:20', '2019-10-03 19:40:52'),
(6, 'Ronaldo Morato', '1976-12-20', 'ITAJUBÁ', '2019-10-02 17:15:23', '2019-10-03 19:40:57'),
(7, 'João daS Dores', '1997-08-16', 'MARIA DA FÉ', '2019-10-02 17:26:07', '2019-10-03 19:41:07'),
(8, 'Paulo Renato da Silva', '1989-12-24', 'ITAJUBÁ', '2019-10-03 19:41:38', '2019-10-03 19:41:38'),
(9, 'André Luiz da Silva', '1997-10-16', 'ITAJUBÁ', '2019-10-03 19:42:25', '2019-10-03 19:42:25'),
(10, 'Cristal da Silva Morato', '2017-06-16', 'ITAJUBÁ', '2019-10-03 19:42:56', '2019-10-03 19:42:56'),
(11, 'João Gilberto de Souza', '1990-05-01', 'PIRANGUÇU', '2019-10-03 19:43:21', '2019-10-03 19:43:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimento`
--

CREATE TABLE `procedimento` (
  `id` bigint(20) NOT NULL,
  `cod_sus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grupo` int(11) NOT NULL,
  `valor` decimal(7,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `procedimento`
--

INSERT INTO `procedimento` (`id`, `cod_sus`, `nome`, `grupo`, `valor`, `created_at`, `updated_at`) VALUES
(1, '02.08.01.001-7', 'CINTILOGRAFIA DE CORAÇÃO C/ GÁLIO 67', 1, '457.55', '2019-10-01 17:17:37', '2019-10-03 19:49:18'),
(2, '02.08.01.002-5', 'CINTILOGRAFIA DE MIOCÁRDIO P/ AVALIAÇÃO DA PERFUSÃO EM SITUAÇÃO DE ESTRESSE (MÍNIMO 3 PROJEÇÕES)', 1, '408.52', '2019-10-01 19:49:53', '2019-10-03 19:49:24'),
(3, '02.08.01.003-3', 'CINTILOGRAFIA DE MIOCÁRDIO P/ AVALIAÇÃO DA PERFUSÃO EM SITUAÇÃO DE REPOUSO (MÍNIMO 3 PROJEÇÕES)', 1, '383.07', '2019-10-01 19:54:24', '2019-10-03 19:49:28'),
(4, '02.08.01.004-1', 'CINTILOGRAFIA DE MIOCÁRDIO P/ LOCALIZAÇÃO DE NECROSE (MÍNIMO 3 PROJEÇÕES)', 1, '166.47', '2019-10-01 19:55:39', '2019-10-03 19:49:32'),
(5, '02.08.01.005-0', 'CINTILOGRAFIA P/ AVALIAÇÃO DE FLUXO SANGUÍNEO DE EXTREMIDADES', 1, '114.02', '2019-10-01 19:56:16', '2019-10-03 19:49:36'),
(6, '02.08.01.006-8', 'CINTILOGRAFIA P/ QUALIFICAÇÃO DE SHUNT EXTRACARDIACO', 1, '142.57', '2019-10-01 19:56:58', '2019-10-03 19:49:41'),
(7, '02.08.01.007-6', 'CINTILOGRAFIA SINCRONIZADA DE CAMARAS CÁRDIÁCAS EM SITUAÇÃO DE ESFORÇO', 1, '214.85', '2019-10-01 19:57:39', '2019-10-03 19:49:46'),
(8, '02.08.01.008-4', 'CINTILOGRAFIA SINCRONIZADA DE CAMARAS CARDIÁCAS EM SITUAÇÃO DE REPOUSO (VENTRICULOGRAFIA)', 1, '176.72', '2019-10-01 19:58:31', '2019-10-03 19:49:51'),
(9, '02.08.01.009-2', 'DETERMINAÇÃO DE FLUXO SANGUÍNEO REGIONAL', 1, '123.93', '2019-10-01 19:59:07', '2019-10-03 19:49:56'),
(10, '02.08.02.001-2', 'CINTILOGRAFIA DE FÍGADO E BAÇO (MÍNIMO 5 IMAGENS)', 2, '133.26', '2019-10-01 19:59:50', '2019-10-03 19:51:21'),
(11, '02.08.02.002-0', 'CINTILOGRAFIA DE FÍGADO E VIAS BILIARES', 2, '187.93', '2019-10-01 20:00:21', '2019-10-03 20:03:09'),
(12, '02.08.02.003-9', 'CINTILOGRAFIA DE GLÂNDULAS SALIVARES C/ OU S/ ESTÍMULO', 2, '87.89', '2019-10-01 20:01:08', '2019-10-03 20:03:19'),
(13, '02.08.02.005-5', 'CINTILOGRAFIA P/ ESTUDO DE TRÂNSITO ESOFÁGICO (LÍQUIDO)', 2, '135.38', '2019-10-01 20:02:16', '2019-10-03 20:03:22'),
(14, '02.08.02.006-3', 'CINTILOGRAFIA P/ ESTUDO DE TRÂNSITO ESOFÁGICO (SEMI-SÓLIDO)', 2, '135.38', '2019-10-01 20:02:57', '2019-10-03 20:03:26'),
(15, '02.08.02.007-1', 'CINTILOGRAFIA P/ ESTUDO DE TRÂNSITO GASTRICO', 2, '144.22', '2019-10-01 20:03:29', '2019-10-03 20:03:30'),
(16, '02.08.02.008-0', 'CINTILOGRAFIA P/ PESQUISA DE DIVERTICULOSE DE MECKEL', 2, '144.86', '2019-10-01 20:04:06', '2019-10-03 20:03:33'),
(17, '02.08.02.009-8', 'CINTILOGRAFIA P/ PESQUISA DE HEMORRAGIA DIGESTIVA ATIVA', 2, '157.23', '2019-10-01 20:04:40', '2019-10-03 20:03:37'),
(18, '02.08.02.010-1', 'CINTILOGRAFIA P/ PESQUISA DE HEMORRAGIA DIGESTIVA NÃO ATIVA', 2, '310.82', '2019-10-01 20:05:29', '2019-10-03 20:03:41'),
(19, '02.08.02.011-0', 'CINTILOGRAFIA P/ PESQUISA DE REFLUXO GASTRO-ESOFÁGICO', 2, '135.38', '2019-10-01 20:06:03', '2019-10-03 20:03:45'),
(20, '02.08.02.012-8', 'IMUNO-CINTILOGRAFIA (ANTICORPO MONOCLONAL)', 2, '1103.26', '2019-10-01 20:06:44', '2019-10-03 20:03:50'),
(21, '02.08.03.001-8', 'CINTILOGRAFIA DE PARATIREÓIDES', 3, '324.54', '2019-10-01 20:07:17', '2019-10-03 20:01:35'),
(22, '02.08.03.002-6', 'CINTILOGRAFIA DE TIREÓIDE C/ OU S/ CAPTAÇÃO', 3, '77.28', '2019-10-01 20:07:47', '2019-10-03 20:01:39'),
(23, '02.08.03.003-4', 'CINTILOGRAFIA DE TIREÓIDE C/ TESTE DE SUPRESSÃO / ESTÍMULO', 3, '107.30', '2019-10-01 20:08:33', '2019-10-03 20:01:43'),
(24, '02.08.03.004-2', 'CINTILOGRAFIA P/ PESQUISA DO CORPO INTEIRO', 3, '338.70', '2019-10-01 20:09:11', '2019-10-03 20:01:47'),
(25, '02.08.03.005-0', 'TESTE DO PERCLORATO C/ RADIOISOTOPO', 3, '107.40', '2019-10-01 20:09:52', '2019-10-03 20:01:51'),
(26, '02.08.04.002-1', 'CINTILOGRAFIA DE RIM C/ GÁLIO 67', 4, '457.55', '2019-10-01 20:10:20', '2019-10-03 19:55:41'),
(27, '02.08.04.003-0', 'CINTILOGRAFIA DE TESTÍCULO E BOLSA ESCROTAL', 4, '108.94', '2019-10-01 20:10:59', '2019-10-03 19:55:44'),
(28, '02.08.04.005-6', 'CINTILOGRAFIA RENAL/RENOGRAMA (QUALITATIVA E/OU QUANTITATIVA) - DMSA', 4, '133.03', '2019-10-01 20:11:53', '2019-10-03 19:55:48'),
(29, '02.08.04.006-4', 'CISTOCINTILOGRAFIA DIRETA', 4, '122.97', '2019-10-01 20:12:27', '2019-10-03 19:55:52'),
(30, '02.08.04.007-2', 'CISTOCINTILOGRAFIA INDIRETA', 4, '144.50', '2019-10-01 20:12:51', '2019-10-03 19:55:55'),
(31, '02.08.04.008-0', 'DETERMINAÇÃO DE FILTRAÇÃO GLOMERULAR', 4, '63.22', '2019-10-01 20:13:24', '2019-10-03 19:55:07'),
(32, '02.08.04.009-9', 'DETERMINAÇÃO DE FLUXO PLASMÁTICO RENAL', 4, '63.22', '2019-10-01 20:13:53', '2019-10-03 19:55:11'),
(33, '02.08.04.010-2', 'ESTUDO RENAL DINÂMICO C/ OU S/ DIURÉTICO - DTPA', 4, '165.24', '2019-10-01 20:14:34', '2019-10-03 19:55:14'),
(34, '02.08.05.001-9', 'CINTILOGRAFIA DE ARTICULAÇÕES E/OU EXTREMIDADES E/OU OSSO', 5, '180.32', '2019-10-01 20:15:24', '2019-10-03 19:54:44'),
(35, '02.08.05.003-5', 'CINTILOGRAFIA DE OSSOS C/ OU S/ FLUXO SANGUÍNEO (CORPO INTEIRO)', 5, '190.99', '2019-10-01 20:16:28', '2019-10-03 19:54:41'),
(36, '02.08.05.004-3', 'CINTILOGRAFIA DE SEGMENTO OSSOS C/ GALIO 67', 5, '457.55', '2019-10-01 20:17:33', '2019-10-03 19:54:38'),
(37, '02.08.06.001-4', 'CINTILOGRAFIA DE PERFUSÃO CEREBRAL C/ TÁLIO (SPCTO)', 6, '438.01', '2019-10-01 20:18:16', '2019-10-03 19:54:10'),
(38, '02.08.06.002-2', 'CISTERNOCINTILOGRAFIA (INCLUÍNDO PESQUISA E/OU AVALIAÇÃO DO TRÂNSITO LIQUÓRICO)', 6, '205.34', '2019-10-01 20:19:14', '2019-10-03 19:54:14'),
(39, '02.08.06.003-0', 'ESTUDO DE FLUXO SANGUÍNEO CEREBRAL', 6, '119.16', '2019-10-01 20:19:51', '2019-10-03 19:54:18'),
(40, '020.08.07.001-0', 'CINTILOGRAFIA DE PULMÃO C/ GÁLIO 67', 7, '457.55', '2019-10-01 20:20:20', '2019-10-03 19:53:41'),
(41, '02.08.07.002-8', 'CINTILOGRAFIA DE PULMÃO P/ PESQUISA DE ASPIRAÇÃO', 7, '127.51', '2019-10-01 20:20:57', '2019-10-03 19:53:02'),
(42, '02.08.07.003-6', 'CINTILOGRAFIA DE PULMÃO POR INALAÇÃO (MÍNIMO 2 PROJEÇÕES)', 7, '128.12', '2019-10-01 20:21:42', '2019-10-03 19:53:06'),
(43, '02.08.07.004-4', 'CINTILOGRAFIA DE PULMÃO POR PERFUSÃO (MÍNIMO 4 PROJEÇÕES)', 7, '130.50', '2019-10-01 20:22:27', '2019-10-03 19:53:11'),
(44, '02.08.08.001-5', 'CINTILOGRAFIA DE SISTEMA RETICULO-ENDOTELIAL (MEDULA ÓSSEA)', 8, '112.61', '2019-10-01 20:23:06', '2019-10-03 19:52:40'),
(45, '02.08.08.002-3', 'DEMONSTRAÇÃO DE SEQUESTRO DE HEMACIAS PELO BAÇO (C/ RADIOISOTOPOS)', 8, '97.37', '2019-10-01 20:23:47', '2019-10-03 19:52:37'),
(46, '02.08.08.003-1', 'DETERMINAÇÃO DE SOBREVIDA DE HEMACIAS (C/ RADIOISOTOPOS)', 8, '54.36', '2019-10-01 20:24:28', '2019-10-03 19:52:33'),
(47, '02.08.08.004-0', 'LINFOCINTILOGRAFIA', 8, '141.33', '2019-10-01 20:24:52', '2019-10-03 19:52:29'),
(48, '02.08.09.001-0', 'CINTILOGRAFIA DE CORPO INTEIRO C/ GÁLIO 67 P/ PESQUISA DE NEOPLASIAS', 9, '906.80', '2019-10-01 20:25:31', '2019-10-03 19:51:55'),
(49, '02.08.09.002-9', 'CINTILOGRAFIA DE GLÂNDULA LACRIMAL (DACRIOCINTILOGRAFIA)', 9, '66.23', '2019-10-01 20:26:17', '2019-10-03 19:51:58'),
(50, '02.08.09.003-7', 'CINTILOGRAFIA DE MAMA (BILATERAL)', 9, '289.43', '2019-10-01 20:26:50', '2019-10-03 19:52:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `procedimento`
--
ALTER TABLE `procedimento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `procedimento`
--
ALTER TABLE `procedimento`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
