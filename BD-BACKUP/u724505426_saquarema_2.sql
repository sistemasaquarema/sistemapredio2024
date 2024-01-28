-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Maio-2023 às 05:07
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u724505426_saquarema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

CREATE TABLE `aluguel` (
  `id` int(11) NOT NULL,
  `rg` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `apartamento` int(11) NOT NULL,
  `inquilinos` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `data_hora_atual` date NOT NULL,
  `data_inicio_aluguel` date NOT NULL,
  `data_fim_aluguel` date NOT NULL,
  `tipo_aluguel` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `aluguel`
--

INSERT INTO `aluguel` (`id`, `rg`, `apartamento`, `inquilinos`, `data_hora_atual`, `data_inicio_aluguel`, `data_fim_aluguel`, `tipo_aluguel`) VALUES
(3, '53597002', 106, 'jefferson, neusa', '2023-03-04', '2023-03-08', '2023-03-10', 'Temporada'),
(4, '53597002x', 107, 'Bruno Souza Menossi Pereira', '2023-03-11', '2023-03-04', '2023-03-05', 'Temporada'),
(7, '43891381273', 107, 'Willian ', '2023-05-22', '2023-06-01', '2024-06-01', 'Fixo'),
(8, '493280431', 106, 'Priscila', '2023-05-22', '2023-06-11', '2024-06-01', 'Fixo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencias`
--

CREATE TABLE `ocorrencias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `descri` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `apartamento` int(11) NOT NULL,
  `morador` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `data_hora_atual` date NOT NULL,
  `data_ocorrencia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `ocorrencias`
--

INSERT INTO `ocorrencias` (`id`, `titulo`, `descri`, `apartamento`, `morador`, `data_hora_atual`, `data_ocorrencia`) VALUES
(5, 'Lixo no chao', 'Morador jogou lixo no chao', 107, 'Bruno Menossi', '2023-05-22', '2023-05-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sugestao`
--

CREATE TABLE `sugestao` (
  `id` int(11) NOT NULL,
  `assunto` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `sugestao` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sugestao`
--

INSERT INTO `sugestao` (`id`, `assunto`, `sugestao`, `email`) VALUES
(6, 'Baratinhas', 'Existem muitas baratinhas no prédio ', 'menossisouza@gmail.com'),
(7, 'Parabéns ', 'Parabéns pelo site, ficou top!', 'guilhermenogueiras@gmail.com'),
(8, 'Vaga de carro', 'Vaga de carro com alguma opção de luz vermelho ocupando verde livre ', 'elianenegabittencourt@hotmail.com'),
(9, 'Monitoramento ', 'Legal colocar área de acesso a monitoramento do prédio,', 'leandromenossi@yahoo.com.br'),
(10, 'Login', 'Não esquece de colocar opção de recuperação de senhaaaa hahahaha. Eu na proxima vez que tentar, certamente não vou lembrar.', 'raul.dg.brandao@icloud.com'),
(11, 'O sindico', 'O sindico é chato pkrl', 'menossisouza@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ap` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adm` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `ap`, `email`, `senha`, `adm`) VALUES
('Bruno Menossi', 107, 'menossisouza@gmail.com', 'a31afa4209f55b63087c2d47d16aa910', 1),
('Priscila de Freitas Uchoa', 107, 'pfuchoa2@gmail.com', 'b162a3491dedcb1df0089d7bb02fd731', 1),
('Mônica Uchôa ', 107, 'monikauchoa@gmail.com', '3b80213d0a5d739a891ecd49ec85775c', 0),
('Guilherme Nogueira de Resende ', 1, 'guilhermenogueiras@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0),
('Eliane aparecida bittencourt souza pereira', 99, 'elianenegabittencourt@hotmail.com', 'bf8cf3d927a36ac335d433502fb1a603', 0),
('Odair Leandro menossi Pereira ', 28, 'leandromenossi@yahoo.com.br', '68056f72e88aaaf7ba60816b358c48b1', 0),
('Raul Brandão', 13, 'raul.dg.brandao@icloud.com', '1791962eadeadcd9001ce88815698370', 0),
('Menossisouza', 107, 'bruno.menossi@maxmatters.com', 'a31afa4209f55b63087c2d47d16aa910', 0),
('Eliane', 99, 'elianenegabittencourt@hotmail.com', 'bf8cf3d927a36ac335d433502fb1a603', 0),
('Luciano Souza ', 705, 'lucianosouza382@gmail.com', '21f4d5cba574eb4c7928950aaf500d1b', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
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
-- AUTO_INCREMENT for table `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sugestao`
--
ALTER TABLE `sugestao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
