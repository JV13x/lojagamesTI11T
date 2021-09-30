-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Set-2021 às 19:15
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlojagamesti11t`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `codCli` int(4) NOT NULL,
  `codUsuFK` int(4) NOT NULL,
  `nomeCli` varchar(50) NOT NULL,
  `cpfCli` char(14) NOT NULL,
  `foneCli` char(12) NOT NULL,
  `datanasCli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionarios`
--

CREATE TABLE `tbfuncionarios` (
  `codFun` int(4) NOT NULL,
  `codUsuFK` int(4) NOT NULL,
  `nomeFun` varchar(50) NOT NULL,
  `funcaoFun` varchar(10) NOT NULL,
  `foneFun` char(12) NOT NULL,
  `datanasFun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbjogos`
--

CREATE TABLE `tbjogos` (
  `codJog` int(4) NOT NULL,
  `nomeJog` varchar(30) NOT NULL,
  `tamanhoJog` char(10) NOT NULL,
  `precoJog` decimal(6,2) NOT NULL,
  `requisitosJog` varchar(500) NOT NULL,
  `consoleJog` varchar(100) NOT NULL,
  `classificacaoJog` varchar(10) NOT NULL,
  `avaliacaoJog` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbjogos`
--

INSERT INTO `tbjogos` (`codJog`, `nomeJog`, `tamanhoJog`, `precoJog`, `requisitosJog`, `consoleJog`, `classificacaoJog`, `avaliacaoJog`) VALUES
(1, 'Call of Duty Black Ops 2', '16GB', '54.33', 'Processador: Intel Core 2 Duo E8200 2.66 GHz ou AMD Phenom X3 8750 2.4 GHz. Memória RAM: 2 GB para sistemas 32-bits ou 4 GB para sistemas 64-bits. Placa de vídeo: NVIDIA GeForce 8800GT 512 MB ou ATI Radeon HD 3870 512 MB.', 'xbox,pc,playstation', '18 anos', 5),
(2, 'mario', '15gb', '50.00', 'sei la', 'nintendo', 'livre', 5),
(3, 'mario', '15gb', '50.00', 'sei la', 'nintendo', 'livre', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpedidos`
--

CREATE TABLE `tbpedidos` (
  `codPed` int(4) NOT NULL,
  `codCliFK` int(4) NOT NULL,
  `codFunFK` int(4) NOT NULL,
  `codJogFK` int(4) NOT NULL,
  `qtdJogoped` int(6) NOT NULL,
  `totalJogoped` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `codUsu` int(4) NOT NULL,
  `emailUsu` varchar(60) NOT NULL,
  `senhaUsu` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`codCli`),
  ADD KEY `relacaoCodUsuCodUsuFK` (`codUsuFK`);

--
-- Índices para tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  ADD PRIMARY KEY (`codFun`),
  ADD KEY `relacaoCodUsuCodUsuFK2` (`codUsuFK`);

--
-- Índices para tabela `tbjogos`
--
ALTER TABLE `tbjogos`
  ADD PRIMARY KEY (`codJog`);

--
-- Índices para tabela `tbpedidos`
--
ALTER TABLE `tbpedidos`
  ADD PRIMARY KEY (`codPed`),
  ADD KEY `relacaoCodCliCodCliFK` (`codCliFK`),
  ADD KEY `relacaoCodFunCodFunFK` (`codFunFK`),
  ADD KEY `relacaoCodJogCodJogFK` (`codJogFK`);

--
-- Índices para tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`codUsu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `codCli` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  MODIFY `codFun` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbjogos`
--
ALTER TABLE `tbjogos`
  MODIFY `codJog` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbpedidos`
--
ALTER TABLE `tbpedidos`
  MODIFY `codPed` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `codUsu` int(4) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD CONSTRAINT `relacaoCodUsuCodUsuFK` FOREIGN KEY (`codUsuFK`) REFERENCES `tbusuarios` (`codUsu`);

--
-- Limitadores para a tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  ADD CONSTRAINT `relacaoCodUsuCodUsuFK2` FOREIGN KEY (`codUsuFK`) REFERENCES `tbusuarios` (`codUsu`);

--
-- Limitadores para a tabela `tbpedidos`
--
ALTER TABLE `tbpedidos`
  ADD CONSTRAINT `relacaoCodCliCodCliFK` FOREIGN KEY (`codCliFK`) REFERENCES `tbclientes` (`codCli`),
  ADD CONSTRAINT `relacaoCodFunCodFunFK` FOREIGN KEY (`codFunFK`) REFERENCES `tbfuncionarios` (`codFun`),
  ADD CONSTRAINT `relacaoCodJogCodJogFK` FOREIGN KEY (`codJogFK`) REFERENCES `tbjogos` (`codJog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
