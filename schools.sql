/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : driving

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-03-23 18:49:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `schools`
-- ----------------------------
DROP TABLE IF EXISTS `schools`;
CREATE TABLE `schools` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `schools_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of schools
-- ----------------------------
INSERT INTO `schools` VALUES ('1', 'Tinashe', 'tgchibanda@gmail.com', '1521754831.jpg', null, '2018-03-22 21:40:31', '2018-03-22 21:40:31', 'This is a test driving school that we are going to be using as a demo in this project.', '1', '772284314');
INSERT INTO `schools` VALUES ('2', 'dss', 'abigailr@nkonki.com', '1521791258.jpg', null, '2018-03-23 07:47:38', '2018-03-23 07:47:38', 'This is a test school. we are hopping to be done soon with the development of this project.', '1', '719656612');
INSERT INTO `schools` VALUES ('3', 'Tirivavi', 'tinashe@gmail.com', '1521798904.jpg', null, '2018-03-23 09:55:04', '2018-03-23 09:55:04', 'This is a test that will be viewed and rated by students who come across it. This will be a fun application', '1', '712563214');
INSERT INTO `schools` VALUES ('4', 'ZEET', 'zeet@gmail.com', '1521812514.jpg', null, '2018-03-23 13:41:54', '2018-03-23 13:41:54', 'This is a driving school that is located at the hear of the city.', '1', '773372737');
INSERT INTO `schools` VALUES ('5', 'Makwangudze', 'makwa@gmail.com', '1521823070.jpg', null, '2018-03-23 16:37:51', '2018-03-23 16:37:51', 'This is testing if the image resizing is now working', '1', '772737272');
