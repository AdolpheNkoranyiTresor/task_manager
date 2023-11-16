-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table taskmanager.tasks: ~0 rows (approximately)

-- Dumping data for table taskmanager.users: ~28 rows (approximately)
REPLACE INTO `users` (`Id`, `Username`, `Email`, `Password`) VALUES
	(1, 'adolphe', 'ado@gmail.com', '1234567890'),
	(21, 'asdasdas', 'Tresor@gmail.com', 'asdasdasdas'),
	(22, 'asdasdaswdwqd', 'Tresor@gmail.com', '12121212'),
	(23, 'Tresor1234', 'Tresor@gmail.com', '23435t2341'),
	(24, 'Tresor123432523', 'Tresor@gmail.com', 'sdwdwdwqdda'),
	(25, 'Tresor12343252322', 'Tresor@gmail.com', 'sdwdwdwqdda1'),
	(26, 'Nkoranyiqw', 'Tresor@gmail.com', '12121212'),
	(27, 'Tresorad', 'Tresor@gmail.com', '$2y$10$YOuHVvPeUbQVYgV3hG6ujeX.AAovlb1SAQmCMzNp5xJFUEkJD5BKq'),
	(29, 'boni', 'Tresor@gmail.com', '$2y$10$eajKvRC5Q1KXa0wlkfYfAuRpR42CtR9CDo0GI0qIXtDcweugKUhqu'),
	(30, 'elcapuchino', 'nko@gmail.com', '$2y$10$ewj/erDQj2mkXF0FLGAVX.Qj73OTJBC8LxEtpb73XNIz9.2huZL6e'),
	(31, 'Test', '11111111@gmail.com', '$2y$10$OXZ.VoTplD79fztnRQRtfelIWBkIqeP.VJE/Tw5CvKMjZKkJprgeK'),
	(33, 'Nko', 'nkoranyi@gmail.com', '$2y$10$O5XWDXt3BMNxuinAkRZM/uIibmhBCmd3VlqqoaZ6pXlb/67GV58pC'),
	(34, 'Tresor', 'gregerger@gmail.com', '$2y$10$fanlK5Qb5XBJbWinnBtJS.gCxpBM4F3/SCcLCLl9aHJhGqogN3s2q'),
	(35, 'nick', 'nko@gmail.com', '$2y$10$iePBVZKWDmzracw9qOeqNe9Dn0rODPJIZ5vhxBd8Ena/VDpjHBhRW'),
	(36, 'RTest', 'adolphenickelnkoranyi@gmail.com', '$2y$10$HqnlqqpoyMqoSFTRPoqw4e77VSXp725MiD9IJSfAcVPevS95TvepK'),
	(37, 'Testing', 'testing@gmail.com', '$2y$10$0eHWq2qPgCyRZ3bNFDJDy.CKHZXE8rm73uibk0D4NLMrtLV/CmhXi'),
	(38, '1212', '1212@gmail.com', '$2y$10$7CxQ4/YzmUcC6Rl/FOHlRuSe2TuietTmNAqGjFdbifX431XifrQWO'),
	(39, '1122', '1122@gmail.com', '$2y$10$U9L/ypBruBue1itycnfCmu378JRhChK3HsmQUh4YhLC6hCXYhW/s.'),
	(40, 'Kevin', 'kevin@gmail.com', '$2y$10$dUYub0Z.mpf2UvUesv8QlOUM/c14/IkO0ySk6RafSojmJuN/WeVJS'),
	(41, 'bonfase', 'boni@gmail.com', '$2y$10$xD7kYhgMLj9b11vac.Ebm.aE5FiC0P79HGmIPo/4vWlmszC6qpZnu'),
	(42, 'joan', 'joan@gmail.com', '$2y$10$cbLILHfYXp5yU4bXgSJJuOv8p1MZF6zgM4mO/lUExf./P5Vi6.9IK'),
	(43, 'Jesus', 'jesus@gmail.com', '$2y$10$DVKQCTNBEIWoeD6hkf88b.8rT.7sbex6XhQi.n/lMuVUq0FpmTWeq'),
	(44, 'Ado12', 'ado12@gmail.com', '$2y$10$kQk0J5zzNdfT2a4c4oPjUufOYO358T5IYWxKbctmcB/NtYQ5DsDzO'),
	(45, 'AdolpheNkoranyi', 'adolphenickelnkoranyi@gmail.com', '$2y$10$ZMaDy8iAqOg2IkFUjVkZBOwNY1NQdmechMvw7BvSI1ZaB67Vyrh0i'),
	(46, 'Cofee', 'cofee@gmail.com', '$2y$10$LuEk7DrBQ2nCTH5/qgg4j.8jAN5KL5nku4KQcjNRRoUCAoitapkoy'),
	(47, 'Sam', 'adolphenickelnkoranyi@gmail.com', '$2y$10$WdVYzl08CW1nuRjruCz0serRHLBjh4Vs8a0oyB2yCpF/lbP6zQJmS'),
	(48, 'John Doe', 'your@gmail.com', '$2y$10$s6Xdpwlqr.0/StrgxRoXJO.GdeuFLL10OnmZIZV45nfCy34vI2Pxe'),
	(49, 'Jann Doe', 'jane@gmail.com', '$2y$10$Tcerog4BM..VTUXknxuAJOtgI/ZBOxXj7/LoNZ.QXH8.lRPNkfNH2');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
