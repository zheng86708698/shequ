CREATE TABLE `sqg_society` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '社区表自增id',
`name` varchar(255) NULL COMMENT '社区名称',
`latitude` varchar(255) NULL,
`longitude` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_property` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`societyid` int NULL,
`charge` decimal(10,2) NULL,
`money` decimal(10,2) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_building` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`propertyid` int NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_unit` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`buildingid` int NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_room` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`unitid` int NULL,
`mastername` varchar(255) NULL,
`masterphone` varchar(255) NULL,
`surface` decimal(10,2) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_member` (
`id` varchar(255) NOT NULL COMMENT '会员表openid',
`name` varchar(255) NULL COMMENT '会员姓名',
`pwd` varchar(255) NULL COMMENT '会员登录密码',
`nickname` varchar(255) NULL COMMENT '微信昵称',
`header` varchar(255) NULL COMMENT '微信头像',
`tel` varchar(255) NULL COMMENT '会员手机号',
`societyid` varchar(255) NULL COMMENT '所在社区id',
`roomid` varchar(255) NULL COMMENT '房屋',
`status` enum('1','0') NULL DEFAULT '1' COMMENT '是否禁用  0禁用  1启用',
`ismember` enum('1','0') NULL DEFAULT '0' COMMENT '是否会员  0否  1是',
`overtime` varchar(255) NULL COMMENT '会员过期时间',
`registertime` varchar(255) NULL COMMENT '会员注册时间',
`pid` int NULL COMMENT '上级会员id',
`qrcodeid` int NULL,
`credit` varchar(255) NULL,
`point` varchar(255) NULL,
`propertycoin` decimal(10,2) NULL,
`shareqrcode` varchar(255) NULL,
`shareid` int NULL,
`sharecodebar` varchar(255) NULL,
`sharereward` decimal(10,2) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_qrcode` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`page` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_property_admin` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`login` varchar(255) NULL,
`pwd` varchar(255) NULL,
`name` varchar(255) NULL,
`tel` varchar(255) NULL,
`email` varchar(255) NULL,
`propertyid` int NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_property_fee_order` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`memberid` varchar(255) NULL,
`roomid` int NULL,
`fee` decimal(10,2) NULL,
`propertycoin` decimal(10,2) NULL,
`money` decimal(10,2) NULL,
`date` varchar(255) NULL,
`time` varchar(255) NULL,
`status` enum('0','1') NULL DEFAULT '0',
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_retire` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`memberid` varchar(255) NULL,
`money` decimal(10,2) NULL,
`time` varchar(255) NULL,
`status` enum('0','1','-1') NULL DEFAULT '0' COMMENT '0未审核  1已审核  -1  已拒绝',
`timeconfirm` varchar(255) NULL,
`confirmerid` int NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_admin` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`login` varchar(255) NULL,
`pwd` varchar(255) NULL,
`name` varchar(255) NULL,
`tel` varchar(255) NULL,
`email` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_classfied` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`description` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_admin_classified` (
`adminid` int NOT NULL,
`classifiedid` int NULL,
PRIMARY KEY (`adminid`) 
);

