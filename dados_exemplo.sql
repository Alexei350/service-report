-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando dados para a tabela projeto.report_cliente: ~30 rows (aproximadamente)
/*!40000 ALTER TABLE `report_cliente` DISABLE KEYS */;
INSERT INTO `report_cliente` (`ID`, `nome`) VALUES
	(1, 'Sylvester'),
	(2, 'Kyle'),
	(3, 'Eaton'),
	(4, 'Caleb'),
	(5, 'Nathaniel'),
	(6, 'Graiden'),
	(7, 'Finn'),
	(8, 'Amery'),
	(9, 'Rahim'),
	(10, 'Harding'),
	(11, 'Joshua'),
	(12, 'Peter'),
	(13, 'Christian'),
	(14, 'Zachary'),
	(15, 'Amal'),
	(16, 'Griffith'),
	(17, 'Noah'),
	(18, 'Quentin'),
	(19, 'Marshall'),
	(20, 'Derek'),
	(21, 'Omar'),
	(22, 'Lyle'),
	(23, 'Jameson'),
	(24, 'Harper'),
	(25, 'Damian'),
	(26, 'Geoffrey'),
	(27, 'Travis'),
	(28, 'Micah'),
	(29, 'Charles'),
	(30, 'Caesar');
/*!40000 ALTER TABLE `report_cliente` ENABLE KEYS */;

