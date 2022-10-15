CREATE TABLE `city` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `cityname` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `city` (`id`, `cityname`) VALUES
(1, 'Bhopal'),
(2, 'Indore'),
(3, 'Jabalpur');