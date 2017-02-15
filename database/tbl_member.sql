-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2017 at 04:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_enesy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT '2' COMMENT '1.approved 2.waiting review 3.in review 4. rejected',
  `information_status` tinyint(2) DEFAULT '0' COMMENT '1. Da cap nhat thong tin 2.Chua cap nhat thong tin',
  `info` varchar(4000) DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  `create_user` varchar(255) DEFAULT NULL,
  `modify_date` int(11) DEFAULT NULL,
  `modify_user` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'backend/image/default_avatar_male.jpg',
  `is_teaching` tinyint(2) NOT NULL DEFAULT '0' COMMENT '1. là giáo viên 0. ko phải giáo viên',
  `sex` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `social` varchar(225) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `email`, `username`, `password`, `last_name`, `first_name`, `middle_name`, `updated_at`, `status`, `information_status`, `info`, `create_date`, `create_user`, `modify_date`, `modify_user`, `remember_token`, `avatar`, `is_teaching`, `sex`, `dob`, `social`, `phone`, `address`) VALUES
(2, 'dannt@gmail.com', 'dannt', '$2y$10$TCc1RO0i2gU2P3OMJ62o5uAk.02UFipaRCptEhjZx2EfXbmWgnZee', 'Nguyen', 'Dan', 'The', NULL, 2, 1, NULL, 2016, NULL, 2016, NULL, NULL, 'upload/image/2016/12/30/1482963782-thumbnail.jpg', 1, 'Male', '1988-04-14', NULL, '0987654321', 'Yen My, Hung Yen'),
(4, 'davidnguyen@gmail.com', 'david', '$2y$10$0GMr7RYgtE2jmYlt3NWAJ.7nQ0MKZYENt6LqbrI.RBP9NjzIUKCIi', 'Nguyen', 'David', 'Sandro', NULL, 1, 1, NULL, 2016, NULL, 2017, NULL, NULL, 'upload/image/2017/01/13/1482963782-thumbnail.jpg', 0, 'Female', '1987-09-08', NULL, '0123456789', 'Thanh xuan, Ha noi'),
(5, 'ducnvna@gmail.com', 'ducnv', '$2y$10$gwiqKsKkdSseJj8ZAxmJi.nRKF.0UvkevolcOgLH7Tf7Zbvre5S6K', 'Duc', 'Nguyen', 'Van', NULL, 2, 1, NULL, 2016, NULL, 2016, NULL, NULL, 'backend/image/default_avatar_male.jpg', 1, 'Male', '2016-12-06', NULL, '0976460950', 'Ha Noi'),
(6, 'ducnvna2@gmail.com', 'ducnvna', '$2y$10$xhSPpPPYc52K5mHLGf4o4ORHcKW0GhMkTAgAdhjqKIG9z4vaOU8lC', 'Duc1', 'Nguyen', 'Van', NULL, 2, 1, NULL, 2016, NULL, 2016, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, 'Male', '2016-12-08', '322', '1111', 'dfdsf'),
(7, 'tungsonchelsea@gmail.com', 'tungson', '$2y$10$r1d50gRbQggVSbVmUlhP9OpqCpyOWJhMehMd9.TDfnH1lbgAYDMcC', 'tung son', 'nguyen', 'tung', NULL, 2, 1, NULL, 2016, NULL, 2016, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, 'Male', '1998-12-02', NULL, '0984246691', 'Ha Noi'),
(8, 'dungtd1308@gmail.com', 'dungtd13', '$2y$10$9VNQhXCsLvnA/rAAe52xJ.UYlQGDEkAsidzcPXFlgjtaUZmcLB43a', 'Dung', 'Tran Duc', '3213123', NULL, 2, 1, NULL, 2016, NULL, 2017, NULL, NULL, 'upload/image/2017/01/03/dungtd2_1483428167.jpg', 0, 'Male', '1970-01-01', NULL, '213123123', '321312312'),
(9, 'ds90@gmail.com', 'ds90', '$2y$10$OlmI10kIo0JkgieSmbFmkuG7gsji4tG04OFqcLInSVVhfTeovNGgm', 'Đỗ Hoàng', 'Sơn', 'dsadsadas', NULL, 2, 1, NULL, 2017, NULL, 2017, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, 'Male', '1990-08-08', NULL, '011111111111', 'dasdasdasd'),
(10, 'ducnv1@gmail.com', 'ducnv1', '$2y$10$vh9qY34ES.HfQ5B6svImxOjm0dOCeqmlC1hpBAoO3SK4LJ/81Kib6', 'Van', 'Nguyen', 'Duc', NULL, 2, 1, NULL, 2017, NULL, 2017, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, 'Male', '1970-01-01', NULL, '0976460950', 'Cầu giấy - Hà Nội'),
(11, 'ttanhst@gmail.com', 'anhtt', '$2y$10$D3vTQtpUboKyxUSvT.Xnse723bzo7W6lijds9qUlQxrzVUMVyCiPa', 'Anh', 'Tran', 'Tuan', NULL, 1, 1, '', 20170109, 'ducnvna', 2017, 'ducnvna@gmail.com', 'anhtt', 'upload/image/2017/01/09/anhtt_1483949505.jpg', 1, 'Male', '1977-01-01', NULL, '0123', 'My dinh'),
(14, 'nguyendatbn90@gmail.com', 'kenbn9x', '$2y$10$s19ZTJlroZtX2k3DvbfWNeGSK8ZUzHV/ULwjSrhZ7aolJW.r2DZs.', 'Nguyễn', 'Nguyễn', 'Tiến', NULL, 2, 1, NULL, 2017, NULL, 2017, NULL, NULL, 'upload/image/2017/01/18/kenbn9x_1484728515.jpg', 1, 'Male', '1990-03-10', NULL, '0987654321', 'Bắc Ninh'),
(15, 'datkzz@gmail.com', 'nguyen', '$2y$10$5NGCq59BtXHDy5rk/tTKtu5HfJSUNFZPL2JzwmOYm0iPCmJ7CWyWW', 'nguyen', 'dat', '', NULL, 1, 0, NULL, 2017, NULL, 2017, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, NULL, NULL, NULL, NULL, NULL),
(16, 'dungtd130892@gmail.com', 'dungtd', '$2y$10$Jlwd5XYZM74R5N9ypHqPK.bSSZUgHmPEHda1VNFw6DriOAp0lMsxi', 'Dung', 'Tran Duc', 'opkljkjkj', NULL, 2, 1, NULL, 2017, NULL, 2017, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, 'Male', '1970-01-01', NULL, '987654321', 'HN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `active` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
