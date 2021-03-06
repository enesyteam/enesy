-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 08:57 AM
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
(7, 0, 'Cầu Đường', 'cau-duong', '1111', '', 'ducnvna@gmail.com', 20170220, 0, 0, 1);

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
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introtext` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double DEFAULT NULL,
  `love` int(11) DEFAULT NULL,
  `num_of_learn` int(11) DEFAULT NULL,
  `time_learn` int(11) DEFAULT NULL,
  `mentor_id` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `trending` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `parent_cat_id`, `picture`, `cat_id`, `title`, `alias`, `introtext`, `content`, `price`, `love`, `num_of_learn`, `time_learn`, `mentor_id`, `create_date`, `updated_at`, `trending`) VALUES
(1, 2, '', 3, 'Học lập trình hướng đối tượng', 'hoc-lap-trinh-huong-doi-tuong', '1111- đã edit', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>11111- đã edit</p>\r\n</body>\r\n</html>', 0, 0, 0, 0, 1, 1484621541, 1487577027, 0),
(2, 0, '', 1, 'Học cầu đường bộ', 'hoc-cau-duong-bo', 'sdfdsf', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>dfds</p>\r\n</body>\r\n</html>', 0, 0, 0, 0, 1, 1484621584, 1487577043, 0),
(3, 0, '', 1, 'ểwr', 'ewr', 'ểwr', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>ểwr</p>\r\n</body>\r\n</html>', 0, 0, 0, 0, 1, 1484621603, 1487577123, 0),
(4, 1, '', 2, 'lập trình F.U.C.K Linh miu', '', 'fuck là một nghệ thuật...', 'fuck là một nghệ thuật và người fuck là một nghệ sĩ', NULL, NULL, NULL, NULL, 11, 1487136918, 1487138150, 0),
(5, 2, '', 3, 'lap tỉnh php', 'lap-tinh-php', 'dfdsfd', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>dfdsf</p>\r\n</body>\r\n</html>', NULL, 0, 0, NULL, 1, 1487576855, 1487576855, 0),
(6, 2, '', 3, 'sdfdsf', 'sdfdsf', 'dfdsf', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>fd</p>\r\n</body>\r\n</html>', NULL, 0, 0, NULL, 1, 1487576960, 1487576960, 0);

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
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
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
(1, 'ducnvna@gmail.com', 'ducnvna', '$2y$10$UejvQjCBb4k7/b.QSugNzuyf/L1AybFoVi5vGKFHhX9tmbGZigNLK', 'Nguyen', 'Duc', 'Van', NULL, 1, 0, NULL, 1487560565, NULL, 20170220, NULL, NULL, 'backend/image/default_avatar_male.jpg', 1, NULL, NULL, NULL, NULL, NULL);

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
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
