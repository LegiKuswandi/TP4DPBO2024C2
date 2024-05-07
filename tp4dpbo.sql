/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tp4dpbo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-05-07 23:25:14
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `join_date` date NOT NULL,
  `team` int(11) NOT NULL,
  PRIMARY KEY (`id_member`) USING BTREE,
  KEY `fk_team` (`team`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('1', 'Lewis Hamilton', 'Lewis@gmail.com', '0858562715722', '2024-05-07', '1');
INSERT INTO `members` VALUES ('12', 'Max Verstappen', 'max@gamil.com', '0829128918', '2024-05-07', '3');

-- ----------------------------
-- Table structure for `team`
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `nama_team` varchar(255) NOT NULL,
  `tahun_berdiri` varchar(255) NOT NULL,
  PRIMARY KEY (`id_team`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES ('1', 'Mercedes', '1960');
INSERT INTO `team` VALUES ('3', 'Red Bull Racing', '1960');
INSERT INTO `team` VALUES ('5', 'Aston Martin', '1960');
