CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `estilo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `persona` (`id`, `nombre`,`estilo`) VALUES (1, 'Eva Perona', 'pop'), (2, 'Nerea Rubio', 'rock');