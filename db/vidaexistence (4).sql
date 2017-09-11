-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 11-Set-2017 às 15:25
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vidaexistence`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('00d536003a642389123b62e0b55e3c15', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503970050, ''),
('043a60e25f1f986fa6623795ecfd9635', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966675, ''),
('0b0d586a220611c55334c509d79e34ad', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968872, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";b:0;}'),
('0ce8831c927aba3183e6369c54eb370f', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966449, ''),
('0f673674eb106025928d3f6f9f0b4b63', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965605, ''),
('0fa9928e7502086de5fc66fcbd997253', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503964885, ''),
('11c282e9cdd8e2968b36e63ff99f36c0', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966862, ''),
('14c3a474892dd988fe49bffa3bb59efc', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966865, ''),
('15310ae1240160dfb46b4be3768864a7', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967955, ''),
('16cd072b34578da0afa23b9eadba5470', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966437, ''),
('1885503dcbc6cf9fd8d3f91f13ef076a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965651, ''),
('1b6c504708ceade9e0256dff36d3e9a0', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965651, ''),
('1bc175b12cf11c4db59f6b6b09233c5c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967866, ''),
('1c290d8f2e70993bb44e2214b5e0507b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503970046, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:5:"teste";}'),
('1c476d62ceedd34e8cf29c5a4863f17a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967156, ''),
('1e7898a9dc105ea9e1759385a855c3f1', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503964169, ''),
('2120ba5b1944d38ac68fd9e5cb2c37cd', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966578, ''),
('3358313a79fe515236109ac715bef990', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969776, ''),
('376755001b84528ea9860969f6f67522', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966339, ''),
('394a84cf350d31f8610dc5a56664a572', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967078, ''),
('3c24870a3b7b1a515f8f31b612cd2388', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965089, ''),
('41cd7d9030b79248e5b5e4b677e88e30', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965088, ''),
('44c4d59a0aaa1de947c409dbf7e7364d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503970055, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:5:"teste";}'),
('49b6beae2710c591d7f3d7412ff13844', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969764, ''),
('4a2b125286d55fbe027321f3672c53e1', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966865, 'a:2:{s:9:"user_data";s:0:"";s:12:"flash:new:ok";s:37:"Seu dados foram guradados com sucesso";}'),
('4e74e3bb53a32db7a22d02e659081c87', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967081, ''),
('4f416312f56de5ef6fb8d2eb59ea4b06', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967914, ''),
('5749a6c676fe900c851e05d40e7591e5', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966634, ''),
('58e40d0e7c50f73a988bc86ff7c4389d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503970058, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:5:"teste";}'),
('5a7a76cc2e4a0783a056464c747b91cb', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966953, 'a:2:{s:9:"user_data";s:0:"";s:12:"flash:new:ok";s:37:"Seu dados foram guradados com sucesso";}'),
('5b083906f69db00f55b10e60422b780b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967873, ''),
('5dbb78898f2552a5d71711b4dbb378c8', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969907, ''),
('5ef380ee409832807266926645bdc4dc', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969790, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:5:"teste";}'),
('5f0d2630819bfd71222f6a42e60dd39d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968677, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:10:"item-value";}'),
('5f6fc7121c31153e2e937c99c21f5019', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966449, ''),
('63e52d74e553059640d98092b858f418', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966661, ''),
('641df50ecae83ab0f704856f9c9f4b15', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966770, ''),
('6609d151643f11746e8a6ab1cf40a7b4', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968917, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";b:0;}'),
('6afeefc79d72a49d0e22b8e3be65b598', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966441, ''),
('6c19b0ee946480bc2bfd08960dbe1ce8', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966770, 'a:2:{s:9:"user_data";s:0:"";s:12:"flash:new:ok";s:37:"Seu dados foram guradados com sucesso";}'),
('7145f78cafdfca1f05005f05bf23db29', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503964111, ''),
('7604a5a930c6917a343afbe6a35be904', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965058, ''),
('78eae374e78220e52b031b378c3ed422', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968528, ''),
('7a822e0439c669c9c798a024b4116d96', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966852, ''),
('7b9666e56b81c43999d2571cdf25c224', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967872, ''),
('7beca0601c667513f7e693bb3d2c8e71', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966560, ''),
('887320a287e440369ce0040481919c29', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967160, ''),
('8972bfba2ccc3b2497229c2e07b51e0a', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965092, ''),
('921a1a4b64bfb6488bad1e2f51eaf171', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968549, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:10:"item-value";}'),
('94d6dd46c11578a950b4b17f3940d143', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968891, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";b:0;}'),
('9730606f5118b8efa3f2884aa406d553', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503964115, ''),
('97aed256ab564e214be1e51a645d0401', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965614, ''),
('987988e5d38c5ca0d00a1b34f4d2e102', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968533, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:10:"item-value";}'),
('98b659773d11c34143e92dea3c2b6ed9', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503964169, ''),
('99df237388964472291d201b699ff119', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968653, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:10:"item-value";}'),
('9d171dea16e986e0e33cd36252acea2c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967873, ''),
('9f19b17364fc311aa797bb7990764ef8', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966311, ''),
('9f5fb9db590fe4ff06a2c7c8f99b6bc3', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503964335, ''),
('a18256d870fa7052c7b69647c36fecc1', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969764, ''),
('a3ccc12ff64a61e831f070327a6202a8', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503970047, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:5:"teste";}'),
('a76cae1e3d45b63bddc6fd3a200b20e2', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965660, ''),
('a793e3e5c99567428e869d3832312826', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969770, ''),
('aa81d48c3492dd41bc58804394812e5c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966457, ''),
('ab46d074e740b7d1335371bf24ac8684', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969786, ''),
('abc53a4c81201ca171d32b776a9e4fd5', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969026, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:5:"teste";}'),
('ad78f84403d29e906dd8e6d2216662ab', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966319, ''),
('b31a060dc8f761d6f94b0eccef27cf76', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968534, ''),
('bbdbb72ad3c0340adf2764ecae1b66c4', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965551, ''),
('bcc0dadd42023666463cdfdde6cba4b2', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966522, ''),
('c43bd1de907498684d163a7ca7ea16c2', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969761, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:5:"teste";}'),
('c5c0850b5c2ed88bb44b46d7abbf3616', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966663, ''),
('c894d940e0918ead72f100fbd3752af1', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966615, ''),
('cd105fd77b3c65cb499129a3040230c3', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965062, ''),
('d1e5a4144e6f7e6d84dd660d4de96097', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967080, 'a:2:{s:9:"user_data";s:0:"";s:19:"flash:new:resultado";s:37:"Seu dados foram guradados com sucesso";}'),
('d2187bbbcd4a5e0fe4172f5efa321df9', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967931, ''),
('d290e41a0a90e10d22938e32b017889b', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968687, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:10:"item-value";}'),
('d493fe5c265d576de9a87ea38b3300c8', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968179, ''),
('d787768585538ec104b36b1e6a6ff869', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503968179, 'a:2:{s:9:"user_data";s:0:"";s:19:"flash:new:resultado";s:37:"Seu dados foram guradados com sucesso";}'),
('df28c741fa67c24619c914c0e5719f6d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969786, ''),
('e32f9cd024827dd9b7348c08a0c03991', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967955, 'a:2:{s:9:"user_data";s:0:"";s:19:"flash:new:resultado";s:37:"Seu dados foram guradados com sucesso";}'),
('e3ef3b007c26df568d4b99a03f84150c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966350, ''),
('e5056e928059bb5ffdd6b2cfe0925f49', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966954, ''),
('e6cb23c7c875e90a56b0f52be283ca7d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966309, ''),
('e827fc3770efaea8d5af54b114fd0812', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969907, ''),
('ea7f45e6a4ff5b6f0e6817dd71b05eab', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503969026, 'a:2:{s:9:"user_data";s:0:"";s:14:"flash:new:item";s:5:"teste";}'),
('ee13fae2540aaad9613eb229ec089d52', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966950, ''),
('ef49285e798a37bb93d8f6649a44c2e8', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967159, ''),
('f17110ff6e4b1d5d3a988ea64fa8cdd1', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966311, ''),
('f25b4614a8e0a7210911fc831241e45d', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503967934, ''),
('fa313f886019890400e0d4b5479453b6', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966627, ''),
('faf0b5d1e4edf2b9d782e1e35640da6e', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966649, ''),
('fbfec93351560df3e1fa4868a4954d65', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965069, ''),
('ff53030ed7139ef8fcdb95039e23c5ff', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503966749, ''),
('ff80d7071673be29bd54653a0b7898e0', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (', 1503965607, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filiais`
--

