CREATE DATABASE IF NOT EXISTS `monitoring` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `monitoring`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `position`, `date_created`, `date_modified`) VALUES
(1, 'admin', 'admin', 'Hakeem', 'Polistico', 'superadmin', '2017-08-21 00:49:08', '2017-08-21 00:49:08'),
(2, 'adriitakumi', 'hakeemjoshua', 'Adrielle', 'Escaro', 'admin', '2017-08-21 00:50:36', '2017-08-21 00:50:36'),
(3, 'jassyber', 'ilovetolove', 'Jasver', 'Salva', 'admin', '2017-08-21 00:51:15', '2017-08-21 00:51:15'),
(4, 'iamteacher', 'iamteacher', 'Teacher', 'IsMe', 'teacher', '2017-08-21 00:51:48', '2017-08-21 00:51:48'),
(5, 'studentisme', 'studentisme', 'Student', 'IsMe', 'student', '2017-08-21 00:52:27', '2017-08-21 00:52:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
