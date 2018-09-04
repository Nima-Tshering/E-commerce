-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2018 at 10:16 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `E`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `cat`, `brand`, `price`, `img`) VALUES
(2, 'Canon 500', 'Camera', 'Canon', '20000', 'cam1.jpg'),
(3, 'Canon 1000', 'Camera', 'Canon', '25000', 'cam2.jpg'),
(4, 'Canon 2000', 'Camera', 'Canon', '30000', 'cam3.jpg'),
(5, 'Hp I3', 'Laptop', 'HP', '30000', 'hp1.jpg'),
(6, 'HP I5', 'Laptop', 'HP', '40000', 'hp2.jpg'),
(7, 'HP I7', 'Laptop', 'HP', '50000', 'hp3.jpeg'),
(8, 'Samsung J5', 'Mobile', 'Samsung', '10000', 'sam1.jpeg'),
(9, 'Samsung Galaxy', 'Mobile', 'Samsung', '50000', 'sam2.jpeg'),
(10, 'Dell I5', 'Laptop', 'Dell', '22000', 'dell1.jpeg'),
(11, 'PlayStation', 'Games', 'Samsung', '12000', 'game1.png'),
(12, 'PlayStation 4', 'Games', 'HP', '16000', 'game2.jpeg'),
(13, 'PlayStation 7', 'Games', 'Samsung', '18000', 'game3.jpg'),
(14, 'Samsung Tv', 'TV', 'Samsung', '30000', 'tv1.jpeg'),
(15, 'Samsung Tv 5', 'TV', 'Samsung', '45000', 'tv2.jpeg'),
(16, 'Samsung Tv 7', 'TV', 'Samsung', '50000', 'tv3.jpg'),
(17, 'Dell Inspire', 'Laptop', 'Dell', '45000', 'dell2.jpg'),
(18, 'Dell Inspire 5', 'Laptop', 'Dell', '50000', 'dell3.jpg'),
(19, 'Dell Inspire 6', 'Laptop', 'Dell', '55000', 'dell4.jpg'),
(20, 'HP Desire 6', 'Laptop', 'HP', '55000', 'hp4.jpg'),
(21, 'HP Desire 7', 'Laptop', 'HP', '60000', 'hp5.jpg'),
(22, 'Canon Dslr 4', 'Camera', 'Canon', '50000', 'canon4.jpg'),
(23, 'Canon Dslr 5', 'Camera', 'Canon', '60000', 'canon5.jpg'),
(24, 'Canon Dslr 7', 'Camera', 'Canon', '65000', 'canon6.png'),
(26, 'PlayStation 5', 'Games', 'HP', '60000', 'game5.jpg'),
(27, 'PlayStation 8', 'Games', 'Samsung', '38000', 'game6.jpg'),
(28, 'Samsung J6', 'Mobile', 'Samsung', '15000', 'sam4.jpg'),
(29, 'Samsung J8', 'Mobile', 'Samsung', '20000', 'sam5.jpg'),
(30, 'Samsung J9', 'Mobile', 'Samsung', '25000', 'sam6.jpg'),
(31, 'sadf', 'Laptop', 'HP', 'cxv', 'aansham2.jpg'),
(32, 'sdf', 'Laptop', 'HP', 'sfdsaf', 'aansham1.jpg'),
(33, 'sdf', 'Laptop', 'HP', 'sfdsaf', 'aansham1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
