/*
SQLyog 企业版 - MySQL GUI v8.14 
MySQL - 5.6.17 : Database - mengfei_shop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mengfei_shop` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mengfei_shop`;

/*Table structure for table `mengfei_admin` */

DROP TABLE IF EXISTS `mengfei_admin`;

CREATE TABLE `mengfei_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL COMMENT '管理员登录用户名',
  `password` varchar(250) NOT NULL COMMENT '管理员登录密码',
  `grade` tinyint(4) DEFAULT '1' COMMENT '1,普通管理员，2超级管理员',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mengfei_admin` */

/*Table structure for table `mengfei_goods` */

DROP TABLE IF EXISTS `mengfei_goods`;

CREATE TABLE `mengfei_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL COMMENT '商品分类ID',
  `name` varchar(200) NOT NULL COMMENT '商品名称',
  `thumb` varchar(200) NOT NULL COMMENT '商品缩略图，单张',
  `pics` longtext COMMENT '商品展示图片，多张以;隔开',
  `price` int(11) NOT NULL COMMENT '商品价格。单位：分',
  `discount_price` int(11) DEFAULT NULL COMMENT '商品促销价，单位：分。填写时，商品购买以这个价格为准，不填写时购买价格用price字段的值。',
  `stock` int(11) NOT NULL COMMENT '商品库存。0表示售罄，大于0表示库存数量',
  `start_tm` datetime NOT NULL COMMENT '上架时间',
  `end_tm` datetime DEFAULT NULL COMMENT '下架时间',
  `promote` int(11) DEFAULT '0' COMMENT '推荐到首页',
  `hot` int(11) DEFAULT '0' COMMENT '热度',
  `seq` int(11) DEFAULT NULL COMMENT '商品排序',
  `intro` longtext COMMENT '商品的详细信息',
  `ctm` datetime DEFAULT NULL COMMENT '创建时间',
  `utm` datetime DEFAULT NULL COMMENT '更新时间',
  `uid` int(11) DEFAULT NULL COMMENT '操作员ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品信息';

/*Data for the table `mengfei_goods` */

/*Table structure for table `mengfei_goods_cate` */

DROP TABLE IF EXISTS `mengfei_goods_cate`;

CREATE TABLE `mengfei_goods_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL COMMENT '父栏目ID。值为0表示此栏目没有父栏目，为顶级栏目',
  `name` varchar(50) DEFAULT NULL COMMENT '商品分类名称',
  `icon` varchar(200) NOT NULL COMMENT '分类的图标',
  `summary` varchar(500) DEFAULT NULL COMMENT '分类的简介',
  `desc` varchar(500) DEFAULT NULL COMMENT '分类的描述',
  `uid` int(11) DEFAULT NULL COMMENT '后台操作人员ID',
  `seq` int(11) DEFAULT NULL COMMENT '排序',
  `status` tinyint(4) DEFAULT NULL COMMENT '分类的状态，0表示不显示，1表示可以显示使用',
  `ctm` datetime NOT NULL COMMENT '创建的时间',
  `utm` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后修改的时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='商品分类';

/*Data for the table `mengfei_goods_cate` */

/*Table structure for table `mengfei_user` */

DROP TABLE IF EXISTS `mengfei_user`;

CREATE TABLE `mengfei_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL COMMENT '用户登录名，暂时只限于邮箱或者手机登录',
  `password` varchar(250) NOT NULL COMMENT '必须是英文数字组合，6-12位',
  `alias` int(20) DEFAULT NULL COMMENT '系统自动生成，作为登录的标识',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mengfei_user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
