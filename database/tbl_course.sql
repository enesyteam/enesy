/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_enesy

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-15 13:04:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_course
-- ----------------------------
DROP TABLE IF EXISTS `tbl_course`;
CREATE TABLE `tbl_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_cat_id` int(11) NOT NULL,
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
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_course
-- ----------------------------
INSERT INTO `tbl_course` VALUES ('1', '0', '2', '1111 đã edit', '1111- đã edit', '11111- đã edit', '0', '0', '0', '0', '0', '1484621541', '1484621566');
INSERT INTO `tbl_course` VALUES ('2', '0', '1', 'dfdsf', 'sdfdsf', 'dfds', '0', '0', '0', '0', '0', '1484621584', '0');
INSERT INTO `tbl_course` VALUES ('3', '0', '1', 'ểwr', 'ểwr', 'ểwr', '0', '0', '0', '0', '0', '1484621603', '0');
INSERT INTO `tbl_course` VALUES ('4', '1', '2', 'lập trình F.U.C.K Linh miu', 'fuck là một nghệ thuật...', 'fuck là một nghệ thuật và người fuck là một nghệ sĩ', null, null, null, null, '11', '1487136918', '1487138150');
