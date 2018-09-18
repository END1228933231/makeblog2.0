/*
Navicat MySQL Data Transfer

Source Server         : makeshop
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-09-08 00:06:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for make_admin
-- ----------------------------
DROP TABLE IF EXISTS `make_admin`;
CREATE TABLE `make_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permit` int(10) unsigned NOT NULL COMMENT '1为超级管理员，2为普通管理员',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of make_admin
-- ----------------------------
INSERT INTO `make_admin` VALUES ('14', 'aaaa', 'd41d8cd98f00b204e9800998ecf8427e', '1');
INSERT INTO `make_admin` VALUES ('9', 'root', '63a9f0ea7bb98050796b649e85481845', '2');
INSERT INTO `make_admin` VALUES ('17', 'yansh', 'd1b0251c3d0d3d4b43ddab353de79357', '1');
INSERT INTO `make_admin` VALUES ('15', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', '1');
INSERT INTO `make_admin` VALUES ('16', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', '1');

-- ----------------------------
-- Table structure for make_artcount
-- ----------------------------
DROP TABLE IF EXISTS `make_artcount`;
CREATE TABLE `make_artcount` (
  `id` int(11) NOT NULL,
  `click` int(11) DEFAULT NULL COMMENT '点击量',
  `comment` int(11) DEFAULT NULL COMMENT '评论量',
  `articleId` int(11) DEFAULT NULL COMMENT '文章id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of make_artcount
-- ----------------------------

-- ----------------------------
-- Table structure for make_article
-- ----------------------------
DROP TABLE IF EXISTS `make_article`;
CREATE TABLE `make_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(60) CHARACTER SET utf8 NOT NULL COMMENT '文章题目',
  `keywords` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '关键词',
  `desc` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '描述',
  `author` varchar(30) CHARACTER SET utf8 DEFAULT NULL COMMENT '类别',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `click` int(11) DEFAULT '0' COMMENT '点击数',
  `comment` int(11) DEFAULT '0' COMMENT '评论',
  `time` int(11) DEFAULT NULL COMMENT '创建日期',
  `cateid` varchar(255) DEFAULT NULL COMMENT '所属栏目',
  `thumb` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '缩略图',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of make_article
-- ----------------------------
INSERT INTO `make_article` VALUES ('11', 'f', 'd', 'dfs', 'as', '<p>dfsd</p>', '10', '60', null, '17', '/makeblog2.0/public\\uploads/20180901\\6e14d7b804d87947ee9519dbea000406.jpg');
INSERT INTO `make_article` VALUES ('12', 'sss', 'sss', 'ddf', 'aaa', '<p>dfsdf</p>', '42', '70', null, '18', '/makeblog2.0/public\\uploads/20180901\\c1014d8e9f462ec11ba5d5d02884fc9b.jpg');
INSERT INTO `make_article` VALUES ('13', 'eee', 'dfs', 'fdvd', 'eefs', '<p>dfsere</p>', '32', '700', null, '17', '/makeblog2.0/public\\uploads/20180901\\6a71294e26240ea9fd1aa985f2f13d65.jpg');
INSERT INTO `make_article` VALUES ('14', '微信数据库最新解密方式', '微信', '微信数据库最新解密方式，C++代码解密微信数据库信息', '微信', '<p>微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息</p><p>微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息</p><p>微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息</p>', '47', '1000', null, '17', null);
INSERT INTO `make_article` VALUES ('15', '微信数据库最新', '微信', '微信数据库最新解密方式，C++代码解密微信数据库信息', '微信', '<p>微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息</p><p>微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息</p><p>微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息微信数据库最新解密方式，C++代码解密微信数据库信息</p>', '60', '200', null, '18', null);
INSERT INTO `make_article` VALUES ('16', '百度', '测试文章', '测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章', 'dfsdf', '<p>测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章测试文章</p>', '40', '0', '1536299472', '17', null);
INSERT INTO `make_article` VALUES ('17', '哈哈哈哈哈哈哈哈哈哈', '枫叶', '枫叶花开放天涯', '枫叶', '<p>枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯</p><p>枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯</p><p>枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯</p><p>枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯</p><p>枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯枫叶花开放天涯</p>', '0', '0', '1536318267', '0', null);
INSERT INTO `make_article` VALUES ('18', 'Java程序员从阿里、京东面试回来，这些面试题你会吗？', 'java', '最近有很多朋友去目前主流的大型互联网公司面试（阿里巴巴、京东-美团），面试回来之后会发给我一些面试题。有些朋友轻松过关拿到offer，但是有一些是来询问我答案的。', 'java', '<p>最近有很多朋友去目前主流的大型互联网公司面试（阿里巴巴、京东-美团），面试回来之后会发给我一些面试题。有些朋友轻松过关拿到offer，但是有一些是来询问我答案的。最近有很多朋友去目前主流的大型互联网公司面试（阿里巴巴、京东-美团），面试回来之后会发给我一些面试题。有些朋友轻松过关拿到offer，但是有一些是来询问我答案的。最近有很多朋友去目前主流的大型互联网公司面试（阿里巴巴、京东-美团），面试回来之后会发给我一些面试题。有些朋友轻松过关拿到offer，但是有一些是来询问我答案的。</p><p>最近有很多朋友去目前主流的大型互联网公司面试（阿里巴巴、京东-美团），面试回来之后会发给我一些面试题。有些朋友轻松过关拿到offer，但是有一些是来询问我答案的。</p><p>最近有很多朋友去目前主流的大型互联网公司面试（阿里巴巴、京东-美团），面试回来之后会发给我一些面试题。有些朋友轻松过关拿到offer，但是有一些是来询问我答案的。最近有很多朋友去目前主流的大型互联网公司面试（阿里巴巴、京东-美团），面试回来之后会发给我一些面试题。有些朋友轻松过关拿到offer，但是有一些是来询问我答案的。最近有很多朋友去目前主流的大型互联网公司面试（阿里巴巴、京东-美团），面试回来之后会发给我一些面试题。有些朋友轻松过关拿到offer，但是有一些是来询问我答案的。最近有很多朋友去目前主流的大型互联网公司面试（阿里巴巴、京东-美团），面试回来之后会发给我一些面试题。有些朋友轻松过关拿到offer，但是有一些是来询问我答案的。最近有很多朋友去目前主流的大型互联网公司面试（阿里巴巴、京东-美团），面试回来之后会发给我一些面试题。有些朋友轻松过关拿到offer，但是有一些是来询问我答案的。</p><p>最近有很多朋友去目前主流的大型互联网公司面试（阿里巴巴、京东-美团），面试回来之后会发给我一些面试题。有些朋友轻松过关拿到offer，但是有一些是来询问我答案的。</p>', '0', '0', '1536326482', '14', '/makeblog2.0/public\\uploads/20180907\\d05cca462f48b846ecb0db8a736dc383.png');

-- ----------------------------
-- Table structure for make_cate
-- ----------------------------
DROP TABLE IF EXISTS `make_cate`;
CREATE TABLE `make_cate` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catename` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '栏目名称',
  `type` tinyint(4) NOT NULL COMMENT '栏目类型,1列表，2单页',
  `keywords` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '栏目关键词',
  `desc` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '栏目描述',
  `content` text CHARACTER SET utf8 COMMENT '栏目类型',
  `pid` int(11) NOT NULL COMMENT '上级栏目id',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of make_cate
-- ----------------------------
INSERT INTO `make_cate` VALUES ('14', '潮流前线', '3', '', '', '', '0', null);
INSERT INTO `make_cate` VALUES ('15', '技术博文', '1', '', '', '', '0', null);
INSERT INTO `make_cate` VALUES ('16', '团队资讯', '1', '', '', '', '0', null);
INSERT INTO `make_cate` VALUES ('17', '技术团队', '1', '', '', '', '16', null);
INSERT INTO `make_cate` VALUES ('18', '风采作品', '1', '', '', '', '16', null);
INSERT INTO `make_cate` VALUES ('19', '经典赛事', '1', '', '', '', '0', null);

-- ----------------------------
-- Table structure for make_comment
-- ----------------------------
DROP TABLE IF EXISTS `make_comment`;
CREATE TABLE `make_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论表id',
  `articleId` varchar(255) DEFAULT NULL COMMENT '文章id',
  `content` varchar(255) DEFAULT NULL COMMENT '评论内容',
  `date` datetime DEFAULT NULL COMMENT '评论时间',
  `ip` varchar(255) DEFAULT NULL COMMENT '评论ip地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of make_comment
-- ----------------------------

-- ----------------------------
-- Table structure for make_conf
-- ----------------------------
DROP TABLE IF EXISTS `make_conf`;
CREATE TABLE `make_conf` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `cnname` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '中文名称',
  `enname` varchar(50) DEFAULT NULL COMMENT '英文名称',
  `type` tinyint(1) DEFAULT NULL COMMENT '类型 1：文本框  2：文本域 3：单选按钮 4：复选按钮  5：下拉菜单',
  `value` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '配置值',
  `values` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '配置可选值',
  `sort` smallint(50) DEFAULT '50' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of make_conf
-- ----------------------------
INSERT INTO `make_conf` VALUES ('2', '站点关键词', 'keyword', '1', '制造工作室，制造，make，makeblog，工作室，制造工作室云社区，技术分享', '这是关键词', '2');
INSERT INTO `make_conf` VALUES ('5', '自动清空缓存', 'cache', '5', '2个小时', '1个小时,2个小时,3个小时', '4');
INSERT INTO `make_conf` VALUES ('6', '站点名称', 'sitename', '1', '制造工作室2.0', 'thinkphp5.0', '1');
INSERT INTO `make_conf` VALUES ('7', '站点描述', 'desc', '2', '本网站提供制造技术交流空间和资料', '这是一个站点', '3');
INSERT INTO `make_conf` VALUES ('8', '是否关闭网站', 'close', '3', '是', '是,否', '5');
INSERT INTO `make_conf` VALUES ('9', '启动验证码', 'code', '4', '是', '是', '6');
INSERT INTO `make_conf` VALUES ('11', '哈哈哈哈', 'djjdk', '1', '', 'df', '50');

-- ----------------------------
-- Table structure for make_link
-- ----------------------------
DROP TABLE IF EXISTS `make_link`;
CREATE TABLE `make_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `sort` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of make_link
-- ----------------------------
INSERT INTO `make_link` VALUES ('1', 'dd', 'sssdddd', 'https://www.baidu.com/a', '1');
INSERT INTO `make_link` VALUES ('3', 'sdfs', 'sdfs', 'dfsdfd', '2');
INSERT INTO `make_link` VALUES ('4', 'sdfs', 'fssdf', 'dfsd', '3');
INSERT INTO `make_link` VALUES ('5', '百度', '123\r\nddd', '123', null);
INSERT INTO `make_link` VALUES ('6', '百度ss', '123', 'dddd', null);
INSERT INTO `make_link` VALUES ('7', 'dfd', 'dff', 'ds', null);
INSERT INTO `make_link` VALUES ('8', 'fdfs', 'ds', 'http://dfs', null);

-- ----------------------------
-- Table structure for make_user
-- ----------------------------
DROP TABLE IF EXISTS `make_user`;
CREATE TABLE `make_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of make_user
-- ----------------------------
INSERT INTO `make_user` VALUES ('1', 'root', 'root', 'abc@qq.com');
INSERT INTO `make_user` VALUES ('2', 'make', 'make', 'make@qq.com');
INSERT INTO `make_user` VALUES ('3', '123', '123', '123');
INSERT INTO `make_user` VALUES ('5', '123', '123', '123');
INSERT INTO `make_user` VALUES ('14', 'thinkphp', '', '');
INSERT INTO `make_user` VALUES ('7', 'abd', 'jljd', 'jidoidj');
INSERT INTO `make_user` VALUES ('22', '1213', '6c14da109e294d1e8155be8aa4b1ce8e', 'ajkdj@qq.com');
INSERT INTO `make_user` VALUES ('24', 'sdf', 'ba7893e62fc5e3cb5324626c2f332847', 'dfdsd');
INSERT INTO `make_user` VALUES ('23', 'sdf', 'ba7893e62fc5e3cb5324626c2f332847', 'dfdsd');
INSERT INTO `make_user` VALUES ('25', 'sdf', 'ba7893e62fc5e3cb5324626c2f332847', 'dfdsd');
INSERT INTO `make_user` VALUES ('26', 'sdf', 'ba7893e62fc5e3cb5324626c2f332847', 'dfdsd');
INSERT INTO `make_user` VALUES ('27', '123', '202cb962ac59075b964b07152d234b70', '4564');
