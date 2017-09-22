CREATE TABLE `csv` (
  `Date` datetime NOT NULL,
  `Transaction` varchar(40) NOT NULL,
  `Person` varchar(40) NOT NULL,
  `encoded_id` int(30) NOT NULL,
  `Door` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `position`, `contact_no`, `date_created`, `date_modified`) VALUES
(1, 'adrii', 'adrii', 'adrii', 'escaro', 'admin', '91111', '2017-09-14 04:15:12', '2017-09-14 04:15:12'),
(2, 'admin', 'admin', 'admin', 'admin', 'admin', '92222', '2017-09-21 05:38:46', '2017-09-21 05:38:46'),
(3, 'emp', 'emp', 'emp', 'emp', 'employee', '933333', '2017-09-21 05:39:13', '2017-09-21 05:39:13'),
(4, 'gerard.amador@silverlakeaxis.com', 'employee', 'JON-GERARD', 'AMADOR', 'employee', '', '2017-09-22 06:19:12', '2017-09-22 06:19:12'),
(5, 'joseph.avila@silverlakeaxis.com', 'employee', 'JOSEPH', 'AVILA', 'employee', '', '2017-09-22 06:20:30', '2017-09-22 06:20:30'),
(6, 'rizaldy.balce@silverlakeaxis.com', 'employee', 'RIZALDY', 'BALCE', 'employee', '', '2017-09-22 06:20:30', '2017-09-22 06:20:30'),
(7, 'cindy.bartolome@silverlakeaxis.com', 'employee', 'CINDY', 'BARTOLOME', 'employee', '', '2017-09-22 06:21:31', '2017-09-22 06:21:31'),
(8, 'emy.bartolome@silverlakeaxis.com', 'employee', 'MARIA IMELDA', 'BARTOLOME', 'employee', '', '2017-09-22 06:22:45', '2017-09-22 06:22:45'),
(9, 'leoneil.batulan@silverlakeaxis.com', 'employee', 'LEONEIL', 'BATULAN', 'employee', '', '2017-09-22 06:24:08', '2017-09-22 06:24:08'),
(10, 'marlon.bautista@silverlakeaxis.com', 'employee', 'MARLON', 'BAUTISTA', 'employee', '', '2017-09-22 06:24:08', '2017-09-22 06:24:08'),
(11, 'jenipher.blanco@silverlakeaxis.com', 'employee', 'JENIPHER', 'BLANCO', 'employee', '', '2017-09-22 06:26:49', '2017-09-22 06:26:49'),
(12, 'johnchristian.bonus@silverlakeaxis.com', 'employee', 'JOHN CHRISTIAN', 'BONUS', 'employee', '', '2017-09-22 06:26:49', '2017-09-22 06:26:49'),
(13, 'francis.briones@silverlakeaxis.com', 'employee', 'FRANCIS SALVADOR', 'BRIONES', 'employee', '', '2017-09-22 06:29:08', '2017-09-22 06:29:08'),
(14, 'joseph.cinco@silverlakeaxis.com', 'employee', 'JOSEPH ELEAZAR', 'CINCO', 'employee', '', '2017-09-22 06:29:08', '2017-09-22 06:29:08'),
(15, 'ivy.cometa@silverlakeaxis.com', 'employee', 'IVY', 'COMETA', 'employee', '', '2017-09-22 06:30:28', '2017-09-22 06:30:28'),
(16, 'roberto.consul@silverlakeaxis.com', 'employee', 'ROBERTO', 'CONSUL', 'employee', '', '2017-09-22 06:30:28', '2017-09-22 06:30:28'),
(17, 'angelito.curimo@silverlakeaxis.com', 'employee', 'ANGELITO', 'CURIMO', 'employee', '', '2017-09-22 06:31:29', '2017-09-22 06:31:29'),
(18, 'richelle.david@silverlakeaxis.com', 'employee', 'RICHELLE', 'DAVID', 'employee', '', '2017-09-22 06:31:29', '2017-09-22 06:31:29'),
(19, 'sharon.deleon@silverlakeaxis.com', 'employee', 'SHARON', 'DE LEON', 'employee', '', '2017-09-22 06:32:59', '2017-09-22 06:32:59'),
(20, 'phen.encarnacion@silverlakeaxis.com', 'employee', 'JOSEPHINE', 'ENCARNACION', 'employee', '', '2017-09-22 06:32:59', '2017-09-22 06:32:59'),
(21, 'adrielle.escaro@silverlakeaxis.com', 'employee', 'Adrielle', 'Escaro', 'employee', '', '2017-09-22 06:37:24', '2017-09-22 06:37:24'),
(22, 'rinaldi.espera@silverlakeaxis.com', 'employee', 'RINALDI', 'ESPERA', 'employee', '', '2017-09-22 06:37:24', '2017-09-22 06:37:24'),
(23, 'kyle.estrada@silverlakeaxis.com', 'employee', 'KYLE', 'ESTRADA', 'employee', '', '2017-09-22 06:39:31', '2017-09-22 06:39:31'),
(24, 'marlo.fallaria@silverlakeaxis.com', 'employee', 'MARLO NINO', 'FALLARIA', 'employee', '', '2017-09-22 06:39:31', '2017-09-22 06:39:31'),
(25, 'rommel.faustino@silverlakeaxis.com', 'employee', 'ROMMEL', 'FAUSTINO', 'admin', '', '2017-09-22 06:42:17', '2017-09-22 06:42:17'),
(26, 'patrick.guzman@silverlakeaxis.com', 'employee', 'PATRICK', 'GUZMAN', 'employee', '', '2017-09-22 06:42:17', '2017-09-22 06:42:17'),
(27, 'minnie.ibon@silverlakeaxis.com', 'employee', 'MARIA ROSVEMIN', 'IBON', 'employee', '', '2017-09-22 06:48:33', '2017-09-22 06:48:33'),
(28, 'annalyn.lamata@silverlakeaxis.com', 'employee', 'ANNALYN FE', 'LAMATA', 'employee', '', '2017-09-22 06:48:33', '2017-09-22 06:48:33'),
(29, 'eunice.macalindong@silverlakeaxis.com', 'employee', 'JHONNA EUNICE', 'MACALINDONG', 'employee', '', '2017-09-22 06:49:57', '2017-09-22 06:49:57'),
(30, 'jennifer.magno@silverlakeaxis.com', 'employee', 'JENNIFER', 'MAGNO', 'employee', '', '2017-09-22 06:49:57', '2017-09-22 06:49:57'),
(31, 'marites.magsajo@silverlakeaxis.com', 'employee', 'MARITES', 'MAGSAJO', 'employee', '', '2017-09-22 06:51:42', '2017-09-22 06:51:42'),
(32, 'eisel.manlapas@silverlakeaxis.com', 'employee', 'EISEL', 'MANLAPAS', 'employee', '', '2017-09-22 06:51:42', '2017-09-22 06:51:42'),
(33, 'malou.martin@silverlakeaxis.com', 'admin', 'MA. LUISA', 'MARTIN', 'admin', '', '2017-09-22 06:54:32', '2017-09-22 06:54:32'),
(34, 'nathaniel.monterde@silverlakeaxis.com', 'employee', 'NATHANIEL F', 'MONTERDE', 'employee', '', '2017-09-22 06:54:32', '2017-09-22 06:54:32'),
(35, 'rina.valdez@silverlakeaxis.com', 'employee', 'MARIA RUFINA', 'ORDONIO', 'employee', '', '2017-09-22 06:56:44', '2017-09-22 06:56:44'),
(36, 'maricel.pano@silverlakeaxis.com', 'employee', 'MARICEL', 'PANO', 'employee', '', '2017-09-22 06:56:44', '2017-09-22 06:56:44'),
(37, 'ophelia.parra@silverlakeaxis.com', 'employee', 'OPHELIA', 'PARRA', 'employee', '', '2017-09-22 06:57:45', '2017-09-22 06:57:45'),
(38, 'martin.prescott@silverlakeaxis.com', 'employee', 'MARTIN', 'PRESCOTT', 'employee', '', '2017-09-22 06:57:45', '2017-09-22 06:57:45'),
(39, 'jescy.querimit@silverlakeaxis.com', 'employee', 'JESCY', 'QUERIMIT', 'employee', '', '2017-09-22 06:58:59', '2017-09-22 06:58:59'),
(40, 'megan.quines@silverlakeaxis.com', 'employee', 'MEGAN', 'QUINES', 'employee', '', '2017-09-22 06:58:59', '2017-09-22 06:58:59'),
(41, 'erwin.ramos@silverlakeaxis.com', 'employee', 'ERWIN', 'RAMOS', 'employee', '', '2017-09-22 07:00:47', '2017-09-22 07:00:47'),
(42, 'flordeliza.ramos@silverlakeaxis.com', 'employee', 'FLORDELIZA', 'RAMOS', 'employee', '', '2017-09-22 07:00:47', '2017-09-22 07:00:47'),
(43, 'john.robles@silverlakeaxis.com', 'employee', 'JOHN RUSSEL', 'ROBLES', 'employee', '', '2017-09-22 07:08:05', '2017-09-22 07:08:05'),
(44, 'djonivic.salazar@silverlakeaxis.com', 'employee', 'DJONIVIC', 'SALLAZAR', 'employee', '', '2017-09-22 07:08:05', '2017-09-22 07:08:05'),
(45, 'preciouse.salenga@silverlakeaxis.com', 'admin', 'PREIOUSE', 'SALENGA', 'admin', '', '2017-09-22 07:11:43', '2017-09-22 07:11:43'),
(46, 'marinette.salutan @silverlakeaxis.com', 'employee', 'MARINETTE', 'SALUTAN', 'employee', '', '2017-09-22 07:11:43', '2017-09-22 07:11:43'),
(47, 'emerson.sanchez@silverlakeaxis.com', 'employee', 'EMERSON', 'SANCHEZ', 'employee', '', '2017-09-22 07:15:43', '2017-09-22 07:15:43'),
(48, 'juanmiguel.santos@silverlakeaxis.com', 'employee', 'JUAN MIGUEL', 'SANTOS', 'employee', '', '2017-09-22 07:15:43', '2017-09-22 07:15:43'),
(49, 'jason.stamaria@silverlakeaxis.com', 'employee', 'JASON', 'STA. MARIA', 'employee', '', '2017-09-22 07:24:47', '2017-09-22 07:24:47'),
(50, 'joann.suriaga@silverlakeaxis.com', 'employee', 'JOANN', 'SURIAGA', 'employee', '', '2017-09-22 07:24:47', '2017-09-22 07:24:47'),
(51, 'christopher.tabardilla@silverlakeaxis.com', 'employee', 'CHRISTOPHER', 'TABARDILLA', 'employee', '', '2017-09-22 07:27:01', '2017-09-22 07:27:01'),
(52, 'angelita.tangkiang@silverlakeaxis.com', 'employee', 'ANGELITA', 'TANGKIANG', 'employee', '', '2017-09-22 07:27:01', '2017-09-22 07:27:01'),
(53, 'romeo.tolentino@silverlakeaxis.com', 'employee', 'ROMEO JR.', 'TOLENTINO', 'employee', '', '2017-09-22 07:29:15', '2017-09-22 07:29:15'),
(54, 'kristerrmarc.tong@silverlakeaxis.com', 'employee', 'KRISTERR MARC', 'TONG', 'employee', '', '2017-09-22 07:29:15', '2017-09-22 07:29:15'),
(55, 'cristina.tongco@silverlakeaxis.com', 'employee', 'CRISTINA', 'TONGCO', 'employee', '', '2017-09-22 07:30:51', '2017-09-22 07:30:51'),
(56, 'remar.uy@silverlakeaxis.com', 'employee', 'REMAR JUDE', 'UY', 'employee', '', '2017-09-22 07:30:51', '2017-09-22 07:30:51'),
(57, 'vangie.valencia@silverlakeaxis.com', 'employee', 'EVANGELINE', 'VALENCIA', 'employee', '', '2017-09-22 07:31:43', '2017-09-22 07:31:43'),
(58, 'john.vargas@silverlakeaxis.com', 'employee', 'JOHN RYAN', 'VARGAS', 'employee', '', '2017-09-22 07:33:41', '2017-09-22 07:33:41'),
(59, 'jeffrey.villanueva@silverlakeaxis.com', 'employee', 'JEFFREY', 'VILLANUEVA', 'employee', '', '2017-09-22 07:33:41', '2017-09-22 07:33:41'),
(60, 'xanthe.vitor@silverlakeaxis.com', 'employee', 'XANTHE', 'VITOR', 'employee', '', '2017-09-22 07:34:39', '2017-09-22 07:34:39'),
(61, 'chrissia.yu@silverlakeaxis.com', 'employee', 'CHRISSIA LOUISE', 'YU', 'employee', '', '2017-09-22 07:34:39', '2017-09-22 07:34:39'),
(62, 'feann.yutuc@silverlakeaxis.com', 'employee', 'FE ANN', 'YUTUC', 'employee', '', '2017-09-22 07:35:20', '2017-09-22 07:35:20');


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
