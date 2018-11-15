-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 07:40 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmasterwed`
--

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
(3, 'vendor', 'Vendor'),
(4, 'pembeli', 'Pembeli');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `jenisid` int(11) NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `starttime` datetime NOT NULL,
  `endtime` datetime NOT NULL,
  `quota` int(11) NOT NULL,
  `foto` text NOT NULL,
  `harga` float(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `jenisid`, `userid`, `nama`, `lokasi`, `deskripsi`, `starttime`, `endtime`, `quota`, `foto`, `harga`, `stock`, `vendorid`) VALUES
(1, 3, 2, 'Paket A 50000/pax', 'Semarang', 'Prasmanan, vip, gubuk 5, ice carving min 500', '2018-10-20 19:00:00', '2018-10-20 21:00:00', 600, 'http://localhost/masterwedding/assets/uploads/catering2.jpg', 30000000.00, 1, 2),
(2, 4, 2, 'Silver Foto', 'Bandung', 'Prewed, video shooting, hardcover album', '2018-10-20 11:00:00', '2018-10-20 14:00:00', 800, 'http://localhost/masterwedding/assets/uploads/foto1.png', 15000000.00, 8, 1),
(3, 2, 2, 'Suki Little', 'Bandung', 'panggung, conveti, bouqet, entrance ', '2018-10-20 19:00:00', '2018-10-20 21:00:00', 1, 'http://localhost/masterwedding/assets/uploads/decor12.jpg', 15000000.00, 1, 4),
(4, 1, 2, 'The Venue', 'Jakarta', 'kapasitas 1000 orang', '2018-10-20 19:00:00', '2018-10-20 21:00:00', 1000, 'http://localhost/masterwedding/assets/uploads/venue1.jpg', 40000000.00, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `kode_jenis` varchar(12) NOT NULL,
  `type` varchar(30) NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `kode_jenis`, `type`, `userid`) VALUES
(1, 'VN101', 'VENUE', 1),
(2, 'DC101', 'DECORATION', 1),
(3, 'CT101', 'CATERING', 1),
(4, 'PT101', 'PHOTOGRAPHY', 1);

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
-- Table structure for table `nota`
--

CREATE TABLE `nota` (
  `notaid` int(11) NOT NULL,
  `no_nota` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `bukti_bayar` varchar(50) NOT NULL,
  `bayar` int(1) NOT NULL,
  `idvendor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota`
--

INSERT INTO `nota` (`notaid`, `no_nota`, `tanggal`, `userid`, `bukti_bayar`, `bayar`, `idvendor`) VALUES
(1, ' 18103021', '2018-10-30', 2, '', 0, 1),
(2, ' 18103022', '2018-10-30', 2, '', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nota_detail`
--

CREATE TABLE `nota_detail` (
  `id` int(11) NOT NULL,
  `idvendor` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `notaid` int(11) NOT NULL,
  `subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nota_detail`
--

INSERT INTO `nota_detail` (`id`, `idvendor`, `itemid`, `notaid`, `subtotal`) VALUES
(1, 1, 2, 18103021, 15000000),
(2, 2, 1, 18103022, 30000000);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `orderid` int(11) NOT NULL,
  `itemid` int(11) DEFAULT NULL,
  `jumlahorder` int(11) DEFAULT NULL,
  `notaid` int(11) DEFAULT NULL,
  `subtotal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `token`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1540868388, 1, 'Admin', 'istrator', 'ADMIN', '0', '42a4bc0ab5c0df63a8e370f0130059c6'),
(2, '127.0.0.1', 'penjual', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'penjual@gmail.com', '', NULL, NULL, NULL, 1268889823, 1539242132, 1, 'Penjual', 'Penjual', 'Penjual', '0', ''),
(3, '127.0.0.1', 'pembeli', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'pembeli@gmail.com', '', NULL, NULL, NULL, 1268889823, 1539242102, 1, 'Pembeli', 'Pembeli', 'Pembeli', '0', '');

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
(3, 2, 3),
(4, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jenisid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `nama`, `alamat`, `telpon`, `foto`, `jenisid`, `userid`) VALUES
(1, 'Lee Harvey Photography', '39 First Street', '+682-81-1920170', 'http://localhost/masterwedding/assets/uploads/crystaldiskmark.png', 4, 2),
(2, 'Odette Daniels Catering', '664 South New Street', '+312-65-7380599', 'http://localhost/masterwedding/assets/uploads/catering.jpg', 3, 2),
(3, 'The venue', '597 Second Avenue', '+132-59-7481474', 'http://localhost/masterwedding/assets/uploads/venue.jpg', 1, 2),
(4, 'Joelle', '57 West Old Boulevard', '+778-18-9548398', 'http://localhost/masterwedding/assets/uploads/decor.png', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenisid` (`jenisid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`notaid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `nota_detail`
--
ALTER TABLE `nota_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `itemid` (`itemid`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `itemid` (`itemid`,`notaid`),
  ADD KEY `notaid` (`notaid`);

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
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenisid` (`jenisid`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `notaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nota_detail`
--
ALTER TABLE `nota_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`jenisid`) REFERENCES `jenis` (`id`);

--
-- Constraints for table `jenis`
--
ALTER TABLE `jenis`
  ADD CONSTRAINT `jenis_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `nota_detail`
--
ALTER TABLE `nota_detail`
  ADD CONSTRAINT `nota_detail_ibfk_1` FOREIGN KEY (`itemid`) REFERENCES `item` (`id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`notaid`) REFERENCES `nota` (`notaid`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`itemid`) REFERENCES `item` (`id`);

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `vendor_ibfk_1` FOREIGN KEY (`jenisid`) REFERENCES `jenis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
