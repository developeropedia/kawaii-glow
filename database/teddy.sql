-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 08:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `img`, `created_at`) VALUES
(1, 'Product 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quam quae debitis aut id eum deserunt blanditiis rerum, ipsa nobis porro maiores. Vero animi atque error dolorem asperiores ex suscipit.', 100, '7.gif', '2023-03-17 08:41:56'),
(2, 'Product 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quam quae debitis aut id eum deserunt blanditiis rerum, ipsa nobis porro maiores. Vero animi atque error dolorem asperiores ex suscipit.', 150, '1.webp', '2023-03-17 08:43:01'),
(3, 'Product 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quam quae debitis aut id eum deserunt blanditiis rerum, ipsa nobis porro maiores. Vero animi atque error dolorem asperiores ex suscipit.', 200, '1.webp', '2023-03-17 08:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `page` varchar(255) NOT NULL DEFAULT 'about'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `heading`, `description`, `img`, `page`) VALUES
(1, 'About US', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quam quae debitis aut id eum deserunt blanditiis rerum, ipsa nobis porro maiores. Vero animi atque error dolorem asperiores ex suscipit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur dolorum dolorem fuga quos? Neque voluptas laudantium illo dolor doloribus laboriosam', 'weAre (2).jpg', 'about'),
(2, 'Our Core Values', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quam quae debitis aut id eum deserunt blanditiis rerum, ipsa nobis porro maiores. Vero animi atque error dolorem asperiores ex suscipit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur dolorum dolorem fuga quos? Neque voluptas laudantium illo dolor doloribus laboriosam', 'training.jpg', 'about'),
(3, 'Our Story', 'Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.\r\n\r\nCurabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada.\r\n\r\nDonec sollicitudin molestie malesuada. Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus.Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Nulla porttitor accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.\r\n\r\nVestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt.\r\n\r\nCras ultricies ligula sed magna dictum porta. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada.\r\n\r\nCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat.', 'image 1.png', 'story');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'home_video', 'Teddy Bear, Teddy Bear Song - CoComelon Nursery Rhymes & Kids Songs.mp4'),
(2, 'title', 'Kawaii glow'),
(3, 'footer_img', 'footer.png'),
(4, 'footer_description', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non esse aspernatur laborum maxime repellat ipsa officia illum velit ipsam incidunt error voluptates ex nemo, porro, veritatis aliquam distinctio rem eum?'),
(5, 'email', 'email@gmail.com'),
(6, 'phone', '+48 000 0000'),
(7, 'logo', '16790242176413e0596f822-logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`) VALUES
(1, 'admin', '$2y$10$BvA.mGC20xlZ9ZfHYiDh3uGVqM.95Hv5Y5h4z.9NhqK0xxBMXQj4a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `word` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`id`, `word`) VALUES
(1, 'Word 1'),
(2, 'Word 2'),
(3, 'Word 3'),
(4, 'Word 4'),
(5, 'Word 5'),
(6, 'Word 6'),
(7, 'Word 7'),
(8, 'Word 8'),
(9, 'Word 9'),
(10, 'Word 10'),
(11, 'Word 11'),
(12, 'Word 12'),
(13, 'Word 13'),
(14, 'Word 14'),
(15, 'Word 15'),
(16, 'Word 16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
