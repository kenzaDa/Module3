CREATE TABLE `ft_table` (
  `id` int(100) NOT NULL,
  `login` varchar(100) NOT NULL DEFAULT 'toto',
  `groupe` enum('staff','student','other') NOT NULL,
  `date_de_creation` date NOT NULL