-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 20-Jun-2022 às 01:52
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pilotomaster`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `regulamentos`
--

CREATE TABLE `regulamentos` (
  `id` int(11) NOT NULL,
  `pergunta` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta1` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta2` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta3` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `resposta4` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `correta` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `regulamentos`
--

INSERT INTO `regulamentos` (`id`, `pergunta`, `resposta1`, `resposta2`, `resposta3`, `resposta4`, `correta`) VALUES
(1, 'O centro que tem a finalidade de planejar, orientar, coordenar, controlar e executar as atividades de investigação e prevenção de acidentes aeronáuticos, denomina-se:', 'SIPAAA', 'SERAC', 'SIPAER ', 'CENIPA', 'd'),
(2, 'O serviço prestado com a finalidade de proporcionar avisos e informações úteis para a realização segura e eficiente dos voos, é o de:', 'alerta ', 'assessoramento ', 'informação de voo', 'prevenção de acidentes ', 'c'),
(3, 'O espaço aéreo de dimensões definidas, dentro do qual o voo só poderá ser realizado sob condições pré-estabelecidas, denomina-se área:', 'perigosa ', 'restrita ', 'proibida ', 'interditada ', 'b'),
(4, 'Em espaços aéreos de classe F, os voos IFR recebem o serviço de:', 'vetoração radar ', 'vigilância radar ', 'controle de tráfego aéreo ', 'assessoramento de tráfego aéreo ', 'd'),
(5, 'As categorias das aeronaves, segundo a esteira de turbulência, são:', 'leve / média / pesada ', 'fraca / moderada / forte ', 'pequena / média / grande ', 'convencional / turbohélice / jato ', 'a'),
(6, 'Pode-se afirmar que uma aeronave, voando no FL 150, estava “sempre” sob:', 'IFR ', 'IMC', 'VFR', 'VMC', 'a'),
(7, 'Em uma mensagem de posição, transmitida por uma aeronave ao órgão ATS, além da identificação da ACFT, posição, hora e FL ou altitude, o piloto deverá informar:', 'autonomia e próxima posição ', 'autonomia e condições de voo', 'próxima posição e condições de voo', 'próxima posição e hora de sobrevoo', 'd'),
(8, 'Voando com PLN IFR, dentro de CTR ou TMA, sem serviço radar é obrigação do piloto em comando informar ao APP, independente de solicitação, logo que:', 'encontrar IMC ', 'encontrar VMC ', 'atingir o topo ', 'iniciar o voo IFR ', 'b'),
(9, 'Para decidir sobre as operações de pouso ou de decolagem, quando as condições do vento forem desfavoráveis, os parâmetros a serem considerados pelo piloto serão:', 'teto e visibilidade ', 'comprimento e largura da pista ', 'performance da ACFT e largura da pista ', 'performance da ACFT e comprimento da pista', 'd'),
(10, 'De acordo com as circunstâncias, as aeronaves acusarão o recebimento da mensagem ATIS quando estabelecerem contato com o:', 'APP ou TWR ', 'ACC ou TWR ', 'APP ou rádio', 'ACC ou rádio ', 'b'),
(11, 'Na utilização do radar secundário, os códigos que correspondem, respectivamente, a falha de comunicação, emergência e interferência, são:', '7500, 7600 e 7700', '7600, 7700 e 7500', '7600, 7500 e 7700', '7700, 7600 e 7500', 'b'),
(12, 'Após solicitação do controlador de voo, para a verificação do funcionamento do equipamento transponder, a sequência a ser executada pelo piloto será:', 'off / standby / normal', 'standby / off / normal ', 'off / normal / característica “IDENT”', 'standby / normal / característica “IDENT” ', 'd'),
(13, 'A separação vertical, em rota, é obtida exigindo-se que as ACFT ajustem seus altímetros, com os valores referentes ao:', 'QFE ', 'EFF ', 'QNE', 'QNH ', 'c'),
(14, 'Para o ajuste do altímetro, a determinação do nível de transição considera os parâmetros de:', 'QNE e altitude de transição ', 'QNH e altitude de transição ', 'QNE e nível mínimo de espera ', 'QNH e nível mínimo de espera ', 'b'),
(15, 'Decolando de um aeródromo cuja elevação seja de 1.500 ft, altitude de transição de 5.000 ft e sendo 6.000 ft o nível de transição, o piloto deverá ajustar o altímetro com o valor de 1013.2 hPa, ao passar pelo (a):', 'FL 060 ', 'FL 065', 'altitude de 3.500 ft', 'altitude de 5.000 ft ', 'd'),
(16, 'Uma aeronave executando um procedimento de descida que contenha trajetória de penetração, deverá ter seu altímetro ajustado, ao:', 'iniciar a descida ', 'cruzar o nível de transição ', 'cruzar a altitude de transição ', 'abandonar o nível mínimo de espera ', 'd'),
(17, 'Ao efetuar um procedimento de espera no FL 220, sem turbulência, uma ACFT deverá manter velocidade máxima de:', '170 KT ', '230 KT ', '240 KT ', '265 KT ', 'd'),
(18, 'Teste1', 'resp a1', 'resp a2', 'resp a3', 'resp a4', 'correta1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha_usuario` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha_usuario`) VALUES
(1, 'Rafael', 'rafael@pilotomaster.com.br', '$2y$10$h8ZgUrhzl9mOY3pjhBJNs.Mna5tmXAGsn35aitbvAwreVtHWHDE6u');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `regulamentos`
--
ALTER TABLE `regulamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `regulamentos`
--
ALTER TABLE `regulamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
