/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : childhealth

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-03-29 05:17:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for manage_member
-- ----------------------------
DROP TABLE IF EXISTS `manage_member`;
CREATE TABLE `manage_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(16) NOT NULL COMMENT '用户名',
  `user_password` char(32) NOT NULL COMMENT '密码',
  `user_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态，0：禁用，1：启用',
  `login_time` int(11) NOT NULL DEFAULT '0' COMMENT '登录时间',
  `login_ip` varchar(20) NOT NULL DEFAULT '' COMMENT '登录IP',
  `login_count` int(11) NOT NULL DEFAULT '0' COMMENT '登录次数',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manage_member
-- ----------------------------
INSERT INTO `manage_member` VALUES ('1', 'admin', '9b4d98cf89bd0721c622f14f67c07be8', '1', '1522258758', '', '0', '1522258758', '1522258758');
INSERT INTO `manage_member` VALUES ('2', 'kris', '202cb962ac59075b964b07152d234b70', '0', '1522258758', '', '0', '1522259756', '1522259756');
INSERT INTO `manage_member` VALUES ('4', 'kris1', '202cb962ac59075b964b07152d234b70', '0', '1522265674', '', '0', '1522259818', '1522265674');

-- ----------------------------
-- Table structure for manage_menu
-- ----------------------------
DROP TABLE IF EXISTS `manage_menu`;
CREATE TABLE `manage_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_no` char(16) NOT NULL COMMENT '菜单编号',
  `menu_pno` char(16) NOT NULL DEFAULT '' COMMENT '上级菜单编号',
  `menu_name` varchar(50) NOT NULL COMMENT '菜单名称',
  `menu_icon` varchar(30) NOT NULL DEFAULT '' COMMENT '菜单图标',
  `menu_url` varchar(250) NOT NULL DEFAULT '' COMMENT '菜单链接',
  `menu_action` varchar(150) NOT NULL DEFAULT '' COMMENT '菜单操作',
  `menu_build` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否构建',
  `menu_target` varchar(20) NOT NULL DEFAULT '_self' COMMENT '打开方式',
  `menu_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '菜单类型，1：菜单 2：操作',
  `menu_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '菜单状态，0：禁用，1：启用',
  `menu_sort` int(11) NOT NULL DEFAULT '0' COMMENT '菜单排序',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `menu_no` (`menu_no`),
  KEY `menu_action` (`menu_action`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manage_menu
-- ----------------------------
INSERT INTO `manage_menu` VALUES ('1', 'mme_eb31627a0ab5', '', '后台', 'fa fa-compass', '', '', '1', '_self', '1', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('2', 'mme_db980ca89b0f', 'mme_eb31627a0ab5', '控制台', 'fa fa-dashboard', 'manage/index/index', 'manage/index/index', '1', '_self', '1', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('3', 'mme_358bf67906e2', 'mme_db980ca89b0f', '账号设置', '', 'manage/user/account', 'manage/user/account', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('4', 'mme_8e5dd5838782', 'mme_db980ca89b0f', '上传文件', '', 'manage/upload/upload', 'manage/upload/upload', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('5', 'mme_34e70919a262', 'mme_eb31627a0ab5', '用户管理', 'fa fa-user', 'manage/user/index', 'manage/user/index', '1', '_self', '1', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('6', 'mme_c1b6868d38d6', 'mme_34e70919a262', '新增用户', '', 'manage/user/add', 'manage/user/add', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('7', 'mme_32e326de3ab4', 'mme_34e70919a262', '编辑用户', '', 'manage/user/edit', 'manage/user/edit', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('8', 'mme_bfb164516e53', 'mme_34e70919a262', '更改用户', '', 'manage/user/modify', 'manage/user/modify', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('9', 'mme_a54d4d5b71f9', 'mme_34e70919a262', '删除用户', '', 'manage/user/delete', 'manage/user/delete', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('10', 'mme_19b9d4f424d1', 'mme_34e70919a262', '选择群组', '', 'manage/user/auth', 'manage/user/auth', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('11', 'mme_9e60f0ec8ebc', 'mme_eb31627a0ab5', '群组管理', 'fa fa-users', 'manage/user_group/index', 'manage/user_group/index', '1', '_self', '1', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('12', 'mme_4759edf9e138', 'mme_9e60f0ec8ebc', '新增群组', '', 'manage/user_group/add', 'manage/user_group/add', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('13', 'mme_f35a4610cc95', 'mme_9e60f0ec8ebc', '编辑群组', '', 'manage/user_group/edit', 'manage/user_group/edit', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('14', 'mme_20e0fd5fe5dc', 'mme_9e60f0ec8ebc', '拖动群组', '', 'manage/user_group/drag', 'manage/user_group/drag', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('15', 'mme_b53b1ee5e5b9', 'mme_9e60f0ec8ebc', '删除群组', '', 'manage/user_group/delete', 'manage/user_group/delete', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('16', 'mme_c0065b6f8fb3', 'mme_9e60f0ec8ebc', '群组菜单', '', 'manage/user_group/auth', 'manage/user_group/auth', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('17', 'mme_d413b7419faf', 'mme_eb31627a0ab5', '菜单管理', 'fa fa-align-left', 'manage/menu/index', 'manage/menu/index', '1', '_self', '1', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('18', 'mme_4a3fbb19ebe8', 'mme_d413b7419faf', '新增菜单', '', 'manage/menu/add', 'manage/menu/add', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('19', 'mme_4b6933e87c95', 'mme_d413b7419faf', '编辑菜单', '', 'manage/menu/edit', 'manage/menu/edit', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('20', 'mme_9c9faef4f131', 'mme_d413b7419faf', '更改菜单', '', 'manage/menu/modify', 'manage/menu/modify', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('21', 'mme_bfe8dee4c0d2', 'mme_d413b7419faf', '拖动菜单', '', 'manage/menu/drag', 'manage/menu/drag', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('22', 'mme_8ac9ad21eba9', 'mme_d413b7419faf', '删除菜单', '', 'manage/menu/delete', 'manage/menu/delete', '1', '_self', '2', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('23', 'mme_29ff3619db3e', 'mme_eb31627a0ab5', '缓存清理', 'fa fa-trash', 'manage/index/runtime', 'manage/index/runtime', '1', '_self', '1', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('24', 'mme_35e214768f74', 'mme_eb31627a0ab5', '登录日志', 'fa fa-commenting-o', 'manage/user_login/index', 'manage/user_login/index', '1', '_self', '1', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('25', 'mme_1b647283b79f', '', '组件', 'fa fa-cubes', '', '', '1', '_self', '1', '1', '0', '1522258758', '1522258758');
INSERT INTO `manage_menu` VALUES ('26', 'mme_ba1ed9b4d841', 'mme_1b647283b79f', '表单组件', 'fa fa-edit', '@module/widget/index/form', 'module/widget/index/form', '1', '_self', '1', '1', '0', '1522258758', '1522258758');

-- ----------------------------
-- Table structure for manage_menu_link
-- ----------------------------
DROP TABLE IF EXISTS `manage_menu_link`;
CREATE TABLE `manage_menu_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_no` char(16) NOT NULL COMMENT '群组编号',
  `menu_no` char(16) NOT NULL COMMENT '菜单编号',
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_no` (`group_no`,`menu_no`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manage_menu_link
-- ----------------------------
INSERT INTO `manage_menu_link` VALUES ('10', 'mug_58e4e8ce7b62', 'mme_19b9d4f424d1');
INSERT INTO `manage_menu_link` VALUES ('25', 'mug_58e4e8ce7b62', 'mme_1b647283b79f');
INSERT INTO `manage_menu_link` VALUES ('14', 'mug_58e4e8ce7b62', 'mme_20e0fd5fe5dc');
INSERT INTO `manage_menu_link` VALUES ('23', 'mug_58e4e8ce7b62', 'mme_29ff3619db3e');
INSERT INTO `manage_menu_link` VALUES ('7', 'mug_58e4e8ce7b62', 'mme_32e326de3ab4');
INSERT INTO `manage_menu_link` VALUES ('5', 'mug_58e4e8ce7b62', 'mme_34e70919a262');
INSERT INTO `manage_menu_link` VALUES ('3', 'mug_58e4e8ce7b62', 'mme_358bf67906e2');
INSERT INTO `manage_menu_link` VALUES ('24', 'mug_58e4e8ce7b62', 'mme_35e214768f74');
INSERT INTO `manage_menu_link` VALUES ('12', 'mug_58e4e8ce7b62', 'mme_4759edf9e138');
INSERT INTO `manage_menu_link` VALUES ('18', 'mug_58e4e8ce7b62', 'mme_4a3fbb19ebe8');
INSERT INTO `manage_menu_link` VALUES ('19', 'mug_58e4e8ce7b62', 'mme_4b6933e87c95');
INSERT INTO `manage_menu_link` VALUES ('22', 'mug_58e4e8ce7b62', 'mme_8ac9ad21eba9');
INSERT INTO `manage_menu_link` VALUES ('4', 'mug_58e4e8ce7b62', 'mme_8e5dd5838782');
INSERT INTO `manage_menu_link` VALUES ('20', 'mug_58e4e8ce7b62', 'mme_9c9faef4f131');
INSERT INTO `manage_menu_link` VALUES ('11', 'mug_58e4e8ce7b62', 'mme_9e60f0ec8ebc');
INSERT INTO `manage_menu_link` VALUES ('9', 'mug_58e4e8ce7b62', 'mme_a54d4d5b71f9');
INSERT INTO `manage_menu_link` VALUES ('15', 'mug_58e4e8ce7b62', 'mme_b53b1ee5e5b9');
INSERT INTO `manage_menu_link` VALUES ('26', 'mug_58e4e8ce7b62', 'mme_ba1ed9b4d841');
INSERT INTO `manage_menu_link` VALUES ('8', 'mug_58e4e8ce7b62', 'mme_bfb164516e53');
INSERT INTO `manage_menu_link` VALUES ('21', 'mug_58e4e8ce7b62', 'mme_bfe8dee4c0d2');
INSERT INTO `manage_menu_link` VALUES ('16', 'mug_58e4e8ce7b62', 'mme_c0065b6f8fb3');
INSERT INTO `manage_menu_link` VALUES ('6', 'mug_58e4e8ce7b62', 'mme_c1b6868d38d6');
INSERT INTO `manage_menu_link` VALUES ('17', 'mug_58e4e8ce7b62', 'mme_d413b7419faf');
INSERT INTO `manage_menu_link` VALUES ('2', 'mug_58e4e8ce7b62', 'mme_db980ca89b0f');
INSERT INTO `manage_menu_link` VALUES ('1', 'mug_58e4e8ce7b62', 'mme_eb31627a0ab5');
INSERT INTO `manage_menu_link` VALUES ('13', 'mug_58e4e8ce7b62', 'mme_f35a4610cc95');

-- ----------------------------
-- Table structure for manage_user
-- ----------------------------
DROP TABLE IF EXISTS `manage_user`;
CREATE TABLE `manage_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_no` char(16) NOT NULL COMMENT '用户编号',
  `user_name` varchar(16) NOT NULL COMMENT '用户名',
  `user_password` char(32) NOT NULL COMMENT '密码',
  `user_nick` varchar(150) NOT NULL DEFAULT '' COMMENT '昵称',
  `user_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态，0：禁用，1：启用',
  `login_time` int(11) NOT NULL DEFAULT '0' COMMENT '登录时间',
  `login_ip` varchar(20) NOT NULL DEFAULT '' COMMENT '登录IP',
  `login_count` int(11) NOT NULL DEFAULT '0' COMMENT '登录次数',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_no` (`user_no`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manage_user
-- ----------------------------
INSERT INTO `manage_user` VALUES ('1', 'mus_d502de2d5534', 'admin', '9b4d98cf89bd0721c622f14f67c07be8', '管理员', '1', '0', '', '0', '1522258758', '1522258758');

-- ----------------------------
-- Table structure for manage_user_group
-- ----------------------------
DROP TABLE IF EXISTS `manage_user_group`;
CREATE TABLE `manage_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_no` char(16) NOT NULL COMMENT '群组编号',
  `group_pno` char(16) NOT NULL DEFAULT '' COMMENT '上级群组编号',
  `group_name` varchar(50) NOT NULL COMMENT '群组名称',
  `group_info` varchar(150) NOT NULL DEFAULT '' COMMENT '群组描述',
  `group_sort` int(11) NOT NULL DEFAULT '0' COMMENT '群组排序',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `group_no` (`group_no`),
  KEY `group_pno` (`group_pno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manage_user_group
-- ----------------------------
INSERT INTO `manage_user_group` VALUES ('1', 'mug_58e4e8ce7b62', '', '管理员', '管理整个网站...', '0', '1522258758', '1522258758');

-- ----------------------------
-- Table structure for manage_user_group_link
-- ----------------------------
DROP TABLE IF EXISTS `manage_user_group_link`;
CREATE TABLE `manage_user_group_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_no` char(16) NOT NULL COMMENT '用户编号',
  `group_no` char(16) NOT NULL COMMENT '群组编号',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_no` (`user_no`,`group_no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manage_user_group_link
-- ----------------------------
INSERT INTO `manage_user_group_link` VALUES ('1', 'mus_d502de2d5534', 'mug_58e4e8ce7b62');

-- ----------------------------
-- Table structure for manage_user_login
-- ----------------------------
DROP TABLE IF EXISTS `manage_user_login`;
CREATE TABLE `manage_user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_no` char(16) NOT NULL COMMENT '用户编号',
  `login_ip` varchar(20) NOT NULL DEFAULT '' COMMENT '登录IP',
  `login_agent` varchar(250) NOT NULL DEFAULT '' COMMENT '浏览器信息',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `user_no` (`user_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manage_user_login
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('20180126031636', 'CreateTableManageUser', '2018-03-29 01:39:17', '2018-03-29 01:39:18', '0');
INSERT INTO `migrations` VALUES ('20180126031644', 'CreateTableManageUserLogin', '2018-03-29 01:39:18', '2018-03-29 01:39:18', '0');
INSERT INTO `migrations` VALUES ('20180126031650', 'CreateTableManageUserGroup', '2018-03-29 01:39:18', '2018-03-29 01:39:18', '0');
INSERT INTO `migrations` VALUES ('20180126031654', 'CreateTableManageUserGroupLink', '2018-03-29 01:39:18', '2018-03-29 01:39:18', '0');
INSERT INTO `migrations` VALUES ('20180126031659', 'CreateTableManageMenu', '2018-03-29 01:39:18', '2018-03-29 01:39:18', '0');
INSERT INTO `migrations` VALUES ('20180126031705', 'CreateTableManageMenuLink', '2018-03-29 01:39:18', '2018-03-29 01:39:18', '0');
INSERT INTO `migrations` VALUES ('20180126034128', 'InitManageTableData', '2018-03-29 01:39:18', '2018-03-29 01:39:18', '0');