CREATE TABLE `filiais` (
  `id_filial` int(22) NOT NULL,
  `nome` varchar(22) NOT NULL,
  `setor` varchar(22) NOT NULL,
  `status` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filiais`
--

INSERT INTO `filiais` (`id_filial`, `nome`, `setor`, `status`) VALUES
(1, 'HOSPITAL INCAR', 'HOSPITALAR', 1),
(2, 'DELFIN IMAGENS', 'IMAGENS', 1),
(3, 'ddd', 'ddd', 1),
(4, 'ddd', 'ddd', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `id_item` int(22) NOT NULL,
  `id_requisicao` int(22) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` decimal(20,2) DEFAULT NULL,
  `desconto` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`id_item`, `id_requisicao`, `descricao`, `valor`, `desconto`) VALUES
(1, 1, 'aaa', '20.00', '15.00'),
(2, 2, 'caso', '20.00', '10.00'),
(8, 7, 'Fatura de Venda - #893 ', '20.00', '20.00'),
(9, 9, 'a', '20.00', '20.00'),
(10, 9, 'b', '20.00', '10.00'),
(11, 10, 'a', '20.00', '10.00'),
(12, 10, 'ex', '30.00', '20.00'),
(13, 11, 'aa', '20.00', '10.00'),
(14, 11, 'ab', '20.00', '15.00'),
(15, 12, 'exame admissional', '20.00', '35.00'),
(17, 4, 'tes moeda', '25.55', '25.55'),
(22, 5, 'sss', '1.25', '2.54'),
(23, 5, 'fdfdfd', '25.55', '0.46'),
(24, 5, 'fdfdfd', '25.00', '0.46'),
(25, 5, 'dsds', '25.00', '25.23'),
(26, 5, 'sas', '25.00', '0.22'),
(27, 5, 'dfds', '10.00', '25.66'),
(28, 5, 'dfds', '10.00', '25.66'),
(29, 5, 'dfds', '10.00', '25.66'),
(30, 5, 'dfds', '10.00', '25.66'),
(31, 5, 'dfds', '10.00', '25.66'),
(32, 5, 'dfds', '10.00', '1.00'),
(33, 14, 'exme mastoide', '260.00', '250.00'),
(34, 14, 'consulta pediatra', '160.00', '140.00'),
(37, 16, 'ggg', '2500.00', '25.00'),
(38, 16, 'ggg', '2500.00', '0.25'),
(39, 16, 'ggg', '22222222.00', '0.25'),
(40, 16, 'ggg', '25.22', '0.25'),
(41, 16, 'ggg', '2522.22', '0.25'),
(42, 16, 'ggg', '256966.66', '0.25'),
(43, 16, 'ggg', '2562541.25', '0.25'),
(44, 16, 'ggg', '2562541.25', '0.25'),
(45, 16, 'jhjg', '2523255.50', '3.66'),
(46, 16, 'jhjg', '2523255.50', '3.66'),
(47, 17, 'dsd', '2522.22', '2.52'),
(48, 17, 'ex', '254582.52', '2.50'),
(52, 18, 'processo', '254.66', '26.66');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(22) NOT NULL,
  `id_usuario` int(22) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `filial` int(22) NOT NULL,
  `ultimo_acesso` datetime DEFAULT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_login`, `id_usuario`, `login`, `senha`, `filial`, `ultimo_acesso`, `nome`) VALUES
(1, 1, 'a', 'a', 1, '2017-09-01 18:50:13', 'Rrodrigo Barbosa'),
(2, 2, 'b', 'b', 2, '2017-09-01 18:46:51', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisicao`
--

