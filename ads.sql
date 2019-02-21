-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 07:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ads`
--

-- --------------------------------------------------------

--
-- Table structure for table `adver`
--

CREATE TABLE `adver` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `category` enum('job','electronics','cars','clothes','sport','furniture') NOT NULL,
  `price` int(11) NOT NULL,
  `body` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `data_end` date NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `adver`
--

INSERT INTO `adver` (`id`, `name`, `title`, `category`, `price`, `body`, `foto`, `data`, `data_end`, `email`, `phone`) VALUES
(5, 'Buty sportowe Nike', 'Warszawa', 'clothes', 400, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod dictum placerat. Aliquam tincidunt, mauris nec fermentum varius, turpis nisl feugiat nisl, vitae malesuada mi nisl tempor lorem. Suspendisse sit amet viverra dolor. Sed eu libero malesuada nibh suscipit aliquam nec a odio.', 'shoes.jpg', '2019-02-21', '2019-04-07', 'shoes@wp.pl', '12'),
(6, 'Canon EOS 1300D', 'Wrocław', 'electronics', 2500, 'In feugiat varius efficitur. Integer blandit pulvinar felis ac auctor. Vivamus at lorem quis nibh convallis scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus metus sem, ullamcorper blandit ornare eu, aliquam vel dolor. Sed eget sagittis justo. Nullam leo erat, pulvinar sed maximus eu, vehicula vitae elit. Nulla accumsan mauris faucibus lacus ornare ornare eget non erat. Quisque et metus nisl. In vel tincidunt velit, sed elementum elit. Praesent eget urna risus. Aliquam tempus cursus condimentum.', 'camera.jpg', '2019-02-17', '2019-04-14', 'canon@poczta.com', '863521635'),
(8, 'Mustang GT', 'Kraków', 'cars', 60000, 'Donec dapibus vel quam eget varius. Integer nec enim ut sem placerat accumsan. Fusce non nisi semper, feugiat ante quis, sagittis ante. Nullam ultricies dolor quam, sit amet auctor magna bibendum in. Vivamus malesuada pharetra mi. Aliquam vitae elit quis sapien tempus mattis id in dui. Donec eget imperdiet lacus. Etiam id rhoncus ligula. Duis massa nibh, luctus pellentesque libero ut, rhoncus lobortis augue. Nullam luctus lacus vitae turpis suscipit scelerisque. Fusce hendrerit enim id sapien ullamcorper, in faucibus mauris tempor.', 'car.jpg', '2019-02-19', '2019-03-03', 'mustang@gmail.com', '563532165'),
(9, 'Meble kuchenne', 'Rzeszów', 'furniture', 500, 'Vivamus quis turpis consequat, vestibulum erat ac, ornare dui. Quisque porttitor diam tortor, non accumsan elit tincidunt eu. Praesent sit amet libero interdum nulla malesuada luctus cursus quis mi. Integer posuere purus in nulla congue interdum non eu massa. Curabitur tellus diam, efficitur luctus sollicitudin iaculis, sodales non ligula. Phasellus interdum quam non erat finibus tempor molestie ut odio. Quisque aliquet arcu ac tincidunt venenatis. Suspendisse sed consectetur metus.', 'forni.jpg', '2019-02-19', '2019-03-10', 'meble@onet.pl', '863523653'),
(10, 'Iphone 6s', 'Warszawa', 'electronics', 1200, 'Vivamus quis turpis consequat, vestibulum erat ac, ornare dui. Quisque porttitor diam tortor, non accumsan elit tincidunt eu. Praesent sit amet libero interdum nulla malesuada luctus cursus quis mi. Integer posuere purus in nulla congue interdum non eu massa. Curabitur tellus diam, efficitur luctus sollicitudin iaculis, sodales non ligula. Phasellus interdum quam non erat finibus tempor molestie ut odio. Quisque aliquet arcu ac tincidunt venenatis. Suspendisse sed consectetur metus.', 'phone.jpg', '2019-02-19', '2019-03-31', 'phone@tlen.pl', '536635123'),
(11, 'rower', 'wysokie', 'sport', 500, 'Praesent eget orci sit amet nunc eleifend maximus ut dictum est. Quisque odio mi, dignissim sit amet ante in, tempor commodo erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque non commodo tortor, quis porta libero. Vivamus laoreet pharetra nisi, id lacinia diam hendrerit vitae. Aenean consequat, risus vitae mollis vulputate, ipsum elit aliquam elit, eget pretium turpis diam eget nisi. Praesent sed nulla efficitur, venenatis mauris eget, euismod mauris.\r\n\r\nVestibulum iaculis id lectus ac faucibus. Pellentesque augue ligula, rhoncus eget leo eget, fringilla sollicitudin lectus. Curabitur a lorem tincidunt, elementum tellus sed, egestas magna. Curabitur non pretium sem. Aenean sagittis massa ut arcu hendrerit, et finibus quam rhoncus. Aliquam in arcu nec arcu auctor faucibus ut eu nunc. Integer porttitor leo eget fringilla vulputate. Mauris id eleifend nisl. Vivamus in auctor magna. Duis congue bibendum magna porta vehicula. Cras a neque ex. Sed egestas maximus ligula placerat porttitor.', 'bic.jpg', '2019-02-24', '2019-03-31', 'rower@wp.pl', '96345362'),
(12, 'Smartwatch Gear S3 SM-R760N', 'Poznań', 'electronics', 1230, 'Ut in blandit nulla. Sed sodales risus nec odio pulvinar, ac tempor nulla porttitor. Quisque blandit fringilla euismod. Quisque dictum ligula vitae justo commodo, vel ornare purus convallis. Pellentesque vel mi vel leo molestie facilisis ac eget tellus. Quisque gravida nec risus ac cursus. Cras accumsan lacus sit amet lectus luctus tempor. Pellentesque a quam id nisi pretium pulvinar. Suspendisse nunc ex, tempus quis justo eget, vestibulum facilisis lorem. Phasellus varius posuere eros quis fermentum.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst. Vestibulum viverra luctus ultricies. Cras a sapien vestibulum, congue tortor non, efficitur ligula. Cras vel maximus velit. Sed iaculis tempor sapien et efficitur. Cras lobortis diam quis lacus facilisis, eget laoreet ex placerat. Mauris aliquam consectetur mi vel aliquet. Suspendisse hendrerit magna sit amet ultricies iaculis.', 'smart.jpg', '2019-02-28', '2019-03-31', 'watch@smartwatch.pl', '863536421');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`) VALUES
(12, '', 'test', '$2y$10$uuhpfFY9hWE5WgpRryjQpeTrzQc2mpMLLmWbmwxDmqcPAyhzf/vka', 'wojtek@op.pl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adver`
--
ALTER TABLE `adver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adver`
--
ALTER TABLE `adver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
