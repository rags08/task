CREATE TABLE `department` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `depart_name` varchar(100) NOT NULL,
  `city` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `department` (`id`, `depart_name`, `city`) VALUES
(1, 'Finance', 1),
(2, 'IT', 2),
(3, 'Marketing', 1),
(4, 'Operational', 2),
(5, 'Sales', 3),
(6, 'Staff', 3);
