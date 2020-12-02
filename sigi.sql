-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07-Out-2020 às 21:25
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `diretoria`
--

DROP TABLE IF EXISTS `diretoria`;
CREATE TABLE IF NOT EXISTS `diretoria` (
  `id_dir` int(11) NOT NULL AUTO_INCREMENT,
  `nome_dir` varchar(45) NOT NULL,
  PRIMARY KEY (`id_dir`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `diretoria`
--

INSERT INTO `diretoria` (`id_dir`, `nome_dir`) VALUES
(1, 'Financeiro'),
(2, 'Marketing'),
(3, 'Projetos'),
(4, 'Qualidade'),
(5, 'Recursos Humanos'),
(6, 'Presidência');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dir_usuario`
--

DROP TABLE IF EXISTS `dir_usuario`;
CREATE TABLE IF NOT EXISTS `dir_usuario` (
  `Nro_USP` int(11) NOT NULL,
  `id_dir` int(11) NOT NULL,
  `termo_adesao` varchar(500) NOT NULL,
  `termo_desl` varchar(500) DEFAULT NULL,
  `dta_adesao` date NOT NULL,
  `dta_desl` date DEFAULT NULL,
  PRIMARY KEY (`Nro_USP`,`id_dir`),
  KEY `id_dir_idx` (`id_dir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dir_usuario`
--

INSERT INTO `dir_usuario` (`Nro_USP`, `id_dir`, `termo_adesao`, `termo_desl`, `dta_adesao`, `dta_desl`) VALUES
(4722910, 2, '4722910_adesao.pdf', NULL, '2019-01-01', NULL),
(8062964, 4, '8062964_adesao.pdf', NULL, '2020-01-01', NULL),
(10255880, 3, '10255880_adesao.pdf', NULL, '2017-07-01', NULL),
(10277190, 6, '10277190_adesao.pdf', NULL, '2020-01-01', NULL),
(10277248, 2, '10277248_adesao.pdf', NULL, '2018-01-01', NULL),
(10277314, 1, '10277314_adesao.pdf', NULL, '2018-07-01', NULL),
(10716783, 1, '10716783_adesao.pdf', NULL, '2020-01-01', NULL),
(10797843, 3, '10797843_adesao.pdf', NULL, '2018-01-01', NULL),
(10871957, 5, '10871957_adesao.pdf', NULL, '2018-01-01', NULL),
(11236192, 4, '11236192_adesao.pdf', NULL, '2019-01-01', NULL),
(11236230, 3, '11236230_adesao.pdf', NULL, '2019-01-01', NULL),
(11273868, 3, '11273868_adesao.pdf', NULL, '2019-07-01', NULL),
(11280140, 3, '11280140_adesao.pdf', NULL, '2020-01-01', NULL),
(11300429, 5, '11300429_adesao.pdf', NULL, '2019-01-01', NULL),
(11812500, 4, '11812500_adesao.pdf', NULL, '2020-01-01', NULL),
(11812517, 3, '11812517_adesao.pdf', NULL, '2020-01-01', NULL),
(11819111, 1, '11819111_adesao.pdf', NULL, '2020-01-01', NULL),
(11844882, 3, '11844882_adesao.pdf', NULL, '2020-01-01', NULL),
(11858411, 5, '11858411_adesao.pdf', NULL, '2020-01-01', NULL),
(11882707, 3, '11882707_adesao.pdf', NULL, '2020-01-01', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

DROP TABLE IF EXISTS `documento`;
CREATE TABLE IF NOT EXISTS `documento` (
  `id_doc` int(11) NOT NULL AUTO_INCREMENT,
  `link_doc` varchar(500) NOT NULL,
  `nome_doc` varchar(45) NOT NULL,
  `dta_doc` date NOT NULL,
  `id_dir` int(11) DEFAULT NULL,
  `id_proj` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_doc`),
  KEY `id_dir_idx` (`id_dir`),
  KEY `id_proj_idx` (`id_proj`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `documento`
--

INSERT INTO `documento` (`id_doc`, `link_doc`, `nome_doc`, `dta_doc`, `id_dir`, `id_proj`) VALUES
(1, 'https://drive.google.com/file/d/1PgcdHNmNAk-8g7s64yJfCMK8EJbdDvT3/view?usp=sharing', 'Reuniao Sirius', '2020-08-13', NULL, NULL),
(2, 'https://docs.google.com/document/d/16uKAtkD-UJo5KZBKyLzbfRnEtRPCSia8scPTUryDk2g/edit?usp=sharing', 'Reuniao Diretoria', '2020-08-19', 6, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `dta_evento` date NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `ata` varchar(500) DEFAULT NULL,
  `obrigatoriedade` varchar(30) NOT NULL,
  `id_dir` int(11) NOT NULL,
  PRIMARY KEY (`id_evento`),
  KEY `id_dir_idx` (`id_dir`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `dta_evento`, `categoria`, `ata`, `obrigatoriedade`, `id_dir`) VALUES
(1, '2020-08-25', 'Reunião Ordinária', NULL, 'Sim', 6),
(2, '2020-08-22', 'Reunião Qualidade', 'https://docs.google.com/document/d/1-Ik2xNtPvPvvmq_4Lo-fEYgulTudadnoanOhaxJu5tk/edit?usp=sharing', 'Sim', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento_usuario`
--

DROP TABLE IF EXISTS `evento_usuario`;
CREATE TABLE IF NOT EXISTS `evento_usuario` (
  `Nro_USP` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `presenca` tinyint(1) NOT NULL,
  `justificativa` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Nro_USP`,`id_evento`),
  KEY `id_evento_idx` (`id_evento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `evento_usuario`
--

INSERT INTO `evento_usuario` (`Nro_USP`, `id_evento`, `presenca`, `justificativa`) VALUES
(8062964, 2, 1, NULL),
(10797843, 2, 1, NULL),
(11236192, 2, 1, NULL),
(11812500, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int(11) NOT NULL AUTO_INCREMENT,
  `link_feed` varchar(500) NOT NULL,
  `dta_feed` date NOT NULL,
  `Nro_USP` int(11) NOT NULL,
  PRIMARY KEY (`id_feedback`),
  KEY `Nro_USP_idx` (`Nro_USP`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `link_feed`, `dta_feed`, `Nro_USP`) VALUES
(1, 'https://google.com.br', '2019-04-13', 11236192),
(2, 'https://google.com.br', '2020-08-13', 10277190);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ferramenta`
--

DROP TABLE IF EXISTS `ferramenta`;
CREATE TABLE IF NOT EXISTS `ferramenta` (
  `id_ferramenta` int(11) NOT NULL AUTO_INCREMENT,
  `id_dir` int(11) NOT NULL,
  `nome_ferramenta` varchar(100) NOT NULL,
  `link_ferramenta` varchar(500) NOT NULL,
  PRIMARY KEY (`id_ferramenta`,`id_dir`),
  KEY `id_dir_idx` (`id_dir`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ferramenta`
--

INSERT INTO `ferramenta` (`id_ferramenta`, `id_dir`, `nome_ferramenta`, `link_ferramenta`) VALUES
(1, 2, 'Canva', 'https://www.canva.com/pt_br/'),
(2, 5, 'Balsamiq', 'https://drive.google.com/file/d/1xshBGvUJ1xipWIFByyIkCmTDVJqPQudN/view?usp=sharing');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fluxo_de_caixa`
--

DROP TABLE IF EXISTS `fluxo_de_caixa`;
CREATE TABLE IF NOT EXISTS `fluxo_de_caixa` (
  `id_caixa` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_caixa` varchar(45) NOT NULL,
  `motivo` varchar(500) NOT NULL,
  `dta_caixa` date NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `Nro_USP` int(11) NOT NULL,
  PRIMARY KEY (`id_caixa`),
  KEY `Nro_USP_idx` (`Nro_USP`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fluxo_de_caixa`
--

INSERT INTO `fluxo_de_caixa` (`id_caixa`, `titulo_caixa`, `motivo`, `dta_caixa`, `valor`, `Nro_USP`) VALUES
(1, 'Saldo do ano anterior', 'Mudança de gestão', '2020-01-01', '1242.85', 10277314),
(2, 'Troca de gestão', 'Troca de gestão realizada no cartório', '2020-02-01', '-81.90', 10277314),
(3, 'Taxa de funcionamento de 2020', 'Taxa paga para a prefeitura', '2020-03-01', '-36.64', 10277314),
(4, 'Locaweb', 'Conta do servidor da Locaweb', '2020-05-01', '-391.22', 10277314),
(5, 'Nexos', 'Manutenção feita no site da Nexos', '2020-05-02', '75.00', 10277314);

-- --------------------------------------------------------

--
-- Estrutura da tabela `gerente_diretoria`
--

DROP TABLE IF EXISTS `gerente_diretoria`;
CREATE TABLE IF NOT EXISTS `gerente_diretoria` (
  `id_dir` int(11) NOT NULL,
  `Nro_USP` int(11) NOT NULL,
  `dta_inicio_dir` date NOT NULL,
  PRIMARY KEY (`id_dir`,`Nro_USP`),
  KEY `Nro_USP_idx` (`Nro_USP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gerente_diretoria`
--

INSERT INTO `gerente_diretoria` (`id_dir`, `Nro_USP`, `dta_inicio_dir`) VALUES
(1, 10277314, '2020-01-01'),
(2, 10277248, '2020-01-01'),
(3, 10797843, '2020-01-01'),
(4, 11236192, '2020-01-01'),
(5, 10871957, '2020-01-01'),
(6, 10277190, '2020-01-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lembretes`
--

DROP TABLE IF EXISTS `lembretes`;
CREATE TABLE IF NOT EXISTS `lembretes` (
  `id_lemb` int(11) NOT NULL AUTO_INCREMENT,
  `texto_lemb` varchar(500) NOT NULL,
  `titulo_lemb` varchar(100) NOT NULL,
  PRIMARY KEY (`id_lemb`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lembretes`
--

INSERT INTO `lembretes` (`id_lemb`, `texto_lemb`, `titulo_lemb`) VALUES
(1, 'Reunião Ordinária realocada para as terças-feiras às 13h', 'Mudança de horário RO'),
(2, 'As reuniões do SiGI ficaram fixadas às 17h nas quarta-feiras', 'Reunião SiGI');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

DROP TABLE IF EXISTS `projeto`;
CREATE TABLE IF NOT EXISTS `projeto` (
  `id_proj` int(11) NOT NULL AUTO_INCREMENT,
  `nome_proj` varchar(60) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `dta_inicio_proj` date NOT NULL,
  `dta_fim_proj` date DEFAULT NULL,
  `id_gerente` int(11) NOT NULL,
  PRIMARY KEY (`id_proj`),
  KEY `id_gerente_idx` (`id_gerente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`id_proj`, `nome_proj`, `descricao`, `dta_inicio_proj`, `dta_fim_proj`, `id_gerente`) VALUES
(1, 'SiGI', 'Sistema de Gerenciamento Interno da InfoBio Jr.', '2018-03-01', NULL, 11236192),
(2, 'GACC', 'Sistema destinado ao Grupo de Apoio à Criança com Câncer', '2018-10-01', NULL, 10255880),
(3, 'Acessibilidade', 'Implementação de técnicas de acessibilidade no site na InfoBio Jr.', '2020-04-01', '2020-07-01', 10797843);

-- --------------------------------------------------------

--
-- Estrutura da tabela `proj_usuario`
--

DROP TABLE IF EXISTS `proj_usuario`;
CREATE TABLE IF NOT EXISTS `proj_usuario` (
  `Nro_USP` int(11) NOT NULL,
  `id_proj` int(11) NOT NULL,
  PRIMARY KEY (`Nro_USP`,`id_proj`),
  KEY `id_proj_idx` (`id_proj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `proj_usuario`
--

INSERT INTO `proj_usuario` (`Nro_USP`, `id_proj`) VALUES
(10277190, 1),
(11236192, 1),
(11812500, 1),
(11844882, 1),
(11882707, 1),
(10255880, 2),
(11273868, 2),
(11280140, 2),
(11858411, 2),
(8062964, 3),
(10797843, 3),
(11236230, 3),
(11300429, 3),
(11812517, 3),
(11819111, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_dados`
--

DROP TABLE IF EXISTS `user_dados`;
CREATE TABLE IF NOT EXISTS `user_dados` (
  `CPF` bigint(12) NOT NULL,
  `Nro_USP` int(11) NOT NULL,
  `RG` varchar(15) NOT NULL,
  `dta_nasc` date NOT NULL,
  `assinatura` varchar(100) DEFAULT NULL,
  `rua` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `CEP` int(11) NOT NULL,
  `nro_resid` int(11) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `estado` varchar(3) NOT NULL,
  `celular` bigint(12) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`CPF`,`Nro_USP`),
  KEY `Nro_USP_idx` (`Nro_USP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_dados`
--

INSERT INTO `user_dados` (`CPF`, `Nro_USP`, `RG`, `dta_nasc`, `assinatura`, `rua`, `cidade`, `CEP`, `nro_resid`, `complemento`, `estado`, `celular`, `foto`) VALUES
(1449817262, 11273868, '1383226', '2000-08-08', NULL, 'Av. Gov. Lucas Nogueira GarcÃªs', 'RibeirÃ£o Preto', 14051510, 600, '', 'SP', 69992808867, NULL),
(6645830670, 11819111, 'MG18218092', '2000-10-20', NULL, 'Rua JosÃ© Rodrigues Pereira', 'Belo Horizonte', 30455640, 1278, 'EdifÃ­cio Flamboyant, apartamento 1704', 'MG', 31991332434, NULL),
(14366799669, 11812500, 'MG18940310', '2002-10-02', NULL, 'Avenida Presidente Vargas', 'RibeirÃ£o Preto', 14020260, 43, 'Apto 142', 'SP', 34988107522, NULL),
(32509342835, 10871957, '533811491', '2000-01-22', NULL, 'Marques da Cruz', 'RibeirÃ£o Preto', 14051150, 188, 'ap2', 'SP', 14991913066, NULL),
(35509245859, 10255880, '49989022X', '1999-02-03', NULL, 'Avenida do CafÃ©', 'RibeirÃ£o Preto', 14050230, 2077, 'apto 66', 'SP', 14997634772, NULL),
(36315854893, 11236230, '558341597', '2000-08-24', NULL, 'Av. Tereza Palmeira Gallon', 'RibeirÃ£o Preto', 14040600, 325, 'Apto 01', 'SP', 16992706642, NULL),
(36439706845, 10277248, '398595173', '1998-06-03', NULL, 'Avenida Professor Doutor Zeferino Vaz', 'RibeirÃ£o Preto', 14040020, 703, '213', 'SP', 16982707192, NULL),
(36811117826, 11300429, '570357342', '2000-08-30', NULL, 'BarÃ£o do Amazonas', 'RibeirÃ£o Preto', 14010120, 1080, '', 'SP', 14997922455, NULL),
(41147481806, 11858411, '509075496', '2000-07-12', NULL, 'Avenida do CafÃ©', 'RibeirÃ£o Preto ', 14050230, 1243, 'Apartamento', 'SP ', 18996668449, NULL),
(42143812892, 11280140, '573059093', '2001-05-11', NULL, 'Avenida do CafÃ©, 2661', 'RibeirÃ£o Preto', 14050230, 2661, '', 'SP', 17992086418, NULL),
(43167947870, 8062964, '437735618', '1994-11-11', NULL, 'Av. Patriarca', 'RibeirÃ£o Preto', 14030620, 1915, 'Casa', 'SP', 16992460293, NULL),
(44433765856, 10277190, '501557052', '1999-01-14', NULL, 'Avenida do Café', 'Ribeirão Preto', 14050230, 2077, 'Apartamento 66', 'SP', 14997415775, NULL),
(45478720828, 10716783, '53549015x', '1997-05-06', NULL, 'Moacyr Camargo  da Silveira', 'Limeira', 13486054, 255, 'A', 'SP', 19998903020, NULL),
(46486710829, 10797843, '384166271', '2000-01-17', NULL, 'Rua Marques da Cruz', 'RibeirÃ£o Preto', 14051150, 667, 'Apartamento 11', 'SP', 11988894842, NULL),
(47166818824, 11844882, '505695091', '2002-02-25', NULL, 'Roque Nacarato', 'RibeirÃ£o Preto', 14051000, 741, 'Ap 33', 'SP', 14981477269, NULL),
(47176058881, 4722910, '576912438', '2001-07-05', NULL, 'Av. do CafÃ©', 'RibeirÃ£o Preto', 14050220, 2077, '86', 'SP ', 14998048311, NULL),
(48511961801, 10277314, '54981280', '1998-09-09', NULL, 'JosÃ© Vilela de Andrade ', 'RibeirÃ£o Preto', 14076440, 166, '', 'SP', 16991958936, NULL),
(48765637801, 11882707, '536096181', '2002-08-16', NULL, 'Bernardino de campos', 'RibeirÃ£o Preto', 14015130, 531, 'Apto40', 'SP', 14998698969, NULL),
(49341620899, 11812517, '567284761', '2001-10-31', NULL, 'Rua Dr. Pedreira de Freitas', 'RibeirÃ£o Preto', 14040900, 12, 'NÃ£o ocupei nenhum ap no CREU ainda.', 'SP', 11967231098, NULL),
(70264304160, 11236192, '6186951', '2001-02-18', NULL, 'Av. do Café', 'Ribeirão Preto', 14050230, 2077, 'Apto. 86', 'SP', 62984530259, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_lemb`
--

DROP TABLE IF EXISTS `user_lemb`;
CREATE TABLE IF NOT EXISTS `user_lemb` (
  `Nro_USP` int(11) NOT NULL,
  `id_lemb` int(11) NOT NULL,
  PRIMARY KEY (`Nro_USP`,`id_lemb`),
  KEY `id_lemb_idx` (`id_lemb`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_lemb`
--

INSERT INTO `user_lemb` (`Nro_USP`, `id_lemb`) VALUES
(10277190, 1),
(11236192, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_redes_sociais`
--

DROP TABLE IF EXISTS `user_redes_sociais`;
CREATE TABLE IF NOT EXISTS `user_redes_sociais` (
  `Nro_USP` int(11) NOT NULL,
  `github` varchar(500) DEFAULT NULL,
  `linkedin` varchar(500) DEFAULT NULL,
  `facebook` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Nro_USP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_redes_sociais`
--

INSERT INTO `user_redes_sociais` (`Nro_USP`, `github`, `linkedin`, `facebook`) VALUES
(4722910, 'https://github.com/juliasaitoo', 'https://www.linkedin.com/in/julia-s-9711901b5/', 'https://www.facebook.com/julia.saito.98'),
(8062964, 'https://github.com/Vitor-Piotto', 'https://www.linkedin.com/in/vitor-piotto-de-oliveira-11ab061a5/', 'https://www.facebook.com/vitor.piotto'),
(10255880, 'https://github.com/NinnaHS', 'https://www.linkedin.com/in/ninna-hirata-silva-41353915b/', 'https://www.facebook.com/ninna.hiratasilva'),
(10277190, 'https://github.com/LarissaAsito', 'https://www.linkedin.com/in/larissa-asito-b89b0915b/', 'https://www.facebook.com/larissa.asito'),
(10277248, 'https://github.com/BeaMtrix', 'https://www.linkedin.com/in/beatriz-miranda-b81345165/', 'https://www.facebook.com/beatriz.miranda.7771'),
(10277314, 'https://github.com/LeonardoTres', 'https://www.linkedin.com/in/leonardo-martinez-664366110/', 'https://www.facebook.com/leonardo.martinez.16718979'),
(10716783, 'https://github.com/lucianoAGit', 'https://www.linkedin.com/in/luciano-gabriel-araujo-b29a581ab/', 'https://www.facebook.com/lucianogabriel.araujo3'),
(10797843, 'https://github.com/fellimao', 'https://www.linkedin.com/in/felipe-lim%C3%A3o-lopes-de-almeida-914a46165/', 'https://www.facebook.com/felipe.lopesdealmeida.9'),
(10871957, 'https://github.com/mihokano', 'https://www.linkedin.com/in/larissa-miyuki-okano-8b867a16a/', 'https://www.facebook.com/larissa.okano/'),
(11236192, 'https://github.com/erthal-id', 'https://www.linkedin.com/in/isabela-dias-erthal-40a349184/', 'https://www.facebook.com/isabela.erthal'),
(11236230, 'github.com/ViMalheiro', 'www.linkedin.com/in/victorhugomalheiro', 'facebook.com/Victor.Enes/'),
(11273868, 'https://github.com/drakcamicazi', 'https://www.linkedin.com/in/milan-rufini-de-andrade-a4265a195', 'https://facebook.com/drakcamicazi'),
(11280140, 'https://github.com/CCapelini', 'https://www.linkedin.com/in/carlos-eduardo-capelini/', 'https://www.facebook.com/carloseduardo.capelini/'),
(11300429, 'https://github.com/giulliainoue', 'http://www.linkedin.com/in/giulliainoue', 'https://www.facebook.com/giullia.inoue/'),
(11812500, 'https://github.com/pedro-emilio', 'https://www.linkedin.com/in/pedro-emilio-andrade-martins-1337151a6/', 'https://www.facebook.com/pedroemilio.andrade'),
(11812517, 'https://github.com/HenrickRobinson', 'https://www.linkedin.com/in/robinsonhenrick/', 'https://www.facebook.com/henrickrobinson2001'),
(11819111, 'https://github.com/MaviMendes', 'https://br.linkedin.com/in/mariavitoriaribeiromendes', 'https://m.facebook.com/mariavitoria2010?ref=bookmarks'),
(11844882, 'https://github.com/macorelo-bono', 'https://www.linkedin.com/in/marco-aurÃ©lio-chaim-de-santis-4433241a5/', 'facebook.com/marco.chaim'),
(11858411, 'https://github.com/JuSayuri', 'https://www.linkedin.com/in/juliana-sakamoto-227ab11a5/', 'https://www.facebook.com/juliana.sakamoto.3'),
(11882707, 'github.com/Rebsega', 'linkedin.com/in/renan-barbieri-segamarchi', 'facebook.com/renan.barbierisegamarchi');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `Nro_USP` int(11) NOT NULL,
  `nome_us` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nro_falta` int(11) DEFAULT NULL,
  `login_hora` datetime DEFAULT NULL,
  PRIMARY KEY (`Nro_USP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Nro_USP`, `nome_us`, `senha`, `email`, `nro_falta`, `login_hora`) VALUES
(4722910, 'JÃºlia Kiyo Buso Saito', 'e3d1931ca3e7ec45d82f3b3d27c22952', 'juliasaito@usp.br', NULL, NULL),
(8062964, 'VÃ­tor Piotto de Oliveira', 'e30ddf1172d783b1146fe3b479e31ed1', 'vitor.piotto.oliveira@usp.br', NULL, NULL),
(10255880, 'Ninna Hirata Silva', '6d71371ebaa400394491445fd568183f', 'ninna.hirata@usp.br', NULL, NULL),
(10277190, 'Larissa Yoshie Asito', '432a232a3890a563adf20a0a07233637', 'larissa.asito@usp.br', NULL, NULL),
(10277248, 'Beatriz Miranda', 'a093693dc70a13d4397fda4c6930604e', 'beatrix@usp.br', NULL, NULL),
(10277314, 'Leonardo Tres Martinez', '53c39f365afa1a64bfbbc37d41060a99', 'leo.tmartinez@usp.br', NULL, NULL),
(10716783, 'Luciano Gabriel Araujo', '490315823fc48dbf6603e76446cbc4fd', 'lucianogabriel2468@usp.br', NULL, NULL),
(10797843, 'Felipe LimÃ£o Lopes de Almeida', 'dfa3787e5b3f21b1ee85e6305f760e63', 'fellimao.almeida@gmail.com', NULL, NULL),
(10871957, 'Larissa Miyuki Okano', '35376184e3c69044c073d9d06851a027', 'larissaokano@usp.br', NULL, NULL),
(11236192, 'Isabela Dias Erthal', '85f69636baa7d1570c82c76f268ebf3a', 'isabela.erthal@usp.br', NULL, NULL),
(11236230, 'Victor Hugo Enes Malheiro', '66121fa92196b92e1c4cd48b0a7affd5', 'victorhugomalheiro@usp.br', NULL, NULL),
(11273868, 'Milan Rufini de Andrade', '77c0e504ea9961eafa4226bfdf35d35c', 'rufini@usp.br', NULL, NULL),
(11280140, 'Carlos Eduardo Capelini Eli Lopes', '49632e384d0d0d801f7ed88a95169cf8', 'carloseduardocapelini.lopes@usp.br', NULL, NULL),
(11300429, 'Giullia Yuri Inoue Luiz', '6f0725f706d4ee416e1286f169dd34e3', 'giullia.inoue@usp.br', NULL, NULL),
(11812500, 'Pedro Emilio Andrade Martins', '9688645767c9c2f25cb33d30622bb93a', 'pedroemilioam02@usp.br', NULL, NULL),
(11812517, 'Robinson Henrick Ramos dos Anjos', '5d4a71a3905a719c89edb47cf3bf9752', 'henrick@usp.br', NULL, NULL),
(11819111, 'Maria VitÃ³ria Ribeiro Mendes', 'b71d7d89bcaa083c97083acf61707196', 'mariavitoriarm@usp.br', NULL, NULL),
(11844882, 'Marco AurÃ©lio Chaim de Santis', '3a289022428b4909a9135c9d33da7029', 'zulencio@usp.br', NULL, NULL),
(11858411, 'Juliana Sayuri Sakamoto', '16b26c79b45522d7be68797726dca4e5', 'jusakamoto@usp.br', NULL, NULL),
(11882707, 'Renan Barbieri Segamarchi', '9cb35fba8a182e07ea164f35b16d87cc', 'renan.barbieri.s@usp.br', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `dir_usuario`
--
ALTER TABLE `dir_usuario`
  ADD CONSTRAINT `dir_usuario_ibfk_1` FOREIGN KEY (`Nro_USP`) REFERENCES `usuario` (`Nro_USP`),
  ADD CONSTRAINT `dir_usuario_ibfk_2` FOREIGN KEY (`id_dir`) REFERENCES `diretoria` (`id_dir`);

--
-- Limitadores para a tabela `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`id_dir`) REFERENCES `diretoria` (`id_dir`),
  ADD CONSTRAINT `documento_ibfk_2` FOREIGN KEY (`id_proj`) REFERENCES `projeto` (`id_proj`);

--
-- Limitadores para a tabela `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`id_dir`) REFERENCES `diretoria` (`id_dir`);

--
-- Limitadores para a tabela `evento_usuario`
--
ALTER TABLE `evento_usuario`
  ADD CONSTRAINT `evento_usuario_ibfk_1` FOREIGN KEY (`Nro_USP`) REFERENCES `usuario` (`Nro_USP`),
  ADD CONSTRAINT `evento_usuario_ibfk_2` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`);

--
-- Limitadores para a tabela `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Nro_USP`) REFERENCES `usuario` (`Nro_USP`);

--
-- Limitadores para a tabela `ferramenta`
--
ALTER TABLE `ferramenta`
  ADD CONSTRAINT `ferramenta_ibfk_1` FOREIGN KEY (`id_dir`) REFERENCES `diretoria` (`id_dir`);

--
-- Limitadores para a tabela `fluxo_de_caixa`
--
ALTER TABLE `fluxo_de_caixa`
  ADD CONSTRAINT `fluxo_de_caixa_ibfk_1` FOREIGN KEY (`Nro_USP`) REFERENCES `usuario` (`Nro_USP`);

--
-- Limitadores para a tabela `gerente_diretoria`
--
ALTER TABLE `gerente_diretoria`
  ADD CONSTRAINT `gerente_diretoria_ibfk_1` FOREIGN KEY (`id_dir`) REFERENCES `diretoria` (`id_dir`),
  ADD CONSTRAINT `gerente_diretoria_ibfk_2` FOREIGN KEY (`Nro_USP`) REFERENCES `usuario` (`Nro_USP`);

--
-- Limitadores para a tabela `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `projeto_ibfk_1` FOREIGN KEY (`id_gerente`) REFERENCES `usuario` (`Nro_USP`);

--
-- Limitadores para a tabela `proj_usuario`
--
ALTER TABLE `proj_usuario`
  ADD CONSTRAINT `proj_usuario_ibfk_1` FOREIGN KEY (`Nro_USP`) REFERENCES `usuario` (`Nro_USP`),
  ADD CONSTRAINT `proj_usuario_ibfk_2` FOREIGN KEY (`id_proj`) REFERENCES `projeto` (`id_proj`);

--
-- Limitadores para a tabela `user_dados`
--
ALTER TABLE `user_dados`
  ADD CONSTRAINT `user_dados_ibfk_1` FOREIGN KEY (`Nro_USP`) REFERENCES `usuario` (`Nro_USP`);

--
-- Limitadores para a tabela `user_lemb`
--
ALTER TABLE `user_lemb`
  ADD CONSTRAINT `user_lemb_ibfk_1` FOREIGN KEY (`Nro_USP`) REFERENCES `usuario` (`Nro_USP`),
  ADD CONSTRAINT `user_lemb_ibfk_2` FOREIGN KEY (`id_lemb`) REFERENCES `lembretes` (`id_lemb`);

--
-- Limitadores para a tabela `user_redes_sociais`
--
ALTER TABLE `user_redes_sociais`
  ADD CONSTRAINT `user_redes_sociais_ibfk_1` FOREIGN KEY (`Nro_USP`) REFERENCES `usuario` (`Nro_USP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
