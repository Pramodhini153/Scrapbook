-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 08:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Nature'),
(2, 'BirthDay'),
(3, 'Friends'),
(4, 'New Born'),
(5, 'Travel'),
(6, 'Love\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_keyword` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`product_id`, `product_title`, `product_desc`, `product_keyword`, `category_id`, `product_image`, `dates`, `status`) VALUES
(1, 'nature', 'nature', 'nature', 1, 'nature4.png', '2023-06-02 05:25:53', '1'),
(2, 'nature', 'nature', 'nature', 1, 'nature5.png', '2023-06-02 05:26:19', '1'),
(3, 'nature', 'nature', 'nature', 1, 'nature3.png', '2023-06-02 05:26:43', '1'),
(4, 'nature', 'nature', 'nature', 1, 'nature2.png', '2023-06-02 05:27:03', '1'),
(5, 'nature', 'nature', 'nature', 1, 'nature1.png', '2023-06-02 05:27:25', '1'),
(6, 'birthday', 'birthday', 'birthday', 2, 'Untitled design (1).png', '2023-06-02 05:29:22', '1'),
(7, 'birthday', 'birthday', 'birthday', 2, 'Untitled design (2).png', '2023-06-02 05:29:44', '1'),
(8, 'birthday', 'birthday', 'birthday', 2, 'Untitled design (5).png', '2023-06-02 05:30:04', '1'),
(9, 'birthday', 'birthday', 'birthday', 2, 'Untitled design (6).png', '2023-06-02 05:30:24', '1'),
(10, 'birthday', 'birthday', 'birthday', 2, 'Untitled design (7).png', '2023-06-02 05:30:43', '1'),
(11, 'birthday', 'birthday', 'birthday', 2, 'Untitled design (8).png', '2023-06-02 05:42:34', '1'),
(12, 'birthday', 'birthday', 'birthday', 2, 'Untitled design (9).png', '2023-06-02 05:42:50', '1'),
(13, 'birthday', 'birthday', 'birthday', 2, 'Untitled design (10).png', '2023-06-02 05:43:07', '1'),
(14, 'birthday', 'birthday', 'birthday', 2, 'Untitled design (11).png', '2023-06-02 05:43:22', '1'),
(15, 'friends', 'friends', 'friends', 3, 'Best Friend.png', '2023-06-02 05:43:58', '1'),
(16, 'friends', 'friends', 'friends', 3, 'Best Friend (3).png', '2023-06-02 05:44:14', '1'),
(17, 'friends', 'friends', 'friends', 3, 'Best Friend (2).png', '2023-06-02 05:44:28', '1'),
(18, 'friends', 'friends', 'friends', 3, 'Best Friend (1).png', '2023-06-02 05:44:43', '1'),
(19, 'new born', 'new born', 'new born', 4, 'b1.png', '2023-06-02 05:45:22', '1'),
(20, 'new born', 'new born', 'new born', 4, 'b2.png', '2023-06-02 05:45:36', '1'),
(21, 'new born', 'new born', 'new born', 4, 'b3.png', '2023-06-02 05:45:55', '1'),
(22, 'new born', 'new born', 'new born', 4, 'b4.png', '2023-06-02 05:46:09', '1'),
(23, 'new born', 'new born', 'new born', 4, 'b5.png', '2023-06-02 05:46:26', '1'),
(24, 'new born', 'new born', 'new born', 4, 'b6.png', '2023-06-02 05:46:42', '1'),
(25, 'new born', 'new born', 'new born', 4, 'b7.png', '2023-06-02 05:46:57', '1'),
(26, 'travel', 'travel', 'travel', 5, 'travel.png', '2023-06-02 05:47:25', '1'),
(27, 'travel', 'travel', 'travel', 5, 'travel1.png', '2023-06-02 05:47:47', '1'),
(28, 'travel', 'travel', 'travel', 5, 'travel2.png', '2023-06-02 05:48:05', '1'),
(29, 'travel', 'travel', 'travel', 5, 'travel3.png', '2023-06-02 05:48:25', '1'),
(30, 'travel', 'travel', 'travel', 5, 'travel4.png', '2023-06-02 05:48:44', '1'),
(31, 'travel', 'travel', 'travel', 5, 'travel5.png', '2023-06-02 05:49:01', '1'),
(32, 'love', 'love', 'love', 6, 'love1.jpg', '2023-10-02 10:38:52', '1'),
(33, 'love', 'love', 'love', 6, 'love2.jpeg', '2023-10-02 10:41:34', '1'),
(34, 'love', 'love', 'love', 6, 'love3.jpg', '2023-10-02 10:41:42', '1'),
(36, 'love', 'love', 'love', 6, 'love4.jpg', '2023-10-02 10:42:15', '1'),
(37, 'love', 'love', 'love', 6, 'love5.jpeg', '2023-10-02 10:42:33', '1'),
(38, 'love', 'love', 'love', 6, 'love6.jpeg', '2023-10-02 10:42:54', '1'),
(39, 'love', 'love', 'love', 6, 'love7.jpeg', '2023-10-02 10:43:16', '1');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `desp` varchar(300) NOT NULL,
  `product_id` int(11) NOT NULL,
  `text_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `user_id`, `desp`, `product_id`, `text_date`) VALUES
(1, 1, 'Nature is beauty.', 1, '2023-10-02 13:15:16'),
(2, 1, 'Travelling is the most precious thing that ever gives the good feel and experience ....', 28, '2023-10-02 09:52:42'),
(3, 1, 'hi', 15, '2023-10-05 10:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_email`, `user_password`, `user_image`, `user_address`, `user_mobile`) VALUES
(1, 'pramodhini', 'kotlapramodhini@gmail.com', '1234', 'pramo.jpg', 'salur', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