CREATE TABLE `requisicao` (
  `id_requisicao` int(222) NOT NULL,
  `id_cliente` int(22) NOT NULL,
  `id_login` int(22) NOT NULL,
  `situacao` int(22) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `requisicao`
--

INSERT INTO `requisicao` (`id_requisicao`, `id_cliente`, `id_login`, `situacao`, `data`) VALUES
(1, 1, 1, 1, '2017-09-05 10:56:32'),
(2, 1, 1, 1, '2017-09-05 11:01:11'),
(3, 1, 1, 1, '2017-09-05 12:18:03'),
(4, 134, 1, 2, '2017-09-08 10:15:01'),
(5, 134, 1, 2, '2017-09-08 15:44:57'),
(6, 134, 1, 2, '2017-09-08 14:59:11'),
(7, 134, 1, 1, '2017-09-06 13:41:49'),
(8, 134, 1, 2, '2017-09-06 13:46:39'),
(9, 134, 1, 2, '2017-09-06 14:00:59'),
(10, 134, 1, 2, '2017-09-06 16:22:27'),
(11, 134, 1, 2, '2017-09-06 14:23:01'),
(12, 134, 1, 2, '2017-09-08 09:55:34'),
(13, 134, 1, 1, '2017-09-08 16:12:12'),
(14, 134, 1, 2, '2017-09-09 20:26:32'),
(15, 134, 1, 1, '2017-09-11 08:46:57'),
(16, 134, 1, 1, '2017-09-11 09:38:52'),
(17, 134, 1, 1, '2017-09-11 10:01:23'),
(18, 134, 1, 1, '2017-09-11 10:14:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(22) NOT NULL,
  `nome` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `filiais`
--
ALTER TABLE `filiais`
  ADD PRIMARY KEY (`id_filial`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `requisicao`
--
ALTER TABLE `requisicao`
  ADD PRIMARY KEY (`id_requisicao`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filiais`
--
ALTER TABLE `filiais`
  MODIFY `id_filial` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `requisicao`
--
ALTER TABLE `requisicao`
  MODIFY `id_requisicao` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(22) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