CREATE TABLE `sqg_navigate` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`type` enum('banner','navigate') NULL,
`name` varchar(255) NULL,
`societyid` int NULL,
`imageurl` varchar(255) NULL,
`url` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_goods_cat` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`upcatid` int NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_goods` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`catid` int NULL,
`name` varchar(255) NULL,
`price` decimal(10,2) NULL,
`vipprice` decimal(10,2) NULL,
`servicecontent` varchar(255) NULL,
`content` text NULL,
`shopid` int NULL,
`groupernum` int NULL COMMENT '团购人数',
`grouptime` int NULL COMMENT '团购截止时间   单位为小时',
`groupbuynum` int NULL COMMENT '限购数量',
`groupprice` decimal(10,2) NULL,
`type` enum('1','0') NULL COMMENT '0为实体商品   1为服务类商品',
`inventory` int NULL,
`visitor` varchar(255) NULL COMMENT '虚拟浏览量',
`truevisitor` varchar(255) NULL COMMENT '真实访问量 sqg_goods_visitor表中统计',
`status` enum('1','0') NULL COMMENT '上下架  0为下架 1为上架',
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_goods_spec` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`goodsid` varchar(255) NULL,
`upspecid` int NULL,
`price` decimal(10,2) NULL,
`inventory` int NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_shop` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '店铺表自增id',
`name` varchar(255) NULL COMMENT '店铺名称',
`logo` varchar(255) NULL COMMENT '店铺logo',
`address` varchar(255) NULL COMMENT '店铺地址',
`tel` varchar(255) NULL COMMENT '电话',
`isopen` enum('1','0') NULL DEFAULT '1' COMMENT '是否开业（店铺）0歇业  1开业',
`status` enum('1','0') NULL DEFAULT '1' COMMENT '是否开业（平台）0歇业   1开业',
`opentime` varchar(255) NULL COMMENT '开业时间',
`closetime` varchar(255) NULL COMMENT '歇业时间',
`societyid` int NULL COMMENT '所属社区id',
`memberid` varchar(255) NULL,
`feetaux` varchar(255) NULL,
`viptaux` varchar(255) NULL,
`platformtaux` varchar(255) NULL,
`money` varchar(255) NULL COMMENT '店铺总金额',
`isrecommend` enum('1','0') NULL DEFAULT '0' COMMENT '是否开启店铺推荐 0不开启 1开启',
`canceltime` varchar(255) NULL COMMENT '自动取消订单时间（单位 小时）',
`confirmtime` varchar(255) NULL COMMENT '自动确认订单时间（单位 小时）',
`iscod` enum('1','0') NULL COMMENT '是否支持货到付款 0不支持 1支持',
`cycle` varchar(255) NULL COMMENT '结算周期',
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_shop_admin` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`shopid` int NULL,
`login` varchar(255) NULL,
`pwd` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_shop_classfied` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`description` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_shop_admin_classified` (
`adminid` int(11) NOT NULL,
`classifiedid` int NULL,
PRIMARY KEY (`adminid`) 
);

CREATE TABLE `sqg_shop_retire` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`shopid` int NULL,
`money` decimal(10,2) NULL,
`time` varchar(255) NULL,
`status` enum('0','1','-1') NULL DEFAULT '0',
`timeconfirm` varchar(255) NULL,
`confirmerid` int NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_setting` (
`key` varchar(255) NOT NULL,
`value` text NULL,
PRIMARY KEY (`key`) 
);

