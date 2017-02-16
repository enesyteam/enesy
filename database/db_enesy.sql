-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 09:50 AM
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
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(11) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1:active, 0:not active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `parent_id`, `title`, `alias`, `description`, `picture`, `create_user`, `create_date`, `level`, `ordering`, `status`) VALUES
(1, 0, 'Java1111', '', 'thảo luận về ngôn ngữ lập trình Java', '/2016/12/30/images.png', 'ducnvna@gmail.com', 20161230, 0, 0, 1),
(2, 0, 'Japanese', '', 'to talk about Japanese issues', '', 'ducnvna@gmail.com', 20161230, 0, 0, 1),
(3, 2, 'Văn Hóa Nhật', 'dfdsfds - dfkdsfsd', 'dfdsf', '', 'ducnvna@gmail.com', 20170216, 0, 0, 1),
(4, 1, 'Giới thiệu', 'quá ongn', 'dfd', '', 'ducnvna@gmail.com', 20170216, 0, 0, 1),
(5, 1, 'Hướng đối tượng', 'Hướng đối tượng', 'dfdsf', '', 'ducnvna@gmail.com', 20170216, 0, 0, 1),
(6, 1, 'Xã Hội', 'Xã Hội', 'df', '', 'ducnvna@gmail.com', 20170216, 0, 0, 1),
(7, 0, 'Cầu Đường', 'Cầu Đường', '1111', '', 'ducnvna@gmail.com', 20170216, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id` int(11) NOT NULL,
  `parent_cat_id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introtext` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double DEFAULT NULL,
  `love` int(11) DEFAULT NULL,
  `num_of_learn` int(11) DEFAULT NULL,
  `time_learn` int(11) DEFAULT NULL,
  `mentor_id` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `parent_cat_id`, `picture`, `cat_id`, `title`, `introtext`, `content`, `price`, `love`, `num_of_learn`, `time_learn`, `mentor_id`, `create_date`, `updated_at`) VALUES
(1, 0, '', 2, '1111 đã edit', '1111- đã edit', '11111- đã edit', 0, 0, 0, 0, 0, 1484621541, 1484621566),
(2, 0, '', 1, 'dfdsf', 'sdfdsf', 'dfds', 0, 0, 0, 0, 0, 1484621584, 0),
(3, 0, '', 1, 'ểwr', 'ểwr', 'ểwr', 0, 0, 0, 0, 0, 1484621603, 0),
(4, 1, '', 2, 'lập trình F.U.C.K Linh miu', 'fuck là một nghệ thuật...', 'fuck là một nghệ thuật và người fuck là một nghệ sĩ', NULL, NULL, NULL, NULL, 11, 1487136918, 1487138150);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lesson`
--

CREATE TABLE `tbl_lesson` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_lesson`
--

INSERT INTO `tbl_lesson` (`id`, `cat_id`, `course_id`, `title`, `create_date`, `updated_at`) VALUES
(2, 1, 3, 'dfdsfds - dfkdsfsd', 1484624263, 0),
(3, 2, 3, 'sdfdsfdf - edit', 1484624609, 0),
(5, 1, 3, 'dfdsfdsf', 1484798060, 0),
(6, 1, 3, 'dfdsf', 1484798152, 0),
(7, 1, 3, '1212121', 1484798450, 0),
(8, 1, 3, '11111', 1484798726, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lesson_doc`
--

CREATE TABLE `tbl_lesson_doc` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_lesson_doc`
--

INSERT INTO `tbl_lesson_doc` (`id`, `cat_id`, `course_id`, `lesson_id`, `title`, `path`, `file_type`, `file_size`, `create_date`, `updated_at`) VALUES
(14, 1, 3, 8, '', '/2017/0119/14848099589vd_1.jpg', 'jpg', '73960', 1484810037, 1484810037),
(15, 1, 3, 8, '', '/2017/0119/148479826368vd_1zing2.jpg', '209105', '209105', 1484810037, 1484810037),
(16, 1, 3, 8, '', '/2017/0119/148479826373vd_3zing2.jpg', '226870', '226870', 1484810037, 1484810037),
(17, 1, 3, 8, '', '/2017/0119/14847982631vd_2zing2.jpg', '119779', '119779', 1484810037, 1484810037),
(18, 1, 3, 8, '', '/2017/0119/148481003642vd_1zing2.jpg', 'jpg', '209105', 1484810037, 1484810037),
(19, 1, 3, 8, '', '', '', '', 1484810037, 1484810037);

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
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
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
(5, 'ducnvna@gmail.com', 'ducnv', '$2y$10$gwiqKsKkdSseJj8ZAxmJi.nRKF.0UvkevolcOgLH7Tf7Zbvre5S6K', 'Duc', 'Nguyen', 'Van', NULL, 2, 1, NULL, 2016, NULL, 2016, NULL, 'XInYTvo6kNtZFqiShM6UwPVKMdw5zAW2sFlovqxACXQV3ewwWYZmAxQIsmv9', 'backend/image/default_avatar_male.jpg', 1, 'Male', '2016-12-06', NULL, '0976460950', 'Ha Noi'),
(6, 'ducnvna2@gmail.com', 'ducnvna', '$2y$10$xhSPpPPYc52K5mHLGf4o4ORHcKW0GhMkTAgAdhjqKIG9z4vaOU8lC', 'Duc1', 'Nguyen', 'Van', NULL, 2, 1, NULL, 2016, NULL, 2016, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, 'Male', '2016-12-08', '322', '1111', 'dfdsf'),
(7, 'tungsonchelsea@gmail.com', 'tungson', '$2y$10$r1d50gRbQggVSbVmUlhP9OpqCpyOWJhMehMd9.TDfnH1lbgAYDMcC', 'tung son', 'nguyen', 'tung', NULL, 2, 1, NULL, 2016, NULL, 2016, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, 'Male', '1998-12-02', NULL, '0984246691', 'Ha Noi'),
(8, 'dungtd1308@gmail.com', 'dungtd13', '$2y$10$9VNQhXCsLvnA/rAAe52xJ.UYlQGDEkAsidzcPXFlgjtaUZmcLB43a', 'Dung', 'Tran Duc', '3213123', NULL, 2, 1, NULL, 2016, NULL, 2017, NULL, NULL, 'upload/image/2017/01/03/dungtd2_1483428167.jpg', 0, 'Male', '1970-01-01', NULL, '213123123', '321312312'),
(9, 'ds90@gmail.com', 'ds90', '$2y$10$OlmI10kIo0JkgieSmbFmkuG7gsji4tG04OFqcLInSVVhfTeovNGgm', 'Đỗ Hoàng', 'Sơn', 'dsadsadas', NULL, 2, 1, NULL, 2017, NULL, 2017, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, 'Male', '1990-08-08', NULL, '011111111111', 'dasdasdasd'),
(10, 'ducnv1@gmail.com', 'ducnv1', '$2y$10$vh9qY34ES.HfQ5B6svImxOjm0dOCeqmlC1hpBAoO3SK4LJ/81Kib6', 'Van', 'Nguyen', 'Duc', NULL, 2, 1, NULL, 2017, NULL, 2017, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, 'Male', '1970-01-01', NULL, '0976460950', 'Cầu giấy - Hà Nội'),
(11, 'ttanhst@gmail.com', 'anhtt', '$2y$10$D3vTQtpUboKyxUSvT.Xnse723bzo7W6lijds9qUlQxrzVUMVyCiPa', 'Anh', 'Tran', 'Tuan', NULL, 1, 1, '', 20170109, 'ducnvna', 2017, 'ducnvna@gmail.com', 'anhtt', 'upload/image/2017/01/09/anhtt_1483949505.jpg', 1, 'Male', '1977-01-01', NULL, '0123', 'My dinh'),
(14, 'nguyendatbn90@gmail.com', 'kenbn9x', '$2y$10$s19ZTJlroZtX2k3DvbfWNeGSK8ZUzHV/ULwjSrhZ7aolJW.r2DZs.', 'Nguyễn', 'Nguyễn', 'Tiến', NULL, 2, 1, NULL, 2017, NULL, 2017, NULL, NULL, 'upload/image/2017/01/18/kenbn9x_1484728515.jpg', 1, 'Male', '1990-03-10', NULL, '0987654321', 'Bắc Ninh'),
(15, 'datkzz@gmail.com', 'nguyen', '$2y$10$5NGCq59BtXHDy5rk/tTKtu5HfJSUNFZPL2JzwmOYm0iPCmJ7CWyWW', 'nguyen', 'dat', '', NULL, 1, 0, NULL, 2017, NULL, 2017, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, NULL, NULL, NULL, NULL, NULL),
(16, 'dungtd130892@gmail.com', 'dungtd', '$2y$10$Jlwd5XYZM74R5N9ypHqPK.bSSZUgHmPEHda1VNFw6DriOAp0lMsxi', 'Dung', 'Tran Duc', 'opkljkjkj', NULL, 2, 1, NULL, 2017, NULL, 2017, NULL, NULL, 'backend/image/default_avatar_male.jpg', 0, 'Male', '1970-01-01', NULL, '987654321', 'HN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `active` tinyint(4) DEFAULT '1',
  `info` varchar(4000) DEFAULT NULL,
  `create_date` int(11) DEFAULT NULL,
  `create_user` varchar(255) DEFAULT NULL,
  `modify_date` int(11) DEFAULT NULL,
  `modify_user` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `type_admin` tinyint(1) DEFAULT NULL COMMENT '1:Admin, 2:Operator',
  `permission` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `mobile`, `username`, `password`, `full_name`, `updated_at`, `active`, `info`, `create_date`, `create_user`, `modify_date`, `modify_user`, `remember_token`, `type_admin`, `permission`, `avatar`) VALUES
(1, 'cc@gmail.com', '', 'dungtd', '$2y$10$jukLMuBDS8bNuWfHXWuwe.RAyqZyFA6OUclOgPl3vQZQAapfvP.YW', NULL, '2016-07-08', 1, NULL, NULL, NULL, NULL, NULL, 'pWYe1tPoEVRsIHSyYOQ09lNVb3kitLfAy6Q7ha2Z4UnA1M1v6ueDaxmu6sF5', NULL, 0, ''),
(2, 'ducnvna@gmail.com', '', 'ducnvna', '$2y$10$wBqR1wNApDE6mZEJtmqzYOf04DYrAMd7Q3qRWPCTEGzGlE2HmRcee', 'Nguyen Van Duc', '2017-01-18', 0, 'xxxxxxxxxxxxxxxxxxxx', 2016, NULL, 2016, 'ducnvna', 'Rn0RgiQzBnLtfw5PtPlIzqpdTkLJrKTCJHOTtE96djlY7aHfhjrJVyJjukVQ', NULL, 0, '2016/07/12/T033092141_Avatar_3.jpg'),
(3, 'ducnvn1a@gmail.com', '', 'ducnv1', '$2y$10$B8SSZy07BJSidgrjSiy50u2mvSZHxGCaWDdec6f8n1vjvWW9nbBmy', '113234324', NULL, 0, '', 2016, 'ducnvna', 2016, 'ducnvna', NULL, NULL, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`),
  ADD KEY `status` (`status`),
  ADD KEY `ordering` (`ordering`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lesson_doc`
--
ALTER TABLE `tbl_lesson_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `active` (`status`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_admin` (`type_admin`),
  ADD KEY `active` (`active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_lesson_doc`
--
ALTER TABLE `tbl_lesson_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
