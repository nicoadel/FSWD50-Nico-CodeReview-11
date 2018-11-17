-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 04:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_nico_adelmann_travelblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `concert_id` int(11) NOT NULL,
  `concert_name` varchar(255) DEFAULT NULL,
  `concert_image` varchar(255) DEFAULT NULL,
  `concert_description` varchar(255) DEFAULT NULL,
  `concert_date` date DEFAULT NULL,
  `concert_time` time DEFAULT NULL,
  `concert_web` varchar(255) DEFAULT NULL,
  `concert_price` int(11) DEFAULT NULL,
  `FK_adress` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `concerts`
--

INSERT INTO `concerts` (`concert_id`, `concert_name`, `concert_image`, `concert_description`, `concert_date`, `concert_time`, `concert_web`, `concert_price`, `FK_adress`) VALUES
(1, 'Konzerthaus', 'https://www.wien.info/media/images/wiener-konzerthaus-3to2-2.jpeg/image_gallery', 'A big concert', '2018-11-28', '23:00:00', 'https://www.konzerthaus.at/', 110, 3),
(2, 'Wiener Stadthalle', 'https://www.stadthalle.com/tools/imager/imager.php?file=%2Fmedia%2Fgallery%2Foriginal%2F79.jpg&width=560&height=420', 'A big hall', '2018-12-05', '16:00:00', 'https://www.stadthalle.com/en', 60, 4);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL,
  `place_city` varchar(255) DEFAULT NULL,
  `place_zip` int(11) DEFAULT NULL,
  `place_adress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `place_city`, `place_zip`, `place_adress`) VALUES
(1, 'Vienna', 1050, 'Wiedner Hauptstrasse 125'),
(2, 'Vienna', 1070, 'Mariahilfer Str. 114'),
(3, 'Vienna', 1030, 'Lothringerstrasse 20'),
(4, 'Vienna', 1150, 'Roland-Rainer-Platz 1'),
(5, 'Vienna', 1010, 'Wipplingerstrasse 8'),
(6, 'Vienna', 1130, 'Natur');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_image` varchar(255) DEFAULT NULL,
  `restaurant_telephone_num` varchar(255) DEFAULT NULL,
  `restaurant_type` varchar(255) DEFAULT NULL,
  `restaurant_description` varchar(255) DEFAULT NULL,
  `restaurant_webadress` varchar(255) DEFAULT NULL,
  `FK_location` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `restaurant_name`, `restaurant_image`, `restaurant_telephone_num`, `restaurant_type`, `restaurant_description`, `restaurant_webadress`, `FK_location`) VALUES
(1, 'Omnom Burger', 'http://www.mmfb.at/wp-content/uploads/2015/07/IMG_8084.jpg', '0660 7071015', 'Burger', 'Make your own Burger', 'http://www.omnomburger.at', 1),
(2, 'LeBurger', 'https://media-cdn.tripadvisor.com/media/photo-s/0e/f7/3a/cd/custom-burger.jpg', '01 9059615', 'Burger', 'Choose a Burger!', 'https://www.leburger.at', 2);

-- --------------------------------------------------------

--
-- Table structure for table `things_to_do`
--

CREATE TABLE `things_to_do` (
  `things_id` int(11) NOT NULL,
  `things_name` varchar(255) NOT NULL,
  `things_picture` varchar(255) DEFAULT NULL,
  `things_type` varchar(255) DEFAULT NULL,
  `things_description` varchar(255) DEFAULT NULL,
  `things_web` varchar(255) DEFAULT NULL,
  `FK_adress` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `things_to_do`
--

INSERT INTO `things_to_do` (`things_id`, `things_name`, `things_picture`, `things_type`, `things_description`, `things_web`, `FK_adress`) VALUES
(1, 'Lainzer Tiergarten', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Lainzer_Tiergarten_Wiese.jpg/300px-Lainzer_Tiergarten_Wiese.jpg', 'Animals', 'Many animals', 'https://www.wien.gv.at/umwelt/wald/erholung/lainzertiergarten/', 6),
(2, 'Inner City', 'https://media-cdn.tripadvisor.com/media/photo-s/05/d4/45/02/vienna-city-tours.jpg', 'Buildings', 'Beautiful buildings', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` varchar(255) DEFAULT NULL,
  `pwdUsers` longtext,
  `emailUsers` varchar(255) DEFAULT NULL,
  `admin` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `pwdUsers`, `emailUsers`, `admin`) VALUES
(4, 'testnoadmin', '$2y$10$Evc3HTBuVlhcjw5ksWiwCuTlQNj34eot3ZEnxyDSVp8jiHgx55uRS', 'test@gmail.com', 0),
(5, 'testadmin', '$2y$10$OHXRRPVh9jVFcmLlXPVYE.F2qLCCWXYnY0N7FWToJr.TeO3xjdEA.', 'asdaid@fsfsdf.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`concert_id`),
  ADD KEY `FK_adress` (`FK_adress`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`),
  ADD KEY `FK_location` (`FK_location`);

--
-- Indexes for table `things_to_do`
--
ALTER TABLE `things_to_do`
  ADD PRIMARY KEY (`things_id`),
  ADD KEY `FK_adress` (`FK_adress`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `concert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `things_to_do`
--
ALTER TABLE `things_to_do`
  MODIFY `things_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `concerts`
--
ALTER TABLE `concerts`
  ADD CONSTRAINT `concerts_ibfk_1` FOREIGN KEY (`FK_adress`) REFERENCES `place` (`place_id`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`FK_location`) REFERENCES `place` (`place_id`);

--
-- Constraints for table `things_to_do`
--
ALTER TABLE `things_to_do`
  ADD CONSTRAINT `things_to_do_ibfk_1` FOREIGN KEY (`FK_adress`) REFERENCES `place` (`place_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