-- Copiando dados para a tabela projeto.report_os: ~50 rows (aproximadamente)
/*!40000 ALTER TABLE `report_os` DISABLE KEYS */;
INSERT INTO `report_os` (`ID`, `ID_cliente`, `servico`, `tempo`, `valor`, `data`, `hora`, `descricao`) VALUES
	(1, 27, 'Instalação elétrica', 22, 203.13, '2019-05-06', '02:02:24', 'quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis'),
	(2, 19, 'Instalação de gerador', 33, 128.19, '2019-04-06', '16:50:04', 'Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet'),
	(3, 28, 'Instalação de gerador', 31, 296.22, '2019-03-06', '01:05:19', 'ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis'),
	(4, 2, 'Instalação elétrica', 49, 670.49, '2019-02-06', '16:04:00', 'massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor'),
	(5, 25, 'Instalação elétrica', 45, 254.03, '2019-01-06', '02:02:24', 'lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer'),
	(6, 8, 'Instalação de gerador', 5, 741.48, '2018-12-06', '02:03:00', 'luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et'),
	(7, 18, 'Troca de lâmpadas', 49, 743.28, '2018-11-06', '06:26:19', 'malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo.'),
	(8, 4, 'Instalação de gerador', 9, 336.76, '2018-10-06', '08:04:04', 'Nam ligula elit, pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim.'),
	(9, 16, 'Troca de lâmpadas', 6, 528.31, '2019-06-06', '08:34:05', 'Quisque ornare tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit'),
	(10, 13, 'Troca de lâmpadas', 8, 737.12, '2019-05-06', '12:10:13', 'gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus.'),
	(11, 18, 'Instalação elétrica', 6, 374.50, '2019-04-06', '14:02:21', 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh'),
	(12, 23, 'Instalação elétrica', 14, 199.57, '2019-03-06', '10:09:27', 'odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec'),
	(13, 4, 'Troca de lâmpadas', 18, 337.50, '2019-02-06', '19:05:01', 'nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus mauris a nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac'),
	(14, 7, 'Troca de lâmpadas', 43, 77.14, '2019-01-06', '00:03:17', 'semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus'),
	(15, 18, 'Troca de lâmpadas', 11, 293.28, '2018-12-06', '11:00:24', 'tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit'),
	(16, 21, 'Troca de lâmpadas', 19, 407.79, '2018-11-06', '07:24:05', 'molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu.'),
	(17, 5, 'Troca de lâmpadas', 37, 153.81, '2018-10-06', '04:04:07', 'nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum'),
	(18, 12, 'Troca de lâmpadas', 28, 535.96, '2019-06-06', '00:28:16', 'tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique'),
	(19, 27, 'Instalação elétrica', 32, 282.99, '2019-05-06', '21:05:05', 'malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus'),
	(20, 2, 'Troca de lâmpadas', 29, 376.56, '2019-04-06', '10:04:02', 'orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non,'),
	(21, 2, 'Troca de lâmpadas', 13, 622.21, '2019-03-06', '02:32:00', 'vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel,'),
	(22, 17, 'Troca de lâmpadas', 38, 160.20, '2019-02-06', '03:26:00', 'eu lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus mauris a nunc. In at pede. Cras vulputate velit eu'),
	(23, 29, 'Instalação de gerador', 40, 67.26, '2019-01-06', '19:04:01', 'pede. Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam'),
	(24, 19, 'Instalação elétrica', 16, 583.55, '2018-12-06', '14:04:31', 'et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus'),
	(25, 26, 'Troca de lâmpadas', 50, 541.21, '2018-11-06', '13:01:04', 'et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis'),
	(26, 8, 'Instalação elétrica', 15, 192.52, '2018-10-06', '03:02:02', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque'),
	(27, 10, 'Troca de lâmpadas', 49, 765.90, '2019-06-06', '16:28:14', 'Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing'),
	(28, 30, 'Troca de lâmpadas', 29, 603.79, '2019-05-06', '18:21:19', 'egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis'),
	(29, 10, 'Troca de lâmpadas', 21, 315.16, '2019-04-06', '12:49:28', 'magna. Duis dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit. Donec porttitor tellus non magna. Nam ligula elit, pretium et, rutrum non, hendrerit'),
	(30, 12, 'Instalação elétrica', 27, 239.77, '2019-03-06', '02:07:53', 'mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet,'),
	(31, 7, 'Troca de lâmpadas', 43, 455.87, '2019-02-06', '02:05:16', 'lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare'),
	(32, 22, 'Instalação elétrica', 24, 149.65, '2019-01-06', '14:16:28', 'ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'),
	(33, 1, 'Troca de lâmpadas', 34, 686.37, '2018-12-06', '14:37:18', 'Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet'),
	(34, 14, 'Troca de lâmpadas', 48, 231.02, '2018-11-06', '15:19:00', 'sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus.'),
	(35, 7, 'Troca de lâmpadas', 35, 786.48, '2018-10-06', '13:41:48', 'accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque'),
	(36, 22, 'Troca de lâmpadas', 41, 600.69, '2019-06-06', '22:22:57', 'lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per'),
	(37, 22, 'Instalação elétrica', 20, 294.08, '2019-05-06', '17:00:05', 'ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam'),
	(38, 15, 'Instalação elétrica', 9, 347.07, '2019-04-06', '04:01:01', 'Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus'),
	(39, 9, 'Troca de lâmpadas', 18, 303.45, '2019-03-06', '01:06:14', 'fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient'),
	(40, 17, 'Instalação elétrica', 31, 730.37, '2019-02-06', '01:03:18', 'purus mauris a nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices,'),
	(41, 4, 'Instalação de gerador', 16, 665.59, '2019-01-06', '19:14:00', 'in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis'),
	(42, 24, 'Instalação elétrica', 45, 218.22, '2018-12-06', '18:05:07', 'Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna.'),
	(43, 1, 'Instalação de gerador', 33, 441.88, '2018-11-06', '02:01:15', 'vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare,'),
	(44, 4, 'Instalação de gerador', 14, 477.47, '2018-10-06', '01:05:04', 'gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor. Fusce'),
	(45, 13, 'Troca de lâmpadas', 11, 650.13, '2019-06-06', '18:42:13', 'Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum'),
	(46, 23, 'Instalação de gerador', 45, 798.01, '2019-05-06', '22:09:05', 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed'),
	(47, 9, 'Instalação elétrica', 17, 370.22, '2019-04-06', '03:05:02', 'blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum'),
	(48, 6, 'Troca de lâmpadas', 24, 148.92, '2019-03-06', '05:05:07', 'adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit amet'),
	(49, 11, 'Instalação de gerador', 31, 371.59, '2019-02-06', '15:00:04', 'mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare'),
	(50, 22, 'Troca de lâmpadas', 23, 363.15, '2019-01-06', '22:03:13', 'at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante.');
/*!40000 ALTER TABLE `report_os` ENABLE KEYS */;

-- Copiando dados para a tabela projeto.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`ID`, `nome`, `email`, `senha`) VALUES
	(1, 'Alexei', 'alexei@imediata.com.br', '698dc19d489c4e4db73e28a713eab07b');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
