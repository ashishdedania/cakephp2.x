-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 07, 2024 at 05:20 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contact_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` text NOT NULL,
  `state` varchar(100) NOT NULL,
  `is_admin` tinyint NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`, `contact_number`, `address`, `state`, `is_admin`, `created`, `modified`, `deleted`) VALUES
(1, 'AshishRR', 'Dedaniya', '45b972d03c340828ccce71f63b743d26a018a57e', 'ash@gmail.com', '9909529154', '																																								eeeeeeee																																																				', 'Maharashtra', 1, '2024-03-05 01:38:50', '2024-03-07 05:18:56', NULL),
(2, 'a', 'a', 'a', 'a45sh@gmail.com', '9991231234', '										', 'Arunachal Pradesh', 0, '2024-03-05 01:39:11', '2024-03-07 00:18:15', '2024-03-07 03:22:14'),
(3, 'asd', 'asd', 'asd', 'asd@gmail.com', '', '', '', 0, '2024-03-05 01:39:50', '2024-03-05 01:39:50', '2024-03-07 03:25:01'),
(19, 'tarun', 'tarun', '45b972d03c340828ccce71f63b743d26a018a57e', 'tarun@gmail.com', '1234567890', '										aaaaa										', 'Arunachal Pradesh', 0, '2024-03-07 03:27:45', '2024-03-07 05:19:11', '2024-03-07 05:19:19'),
(5, 'wert', 'wert', '123456', 'wert@gmail.com', '', '', '', 0, '2024-03-05 09:28:16', '2024-03-05 09:28:16', NULL),
(6, 'sam', 'sam', '42830fd43fa7087f18e9d3f91d03b32a598783af', 'sam@gmail.com', '', '', '', 0, '2024-03-05 10:13:00', '2024-03-05 14:03:18', NULL),
(7, 'ssss', 'ssss', '6118ee933f76ecd49e67815a7c16316ce5d70a7c', 'sss@gmail.com', '', '', '', 0, '2024-03-05 14:04:08', '2024-03-05 14:04:08', NULL),
(8, 'ppp', 'ppp', '40f2d8fd378065b653063e1a6b4eaa1c358d1bf3', 'ppp@gmail.com', '9999999999', '1111111111111									', 'Arunachal Pradesh', 1, '2024-03-05 14:04:46', '2024-03-07 02:07:23', NULL),
(9, 'lll', 'lll', '658781c37b05e56f7d1059c234281188a71882df', 'lllll@gmail.com', '', '', '', 0, '2024-03-05 14:05:32', '2024-03-05 14:05:32', NULL),
(10, 'plok', 'oplk', 'bb7bba850b929a5bcbf75f411770a99eeaf1c13d', 'jkl@gmail.com', '', '', '', 0, '2024-03-05 14:05:52', '2024-03-05 14:05:52', NULL),
(11, 'plok45', 'oplk45', 'b31a09d5602faba56bf2698f7ff714ee16daadea', 'jklp@gmail.com', '', '', '', 0, '2024-03-05 14:06:06', '2024-03-05 14:06:06', NULL),
(12, 'ard', 'ard', '161381c8812ee583b526d15a3d4780a29244dbea', 'ard@gmail.com', '', '', '', 0, '2024-03-05 23:45:00', '2024-03-05 23:45:00', NULL),
(13, 'ashish', 'ashish', '383d6fc1691d5b68043a9fdc8540755163162bf8', 'ashish@gmail.com', '', '', '', 0, '2024-03-06 07:27:00', '2024-03-06 07:27:00', NULL),
(16, 'ramayuga', 'sharma', '45b972d03c340828ccce71f63b743d26a018a57e', 'ram34@gmail.com', '9909529154', '															ayodhya 															', 'Uttar Pradesh', 0, '2024-03-06 12:53:44', '2024-03-06 23:50:14', NULL),
(17, 'qq', 'qq', '45b972d03c340828ccce71f63b743d26a018a57e', 'ram34@gmail.com78', '1234567890', '					aaaaaaa					', 'Arunachal Pradesh', 0, '2024-03-06 13:09:46', '2024-03-07 00:17:13', NULL),
(18, 'tenali', 'tenali', '45b972d03c340828ccce71f63b743d26a018a57e', 'ash@gmail.com89', '7214567890', 'aaaa', 'Arunachal Pradesh', 0, '2024-03-07 02:03:01', '2024-03-07 02:03:01', NULL),
(20, 'ww', 'ee', '45b972d03c340828ccce71f63b743d26a018a57e', 'ww@tmail.com', '1234567890', 'aaaaa', 'Arunachal Pradesh', 0, '2024-03-07 04:44:33', '2024-03-07 04:44:33', NULL),
(21, 'ppp', 'llll', '45b972d03c340828ccce71f63b743d26a018a57e', 'tr@gmail.com', '1234567891', 'aaaaa', 'Arunachal Pradesh', 0, '2024-03-07 04:45:38', '2024-03-07 04:45:38', NULL),
(22, 'qaz', 'edc', '45b972d03c340828ccce71f63b743d26a018a57e', 'qaz@gmail.com', '1234567891', 'aaaa', 'Arunachal Pradesh', 0, '2024-03-07 04:48:05', '2024-03-07 04:48:05', '2024-03-07 05:12:42'),
(23, 'shyam', 'shyam', '45b972d03c340828ccce71f63b743d26a018a57e', 'shyam@gmail.com', '1234567892', '123444', 'Arunachal Pradesh', 0, '2024-03-07 05:19:56', '2024-03-07 05:19:56', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