CREATE TABLE `sqg_goods_order` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`memberid` varchar(255) NULL,
`time` varchar(255) NULL,
`num` int NULL,
`money` decimal(10,2) NULL,
`truemoney` decimal(10,2) NULL COMMENT '实际交易金额',
`couponid` int NULL,
`status` enum('-1','0','1','2','3','4') NULL COMMENT '-1支付失败  0未支付  1支付成功  2团购待成团 3待发货 4待收货',
`groupid` int NULL,
`score` decimal(10,2) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_coupon` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`fullmoney` decimal(10,2) NULL COMMENT '满fullmoney减 money',
`money` decimal(10,2) NULL COMMENT '减money',
`goodsid` int NULL,
`type` enum('1','0') NULL COMMENT '优惠券类型  0 指定优惠券   1通用优惠券',
`starttime` varchar(255) NULL COMMENT '优惠券开始时间',
`expiretime` varchar(255) NULL COMMENT '优惠券结束时间',
`shopid` int NULL COMMENT '店铺id  如果无店铺id  为通用优惠券',
`discount` enum('1','0') NULL COMMENT '0折扣券   1抵扣券',
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_eval` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '评价表自增id',
`content` varchar(255) NULL,
`time` varchar(255) NULL,
`memberid` varchar(255) NULL,
`goodsid` int NULL,
`orderid` varchar(255) NULL,
`level` int NULL COMMENT '评星',
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_goods_group` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`goodsid` int NULL,
`starttime` varchar(255) NULL COMMENT '开团时间',
`expiretime` datetime NULL COMMENT '截止时间',
`status` enum('2','1','0') NULL COMMENT '团购状态  0未成团    1已成团   2已过期',
`memberid` varchar(255) NULL COMMENT '发起人id',
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_goods_server` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`goodsid` int NULL,
`memberid` varchar(255) NULL,
`time` varchar(255) NULL COMMENT '下单时间',
`worktime` varchar(255) NULL COMMENT '预约服务时间',
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_shop_supply` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '供货商表',
`name` varchar(255) NULL,
`pwd` varchar(255) NULL,
`tel` varchar(255) NULL,
`email` varchar(255) NULL,
`logo` varchar(255) NULL,
`address` varchar(255) NULL,
`status` enum('1','0') NULL DEFAULT '1' COMMENT '禁启用（平台）0禁用  1启用',
`money` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_member_coupon` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`couponid` int NULL,
`memberid` varchar(255) NULL,
`receivetime` varchar(255) NULL COMMENT '领取时间',
`expiretime` varchar(255) NULL COMMENT '过期时间',
`status` enum('2','1','0') NULL DEFAULT '1' COMMENT '0已使用  1未使用  2已过期',
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_shop_supply_goods` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`catid` int(255) NULL,
`supplyid` int NULL,
`price` decimal(10,2) NULL,
`servicecontent` varchar(255) NULL,
`content` text NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_supply_goods_spec` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`name` varchar(255) NULL,
`goodsid` int NULL,
`upspecid` int NULL,
`price` decimal(10,2) NULL,
`inventory` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_collect` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`memberid` varchar(255) NULL,
`goodsid` int NULL,
`shopid` int NULL,
`time` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_goods_banner` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`goodsid` int NULL,
`imageurl` varchar(255) NULL,
`sort` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_supply_goods_banner` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`imageurl` varchar(255) NULL,
`goodsid` int NULL,
`sort` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_visitor` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '访客表自增ID',
`creattime` varchar(255) NULL COMMENT '访问时间',
`memberid` varchar(255) NULL COMMENT '访问者',
`page` varchar(255) NULL,
`shopid` int NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_shop_acount_log` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`shopid` int NULL COMMENT '店铺id   0为平台',
`money` decimal(10,2) NULL COMMENT '金额',
`type` enum('1','0') NULL DEFAULT NULL COMMENT '记录类型 0为出账 1为入账',
`memberid` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_goods_cars` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`memberid` varchar(255) NULL,
`status` enum('1','0') NULL DEFAULT '0' COMMENT '状态 0未支付 1已支付',
`specid` int NULL,
`num` int NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_member_acount_log` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`money` varchar(255) NULL,
`type` enum('3','2','1') NULL COMMENT 'money种类  1余额  2积分  3物业币',
`status` enum('1','0') NULL COMMENT '金额来源0支出  1收入',
`memberid` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_shop_balance` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`shopid` int NULL,
`money` decimal(10,2) NULL COMMENT '结算金额',
`time` varchar(255) NULL COMMENT '创建时间',
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_goods_order_goods` (
`orderid` int(11) NOT NULL,
`goodsid` int NULL,
`num` int NULL,
PRIMARY KEY (`orderid`) 
);

CREATE TABLE `sqg_goods_order_spec` (
`orderid` int(11) NOT NULL,
`specid` int NULL,
`num` int NULL,
PRIMARY KEY (`orderid`) 
);

CREATE TABLE `sqg_goods_visitor` (
`memberid` varchar(255) NOT NULL,
`goodsid` int NULL,
`time` varchar(255) NULL,
PRIMARY KEY (`memberid`) 
);

CREATE TABLE `sqg_member_fee_log` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`memberid` int NULL,
`time` varchar(255) NULL,
`cycle` varchar(255) NULL COMMENT '会员时长',
`money` varchar(255) NULL,
PRIMARY KEY (`id`) 
);

CREATE TABLE `sqg_admin_log` (
`adminid` int(11) NOT NULL,
`time` varchar(255) NULL,
`ip` varchar(255) NULL,
PRIMARY KEY (`adminid`) 
);

