-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2019 at 11:31 AM
-- Server version: 5.7.23
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddmgtsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `center_code` varchar(15) NOT NULL,
  `center_name` varchar(30) NOT NULL,
  `district` varchar(15) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`center_code`, `center_name`, `district`, `level`) VALUES
('mkn', 'mukono health center 3', 'mukono', 'center 3');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `id` int(11) NOT NULL,
  `drug_code` varchar(15) NOT NULL,
  `drug_name` varchar(25) NOT NULL,
  `strength` varchar(10) NOT NULL,
  `category` varchar(15) NOT NULL,
  `unit_pack` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`id`, `drug_code`, `drug_name`, `strength`, `category`, `unit_pack`) VALUES
(3, 'mam', 'mam', 'mam', 'mam', 'unit');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'client', 'NMS client'),
(4, 'Agent', 'NMS DHO');

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `inventory_id` varchar(25) NOT NULL,
  `transaction_date` datetime NOT NULL,
  `quantity` int(10) NOT NULL,
  `expiry_date` datetime NOT NULL,
  `source` varchar(25) NOT NULL,
  `created_by` int(11) NOT NULL,
  `current_quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`inventory_id`, `transaction_date`, `quantity`, `expiry_date`, `source`, `created_by`, `current_quantity`) VALUES
('bnm', '2019-06-07 00:00:00', 500, '2020-06-07 00:00:00', 'kampala', 4, NULL),
('bnm,,', '2019-06-07 00:00:00', 500, '2020-06-07 00:00:00', 'kampala', 4, NULL),
('mo', '2019-07-24 00:00:00', 0, '0000-00-00 00:00:00', 'today', 1, NULL),
('test', '2018-07-02 00:00:00', 2000, '2019-07-02 00:00:00', 'mukono', 1, NULL),
('thi', '2019-06-20 00:00:00', 1000, '2020-06-20 00:00:00', 'kampala', 1, NULL),
('this invetory', '2019-07-20 00:00:00', 1000, '2019-08-20 00:00:00', 'kampala', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` varchar(20) NOT NULL,
  `drug_code` varchar(20) NOT NULL,
  `drug_name` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL,
  `current_quantity` int(10) NOT NULL,
  `previous_quantity` int(10) NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(20190608195739);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `drug_code` varchar(25) NOT NULL,
  `drug_name` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `order_date` datetime NOT NULL,
  `sender` varchar(25) NOT NULL,
  `supplier` varchar(25) NOT NULL,
  `delivery_date` datetime NOT NULL,
  `order_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `quantity`, `order_date`, `sender`, `supplier`, `delivery_date`, `order_status`) VALUES
(2, 'Administrat', 0, '2019-05-30 00:00:00', '1', '3', '0000-00-00 00:00:00', 'Pending Approval'),
(3, 'Administrat', 0, '2019-05-30 00:00:00', '1', '3', '0000-00-00 00:00:00', 'Pending Approval'),
(4, 'Administrat', 0, '2019-06-10 00:00:00', '1', '4', '0000-00-00 00:00:00', 'Pending Approval'),
(5, 'Administrat', 0, '2019-06-13 00:00:00', '1', '1', '0000-00-00 00:00:00', 'Pending Approval'),
(6, 'Administrat', 0, '2019-06-11 00:00:00', '1', '1', '0000-00-00 00:00:00', 'Pending Approval'),
(7, 'Administrat', 0, '2019-07-24 00:00:00', '1', '4', '0000-00-00 00:00:00', 'Pending Approval');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `center_code` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `center_code`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'hBgVd3MVU4NVC/hazGIuo.', 1268889823, 1563949924, 1, 'Admin', 'istrator', 'ADMIN', '0', NULL),
(3, '::1', 'imokol@kanzucode.com', '96e66d3e36c37a3b700dbfee0e3c4240', NULL, 'imokol@kanzucode.com', NULL, NULL, NULL, NULL, 1558950257, NULL, 1, 'faith', 'imokol', 'kanzucode', '0781411614', NULL),
(4, '::1', 'peace@gmail.com', '$2y$08$8NA4860RLhuiLrhhVPlC9.fPF6qurv41/7bGxE8CCluRr64Zm9DFK', NULL, 'peace@gmail.com', NULL, NULL, NULL, NULL, 1559992443, 1560175468, 1, 'peace', 'apolot', 'mukono', '0770000000', 'mkn');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 3, 1),
(5, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`center_code`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
