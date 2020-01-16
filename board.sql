DROP DATABASE IF EXISTS gbooks;
CREATE DATABASE gbooks CHARSET utf8;
USE gbooks;

SET names utf8;

SET FOREIGN_KEY_CHECKS=0;
 
-- ----------------------------
-- Table structure for gbooks
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(255) NOT NULL auto_increment COMMENT 'ID主键自增',
  `name` varchar(255) default NULL COMMENT '姓名',
  `email` varchar(255) default NULL COMMENT '邮箱',
  `content` varchar(255) default NULL COMMENT '内容',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
 
-- ----------------------------
-- Records of gbooks
-- ----------------------------
INSERT INTO `message` values
(1,'Marry','Marry@gmail.com',md5('Marry')),
(2,'Tony','Tony@gmail.com',md5('Tony')),
(3,'Lily','Lily@gmail.com',md5('Lily')),
(4,'Darn','Darn@gmail.com',md5('Darn')),
(5,'Ella','Ella@gmail.com',md5('Ella')),
(6,'Gorge','Gorge@gmail.com',md5('Gorge'));
