CREATE TABLE `product` (
  `p_id` int(11) NOT NULL auto_increment,
  `p_name` varchar(200) collate utf8_unicode_ci default NULL,
  `p_detail` text collate utf8_unicode_ci,
  `p_price` float default NULL,
  `p_pic` varchar(20) collate utf8_unicode_ci default NULL,
  `c_id` varchar(100) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `product`
-- 

INSERT INTO `product` VALUES (1, 'book1', 'workshop นี้ได้แนะนำวิธีการสร้างเว็บไซต์จาก devbanban.com ', 349, 'book.jpg', '1');
INSERT INTO `product` VALUES (2, 'book2', 'workshop นี้ได้แนะนำวิธีการสร้างเว็บไซต์จาก devbanban.com ', 349, 'book.jpg', '1');
INSERT INTO `product` VALUES (3, 'book3', 'workshop นี้ได้แนะนำวิธีการสร้างเว็บไซต์จาก devbanban.com ', 195, 'book.jpg', '1');
INSERT INTO `product` VALUES (4, 'book4', 'workshop นี้ได้แนะนำวิธีการสร้างเว็บไซต์จาก devbanban.com ', 149, 'book.jpg', '1');
INSERT INTO `product` VALUES (5, 'book5', 'workshop นี้ได้แนะนำวิธีการสร้างเว็บไซต์จาก devbanban.com ', 249, 'book.jpg', '1');
INSERT INTO `product` VALUES (6, 'book6', 'workshop นี้ได้แนะนำวิธีการสร้างเว็บไซต์จาก devbanban.com ', 289, 'book.jpg', '1');

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL auto_increment,
  `c_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `category`
-- 

INSERT INTO `category` VALUES (1, 'IT');

CREATE TABLE `order_head` (
  `o_id` int(10) NOT NULL auto_increment,
  `o_dttm` datetime NOT NULL,
  `o_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `o_addr` varchar(500) collate utf8_unicode_ci NOT NULL,
  `o_email` varchar(100) collate utf8_unicode_ci NOT NULL,
  `o_phone` varchar(20) collate utf8_unicode_ci NOT NULL,
  `o_qty` int(11) NOT NULL,
  `o_total` float NOT NULL,
  PRIMARY KEY  (`o_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE `order_detail` (
  `d_id` int(10) NOT NULL auto_increment,
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_qty` int(11) NOT NULL,
  `d_subtotal` float NOT NULL,
  PRIMARY KEY  (`d_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;