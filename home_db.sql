-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 28, 2023 at 10:21 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(2, 'admin01', 'admin01@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `property_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `offer` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `furnished` varchar(50) NOT NULL,
  `bhk` varchar(10) NOT NULL,
  `deposite` varchar(10) NOT NULL,
  `bedroom` varchar(10) NOT NULL,
  `bathroom` varchar(10) NOT NULL,
  `balcony` varchar(10) NOT NULL,
  `carpet` varchar(10) NOT NULL,
  `age` varchar(2) NOT NULL,
  `total_floors` varchar(2) NOT NULL,
  `room_floor` varchar(2) NOT NULL,
  `loan` varchar(50) NOT NULL,
  `lift` varchar(3) NOT NULL DEFAULT 'no',
  `security_guard` varchar(3) NOT NULL DEFAULT 'no',
  `play_ground` varchar(3) NOT NULL DEFAULT 'no',
  `garden` varchar(3) NOT NULL DEFAULT 'no',
  `water_supply` varchar(3) NOT NULL DEFAULT 'no',
  `power_backup` varchar(3) NOT NULL DEFAULT 'no',
  `parking_area` varchar(3) NOT NULL DEFAULT 'no',
  `gym` varchar(3) NOT NULL DEFAULT 'no',
  `shopping_mall` varchar(3) NOT NULL DEFAULT 'no',
  `hospital` varchar(3) NOT NULL DEFAULT 'no',
  `school` varchar(3) NOT NULL DEFAULT 'no',
  `market_area` varchar(3) NOT NULL DEFAULT 'no',
  `image_01` varchar(50) NOT NULL,
  `image_02` varchar(50) NOT NULL,
  `image_03` varchar(50) NOT NULL,
  `image_04` varchar(50) NOT NULL,
  `image_05` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `user_id`, `property_name`, `address`, `price`, `type`, `offer`, `status`, `furnished`, `bhk`, `deposite`, `bedroom`, `bathroom`, `balcony`, `carpet`, `age`, `total_floors`, `room_floor`, `loan`, `lift`, `security_guard`, `play_ground`, `garden`, `water_supply`, `power_backup`, `parking_area`, `gym`, `shopping_mall`, `hospital`, `school`, `market_area`, `image_01`, `image_02`, `image_03`, `image_04`, `image_05`, `description`, `date`) VALUES
(1, '21', 'Home Land', 'Sri Lanka, Colombo', '2000000', 'house', 'sale', 'ready to move', 'furnished', '3', '500000', '4', '2', '1', '1', '2', '2', '2', 'available', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'kwgc4dwbBnLuD7Ei08cc.png', 'r1dDWPEJ4sRS6SiDmNTV.png', 'HTMlXYHiFPPqYYVlOBS8.png', 'mKimtZGq8gR3HgdzorHY.png', '208nzHPoHRLLVgQWvvvc.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos assumenda ipsam reiciendis, perferendis ex quibusdam minima. Nesciunt ipsum soluta dicta odio quo, optio earum repellat mollitia amet. Nobis ea nemo inventore deleniti unde? Voluptatum nostrum totam laborum non, sunt deleniti dolore. Repellat, earum excepturi. Ipsam sequi nulla eaque qui possimus, autem, molestiae sit ipsa, dolorum aut dolores dolor! Minus, sed.', '0000-00-00'),
(2, '21', 'House Land Line', 'Sri Lanka, Colombo 3', '28000000', 'flat', 'sale', 'ready to move', 'furnished', '3', '8000000', '3', '2', '1', '1', '2', '16', '10', 'available', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'pI6bmetPJCGZQ60dYIcJ.png', 'Y7MfOJLSKfeCkEv3QYvd.png', 'sYzbIYiSa18E5VaFONX2.png', 'gbFC5ZVSYG4l0QNu5VBW.png', 'pN4tX5amnBomtLCcLmMm.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus mollitia delectus eos ratione eaque ipsam voluptatum quos enim voluptas! Repellat, eaque laudantium? Incidunt quod, eveniet voluptates cumque libero enim aliquam in eos, voluptatum et quis illo dolor porro repellendus architecto corporis ratione laudantium beatae quaerat omnis eum saepe pariatur? Quos beatae consequuntur repellendus dicta architecto laborum perspiciatis officiis. Eligendi illum accusantium odit esse animi cumque quod nostrum eum aperiam.', '0000-00-00'),
(3, '21', 'beautiful House', 'Sri Lanka, Galle', '1950000', 'house', 'sale', 'ready to move', 'furnished', '4', '185000', '5', '2', '2', '2', '2', '2', '2', 'available', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'CicE5IZ4EzVDpd2TVrDP.png', 'p7oKJJ4cjnGz3XMyuGd1.png', 'w3kriws7Kz3M3YhMQX4G.png', '6FNDkt1qz5lPk7CPBvE6.png', 'DF7rjAJArHQEevLlUmbL.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nobis sunt quis facilis consequuntur, laudantium vero similique iste pariatur earum, minima quibusdam reprehenderit voluptatibus excepturi molestias quas architecto qui rem doloribus alias! Assumenda, aperiam dolore omnis neque atque laudantium pariatur iste facilis incidunt possimus natus cupiditate, porro sunt quis ab sint dolor, adipisci odio quas labore officiis consequuntur. Exercitationem ullam minus similique ad in numquam. Labore consequatur esse animi totam quia consequuntur neque aut qui dolore! Laborum blanditiis tenetur numquam!', '0000-00-00'),
(4, '21', 'Home Line', 'Sri Lanka, Kandy', '2180000', 'house', 'sale', 'ready to move', 'furnished', '4', '210000', '5', '2', '2', '1', '2', '2', '2', 'available', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'WGfpkpNsW0QbsAmM5OM0.png', 'coSkHIxNQ8qBP2pR72d6.png', 'h6KVQVHatRmP6d9pHkG5.png', 'JCtDNwBGdUOLiQzuATAU.png', 'Yq6tRW5zd2iqNOaIa2TT.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil doloremque a consequuntur dolore ratione mollitia accusamus. Sunt pariatur perferendis provident facere placeat voluptatibus est, facilis ad id atque fugit repellat rerum incidunt sit optio neque, beatae eos, veritatis hic repudiandae veniam quos quia distinctio? Aliquam accusantium aperiam consectetur, expedita nam iure nesciunt exercitationem modi ab cupiditate excepturi quod maxime dolores unde provident iusto illo quos odio numquam qui neque quas quidem! Excepturi voluptate iusto voluptatum cumque odio quae debitis ut maxime! Esse vel expedita aliquid nisi enim dolorum reprehenderit.', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_id` varchar(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

DROP TABLE IF EXISTS `saved`;
CREATE TABLE IF NOT EXISTS `saved` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`id`, `property_id`, `user_id`) VALUES
(1, '1', '21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `password`) VALUES
(21, 'user01', '123456789', 'user01@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
