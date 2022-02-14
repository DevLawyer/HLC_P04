CREATE TABLE `users` (
  `email` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `a_bad` int(11) DEFAULT NULL,
  `a_good` int(11) DEFAULT NULL,
  `course1` int(1) NOT NULL DEFAULT '0',
  `course2` int(1) NOT NULL DEFAULT '0',
  `course3` int(1) NOT NULL DEFAULT '0',
  `course4` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

INSERT INTO `users` (`email`, `nombre`, `fecha_nac`, `a_bad`, `a_good`, `course1`, `course2`, `course3`, `course4`) VALUES
('migvazmar@gmail.com', 'Miguel Vazquez', '1991-03-28', 0, 15, 0, 0, 0, 0),
('tomasfernandez@iesmajuelo.com', 'Tomas Fernandez Cotrina', '2022-02-01', NULL, NULL, 0, 0, 0, 1);