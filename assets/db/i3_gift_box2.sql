-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 29, 2019 at 02:40 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i3_gift_box`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `categoryName` varchar(100) COLLATE utf8_bin NOT NULL,
  `defaultImg` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCategory`, `categoryName`, `defaultImg`) VALUES
(1, 'multimedia', 'https://www.nato-pa.int/sites/default/files/default_images/default-image.jpg'),
(2, 'Baby items', '../../assets/img/categories/babyitems.png'),
(3, 'Bags', '../../assets/img/categories/bags.png'),
(4, 'Books', '../../assets/img/categories/books.png'),
(5, 'Clothes', '../../assets/img/categories/clothes.png'),
(6, 'Creative Hobbies', '../../assets/img/categories/creativehobbies.png'),
(7, 'Electronics', '../../assets/img/categories/electronics.png'),
(8, 'Furniture', '../../assets/img/categories/furniture.png'),
(9, 'Hygiene', '../../assets/img/categories/hygiene.png'),
(10, 'Jewelry', '../../assets/img/categories/jewelry.png'),
(11, 'Kitchenware', '../../assets/img/categories/kitchenware.png'),
(12, 'Miscellaneous', '../../assets/img/categories/miscellaneous.png'),
(13, 'Movies', '../../assets/img/categories/movies.png'),
(14, 'Music', '../../assets/img/categories/music.png'),
(15, 'Pet Accessories', '../../assets/img/categories/petaccessories.png'),
(16, 'Services', '../../assets/img/categories/services.png'),
(17, 'Shoes', '../../assets/img/categories/shoes.png'),
(18, 'Sports articles', '../../assets/img/categories/sportsarticles.png'),
(19, 'Tickets', '../../assets/img/categories/tickets.png'),
(20, 'Video Games', '../../assets/img/categories/videogames.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `productName` varchar(100) COLLATE utf8_bin NOT NULL,
  `productImg` text COLLATE utf8_bin DEFAULT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `creationDate` date NOT NULL,
  `creator` int(11) DEFAULT NULL,
  `claimer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `productName`, `productImg`, `description`, `creationDate`, `creator`, `claimer`) VALUES
(2, 'Vélo', '../../assets/img/imgProducts/5de0d63fb59922019-11-29-09-26-39vélo.jfif', 'Vélo de compétition permettant, selon la légende, de dépasser la vitesse du son', '2019-11-29', 15, NULL),
(3, 'Couteau', '../../assets/img/categories/kitchenware.png', 'un couteau de cuisine très coupant', '2019-11-29', 15, NULL),
(4, 'Panier', '../../assets/img/imgProducts/5de0d8300f30f2019-11-29-09-34-56panier.jfif', 'Un panier en osier afin d\'y loger vos amis légumes. Très comfortable même sur de longue distance', '2019-11-29', 17, NULL),
(5, 'Bonsai', '../../assets/img/imgProducts/5de0d8d8e7bd72019-11-29-09-37-44bonsai.jpg', 'Bonsai a donner, taillé avec amour en sphère sphérique', '2019-11-29', 18, NULL),
(6, 'Sac à dos', '../../assets/img/imgProducts/5de0da5eb66cb2019-11-29-09-44-14sacados.jpg', 'Sac à dos de voyage, permet de voyager avec un sac à dos. Logique', '2019-11-29', 19, NULL),
(7, 'Laine à tricoter', '../../assets/img/categories/creativehobbies.png', 'Boule de laine pour le tricot à donner', '2019-11-29', 20, NULL),
(8, 'Hello', '../../assets/img/categories/babyitems.png', 'ceci est un test ', '2019-11-29', 19, NULL),
(10, 'Coussin Ronflex', '../../assets/img/imgProducts/5de11f81926712019-11-29-02-39-13ronflex.jpg', 'Coussin Ronflex très confortable. Enfant non inclus', '2019-11-29', 22, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `idProductCategory` int(11) NOT NULL,
  `idProduct` int(11) DEFAULT NULL,
  `idCategory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`idProductCategory`, `idProduct`, `idCategory`) VALUES
(8, NULL, NULL),
(9, NULL, NULL),
(10, NULL, NULL),
(11, NULL, NULL),
(2, 2, 18),
(3, 3, 11),
(4, 4, 12),
(5, 5, 8),
(6, 6, 18),
(7, 7, 6),
(12, 8, 2),
(14, 10, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `userEmail` varchar(150) COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `userName` varchar(50) COLLATE utf8_bin NOT NULL,
  `userGroup` varchar(50) COLLATE utf8_bin NOT NULL,
  `imgProfile` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `userEmail`, `password`, `userName`, `userGroup`, `imgProfile`) VALUES
(13, 'toto@toto.com', '$2y$12$ElNh0mdnAQrjJ0MZYGGDOuC50nJv8ZrcNrOT6cMfn3g76Ga5qC122', 'Toto', 'WEB', 'https://robohash.org/Toto.png'),
(15, 'jordane@toto.com', '$2y$12$KhDHbh4UXhUDnfN9eWwCYegaxc3rvhMI63BPEjBUMGoX2Cj9eOcTC', 'Jordane', 'WEB', '../../assets/img/imgUpload/5ddfc416e40fe2019-11-28-01-56-54char-pikachu.png'),
(16, 'loulou@pepe.com', '$2y$12$YuD77uOiac3l.2FMag.IFe5j4XRbNdKYs1CiLkCp5fPuERlOwg8qK', 'loulou', 'GAME', '../../assets/img/imgUpload/5ddfe6ecf2d982019-11-28-04-25-32char-pikachu.png'),
(17, 'carotte@toto.com', '$2y$12$uc7vPZF7O8usDVwx9M3gdeQP0ldmE9/nP.n/K3mwba31N.Ez9G6a2', 'Carotte', 'GAME', '../../assets/img/imgUpload/5de0d7cb8e3f02019-11-29-09-33-15carotte.jfif'),
(18, 'alexandra@toto.com', '$2y$12$sr4UCOtYLoINh1xVgFXha.qs90mnxvLfD71xIUV9CH.fAk90frkPW', 'Alexandra', 'GAME', 'https://robohash.org/Alexandra.png'),
(19, 'cerise@toto.com', '$2y$12$1OFFgjTKsf.61jvCXRTjkexMkiqM/ftAxpSBCRX07QD7l8N0zjZTO', 'Cerise', 'WAD', '../../assets/img/imgUpload/5de0d98fdc5232019-11-29-09-40-47momartik.png'),
(20, 'valentine@toto.com', '$2y$12$ctaF7f9PUcMQlgknrxayhu.VFjE5yKim23L2ueVAw8wCQyCiWRf42', 'Valentine', 'WEB', 'https://robohash.org/Valentine.png'),
(22, 'jordanedevtest@gmail.com', '$2y$12$y9qvyerY8JKFPnneci20COHw4vBbgUTnjgh2qRlkQJaAVDYjJXBya', 'GigaMax FatPikachu', 'GAME', 'https://robohash.org/jordanedevtest@gmail.com.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `creator` (`creator`),
  ADD KEY `claimer` (`claimer`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`idProductCategory`),
  ADD KEY `idProduct` (`idProduct`,`idCategory`),
  ADD KEY `idCategory` (`idCategory`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `idProductCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`creator`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`claimer`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD CONSTRAINT `productcategory_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `category` (`idCategory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productcategory_ibfk_2` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
