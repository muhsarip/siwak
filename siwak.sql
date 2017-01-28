/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : siwak

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-01-16 13:47:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `dibuat_pada` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator Silvia', '2017-01-15', '1');

-- ----------------------------
-- Table structure for aset
-- ----------------------------
DROP TABLE IF EXISTS `aset`;
CREATE TABLE `aset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `wakif` varchar(255) DEFAULT NULL,
  `nadzir_id` int(11) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `dibuat_pada` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aset
-- ----------------------------
INSERT INTO `aset` VALUES ('1', '4', 'masjid At-Taqwa', 'dsds', 'dsds', 'sdsds', '1', '106.869469', '-6.273298', null, null);
INSERT INTO `aset` VALUES ('2', '1', 'Masjid Nurul Iman', null, null, null, null, '131.044', '-25.363', null, null);
INSERT INTO `aset` VALUES ('3', '1', 'Masjid AlMarzukiyah', null, null, null, null, '131.044', '-25.363', null, null);
INSERT INTO `aset` VALUES ('4', '2', 'SMA 12', null, null, null, null, '131.044', '-25.363', null, null);
INSERT INTO `aset` VALUES ('5', '2', 'SMA 50', null, null, null, null, '131.044', '-25.363', null, null);
INSERT INTO `aset` VALUES ('6', '2', 'SMP 48', null, null, null, null, '131.044', '-25.363', null, null);
INSERT INTO `aset` VALUES ('7', '3', 'TPU TANAH KUSIR', null, null, null, null, '131.044', '-25.363', null, null);
INSERT INTO `aset` VALUES ('8', '3', 'TPU PONDOK KELAPA', null, null, null, null, '131.044', '-25.363', null, null);
INSERT INTO `aset` VALUES ('9', '3', 'TPU PONDOK GEDE', null, null, null, null, '131.044', '-25.363', null, null);
INSERT INTO `aset` VALUES ('10', '4', 'PANTI ASUHAN  KASIH BUNDA', null, null, null, null, '131.044', '-25.363', null, null);
INSERT INTO `aset` VALUES ('11', '4', 'PANTI ASUHAN INSAN KAMIL', null, null, null, null, '131.044', '-25.363', null, null);
INSERT INTO `aset` VALUES ('12', '4', 'PANTI ASUHAN ATTAHIRIYAH', null, null, null, null, '131.044', '-25.363', null, null);

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'Masjid', null);
INSERT INTO `kategori` VALUES ('2', 'Sekolah', null);
INSERT INTO `kategori` VALUES ('3', 'Tempat Pemakaman', null);
INSERT INTO `kategori` VALUES ('4', 'Panti Yatim Piatu', null);

-- ----------------------------
-- Table structure for nadzir
-- ----------------------------
DROP TABLE IF EXISTS `nadzir`;
CREATE TABLE `nadzir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `dibuat_pada` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nadzir
-- ----------------------------
INSERT INTO `nadzir` VALUES ('1', 'nadzir@mail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ridwan', '2017-01-12', '1');

-- ----------------------------
-- Table structure for sengketa
-- ----------------------------
DROP TABLE IF EXISTS `sengketa`;
CREATE TABLE `sengketa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aset_id` int(11) DEFAULT NULL,
  `nadzir_id` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `status` enum('Pendaftaran','Proses Penyelesaian','Selesai') DEFAULT NULL,
  `dibuat_pada` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sengketa
-- ----------------------------
INSERT INTO `sengketa` VALUES ('1', '1', '1', 'sdsds', 'dsdsdsd', 'Pendaftaran', '2017-01-12');
