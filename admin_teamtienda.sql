-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-05-2012 a las 19:18:58
-- Versión del servidor: 5.0.77
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `admin_teamtienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_access`
--

CREATE TABLE IF NOT EXISTS `ps_access` (
  `id_profile` int(10) unsigned NOT NULL,
  `id_tab` int(10) unsigned NOT NULL,
  `view` int(11) NOT NULL,
  `add` int(11) NOT NULL,
  `edit` int(11) NOT NULL,
  `delete` int(11) NOT NULL,
  PRIMARY KEY  (`id_profile`,`id_tab`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_access`
--

INSERT INTO `ps_access` (`id_profile`, `id_tab`, `view`, `add`, `edit`, `delete`) VALUES
(1, 1, 1, 1, 1, 1),
(1, 2, 1, 1, 1, 1),
(1, 3, 1, 1, 1, 1),
(1, 4, 1, 1, 1, 1),
(1, 5, 1, 1, 1, 1),
(1, 6, 1, 1, 1, 1),
(1, 7, 1, 1, 1, 1),
(1, 8, 1, 1, 1, 1),
(1, 9, 1, 1, 1, 1),
(1, 10, 1, 1, 1, 1),
(1, 11, 1, 1, 1, 1),
(1, 12, 1, 1, 1, 1),
(1, 13, 1, 1, 1, 1),
(1, 14, 1, 1, 1, 1),
(1, 15, 1, 1, 1, 1),
(1, 16, 1, 1, 1, 1),
(1, 17, 1, 1, 1, 1),
(1, 18, 1, 1, 1, 1),
(1, 19, 1, 1, 1, 1),
(1, 20, 1, 1, 1, 1),
(1, 21, 1, 1, 1, 1),
(1, 22, 1, 1, 1, 1),
(1, 23, 1, 1, 1, 1),
(1, 24, 1, 1, 1, 1),
(1, 26, 1, 1, 1, 1),
(1, 27, 1, 1, 1, 1),
(1, 28, 1, 1, 1, 1),
(1, 29, 1, 1, 1, 1),
(1, 30, 1, 1, 1, 1),
(1, 31, 1, 1, 1, 1),
(1, 32, 1, 1, 1, 1),
(1, 33, 1, 1, 1, 1),
(1, 34, 1, 1, 1, 1),
(1, 35, 1, 1, 1, 1),
(1, 36, 1, 1, 1, 1),
(1, 37, 1, 1, 1, 1),
(1, 38, 1, 1, 1, 1),
(1, 39, 1, 1, 1, 1),
(1, 40, 1, 1, 1, 1),
(1, 41, 1, 1, 1, 1),
(1, 42, 1, 1, 1, 1),
(1, 43, 1, 1, 1, 1),
(1, 44, 1, 1, 1, 1),
(1, 46, 1, 1, 1, 1),
(1, 47, 1, 1, 1, 1),
(1, 48, 1, 1, 1, 1),
(1, 49, 1, 1, 1, 1),
(1, 50, 1, 1, 1, 1),
(1, 51, 1, 1, 1, 1),
(1, 52, 1, 1, 1, 1),
(1, 53, 1, 1, 1, 1),
(1, 54, 1, 1, 1, 1),
(1, 55, 1, 1, 1, 1),
(1, 56, 1, 1, 1, 1),
(1, 57, 1, 1, 1, 1),
(1, 58, 1, 1, 1, 1),
(1, 59, 1, 1, 1, 1),
(1, 60, 1, 1, 1, 1),
(1, 61, 1, 1, 1, 1),
(1, 62, 1, 1, 1, 1),
(1, 63, 1, 1, 1, 1),
(1, 64, 1, 1, 1, 1),
(1, 65, 1, 1, 1, 1),
(1, 66, 1, 1, 1, 1),
(1, 67, 1, 1, 1, 1),
(1, 68, 1, 1, 1, 1),
(2, 1, 1, 1, 1, 1),
(2, 2, 1, 1, 1, 1),
(2, 3, 1, 1, 1, 1),
(2, 4, 1, 1, 1, 1),
(2, 5, 1, 1, 1, 1),
(2, 6, 1, 1, 1, 1),
(2, 7, 1, 1, 1, 1),
(2, 8, 1, 1, 1, 1),
(2, 9, 1, 1, 1, 1),
(2, 10, 1, 1, 1, 1),
(2, 11, 1, 1, 1, 1),
(2, 12, 1, 1, 1, 1),
(2, 13, 1, 1, 1, 1),
(2, 14, 1, 1, 1, 1),
(2, 15, 1, 1, 1, 1),
(2, 16, 1, 1, 1, 1),
(2, 17, 1, 1, 1, 1),
(2, 18, 1, 1, 1, 1),
(2, 19, 1, 1, 1, 1),
(2, 20, 1, 1, 1, 1),
(2, 21, 1, 1, 1, 1),
(2, 22, 1, 1, 1, 1),
(2, 23, 1, 1, 1, 1),
(2, 24, 1, 1, 1, 1),
(2, 26, 1, 1, 1, 1),
(2, 27, 1, 1, 1, 1),
(2, 28, 1, 1, 1, 1),
(2, 29, 1, 1, 1, 1),
(2, 30, 1, 1, 1, 1),
(2, 31, 1, 1, 1, 1),
(2, 32, 1, 1, 1, 1),
(2, 33, 1, 1, 1, 1),
(2, 34, 1, 1, 1, 1),
(2, 35, 1, 1, 1, 1),
(2, 36, 1, 1, 1, 1),
(2, 37, 1, 1, 1, 1),
(2, 38, 1, 1, 1, 1),
(2, 39, 1, 1, 1, 1),
(2, 40, 1, 1, 1, 1),
(2, 41, 1, 1, 1, 1),
(2, 42, 1, 1, 1, 1),
(2, 43, 1, 1, 1, 1),
(2, 44, 1, 1, 1, 1),
(2, 46, 1, 1, 1, 1),
(2, 47, 1, 1, 1, 1),
(2, 48, 1, 1, 1, 1),
(2, 49, 1, 1, 1, 1),
(2, 50, 1, 1, 1, 1),
(2, 51, 1, 1, 1, 1),
(2, 52, 1, 1, 1, 1),
(2, 53, 1, 1, 1, 1),
(2, 54, 1, 1, 1, 1),
(2, 55, 1, 1, 1, 1),
(2, 56, 1, 1, 1, 1),
(2, 57, 1, 1, 1, 1),
(2, 58, 1, 1, 1, 1),
(2, 59, 1, 1, 1, 1),
(2, 60, 1, 1, 1, 1),
(2, 61, 1, 1, 1, 1),
(2, 62, 1, 1, 1, 1),
(2, 63, 1, 1, 1, 1),
(2, 64, 1, 1, 1, 1),
(2, 65, 1, 1, 1, 1),
(2, 66, 1, 1, 1, 1),
(2, 67, 1, 1, 1, 1),
(2, 68, 1, 1, 1, 1),
(1, 69, 1, 1, 1, 1),
(2, 69, 1, 1, 1, 1),
(1, 70, 1, 1, 1, 1),
(2, 70, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_accessory`
--

CREATE TABLE IF NOT EXISTS `ps_accessory` (
  `id_product_1` int(10) unsigned NOT NULL,
  `id_product_2` int(10) unsigned NOT NULL,
  KEY `accessory_product` (`id_product_1`,`id_product_2`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_address`
--

CREATE TABLE IF NOT EXISTS `ps_address` (
  `id_address` int(10) unsigned NOT NULL auto_increment,
  `id_country` int(10) unsigned NOT NULL,
  `id_state` int(10) unsigned default NULL,
  `id_customer` int(10) unsigned NOT NULL default '0',
  `id_manufacturer` int(10) unsigned NOT NULL default '0',
  `id_supplier` int(10) unsigned NOT NULL default '0',
  `alias` varchar(32) NOT NULL,
  `company` varchar(32) default NULL,
  `lastname` varchar(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `address1` varchar(128) NOT NULL,
  `address2` varchar(128) default NULL,
  `postcode` varchar(12) default NULL,
  `city` varchar(64) NOT NULL,
  `other` text,
  `phone` varchar(16) default NULL,
  `phone_mobile` varchar(16) default NULL,
  `date_add` datetime NOT NULL,
  `date_upd` datetime NOT NULL,
  `active` tinyint(1) unsigned NOT NULL default '1',
  `deleted` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id_address`),
  KEY `address_customer` (`id_customer`),
  KEY `id_country` (`id_country`),
  KEY `id_state` (`id_state`),
  KEY `id_manufacturer` (`id_manufacturer`),
  KEY `id_supplier` (`id_supplier`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `ps_address`
--

INSERT INTO `ps_address` (`id_address`, `id_country`, `id_state`, `id_customer`, `id_manufacturer`, `id_supplier`, `alias`, `company`, `lastname`, `firstname`, `address1`, `address2`, `postcode`, `city`, `other`, `phone`, `phone_mobile`, `date_add`, `date_upd`, `active`, `deleted`) VALUES
(3, 6, 0, 2, 0, 0, 'Mi dirección', 'Empresa', 'Temprado', 'Jordi', 'c/ Tolra 43-45 At-2', '', '08032', 'Barcelona', '', '', '', '2010-11-15 11:57:07', '2010-12-08 20:43:59', 1, 1),
(2, 8, 0, 1, 0, 0, 'Mon adresse', 'My Company', 'DOE', 'John', '16, Main street', '2nd floor', '75000', 'Paris ', '', '0102030405', '', '2010-09-01 18:15:29', '2010-12-18 16:12:53', 1, 1),
(5, 6, 0, 2, 0, 0, 'Mi dirección', 'Empresa', 'Temprado', 'Jordi', 'c/ Tolra 600', '', '08032', 'Barcelona', '', '', '', '2010-11-18 14:55:36', '2010-12-03 16:40:47', 1, 1),
(7, 6, 0, 2, 0, 0, '68', '67', 'Temprado', 'Jordi', '67', '67', '67', '67', '67', '67', '67', '2010-11-18 15:31:06', '2010-12-18 16:12:53', 1, 1),
(6, 6, 0, 2, 0, 0, 'lopd@team-web.es', 'JTH', 'Temprado', 'Jordi', 'C/ Balmes 34', '', '08032', 'Valencia', '', '', '', '2010-11-18 15:05:43', '2010-12-18 16:12:53', 1, 1),
(8, 6, 0, 3, 0, 0, 'Mi dirección', '', 'GRE', 'JPA', 'qweqwe', '', '0801', 'Barcelona', '', '', '', '2010-11-22 12:33:34', '2011-01-21 17:36:53', 1, 1),
(9, 6, 0, 2, 0, 0, 'Mi dirección', 'Empresa', 'Temprado', 'Jordi', 'c/ Tolra 600', '', '08032', 'Barcelona', 'sss', '', '', '2010-12-03 16:40:47', '2010-12-18 16:12:53', 1, 1),
(10, 6, 0, 2, 0, 0, 'Mi dirección', 'Empresa', 'Temprado', 'Jordi', 'c/ Tolra 43-45 At-2', '', '08032', 'Barcelona', '', '', '', '2010-12-08 20:43:43', '2010-12-18 16:12:53', 1, 1),
(13, 6, 0, 5, 0, 0, 'Mi dirección', '', 'Pablo', 'Juan', 'calle', '', '11111', 'bcn', '', '', '', '2010-12-24 15:40:02', '2011-01-24 16:33:42', 1, 1),
(38, 6, 0, 25, 0, 0, 'Mi dirección', '', 'Temprado', 'Jordi', 'Tolra 42', '', '08032', 'barcelona', '', '', '', '2011-11-01 18:13:31', '2011-11-01 18:13:31', 1, 0),
(17, 6, 0, 6, 0, 0, 'c/ Tolra 43-45', '', 'Temprado', 'Ana', 'c/ Tolra 43-45', '', '08032', 'Barcelona', '', '', '', '2011-01-20 15:19:50', '2011-01-21 17:41:44', 1, 1),
(18, 6, 0, 7, 0, 0, 'c/ Balmes 50', '', 'Lopez Lopez', 'Fredi', 'c/ Muntaner', '', '08000', 'Barcelona', '', '934205523', '6864646', '2011-01-20 15:27:39', '2011-01-21 15:00:36', 1, 1),
(19, 6, 0, 7, 0, 0, 'alias', '', 'Lopez Lopez', 'Fredi', 'c/ Muntaner 50', '', '08000', 'Barcelona', '', '934205523', '6864646', '2011-01-21 14:58:12', '2011-01-24 15:06:51', 1, 1),
(20, 6, 0, 6, 0, 0, 'Ana', '', 'Temprado', 'Ana', 'Valencia 56', '', '08032', 'Barcelona', '', '', '', '2011-01-21 17:53:45', '2011-01-21 18:23:26', 1, 1),
(23, 6, 0, 7, 0, 0, 'Fredi', '', 'Lopez Lopez', 'Fredi', 'c/ Balmes 200', '', '08032', 'Barcelona', '', '', '', '2011-01-24 14:43:01', '2011-01-24 16:48:44', 1, 1),
(25, 6, 0, 5, 0, 0, 'gotico', '', 'Pablo', 'Juan', 'Agla 7', '', '08001', 'Barcelona', '', '', '', '2011-01-24 16:33:22', '2011-01-24 16:33:56', 1, 1),
(41, 6, 0, 28, 0, 0, 'Mi dirección', '', 'Temprado', 'Jordi', 'c/Tolra 43-At', '', '08032', 'Barcelona', '', '', '', '2012-02-15 18:39:42', '2012-02-15 18:39:42', 1, 0),
(42, 6, 0, 29, 0, 0, 'Mi dirección', '', 'Navarrete', 'Pablo', 'Rull 3', '', '08002', 'Barcelona', '', '', '', '2012-03-24 19:50:03', '2012-03-24 19:50:03', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_alias`
--

CREATE TABLE IF NOT EXISTS `ps_alias` (
  `id_alias` int(10) unsigned NOT NULL auto_increment,
  `alias` varchar(255) NOT NULL,
  `search` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`id_alias`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ps_alias`
--

INSERT INTO `ps_alias` (`id_alias`, `alias`, `search`, `active`) VALUES
(4, 'piod', 'ipod', 1),
(3, 'ipdo', 'ipod', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_attachment`
--

CREATE TABLE IF NOT EXISTS `ps_attachment` (
  `id_attachment` int(10) unsigned NOT NULL auto_increment,
  `file` varchar(40) NOT NULL,
  `mime` varchar(32) NOT NULL,
  PRIMARY KEY  (`id_attachment`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=281 ;

--
-- Volcado de datos para la tabla `ps_attachment`
--

INSERT INTO `ps_attachment` (`id_attachment`, `file`, `mime`) VALUES
(2, 'eeb2697d7d79536980a559cbe0785706111c8b44', 'application/pdf'),
(3, '9d6c38c4d7c50813361d0d4ffeca7e08d1009775', 'application/pdf'),
(7, '691dd6b858c9ff61c8549d466290a83fa8796bb5', 'application/pdf'),
(8, 'fad8e34613be97435c70835b7fa43fa59e072c7e', 'application/pdf'),
(9, '90f9e70899912acb330aa5b63660db458a297732', 'application/pdf'),
(10, 'b79b083fd0aada89bacf88c05f4f396715cc7f59', 'application/pdf'),
(11, '687b978919df364ee5df35d5885bdc1ffa2c1153', 'application/pdf'),
(12, 'dc4a54cab317f73b2d56ec605437202dab7d8ddc', 'application/pdf'),
(13, 'f1e6bd2b21e7fbf43fe30a0fc3a2e1f059ece5da', 'application/pdf'),
(15, '344168fc8e1feaf9010b70bf528150ccd44d4c4e', 'application/pdf'),
(16, '6435d2f80c46d75108ddfca5c140422dc9830253', 'application/pdf'),
(17, 'a0c224363e54978b3aa41ca2987cb25a3171cfba', 'application/pdf'),
(18, '1493fb1ef4f5f61bc020113f4b6e9dc7f39f03c2', 'application/pdf'),
(19, '1c6fbe666149f988ab97e8661b5a5fb70f4ef2fe', 'application/pdf'),
(20, '3a25279e530a6893e0a7c37bf17d89c286704b25', 'application/pdf'),
(22, '0d40fd4972da38c4d43f218d3a8a6277c60cdb08', 'application/pdf'),
(23, '72136242251920724085738d0c50247e2e1650e1', 'application/pdf'),
(24, 'd01ffe880b106e9126cf3f36b58d8395f13358e4', 'application/pdf'),
(25, '061e23d908be40eb1a88f19412590d4b60bd2294', 'application/pdf'),
(26, 'b51a36dd29c753e44759ebfb038e01fe7cba6411', 'application/pdf'),
(27, '8c55d65120994ceab72d6b6e06d51ac418c979f3', 'application/pdf'),
(113, '96fb98c7cfbb12851b9174b015706c7dbca7a04c', 'application/pdf'),
(114, 'e5b5656d288b2c4b1948419fb38c04084bf413fc', 'application/pdf'),
(115, 'e1d4ee391be8a7ef1fa5e9d8996b97d985111eae', 'application/pdf'),
(116, 'ba03e94780ff7d0b5210195998c9068b2219487a', 'application/pdf'),
(117, '30e87578d15565bed41e78391cb447621c8cb430', 'application/pdf'),
(118, 'f08b44bcce4c6420a57201f4b725128c2dfac366', 'application/pdf'),
(119, 'ced8bbcbaac8e047560418ecbe0b58a088935fa2', 'application/pdf'),
(120, '88428240b5dcad8108b7b95233d1362b67172491', 'application/pdf'),
(121, '66c6cd5cc85ba6e897855065af61f2656d269de6', 'application/pdf'),
(122, '74de47d86b3f9d4093e54d9af34373d533d2585f', 'application/pdf'),
(123, '6b44a20fa2aef696b0e8eae8c91e76941e03e602', 'application/pdf'),
(124, '833befc3bfb6060f8b25a9d8716d79ffac38fa29', 'application/pdf'),
(125, '49d21bf9214dadfb5be83c0cc44cfb584a5afa27', 'application/pdf'),
(126, 'be1ba509b555ec59ebb1487f90c11a44697f7753', 'application/pdf'),
(127, 'e680654c92c4dc23ead3e8fd106bf8d968a87b6e', 'application/pdf'),
(128, '5857f2b74e7ef98721810aeb29e1d099f001b5fd', 'application/pdf'),
(129, 'be401e8d151e59047f78a776316de94347f59cc4', 'application/pdf'),
(130, 'cfcfa9347ad561713c082a87aa300257018fa6c3', 'application/pdf'),
(131, 'cb6c224c0c5c1394f912e8e0021a55a02545830c', 'application/pdf'),
(132, '39d12dd7eef2911eacdd5278356139570d176d05', 'application/pdf'),
(133, 'd72fbff5c28b1e8d645edc2379a3973a9fc44ee8', 'application/pdf'),
(256, 'a7e2ef4d8ba90a96c7bd9414886dbf12ecbd001b', 'application/pdf'),
(257, 'bcdba044a02bcedfb0770390c65215dfe3b8a674', 'application/pdf'),
(258, '1ce9ec6f559e3170904d3c76510d256bd906f93c', 'application/pdf'),
(259, '683eea6eda55398dd0118e332a3e093cb87d2a09', 'application/pdf'),
(260, '30e13d69d842eb4c16d486a3dcc74054e9effea4', 'application/pdf'),
(261, 'ce2abf0d6e52cbe9dceee87e44b2f0f388a21c19', 'application/pdf'),
(262, 'd8a3633dcba1d3be28edf6b61c572b20f586109c', 'application/pdf'),
(263, 'a97880ffe3202095487f97afc67044d4b9fd7ffd', 'application/pdf'),
(264, 'c2cf2888a1c01d5eff6ed03f20ec3fbb305b37ea', 'application/pdf'),
(265, 'db7d077e0e9495855bbe72fd1fefa6460a07f854', 'application/pdf'),
(266, 'a99127f94a463fd8f086a280507c2a074f488fc0', 'application/pdf'),
(267, 'a12dfa4d9df3652685b7c690151febde9c9c04ba', 'application/pdf'),
(268, '17db1f667fb9b9c93bd2fd625c9df000bc79b9d9', 'application/pdf'),
(269, 'd05855952c2502cf89602bad1a4f93f172897c70', 'application/pdf'),
(270, '9ab90be178bf476af0d95fc8dc5b8e39afce099d', 'application/pdf'),
(271, '8106585bd4be48dc352009a97d1f1759b482cfa6', 'application/pdf'),
(272, '568666af3cd8d98a45051cf56cbf1e47d0d18d6f', 'application/pdf'),
(273, '9df4abd82020ba8053bd5bdc24b9388ce2fd0c9a', 'application/pdf'),
(274, '320f34cbb59e06145a04dfda958c6163af072c36', 'application/pdf'),
(275, '0155cbe131286454d8bb8f9896f4010dd3e5d0b7', 'application/pdf'),
(276, '43044e0a047dee15bbb747cb47e6ae89c74a1cfa', 'application/pdf'),
(277, 'dcc57f617f8cbf2797b062a531f82f2d0edabd27', 'application/pdf'),
(278, '968bf327a8fb7b8ee6c224ee050a31c6309230b1', 'application/pdf'),
(279, 'd8f3ba118d5988b78ca27cd09e9e145e3a33e86f', 'application/pdf'),
(280, 'cd15203d18da6dddf6944778d08ceb7cc254c05e', 'application/pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_attachment_lang`
--

CREATE TABLE IF NOT EXISTS `ps_attachment_lang` (
  `id_attachment` int(10) unsigned NOT NULL auto_increment,
  `id_lang` int(10) unsigned NOT NULL,
  `name` varchar(32) default NULL,
  `description` text,
  PRIMARY KEY  (`id_attachment`,`id_lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=281 ;

--
-- Volcado de datos para la tabla `ps_attachment_lang`
--

INSERT INTO `ps_attachment_lang` (`id_attachment`, `id_lang`, `name`, `description`) VALUES
(2, 3, 'Bolsa amarilla', ''),
(3, 3, 'Bolsa amarilla', ''),
(7, 3, 'Caja abierta roja', 'application/pdf 691dd6b858c9ff61c8549d466290a83fa8796bb5'),
(8, 3, 'Caja cerrada verde', 'application/pdf fad8e34613be97435c70835b7fa43fa59e072c7e'),
(9, 3, 'Caja cerrada naranja', 'application/pdf 90f9e70899912acb330aa5b63660db458a297732'),
(10, 3, 'Bolsa negra', 'application/pdf b79b083fd0aada89bacf88c05f4f396715cc7f59'),
(11, 3, 'Bolsa roja', 'application/pdf 687b978919df364ee5df35d5885bdc1ffa2c1153'),
(12, 3, 'Bolsa naranja', 'application/pdf dc4a54cab317f73b2d56ec605437202dab7d8ddc'),
(13, 3, 'Bolsa verde', 'application/pdf f1e6bd2b21e7fbf43fe30a0fc3a2e1f059ece5da'),
(15, 3, 'Caja abierta azul', 'application/pdf 344168fc8e1feaf9010b70bf528150ccd44d4c4e'),
(16, 3, 'Etiquetas azul', 'application/pdf 6435d2f80c46d75108ddfca5c140422dc9830253'),
(17, 3, 'Etiquetas naranja', 'application/pdf a0c224363e54978b3aa41ca2987cb25a3171cfba'),
(18, 3, 'Etiquetas verde', 'application/pdf 1493fb1ef4f5f61bc020113f4b6e9dc7f39f03c2'),
(19, 3, 'Etiquetas bio 1', 'application/pdf 1c6fbe666149f988ab97e8661b5a5fb70f4ef2fe'),
(20, 3, 'Etiquetas bio 2', 'application/pdf 3a25279e530a6893e0a7c37bf17d89c286704b25'),
(22, 3, 'Caja abierta verde', 'application/pdf 0d40fd4972da38c4d43f218d3a8a6277c60cdb08'),
(23, 3, 'Caja abierta amarilla', 'application/pdf 72136242251920724085738d0c50247e2e1650e1'),
(24, 3, 'Caja abierta negra', 'application/pdf d01ffe880b106e9126cf3f36b58d8395f13358e4'),
(25, 3, 'Caja cerrada amarilla', 'application/pdf 061e23d908be40eb1a88f19412590d4b60bd2294'),
(26, 3, 'Caja cerrada roja', 'application/pdf b51a36dd29c753e44759ebfb038e01fe7cba6411'),
(27, 3, 'Caja cerrada negra', 'application/pdf 8c55d65120994ceab72d6b6e06d51ac418c979f3'),
(113, 3, 'Bolsa amarilla', 'application/pdf 96fb98c7cfbb12851b9174b015706c7dbca7a04c'),
(114, 3, 'Caja abierta roja', 'application/pdf e5b5656d288b2c4b1948419fb38c04084bf413fc'),
(115, 3, 'Caja cerrada verde', 'application/pdf e1d4ee391be8a7ef1fa5e9d8996b97d985111eae'),
(116, 3, 'Caja cerrada naranja', 'application/pdf ba03e94780ff7d0b5210195998c9068b2219487a'),
(117, 3, 'Bolsa negra', 'application/pdf 30e87578d15565bed41e78391cb447621c8cb430'),
(118, 3, 'Bolsa roja', 'application/pdf f08b44bcce4c6420a57201f4b725128c2dfac366'),
(119, 3, 'Bolsa naranja', 'application/pdf ced8bbcbaac8e047560418ecbe0b58a088935fa2'),
(120, 3, 'Bolsa verde', 'application/pdf 88428240b5dcad8108b7b95233d1362b67172491'),
(121, 3, 'Etiquetas roja', 'application/pdf 66c6cd5cc85ba6e897855065af61f2656d269de6'),
(122, 3, 'Caja abierta azul', 'application/pdf 74de47d86b3f9d4093e54d9af34373d533d2585f'),
(123, 3, 'Etiquetas azul', 'application/pdf 6b44a20fa2aef696b0e8eae8c91e76941e03e602'),
(124, 3, 'Etiquetas naranja', 'application/pdf 833befc3bfb6060f8b25a9d8716d79ffac38fa29'),
(125, 3, 'Etiquetas bio 1', 'application/pdf 49d21bf9214dadfb5be83c0cc44cfb584a5afa27'),
(126, 3, 'Etiquetas bio 2', 'application/pdf be1ba509b555ec59ebb1487f90c11a44697f7753'),
(127, 3, 'Caja abierta blanca', 'application/pdf e680654c92c4dc23ead3e8fd106bf8d968a87b6e'),
(128, 3, 'Caja abierta verde', 'application/pdf 5857f2b74e7ef98721810aeb29e1d099f001b5fd'),
(129, 3, 'Caja abierta amarilla', 'application/pdf be401e8d151e59047f78a776316de94347f59cc4'),
(130, 3, 'Caja abierta negra', 'application/pdf cfcfa9347ad561713c082a87aa300257018fa6c3'),
(131, 3, 'Caja cerrada amarilla', 'application/pdf cb6c224c0c5c1394f912e8e0021a55a02545830c'),
(132, 3, 'Caja cerrada roja', 'application/pdf 39d12dd7eef2911eacdd5278356139570d176d05'),
(133, 3, 'Caja cerrada negra', 'application/pdf d72fbff5c28b1e8d645edc2379a3973a9fc44ee8'),
(256, 3, 'Caja abierta roja', 'application/pdf a7e2ef4d8ba90a96c7bd9414886dbf12ecbd001b'),
(257, 3, 'Caja abierta roja', 'application/pdf bcdba044a02bcedfb0770390c65215dfe3b8a674'),
(258, 3, 'Caja abierta roja', 'application/pdf 1ce9ec6f559e3170904d3c76510d256bd906f93c'),
(259, 3, 'Caja cerrada verde', 'application/pdf 683eea6eda55398dd0118e332a3e093cb87d2a09'),
(260, 3, 'Caja cerrada naranja', 'application/pdf 30e13d69d842eb4c16d486a3dcc74054e9effea4'),
(261, 3, 'Bolsa negra', 'application/pdf ce2abf0d6e52cbe9dceee87e44b2f0f388a21c19'),
(262, 3, 'Bolsa naranja', 'application/pdf d8a3633dcba1d3be28edf6b61c572b20f586109c'),
(263, 3, 'Bolsa verde', 'application/pdf a97880ffe3202095487f97afc67044d4b9fd7ffd'),
(264, 3, 'Bolsa amarilla', 'application/pdf c2cf2888a1c01d5eff6ed03f20ec3fbb305b37ea'),
(265, 3, 'Etiquetas roja', 'application/pdf db7d077e0e9495855bbe72fd1fefa6460a07f854'),
(266, 3, 'Caja abierta azul', 'application/pdf a99127f94a463fd8f086a280507c2a074f488fc0'),
(267, 3, 'Etiquetas azul', 'application/pdf a12dfa4d9df3652685b7c690151febde9c9c04ba'),
(268, 3, 'Etiquetas naranja', 'application/pdf 17db1f667fb9b9c93bd2fd625c9df000bc79b9d9'),
(269, 3, 'Etiquetas verde', 'application/pdf d05855952c2502cf89602bad1a4f93f172897c70'),
(270, 3, 'Etiquetas bio 1', 'application/pdf 9ab90be178bf476af0d95fc8dc5b8e39afce099d'),
(271, 3, 'Etiquetas bio 2', 'application/pdf 8106585bd4be48dc352009a97d1f1759b482cfa6'),
(272, 3, 'Caja abierta blanca', 'application/pdf 568666af3cd8d98a45051cf56cbf1e47d0d18d6f'),
(273, 3, 'Caja abierta verde', 'application/pdf 9df4abd82020ba8053bd5bdc24b9388ce2fd0c9a'),
(274, 3, 'Caja abierta amarilla-L2', 'application/pdf 320f34cbb59e06145a04dfda958c6163af072c36'),
(275, 3, 'Caja abierta azul-L2', 'application/pdf 0155cbe131286454d8bb8f9896f4010dd3e5d0b7'),
(276, 3, 'Caja abierta amarilla', 'application/pdf 43044e0a047dee15bbb747cb47e6ae89c74a1cfa'),
(277, 3, 'Caja abierta negra', 'application/pdf dcc57f617f8cbf2797b062a531f82f2d0edabd27'),
(278, 3, 'Caja cerrada amarilla', 'application/pdf 968bf327a8fb7b8ee6c224ee050a31c6309230b1'),
(279, 3, 'Caja cerrada roja', 'application/pdf d8f3ba118d5988b78ca27cd09e9e145e3a33e86f'),
(280, 3, 'Caja cerrada negra', 'application/pdf cd15203d18da6dddf6944778d08ceb7cc254c05e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_attribute`
--

CREATE TABLE IF NOT EXISTS `ps_attribute` (
  `id_attribute` int(10) unsigned NOT NULL auto_increment,
  `id_attribute_group` int(10) unsigned NOT NULL,
  `color` varchar(32) default NULL,
  PRIMARY KEY  (`id_attribute`),
  KEY `attribute_group` (`id_attribute_group`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `ps_attribute`
--

INSERT INTO `ps_attribute` (`id_attribute`, `id_attribute_group`, `color`) VALUES
(1, 1, NULL),
(2, 1, NULL),
(8, 1, NULL),
(9, 1, NULL),
(10, 3, NULL),
(11, 3, NULL),
(12, 1, NULL),
(13, 1, NULL),
(3, 2, '#D2D6D5'),
(4, 2, '#008CB7'),
(5, 2, '#F3349E'),
(6, 2, '#93D52D'),
(7, 2, '#FD9812'),
(15, 1, ''),
(16, 1, ''),
(17, 1, ''),
(18, 2, '#7800F0'),
(19, 2, '#F6EF04'),
(20, 2, '#F60409'),
(14, 2, '#000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_attribute_group`
--

CREATE TABLE IF NOT EXISTS `ps_attribute_group` (
  `id_attribute_group` int(10) unsigned NOT NULL auto_increment,
  `is_color_group` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id_attribute_group`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ps_attribute_group`
--

INSERT INTO `ps_attribute_group` (`id_attribute_group`, `is_color_group`) VALUES
(1, 0),
(2, 1),
(3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_attribute_group_lang`
--

CREATE TABLE IF NOT EXISTS `ps_attribute_group_lang` (
  `id_attribute_group` int(10) unsigned NOT NULL,
  `id_lang` int(10) unsigned NOT NULL,
  `name` varchar(128) NOT NULL,
  `public_name` varchar(64) NOT NULL,
  PRIMARY KEY  (`id_attribute_group`,`id_lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_attribute_group_lang`
--

INSERT INTO `ps_attribute_group_lang` (`id_attribute_group`, `id_lang`, `name`, `public_name`) VALUES
(1, 1, 'Disk space', 'Disk space'),
(1, 2, 'Capacité', 'Capacité'),
(2, 1, 'Color', 'Color'),
(2, 2, 'Couleur', 'Couleur'),
(3, 1, 'ICU', 'Processor'),
(3, 2, 'ICU', 'Processeur'),
(1, 3, 'Capacidad', 'Capacidad'),
(2, 3, 'Color', 'Color'),
(3, 3, 'ICU', 'Procesador'),
(1, 4, 'Capacidad', 'Capacidad'),
(2, 4, 'Color', 'Color'),
(3, 4, 'ICU', 'Procesador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_attribute_impact`
--

CREATE TABLE IF NOT EXISTS `ps_attribute_impact` (
  `id_attribute_impact` int(10) unsigned NOT NULL auto_increment,
  `id_product` int(11) unsigned NOT NULL,
  `id_attribute` int(11) unsigned NOT NULL,
  `weight` float NOT NULL,
  `price` decimal(17,2) NOT NULL,
  PRIMARY KEY  (`id_attribute_impact`),
  UNIQUE KEY `id_product` (`id_product`,`id_attribute`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_attribute_lang`
--

CREATE TABLE IF NOT EXISTS `ps_attribute_lang` (
  `id_attribute` int(10) unsigned NOT NULL,
  `id_lang` int(10) unsigned NOT NULL,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY  (`id_attribute`,`id_lang`),
  KEY `id_lang` (`id_lang`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_attribute_lang`
--

INSERT INTO `ps_attribute_lang` (`id_attribute`, `id_lang`, `name`) VALUES
(1, 1, '2GB'),
(1, 2, '2Go'),
(1, 3, '2Go'),
(2, 1, '4GB'),
(2, 2, '4Go'),
(2, 3, '4Go'),
(3, 1, 'Metal'),
(3, 2, 'Metal'),
(3, 3, 'Metal'),
(4, 1, 'Blue'),
(4, 2, 'Bleu'),
(4, 3, 'Azul'),
(5, 1, 'Pink'),
(5, 2, 'Rose'),
(5, 3, 'Rosa'),
(6, 1, 'Green'),
(6, 2, 'Vert'),
(6, 3, 'Verde'),
(7, 1, 'Orange'),
(7, 2, 'Orange'),
(7, 3, 'Naranja'),
(8, 1, 'Optional 64GB solid-state drive'),
(8, 2, 'Disque dur SSD (solid-state drive) de 64 Go '),
(8, 3, 'SSD (solid-state drive) 64 Go '),
(9, 1, '80GB Parallel ATA Drive @ 4200 rpm'),
(9, 2, 'Disque dur PATA de 80 Go à 4 200 tr/min'),
(9, 3, 'Disco duro PATA 80 Go 4 200 tr/min'),
(10, 1, '1.60GHz Intel Core 2 Duo'),
(10, 2, 'Intel Core 2 Duo à 1,6 GHz'),
(10, 3, 'Intel Core 2 Duo para 1,6 GHz'),
(11, 1, '1.80GHz Intel Core 2 Duo'),
(11, 2, 'Intel Core 2 Duo à 1,8 GHz'),
(11, 3, 'Intel Core 2 Duo para 1,8 GHz'),
(12, 1, '80GB: 20,000 Songs'),
(12, 2, '80 Go : 20 000 chansons'),
(12, 3, '80 Go : 20 000 canciones'),
(13, 1, '160GB: 40,000 Songs'),
(13, 2, '160 Go : 40 000 chansons'),
(13, 3, '160 Go : 40 000 canciones'),
(14, 2, 'Noir'),
(14, 3, 'Negro'),
(14, 1, 'Black'),
(15, 1, '8Go'),
(15, 2, '8Go'),
(15, 3, '8Go'),
(16, 1, '16Go'),
(16, 2, '16Go'),
(16, 3, '16Go'),
(17, 1, '32Go'),
(17, 2, '32Go'),
(17, 3, '32Go'),
(18, 1, 'Purple'),
(18, 2, 'Violet'),
(18, 3, 'Violeta'),
(19, 1, 'Yellow'),
(19, 2, 'Jaune'),
(19, 3, 'Amarillo'),
(20, 1, 'Red'),
(20, 2, 'Rouge'),
(20, 3, 'Rojo'),
(1, 4, '2Go'),
(2, 4, '4Go'),
(8, 4, 'SSD (solid-state drive) 64 Go '),
(9, 4, 'Disco duro PATA 80 Go 4 200 tr/min'),
(10, 4, 'Intel Core 2 Duo para 1,6 GHz'),
(11, 4, 'Intel Core 2 Duo para 1,8 GHz'),
(12, 4, '80 Go : 20 000 canciones'),
(13, 4, '160 Go : 40 000 canciones'),
(3, 4, 'Metal'),
(4, 4, 'Azul'),
(5, 4, 'Rosa'),
(6, 4, 'Verde'),
(7, 4, 'Naranja'),
(15, 4, '8Go'),
(16, 4, '16Go'),
(17, 4, '32Go'),
(18, 4, 'Violeta'),
(19, 4, 'Amarillo'),
(20, 4, 'Rojo'),
(14, 4, 'Negro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_block_cms`
--

CREATE TABLE IF NOT EXISTS `ps_block_cms` (
  `id_block` int(10) unsigned NOT NULL,
  `id_cms` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id_block`,`id_cms`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_block_cms`
--

INSERT INTO `ps_block_cms` (`id_block`, `id_cms`) VALUES
(12, 1),
(12, 2),
(12, 4),
(12, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_carrier`
--

CREATE TABLE IF NOT EXISTS `ps_carrier` (
  `id_carrier` int(10) unsigned NOT NULL auto_increment,
  `id_tax` int(10) unsigned default '0',
  `name` varchar(64) NOT NULL,
  `url` varchar(255) default NULL,
  `active` tinyint(1) unsigned NOT NULL default '0',
  `deleted` tinyint(1) unsigned NOT NULL default '0',
  `shipping_handling` tinyint(1) unsigned NOT NULL default '1',
  `range_behavior` tinyint(1) unsigned NOT NULL default '0',
  `is_module` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id_carrier`),
  KEY `deleted` (`deleted`,`active`),
  KEY `id_tax` (`id_tax`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `ps_carrier`
--

INSERT INTO `ps_carrier` (`id_carrier`, `id_tax`, `name`, `url`, `active`, `deleted`, `shipping_handling`, `range_behavior`, `is_module`) VALUES
(1, 0, 'La tia pepa', '', 1, 1, 0, 0, 0),
(2, 1, 'My carrier', '', 1, 1, 1, 0, 0),
(3, 1, 'SEUR', '', 1, 1, 1, 0, 0),
(4, 1, 'Envió a domicilio', '', 1, 1, 1, 0, 0),
(6, 0, 'Recogida en tienda', '', 1, 1, 0, 0, 0),
(7, 0, 'Recogida en tienda', '', 1, 1, 1, 0, 0),
(8, 0, 'SEUR-10', '', 1, 1, 1, 0, 0),
(9, 1, 'Seur-20', '', 1, 1, 1, 0, 0),
(10, 0, '10', '', 1, 1, 1, 0, 0),
(11, 0, 'SEUR', '', 1, 1, 1, 0, 0),
(12, 0, 'Entrega en tienda', '', 1, 0, 1, 0, 0),
(13, 0, 'Correos', '', 1, 0, 1, 0, 0),
(14, 0, 'SEUR', '', 1, 0, 1, 0, 0),
(15, 0, 'Trans-10', '', 1, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_carrier_group`
--

CREATE TABLE IF NOT EXISTS `ps_carrier_group` (
  `id_carrier` int(10) unsigned NOT NULL,
  `id_group` int(10) unsigned NOT NULL,
  UNIQUE KEY `id_carrier` (`id_carrier`,`id_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_carrier_group`
--

INSERT INTO `ps_carrier_group` (`id_carrier`, `id_group`) VALUES
(5, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(15, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_carrier_lang`
--

CREATE TABLE IF NOT EXISTS `ps_carrier_lang` (
  `id_carrier` int(10) unsigned NOT NULL,
  `id_lang` int(10) unsigned NOT NULL,
  `delay` varchar(128) default NULL,
  UNIQUE KEY `shipper_lang_index` (`id_lang`,`id_carrier`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_carrier_lang`
--

INSERT INTO `ps_carrier_lang` (`id_carrier`, `id_lang`, `delay`) VALUES
(1, 1, 'Pick up in-store'),
(1, 2, 'Retrait au magasin'),
(1, 3, 'Recogida en la tienda'),
(2, 1, 'Delivery next day!'),
(2, 2, 'Livraison le lendemain !'),
(2, 3, '¡Entrega día siguiente!'),
(3, 1, 'Delivery next day!'),
(3, 2, 'Livraison le lendemain !'),
(3, 3, '¡Entrega día siguiente!'),
(4, 1, 'Delivery next day!'),
(4, 2, 'Livraison le lendemain !'),
(4, 3, '¡Entrega día siguiente!'),
(14, 3, '3 dias'),
(13, 3, '5 dias'),
(12, 3, 'Se guardara 3 dias'),
(1, 4, 'Recogida en la tienda'),
(2, 4, '¡Entrega día siguiente!'),
(3, 4, '¡Entrega día siguiente!'),
(4, 4, '¡Entrega día siguiente!'),
(11, 3, '3 dias'),
(6, 1, 'Pick up in-store'),
(6, 2, 'Retrait au magasin'),
(6, 3, 'Recogida en la tienda'),
(6, 4, 'Recogida en la tienda'),
(7, 1, 'Pick up in-store'),
(7, 2, 'Retrait au magasin'),
(7, 3, 'Recogida en la tienda'),
(7, 4, 'Recogida en la tienda'),
(8, 3, '3  dias'),
(9, 3, '3 dias'),
(10, 3, '3 dias'),
(15, 3, '2 dias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_carrier_zone`
--

CREATE TABLE IF NOT EXISTS `ps_carrier_zone` (
  `id_carrier` int(10) unsigned NOT NULL,
  `id_zone` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id_carrier`,`id_zone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_carrier_zone`
--

INSERT INTO `ps_carrier_zone` (`id_carrier`, `id_zone`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(15, 2),
(15, 3),
(15, 4),
(15, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_cart`
--

CREATE TABLE IF NOT EXISTS `ps_cart` (
  `id_cart` int(10) unsigned NOT NULL auto_increment,
  `id_carrier` int(10) unsigned NOT NULL,
  `id_lang` int(10) unsigned NOT NULL,
  `id_address_delivery` int(10) unsigned NOT NULL,
  `id_address_invoice` int(10) unsigned NOT NULL,
  `id_currency` int(10) unsigned NOT NULL,
  `id_customer` int(10) unsigned NOT NULL,
  `id_guest` int(10) unsigned NOT NULL,
  `recyclable` tinyint(1) unsigned NOT NULL default '1',
  `gift` tinyint(1) unsigned NOT NULL default '0',
  `gift_message` text,
  `date_add` datetime NOT NULL,
  `date_upd` datetime NOT NULL,
  PRIMARY KEY  (`id_cart`),
  KEY `cart_customer` (`id_customer`),
  KEY `id_address_delivery` (`id_address_delivery`),
  KEY `id_address_invoice` (`id_address_invoice`),
  KEY `id_carrier` (`id_carrier`),
  KEY `id_lang` (`id_lang`),
  KEY `id_currency` (`id_currency`),
  KEY `id_guest` (`id_guest`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=235 ;

--
-- Volcado de datos para la tabla `ps_cart`
--

INSERT INTO `ps_cart` (`id_cart`, `id_carrier`, `id_lang`, `id_address_delivery`, `id_address_invoice`, `id_currency`, `id_customer`, `id_guest`, `recyclable`, `gift`, `gift_message`, `date_add`, `date_upd`) VALUES
(1, 2, 2, 6, 6, 1, 1, 1, 1, 0, NULL, '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(2, 2, 3, 3, 3, 1, 2, 16, 1, 0, '', '2010-11-15 11:49:03', '2010-11-15 12:00:27'),
(3, 2, 3, 3, 3, 1, 2, 16, 1, 0, '', '2010-11-17 19:16:27', '2010-11-17 19:18:57'),
(4, 4, 3, 8, 8, 1, 3, 10, 1, 0, '', '2010-11-18 10:42:47', '2010-11-22 12:38:18'),
(5, 2, 3, 5, 5, 1, 2, 20, 1, 0, '', '2010-11-18 13:07:50', '2010-11-18 15:20:54'),
(6, 0, 3, 3, 3, 1, 2, 16, 1, 0, '', '2010-11-18 13:48:06', '2010-11-18 13:48:57'),
(7, 2, 3, 3, 3, 1, 2, 22, 1, 0, '', '2010-11-18 13:52:32', '2010-11-18 14:05:21'),
(8, 2, 3, 7, 7, 1, 2, 16, 1, 0, '', '2010-11-18 15:53:32', '2010-11-18 15:55:21'),
(9, 2, 3, 5, 5, 1, 2, 16, 1, 0, '', '2010-11-18 16:38:59', '2010-11-18 16:39:19'),
(10, 5, 3, 8, 8, 1, 3, 10, 1, 0, '', '2010-11-24 17:59:27', '2010-12-10 18:03:53'),
(11, 5, 3, 7, 6, 1, 2, 16, 0, 0, '', '2010-12-03 18:00:34', '2010-12-03 18:04:50'),
(12, 5, 3, 7, 7, 1, 2, 16, 1, 0, '', '2010-12-08 22:46:25', '2010-12-08 22:48:20'),
(13, 5, 3, 9, 9, 1, 2, 16, 1, 0, '', '2010-12-09 09:39:44', '2010-12-09 09:44:42'),
(14, 5, 3, 7, 7, 1, 2, 16, 1, 0, '', '2010-12-10 13:30:50', '2010-12-10 13:32:12'),
(15, 5, 3, 7, 7, 1, 2, 16, 1, 0, '', '2010-12-10 13:33:34', '2010-12-10 13:33:50'),
(16, 0, 3, 7, 7, 1, 2, 16, 1, 0, '', '2010-12-10 18:17:31', '2010-12-10 18:17:46'),
(17, 5, 3, 8, 8, 1, 3, 10, 0, 0, '', '2010-12-14 11:56:08', '2010-12-14 12:07:06'),
(18, 0, 3, 8, 8, 1, 3, 10, 1, 0, '', '2010-12-14 15:42:04', '2010-12-14 15:51:05'),
(19, 5, 3, 7, 7, 1, 2, 16, 0, 0, '', '2010-12-18 14:42:58', '2010-12-18 14:43:39'),
(20, 5, 3, 12, 12, 1, 4, 42, 0, 0, '', '2010-12-22 12:50:24', '2010-12-22 13:07:05'),
(21, 5, 3, 12, 12, 2, 4, 42, 0, 0, '', '2010-12-22 15:13:21', '2010-12-22 15:14:20'),
(22, 5, 3, 12, 12, 1, 4, 42, 0, 0, '', '2011-01-17 14:07:28', '2011-01-17 14:09:16'),
(23, 0, 3, 12, 12, 1, 4, 42, 1, 0, '', '2011-01-17 14:12:10', '2011-01-17 14:25:19'),
(24, 0, 3, 12, 12, 1, 4, 42, 1, 0, '', '2011-01-17 14:57:43', '2011-01-17 14:57:55'),
(25, 0, 3, 12, 12, 1, 4, 42, 0, 0, '', '2011-01-17 14:59:45', '2011-01-17 16:42:50'),
(26, 5, 3, 12, 12, 1, 4, 42, 0, 0, '', '2011-01-18 18:01:40', '2011-01-18 20:03:55'),
(27, 5, 3, 12, 12, 1, 4, 42, 0, 0, '', '2011-01-18 20:05:52', '2011-01-18 20:06:16'),
(28, 5, 3, 12, 12, 1, 4, 42, 0, 0, '', '2011-01-18 20:07:30', '2011-01-18 20:07:50'),
(29, 0, 3, 12, 12, 1, 4, 42, 1, 0, '', '2011-01-18 20:50:35', '2011-01-18 20:50:35'),
(30, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 15:26:37', '2011-01-20 15:28:11'),
(31, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 15:43:32', '2011-01-20 15:43:45'),
(32, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 15:48:23', '2011-01-20 15:48:33'),
(33, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 15:59:56', '2011-01-20 16:00:11'),
(34, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 16:02:22', '2011-01-20 16:02:51'),
(35, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 17:27:49', '2011-01-20 17:28:09'),
(36, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 17:43:33', '2011-01-20 17:43:42'),
(37, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 18:18:30', '2011-01-20 18:19:45'),
(38, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 18:25:38', '2011-01-20 18:25:50'),
(39, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 18:30:16', '2011-01-20 18:30:30'),
(40, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 18:36:21', '2011-01-20 18:36:33'),
(41, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 18:41:25', '2011-01-20 18:41:41'),
(42, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 18:43:32', '2011-01-20 18:43:44'),
(43, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 18:47:31', '2011-01-20 18:48:23'),
(44, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 19:00:35', '2011-01-20 19:00:58'),
(45, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 19:19:20', '2011-01-20 19:19:34'),
(46, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 19:36:08', '2011-01-20 19:36:23'),
(47, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-20 20:02:08', '2011-01-20 20:04:00'),
(48, 5, 3, 17, 17, 1, 6, 60, 0, 0, '', '2011-01-20 20:16:32', '2011-01-20 20:16:44'),
(49, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-21 10:46:43', '2011-01-21 10:48:46'),
(50, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-21 10:59:15', '2011-01-21 10:59:27'),
(51, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-21 11:06:18', '2011-01-21 11:06:29'),
(52, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-21 11:10:54', '2011-01-21 11:11:08'),
(53, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-21 11:15:28', '2011-01-21 11:15:42'),
(54, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-21 11:21:24', '2011-01-21 11:21:34'),
(55, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-21 11:28:03', '2011-01-21 11:28:13'),
(56, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-21 11:33:34', '2011-01-21 11:33:46'),
(57, 5, 3, 18, 18, 1, 7, 62, 0, 0, '', '2011-01-21 11:39:03', '2011-01-21 11:39:35'),
(58, 5, 3, 20, 20, 1, 6, 60, 0, 0, '', '2011-01-21 18:04:11', '2011-01-21 18:05:08'),
(59, 0, 3, 20, 20, 1, 6, 60, 1, 0, '', '2011-01-21 18:04:12', '2011-01-21 18:04:12'),
(60, 5, 3, 21, 22, 1, 6, 60, 0, 0, '', '2011-01-21 18:22:38', '2011-01-21 18:24:26'),
(61, 5, 3, 19, 19, 1, 7, 62, 0, 0, '', '2011-01-21 19:25:57', '2011-01-21 19:26:26'),
(62, 5, 3, 19, 19, 1, 7, 62, 0, 0, '', '2011-01-21 19:36:43', '2011-01-21 19:37:48'),
(63, 5, 3, 19, 19, 1, 7, 62, 0, 0, '', '2011-01-21 19:44:55', '2011-01-21 19:45:40'),
(64, 5, 3, 19, 19, 1, 7, 62, 0, 0, '', '2011-01-24 09:42:20', '2011-01-24 09:46:10'),
(65, 5, 3, 19, 19, 1, 7, 62, 0, 0, '', '2011-01-24 12:58:53', '2011-01-24 14:57:38'),
(66, 5, 3, 23, 23, 1, 7, 62, 0, 0, '', '2011-01-24 15:06:28', '2011-01-24 15:07:20'),
(67, 5, 3, 13, 13, 1, 5, 47, 0, 0, '', '2011-01-24 15:55:04', '2011-01-24 15:55:28'),
(68, 5, 3, 24, 27, 1, 7, 62, 0, 0, '', '2011-01-24 16:48:14', '2011-01-24 16:50:39'),
(69, 5, 3, 28, 29, 1, 8, 72, 0, 0, '', '2011-01-24 18:26:06', '2011-01-24 18:30:23'),
(70, 5, 3, 28, 29, 1, 8, 72, 0, 0, '', '2011-01-24 19:20:12', '2011-01-24 19:20:40'),
(71, 5, 3, 28, 29, 1, 8, 72, 0, 0, '', '2011-01-24 19:22:56', '2011-01-24 19:24:34'),
(72, 5, 3, 28, 28, 1, 8, 72, 0, 0, '', '2011-01-24 19:28:36', '2011-01-24 19:52:19'),
(73, 5, 3, 28, 28, 1, 8, 72, 0, 0, '', '2011-01-24 19:55:11', '2011-01-24 20:23:54'),
(74, 5, 3, 28, 29, 1, 8, 72, 0, 0, '', '2011-01-24 22:57:03', '2011-01-26 14:22:00'),
(75, 5, 3, 28, 28, 1, 8, 72, 0, 0, '', '2011-01-27 14:14:46', '2011-01-27 15:12:03'),
(76, 5, 3, 21, 21, 1, 6, 60, 0, 0, '', '2011-01-27 16:40:33', '2011-01-27 16:40:43'),
(77, 5, 3, 21, 21, 1, 6, 60, 0, 0, '', '2011-01-27 16:41:44', '2011-01-27 16:41:58'),
(78, 5, 3, 21, 21, 1, 6, 60, 0, 0, '', '2011-01-28 16:16:57', '2011-01-28 16:17:16'),
(79, 5, 3, 21, 21, 1, 6, 60, 0, 0, '', '2011-01-28 16:20:28', '2011-01-28 16:20:38'),
(80, 5, 3, 21, 21, 1, 6, 60, 0, 0, '', '2011-01-28 16:23:19', '2011-01-28 16:23:29'),
(81, 5, 3, 21, 21, 1, 6, 60, 0, 0, '', '2011-01-28 16:28:33', '2011-01-28 16:28:42'),
(82, 5, 3, 21, 21, 1, 6, 60, 0, 0, '', '2011-01-28 16:32:13', '2011-01-28 16:32:23'),
(83, 5, 3, 21, 21, 1, 6, 60, 0, 0, '', '2011-01-28 16:34:50', '2011-01-28 16:35:03'),
(84, 5, 3, 21, 21, 1, 6, 60, 0, 0, '', '2011-01-28 16:41:01', '2011-01-28 16:41:11'),
(85, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-01-28 18:54:13', '2011-01-28 19:47:38'),
(86, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-01-30 21:52:06', '2011-01-30 21:53:03'),
(87, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-01-30 21:54:48', '2011-01-30 21:54:58'),
(88, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-01-30 22:47:00', '2011-01-30 22:47:41'),
(89, 0, 3, 24, 24, 1, 7, 62, 1, 0, '', '2011-01-31 13:13:02', '2011-01-31 13:13:02'),
(90, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-01-31 17:43:33', '2011-02-01 09:50:41'),
(91, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-01 09:57:10', '2011-02-01 09:57:24'),
(92, 5, 3, 24, 27, 1, 7, 62, 0, 0, '', '2011-02-01 10:10:57', '2011-02-01 10:11:23'),
(93, 5, 3, 33, 33, 1, 20, 92, 0, 0, '', '2011-02-01 11:23:25', '2011-02-01 11:23:45'),
(94, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-01 12:22:58', '2011-02-01 16:36:59'),
(95, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-01 17:38:30', '2011-02-01 17:38:43'),
(96, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-01 17:46:56', '2011-02-01 17:47:10'),
(97, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-01 17:48:51', '2011-02-01 17:49:05'),
(98, 5, 1, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-02 10:32:25', '2011-02-02 10:33:00'),
(99, 5, 1, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-02 10:56:33', '2011-02-02 10:56:55'),
(100, 5, 1, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-04 15:13:05', '2011-02-04 15:13:17'),
(101, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-04 15:16:55', '2011-02-04 15:17:11'),
(102, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-04 15:19:51', '2011-02-04 15:20:04'),
(103, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-04 15:24:25', '2011-02-04 15:25:01'),
(104, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-06 22:51:39', '2011-02-06 22:52:06'),
(105, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-06 23:00:29', '2011-02-06 23:00:40'),
(106, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-06 23:04:04', '2011-02-06 23:04:15'),
(107, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-06 23:07:00', '2011-02-06 23:07:11'),
(108, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-07 08:47:49', '2011-02-07 08:48:09'),
(109, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-08 18:11:27', '2011-02-08 18:12:01'),
(110, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-11 09:54:01', '2011-02-11 09:54:50'),
(111, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-16 12:08:37', '2011-02-16 12:08:51'),
(112, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-16 12:13:12', '2011-02-16 12:13:21'),
(113, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-16 12:25:21', '2011-02-16 14:05:54'),
(114, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-16 14:42:25', '2011-02-16 14:42:36'),
(115, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-16 14:43:42', '2011-02-16 14:43:56'),
(116, 5, 3, 24, 27, 1, 7, 62, 0, 0, '', '2011-02-16 15:15:50', '2011-02-17 11:38:21'),
(117, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 11:43:04', '2011-02-17 11:43:15'),
(118, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 11:47:28', '2011-02-17 11:48:01'),
(119, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 14:10:35', '2011-02-17 16:07:19'),
(120, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 16:07:51', '2011-02-17 16:08:01'),
(121, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 16:08:35', '2011-02-17 16:08:46'),
(122, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 16:09:07', '2011-02-17 16:09:18'),
(123, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 16:09:48', '2011-02-17 16:09:57'),
(124, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 16:10:29', '2011-02-17 16:10:39'),
(125, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 16:11:04', '2011-02-17 16:11:13'),
(126, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 16:11:36', '2011-02-17 16:12:43'),
(127, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 16:13:10', '2011-02-17 16:13:27'),
(128, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 17:32:32', '2011-02-17 19:26:39'),
(129, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 19:27:14', '2011-02-17 19:28:58'),
(130, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 19:38:27', '2011-02-17 19:39:46'),
(131, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 19:50:17', '2011-02-17 19:50:27'),
(132, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-17 20:02:52', '2011-02-17 20:03:17'),
(133, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-18 09:20:17', '2011-02-18 09:25:09'),
(134, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-18 09:25:41', '2011-02-18 10:17:30'),
(135, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-18 10:54:14', '2011-02-18 10:55:33'),
(136, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-18 11:11:45', '2011-02-18 11:12:11'),
(137, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-18 14:50:53', '2011-02-18 14:51:05'),
(138, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-18 17:03:09', '2011-02-18 17:04:00'),
(139, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-18 18:07:06', '2011-02-18 18:07:27'),
(140, 5, 3, 35, 35, 1, 23, 102, 0, 0, '', '2011-02-18 19:13:40', '2011-02-18 19:14:29'),
(141, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-22 18:08:55', '2011-02-23 11:32:41'),
(142, 5, 3, 36, 36, 1, 24, 104, 0, 0, '', '2011-02-24 10:31:13', '2011-02-25 10:43:08'),
(143, 5, 3, 24, 24, 1, 7, 105, 0, 0, '', '2011-02-24 15:13:02', '2011-02-24 15:18:29'),
(144, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-24 15:19:36', '2011-02-24 15:19:49'),
(145, 0, 3, 36, 36, 1, 24, 106, 1, 0, '', '2011-02-25 10:43:45', '2011-02-25 10:46:57'),
(146, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-02-25 17:33:37', '2011-02-25 19:41:48'),
(147, 5, 3, 24, 24, 1, 7, 62, 0, 0, '', '2011-03-04 14:28:14', '2011-03-04 14:28:35'),
(148, 7, 3, 24, 24, 1, 7, 109, 0, 0, '', '2011-03-07 11:07:00', '2011-03-07 11:11:23'),
(149, 0, 3, 0, 0, 1, 0, 121, 1, 0, '', '2011-07-01 12:09:24', '2011-07-01 12:09:24'),
(150, 5, 3, 38, 38, 1, 25, 131, 0, 0, '', '2011-11-01 18:13:42', '2011-11-01 18:13:56'),
(151, 5, 3, 38, 38, 1, 25, 131, 0, 0, '', '2011-11-01 19:53:23', '2011-11-01 19:53:32'),
(152, 0, 3, 0, 0, 1, 0, 132, 1, 0, '', '2011-11-03 00:59:49', '2011-11-03 00:59:49'),
(153, 5, 3, 39, 39, 1, 26, 133, 0, 0, '', '2012-02-15 18:05:12', '2012-02-15 18:07:10'),
(154, 0, 3, 40, 40, 1, 27, 134, 1, 0, '', '2012-02-15 18:16:57', '2012-02-15 18:16:57'),
(155, 5, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-02-15 18:41:11', '2012-02-15 18:41:33'),
(156, 7, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-03-24 19:48:51', '2012-03-27 21:41:47'),
(157, 9, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-03-25 19:31:21', '2012-03-28 08:48:52'),
(158, 9, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-03-28 09:01:15', '2012-03-28 09:01:28'),
(159, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-04-01 20:17:35', '2012-04-01 20:17:35'),
(160, 5, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-04-01 20:17:46', '2012-04-01 20:18:00'),
(161, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-04-02 18:51:30', '2012-04-02 18:51:30'),
(162, 5, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-04-02 18:51:43', '2012-04-02 18:52:01'),
(163, 7, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-04-18 21:24:58', '2012-04-18 21:25:31'),
(164, 10, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-01 22:45:31', '2012-05-01 22:46:43'),
(165, 5, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-01 22:48:53', '2012-05-01 22:49:15'),
(166, 10, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-01 23:16:22', '2012-05-01 23:16:43'),
(167, 5, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-01 23:20:21', '2012-05-01 23:20:43'),
(168, 5, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-01 23:25:37', '2012-05-01 23:25:58'),
(169, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-01 23:29:28', '2012-05-01 23:29:28'),
(170, 5, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-01 23:29:32', '2012-05-01 23:29:59'),
(171, 5, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-01 23:33:51', '2012-05-01 23:34:17'),
(172, 5, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-01 23:42:49', '2012-05-01 23:43:48'),
(173, 5, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-01 23:48:54', '2012-05-01 23:49:46'),
(174, 5, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-01 23:53:06', '2012-05-01 23:53:22'),
(175, 13, 3, 42, 42, 1, 29, 142, 0, 0, '', '2012-05-18 22:27:03', '2012-05-18 22:47:55'),
(176, 0, 3, 42, 42, 1, 29, 137, 1, 0, '', '2012-05-18 23:22:14', '2012-05-18 23:22:36'),
(177, 0, 3, 42, 42, 1, 29, 137, 1, 0, '', '2012-05-18 23:44:19', '2012-05-18 23:44:38'),
(178, 13, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-05-19 00:15:08', '2012-05-21 19:03:43'),
(179, 0, 3, 42, 42, 1, 29, 137, 1, 0, '', '2012-05-19 00:40:56', '2012-05-19 00:50:00'),
(180, 0, 3, 42, 42, 1, 29, 137, 1, 0, '', '2012-05-19 00:41:34', '2012-05-19 00:41:34'),
(181, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-20 14:33:27', '2012-05-20 14:33:58'),
(182, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-20 14:34:23', '2012-05-20 14:34:31'),
(183, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-20 14:41:35', '2012-05-20 14:54:31'),
(184, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-20 14:54:48', '2012-05-20 14:55:04'),
(185, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-20 15:11:11', '2012-05-20 15:11:39'),
(186, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-20 15:11:48', '2012-05-20 15:12:06'),
(187, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-20 15:32:46', '2012-05-20 15:33:23'),
(188, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-21 14:46:02', '2012-05-21 14:46:32'),
(189, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-21 14:46:46', '2012-05-21 14:46:54'),
(190, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-21 14:49:14', '2012-05-21 14:49:39'),
(191, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-21 14:56:49', '2012-05-21 14:57:21'),
(192, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-21 15:16:41', '2012-05-21 15:26:21'),
(193, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-21 15:32:05', '2012-05-21 15:32:51'),
(194, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-21 17:48:54', '2012-05-21 17:49:16'),
(195, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-21 17:51:58', '2012-05-21 17:52:25'),
(196, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-21 17:57:38', '2012-05-21 17:57:48'),
(197, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-21 19:11:00', '2012-05-21 19:11:23'),
(198, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-21 19:18:51', '2012-05-21 19:19:05'),
(199, 0, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-21 19:19:20', '2012-05-21 19:20:14'),
(200, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-21 19:40:15', '2012-05-21 19:52:27'),
(201, 13, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-05-21 21:15:35', '2012-05-21 22:43:55'),
(202, 0, 3, 42, 42, 1, 29, 137, 1, 0, '', '2012-05-21 22:47:15', '2012-05-21 22:47:26'),
(203, 13, 3, 42, 42, 1, 29, 146, 0, 0, '', '2012-05-21 23:03:04', '2012-05-21 23:12:38'),
(204, 13, 3, 42, 42, 1, 29, 146, 0, 0, '', '2012-05-21 23:35:35', '2012-05-21 23:35:35'),
(205, 13, 3, 42, 42, 1, 29, 146, 0, 0, '', '2012-05-21 23:40:59', '2012-05-21 23:41:27'),
(206, 13, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-05-21 23:44:51', '2012-05-21 23:45:15'),
(207, 13, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-05-21 23:47:54', '2012-05-21 23:48:18'),
(208, 13, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-05-21 23:51:25', '2012-05-21 23:51:45'),
(209, 13, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-05-21 23:53:39', '2012-05-21 23:53:58'),
(210, 13, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-05-21 23:59:29', '2012-05-21 23:59:49'),
(211, 13, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-05-22 00:02:35', '2012-05-22 00:02:56'),
(212, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-22 08:31:42', '2012-05-22 08:31:52'),
(213, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-22 08:32:11', '2012-05-22 08:32:35'),
(214, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-22 08:39:31', '2012-05-22 08:39:45'),
(215, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-22 08:43:23', '2012-05-22 09:02:26'),
(216, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-22 09:04:16', '2012-05-22 09:04:35'),
(217, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-22 09:18:01', '2012-05-22 09:18:16'),
(218, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-22 09:27:16', '2012-05-22 09:28:27'),
(219, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-22 14:41:29', '2012-05-22 14:44:59'),
(220, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-22 14:46:48', '2012-05-22 14:47:01'),
(221, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-22 14:57:27', '2012-05-22 14:57:27'),
(222, 13, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-22 14:59:53', '2012-05-22 15:03:17'),
(223, 11, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-22 15:19:25', '2012-05-25 16:48:46'),
(224, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-25 16:50:56', '2012-05-25 16:50:56'),
(225, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-25 16:53:14', '2012-05-25 16:54:33'),
(226, 15, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-25 17:00:59', '2012-05-25 17:01:09'),
(227, 15, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-05-28 11:52:50', '2012-05-28 11:56:55'),
(228, 15, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-05-28 11:59:53', '2012-05-28 12:02:42'),
(229, 0, 3, 42, 42, 1, 29, 137, 1, 0, '', '2012-05-28 12:33:30', '2012-05-28 12:33:30'),
(230, 0, 3, 42, 42, 1, 29, 137, 1, 0, '', '2012-05-28 12:33:31', '2012-05-28 12:33:53'),
(231, 0, 3, 42, 42, 1, 29, 137, 1, 0, '', '2012-05-28 12:39:54', '2012-05-28 12:40:09'),
(232, 15, 3, 42, 42, 1, 29, 137, 0, 0, '', '2012-05-28 12:45:04', '2012-05-28 12:45:37'),
(233, 14, 3, 41, 41, 1, 28, 135, 0, 0, '', '2012-05-29 07:58:06', '2012-05-29 08:17:00'),
(234, 0, 3, 41, 41, 1, 28, 135, 1, 0, '', '2012-05-29 08:22:22', '2012-05-29 08:22:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_cart_discount`
--

CREATE TABLE IF NOT EXISTS `ps_cart_discount` (
  `id_cart` int(10) unsigned NOT NULL,
  `id_discount` int(10) unsigned NOT NULL,
  KEY `cart_discount_index` (`id_cart`,`id_discount`),
  KEY `id_discount` (`id_discount`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_cart_product`
--

CREATE TABLE IF NOT EXISTS `ps_cart_product` (
  `id_cart` int(10) unsigned NOT NULL,
  `id_product` int(10) unsigned NOT NULL,
  `id_product_attribute` int(10) unsigned default NULL,
  `quantity` int(10) unsigned NOT NULL default '0',
  `date_add` datetime NOT NULL,
  KEY `cart_product_index` (`id_cart`,`id_product`),
  KEY `id_product_attribute` (`id_product_attribute`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_cart_product`
--

INSERT INTO `ps_cart_product` (`id_cart`, `id_product`, `id_product_attribute`, `quantity`, `date_add`) VALUES
(183, 1560, 0, 6, '2012-05-20 14:41:45'),
(181, 1560, 0, 8, '2012-05-20 14:33:38'),
(190, 1560, 0, 6, '2012-05-21 14:49:16'),
(181, 1558, 0, 1, '2012-05-20 14:33:27'),
(184, 1558, 0, 1, '2012-05-20 14:54:48'),
(185, 1560, 0, 7, '2012-05-20 15:11:18'),
(182, 1558, 0, 1, '2012-05-20 14:34:23'),
(183, 1558, 0, 1, '2012-05-20 14:41:35'),
(192, 1560, 0, 46, '2012-05-21 15:16:46'),
(192, 1558, 0, 1, '2012-05-21 15:16:41'),
(191, 1560, 0, 22, '2012-05-21 14:56:52'),
(191, 1558, 0, 1, '2012-05-21 14:56:49'),
(185, 1558, 0, 1, '2012-05-20 15:11:11'),
(225, 1558, 0, 2, '2012-05-25 16:53:14'),
(224, 1558, 0, 1, '2012-05-25 16:50:56'),
(217, 1560, 0, 10, '2012-05-22 09:18:01'),
(213, 1560, 0, 6, '2012-05-22 08:32:11'),
(207, 1560, 0, 10, '2012-05-21 23:47:54'),
(200, 1560, 0, 12, '2012-05-21 19:40:15'),
(196, 1558, 0, 1, '2012-05-21 17:57:38'),
(187, 1560, 0, 4, '2012-05-20 15:32:46'),
(186, 1558, 0, 1, '2012-05-20 15:11:48'),
(190, 1558, 0, 6, '2012-05-21 14:49:14'),
(189, 1558, 0, 1, '2012-05-21 14:46:46'),
(188, 1558, 0, 6, '2012-05-21 14:46:17'),
(188, 1560, 0, 6, '2012-05-21 14:46:02'),
(187, 1558, 0, 2, '2012-05-20 15:33:08'),
(223, 1558, 0, 2, '2012-05-22 15:19:25'),
(216, 1560, 0, 6, '2012-05-22 09:04:16'),
(212, 1558, 0, 1, '2012-05-22 08:31:42'),
(206, 1560, 0, 10, '2012-05-21 23:44:51'),
(199, 1560, 0, 20, '2012-05-21 19:19:20'),
(195, 1560, 0, 20, '2012-05-21 17:52:00'),
(222, 1560, 0, 6, '2012-05-22 14:59:53'),
(211, 1560, 0, 10, '2012-05-22 00:02:35'),
(205, 1560, 0, 10, '2012-05-21 23:40:59'),
(215, 1558, 0, 2, '2012-05-22 08:43:23'),
(198, 1560, 0, 1, '2012-05-21 19:18:51'),
(195, 1558, 0, 1, '2012-05-21 17:51:58'),
(221, 1560, 0, 6, '2012-05-22 14:57:27'),
(214, 1558, 0, 1, '2012-05-22 08:39:31'),
(210, 1560, 0, 10, '2012-05-21 23:59:29'),
(203, 1560, 0, 30, '2012-05-21 23:03:04'),
(197, 1558, 0, 1, '2012-05-21 19:11:02'),
(194, 1560, 0, 15, '2012-05-21 17:48:58'),
(220, 1560, 0, 10, '2012-05-22 14:46:48'),
(214, 1560, 0, 5, '2012-05-22 08:39:31'),
(209, 1560, 0, 10, '2012-05-21 23:53:39'),
(202, 1560, 0, 30, '2012-05-21 22:47:15'),
(197, 1560, 0, 10, '2012-05-21 19:11:00'),
(194, 1558, 0, 1, '2012-05-21 17:48:54'),
(219, 1558, 0, 2, '2012-05-22 14:41:30'),
(213, 1558, 0, 1, '2012-05-22 08:32:28'),
(208, 1560, 0, 10, '2012-05-21 23:51:25'),
(201, 1560, 0, 20, '2012-05-21 21:15:35'),
(178, 1560, 0, 50, '2012-05-21 19:00:44'),
(193, 1560, 0, 60, '2012-05-21 15:32:05'),
(218, 1560, 0, 5, '2012-05-22 09:27:16'),
(226, 1558, 0, 1, '2012-05-25 17:00:59'),
(227, 1558, 0, 1, '2012-05-28 11:52:50'),
(228, 1559, 0, 1, '2012-05-28 11:59:53'),
(229, 1560, 0, 1, '2012-05-28 12:33:30'),
(230, 1560, 0, 1, '2012-05-28 12:33:31'),
(231, 1559, 0, 120, '2012-05-28 12:39:54'),
(232, 1559, 0, 10, '2012-05-28 12:45:04'),
(233, 1558, 0, 2, '2012-05-29 07:58:06'),
(234, 1558, 0, 1, '2012-05-29 08:22:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_category`
--

CREATE TABLE IF NOT EXISTS `ps_category` (
  `id_category` int(10) unsigned NOT NULL auto_increment,
  `id_parent` int(10) unsigned NOT NULL,
  `level_depth` tinyint(3) unsigned NOT NULL default '0',
  `active` tinyint(1) unsigned NOT NULL default '0',
  `date_add` datetime NOT NULL,
  `date_upd` datetime NOT NULL,
  PRIMARY KEY  (`id_category`),
  KEY `category_parent` (`id_parent`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=230 ;

--
-- Volcado de datos para la tabla `ps_category`
--

INSERT INTO `ps_category` (`id_category`, `id_parent`, `level_depth`, `active`, `date_add`, `date_upd`) VALUES
(1, 0, 0, 1, '2012-05-18 22:25:39', '2012-05-18 22:25:39'),
(226, 225, 0, 1, '2012-05-20 14:27:04', '2012-05-20 14:27:04'),
(225, 1, 0, 1, '2012-05-20 14:27:04', '2012-05-20 14:27:04'),
(224, 1, 0, 1, '2012-05-20 14:27:04', '2012-05-20 14:27:04'),
(223, 1, 0, 1, '2012-05-20 14:27:04', '2012-05-20 14:27:04'),
(229, 226, 0, 1, '2012-05-20 14:27:04', '2012-05-20 14:27:04'),
(228, 226, 0, 1, '2012-05-20 14:27:04', '2012-05-20 14:27:04'),
(227, 225, 0, 1, '2012-05-20 14:27:04', '2012-05-20 14:27:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_category_group`
--

CREATE TABLE IF NOT EXISTS `ps_category_group` (
  `id_category` int(10) unsigned NOT NULL,
  `id_group` int(10) unsigned NOT NULL,
  KEY `category_group_index` (`id_category`,`id_group`),
  KEY `id_category` (`id_category`),
  KEY `id_group` (`id_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_category_group`
--

INSERT INTO `ps_category_group` (`id_category`, `id_group`) VALUES
(1, 1),
(223, 1),
(224, 1),
(225, 1),
(226, 1),
(227, 1),
(228, 1),
(229, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_category_lang`
--

CREATE TABLE IF NOT EXISTS `ps_category_lang` (
  `id_category` int(10) unsigned NOT NULL,
  `id_lang` int(10) unsigned NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text,
  `link_rewrite` varchar(128) NOT NULL,
  `meta_title` varchar(128) default NULL,
  `meta_keywords` varchar(255) default NULL,
  `meta_description` varchar(255) default NULL,
  UNIQUE KEY `category_lang_index` (`id_category`,`id_lang`),
  KEY `category_name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_category_lang`
--

INSERT INTO `ps_category_lang` (`id_category`, `id_lang`, `name`, `description`, `link_rewrite`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(1, 3, 'Inicio', '', '', '', '', ''),
(226, 3, '02. Cajas abiertas', 'Descripción - CAJAS ABIERTA\nLínea-1\nLínea-2\nLínea-3', '02_Cajas_abiertas', '02. Cajas abiertas ', 'Descripción,-,CAJAS,ABIERTA\nLínea-1\nLínea-2\nLínea-3', '02. Cajas abiertas  Descripción - CAJAS ABIERTA\nLínea-1\nLínea-2\nLínea-3'),
(225, 3, '02. Cajas', 'Descripción - CAJAS\nLínea-1\nLínea-2\nLínea-3', '02_Cajas', '02. Cajas ', 'Descripción,-,CAJAS\nLínea-1\nLínea-2\nLínea-3', '02. Cajas  Descripción - CAJAS\nLínea-1\nLínea-2\nLínea-3'),
(223, 3, '01. Bolsas', 'Descripción - BOLSAS\nLínea-1\nLínea-2\nLínea-3', '01_Bolsas', '01. Bolsas ', 'Descripción,-,BOLSAS\nLínea-1\nLínea-2\nLínea-3', '01. Bolsas  Descripción - BOLSAS\nLínea-1\nLínea-2\nLínea-3'),
(224, 3, '03. Etiquetas', 'Descripción - ETIQUETAS\nLínea-1\nLínea-2\nLínea-3', '03_Etiquetas', '03. Etiquetas ', 'Descripción,-,ETIQUETAS\nLínea-1\nLínea-2\nLínea-3', '03. Etiquetas  Descripción - ETIQUETAS\nLínea-1\nLínea-2\nLínea-3'),
(229, 3, '01. Abierta-Lote-2', 'Descripción - ABIERTA-LOTE-2\nLínea-1\nLínea-2\nLínea-3', '01_Abierta-Lote-2', '01. Abierta-Lote-2 ', 'Descripción,-,ABIERTA-LOTE-2\nLínea-1\nLínea-2\nLínea-3', '01. Abierta-Lote-2  Descripción - ABIERTA-LOTE-2\nLínea-1\nLínea-2\nLínea-3'),
(228, 3, '02. Abierta-Lote-1', 'Descripción - ABIERTA-LOTE-1\nLínea-1\nLínea-2\nLínea-3', '02_Abierta-Lote-1', '02. Abierta-Lote-1 ', 'Descripción,-,ABIERTA-LOTE-1\nLínea-1\nLínea-2\nLínea-3', '02. Abierta-Lote-1  Descripción - ABIERTA-LOTE-1\nLínea-1\nLínea-2\nLínea-3'),
(227, 3, '01. Cajas cerradas', 'Descripción - CAJAS CERRADAS\nLínea-1\nLínea-2\nLínea-3', '01_Cajas_cerradas', '01. Cajas cerradas ', 'Descripción,-,CAJAS,CERRADAS\nLínea-1\nLínea-2\nLínea-3', '01. Cajas cerradas  Descripción - CAJAS CERRADAS\nLínea-1\nLínea-2\nLínea-3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_category_product`
--

CREATE TABLE IF NOT EXISTS `ps_category_product` (
  `id_category` int(10) unsigned NOT NULL,
  `id_product` int(10) unsigned NOT NULL,
  `position` int(10) unsigned NOT NULL default '0',
  KEY `category_product_index` (`id_category`,`id_product`),
  KEY `id_product` (`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_category_product`
--

INSERT INTO `ps_category_product` (`id_category`, `id_product`, `position`) VALUES
(226, 1566, 0),
(226, 1565, 0),
(226, 1564, 0),
(226, 1563, 0),
(223, 1562, 0),
(223, 1561, 0),
(223, 1560, 0),
(223, 1559, 0),
(223, 1558, 0),
(224, 1579, 0),
(224, 1578, 0),
(224, 1577, 0),
(224, 1576, 0),
(224, 1575, 0),
(224, 1574, 0),
(227, 1573, 0),
(227, 1572, 0),
(227, 1571, 0),
(227, 1570, 0),
(227, 1569, 0),
(229, 1568, 0),
(229, 1567, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_cms`
--

CREATE TABLE IF NOT EXISTS `ps_cms` (
  `id_cms` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`id_cms`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `ps_cms`
--

INSERT INTO `ps_cms` (`id_cms`) VALUES
(1),
(2),
(3),
(4),
(5),
(7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_cms_lang`
--

CREATE TABLE IF NOT EXISTS `ps_cms_lang` (
  `id_cms` int(10) unsigned NOT NULL,
  `id_lang` int(10) unsigned NOT NULL,
  `meta_title` varchar(128) NOT NULL,
  `meta_description` varchar(255) default NULL,
  `meta_keywords` varchar(255) default NULL,
  `content` longtext,
  `link_rewrite` varchar(128) NOT NULL,
  PRIMARY KEY  (`id_cms`,`id_lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_cms_lang`
--

INSERT INTO `ps_cms_lang` (`id_cms`, `id_lang`, `meta_title`, `meta_description`, `meta_keywords`, `content`, `link_rewrite`) VALUES
(1, 1, 'Condiciones de entrega', '', '', '<p style="text-align: justify;"><strong><span style="color: #888888;"><span style="font-family: verdana,geneva;"><span style="font-size: 12pt;">Condiciones de entrega.</span></span></span></strong></p>\r\n<h1><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #000000;">Costes de env&iacute;o. </span></span></span></strong></h1>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Al aceptar la compra se a&ntilde;adir&aacute;n al pedido los gastos de env&iacute;o.</span></span></p>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los gastos en concepto de embalaje, conservaci&oacute;n, transporte y entrega del pedido variar&aacute;n teniendo en cuenta los siguientes puntos:<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Provincia (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Regional (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Peninsular, Baleares y Canarias (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ceuta, Melilla (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Europeo Prioritario (hasta 2 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Internacional Prioritario (hasta 2 kg), <span style="color: #ff0000;"><span style="text-decoration: underline;">00,00 euros</span>.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Recogida en <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> : <span style="text-decoration: underline;"><span style="color: #ff0000;">0,00 euros</span></span>. Restar del pedido.</span></span></p>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Pedidos nacionales superiores a <span style="text-decoration: underline;"><span style="color: #ff0000;">000,00 euros</span></span> sin gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos superiores al peso indicado <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se pondr&aacute; en contacto con el cliente para indicarle a cuanto ascienden los gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>Horarios de entrega de los pedidos.<br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para los pedidos nacionales (peninsulares e insulares) se utiliza el servicio de mensajer&iacute;a de <span style="text-decoration: underline;"><span style="color: #ff0000;">MRW</span></span>. La entrega se realiza entre&nbsp; 24-48 horas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos internacionales se utilizar&aacute; el servicio de env&iacute;o prioritario de <span style="text-decoration: underline;"><span style="color: #ff0000;">Correos de Espa&ntilde;a</span>.</span></span></span></p>', 'condiciones-de-entrega'),
(1, 2, 'Condiciones de entrega', '', '', '<p style="text-align: justify;"><strong><span style="color: #888888;"><span style="font-family: verdana,geneva;"><span style="font-size: 12pt;">Condiciones de entrega.</span></span></span></strong></p>\r\n<h1><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #000000;">Costes de env&iacute;o. </span></span></span></strong></h1>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Al aceptar la compra se a&ntilde;adir&aacute;n al pedido los gastos de env&iacute;o.</span></span></p>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los gastos en concepto de embalaje, conservaci&oacute;n, transporte y entrega del pedido variar&aacute;n teniendo en cuenta los siguientes puntos:<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Provincia (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Regional (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Peninsular, Baleares y Canarias (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ceuta, Melilla (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Europeo Prioritario (hasta 2 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Internacional Prioritario (hasta 2 kg), <span style="color: #ff0000;"><span style="text-decoration: underline;">00,00 euros</span>.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Recogida en <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> : <span style="text-decoration: underline;"><span style="color: #ff0000;">0,00 euros</span></span>. Restar del pedido.</span></span></p>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Pedidos nacionales superiores a <span style="text-decoration: underline;"><span style="color: #ff0000;">000,00 euros</span></span> sin gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos superiores al peso indicado <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se pondr&aacute; en contacto con el cliente para indicarle a cuanto ascienden los gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>Horarios de entrega de los pedidos.<br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para los pedidos nacionales (peninsulares e insulares) se utiliza el servicio de mensajer&iacute;a de <span style="text-decoration: underline;"><span style="color: #ff0000;">MRW</span></span>. La entrega se realiza entre&nbsp; 24-48 horas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos internacionales se utilizar&aacute; el servicio de env&iacute;o prioritario de <span style="text-decoration: underline;"><span style="color: #ff0000;">Correos de Espa&ntilde;a</span>.</span></span></span></p>', 'condiciones-de-entrega'),
(2, 1, 'Condiciones de uso', '', '', '<p><strong><span style="font-size: 14pt;"><span style="color: #888888;">Condiciones de uso</span></span></strong></p>\r\n<p><br />En cumplimiento de la Ley 34/2002 de servicios de la sociedad de la informaci&oacute;n y de comercio electr&oacute;nico (BOE, n&ordm; 166, de 12 de Julio de 2002) exponemos p&uacute;blicamente los datos de la empresa a la que se refiere esta Web.</p>\r\n<p><br />Empresa :&nbsp; <span style="text-decoration: underline;">EL PROPIETARIO <br /></span>N&uacute;mero de Identificaci&oacute;n Fiscal : ................................................<br />Direcci&oacute;n: ..............................................................................<br />Correo electr&oacute;nico : admin@.......................................................<br />Tel&eacute;fono de contacto :<strong>&nbsp;&nbsp;</strong>............................................................</p>\r\n<p><strong><br />CONDICIONES GENERALES DE USO DEL SITIO WEB<br /></strong>.........................................................................................................(EN ADELANTE <span style="text-decoration: underline;">EL PROPIETARIO</span> ), con domicilio a efectos de notificaciones en...................................................................................................., con CIF ........................................................., pone a disposici&oacute;n en su sitio web www.................................. determinados contenidos de car&aacute;cter informativo sobre sus actividades. Las presentes condiciones generales rigen &uacute;nica y exclusivamente el uso del sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span>&nbsp;por parte de los USUARIOS que accedan al mismo. Las presentes condiciones generales se le exponen al USUARIO en el sitio web www.................................. en todas y cada una de las p&aacute;ginas, para que las lea, las imprima, archive y acepte a trav&eacute;s de internet y se encuentre plenamente informado.</p>\r\n<p><br />El acceso al sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;implica sin reservas la aceptaci&oacute;n de las presentes condiciones generales de uso que el USUARIO afirma comprender en su totalidad. El USUARIO se compromete no a utilizar el sitio web y los servicios que se ofrecen en el mismo para la realizaci&oacute;n de actividades contrarias a la ley y a respetar en todo momento las presentes condiciones generales.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>PRIMERA.- <br /></strong>El sitio web de www...................................................... ha sido realizado, por un lado, con el fin de poner a disposici&oacute;n de terceros informaci&oacute;n sobre sus actividades, as&iacute; como poder contactar con &eacute;l, para solicitarle informaci&oacute;n adicional y, por otro lado, poner a disposici&oacute;n de los usuarios la posibilidad de comprar los productos que se ofrecen. La solicitud de los servicios o art&iacute;culos que se ofrecen para su compra en el sitio web, se regir&aacute;n por las condiciones generales de contrataci&oacute;n espec&iacute;ficas.</p>\r\n<p>&nbsp;</p>\r\n<p><br /><strong>SEGUNDA.- CONDICIONES DE ACCESO Y USO<br /></strong></p>\r\n<p><br /><strong>2.1.-</strong> La utilizaci&oacute;n del sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span> , no conlleva la obligatoriedad de inscripci&oacute;n del USUARIO. Las condiciones de acceso y uso del presente sitio web se rigen estrictamente por la legalidad vigente y por el principio de buena fe, comprometi&eacute;ndose el USUARIO a realizar un buen uso de la web. Quedan prohibidos todos los actos que vulneren la legalidad, derechos o intereses de terceros: derecho a la intimidad, protecci&oacute;n de datos, propiedad intelectual etc. Expresamente <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;proh&iacute;be los siguientes actos:</p>\r\n<p><br /><strong>2.1.1.-</strong> Realizar acciones que puedan producir en el sitio web o a trav&eacute;s del mismo por cualquier medio cualquier tipo de da&ntilde;o a los sistemas de <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;o a terceros.</p>\r\n<p><br /><strong>2.1.2.-</strong> Realizar sin la debida autorizaci&oacute;n cualquier tipo de publicidad o informaci&oacute;n comercial directamente o de forma encubierta, el env&iacute;o de correos masivos (&ldquo;spaming&rdquo;) o env&iacute;o de grandes mensajes con el fin de bloquear servidores de la red (&ldquo;mail bombing&rdquo;).</p>\r\n<p><br /><strong>2.2.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;podr&aacute; interrumpir en cualquier momento el acceso a su sitio web, si detecta un uso contrario a la legalidad, la buena fe o a las presentes condiciones generales (ver cl&aacute;usula quinta).</p>\r\n<p><strong><br />TERCERA.- CONTENIDOS:</strong> <br />Los contenidos incorporados a este sitio web han sido elaborados e incluidos por:</p>\r\n<p><br /><strong>3.1.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span>&nbsp; utilizando fuentes internas y externas, de tal modo que <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;&uacute;nicamente se hace responsable por los contenidos elaborados de forma interna.</p>\r\n<p><br /><strong>3.2.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;se reserva el derecho a modificar en cualquier momento los contenidos existentes en su sitio web. <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;no asegura ni se responsabiliza del correcto funcionamiento de los enlaces a sitios web de terceros que figuren en www...............................................</p>\r\n<p><br />Adem&aacute;s, a trav&eacute;s del sitio web de <span style="text-decoration: underline;">EL PROPIETARIO </span>, se ponen a disposici&oacute;n del usuario servicios gratuitos y de pago ofrecidos por terceros ajenos y que se regir&aacute;n por las condiciones particulares de cada uno de ellos. <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;no garantiza la veracidad, exactitud o actualidad de los contenidos y servicios ofrecidos por terceros y queda expresamente exento de todo tipo de responsabilidad por los da&ntilde;os y perjuicios que puedan derivarse de la falta de exactitud de estos contenidos y servicios.</p>\r\n<p><br /><strong>CUARTA.- RESPONSABILIDAD<br /></strong><strong><br />4.1.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;en ning&uacute;n caso ser&aacute; responsable de:</p>\r\n<p><br /><strong>4.1.1.-</strong> Los fallos e incidencias que pudieran producirse en las comunicaciones, borrado o transmisiones incompletas, de manera que no se garantiza que los servicios del sitio web est&eacute;n constantemente operativos.</p>\r\n<p><br /><strong>4.1.2.-</strong> De la producci&oacute;n de cualquier tipo de da&ntilde;o que los USUARIOS o terceros pudiesen ocasionar en el sitio web.</p>\r\n<p><br /><strong>4.1.3.-</strong> De la fiabilidad y veracidad de las informaciones introducidas por terceros en el sitio web, bien directamente, bien a trav&eacute;s de enlaces o links. Asimismo, <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;colaborar&aacute; y notificar&aacute; a la autoridad competente estas incidencias en el momento en que tenga conocimiento fehaciente de que los da&ntilde;os ocasionados constituyan cualquier tipo de actividad il&iacute;cita.</p>\r\n<p><br /><strong>4.2.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;se reserva el derecho a suspender el acceso sin previo aviso de forma discrecional y con car&aacute;cter definitivo o temporal hasta el aseguramiento de la efectiva responsabilidad de los da&ntilde;os que pudieran producirse. Asimismo, <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;colaborar&aacute; y notificar&aacute; a la autoridad competente estas incidencias en el momento en que tenga conocimiento fehaciente de que los da&ntilde;os ocasionados constituyan cualquier tipo de actividad il&iacute;cita.</p>\r\n<p><strong><br />QUINTA.- DERECHOS DE AUTOR Y MARCA.- <br /></strong>El sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;(los contenidos propios, la programaci&oacute;n y el dise&ntilde;o del sitio web) se encuentra plenamente protegido por los derechos de autor, quedando expresamente prohibida toda reproducci&oacute;n, comunicaci&oacute;n, distribuci&oacute;n y transformaci&oacute;n de los referidos elementos protegidos, salvo consentimiento expreso de <span style="text-decoration: underline;">EL PROPIETARIO</span> . Los materiales, tanto gr&aacute;ficos como escritos, enviados por los usuarios a trav&eacute;s de los medios que se ponen a su disposici&oacute;n en el sitio web, son propiedad del usuario que afirma al enviarlos su leg&iacute;tima autor&iacute;a y cede los derechos de reproducci&oacute;n y distribuci&oacute;n al&nbsp; <span style="text-decoration: underline;">EL PROPIETARIO</span> .</p>\r\n<p><strong><br />SEXTA.- JURISDICCI&Oacute;N Y LEY APLICABLE.- <br /></strong>Las presentes condiciones generales se rigen por la legislaci&oacute;n espa&ntilde;ola. Son competentes para resolver toda controversia o conflicto que se derive de las presentes condiciones generales, los Juzgados de ................................., renunciando expresamente el USUARIO a cualquier otro fuero que pudiera corresponderle.</p>\r\n<p><strong><br />S&Eacute;PTIMA.- <br /></strong>En caso de que cualquier cl&aacute;usula del presente documento sea declarada nula, las dem&aacute;s cl&aacute;usulas seguir&aacute;n vigentes y se interpretar&aacute;n teniendo en cuenta la voluntad de las partes y la finalidad misma de las presentes condiciones. <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;podr&aacute; no ejercitar alguno de los derechos y facultades conferidos en este documento, lo que no implicar&aacute; en ning&uacute;n caso la renuncia a los mismos, salvo reconocimiento expreso por parte de <span style="text-decoration: underline;">EL PROPIETARIO</span>.&nbsp;</p>\r\n<p>&nbsp;</p>', 'condiciones-de-uso'),
(2, 2, 'Condiciones de uso', '', '', '<p><strong><span style="font-size: 14pt;"><span style="color: #888888;">Condiciones de uso</span></span></strong></p>\r\n<p><br />En cumplimiento de la Ley 34/2002 de servicios de la sociedad de la informaci&oacute;n y de comercio electr&oacute;nico (BOE, n&ordm; 166, de 12 de Julio de 2002) exponemos p&uacute;blicamente los datos de la empresa a la que se refiere esta Web.</p>\r\n<p><br />Empresa :&nbsp; <span style="text-decoration: underline;">EL PROPIETARIO <br /></span>N&uacute;mero de Identificaci&oacute;n Fiscal : ................................................<br />Direcci&oacute;n: ..............................................................................<br />Correo electr&oacute;nico : admin@.......................................................<br />Tel&eacute;fono de contacto :<strong>&nbsp;&nbsp;</strong>............................................................</p>\r\n<p><strong><br />CONDICIONES GENERALES DE USO DEL SITIO WEB<br /></strong>.........................................................................................................(EN ADELANTE <span style="text-decoration: underline;">EL PROPIETARIO</span> ), con domicilio a efectos de notificaciones en...................................................................................................., con CIF ........................................................., pone a disposici&oacute;n en su sitio web www.................................. determinados contenidos de car&aacute;cter informativo sobre sus actividades. Las presentes condiciones generales rigen &uacute;nica y exclusivamente el uso del sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span>&nbsp;por parte de los USUARIOS que accedan al mismo. Las presentes condiciones generales se le exponen al USUARIO en el sitio web www.................................. en todas y cada una de las p&aacute;ginas, para que las lea, las imprima, archive y acepte a trav&eacute;s de internet y se encuentre plenamente informado.</p>\r\n<p><br />El acceso al sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;implica sin reservas la aceptaci&oacute;n de las presentes condiciones generales de uso que el USUARIO afirma comprender en su totalidad. El USUARIO se compromete no a utilizar el sitio web y los servicios que se ofrecen en el mismo para la realizaci&oacute;n de actividades contrarias a la ley y a respetar en todo momento las presentes condiciones generales.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>PRIMERA.- <br /></strong>El sitio web de www...................................................... ha sido realizado, por un lado, con el fin de poner a disposici&oacute;n de terceros informaci&oacute;n sobre sus actividades, as&iacute; como poder contactar con &eacute;l, para solicitarle informaci&oacute;n adicional y, por otro lado, poner a disposici&oacute;n de los usuarios la posibilidad de comprar los productos que se ofrecen. La solicitud de los servicios o art&iacute;culos que se ofrecen para su compra en el sitio web, se regir&aacute;n por las condiciones generales de contrataci&oacute;n espec&iacute;ficas.</p>\r\n<p>&nbsp;</p>\r\n<p><br /><strong>SEGUNDA.- CONDICIONES DE ACCESO Y USO<br /></strong></p>\r\n<p><br /><strong>2.1.-</strong> La utilizaci&oacute;n del sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span> , no conlleva la obligatoriedad de inscripci&oacute;n del USUARIO. Las condiciones de acceso y uso del presente sitio web se rigen estrictamente por la legalidad vigente y por el principio de buena fe, comprometi&eacute;ndose el USUARIO a realizar un buen uso de la web. Quedan prohibidos todos los actos que vulneren la legalidad, derechos o intereses de terceros: derecho a la intimidad, protecci&oacute;n de datos, propiedad intelectual etc. Expresamente <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;proh&iacute;be los siguientes actos:</p>\r\n<p><br /><strong>2.1.1.-</strong> Realizar acciones que puedan producir en el sitio web o a trav&eacute;s del mismo por cualquier medio cualquier tipo de da&ntilde;o a los sistemas de <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;o a terceros.</p>\r\n<p><br /><strong>2.1.2.-</strong> Realizar sin la debida autorizaci&oacute;n cualquier tipo de publicidad o informaci&oacute;n comercial directamente o de forma encubierta, el env&iacute;o de correos masivos (&ldquo;spaming&rdquo;) o env&iacute;o de grandes mensajes con el fin de bloquear servidores de la red (&ldquo;mail bombing&rdquo;).</p>\r\n<p><br /><strong>2.2.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;podr&aacute; interrumpir en cualquier momento el acceso a su sitio web, si detecta un uso contrario a la legalidad, la buena fe o a las presentes condiciones generales (ver cl&aacute;usula quinta).</p>\r\n<p><strong><br />TERCERA.- CONTENIDOS:</strong> <br />Los contenidos incorporados a este sitio web han sido elaborados e incluidos por:</p>\r\n<p><br /><strong>3.1.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span>&nbsp; utilizando fuentes internas y externas, de tal modo que <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;&uacute;nicamente se hace responsable por los contenidos elaborados de forma interna.</p>\r\n<p><br /><strong>3.2.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;se reserva el derecho a modificar en cualquier momento los contenidos existentes en su sitio web. <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;no asegura ni se responsabiliza del correcto funcionamiento de los enlaces a sitios web de terceros que figuren en www...............................................</p>\r\n<p><br />Adem&aacute;s, a trav&eacute;s del sitio web de <span style="text-decoration: underline;">EL PROPIETARIO </span>, se ponen a disposici&oacute;n del usuario servicios gratuitos y de pago ofrecidos por terceros ajenos y que se regir&aacute;n por las condiciones particulares de cada uno de ellos. <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;no garantiza la veracidad, exactitud o actualidad de los contenidos y servicios ofrecidos por terceros y queda expresamente exento de todo tipo de responsabilidad por los da&ntilde;os y perjuicios que puedan derivarse de la falta de exactitud de estos contenidos y servicios.</p>\r\n<p><br /><strong>CUARTA.- RESPONSABILIDAD<br /></strong><strong><br />4.1.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;en ning&uacute;n caso ser&aacute; responsable de:</p>\r\n<p><br /><strong>4.1.1.-</strong> Los fallos e incidencias que pudieran producirse en las comunicaciones, borrado o transmisiones incompletas, de manera que no se garantiza que los servicios del sitio web est&eacute;n constantemente operativos.</p>\r\n<p><br /><strong>4.1.2.-</strong> De la producci&oacute;n de cualquier tipo de da&ntilde;o que los USUARIOS o terceros pudiesen ocasionar en el sitio web.</p>\r\n<p><br /><strong>4.1.3.-</strong> De la fiabilidad y veracidad de las informaciones introducidas por terceros en el sitio web, bien directamente, bien a trav&eacute;s de enlaces o links. Asimismo, <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;colaborar&aacute; y notificar&aacute; a la autoridad competente estas incidencias en el momento en que tenga conocimiento fehaciente de que los da&ntilde;os ocasionados constituyan cualquier tipo de actividad il&iacute;cita.</p>\r\n<p><br /><strong>4.2.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;se reserva el derecho a suspender el acceso sin previo aviso de forma discrecional y con car&aacute;cter definitivo o temporal hasta el aseguramiento de la efectiva responsabilidad de los da&ntilde;os que pudieran producirse. Asimismo, <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;colaborar&aacute; y notificar&aacute; a la autoridad competente estas incidencias en el momento en que tenga conocimiento fehaciente de que los da&ntilde;os ocasionados constituyan cualquier tipo de actividad il&iacute;cita.</p>\r\n<p><strong><br />QUINTA.- DERECHOS DE AUTOR Y MARCA.- <br /></strong>El sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;(los contenidos propios, la programaci&oacute;n y el dise&ntilde;o del sitio web) se encuentra plenamente protegido por los derechos de autor, quedando expresamente prohibida toda reproducci&oacute;n, comunicaci&oacute;n, distribuci&oacute;n y transformaci&oacute;n de los referidos elementos protegidos, salvo consentimiento expreso de <span style="text-decoration: underline;">EL PROPIETARIO</span> . Los materiales, tanto gr&aacute;ficos como escritos, enviados por los usuarios a trav&eacute;s de los medios que se ponen a su disposici&oacute;n en el sitio web, son propiedad del usuario que afirma al enviarlos su leg&iacute;tima autor&iacute;a y cede los derechos de reproducci&oacute;n y distribuci&oacute;n al&nbsp; <span style="text-decoration: underline;">EL PROPIETARIO</span> .</p>\r\n<p><strong><br />SEXTA.- JURISDICCI&Oacute;N Y LEY APLICABLE.- <br /></strong>Las presentes condiciones generales se rigen por la legislaci&oacute;n espa&ntilde;ola. Son competentes para resolver toda controversia o conflicto que se derive de las presentes condiciones generales, los Juzgados de ................................., renunciando expresamente el USUARIO a cualquier otro fuero que pudiera corresponderle.</p>\r\n<p><strong><br />S&Eacute;PTIMA.- <br /></strong>En caso de que cualquier cl&aacute;usula del presente documento sea declarada nula, las dem&aacute;s cl&aacute;usulas seguir&aacute;n vigentes y se interpretar&aacute;n teniendo en cuenta la voluntad de las partes y la finalidad misma de las presentes condiciones. <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;podr&aacute; no ejercitar alguno de los derechos y facultades conferidos en este documento, lo que no implicar&aacute; en ning&uacute;n caso la renuncia a los mismos, salvo reconocimiento expreso por parte de <span style="text-decoration: underline;">EL PROPIETARIO</span>.&nbsp;</p>\r\n<p>&nbsp;</p>', 'condiciones-de-uso'),
(4, 1, 'Politica de privacidad', '', '', '<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="font-size: 12pt;"><span style="color: #888888;"><strong>Pol&iacute;tica de privacidad<br /><br /></strong></span></span>La pol&iacute;tica de privacidad del portal <span style="color: #ff0000;">www..............................................<span style="color: #000000;">, </span></span>informa a sus usuarios de las cl&aacute;usulas expuestas a continuaci&oacute;n, a fin de que &eacute;stos puedan decidir libre y voluntariamente si desean facilitar los datos personales que se les pueda solicitar a trav&eacute;s de la utilizaci&oacute;n de los distintos servicios que ofrecemos, teniendo en cuenta que estos datos personales ser&aacute;n estrictamente imprescindibles para poder proporcionarle el servicio que ha seleccionado.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>LOPD y LSSI-CE<br /><br /></strong>En cumplimiento de lo establecido en la LOPD 15/1999, de 13 de diciembre, le informamos que sus datos personales quedar&aacute;n incorporados y ser&aacute;n tratados en los ficheros de&nbsp;<span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, con el fin de poderle ofrecer nuestros servicios. Asimismo, le informamos de la posibilidad de ejercer los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n de sus datos de car&aacute;cter personal, dirigi&eacute;ndose por escrito a la direcci&oacute;n;&nbsp;&nbsp;<span style="color: #ff0000;">........................................................</span>, o bien, enviando un correo electr&oacute;nico a&nbsp;<span style="color: #ff0000;">lopd@............................................... <br /><br /></span>Usted&nbsp;presta su consentimiento para que <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> le pueda remitir comunicaciones publicitarias o promoci&oacute;nales por correo electr&oacute;nico u otro medio de comunicaci&oacute;n equivalente, en los t&eacute;rminos establecidos por la Ley 34/2002, de Servicios de la Sociedad de la Informaci&oacute;n y de Comercio Electr&oacute;nico. Este consentimiento podr&aacute; ser revocado en cualquier momento, dirigi&eacute;ndose a<strong> </strong><span style="text-decoration: underline;"><span style="color: #ff0000;">EL</span></span><strong> </strong><span style="text-decoration: underline;"><span style="color: #ff0000;">PROPIETARIO</span></span><strong>,</strong> en los datos anteriormente facilitados.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>Autenticidad de los datos<br /><br /></strong>El usuario garantiza la autenticidad de todos aquellos datos que comunique a trav&eacute;s de <span style="color: #ff0000;">www......................................................................</span> y mantendr&aacute; actualizada la informaci&oacute;n que facilite, de forma que responda en todo momento a su situaci&oacute;n real, siendo el &uacute;nico responsable de las manifestaciones falsas o inexactas que realice, as&iacute; como de los perjuicios que cause por ello a <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> o a terceros.<br /><br /><strong>Recogida de informaci&oacute;n<br /><br /></strong>Se recoger&aacute; por v&iacute;a electr&oacute;nica solo la informaci&oacute;n que nos sea imprescindible a nivel t&eacute;cnico para poder ofrecerle un servicio satisfactorio. Cuando se conecta, analizamos exclusivamente el tipo de navegador y el juego de caracteres que est&aacute; utilizando y su versi&oacute;n con el objetivo de que la visualizaci&oacute;n del portal <span style="color: #ff0000;">www.............................................</span> sea correcta. El acceso o utilizaci&oacute;n de este sitio web por parte del usuario implica su consentimiento y aceptaci&oacute;n de todas las condiciones expuestas.<br /><br /><strong>Seguridad y claves de acceso<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, mantiene los niveles de seguridad de protecci&oacute;n de datos de car&aacute;cter personal conforme al Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley 15/1999, de 13 de diciembre, de protecci&oacute;n de datos personales y se compromete a cumplir con el deber de secreto y confidencialidad respecto a los datos personales contenidos en el fichero automatizado de acuerdo a la legislaci&oacute;n aplicable.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Se han establecido los medios seguros a nivel t&eacute;cnico para evitar alteraci&oacute;n, uso indebido y acceso no autorizado de los datos que el usuario nos facilite en nuestro portal.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Es responsabilidad del usuario custodiar y actualizar debidamente las claves de usuario y contrase&ntilde;as. El usuario no facilitar&aacute; el uso de su propia clave de usuario y contrase&ntilde;a a terceros. Ser&aacute; responsabilidad de &eacute;l si as&iacute; lo hace. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no se har&aacute; responsable si hubiese alg&uacute;n da&ntilde;o o perjuicio por p&eacute;rdida de la clave de acceso como consecuencia de la sustracci&oacute;n por un tercero.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> se reserva el derecho de modificar en cualquier momento el acceso al portal.<br /><br />Uso del portal <span style="color: #ff0000;">www..........................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span><strong>.</strong> no puede asumir ninguna responsabilidad derivada del uso incorrecto, inapropiado o il&iacute;cito de la informaci&oacute;n en las p&aacute;ginas de Internet de <span style="color: #ff0000;"><span style="text-decoration: underline;">EL PROPIETARIO<br /><br /></span></span>Con los l&iacute;mites establecidos en la ley, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no asume ninguna responsabilidad derivada de la falta de veracidad, integridad, actualizaci&oacute;n y/o precisi&oacute;n de los datos o informaciones que se contienen en sus p&aacute;ginas de Internet. Los contenidos e informaci&oacute;n de las p&aacute;ginas de Internet de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> est&aacute;n elaborados por profesionales debidamente cualificados para el ejercicio de su profesi&oacute;n. Sin embargo, los contenidos e informaci&oacute;n no vinculan, ni constituyen opiniones, consejos o asesoramiento legal de ning&uacute;n tipo, pues se trata meramente de un servicio ofrecido con car&aacute;cter informativo y divulgativo.<br /><br />Las p&aacute;ginas de Internet de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> pueden contener enlaces (links) a otras p&aacute;ginas de terceros. Por lo tanto, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no podr&aacute; asumir responsabilidades por el contenido que pueda aparecer en p&aacute;ginas de terceros.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Propiedad intelectual e industrial<br /><br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> es propietario del nombre de dominio y del portal <span style="color: #ff0000;">www...................................................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El sitio web <span style="color: #ff0000;">www............................................</span> en su totalidad, incluyendo su dise&ntilde;o, estructura, distribuci&oacute;n, respuesta a las consultas realizadas por los usuarios, textos, contenidos, logotipos, botones, im&aacute;genes, dibujos, c&oacute;digo fuente, as&iacute; como todos los derechos de propiedad industrial e intelectual y cualquier otro signo distintivo, pertenecen a <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> o, en su caso, a las personas o empresas que figuran como autores o titulares de los derechos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Queda prohibida la reproducci&oacute;n o explotaci&oacute;n total o parcial, por cualquier medio, de los contenidos del portal de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> para usos diferentes de la leg&iacute;tima informaci&oacute;n o contrataci&oacute;n por los usuarios de los servicios ofrecidos.<br /><br /><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> ha obtenido la informaci&oacute;n y los materiales incluidos en la web de fuentes consideradas como fiables y si bien se han tomado medidas razonables para asegurarse que la informaci&oacute;n contenida sea la correcta, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no puede garantizar que en todo momento y circunstancia dicha informaci&oacute;n sea exacta, completa, actualizada y consecuentemente, no debe confiarse en ella como si lo fuera. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> declina expresamente cualquier responsabilidad por error u omisi&oacute;n en la informaci&oacute;n contenida en las p&aacute;ginas de esta web.<br /><br /><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> se reserva la facultad de modificar, suspender, cancelar o restringir el contenido de la web, los v&iacute;nculos o la informaci&oacute;n obtenida a trav&eacute;s de ella, sin necesidad de previo aviso. En ning&uacute;n caso, asume responsabilidad alguna como consecuencia de la incorrecta utilizaci&oacute;n de la web que pueda llevar a cabo el usuario, tanto de la informaci&oacute;n como de los servicios en ella contenidos.<br /><br />En ning&uacute;n caso <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, sus directores y/o apoderados, empleados y, en general, el personal autorizado ser&aacute;n responsables de cualquier tipo de perjuicio, p&eacute;rdidas, reclamaciones o gastos de ning&uacute;n tipo, tanto si proceden, directa o indirectamente, del uso y/o difusi&oacute;n de la web o de la informaci&oacute;n adquirida o accedida por o a trav&eacute;s de &eacute;sta, o de sus virus inform&aacute;ticos, de fallos operativos o de interrupciones en el servicio de transmisi&oacute;n o de fallos en la l&iacute;nea en el uso de la web, tanto por conexi&oacute;n directa como por v&iacute;nculo u otro medio, constituyendo a todos los efectos legales un aviso a cualquier usuario de que estas posibilidades y eventos pueden ocurrir.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no se hace responsable de las webs no propias a las que se pueda acceder mediante v&iacute;nculos o enlaces links o de cualquier contenido puesto a disposici&oacute;n de terceros. Cualquier uso de un v&iacute;nculo o acceso a una web no propia ser&aacute; realizado por voluntad y a riesgo y ventura exclusiva del usuario. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no recomienda ni garantiza ninguna de las informaciones obtenidas por o a trav&eacute;s de un v&iacute;nculo, ni se responsabiliza de ninguna p&eacute;rdida, reclamaci&oacute;n o perjuicio derivado del uso o mal uso de un v&iacute;nculo, o de la informaci&oacute;n obtenida a trav&eacute;s de &eacute;l, incluyendo otros v&iacute;nculos o webs, de la interrupci&oacute;n en el servicio o en el acceso, o del intento de usar o usar mal un v&iacute;nculo, tanto al conectar a la web de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> como al acceder a la informaci&oacute;n de otras webs desde la misma.<br /><br /><strong>Cookies y Spam<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Con la finalidad de facilitar la navegaci&oacute;n en nuestro portal, el usuario consiente el uso de cookies y si decide acceder sin identificarse a&ntilde;adiremos a la cookie del usuario los campos de email y password.<br /><br /></span></span><span><span style="font-size: 10pt;">El usuario tiene la posibilidad de configurar su navegador para ser avisado en pantalla de la recepci&oacute;n de cookies y para impedir su instalaci&oacute;n en su disco duro. Para utilizar el sitio web no es necesario que el usuario permita la instalaci&oacute;n de las cookies enviadas por <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no utiliza t&eacute;cnicas de "spamming" y &uacute;nicamente tratar&aacute; los datos que el usuario transmita mediante los formularios electr&oacute;nicos habilitados en este sitio web o mensajes de correo electr&oacute;nico.<br /><br /></span><span style="font-size: 10pt;"><strong>Compromiso<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> se reserva el derecho a modificar la presente pol&iacute;tica de protecci&oacute;n de datos con objeto de adaptarla a las posibles novedades legislativas, as&iacute; como a las que pudieran derivarse de los c&oacute;digos tipo existentes en la materia o por motivos estrat&eacute;gicos o corporativos. Todo ello, sin perjuicio de reclamar el consentimiento necesario de los afectados para realizar los tratamientos requeridos, cuando &eacute;ste no se considerase otorgado con arreglo a los t&eacute;rminos de la presente pol&iacute;tica de protecci&oacute;n de datos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> tiene como objetivo principal garantizar la privacidad y confidencialidad de los datos de car&aacute;cter personal de los usuarios, recabados a trav&eacute;s de cualquier sistema que permita la trasmisi&oacute;n de datos. Por consiguiente, manifiesta su compromiso de cumplimiento con la legislaci&oacute;n que en esta materia se encuentre vigente en cada momento.<br /><br /><strong>Ley aplicable y jurisdicci&oacute;n<br /><br /></strong>Las presentes condiciones generales se rigen por la Legislaci&oacute;n espa&ntilde;ola, siendo competentes los Juzgados y Tribunales espa&ntilde;oles para conocer de cuantas cuestiones se susciten sobre la interpretaci&oacute;n, aplicaci&oacute;n y cumplimiento de las mismas. El usuario, por virtud de su aceptaci&oacute;n a las condiciones generales recogidas en este documento, renuncia expresamente a cualquier fuero que, por aplicaci&oacute;n de la Ley de Enjuiciamiento Civil vigente, pudiera corresponderle.</span></span></p>', 'politica-de-privacidad');
INSERT INTO `ps_cms_lang` (`id_cms`, `id_lang`, `meta_title`, `meta_description`, `meta_keywords`, `content`, `link_rewrite`) VALUES
(4, 2, 'Política de privacidad', '', '', '<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="font-size: 12pt;"><span style="color: #888888;"><strong>Pol&iacute;tica de privacidad<br /><br /></strong></span></span>La pol&iacute;tica de privacidad del portal <span style="color: #ff0000;">www..............................................<span style="color: #000000;">, </span></span>informa a sus usuarios de las cl&aacute;usulas expuestas a continuaci&oacute;n, a fin de que &eacute;stos puedan decidir libre y voluntariamente si desean facilitar los datos personales que se les pueda solicitar a trav&eacute;s de la utilizaci&oacute;n de los distintos servicios que ofrecemos, teniendo en cuenta que estos datos personales ser&aacute;n estrictamente imprescindibles para poder proporcionarle el servicio que ha seleccionado.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>LOPD y LSSI-CE<br /><br /></strong>En cumplimiento de lo establecido en la LOPD 15/1999, de 13 de diciembre, le informamos que sus datos personales quedar&aacute;n incorporados y ser&aacute;n tratados en los ficheros de&nbsp;<span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, con el fin de poderle ofrecer nuestros servicios. Asimismo, le informamos de la posibilidad de ejercer los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n de sus datos de car&aacute;cter personal, dirigi&eacute;ndose por escrito a la direcci&oacute;n;&nbsp;&nbsp;<span style="color: #ff0000;">........................................................</span>, o bien, enviando un correo electr&oacute;nico a&nbsp;<span style="color: #ff0000;">lopd@............................................... <br /><br /></span>Usted&nbsp;presta su consentimiento para que <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> le pueda remitir comunicaciones publicitarias o promoci&oacute;nales por correo electr&oacute;nico u otro medio de comunicaci&oacute;n equivalente, en los t&eacute;rminos establecidos por la Ley 34/2002, de Servicios de la Sociedad de la Informaci&oacute;n y de Comercio Electr&oacute;nico. Este consentimiento podr&aacute; ser revocado en cualquier momento, dirigi&eacute;ndose a<strong> </strong><span style="text-decoration: underline;"><span style="color: #ff0000;">EL</span></span><strong> </strong><span style="text-decoration: underline;"><span style="color: #ff0000;">PROPIETARIO</span></span><strong>,</strong> en los datos anteriormente facilitados.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>Autenticidad de los datos<br /><br /></strong>El usuario garantiza la autenticidad de todos aquellos datos que comunique a trav&eacute;s de <span style="color: #ff0000;">www......................................................................</span> y mantendr&aacute; actualizada la informaci&oacute;n que facilite, de forma que responda en todo momento a su situaci&oacute;n real, siendo el &uacute;nico responsable de las manifestaciones falsas o inexactas que realice, as&iacute; como de los perjuicios que cause por ello a <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> o a terceros.<br /><br /><strong>Recogida de informaci&oacute;n<br /><br /></strong>Se recoger&aacute; por v&iacute;a electr&oacute;nica solo la informaci&oacute;n que nos sea imprescindible a nivel t&eacute;cnico para poder ofrecerle un servicio satisfactorio. Cuando se conecta, analizamos exclusivamente el tipo de navegador y el juego de caracteres que est&aacute; utilizando y su versi&oacute;n con el objetivo de que la visualizaci&oacute;n del portal <span style="color: #ff0000;">www.............................................</span> sea correcta. El acceso o utilizaci&oacute;n de este sitio web por parte del usuario implica su consentimiento y aceptaci&oacute;n de todas las condiciones expuestas.<br /><br /><strong>Seguridad y claves de acceso<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, mantiene los niveles de seguridad de protecci&oacute;n de datos de car&aacute;cter personal conforme al Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley 15/1999, de 13 de diciembre, de protecci&oacute;n de datos personales y se compromete a cumplir con el deber de secreto y confidencialidad respecto a los datos personales contenidos en el fichero automatizado de acuerdo a la legislaci&oacute;n aplicable.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Se han establecido los medios seguros a nivel t&eacute;cnico para evitar alteraci&oacute;n, uso indebido y acceso no autorizado de los datos que el usuario nos facilite en nuestro portal.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Es responsabilidad del usuario custodiar y actualizar debidamente las claves de usuario y contrase&ntilde;as. El usuario no facilitar&aacute; el uso de su propia clave de usuario y contrase&ntilde;a a terceros. Ser&aacute; responsabilidad de &eacute;l si as&iacute; lo hace. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no se har&aacute; responsable si hubiese alg&uacute;n da&ntilde;o o perjuicio por p&eacute;rdida de la clave de acceso como consecuencia de la sustracci&oacute;n por un tercero.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> se reserva el derecho de modificar en cualquier momento el acceso al portal.<br /><br />Uso del portal <span style="color: #ff0000;">www..........................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span><strong>.</strong> no puede asumir ninguna responsabilidad derivada del uso incorrecto, inapropiado o il&iacute;cito de la informaci&oacute;n en las p&aacute;ginas de Internet de <span style="color: #ff0000;"><span style="text-decoration: underline;">EL PROPIETARIO<br /><br /></span></span>Con los l&iacute;mites establecidos en la ley, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no asume ninguna responsabilidad derivada de la falta de veracidad, integridad, actualizaci&oacute;n y/o precisi&oacute;n de los datos o informaciones que se contienen en sus p&aacute;ginas de Internet. Los contenidos e informaci&oacute;n de las p&aacute;ginas de Internet de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> est&aacute;n elaborados por profesionales debidamente cualificados para el ejercicio de su profesi&oacute;n. Sin embargo, los contenidos e informaci&oacute;n no vinculan, ni constituyen opiniones, consejos o asesoramiento legal de ning&uacute;n tipo, pues se trata meramente de un servicio ofrecido con car&aacute;cter informativo y divulgativo.<br /><br />Las p&aacute;ginas de Internet de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> pueden contener enlaces (links) a otras p&aacute;ginas de terceros. Por lo tanto, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no podr&aacute; asumir responsabilidades por el contenido que pueda aparecer en p&aacute;ginas de terceros.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Propiedad intelectual e industrial<br /><br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> es propietario del nombre de dominio y del portal <span style="color: #ff0000;">www...................................................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El sitio web <span style="color: #ff0000;">www............................................</span> en su totalidad, incluyendo su dise&ntilde;o, estructura, distribuci&oacute;n, respuesta a las consultas realizadas por los usuarios, textos, contenidos, logotipos, botones, im&aacute;genes, dibujos, c&oacute;digo fuente, as&iacute; como todos los derechos de propiedad industrial e intelectual y cualquier otro signo distintivo, pertenecen a <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> o, en su caso, a las personas o empresas que figuran como autores o titulares de los derechos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Queda prohibida la reproducci&oacute;n o explotaci&oacute;n total o parcial, por cualquier medio, de los contenidos del portal de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> para usos diferentes de la leg&iacute;tima informaci&oacute;n o contrataci&oacute;n por los usuarios de los servicios ofrecidos.<br /><br /><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> ha obtenido la informaci&oacute;n y los materiales incluidos en la web de fuentes consideradas como fiables y si bien se han tomado medidas razonables para asegurarse que la informaci&oacute;n contenida sea la correcta, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no puede garantizar que en todo momento y circunstancia dicha informaci&oacute;n sea exacta, completa, actualizada y consecuentemente, no debe confiarse en ella como si lo fuera. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> declina expresamente cualquier responsabilidad por error u omisi&oacute;n en la informaci&oacute;n contenida en las p&aacute;ginas de esta web.<br /><br /><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> se reserva la facultad de modificar, suspender, cancelar o restringir el contenido de la web, los v&iacute;nculos o la informaci&oacute;n obtenida a trav&eacute;s de ella, sin necesidad de previo aviso. En ning&uacute;n caso, asume responsabilidad alguna como consecuencia de la incorrecta utilizaci&oacute;n de la web que pueda llevar a cabo el usuario, tanto de la informaci&oacute;n como de los servicios en ella contenidos.<br /><br />En ning&uacute;n caso <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, sus directores y/o apoderados, empleados y, en general, el personal autorizado ser&aacute;n responsables de cualquier tipo de perjuicio, p&eacute;rdidas, reclamaciones o gastos de ning&uacute;n tipo, tanto si proceden, directa o indirectamente, del uso y/o difusi&oacute;n de la web o de la informaci&oacute;n adquirida o accedida por o a trav&eacute;s de &eacute;sta, o de sus virus inform&aacute;ticos, de fallos operativos o de interrupciones en el servicio de transmisi&oacute;n o de fallos en la l&iacute;nea en el uso de la web, tanto por conexi&oacute;n directa como por v&iacute;nculo u otro medio, constituyendo a todos los efectos legales un aviso a cualquier usuario de que estas posibilidades y eventos pueden ocurrir.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no se hace responsable de las webs no propias a las que se pueda acceder mediante v&iacute;nculos o enlaces links o de cualquier contenido puesto a disposici&oacute;n de terceros. Cualquier uso de un v&iacute;nculo o acceso a una web no propia ser&aacute; realizado por voluntad y a riesgo y ventura exclusiva del usuario. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no recomienda ni garantiza ninguna de las informaciones obtenidas por o a trav&eacute;s de un v&iacute;nculo, ni se responsabiliza de ninguna p&eacute;rdida, reclamaci&oacute;n o perjuicio derivado del uso o mal uso de un v&iacute;nculo, o de la informaci&oacute;n obtenida a trav&eacute;s de &eacute;l, incluyendo otros v&iacute;nculos o webs, de la interrupci&oacute;n en el servicio o en el acceso, o del intento de usar o usar mal un v&iacute;nculo, tanto al conectar a la web de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> como al acceder a la informaci&oacute;n de otras webs desde la misma.<br /><br /><strong>Cookies y Spam<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Con la finalidad de facilitar la navegaci&oacute;n en nuestro portal, el usuario consiente el uso de cookies y si decide acceder sin identificarse a&ntilde;adiremos a la cookie del usuario los campos de email y password.<br /><br /></span></span><span><span style="font-size: 10pt;">El usuario tiene la posibilidad de configurar su navegador para ser avisado en pantalla de la recepci&oacute;n de cookies y para impedir su instalaci&oacute;n en su disco duro. Para utilizar el sitio web no es necesario que el usuario permita la instalaci&oacute;n de las cookies enviadas por <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no utiliza t&eacute;cnicas de "spamming" y &uacute;nicamente tratar&aacute; los datos que el usuario transmita mediante los formularios electr&oacute;nicos habilitados en este sitio web o mensajes de correo electr&oacute;nico.<br /><br /></span><span style="font-size: 10pt;"><strong>Compromiso<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> se reserva el derecho a modificar la presente pol&iacute;tica de protecci&oacute;n de datos con objeto de adaptarla a las posibles novedades legislativas, as&iacute; como a las que pudieran derivarse de los c&oacute;digos tipo existentes en la materia o por motivos estrat&eacute;gicos o corporativos. Todo ello, sin perjuicio de reclamar el consentimiento necesario de los afectados para realizar los tratamientos requeridos, cuando &eacute;ste no se considerase otorgado con arreglo a los t&eacute;rminos de la presente pol&iacute;tica de protecci&oacute;n de datos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> tiene como objetivo principal garantizar la privacidad y confidencialidad de los datos de car&aacute;cter personal de los usuarios, recabados a trav&eacute;s de cualquier sistema que permita la trasmisi&oacute;n de datos. Por consiguiente, manifiesta su compromiso de cumplimiento con la legislaci&oacute;n que en esta materia se encuentre vigente en cada momento.<br /><br /><strong>Ley aplicable y jurisdicci&oacute;n<br /><br /></strong>Las presentes condiciones generales se rigen por la Legislaci&oacute;n espa&ntilde;ola, siendo competentes los Juzgados y Tribunales espa&ntilde;oles para conocer de cuantas cuestiones se susciten sobre la interpretaci&oacute;n, aplicaci&oacute;n y cumplimiento de las mismas. El usuario, por virtud de su aceptaci&oacute;n a las condiciones generales recogidas en este documento, renuncia expresamente a cualquier fuero que, por aplicaci&oacute;n de la Ley de Enjuiciamiento Civil vigente, pudiera corresponderle.</span></span></p>', 'politica-de-privacidad'),
(5, 1, 'Pago seguro', '', '', '<h1><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;"><span style="font-size: 12pt;"><span style="color: #808080;"><span style="background-color: #ffffff;">Pago seguro</span>.</span></span></span></span></h1>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">&nbsp;</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;"><span style="color: #ff0000;"><span style="text-decoration: underline;">EL PROPIETARIO</span></span> de la tienda informa que la transacci&oacute;n de datos online entre la tienda y sus cliente, est&aacute; encriptada con&nbsp; <span style="color: #ff0000;">RapipSSL</span>.</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">&nbsp;</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">Que los pagos con Visa se ofrecen a trav&eacute;s de los t&eacute;rminos establecidos por las entidades <span style="color: #ff0000;">Paypal</span> y la <span style="color: #ff0000;">entidad bancaria</span>.</span></span></p>', 'pago-seguro'),
(5, 2, 'Pago seguro', '', '', '<h1><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;"><span style="font-size: 12pt;"><span style="color: #808080;"><span style="background-color: #ffffff;">Pago seguro</span>.</span></span></span></span></h1>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">&nbsp;</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;"><span style="color: #ff0000;"><span style="text-decoration: underline;">EL PROPIETARIO</span></span> de la tienda informa que la transacci&oacute;n de datos online entre la tienda y sus cliente, est&aacute; encriptada con&nbsp; <span style="color: #ff0000;">RapipSSL</span>.</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">&nbsp;</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">Que los pagos con Visa se ofrecen a trav&eacute;s de los t&eacute;rminos establecidos por las entidades <span style="color: #ff0000;">Paypal</span> y la <span style="color: #ff0000;">entidad bancaria</span>.</span></span></p>', 'pago-seguro'),
(1, 3, 'Condiciones de entrega', '', '', '<p style="text-align: justify;"><strong><span style="color: #888888;"><span style="font-family: verdana,geneva;"><span style="font-size: 12pt;">Condiciones de entrega.</span></span></span></strong></p>\r\n<h1><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #000000;">Costes de env&iacute;o. </span></span></span></strong></h1>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Al aceptar la compra se a&ntilde;adir&aacute;n al pedido los gastos de env&iacute;o.</span></span></p>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los gastos en concepto de embalaje, conservaci&oacute;n, transporte y entrega del pedido variar&aacute;n teniendo en cuenta los siguientes puntos:<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Provincia (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Regional (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Peninsular, Baleares y Canarias (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ceuta, Melilla (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Europeo Prioritario (hasta 2 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Internacional Prioritario (hasta 2 kg), <span style="color: #ff0000;"><span style="text-decoration: underline;">00,00 euros</span>.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Recogida en <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> : <span style="text-decoration: underline;"><span style="color: #ff0000;">0,00 euros</span></span>. Restar del pedido.</span></span></p>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Pedidos nacionales superiores a <span style="text-decoration: underline;"><span style="color: #ff0000;">000,00 euros</span></span> sin gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos superiores al peso indicado <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se pondr&aacute; en contacto con el cliente para indicarle a cuanto ascienden los gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>Horarios de entrega de los pedidos.<br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para los pedidos nacionales (peninsulares e insulares) se utiliza el servicio de mensajer&iacute;a de <span style="text-decoration: underline;"><span style="color: #ff0000;">MRW</span></span>. La entrega se realiza entre&nbsp; 24-48 horas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos internacionales se utilizar&aacute; el servicio de env&iacute;o prioritario de <span style="text-decoration: underline;"><span style="color: #ff0000;">Correos de Espa&ntilde;a</span>.</span></span></span></p>', 'condiciones-de-entrega'),
(2, 3, 'Condiciones de uso', '', '', '<p style="text-align: justify;"><strong><span style="color: #888888;"><span style="font-family: verdana,geneva;"><span style="font-size: 12pt;">Condiciones de uso.</span></span></span></strong></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />En cumplimiento de la Ley 34/2002 de servicios de la sociedad de la informaci&oacute;n y de comercio electr&oacute;nico (BOE, n&ordm; 166, de 12 de Julio de 2002) exponemos p&uacute;blicamente los datos de la empresa a la que se refiere esta Web.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Empresa :&nbsp; <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO <br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">N&uacute;mero de Identificaci&oacute;n Fiscal : <span style="color: #ff0000;">................................................<br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Direcci&oacute;n: <span style="color: #ff0000;">..............................................................................<br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Correo electr&oacute;nico : <span style="color: #ff0000;">admin</span><span style="color: #ff0000;">@.......................................................<br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Tel&eacute;fono de <span style="color: #000000;">contacto </span>:<strong>&nbsp;&nbsp;</strong><span style="color: #ff0000;">............................................................</span></span></span></p>\r\n<p style="text-align: justify;"><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />CONDICIONES GENERALES DE USO DEL SITIO WEB<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">.........................................................................................................</span>(EN ADELANTE <span style="color: #ff0000;"><span style="text-decoration: underline;">EL PROPIETARIO</span></span> ), con domicilio a efectos de notificaciones en<span style="color: #ff0000;">....................................................................................................</span>, con CIF <span style="color: #ff0000;">.........................................................</span>, pone a disposici&oacute;n en su sitio web <span style="color: #ff0000;">www..................................</span> determinados contenidos de car&aacute;cter informativo sobre sus actividades. Las presentes condiciones generales rigen &uacute;nica y exclusivamente el uso del sitio web de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>&nbsp;por parte de los USUARIOS que accedan al mismo. Las presentes condiciones generales se le exponen al USUARIO en el sitio web <span style="color: #ff0000;">www..................................</span> en todas y cada una de las p&aacute;ginas, para que las lea, las imprima, archive y acepte a trav&eacute;s de internet y se encuentre plenamente informado.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />El acceso al sitio web de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;implica sin reservas la aceptaci&oacute;n de las presentes condiciones generales de uso que el USUARIO afirma comprender en su totalidad. El USUARIO se compromete no a utilizar el sitio web y los servicios que se ofrecen en el mismo para la realizaci&oacute;n de actividades contrarias a la ley y a respetar en todo momento las presentes condiciones generales.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">&nbsp;</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>PRIMERA.- <br /></strong>El sitio web de <span style="color: #ff0000;">www......................................................</span> ha sido realizado, por un lado, con el fin de poner a disposici&oacute;n de terceros informaci&oacute;n sobre sus actividades, as&iacute; como poder contactar con &eacute;l, para solicitarle informaci&oacute;n adicional y, por otro lado, poner a disposici&oacute;n de los usuarios la posibilidad de comprar los productos que se ofrecen. La solicitud de los servicios o art&iacute;culos que se ofrecen para su compra en el sitio web, se regir&aacute;n por las condiciones generales de contrataci&oacute;n espec&iacute;ficas.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-size: 10pt;">\r\n<p style="text-align: justify;"><br /><strong>SEGUNDA.- CONDICIONES DE ACCESO Y USO<br /></strong></p>\r\n</span><span style="font-size: 10pt;"><span style="font-family: Arial; font-size: 10pt; mso-fareast-font-family: ''Times New Roman''; mso-fareast-language: ES;"><br /><strong>2.1.-</strong> La utilizaci&oacute;n del sitio web de <span style="text-decoration: underline;"><span style="color: red;">EL PROPIETARIO</span></span><span style="color: red;"> </span>, no conlleva la obligatoriedad de inscripci&oacute;n del USUARIO. Las condiciones de acceso y uso del presente sitio web se rigen estrictamente por la legalidad vigente y por el principio de buena fe, comprometi&eacute;ndose el USUARIO a realizar un buen uso de la web. Quedan prohibidos todos los actos que vulneren la legalidad, derechos o intereses de terceros: derecho a la intimidad, protecci&oacute;n de datos, propiedad intelectual etc. Expresamente <span style="text-decoration: underline;"><span style="color: red;">EL PROPIETARIO</span></span><span style="color: red;"> </span><span style="mso-spacerun: yes;">&nbsp;</span>proh&iacute;be los siguientes actos:</span></span>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br /><strong>2.1.1.-</strong> Realizar acciones que puedan producir en el sitio web o a trav&eacute;s del mismo por cualquier medio cualquier tipo de da&ntilde;o a los sistemas de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;o a terceros.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br /><strong>2.1.2.-</strong> Realizar sin la debida autorizaci&oacute;n cualquier tipo de publicidad o informaci&oacute;n comercial directamente o de forma encubierta, el env&iacute;o de correos masivos (&ldquo;spaming&rdquo;) o env&iacute;o de grandes mensajes con el fin de bloquear servidores de la red (&ldquo;mail bombing&rdquo;).</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br /><strong>2.2.-</strong> <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;podr&aacute; interrumpir en cualquier momento el acceso a su sitio web, si detecta un uso contrario a la legalidad, la buena fe o a las presentes condiciones generales (ver cl&aacute;usula quinta).</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong><br />TERCERA.- CONTENIDOS:</strong> <br />Los contenidos incorporados a este sitio web han sido elaborados e incluidos por:</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br /><strong>3.1.-</strong> <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>&nbsp; utilizando fuentes internas y externas, de tal modo que <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;&uacute;nicamente se hace responsable por los contenidos elaborados de forma interna.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br /><strong>3.2.-</strong> <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;se reserva el derecho a modificar en cualquier momento los contenidos existentes en su sitio web. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;no asegura ni se responsabiliza del correcto funcionamiento de los enlaces a sitios web de terceros que figuren en <span style="color: #ff0000;">www...............................................</span></span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Adem&aacute;s, a trav&eacute;s del sitio web de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span> </span>, se ponen a disposici&oacute;n del usuario servicios gratuitos y de pago ofrecidos por terceros ajenos y que se regir&aacute;n por las condiciones particulares de cada uno de ellos. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;no garantiza la veracidad, exactitud o actualidad de los contenidos y servicios ofrecidos por terceros y queda expresamente exento de todo tipo de responsabilidad por los da&ntilde;os y perjuicios que puedan derivarse de la falta de exactitud de estos contenidos y servicios.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br /><strong>CUARTA.- RESPONSABILIDAD<br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong><br />4.1.-</strong> <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;en ning&uacute;n caso ser&aacute; responsable de:</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br /><strong>4.1.1.-</strong> Los fallos e incidencias que pudieran producirse en las comunicaciones, borrado o transmisiones incompletas, de manera que no se garantiza que los servicios del sitio web est&eacute;n constantemente operativos.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br /><strong>4.1.2.-</strong> De la producci&oacute;n de cualquier tipo de da&ntilde;o que los USUARIOS o terceros pudiesen ocasionar en el sitio web.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br /><strong>4.1.3.-</strong> De la fiabilidad y veracidad de las informaciones introducidas por terceros en el sitio web, bien directamente, bien a trav&eacute;s de enlaces o links. Asimismo, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;colaborar&aacute; y notificar&aacute; a la autoridad competente estas incidencias en el momento en que tenga conocimiento fehaciente de que los da&ntilde;os ocasionados constituyan cualquier tipo de actividad il&iacute;cita.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br /><strong>4.2.-</strong> <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;se reserva el derecho a suspender el acceso sin previo aviso de forma discrecional y con car&aacute;cter definitivo o temporal hasta el aseguramiento de la efectiva responsabilidad de los da&ntilde;os que pudieran producirse. Asimismo, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;colaborar&aacute; y notificar&aacute; a la autoridad competente estas incidencias en el momento en que tenga conocimiento fehaciente de que los da&ntilde;os ocasionados constituyan cualquier tipo de actividad il&iacute;cita.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong><br />QUINTA.- DERECHOS DE AUTOR Y MARCA.- <br /></strong>El sitio web de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;(los contenidos propios, la programaci&oacute;n y el dise&ntilde;o del sitio web) se encuentra plenamente protegido por los derechos de autor, quedando expresamente prohibida toda reproducci&oacute;n, comunicaci&oacute;n, distribuci&oacute;n y transformaci&oacute;n de los referidos elementos protegidos, salvo consentimiento expreso de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> . Los materiales, tanto gr&aacute;ficos como escritos, enviados por los usuarios a trav&eacute;s de los medios que se ponen a su disposici&oacute;n en el sitio web, son propiedad del usuario que afirma al enviarlos su leg&iacute;tima autor&iacute;a y cede los derechos de reproducci&oacute;n y distribuci&oacute;n al&nbsp; <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> .</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong><br />SEXTA.- JURISDICCI&Oacute;N Y LEY APLICABLE.- <br /></strong>Las presentes condiciones generales se rigen por la legislaci&oacute;n espa&ntilde;ola. Son competentes para resolver toda controversia o conflicto que se derive de las presentes condiciones generales, los Juzgados de ................................., renunciando expresamente el USUARIO a cualquier otro fuero que pudiera corresponderle.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong><br />S&Eacute;PTIMA.- <br /></strong>En caso de que cualquier cl&aacute;usula del presente documento sea declarada nula, las dem&aacute;s cl&aacute;usulas seguir&aacute;n vigentes y se interpretar&aacute;n teniendo en cuenta la voluntad de las partes y la finalidad misma de las presentes condiciones. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> &nbsp;podr&aacute; no ejercitar alguno de los derechos y facultades conferidos en este documento, lo que no implicar&aacute; en ning&uacute;n caso la renuncia a los mismos, salvo reconocimiento expreso por parte de <span style="color: #ff0000;"><span style="text-decoration: underline;">EL PROPIETARIO</span></span>.<span id="_marker">&nbsp;</span></span></span></p>\r\n</p>', 'condiciones-de-uso');
INSERT INTO `ps_cms_lang` (`id_cms`, `id_lang`, `meta_title`, `meta_description`, `meta_keywords`, `content`, `link_rewrite`) VALUES
(3, 3, 'Condiciones de venta', '', '', '<p style="text-align: justify;"><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #888888;"><span style="font-size: 12pt;">Condiciones generales de contrataci&oacute;n.</span></span></span></span></strong></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Las presentes Condiciones Generales de Contrataci&oacute;n regular&aacute;n expresamente las relaciones comerciales que surjan entre <span style="color: #ff0000;"><span style="text-decoration: underline;">LA EMPRESA</span> </span>y los usuarios o clientes que contraten los productos ofrecidos a trav&eacute;s del sitio web <span style="color: #ff0000;">www...........................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Las mismas han sido elaboradas de conformidad con la normativa vigente en la materia y concretamente, de acuerdo con lo establecido en los siguientes textos legales:</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em><br />&bull; Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Informaci&oacute;n y de Comercio Electr&oacute;nico y Ley 56/2007 de 28 de diciembre de Medidas de Impulso a la Sociedad de la informaci&oacute;n.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 32/2003, de 3 de noviembre, General de Telecomunicaciones y Real Decreto 1906/1999, de 17 de diciembre por el que se regula la contrataci&oacute;n telef&oacute;nica o electr&oacute;nica con condiciones generales.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 7/1998, de 13 de abril, sobre Condiciones Generales de Contrataci&oacute;n.</em></span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em><br />&bull; Real Decreto-Legislativo 1/2007 de 16 de noviembre, aprobatorio del Texto refundido de la Ley general para la defensa de Consumidores y Usuarios, y Ley 43/2007 de 3 de diciembre de protecci&oacute;n de los consumidores en la contrataci&oacute;n de bienes con oferta de restituci&oacute;n de precio.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 7/1996, de 15 de enero de Ordenaci&oacute;n del Comercio Minorista.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 59/2003, de 19 de diciembre sobre Firma Electr&oacute;nica.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 15/1999, de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter personal, <br /><br />&bull; Ley 25/2007 de 18 de octubre de conservaci&oacute;n de datos relativos a las comunicaciones electr&oacute;nicas y a las redes p&uacute;blicas de comunicaciones, y RD 172072007, de 21 de diciembre por el que se aprueba el Reglamento de desarrollo de la LOPD.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Reales Decretos 225/2006 de 24 de febrero y 103/2008 de 1 de febrero reguladores de las ventas a distancia y del registro de empresas de ventas a distancia, y Ley 22/2007 de 11 de julio, sobre comercializaci&oacute;n a distancia de servicios financieros destinados a los consumidores.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Estas Condiciones Generales de Compra han de complementarse con las Condiciones Generales de uso y navegaci&oacute;n fijadas para la p&aacute;gina WEB, as&iacute; como por cualesquiera otras Condiciones Particulares o espec&iacute;ficas de contrataci&oacute;n que pudieran establecerse en cada caso.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Tanto la navegaci&oacute;n como la adquisici&oacute;n de cualquiera de los productos de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> supone la aceptaci&oacute;n como usuario, sin reserva de ninguna clase, de todas y cada una de las subsiguientes Condiciones Generales de Contrataci&oacute;n as&iacute; como, en su caso, de las Condiciones Particulares o espec&iacute;ficas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> podr&aacute; en todo momento y sin previo aviso, modificar las presentes Condiciones Generales de Contrataci&oacute;n as&iacute; como las Condiciones Particulares que en su caso se incluyan, mediante la publicaci&oacute;n de dichas modificaciones en la propia WEB a fin de que puedan ser conocidas y nuevamente aceptadas por los usuarios.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="background-color: #ffffff;">2</span><strong>.-. INFORMACI&Oacute;N PREVIA A LA CONTRATACI&Oacute;N. <br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> informa que el proceso de compra de los productos ofrecidos en el sitio web www......................&nbsp; viene detallado expresamente en el apartado denominado Condiciones Generales.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Del mismo modo, el usuario o cliente puede tener acceso a las Condiciones Generales de uso y navegaci&oacute;n, y al apartado Pol&iacute;tica de Privacidad, a los cuales se puede acceder directamente a trav&eacute;s del link que se incluye en la p&aacute;gina principal o de inicio de la presente WEB.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El usuario declara conocer y aceptar de modo expreso lo recogido en los apartados anteriores.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El usuario declara que es mayor de edad y dispone de la capacidad legal necesaria para utilizar este sitio web de conformidad con las Condiciones Generales aqu&iacute; enunciadas, que comprende y entiende en su totalidad. El usuario se hace responsable de tratar de forma confidencial y custodiar adecuadamente las contrase&ntilde;as que le sean proporcionadas por <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> para acceder al sitio web, evitando el acceso a las mismas de terceras personas no autorizadas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Una vez efectuada la compra el usuario visualizar&aacute; la confirmaci&oacute;n de su pedido en pantalla, pudiendo imprimir &eacute;sta como comprobante de compra.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La confirmaci&oacute;n de pedido y el comprobante de compra (impresi&oacute;n que hace el usuario) no tendr&aacute;n validez como factura.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.- FORMALIZACI&Oacute;N DE LA COMPRAVENTA. <br /><br /></span></span></strong><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.1.- PRODUCTOS OFRECIDOS.</span></span></strong></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> mostrar&aacute; en cada momento los productos a la venta junto con sus caracter&iacute;sticas propias y su precio. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se reserva el derecho a decidir en cada momento, los productos que se ofrecen a los usuarios o clientes a trav&eacute;s del sitio web <span style="color: #ff0000;">www.............................................</span> &nbsp;De este modo, <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> podr&aacute; en cualquier momento adicionar nuevos productos a los incluidos en el mismo, los cuales se regir&aacute;n por lo dispuesto en las Condiciones Generales en vigor en ese momento. Asimismo <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se reserva el derecho a dejar de facilitar el acceso, en cualquier momento y sin previo aviso, de cualquiera de los productos ofrecidos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>3.2.- INDICACI&Oacute;N DE PRECIOS DE LOS PRODUCTOS.<br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />El precio de cada producto aparecer&aacute; en pantalla. Los precios en pantalla vendr&aacute;n indicados en euros e incluyen el correspondiente IMPUESTO SOBRE EL VALOR A&Ntilde;ADIDO (IVA) y cualquier otro impuesto que fuera de aplicaci&oacute;n. Los precios indicados en pantalla ser&aacute;n en todo momento los vigentes, salvo error tipogr&aacute;fico o cambio de precio por parte de la empresa.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.3.- DISPONIBILIDAD.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />La disponibilidad de cada producto depender&aacute; de la demanda de los clientes. </span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">www................................................</span> </span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">&nbsp;actualiza el stock con la mayor asiduidad posible. A&uacute;n as&iacute;, es posible que un producto que aparezca como disponible en la web, se haya agotado. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> avisar&aacute; al cliente mediante e-mail de esta situaci&oacute;n.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.4.- COSTES DE ENV&Iacute;O. <br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Al aceptar la compra se a&ntilde;adir&aacute;n al pedido los gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los gastos en concepto de embalaje, conservaci&oacute;n, transporte y entrega del pedido variar&aacute;n teniendo en cuenta los siguientes puntos:<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Provincia (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Regional (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Peninsular, Baleares y Canarias (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Ceuta, Melilla (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Europeo Prioritario (hasta 2 kg), <span style="color: #ff0000;"><span style="text-decoration: underline;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Internacional Prioritario (hasta 2 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Recogida en <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> : <span style="text-decoration: underline;"><span style="color: #ff0000;">0,00 euros</span></span>.<br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Pedidos nacionales superiores a <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span> sin gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos superiores al peso indicado <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se pondr&aacute; en contacto con el cliente para indicarle a cuanto ascienden los gastos de env&iacute;o.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.5.- HORARIOS DE ENTREGA DE LOS PEDIDOS.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Para los pedidos nacionales (peninsulares e insulares) se utiliza el servicio de mensajer&iacute;a de <span style="text-decoration: underline;"><span style="color: #ff0000;">MRW</span></span>. La entrega se realiza entre&nbsp; <span style="text-decoration: underline;"><span style="color: #ff0000;">24-48 horas</span></span>.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos internacionales se utilizar&aacute; el servicio de env&iacute;o prioritario de <span style="text-decoration: underline;"><span style="color: #ff0000;">Correos de Espa&ntilde;a</span></span>.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.6.- ENTREGA DEL PEDIDO.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />En el supuesto de que el cliente no pudiera estar presente en el momento de la entrega, el pedido ser&aacute; entregado a cualquier otra persona que se encuentre en el domicilio indicado y que sea mayor de 18 a&ntilde;os.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> entiende que el cliente que ha realizado el pedido autoriza a la persona que en ese momento est&aacute; en el hogar a recoger el pedido en su nombre. Por lo tanto, queda bajo la exclusiva responsabilidad del cliente autorizar a un tercero para la recepci&oacute;n y aceptaci&oacute;n de la compra en el domicilio de entrega.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La entrega de la compra se realizar&aacute; en la direcci&oacute;n indicada por el cliente, debiendo firmar el receptor el albar&aacute;n de entrega correspondiente.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">4.- PAGO DE LA COMPRAVENTA.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Estas son las formas de pago disponibles en <span style="color: #ff0000;">www..........................................</span> :<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Presupuesto:</strong> Elija esta opci&oacute;n, no estar&aacute; formalizando una compra, sino realizando un presupuesto.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <span style="text-decoration: underline;"><span style="color: #ff0000;"><strong>Contado:</strong> Pago en efectivo o con tarjeta al recoger los productos en el domicilio social de la empresa. V&aacute;lido solamente con la modalidad de env&iacute;o "recogida en empresa".<br /><br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Tarjeta de cr&eacute;dito:</strong> El pago con tarjeta es el sistema m&aacute;s f&aacute;cil y r&aacute;pido. Seleccione el tipo de tarjeta y escriba el n&uacute;mero, caducidad y c&oacute;digo CVC.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <span style="color: #ff0000;"><span style="text-decoration: underline;"><strong>Reembolso:</strong> Pago en el momento de la entrega. S&oacute;lo disponible para los pedidos nacionales</span>.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Transferencia bancaria:</strong> Pago del importe total mediante una transferencia bancaria a la cuenta de la entidad bancaria <span style="color: #ff0000;">.................................................</span> de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span>.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">5.- DEVOLUCIONES.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> cumple con la normativa vigente. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> aceptar&aacute; la devoluci&oacute;n de un producto, siempre dentro del plazo de 7 d&iacute;as h&aacute;biles desde la recepci&oacute;n del mismo. Una vez recibido y comprobado que se encuentra en el mismo estado en que se envi&oacute; y con el embalaje original se proceder&aacute; a su reembolso. Para devolver un producto es necesario que se ponga el receptor en contacto previamente con LA EMPRESA mediante e-mail a <span style="text-decoration: underline;"><span style="color: #ff0000;">devolucion@..........................</span>.</span>, para que se le indique la forma de env&iacute;o adecuada.<br /><br /></span></span><span style="text-decoration: underline;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">LA EMPRESA dispone de Hojas de Reclamaciones a disposici&oacute;n del consumidor.<br /><br /></span></span></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">6.- PROTECCI&Oacute;N DE DATOS DE CAR&Aacute;CTER PERSONAL.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> se encuentra especialmente interesada en la seguridad y confidencialidad de los datos aportados por sus clientes. En este sentido, <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se compromete a la protecci&oacute;n de los datos personales de los usuarios del sitio web <span style="color: #ff0000;">www.......................................................................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La pol&iacute;tica de protecci&oacute;n de los datos personales se extiende a todo lo relativo a la recogida y uso de la informaci&oacute;n proporcionada a trav&eacute;s de la presente p&aacute;gina WEB. La compra ON LINE requiere que el usuario facilite sus datos personales con el fin de poder tramitar y hacerle llegar su pedido.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El servidor de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> env&iacute;a al ordenador del cliente un fichero (denominado cookie) con el objeto de ejecutar los procesos de compra. La duraci&oacute;n de la cookie es temporal y es eliminada del ordenador del usuario una vez finaliza la sesi&oacute;n y se cierra el navegador. La utilizaci&oacute;n de estas cookies es necesaria para la prestaci&oacute;n del servicio. En caso de que el usuario tenga desactivada la ejecuci&oacute;n de este procedimiento no ser&aacute; posible la prestaci&oacute;n del servicio de compra online.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los datos facilitados por los clientes de este servicio pasan a formar parte de un fichero automatizado de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span>, frente al cual el usuario podr&aacute;, en cualquier momento, ejercitar los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n conforme a lo establecido en la Ley Org&aacute;nica 15/99, de 13 de Diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para el ejercicio de estos derechos el usuario podr&aacute; enviar un correo a la siguiente direcci&oacute;n e-mail: <span style="color: #ff0000;">lopd@&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.......................&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Igualmente, el usuario podr&aacute; dirigirse a la siguiente direcci&oacute;n postal:</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;"><span style="text-decoration: underline;">LA EMPRESA, c/ &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;, n&ordm;&hellip; , CP-CIUDAD.<br /><br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los datos facilitados por el usuario ser&aacute;n tratados de manera estrictamente confidencial. En caso de producirse cambios en la Pol&iacute;tica de Protecci&oacute;n de Datos expuesta, los usuarios ser&aacute;n debidamente informados a trav&eacute;s de la presente WEB.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">7.- LEGISLACI&Oacute;N APLICABLE. SUMISI&Oacute;N A FUERO.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />El presente contrato se regir&aacute; por la legislaci&oacute;n espa&ntilde;ola que ser&aacute; de aplicaci&oacute;n en lo no dispuesto en este contrato en materia de interpretaci&oacute;n, validez y ejecuci&oacute;n.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Las partes renuncian expresamente al fuero que les pudiera corresponder y se someten expresamente a los &oacute;rganos jurisdiccionales de <span style="text-decoration: underline;"><span style="color: #ff0000;">CIUDAD</span></span> la resoluci&oacute;n de cualquier controversia que pudiera surgir de la interpretaci&oacute;n o ejecuci&oacute;n de las presentes condiciones contractuales.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">8.- ANULACIONES.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> se reserva el derecho a anular los pedidos realizados en base a erratas, o pedidos con direcci&oacute;n de env&iacute;o incorrecta o incompleta. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> informar&aacute; al cliente siempre que sea posible.</span></span></p>', 'condiciones-de-venta'),
(7, 1, 'Empresa y actividad', '', '', '<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong><span style="color: #888888;"><span style="font-size: 12pt;">Sobre<br /></span></span><br /><span style="color: #000000;">Presentaci&oacute;n comercial de su empresa o actividad.</span></strong></span></span></p>', 'empresa-y-actividad'),
(7, 2, 'Empresa y actividad', '', '', '<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong><span style="color: #888888;"><span style="font-size: 12pt;">Sobre<br /></span></span><br /><span style="color: #000000;">Presentaci&oacute;n comercial de su empresa o actividad.</span></strong></span></span></p>', 'empresa-y-actividad'),
(7, 3, 'Empresa y actividad', '', '', '<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong><span style="color: #888888;"><span style="font-size: 12pt;">Sobre<br /></span></span><br /><span style="color: #000000;">Presentaci&oacute;n comercial de su empresa o actividad.</span></strong></span></span></p>', 'empresa-y-actividad');
INSERT INTO `ps_cms_lang` (`id_cms`, `id_lang`, `meta_title`, `meta_description`, `meta_keywords`, `content`, `link_rewrite`) VALUES
(3, 1, 'Condiciones de venta', '', '', '<p style="text-align: justify;"><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #888888;"><span style="font-size: 12pt;">Condiciones generales de contrataci&oacute;n.</span></span></span></span></strong></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Las presentes Condiciones Generales de Contrataci&oacute;n regular&aacute;n expresamente las relaciones comerciales que surjan entre <span style="color: #ff0000;"><span style="text-decoration: underline;">LA EMPRESA</span> </span>y los usuarios o clientes que contraten los productos ofrecidos a trav&eacute;s del sitio web <span style="color: #ff0000;">www...........................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Las mismas han sido elaboradas de conformidad con la normativa vigente en la materia y concretamente, de acuerdo con lo establecido en los siguientes textos legales:</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em><br />&bull; Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Informaci&oacute;n y de Comercio Electr&oacute;nico y Ley 56/2007 de 28 de diciembre de Medidas de Impulso a la Sociedad de la informaci&oacute;n.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 32/2003, de 3 de noviembre, General de Telecomunicaciones y Real Decreto 1906/1999, de 17 de diciembre por el que se regula la contrataci&oacute;n telef&oacute;nica o electr&oacute;nica con condiciones generales.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 7/1998, de 13 de abril, sobre Condiciones Generales de Contrataci&oacute;n.</em></span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em><br />&bull; Real Decreto-Legislativo 1/2007 de 16 de noviembre, aprobatorio del Texto refundido de la Ley general para la defensa de Consumidores y Usuarios, y Ley 43/2007 de 3 de diciembre de protecci&oacute;n de los consumidores en la contrataci&oacute;n de bienes con oferta de restituci&oacute;n de precio.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 7/1996, de 15 de enero de Ordenaci&oacute;n del Comercio Minorista.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 59/2003, de 19 de diciembre sobre Firma Electr&oacute;nica.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 15/1999, de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter personal, <br /><br />&bull; Ley 25/2007 de 18 de octubre de conservaci&oacute;n de datos relativos a las comunicaciones electr&oacute;nicas y a las redes p&uacute;blicas de comunicaciones, y RD 172072007, de 21 de diciembre por el que se aprueba el Reglamento de desarrollo de la LOPD.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Reales Decretos 225/2006 de 24 de febrero y 103/2008 de 1 de febrero reguladores de las ventas a distancia y del registro de empresas de ventas a distancia, y Ley 22/2007 de 11 de julio, sobre comercializaci&oacute;n a distancia de servicios financieros destinados a los consumidores.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Estas Condiciones Generales de Compra han de complementarse con las Condiciones Generales de uso y navegaci&oacute;n fijadas para la p&aacute;gina WEB, as&iacute; como por cualesquiera otras Condiciones Particulares o espec&iacute;ficas de contrataci&oacute;n que pudieran establecerse en cada caso.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Tanto la navegaci&oacute;n como la adquisici&oacute;n de cualquiera de los productos de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> supone la aceptaci&oacute;n como usuario, sin reserva de ninguna clase, de todas y cada una de las subsiguientes Condiciones Generales de Contrataci&oacute;n as&iacute; como, en su caso, de las Condiciones Particulares o espec&iacute;ficas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> podr&aacute; en todo momento y sin previo aviso, modificar las presentes Condiciones Generales de Contrataci&oacute;n as&iacute; como las Condiciones Particulares que en su caso se incluyan, mediante la publicaci&oacute;n de dichas modificaciones en la propia WEB a fin de que puedan ser conocidas y nuevamente aceptadas por los usuarios.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="background-color: #ffffff;">2</span><strong>.-. INFORMACI&Oacute;N PREVIA A LA CONTRATACI&Oacute;N. <br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> informa que el proceso de compra de los productos ofrecidos en el sitio web www......................&nbsp; viene detallado expresamente en el apartado denominado Condiciones Generales.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Del mismo modo, el usuario o cliente puede tener acceso a las Condiciones Generales de uso y navegaci&oacute;n, y al apartado Pol&iacute;tica de Privacidad, a los cuales se puede acceder directamente a trav&eacute;s del link que se incluye en la p&aacute;gina principal o de inicio de la presente WEB.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El usuario declara conocer y aceptar de modo expreso lo recogido en los apartados anteriores.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El usuario declara que es mayor de edad y dispone de la capacidad legal necesaria para utilizar este sitio web de conformidad con las Condiciones Generales aqu&iacute; enunciadas, que comprende y entiende en su totalidad. El usuario se hace responsable de tratar de forma confidencial y custodiar adecuadamente las contrase&ntilde;as que le sean proporcionadas por <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> para acceder al sitio web, evitando el acceso a las mismas de terceras personas no autorizadas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Una vez efectuada la compra el usuario visualizar&aacute; la confirmaci&oacute;n de su pedido en pantalla, pudiendo imprimir &eacute;sta como comprobante de compra.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La confirmaci&oacute;n de pedido y el comprobante de compra (impresi&oacute;n que hace el usuario) no tendr&aacute;n validez como factura.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.- FORMALIZACI&Oacute;N DE LA COMPRAVENTA. <br /><br /></span></span></strong><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.1.- PRODUCTOS OFRECIDOS.</span></span></strong></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> mostrar&aacute; en cada momento los productos a la venta junto con sus caracter&iacute;sticas propias y su precio. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se reserva el derecho a decidir en cada momento, los productos que se ofrecen a los usuarios o clientes a trav&eacute;s del sitio web <span style="color: #ff0000;">www.............................................</span> &nbsp;De este modo, <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> podr&aacute; en cualquier momento adicionar nuevos productos a los incluidos en el mismo, los cuales se regir&aacute;n por lo dispuesto en las Condiciones Generales en vigor en ese momento. Asimismo <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se reserva el derecho a dejar de facilitar el acceso, en cualquier momento y sin previo aviso, de cualquiera de los productos ofrecidos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>3.2.- INDICACI&Oacute;N DE PRECIOS DE LOS PRODUCTOS.<br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />El precio de cada producto aparecer&aacute; en pantalla. Los precios en pantalla vendr&aacute;n indicados en euros e incluyen el correspondiente IMPUESTO SOBRE EL VALOR A&Ntilde;ADIDO (IVA) y cualquier otro impuesto que fuera de aplicaci&oacute;n. Los precios indicados en pantalla ser&aacute;n en todo momento los vigentes, salvo error tipogr&aacute;fico o cambio de precio por parte de la empresa.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.3.- DISPONIBILIDAD.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />La disponibilidad de cada producto depender&aacute; de la demanda de los clientes. </span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">www................................................</span> </span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">&nbsp;actualiza el stock con la mayor asiduidad posible. A&uacute;n as&iacute;, es posible que un producto que aparezca como disponible en la web, se haya agotado. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> avisar&aacute; al cliente mediante e-mail de esta situaci&oacute;n.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.4.- COSTES DE ENV&Iacute;O. <br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Al aceptar la compra se a&ntilde;adir&aacute;n al pedido los gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los gastos en concepto de embalaje, conservaci&oacute;n, transporte y entrega del pedido variar&aacute;n teniendo en cuenta los siguientes puntos:<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Provincia (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Regional (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Peninsular, Baleares y Canarias (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Ceuta, Melilla (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Europeo Prioritario (hasta 2 kg), <span style="color: #ff0000;"><span style="text-decoration: underline;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Internacional Prioritario (hasta 2 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Recogida en <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> : <span style="text-decoration: underline;"><span style="color: #ff0000;">0,00 euros</span></span>.<br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Pedidos nacionales superiores a <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span> sin gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos superiores al peso indicado <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se pondr&aacute; en contacto con el cliente para indicarle a cuanto ascienden los gastos de env&iacute;o.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.5.- HORARIOS DE ENTREGA DE LOS PEDIDOS.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Para los pedidos nacionales (peninsulares e insulares) se utiliza el servicio de mensajer&iacute;a de <span style="text-decoration: underline;"><span style="color: #ff0000;">MRW</span></span>. La entrega se realiza entre&nbsp; <span style="text-decoration: underline;"><span style="color: #ff0000;">24-48 horas</span></span>.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos internacionales se utilizar&aacute; el servicio de env&iacute;o prioritario de <span style="text-decoration: underline;"><span style="color: #ff0000;">Correos de Espa&ntilde;a</span></span>.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.6.- ENTREGA DEL PEDIDO.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />En el supuesto de que el cliente no pudiera estar presente en el momento de la entrega, el pedido ser&aacute; entregado a cualquier otra persona que se encuentre en el domicilio indicado y que sea mayor de 18 a&ntilde;os.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> entiende que el cliente que ha realizado el pedido autoriza a la persona que en ese momento est&aacute; en el hogar a recoger el pedido en su nombre. Por lo tanto, queda bajo la exclusiva responsabilidad del cliente autorizar a un tercero para la recepci&oacute;n y aceptaci&oacute;n de la compra en el domicilio de entrega.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La entrega de la compra se realizar&aacute; en la direcci&oacute;n indicada por el cliente, debiendo firmar el receptor el albar&aacute;n de entrega correspondiente.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">4.- PAGO DE LA COMPRAVENTA.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Estas son las formas de pago disponibles en <span style="color: #ff0000;">www..........................................</span> :<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Presupuesto:</strong> Elija esta opci&oacute;n, no estar&aacute; formalizando una compra, sino realizando un presupuesto.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <span style="text-decoration: underline;"><span style="color: #ff0000;"><strong>Contado:</strong> Pago en efectivo o con tarjeta al recoger los productos en el domicilio social de la empresa. V&aacute;lido solamente con la modalidad de env&iacute;o "recogida en empresa".<br /><br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Tarjeta de cr&eacute;dito:</strong> El pago con tarjeta es el sistema m&aacute;s f&aacute;cil y r&aacute;pido. Seleccione el tipo de tarjeta y escriba el n&uacute;mero, caducidad y c&oacute;digo CVC.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <span style="color: #ff0000;"><span style="text-decoration: underline;"><strong>Reembolso:</strong> Pago en el momento de la entrega. S&oacute;lo disponible para los pedidos nacionales</span>.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Transferencia bancaria:</strong> Pago del importe total mediante una transferencia bancaria a la cuenta de la entidad bancaria <span style="color: #ff0000;">.................................................</span> de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span>.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">5.- DEVOLUCIONES.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> cumple con la normativa vigente. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> aceptar&aacute; la devoluci&oacute;n de un producto, siempre dentro del plazo de 7 d&iacute;as h&aacute;biles desde la recepci&oacute;n del mismo. Una vez recibido y comprobado que se encuentra en el mismo estado en que se envi&oacute; y con el embalaje original se proceder&aacute; a su reembolso. Para devolver un producto es necesario que se ponga el receptor en contacto previamente con LA EMPRESA mediante e-mail a <span style="text-decoration: underline;"><span style="color: #ff0000;">devolucion@..........................</span>.</span>, para que se le indique la forma de env&iacute;o adecuada.<br /><br /></span></span><span style="text-decoration: underline;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">LA EMPRESA dispone de Hojas de Reclamaciones a disposici&oacute;n del consumidor.<br /><br /></span></span></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">6.- PROTECCI&Oacute;N DE DATOS DE CAR&Aacute;CTER PERSONAL.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> se encuentra especialmente interesada en la seguridad y confidencialidad de los datos aportados por sus clientes. En este sentido, <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se compromete a la protecci&oacute;n de los datos personales de los usuarios del sitio web <span style="color: #ff0000;">www.......................................................................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La pol&iacute;tica de protecci&oacute;n de los datos personales se extiende a todo lo relativo a la recogida y uso de la informaci&oacute;n proporcionada a trav&eacute;s de la presente p&aacute;gina WEB. La compra ON LINE requiere que el usuario facilite sus datos personales con el fin de poder tramitar y hacerle llegar su pedido.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El servidor de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> env&iacute;a al ordenador del cliente un fichero (denominado cookie) con el objeto de ejecutar los procesos de compra. La duraci&oacute;n de la cookie es temporal y es eliminada del ordenador del usuario una vez finaliza la sesi&oacute;n y se cierra el navegador. La utilizaci&oacute;n de estas cookies es necesaria para la prestaci&oacute;n del servicio. En caso de que el usuario tenga desactivada la ejecuci&oacute;n de este procedimiento no ser&aacute; posible la prestaci&oacute;n del servicio de compra online.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los datos facilitados por los clientes de este servicio pasan a formar parte de un fichero automatizado de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span>, frente al cual el usuario podr&aacute;, en cualquier momento, ejercitar los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n conforme a lo establecido en la Ley Org&aacute;nica 15/99, de 13 de Diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para el ejercicio de estos derechos el usuario podr&aacute; enviar un correo a la siguiente direcci&oacute;n e-mail: <span style="color: #ff0000;">lopd@&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.......................&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Igualmente, el usuario podr&aacute; dirigirse a la siguiente direcci&oacute;n postal:</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;"><span style="text-decoration: underline;">LA EMPRESA, c/ &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;, n&ordm;&hellip; , CP-CIUDAD.<br /><br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los datos facilitados por el usuario ser&aacute;n tratados de manera estrictamente confidencial. En caso de producirse cambios en la Pol&iacute;tica de Protecci&oacute;n de Datos expuesta, los usuarios ser&aacute;n debidamente informados a trav&eacute;s de la presente WEB.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">7.- LEGISLACI&Oacute;N APLICABLE. SUMISI&Oacute;N A FUERO.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />El presente contrato se regir&aacute; por la legislaci&oacute;n espa&ntilde;ola que ser&aacute; de aplicaci&oacute;n en lo no dispuesto en este contrato en materia de interpretaci&oacute;n, validez y ejecuci&oacute;n.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Las partes renuncian expresamente al fuero que les pudiera corresponder y se someten expresamente a los &oacute;rganos jurisdiccionales de <span style="text-decoration: underline;"><span style="color: #ff0000;">CIUDAD</span></span> la resoluci&oacute;n de cualquier controversia que pudiera surgir de la interpretaci&oacute;n o ejecuci&oacute;n de las presentes condiciones contractuales.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">8.- ANULACIONES.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> se reserva el derecho a anular los pedidos realizados en base a erratas, o pedidos con direcci&oacute;n de env&iacute;o incorrecta o incompleta. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> informar&aacute; al cliente siempre que sea posible.</span></span></p>', 'condiciones-de-venta'),
(3, 2, 'Condiciones de venta', '', '', '<p style="text-align: justify;"><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #888888;"><span style="font-size: 12pt;">Condiciones generales de contrataci&oacute;n.</span></span></span></span></strong></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Las presentes Condiciones Generales de Contrataci&oacute;n regular&aacute;n expresamente las relaciones comerciales que surjan entre <span style="color: #ff0000;"><span style="text-decoration: underline;">LA EMPRESA</span> </span>y los usuarios o clientes que contraten los productos ofrecidos a trav&eacute;s del sitio web <span style="color: #ff0000;">www...........................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Las mismas han sido elaboradas de conformidad con la normativa vigente en la materia y concretamente, de acuerdo con lo establecido en los siguientes textos legales:</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em><br />&bull; Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Informaci&oacute;n y de Comercio Electr&oacute;nico y Ley 56/2007 de 28 de diciembre de Medidas de Impulso a la Sociedad de la informaci&oacute;n.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 32/2003, de 3 de noviembre, General de Telecomunicaciones y Real Decreto 1906/1999, de 17 de diciembre por el que se regula la contrataci&oacute;n telef&oacute;nica o electr&oacute;nica con condiciones generales.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 7/1998, de 13 de abril, sobre Condiciones Generales de Contrataci&oacute;n.</em></span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em><br />&bull; Real Decreto-Legislativo 1/2007 de 16 de noviembre, aprobatorio del Texto refundido de la Ley general para la defensa de Consumidores y Usuarios, y Ley 43/2007 de 3 de diciembre de protecci&oacute;n de los consumidores en la contrataci&oacute;n de bienes con oferta de restituci&oacute;n de precio.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 7/1996, de 15 de enero de Ordenaci&oacute;n del Comercio Minorista.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 59/2003, de 19 de diciembre sobre Firma Electr&oacute;nica.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 15/1999, de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter personal, <br /><br />&bull; Ley 25/2007 de 18 de octubre de conservaci&oacute;n de datos relativos a las comunicaciones electr&oacute;nicas y a las redes p&uacute;blicas de comunicaciones, y RD 172072007, de 21 de diciembre por el que se aprueba el Reglamento de desarrollo de la LOPD.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Reales Decretos 225/2006 de 24 de febrero y 103/2008 de 1 de febrero reguladores de las ventas a distancia y del registro de empresas de ventas a distancia, y Ley 22/2007 de 11 de julio, sobre comercializaci&oacute;n a distancia de servicios financieros destinados a los consumidores.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Estas Condiciones Generales de Compra han de complementarse con las Condiciones Generales de uso y navegaci&oacute;n fijadas para la p&aacute;gina WEB, as&iacute; como por cualesquiera otras Condiciones Particulares o espec&iacute;ficas de contrataci&oacute;n que pudieran establecerse en cada caso.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Tanto la navegaci&oacute;n como la adquisici&oacute;n de cualquiera de los productos de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> supone la aceptaci&oacute;n como usuario, sin reserva de ninguna clase, de todas y cada una de las subsiguientes Condiciones Generales de Contrataci&oacute;n as&iacute; como, en su caso, de las Condiciones Particulares o espec&iacute;ficas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> podr&aacute; en todo momento y sin previo aviso, modificar las presentes Condiciones Generales de Contrataci&oacute;n as&iacute; como las Condiciones Particulares que en su caso se incluyan, mediante la publicaci&oacute;n de dichas modificaciones en la propia WEB a fin de que puedan ser conocidas y nuevamente aceptadas por los usuarios.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="background-color: #ffffff;">2</span><strong>.-. INFORMACI&Oacute;N PREVIA A LA CONTRATACI&Oacute;N. <br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> informa que el proceso de compra de los productos ofrecidos en el sitio web www......................&nbsp; viene detallado expresamente en el apartado denominado Condiciones Generales.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Del mismo modo, el usuario o cliente puede tener acceso a las Condiciones Generales de uso y navegaci&oacute;n, y al apartado Pol&iacute;tica de Privacidad, a los cuales se puede acceder directamente a trav&eacute;s del link que se incluye en la p&aacute;gina principal o de inicio de la presente WEB.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El usuario declara conocer y aceptar de modo expreso lo recogido en los apartados anteriores.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El usuario declara que es mayor de edad y dispone de la capacidad legal necesaria para utilizar este sitio web de conformidad con las Condiciones Generales aqu&iacute; enunciadas, que comprende y entiende en su totalidad. El usuario se hace responsable de tratar de forma confidencial y custodiar adecuadamente las contrase&ntilde;as que le sean proporcionadas por <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> para acceder al sitio web, evitando el acceso a las mismas de terceras personas no autorizadas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Una vez efectuada la compra el usuario visualizar&aacute; la confirmaci&oacute;n de su pedido en pantalla, pudiendo imprimir &eacute;sta como comprobante de compra.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La confirmaci&oacute;n de pedido y el comprobante de compra (impresi&oacute;n que hace el usuario) no tendr&aacute;n validez como factura.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.- FORMALIZACI&Oacute;N DE LA COMPRAVENTA. <br /><br /></span></span></strong><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.1.- PRODUCTOS OFRECIDOS.</span></span></strong></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> mostrar&aacute; en cada momento los productos a la venta junto con sus caracter&iacute;sticas propias y su precio. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se reserva el derecho a decidir en cada momento, los productos que se ofrecen a los usuarios o clientes a trav&eacute;s del sitio web <span style="color: #ff0000;">www.............................................</span> &nbsp;De este modo, <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> podr&aacute; en cualquier momento adicionar nuevos productos a los incluidos en el mismo, los cuales se regir&aacute;n por lo dispuesto en las Condiciones Generales en vigor en ese momento. Asimismo <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se reserva el derecho a dejar de facilitar el acceso, en cualquier momento y sin previo aviso, de cualquiera de los productos ofrecidos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>3.2.- INDICACI&Oacute;N DE PRECIOS DE LOS PRODUCTOS.<br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />El precio de cada producto aparecer&aacute; en pantalla. Los precios en pantalla vendr&aacute;n indicados en euros e incluyen el correspondiente IMPUESTO SOBRE EL VALOR A&Ntilde;ADIDO (IVA) y cualquier otro impuesto que fuera de aplicaci&oacute;n. Los precios indicados en pantalla ser&aacute;n en todo momento los vigentes, salvo error tipogr&aacute;fico o cambio de precio por parte de la empresa.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.3.- DISPONIBILIDAD.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />La disponibilidad de cada producto depender&aacute; de la demanda de los clientes. </span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">www................................................</span> </span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">&nbsp;actualiza el stock con la mayor asiduidad posible. A&uacute;n as&iacute;, es posible que un producto que aparezca como disponible en la web, se haya agotado. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> avisar&aacute; al cliente mediante e-mail de esta situaci&oacute;n.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.4.- COSTES DE ENV&Iacute;O. <br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Al aceptar la compra se a&ntilde;adir&aacute;n al pedido los gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los gastos en concepto de embalaje, conservaci&oacute;n, transporte y entrega del pedido variar&aacute;n teniendo en cuenta los siguientes puntos:<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Provincia (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Regional (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Peninsular, Baleares y Canarias (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Ceuta, Melilla (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Europeo Prioritario (hasta 2 kg), <span style="color: #ff0000;"><span style="text-decoration: underline;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Internacional Prioritario (hasta 2 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Recogida en <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> : <span style="text-decoration: underline;"><span style="color: #ff0000;">0,00 euros</span></span>.<br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Pedidos nacionales superiores a <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span> sin gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos superiores al peso indicado <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se pondr&aacute; en contacto con el cliente para indicarle a cuanto ascienden los gastos de env&iacute;o.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.5.- HORARIOS DE ENTREGA DE LOS PEDIDOS.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Para los pedidos nacionales (peninsulares e insulares) se utiliza el servicio de mensajer&iacute;a de <span style="text-decoration: underline;"><span style="color: #ff0000;">MRW</span></span>. La entrega se realiza entre&nbsp; <span style="text-decoration: underline;"><span style="color: #ff0000;">24-48 horas</span></span>.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos internacionales se utilizar&aacute; el servicio de env&iacute;o prioritario de <span style="text-decoration: underline;"><span style="color: #ff0000;">Correos de Espa&ntilde;a</span></span>.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.6.- ENTREGA DEL PEDIDO.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />En el supuesto de que el cliente no pudiera estar presente en el momento de la entrega, el pedido ser&aacute; entregado a cualquier otra persona que se encuentre en el domicilio indicado y que sea mayor de 18 a&ntilde;os.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> entiende que el cliente que ha realizado el pedido autoriza a la persona que en ese momento est&aacute; en el hogar a recoger el pedido en su nombre. Por lo tanto, queda bajo la exclusiva responsabilidad del cliente autorizar a un tercero para la recepci&oacute;n y aceptaci&oacute;n de la compra en el domicilio de entrega.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La entrega de la compra se realizar&aacute; en la direcci&oacute;n indicada por el cliente, debiendo firmar el receptor el albar&aacute;n de entrega correspondiente.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">4.- PAGO DE LA COMPRAVENTA.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Estas son las formas de pago disponibles en <span style="color: #ff0000;">www..........................................</span> :<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Presupuesto:</strong> Elija esta opci&oacute;n, no estar&aacute; formalizando una compra, sino realizando un presupuesto.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <span style="text-decoration: underline;"><span style="color: #ff0000;"><strong>Contado:</strong> Pago en efectivo o con tarjeta al recoger los productos en el domicilio social de la empresa. V&aacute;lido solamente con la modalidad de env&iacute;o "recogida en empresa".<br /><br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Tarjeta de cr&eacute;dito:</strong> El pago con tarjeta es el sistema m&aacute;s f&aacute;cil y r&aacute;pido. Seleccione el tipo de tarjeta y escriba el n&uacute;mero, caducidad y c&oacute;digo CVC.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <span style="color: #ff0000;"><span style="text-decoration: underline;"><strong>Reembolso:</strong> Pago en el momento de la entrega. S&oacute;lo disponible para los pedidos nacionales</span>.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Transferencia bancaria:</strong> Pago del importe total mediante una transferencia bancaria a la cuenta de la entidad bancaria <span style="color: #ff0000;">.................................................</span> de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span>.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">5.- DEVOLUCIONES.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> cumple con la normativa vigente. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> aceptar&aacute; la devoluci&oacute;n de un producto, siempre dentro del plazo de 7 d&iacute;as h&aacute;biles desde la recepci&oacute;n del mismo. Una vez recibido y comprobado que se encuentra en el mismo estado en que se envi&oacute; y con el embalaje original se proceder&aacute; a su reembolso. Para devolver un producto es necesario que se ponga el receptor en contacto previamente con LA EMPRESA mediante e-mail a <span style="text-decoration: underline;"><span style="color: #ff0000;">devolucion@..........................</span>.</span>, para que se le indique la forma de env&iacute;o adecuada.<br /><br /></span></span><span style="text-decoration: underline;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">LA EMPRESA dispone de Hojas de Reclamaciones a disposici&oacute;n del consumidor.<br /><br /></span></span></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">6.- PROTECCI&Oacute;N DE DATOS DE CAR&Aacute;CTER PERSONAL.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> se encuentra especialmente interesada en la seguridad y confidencialidad de los datos aportados por sus clientes. En este sentido, <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se compromete a la protecci&oacute;n de los datos personales de los usuarios del sitio web <span style="color: #ff0000;">www.......................................................................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La pol&iacute;tica de protecci&oacute;n de los datos personales se extiende a todo lo relativo a la recogida y uso de la informaci&oacute;n proporcionada a trav&eacute;s de la presente p&aacute;gina WEB. La compra ON LINE requiere que el usuario facilite sus datos personales con el fin de poder tramitar y hacerle llegar su pedido.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El servidor de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> env&iacute;a al ordenador del cliente un fichero (denominado cookie) con el objeto de ejecutar los procesos de compra. La duraci&oacute;n de la cookie es temporal y es eliminada del ordenador del usuario una vez finaliza la sesi&oacute;n y se cierra el navegador. La utilizaci&oacute;n de estas cookies es necesaria para la prestaci&oacute;n del servicio. En caso de que el usuario tenga desactivada la ejecuci&oacute;n de este procedimiento no ser&aacute; posible la prestaci&oacute;n del servicio de compra online.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los datos facilitados por los clientes de este servicio pasan a formar parte de un fichero automatizado de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span>, frente al cual el usuario podr&aacute;, en cualquier momento, ejercitar los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n conforme a lo establecido en la Ley Org&aacute;nica 15/99, de 13 de Diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para el ejercicio de estos derechos el usuario podr&aacute; enviar un correo a la siguiente direcci&oacute;n e-mail: <span style="color: #ff0000;">lopd@&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.......................&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Igualmente, el usuario podr&aacute; dirigirse a la siguiente direcci&oacute;n postal:</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;"><span style="text-decoration: underline;">LA EMPRESA, c/ &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;, n&ordm;&hellip; , CP-CIUDAD.<br /><br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los datos facilitados por el usuario ser&aacute;n tratados de manera estrictamente confidencial. En caso de producirse cambios en la Pol&iacute;tica de Protecci&oacute;n de Datos expuesta, los usuarios ser&aacute;n debidamente informados a trav&eacute;s de la presente WEB.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">7.- LEGISLACI&Oacute;N APLICABLE. SUMISI&Oacute;N A FUERO.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />El presente contrato se regir&aacute; por la legislaci&oacute;n espa&ntilde;ola que ser&aacute; de aplicaci&oacute;n en lo no dispuesto en este contrato en materia de interpretaci&oacute;n, validez y ejecuci&oacute;n.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Las partes renuncian expresamente al fuero que les pudiera corresponder y se someten expresamente a los &oacute;rganos jurisdiccionales de <span style="text-decoration: underline;"><span style="color: #ff0000;">CIUDAD</span></span> la resoluci&oacute;n de cualquier controversia que pudiera surgir de la interpretaci&oacute;n o ejecuci&oacute;n de las presentes condiciones contractuales.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">8.- ANULACIONES.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> se reserva el derecho a anular los pedidos realizados en base a erratas, o pedidos con direcci&oacute;n de env&iacute;o incorrecta o incompleta. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> informar&aacute; al cliente siempre que sea posible.</span></span></p>', 'condiciones-de-venta');
INSERT INTO `ps_cms_lang` (`id_cms`, `id_lang`, `meta_title`, `meta_description`, `meta_keywords`, `content`, `link_rewrite`) VALUES
(4, 3, 'Política de privacidad', '', '', '<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="font-size: 12pt;"><span style="color: #888888;"><strong>Pol&iacute;tica de privacidad<br /><br /></strong></span></span>La pol&iacute;tica de privacidad del portal <span style="color: #ff0000;">www..............................................<span style="color: #000000;">, </span></span>informa a sus usuarios de las cl&aacute;usulas expuestas a continuaci&oacute;n, a fin de que &eacute;stos puedan decidir libre y voluntariamente si desean facilitar los datos personales que se les pueda solicitar a trav&eacute;s de la utilizaci&oacute;n de los distintos servicios que ofrecemos, teniendo en cuenta que estos datos personales ser&aacute;n estrictamente imprescindibles para poder proporcionarle el servicio que ha seleccionado.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>LOPD y LSSI-CE<br /><br /></strong>En cumplimiento de lo establecido en la LOPD 15/1999, de 13 de diciembre, le informamos que sus datos personales quedar&aacute;n incorporados y ser&aacute;n tratados en los ficheros de&nbsp;<span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, con el fin de poderle ofrecer nuestros servicios. Asimismo, le informamos de la posibilidad de ejercer los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n de sus datos de car&aacute;cter personal, dirigi&eacute;ndose por escrito a la direcci&oacute;n;&nbsp;&nbsp;<span style="color: #ff0000;">........................................................</span>, o bien, enviando un correo electr&oacute;nico a&nbsp;<span style="color: #ff0000;">lopd@............................................... <br /><br /></span>Usted&nbsp;presta su consentimiento para que <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> le pueda remitir comunicaciones publicitarias o promoci&oacute;nales por correo electr&oacute;nico u otro medio de comunicaci&oacute;n equivalente, en los t&eacute;rminos establecidos por la Ley 34/2002, de Servicios de la Sociedad de la Informaci&oacute;n y de Comercio Electr&oacute;nico. Este consentimiento podr&aacute; ser revocado en cualquier momento, dirigi&eacute;ndose a<strong> </strong><span style="text-decoration: underline;"><span style="color: #ff0000;">EL</span></span><strong> </strong><span style="text-decoration: underline;"><span style="color: #ff0000;">PROPIETARIO</span></span><strong>,</strong> en los datos anteriormente facilitados.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>Autenticidad de los datos<br /><br /></strong>El usuario garantiza la autenticidad de todos aquellos datos que comunique a trav&eacute;s de <span style="color: #ff0000;">www......................................................................</span> y mantendr&aacute; actualizada la informaci&oacute;n que facilite, de forma que responda en todo momento a su situaci&oacute;n real, siendo el &uacute;nico responsable de las manifestaciones falsas o inexactas que realice, as&iacute; como de los perjuicios que cause por ello a <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> o a terceros.<br /><br /><strong>Recogida de informaci&oacute;n<br /><br /></strong>Se recoger&aacute; por v&iacute;a electr&oacute;nica solo la informaci&oacute;n que nos sea imprescindible a nivel t&eacute;cnico para poder ofrecerle un servicio satisfactorio. Cuando se conecta, analizamos exclusivamente el tipo de navegador y el juego de caracteres que est&aacute; utilizando y su versi&oacute;n con el objetivo de que la visualizaci&oacute;n del portal <span style="color: #ff0000;">www.............................................</span> sea correcta. El acceso o utilizaci&oacute;n de este sitio web por parte del usuario implica su consentimiento y aceptaci&oacute;n de todas las condiciones expuestas.<br /><br /><strong>Seguridad y claves de acceso<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, mantiene los niveles de seguridad de protecci&oacute;n de datos de car&aacute;cter personal conforme al Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley 15/1999, de 13 de diciembre, de protecci&oacute;n de datos personales y se compromete a cumplir con el deber de secreto y confidencialidad respecto a los datos personales contenidos en el fichero automatizado de acuerdo a la legislaci&oacute;n aplicable.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Se han establecido los medios seguros a nivel t&eacute;cnico para evitar alteraci&oacute;n, uso indebido y acceso no autorizado de los datos que el usuario nos facilite en nuestro portal.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Es responsabilidad del usuario custodiar y actualizar debidamente las claves de usuario y contrase&ntilde;as. El usuario no facilitar&aacute; el uso de su propia clave de usuario y contrase&ntilde;a a terceros. Ser&aacute; responsabilidad de &eacute;l si as&iacute; lo hace. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no se har&aacute; responsable si hubiese alg&uacute;n da&ntilde;o o perjuicio por p&eacute;rdida de la clave de acceso como consecuencia de la sustracci&oacute;n por un tercero.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> se reserva el derecho de modificar en cualquier momento el acceso al portal.<br /><br />Uso del portal <span style="color: #ff0000;">www..........................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span><strong>.</strong> no puede asumir ninguna responsabilidad derivada del uso incorrecto, inapropiado o il&iacute;cito de la informaci&oacute;n en las p&aacute;ginas de Internet de <span style="color: #ff0000;"><span style="text-decoration: underline;">EL PROPIETARIO<br /><br /></span></span>Con los l&iacute;mites establecidos en la ley, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no asume ninguna responsabilidad derivada de la falta de veracidad, integridad, actualizaci&oacute;n y/o precisi&oacute;n de los datos o informaciones que se contienen en sus p&aacute;ginas de Internet. Los contenidos e informaci&oacute;n de las p&aacute;ginas de Internet de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> est&aacute;n elaborados por profesionales debidamente cualificados para el ejercicio de su profesi&oacute;n. Sin embargo, los contenidos e informaci&oacute;n no vinculan, ni constituyen opiniones, consejos o asesoramiento legal de ning&uacute;n tipo, pues se trata meramente de un servicio ofrecido con car&aacute;cter informativo y divulgativo.<br /><br />Las p&aacute;ginas de Internet de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> pueden contener enlaces (links) a otras p&aacute;ginas de terceros. Por lo tanto, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no podr&aacute; asumir responsabilidades por el contenido que pueda aparecer en p&aacute;ginas de terceros.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Propiedad intelectual e industrial<br /><br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> es propietario del nombre de dominio y del portal <span style="color: #ff0000;">www...................................................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El sitio web <span style="color: #ff0000;">www............................................</span> en su totalidad, incluyendo su dise&ntilde;o, estructura, distribuci&oacute;n, respuesta a las consultas realizadas por los usuarios, textos, contenidos, logotipos, botones, im&aacute;genes, dibujos, c&oacute;digo fuente, as&iacute; como todos los derechos de propiedad industrial e intelectual y cualquier otro signo distintivo, pertenecen a <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> o, en su caso, a las personas o empresas que figuran como autores o titulares de los derechos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Queda prohibida la reproducci&oacute;n o explotaci&oacute;n total o parcial, por cualquier medio, de los contenidos del portal de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> para usos diferentes de la leg&iacute;tima informaci&oacute;n o contrataci&oacute;n por los usuarios de los servicios ofrecidos.<br /><br /><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> ha obtenido la informaci&oacute;n y los materiales incluidos en la web de fuentes consideradas como fiables y si bien se han tomado medidas razonables para asegurarse que la informaci&oacute;n contenida sea la correcta, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no puede garantizar que en todo momento y circunstancia dicha informaci&oacute;n sea exacta, completa, actualizada y consecuentemente, no debe confiarse en ella como si lo fuera. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> declina expresamente cualquier responsabilidad por error u omisi&oacute;n en la informaci&oacute;n contenida en las p&aacute;ginas de esta web.<br /><br /><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> se reserva la facultad de modificar, suspender, cancelar o restringir el contenido de la web, los v&iacute;nculos o la informaci&oacute;n obtenida a trav&eacute;s de ella, sin necesidad de previo aviso. En ning&uacute;n caso, asume responsabilidad alguna como consecuencia de la incorrecta utilizaci&oacute;n de la web que pueda llevar a cabo el usuario, tanto de la informaci&oacute;n como de los servicios en ella contenidos.<br /><br />En ning&uacute;n caso <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, sus directores y/o apoderados, empleados y, en general, el personal autorizado ser&aacute;n responsables de cualquier tipo de perjuicio, p&eacute;rdidas, reclamaciones o gastos de ning&uacute;n tipo, tanto si proceden, directa o indirectamente, del uso y/o difusi&oacute;n de la web o de la informaci&oacute;n adquirida o accedida por o a trav&eacute;s de &eacute;sta, o de sus virus inform&aacute;ticos, de fallos operativos o de interrupciones en el servicio de transmisi&oacute;n o de fallos en la l&iacute;nea en el uso de la web, tanto por conexi&oacute;n directa como por v&iacute;nculo u otro medio, constituyendo a todos los efectos legales un aviso a cualquier usuario de que estas posibilidades y eventos pueden ocurrir.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no se hace responsable de las webs no propias a las que se pueda acceder mediante v&iacute;nculos o enlaces links o de cualquier contenido puesto a disposici&oacute;n de terceros. Cualquier uso de un v&iacute;nculo o acceso a una web no propia ser&aacute; realizado por voluntad y a riesgo y ventura exclusiva del usuario. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no recomienda ni garantiza ninguna de las informaciones obtenidas por o a trav&eacute;s de un v&iacute;nculo, ni se responsabiliza de ninguna p&eacute;rdida, reclamaci&oacute;n o perjuicio derivado del uso o mal uso de un v&iacute;nculo, o de la informaci&oacute;n obtenida a trav&eacute;s de &eacute;l, incluyendo otros v&iacute;nculos o webs, de la interrupci&oacute;n en el servicio o en el acceso, o del intento de usar o usar mal un v&iacute;nculo, tanto al conectar a la web de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> como al acceder a la informaci&oacute;n de otras webs desde la misma.<br /><br /><strong>Cookies y Spam<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Con la finalidad de facilitar la navegaci&oacute;n en nuestro portal, el usuario consiente el uso de cookies y si decide acceder sin identificarse a&ntilde;adiremos a la cookie del usuario los campos de email y password.<br /><br /></span></span><span><span style="font-size: 10pt;">El usuario tiene la posibilidad de configurar su navegador para ser avisado en pantalla de la recepci&oacute;n de cookies y para impedir su instalaci&oacute;n en su disco duro. Para utilizar el sitio web no es necesario que el usuario permita la instalaci&oacute;n de las cookies enviadas por <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no utiliza t&eacute;cnicas de "spamming" y &uacute;nicamente tratar&aacute; los datos que el usuario transmita mediante los formularios electr&oacute;nicos habilitados en este sitio web o mensajes de correo electr&oacute;nico.<br /><br /></span><span style="font-size: 10pt;"><strong>Compromiso<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> se reserva el derecho a modificar la presente pol&iacute;tica de protecci&oacute;n de datos con objeto de adaptarla a las posibles novedades legislativas, as&iacute; como a las que pudieran derivarse de los c&oacute;digos tipo existentes en la materia o por motivos estrat&eacute;gicos o corporativos. Todo ello, sin perjuicio de reclamar el consentimiento necesario de los afectados para realizar los tratamientos requeridos, cuando &eacute;ste no se considerase otorgado con arreglo a los t&eacute;rminos de la presente pol&iacute;tica de protecci&oacute;n de datos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> tiene como objetivo principal garantizar la privacidad y confidencialidad de los datos de car&aacute;cter personal de los usuarios, recabados a trav&eacute;s de cualquier sistema que permita la trasmisi&oacute;n de datos. Por consiguiente, manifiesta su compromiso de cumplimiento con la legislaci&oacute;n que en esta materia se encuentre vigente en cada momento.<br /><br /><strong>Ley aplicable y jurisdicci&oacute;n<br /><br /></strong>Las presentes condiciones generales se rigen por la Legislaci&oacute;n espa&ntilde;ola, siendo competentes los Juzgados y Tribunales espa&ntilde;oles para conocer de cuantas cuestiones se susciten sobre la interpretaci&oacute;n, aplicaci&oacute;n y cumplimiento de las mismas. El usuario, por virtud de su aceptaci&oacute;n a las condiciones generales recogidas en este documento, renuncia expresamente a cualquier fuero que, por aplicaci&oacute;n de la Ley de Enjuiciamiento Civil vigente, pudiera corresponderle.</span></span></p>', 'politica-de-privacidad'),
(5, 3, 'Pago seguro', '', '', '<h1><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;"><span style="font-size: 12pt;"><span style="color: #808080;"><span style="background-color: #ffffff;">Pago seguro</span>.</span></span></span></span></h1>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">&nbsp;</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;"><span style="color: #ff0000;"><span style="text-decoration: underline;">EL PROPIETARIO</span></span> de la tienda informa que la transacci&oacute;n de datos online entre la tienda y sus cliente, est&aacute; encriptada con&nbsp; <span style="color: #ff0000;">RapipSSL</span>.</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">&nbsp;</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">Que los pagos con Visa se ofrecen a trav&eacute;s de los t&eacute;rminos establecidos por las entidades <span style="color: #ff0000;">Paypal</span> y la <span style="color: #ff0000;">entidad bancaria</span>.</span></span></p>', 'pago-seguro'),
(1, 4, 'Condiciones de entrega', '', '', '<p style="text-align: justify;"><strong><span style="color: #888888;"><span style="font-family: verdana,geneva;"><span style="font-size: 12pt;">Condiciones de entrega.</span></span></span></strong></p>\r\n<h1><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #000000;">Costes de env&iacute;o. </span></span></span></strong></h1>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Al aceptar la compra se a&ntilde;adir&aacute;n al pedido los gastos de env&iacute;o.</span></span></p>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los gastos en concepto de embalaje, conservaci&oacute;n, transporte y entrega del pedido variar&aacute;n teniendo en cuenta los siguientes puntos:<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Provincia (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Regional (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Peninsular, Baleares y Canarias (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ceuta, Melilla (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Europeo Prioritario (hasta 2 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros.<br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Internacional Prioritario (hasta 2 kg), <span style="color: #ff0000;"><span style="text-decoration: underline;">00,00 euros</span>.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Recogida en <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> : <span style="text-decoration: underline;"><span style="color: #ff0000;">0,00 euros</span></span>. Restar del pedido.</span></span></p>\r\n<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Pedidos nacionales superiores a <span style="text-decoration: underline;"><span style="color: #ff0000;">000,00 euros</span></span> sin gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos superiores al peso indicado <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se pondr&aacute; en contacto con el cliente para indicarle a cuanto ascienden los gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>Horarios de entrega de los pedidos.<br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para los pedidos nacionales (peninsulares e insulares) se utiliza el servicio de mensajer&iacute;a de <span style="text-decoration: underline;"><span style="color: #ff0000;">MRW</span></span>. La entrega se realiza entre&nbsp; 24-48 horas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos internacionales se utilizar&aacute; el servicio de env&iacute;o prioritario de <span style="text-decoration: underline;"><span style="color: #ff0000;">Correos de Espa&ntilde;a</span>.</span></span></span></p>', 'condiciones-de-entrega'),
(2, 4, 'Condiciones de uso', '', '', '<p><strong><span style="background-color: #888888;"><span style="font-size: 14pt;"><span style="color: #888888;"><span style="background-color: #ffffff;">Condiciones de uso</span></span></span></span></strong></p>\r\n<p><br />En cumplimiento de la Ley 34/2002 de servicios de la sociedad de la informaci&oacute;n y de comercio electr&oacute;nico (BOE, n&ordm; 166, de 12 de Julio de 2002) exponemos p&uacute;blicamente los datos de la empresa a la que se refiere esta Web.</p>\r\n<p><br />Empresa :&nbsp; <span style="text-decoration: underline;">EL PROPIETARIO <br /></span>N&uacute;mero de Identificaci&oacute;n Fiscal : ................................................<br />Direcci&oacute;n: ..............................................................................<br />Correo electr&oacute;nico : admin@.......................................................<br />Tel&eacute;fono de contacto :<strong>&nbsp;&nbsp;</strong>............................................................</p>\r\n<p><strong><br />CONDICIONES GENERALES DE USO DEL SITIO WEB<br /></strong>.........................................................................................................(EN ADELANTE <span style="text-decoration: underline;">EL PROPIETARIO</span> ), con domicilio a efectos de notificaciones en...................................................................................................., con CIF ........................................................., pone a disposici&oacute;n en su sitio web www.................................. determinados contenidos de car&aacute;cter informativo sobre sus actividades. Las presentes condiciones generales rigen &uacute;nica y exclusivamente el uso del sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span>&nbsp;por parte de los USUARIOS que accedan al mismo. Las presentes condiciones generales se le exponen al USUARIO en el sitio web www.................................. en todas y cada una de las p&aacute;ginas, para que las lea, las imprima, archive y acepte a trav&eacute;s de internet y se encuentre plenamente informado.</p>\r\n<p><br />El acceso al sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;implica sin reservas la aceptaci&oacute;n de las presentes condiciones generales de uso que el USUARIO afirma comprender en su totalidad. El USUARIO se compromete no a utilizar el sitio web y los servicios que se ofrecen en el mismo para la realizaci&oacute;n de actividades contrarias a la ley y a respetar en todo momento las presentes condiciones generales.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>PRIMERA.- <br /></strong>El sitio web de www...................................................... ha sido realizado, por un lado, con el fin de poner a disposici&oacute;n de terceros informaci&oacute;n sobre sus actividades, as&iacute; como poder contactar con &eacute;l, para solicitarle informaci&oacute;n adicional y, por otro lado, poner a disposici&oacute;n de los usuarios la posibilidad de comprar los productos que se ofrecen. La solicitud de los servicios o art&iacute;culos que se ofrecen para su compra en el sitio web, se regir&aacute;n por las condiciones generales de contrataci&oacute;n espec&iacute;ficas.</p>\r\n<p>&nbsp;</p>\r\n<p><br /><strong>SEGUNDA.- CONDICIONES DE ACCESO Y USO<br /></strong></p>\r\n<p><br /><strong>2.1.-</strong> La utilizaci&oacute;n del sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span> , no conlleva la obligatoriedad de inscripci&oacute;n del USUARIO. Las condiciones de acceso y uso del presente sitio web se rigen estrictamente por la legalidad vigente y por el principio de buena fe, comprometi&eacute;ndose el USUARIO a realizar un buen uso de la web. Quedan prohibidos todos los actos que vulneren la legalidad, derechos o intereses de terceros: derecho a la intimidad, protecci&oacute;n de datos, propiedad intelectual etc. Expresamente <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;proh&iacute;be los siguientes actos:</p>\r\n<p><br /><strong>2.1.1.-</strong> Realizar acciones que puedan producir en el sitio web o a trav&eacute;s del mismo por cualquier medio cualquier tipo de da&ntilde;o a los sistemas de <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;o a terceros.</p>\r\n<p><br /><strong>2.1.2.-</strong> Realizar sin la debida autorizaci&oacute;n cualquier tipo de publicidad o informaci&oacute;n comercial directamente o de forma encubierta, el env&iacute;o de correos masivos (&ldquo;spaming&rdquo;) o env&iacute;o de grandes mensajes con el fin de bloquear servidores de la red (&ldquo;mail bombing&rdquo;).</p>\r\n<p><br /><strong>2.2.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;podr&aacute; interrumpir en cualquier momento el acceso a su sitio web, si detecta un uso contrario a la legalidad, la buena fe o a las presentes condiciones generales (ver cl&aacute;usula quinta).</p>\r\n<p><strong><br />TERCERA.- CONTENIDOS:</strong> <br />Los contenidos incorporados a este sitio web han sido elaborados e incluidos por:</p>\r\n<p><br /><strong>3.1.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span>&nbsp; utilizando fuentes internas y externas, de tal modo que <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;&uacute;nicamente se hace responsable por los contenidos elaborados de forma interna.</p>\r\n<p><br /><strong>3.2.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;se reserva el derecho a modificar en cualquier momento los contenidos existentes en su sitio web. <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;no asegura ni se responsabiliza del correcto funcionamiento de los enlaces a sitios web de terceros que figuren en www...............................................</p>\r\n<p><br />Adem&aacute;s, a trav&eacute;s del sitio web de <span style="text-decoration: underline;">EL PROPIETARIO </span>, se ponen a disposici&oacute;n del usuario servicios gratuitos y de pago ofrecidos por terceros ajenos y que se regir&aacute;n por las condiciones particulares de cada uno de ellos. <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;no garantiza la veracidad, exactitud o actualidad de los contenidos y servicios ofrecidos por terceros y queda expresamente exento de todo tipo de responsabilidad por los da&ntilde;os y perjuicios que puedan derivarse de la falta de exactitud de estos contenidos y servicios.</p>\r\n<p><br /><strong>CUARTA.- RESPONSABILIDAD<br /></strong><strong><br />4.1.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;en ning&uacute;n caso ser&aacute; responsable de:</p>\r\n<p><br /><strong>4.1.1.-</strong> Los fallos e incidencias que pudieran producirse en las comunicaciones, borrado o transmisiones incompletas, de manera que no se garantiza que los servicios del sitio web est&eacute;n constantemente operativos.</p>\r\n<p><br /><strong>4.1.2.-</strong> De la producci&oacute;n de cualquier tipo de da&ntilde;o que los USUARIOS o terceros pudiesen ocasionar en el sitio web.</p>\r\n<p><br /><strong>4.1.3.-</strong> De la fiabilidad y veracidad de las informaciones introducidas por terceros en el sitio web, bien directamente, bien a trav&eacute;s de enlaces o links. Asimismo, <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;colaborar&aacute; y notificar&aacute; a la autoridad competente estas incidencias en el momento en que tenga conocimiento fehaciente de que los da&ntilde;os ocasionados constituyan cualquier tipo de actividad il&iacute;cita.</p>\r\n<p><br /><strong>4.2.-</strong> <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;se reserva el derecho a suspender el acceso sin previo aviso de forma discrecional y con car&aacute;cter definitivo o temporal hasta el aseguramiento de la efectiva responsabilidad de los da&ntilde;os que pudieran producirse. Asimismo, <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;colaborar&aacute; y notificar&aacute; a la autoridad competente estas incidencias en el momento en que tenga conocimiento fehaciente de que los da&ntilde;os ocasionados constituyan cualquier tipo de actividad il&iacute;cita.</p>\r\n<p><strong><br />QUINTA.- DERECHOS DE AUTOR Y MARCA.- <br /></strong>El sitio web de <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;(los contenidos propios, la programaci&oacute;n y el dise&ntilde;o del sitio web) se encuentra plenamente protegido por los derechos de autor, quedando expresamente prohibida toda reproducci&oacute;n, comunicaci&oacute;n, distribuci&oacute;n y transformaci&oacute;n de los referidos elementos protegidos, salvo consentimiento expreso de <span style="text-decoration: underline;">EL PROPIETARIO</span> . Los materiales, tanto gr&aacute;ficos como escritos, enviados por los usuarios a trav&eacute;s de los medios que se ponen a su disposici&oacute;n en el sitio web, son propiedad del usuario que afirma al enviarlos su leg&iacute;tima autor&iacute;a y cede los derechos de reproducci&oacute;n y distribuci&oacute;n al&nbsp; <span style="text-decoration: underline;">EL PROPIETARIO</span> .</p>\r\n<p><strong><br />SEXTA.- JURISDICCI&Oacute;N Y LEY APLICABLE.- <br /></strong>Las presentes condiciones generales se rigen por la legislaci&oacute;n espa&ntilde;ola. Son competentes para resolver toda controversia o conflicto que se derive de las presentes condiciones generales, los Juzgados de ................................., renunciando expresamente el USUARIO a cualquier otro fuero que pudiera corresponderle.</p>\r\n<p><strong><br />S&Eacute;PTIMA.- <br /></strong>En caso de que cualquier cl&aacute;usula del presente documento sea declarada nula, las dem&aacute;s cl&aacute;usulas seguir&aacute;n vigentes y se interpretar&aacute;n teniendo en cuenta la voluntad de las partes y la finalidad misma de las presentes condiciones. <span style="text-decoration: underline;">EL PROPIETARIO</span> &nbsp;podr&aacute; no ejercitar alguno de los derechos y facultades conferidos en este documento, lo que no implicar&aacute; en ning&uacute;n caso la renuncia a los mismos, salvo reconocimiento expreso por parte de <span style="text-decoration: underline;">EL PROPIETARIO</span>.&nbsp;</p>\r\n<p>&nbsp;</p>', 'condiciones-de-uso'),
(7, 4, 'Empresa y actividad', '', '', '<p><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong><span style="color: #888888;"><span style="font-size: 12pt;">Sobre<br /></span></span><br /><span style="color: #000000;">Presentaci&oacute;n comercial de su empresa o actividad.</span></strong></span></span></p>', 'empresa-y-actividad'),
(4, 4, 'Política de privacidad', '', '', '<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="font-size: 12pt;"><span style="color: #888888;"><strong>Pol&iacute;tica de privacidad<br /><br /></strong></span></span>La pol&iacute;tica de privacidad del portal <span style="color: #ff0000;">www..............................................<span style="color: #000000;">, </span></span>informa a sus usuarios de las cl&aacute;usulas expuestas a continuaci&oacute;n, a fin de que &eacute;stos puedan decidir libre y voluntariamente si desean facilitar los datos personales que se les pueda solicitar a trav&eacute;s de la utilizaci&oacute;n de los distintos servicios que ofrecemos, teniendo en cuenta que estos datos personales ser&aacute;n estrictamente imprescindibles para poder proporcionarle el servicio que ha seleccionado.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>LOPD y LSSI-CE<br /><br /></strong>En cumplimiento de lo establecido en la LOPD 15/1999, de 13 de diciembre, le informamos que sus datos personales quedar&aacute;n incorporados y ser&aacute;n tratados en los ficheros de&nbsp;<span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, con el fin de poderle ofrecer nuestros servicios. Asimismo, le informamos de la posibilidad de ejercer los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n de sus datos de car&aacute;cter personal, dirigi&eacute;ndose por escrito a la direcci&oacute;n;&nbsp;&nbsp;<span style="color: #ff0000;">........................................................</span>, o bien, enviando un correo electr&oacute;nico a&nbsp;<span style="color: #ff0000;">lopd@............................................... <br /><br /></span>Usted&nbsp;presta su consentimiento para que <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> le pueda remitir comunicaciones publicitarias o promoci&oacute;nales por correo electr&oacute;nico u otro medio de comunicaci&oacute;n equivalente, en los t&eacute;rminos establecidos por la Ley 34/2002, de Servicios de la Sociedad de la Informaci&oacute;n y de Comercio Electr&oacute;nico. Este consentimiento podr&aacute; ser revocado en cualquier momento, dirigi&eacute;ndose a<strong> </strong><span style="text-decoration: underline;"><span style="color: #ff0000;">EL</span></span><strong> </strong><span style="text-decoration: underline;"><span style="color: #ff0000;">PROPIETARIO</span></span><strong>,</strong> en los datos anteriormente facilitados.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>Autenticidad de los datos<br /><br /></strong>El usuario garantiza la autenticidad de todos aquellos datos que comunique a trav&eacute;s de <span style="color: #ff0000;">www......................................................................</span> y mantendr&aacute; actualizada la informaci&oacute;n que facilite, de forma que responda en todo momento a su situaci&oacute;n real, siendo el &uacute;nico responsable de las manifestaciones falsas o inexactas que realice, as&iacute; como de los perjuicios que cause por ello a <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> o a terceros.<br /><br /><strong>Recogida de informaci&oacute;n<br /><br /></strong>Se recoger&aacute; por v&iacute;a electr&oacute;nica solo la informaci&oacute;n que nos sea imprescindible a nivel t&eacute;cnico para poder ofrecerle un servicio satisfactorio. Cuando se conecta, analizamos exclusivamente el tipo de navegador y el juego de caracteres que est&aacute; utilizando y su versi&oacute;n con el objetivo de que la visualizaci&oacute;n del portal <span style="color: #ff0000;">www.............................................</span> sea correcta. El acceso o utilizaci&oacute;n de este sitio web por parte del usuario implica su consentimiento y aceptaci&oacute;n de todas las condiciones expuestas.<br /><br /><strong>Seguridad y claves de acceso<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, mantiene los niveles de seguridad de protecci&oacute;n de datos de car&aacute;cter personal conforme al Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley 15/1999, de 13 de diciembre, de protecci&oacute;n de datos personales y se compromete a cumplir con el deber de secreto y confidencialidad respecto a los datos personales contenidos en el fichero automatizado de acuerdo a la legislaci&oacute;n aplicable.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Se han establecido los medios seguros a nivel t&eacute;cnico para evitar alteraci&oacute;n, uso indebido y acceso no autorizado de los datos que el usuario nos facilite en nuestro portal.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Es responsabilidad del usuario custodiar y actualizar debidamente las claves de usuario y contrase&ntilde;as. El usuario no facilitar&aacute; el uso de su propia clave de usuario y contrase&ntilde;a a terceros. Ser&aacute; responsabilidad de &eacute;l si as&iacute; lo hace. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no se har&aacute; responsable si hubiese alg&uacute;n da&ntilde;o o perjuicio por p&eacute;rdida de la clave de acceso como consecuencia de la sustracci&oacute;n por un tercero.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> se reserva el derecho de modificar en cualquier momento el acceso al portal.<br /><br />Uso del portal <span style="color: #ff0000;">www..........................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span><strong>.</strong> no puede asumir ninguna responsabilidad derivada del uso incorrecto, inapropiado o il&iacute;cito de la informaci&oacute;n en las p&aacute;ginas de Internet de <span style="color: #ff0000;"><span style="text-decoration: underline;">EL PROPIETARIO<br /><br /></span></span>Con los l&iacute;mites establecidos en la ley, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no asume ninguna responsabilidad derivada de la falta de veracidad, integridad, actualizaci&oacute;n y/o precisi&oacute;n de los datos o informaciones que se contienen en sus p&aacute;ginas de Internet. Los contenidos e informaci&oacute;n de las p&aacute;ginas de Internet de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> est&aacute;n elaborados por profesionales debidamente cualificados para el ejercicio de su profesi&oacute;n. Sin embargo, los contenidos e informaci&oacute;n no vinculan, ni constituyen opiniones, consejos o asesoramiento legal de ning&uacute;n tipo, pues se trata meramente de un servicio ofrecido con car&aacute;cter informativo y divulgativo.<br /><br />Las p&aacute;ginas de Internet de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> pueden contener enlaces (links) a otras p&aacute;ginas de terceros. Por lo tanto, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no podr&aacute; asumir responsabilidades por el contenido que pueda aparecer en p&aacute;ginas de terceros.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Propiedad intelectual e industrial<br /><br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> es propietario del nombre de dominio y del portal <span style="color: #ff0000;">www...................................................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El sitio web <span style="color: #ff0000;">www............................................</span> en su totalidad, incluyendo su dise&ntilde;o, estructura, distribuci&oacute;n, respuesta a las consultas realizadas por los usuarios, textos, contenidos, logotipos, botones, im&aacute;genes, dibujos, c&oacute;digo fuente, as&iacute; como todos los derechos de propiedad industrial e intelectual y cualquier otro signo distintivo, pertenecen a <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> o, en su caso, a las personas o empresas que figuran como autores o titulares de los derechos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Queda prohibida la reproducci&oacute;n o explotaci&oacute;n total o parcial, por cualquier medio, de los contenidos del portal de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> para usos diferentes de la leg&iacute;tima informaci&oacute;n o contrataci&oacute;n por los usuarios de los servicios ofrecidos.<br /><br /><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> ha obtenido la informaci&oacute;n y los materiales incluidos en la web de fuentes consideradas como fiables y si bien se han tomado medidas razonables para asegurarse que la informaci&oacute;n contenida sea la correcta, <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no puede garantizar que en todo momento y circunstancia dicha informaci&oacute;n sea exacta, completa, actualizada y consecuentemente, no debe confiarse en ella como si lo fuera. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> declina expresamente cualquier responsabilidad por error u omisi&oacute;n en la informaci&oacute;n contenida en las p&aacute;ginas de esta web.<br /><br /><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> se reserva la facultad de modificar, suspender, cancelar o restringir el contenido de la web, los v&iacute;nculos o la informaci&oacute;n obtenida a trav&eacute;s de ella, sin necesidad de previo aviso. En ning&uacute;n caso, asume responsabilidad alguna como consecuencia de la incorrecta utilizaci&oacute;n de la web que pueda llevar a cabo el usuario, tanto de la informaci&oacute;n como de los servicios en ella contenidos.<br /><br />En ning&uacute;n caso <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span>, sus directores y/o apoderados, empleados y, en general, el personal autorizado ser&aacute;n responsables de cualquier tipo de perjuicio, p&eacute;rdidas, reclamaciones o gastos de ning&uacute;n tipo, tanto si proceden, directa o indirectamente, del uso y/o difusi&oacute;n de la web o de la informaci&oacute;n adquirida o accedida por o a trav&eacute;s de &eacute;sta, o de sus virus inform&aacute;ticos, de fallos operativos o de interrupciones en el servicio de transmisi&oacute;n o de fallos en la l&iacute;nea en el uso de la web, tanto por conexi&oacute;n directa como por v&iacute;nculo u otro medio, constituyendo a todos los efectos legales un aviso a cualquier usuario de que estas posibilidades y eventos pueden ocurrir.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no se hace responsable de las webs no propias a las que se pueda acceder mediante v&iacute;nculos o enlaces links o de cualquier contenido puesto a disposici&oacute;n de terceros. Cualquier uso de un v&iacute;nculo o acceso a una web no propia ser&aacute; realizado por voluntad y a riesgo y ventura exclusiva del usuario. <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no recomienda ni garantiza ninguna de las informaciones obtenidas por o a trav&eacute;s de un v&iacute;nculo, ni se responsabiliza de ninguna p&eacute;rdida, reclamaci&oacute;n o perjuicio derivado del uso o mal uso de un v&iacute;nculo, o de la informaci&oacute;n obtenida a trav&eacute;s de &eacute;l, incluyendo otros v&iacute;nculos o webs, de la interrupci&oacute;n en el servicio o en el acceso, o del intento de usar o usar mal un v&iacute;nculo, tanto al conectar a la web de <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> como al acceder a la informaci&oacute;n de otras webs desde la misma.<br /><br /><strong>Cookies y Spam<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Con la finalidad de facilitar la navegaci&oacute;n en nuestro portal, el usuario consiente el uso de cookies y si decide acceder sin identificarse a&ntilde;adiremos a la cookie del usuario los campos de email y password.<br /><br /></span></span><span><span style="font-size: 10pt;">El usuario tiene la posibilidad de configurar su navegador para ser avisado en pantalla de la recepci&oacute;n de cookies y para impedir su instalaci&oacute;n en su disco duro. Para utilizar el sitio web no es necesario que el usuario permita la instalaci&oacute;n de las cookies enviadas por <span style="text-decoration: underline;"><span style="color: #ff0000;">EL PROPIETARIO</span></span> no utiliza t&eacute;cnicas de "spamming" y &uacute;nicamente tratar&aacute; los datos que el usuario transmita mediante los formularios electr&oacute;nicos habilitados en este sitio web o mensajes de correo electr&oacute;nico.<br /><br /></span><span style="font-size: 10pt;"><strong>Compromiso<br /><br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> se reserva el derecho a modificar la presente pol&iacute;tica de protecci&oacute;n de datos con objeto de adaptarla a las posibles novedades legislativas, as&iacute; como a las que pudieran derivarse de los c&oacute;digos tipo existentes en la materia o por motivos estrat&eacute;gicos o corporativos. Todo ello, sin perjuicio de reclamar el consentimiento necesario de los afectados para realizar los tratamientos requeridos, cuando &eacute;ste no se considerase otorgado con arreglo a los t&eacute;rminos de la presente pol&iacute;tica de protecci&oacute;n de datos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">EL PROPIETARIO</span> tiene como objetivo principal garantizar la privacidad y confidencialidad de los datos de car&aacute;cter personal de los usuarios, recabados a trav&eacute;s de cualquier sistema que permita la trasmisi&oacute;n de datos. Por consiguiente, manifiesta su compromiso de cumplimiento con la legislaci&oacute;n que en esta materia se encuentre vigente en cada momento.<br /><br /><strong>Ley aplicable y jurisdicci&oacute;n<br /><br /></strong>Las presentes condiciones generales se rigen por la Legislaci&oacute;n espa&ntilde;ola, siendo competentes los Juzgados y Tribunales espa&ntilde;oles para conocer de cuantas cuestiones se susciten sobre la interpretaci&oacute;n, aplicaci&oacute;n y cumplimiento de las mismas. El usuario, por virtud de su aceptaci&oacute;n a las condiciones generales recogidas en este documento, renuncia expresamente a cualquier fuero que, por aplicaci&oacute;n de la Ley de Enjuiciamiento Civil vigente, pudiera corresponderle.</span></span></p>', 'politica-de-privacidad'),
(5, 4, 'Pago seguro', '', '', '<h1><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;"><span style="font-size: 12pt;"><span style="color: #808080;"><span style="background-color: #ffffff;">Pago seguro</span>.</span></span></span></span></h1>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">&nbsp;</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;"><span style="color: #ff0000;"><span style="text-decoration: underline;">EL PROPIETARIO</span></span> de la tienda informa que la transacci&oacute;n de datos online entre la tienda y sus cliente, est&aacute; encriptada con&nbsp; <span style="color: #ff0000;">RapipSSL</span>.</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">&nbsp;</span></span></p>\r\n<p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;">Que los pagos con Visa se ofrecen a trav&eacute;s de los t&eacute;rminos establecidos por las entidades <span style="color: #ff0000;">Paypal</span> y la <span style="color: #ff0000;">entidad bancaria</span>.</span></span></p>', 'pago-seguro');
INSERT INTO `ps_cms_lang` (`id_cms`, `id_lang`, `meta_title`, `meta_description`, `meta_keywords`, `content`, `link_rewrite`) VALUES
(3, 4, 'Condiciones de venta', '', '', '<p style="text-align: justify;"><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #888888;"><span style="font-size: 12pt;">Condiciones generales de contrataci&oacute;n.</span></span></span></span></strong></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Las presentes Condiciones Generales de Contrataci&oacute;n regular&aacute;n expresamente las relaciones comerciales que surjan entre <span style="color: #ff0000;"><span style="text-decoration: underline;">LA EMPRESA</span> </span>y los usuarios o clientes que contraten los productos ofrecidos a trav&eacute;s del sitio web <span style="color: #ff0000;">www...........................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Las mismas han sido elaboradas de conformidad con la normativa vigente en la materia y concretamente, de acuerdo con lo establecido en los siguientes textos legales:</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em><br />&bull; Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Informaci&oacute;n y de Comercio Electr&oacute;nico y Ley 56/2007 de 28 de diciembre de Medidas de Impulso a la Sociedad de la informaci&oacute;n.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 32/2003, de 3 de noviembre, General de Telecomunicaciones y Real Decreto 1906/1999, de 17 de diciembre por el que se regula la contrataci&oacute;n telef&oacute;nica o electr&oacute;nica con condiciones generales.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 7/1998, de 13 de abril, sobre Condiciones Generales de Contrataci&oacute;n.</em></span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em><br />&bull; Real Decreto-Legislativo 1/2007 de 16 de noviembre, aprobatorio del Texto refundido de la Ley general para la defensa de Consumidores y Usuarios, y Ley 43/2007 de 3 de diciembre de protecci&oacute;n de los consumidores en la contrataci&oacute;n de bienes con oferta de restituci&oacute;n de precio.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 7/1996, de 15 de enero de Ordenaci&oacute;n del Comercio Minorista.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 59/2003, de 19 de diciembre sobre Firma Electr&oacute;nica.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Ley 15/1999, de 13 de diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter personal, <br /><br />&bull; Ley 25/2007 de 18 de octubre de conservaci&oacute;n de datos relativos a las comunicaciones electr&oacute;nicas y a las redes p&uacute;blicas de comunicaciones, y RD 172072007, de 21 de diciembre por el que se aprueba el Reglamento de desarrollo de la LOPD.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><em>&bull; Reales Decretos 225/2006 de 24 de febrero y 103/2008 de 1 de febrero reguladores de las ventas a distancia y del registro de empresas de ventas a distancia, y Ley 22/2007 de 11 de julio, sobre comercializaci&oacute;n a distancia de servicios financieros destinados a los consumidores.<br /><br /></em></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Estas Condiciones Generales de Compra han de complementarse con las Condiciones Generales de uso y navegaci&oacute;n fijadas para la p&aacute;gina WEB, as&iacute; como por cualesquiera otras Condiciones Particulares o espec&iacute;ficas de contrataci&oacute;n que pudieran establecerse en cada caso.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Tanto la navegaci&oacute;n como la adquisici&oacute;n de cualquiera de los productos de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> supone la aceptaci&oacute;n como usuario, sin reserva de ninguna clase, de todas y cada una de las subsiguientes Condiciones Generales de Contrataci&oacute;n as&iacute; como, en su caso, de las Condiciones Particulares o espec&iacute;ficas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> podr&aacute; en todo momento y sin previo aviso, modificar las presentes Condiciones Generales de Contrataci&oacute;n as&iacute; como las Condiciones Particulares que en su caso se incluyan, mediante la publicaci&oacute;n de dichas modificaciones en la propia WEB a fin de que puedan ser conocidas y nuevamente aceptadas por los usuarios.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="background-color: #ffffff;">2</span><strong>.-. INFORMACI&Oacute;N PREVIA A LA CONTRATACI&Oacute;N. <br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> informa que el proceso de compra de los productos ofrecidos en el sitio web www......................&nbsp; viene detallado expresamente en el apartado denominado Condiciones Generales.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Del mismo modo, el usuario o cliente puede tener acceso a las Condiciones Generales de uso y navegaci&oacute;n, y al apartado Pol&iacute;tica de Privacidad, a los cuales se puede acceder directamente a trav&eacute;s del link que se incluye en la p&aacute;gina principal o de inicio de la presente WEB.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El usuario declara conocer y aceptar de modo expreso lo recogido en los apartados anteriores.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El usuario declara que es mayor de edad y dispone de la capacidad legal necesaria para utilizar este sitio web de conformidad con las Condiciones Generales aqu&iacute; enunciadas, que comprende y entiende en su totalidad. El usuario se hace responsable de tratar de forma confidencial y custodiar adecuadamente las contrase&ntilde;as que le sean proporcionadas por <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> para acceder al sitio web, evitando el acceso a las mismas de terceras personas no autorizadas.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Una vez efectuada la compra el usuario visualizar&aacute; la confirmaci&oacute;n de su pedido en pantalla, pudiendo imprimir &eacute;sta como comprobante de compra.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La confirmaci&oacute;n de pedido y el comprobante de compra (impresi&oacute;n que hace el usuario) no tendr&aacute;n validez como factura.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.- FORMALIZACI&Oacute;N DE LA COMPRAVENTA. <br /><br /></span></span></strong><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.1.- PRODUCTOS OFRECIDOS.</span></span></strong></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> mostrar&aacute; en cada momento los productos a la venta junto con sus caracter&iacute;sticas propias y su precio. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se reserva el derecho a decidir en cada momento, los productos que se ofrecen a los usuarios o clientes a trav&eacute;s del sitio web <span style="color: #ff0000;">www.............................................</span> &nbsp;De este modo, <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> podr&aacute; en cualquier momento adicionar nuevos productos a los incluidos en el mismo, los cuales se regir&aacute;n por lo dispuesto en las Condiciones Generales en vigor en ese momento. Asimismo <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se reserva el derecho a dejar de facilitar el acceso, en cualquier momento y sin previo aviso, de cualquiera de los productos ofrecidos.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><strong>3.2.- INDICACI&Oacute;N DE PRECIOS DE LOS PRODUCTOS.<br /></strong></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />El precio de cada producto aparecer&aacute; en pantalla. Los precios en pantalla vendr&aacute;n indicados en euros e incluyen el correspondiente IMPUESTO SOBRE EL VALOR A&Ntilde;ADIDO (IVA) y cualquier otro impuesto que fuera de aplicaci&oacute;n. Los precios indicados en pantalla ser&aacute;n en todo momento los vigentes, salvo error tipogr&aacute;fico o cambio de precio por parte de la empresa.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.3.- DISPONIBILIDAD.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />La disponibilidad de cada producto depender&aacute; de la demanda de los clientes. </span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">www................................................</span> </span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">&nbsp;actualiza el stock con la mayor asiduidad posible. A&uacute;n as&iacute;, es posible que un producto que aparezca como disponible en la web, se haya agotado. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> avisar&aacute; al cliente mediante e-mail de esta situaci&oacute;n.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.4.- COSTES DE ENV&Iacute;O. <br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Al aceptar la compra se a&ntilde;adir&aacute;n al pedido los gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los gastos en concepto de embalaje, conservaci&oacute;n, transporte y entrega del pedido variar&aacute;n teniendo en cuenta los siguientes puntos:<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Provincia (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Regional (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Peninsular, Baleares y Canarias (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Ceuta, Melilla (hasta 10 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Europeo Prioritario (hasta 2 kg), <span style="color: #ff0000;"><span style="text-decoration: underline;">00,00 euros</span></span>.</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">-&nbsp;&nbsp;&nbsp;&nbsp; Internacional Prioritario (hasta 2 kg), <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span>.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Recogida en <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> : <span style="text-decoration: underline;"><span style="color: #ff0000;">0,00 euros</span></span>.<br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Pedidos nacionales superiores a <span style="text-decoration: underline;"><span style="color: #ff0000;">00,00 euros</span></span> sin gastos de env&iacute;o.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos superiores al peso indicado <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se pondr&aacute; en contacto con el cliente para indicarle a cuanto ascienden los gastos de env&iacute;o.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.5.- HORARIOS DE ENTREGA DE LOS PEDIDOS.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Para los pedidos nacionales (peninsulares e insulares) se utiliza el servicio de mensajer&iacute;a de <span style="text-decoration: underline;"><span style="color: #ff0000;">MRW</span></span>. La entrega se realiza entre&nbsp; <span style="text-decoration: underline;"><span style="color: #ff0000;">24-48 horas</span></span>.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para pedidos internacionales se utilizar&aacute; el servicio de env&iacute;o prioritario de <span style="text-decoration: underline;"><span style="color: #ff0000;">Correos de Espa&ntilde;a</span></span>.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">3.6.- ENTREGA DEL PEDIDO.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />En el supuesto de que el cliente no pudiera estar presente en el momento de la entrega, el pedido ser&aacute; entregado a cualquier otra persona que se encuentre en el domicilio indicado y que sea mayor de 18 a&ntilde;os.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> entiende que el cliente que ha realizado el pedido autoriza a la persona que en ese momento est&aacute; en el hogar a recoger el pedido en su nombre. Por lo tanto, queda bajo la exclusiva responsabilidad del cliente autorizar a un tercero para la recepci&oacute;n y aceptaci&oacute;n de la compra en el domicilio de entrega.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La entrega de la compra se realizar&aacute; en la direcci&oacute;n indicada por el cliente, debiendo firmar el receptor el albar&aacute;n de entrega correspondiente.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">4.- PAGO DE LA COMPRAVENTA.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />Estas son las formas de pago disponibles en <span style="color: #ff0000;">www..........................................</span> :<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Presupuesto:</strong> Elija esta opci&oacute;n, no estar&aacute; formalizando una compra, sino realizando un presupuesto.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <span style="text-decoration: underline;"><span style="color: #ff0000;"><strong>Contado:</strong> Pago en efectivo o con tarjeta al recoger los productos en el domicilio social de la empresa. V&aacute;lido solamente con la modalidad de env&iacute;o "recogida en empresa".<br /><br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Tarjeta de cr&eacute;dito:</strong> El pago con tarjeta es el sistema m&aacute;s f&aacute;cil y r&aacute;pido. Seleccione el tipo de tarjeta y escriba el n&uacute;mero, caducidad y c&oacute;digo CVC.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <span style="color: #ff0000;"><span style="text-decoration: underline;"><strong>Reembolso:</strong> Pago en el momento de la entrega. S&oacute;lo disponible para los pedidos nacionales</span>.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">- <strong>Transferencia bancaria:</strong> Pago del importe total mediante una transferencia bancaria a la cuenta de la entidad bancaria <span style="color: #ff0000;">.................................................</span> de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span>.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">5.- DEVOLUCIONES.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> cumple con la normativa vigente. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> aceptar&aacute; la devoluci&oacute;n de un producto, siempre dentro del plazo de 7 d&iacute;as h&aacute;biles desde la recepci&oacute;n del mismo. Una vez recibido y comprobado que se encuentra en el mismo estado en que se envi&oacute; y con el embalaje original se proceder&aacute; a su reembolso. Para devolver un producto es necesario que se ponga el receptor en contacto previamente con LA EMPRESA mediante e-mail a <span style="text-decoration: underline;"><span style="color: #ff0000;">devolucion@..........................</span>.</span>, para que se le indique la forma de env&iacute;o adecuada.<br /><br /></span></span><span style="text-decoration: underline;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;">LA EMPRESA dispone de Hojas de Reclamaciones a disposici&oacute;n del consumidor.<br /><br /></span></span></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">6.- PROTECCI&Oacute;N DE DATOS DE CAR&Aacute;CTER PERSONAL.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> se encuentra especialmente interesada en la seguridad y confidencialidad de los datos aportados por sus clientes. En este sentido, <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> se compromete a la protecci&oacute;n de los datos personales de los usuarios del sitio web <span style="color: #ff0000;">www.......................................................................<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">La pol&iacute;tica de protecci&oacute;n de los datos personales se extiende a todo lo relativo a la recogida y uso de la informaci&oacute;n proporcionada a trav&eacute;s de la presente p&aacute;gina WEB. La compra ON LINE requiere que el usuario facilite sus datos personales con el fin de poder tramitar y hacerle llegar su pedido.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">El servidor de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> env&iacute;a al ordenador del cliente un fichero (denominado cookie) con el objeto de ejecutar los procesos de compra. La duraci&oacute;n de la cookie es temporal y es eliminada del ordenador del usuario una vez finaliza la sesi&oacute;n y se cierra el navegador. La utilizaci&oacute;n de estas cookies es necesaria para la prestaci&oacute;n del servicio. En caso de que el usuario tenga desactivada la ejecuci&oacute;n de este procedimiento no ser&aacute; posible la prestaci&oacute;n del servicio de compra online.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los datos facilitados por los clientes de este servicio pasan a formar parte de un fichero automatizado de <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span>, frente al cual el usuario podr&aacute;, en cualquier momento, ejercitar los derechos de acceso, rectificaci&oacute;n, cancelaci&oacute;n y oposici&oacute;n conforme a lo establecido en la Ley Org&aacute;nica 15/99, de 13 de Diciembre, de Protecci&oacute;n de Datos de Car&aacute;cter Personal.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Para el ejercicio de estos derechos el usuario podr&aacute; enviar un correo a la siguiente direcci&oacute;n e-mail: <span style="color: #ff0000;">lopd@&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.......................&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.<br /><br /></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Igualmente, el usuario podr&aacute; dirigirse a la siguiente direcci&oacute;n postal:</span></span></p>\r\n<p style="text-align: justify;"><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000;"><span style="text-decoration: underline;">LA EMPRESA, c/ &hellip;&hellip;&hellip;&hellip;&hellip;&hellip;, n&ordm;&hellip; , CP-CIUDAD.<br /><br /></span></span></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Los datos facilitados por el usuario ser&aacute;n tratados de manera estrictamente confidencial. En caso de producirse cambios en la Pol&iacute;tica de Protecci&oacute;n de Datos expuesta, los usuarios ser&aacute;n debidamente informados a trav&eacute;s de la presente WEB.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">7.- LEGISLACI&Oacute;N APLICABLE. SUMISI&Oacute;N A FUERO.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><br />El presente contrato se regir&aacute; por la legislaci&oacute;n espa&ntilde;ola que ser&aacute; de aplicaci&oacute;n en lo no dispuesto en este contrato en materia de interpretaci&oacute;n, validez y ejecuci&oacute;n.<br /><br /></span></span><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">Las partes renuncian expresamente al fuero que les pudiera corresponder y se someten expresamente a los &oacute;rganos jurisdiccionales de <span style="text-decoration: underline;"><span style="color: #ff0000;">CIUDAD</span></span> la resoluci&oacute;n de cualquier controversia que pudiera surgir de la interpretaci&oacute;n o ejecuci&oacute;n de las presentes condiciones contractuales.<br /><br /></span></span><strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;">8.- ANULACIONES.<br /></span></span></strong><span style="font-family: verdana,geneva;"><span style="font-size: 10pt;"><span style="text-decoration: underline;"><span style="color: #ff0000;"><br />LA EMPRESA</span></span> se reserva el derecho a anular los pedidos realizados en base a erratas, o pedidos con direcci&oacute;n de env&iacute;o incorrecta o incompleta. <span style="text-decoration: underline;"><span style="color: #ff0000;">LA EMPRESA</span></span> informar&aacute; al cliente siempre que sea posible.</span></span></p>', 'condiciones-de-venta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_configuration`
--

CREATE TABLE IF NOT EXISTS `ps_configuration` (
  `id_configuration` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(32) NOT NULL,
  `value` text,
  `date_add` datetime NOT NULL,
  `date_upd` datetime NOT NULL,
  PRIMARY KEY  (`id_configuration`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=153 ;

--
-- Volcado de datos para la tabla `ps_configuration`
--

INSERT INTO `ps_configuration` (`id_configuration`, `name`, `value`, `date_add`, `date_upd`) VALUES
(1, 'PS_LANG_DEFAULT', '3', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(2, 'PS_CURRENCY_DEFAULT', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(3, 'PS_COUNTRY_DEFAULT', '6', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(4, 'PS_REWRITING_SETTINGS', '0', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(5, 'PS_ORDER_OUT_OF_STOCK', '1', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(6, 'PS_LAST_QTIES', '3', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(7, 'PS_CART_REDIRECT', '1', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(8, 'PS_HELPBOX', '0', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(9, 'PS_CONDITIONS', '1', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(10, 'PS_RECYCLABLE_PACK', '0', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(11, 'PS_GIFT_WRAPPING', '0', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(12, 'PS_GIFT_WRAPPING_PRICE', '0', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(13, 'PS_STOCK_MANAGEMENT', '1', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(14, 'PS_NAVIGATION_PIPE', '>', '2010-09-01 18:15:29', '2012-03-24 19:46:57'),
(15, 'PS_PRODUCTS_PER_PAGE', '10', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(16, 'PS_PURCHASE_MINIMUM', '0', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(17, 'PS_PRODUCTS_ORDER_WAY', '0', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(18, 'PS_PRODUCTS_ORDER_BY', '4', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(19, 'PS_DISPLAY_QTIES', '0', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(20, 'PS_SHIPPING_HANDLING', '0', '2010-09-01 18:15:29', '2012-05-29 07:58:49'),
(21, 'PS_SHIPPING_FREE_PRICE', '0', '2010-09-01 18:15:29', '2012-05-29 07:58:49'),
(22, 'PS_SHIPPING_FREE_WEIGHT', '0', '2010-09-01 18:15:29', '2012-05-29 07:58:49'),
(23, 'PS_SHIPPING_METHOD', '1', '2010-09-01 18:15:29', '2012-05-29 07:58:49'),
(24, 'PS_TAX', '1', '2010-09-01 18:15:29', '2010-11-10 16:36:46'),
(25, 'PS_SHOP_ENABLE', '1', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(26, 'PS_NB_DAYS_NEW_PRODUCT', '20', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(27, 'PS_SSL_ENABLED', '0', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(28, 'PS_WEIGHT_UNIT', 'kg', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(29, 'PS_BLOCK_CART_AJAX', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(30, 'PS_ORDER_RETURN', '0', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(31, 'PS_ORDER_RETURN_NB_DAYS', '7', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(32, 'PS_MAIL_TYPE', '3', '2010-09-01 18:15:29', '2010-12-14 11:54:58'),
(33, 'PS_PRODUCT_PICTURE_MAX_SIZE', '131072', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(34, 'PS_PRODUCT_PICTURE_WIDTH', '64', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(35, 'PS_PRODUCT_PICTURE_HEIGHT', '64', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(36, 'PS_INVOICE_PREFIX', 'IN', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(37, 'PS_INVOICE_NUMBER', '112', '2010-09-01 18:15:29', '2012-05-29 08:22:27'),
(38, 'PS_DELIVERY_PREFIX', 'DE', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(39, 'PS_DELIVERY_NUMBER', '79', '2010-09-01 18:15:29', '2012-05-25 17:01:54'),
(40, 'PS_INVOICE', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(41, 'PS_PASSWD_TIME_BACK', '5', '2010-09-01 18:15:29', '2011-02-01 10:50:12'),
(42, 'PS_PASSWD_TIME_FRONT', '500', '2010-09-01 18:15:29', '2012-02-15 18:16:12'),
(43, 'PS_DISP_UNAVAILABLE_ATTR', '0', '2010-09-01 18:15:29', '2012-05-22 09:01:26'),
(44, 'PS_VOUCHERS', '0', '2010-09-01 18:15:29', '2010-12-14 15:26:35'),
(45, 'PS_SEARCH_MINWORDLEN', '3', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(46, 'PS_SEARCH_BLACKLIST', '', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(47, 'PS_SEARCH_WEIGHT_PNAME', '6', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(48, 'PS_SEARCH_WEIGHT_REF', '10', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(49, 'PS_SEARCH_WEIGHT_SHORTDESC', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(50, 'PS_SEARCH_WEIGHT_DESC', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(51, 'PS_SEARCH_WEIGHT_CNAME', '3', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(52, 'PS_SEARCH_WEIGHT_MNAME', '3', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(53, 'PS_SEARCH_WEIGHT_TAG', '4', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(54, 'PS_SEARCH_WEIGHT_ATTRIBUTE', '2', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(55, 'PS_SEARCH_WEIGHT_FEATURE', '2', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(56, 'PS_SEARCH_AJAX', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(57, 'PS_TIMEZONE', '366', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(58, 'PS_THEME_V11', '0', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(59, 'PRESTASTORE_LIVE', '0', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(60, 'PS_TIN_ACTIVE', '0', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(61, 'PS_SHOW_ALL_MODULES', '0', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(62, 'PS_BACKUP_ALL', '1', '2010-09-01 18:15:29', '2010-12-03 16:57:14'),
(63, 'PS_1_3_UPDATE_DATE', '2010-09-01 18:15:29', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(64, 'PS_PRICE_ROUND_MODE', '2', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(65, 'PS_CARRIER_DEFAULT', '14', '2010-09-01 18:15:29', '2012-05-29 07:57:47'),
(122, 'PS_DISPLAY_JQZOOM', '0', '2010-12-09 19:15:44', '2012-05-22 09:01:26'),
(134, 'PS_BO_ALLOW_EMPLOYEE_FORM_LANG', '1', '2011-01-28 16:15:19', '2011-02-01 10:50:12'),
(68, 'PAYPAL_CURRENCY', 'customer', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(69, 'BANK_WIRE_CURRENCIES', '2,1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(70, 'CHEQUE_CURRENCIES', '2,1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(71, 'PRODUCTS_VIEWED_NBR', '2', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(72, 'BLOCK_CATEG_DHTML', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(73, 'BLOCK_CATEG_MAX_DEPTH', '3', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(74, 'MANUFACTURER_DISPLAY_FORM', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(75, 'MANUFACTURER_DISPLAY_TEXT', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(76, 'MANUFACTURER_DISPLAY_TEXT_NB', '5', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(77, 'NEW_PRODUCTS_NBR', '5', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(78, 'STATSHOME_YEAR_FROM', '2010', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(79, 'STATSHOME_MONTH_FROM', '09', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(80, 'STATSHOME_DAY_FROM', '01', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(81, 'STATSHOME_YEAR_TO', '2010', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(82, 'STATSHOME_MONTH_TO', '09', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(83, 'STATSHOME_DAY_TO', '01', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(84, 'PS_TOKEN_ENABLE', '1', '2010-09-01 18:15:29', '2011-06-09 18:12:41'),
(85, 'PS_STATS_RENDER', 'graphxmlswfcharts', '2010-09-01 18:15:29', '2010-11-22 12:56:54'),
(86, 'PS_STATS_OLD_CONNECT_AUTO_CLEAN', 'never', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(87, 'PS_STATS_GRID_RENDER', 'gridextjs', '2010-09-01 18:15:29', '2010-11-22 12:56:54'),
(88, 'BLOCKTAGS_NBR', '10', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(89, 'CHECKUP_DESCRIPTIONS_LT', '100', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(90, 'CHECKUP_DESCRIPTIONS_GT', '400', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(91, 'CHECKUP_IMAGES_LT', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(92, 'CHECKUP_IMAGES_GT', '2', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(93, 'CHECKUP_SALES_LT', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(94, 'CHECKUP_SALES_GT', '2', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(95, 'CHECKUP_STOCK_LT', '1', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(96, 'CHECKUP_STOCK_GT', '3', '2010-09-01 18:15:29', '2010-09-01 18:15:29'),
(97, 'PS_SHOP_NAME', 'Mi TIENDA', '2010-09-01 18:16:26', '2012-04-02 18:51:13'),
(98, 'PS_SHOP_EMAIL', 'soporte-tienda-2@team-web.es', '2010-09-01 18:16:26', '2012-04-02 18:51:13'),
(99, 'PS_MAIL_METHOD', '1', '2010-09-01 18:16:26', '2010-12-14 11:54:58'),
(100, 'PS_LOGO', '', '2010-11-01 18:26:26', '2012-03-24 19:46:57'),
(101, 'PS_BASE_URI', '/Tienda-27/', '2010-11-10 16:38:26', '2011-06-09 18:12:41'),
(102, 'PS_MAINTENANCE_IP', '', '2010-11-10 16:38:26', '2011-06-09 18:12:41'),
(103, 'PS_GIFT_WRAPPING_TAX', '0', '2010-11-10 16:38:26', '2011-06-09 18:12:41'),
(104, 'PS_CART_FOLLOWING', '0', '2010-11-10 16:38:26', '2011-06-09 18:12:41'),
(105, 'PS_FAVICON', '', '2010-11-12 11:59:20', '2012-03-24 19:46:57'),
(106, 'BANK_WIRE_DETAILS', '2100-0999-99-9999999999', '2010-11-17 19:34:47', '2011-02-01 17:48:28'),
(107, 'BANK_WIRE_OWNER', 'Ricardo de la Mancha', '2010-11-17 19:34:47', '2011-02-01 17:48:28'),
(108, 'BANK_WIRE_ADDRESS', 'La Caixa, c/Diagonal 14', '2010-11-17 19:34:47', '2011-02-01 17:48:28'),
(109, 'PS_MAIL_EMAIL_MESSAGE', '3', '2010-11-18 10:42:25', '2010-12-14 11:54:58'),
(110, 'SMTP_CONTAINER', '', '2010-11-18 10:42:25', '2010-12-14 11:54:58'),
(111, 'PS_MAIL_SERVER', '', '2010-11-18 10:42:25', '2010-12-14 11:54:58'),
(112, 'PS_MAIL_USER', '', '2010-11-18 10:42:25', '2010-12-14 11:54:58'),
(113, 'PS_MAIL_PASSWD', '', '2010-11-18 10:42:25', '2010-12-14 11:54:58'),
(114, 'PS_MAIL_SMTP_ENCRYPTION', 'off', '2010-11-18 10:42:25', '2010-12-14 11:54:58'),
(115, 'PS_MAIL_SMTP_PORT', '0', '2010-11-18 10:42:25', '2010-12-14 11:54:58'),
(116, 'SMTP_CONTAINER_END', '', '2010-11-18 10:42:25', '2010-12-14 11:54:58'),
(117, 'MA_MERCHANT_ORDER', '1', '2010-11-22 10:48:53', '2012-05-21 19:22:52'),
(118, 'MA_MERCHANT_OOS', '1', '2010-11-22 10:48:53', '2012-05-21 19:22:52'),
(119, 'MA_CUSTOMER_QTY', '0', '2010-11-22 10:48:53', '2011-02-24 10:35:19'),
(120, 'MA_MERCHANT_MAILS', 'admin-tienda-2@team-web.es', '2010-11-22 10:48:53', '2012-05-21 19:22:52'),
(121, 'MA_LAST_QTIES', '5', '2010-11-22 10:48:53', '2012-05-21 19:22:52'),
(123, 'PS_IMAGE_GENERATION_METHOD', '0', '2010-12-09 19:15:44', '2012-05-22 09:01:26'),
(124, 'PS_NEWSLETTER_RAND', '20414894481093233696', '2010-12-28 12:32:34', '2010-12-28 12:32:34'),
(125, 'PS_SHOP_DETAILS', '', '2011-01-24 11:10:39', '2012-04-02 18:51:13'),
(126, 'PS_SHOP_ADDR1', '', '2011-01-24 11:10:39', '2012-04-02 18:51:13'),
(127, 'PS_SHOP_ADDR2', '', '2011-01-24 11:10:39', '2012-04-02 18:51:13'),
(128, 'PS_SHOP_CODE', '', '2011-01-24 11:10:39', '2012-04-02 18:51:13'),
(129, 'PS_SHOP_CITY', '', '2011-01-24 11:10:39', '2012-04-02 18:51:13'),
(130, 'PS_SHOP_STATE', '', '2011-01-24 11:10:39', '2012-04-02 18:51:13'),
(131, 'PS_SHOP_COUNTRY', '', '2011-01-24 11:10:39', '2012-04-02 18:51:13'),
(132, 'PS_SHOP_PHONE', '', '2011-01-24 11:10:39', '2012-04-02 18:51:13'),
(133, 'PS_SHOP_FAX', '', '2011-01-24 11:10:39', '2012-04-02 18:51:13'),
(135, 'PAYPAL_BUSINESS', 'su-cuenta@paypal.es', '2011-02-01 11:18:08', '2011-03-11 16:34:16'),
(136, 'PAYPAL_SANDBOX', '0', '2011-02-01 11:18:08', '2011-03-11 16:34:16'),
(137, 'PAYPAL_HEADER', '', '2011-02-01 11:19:01', '2011-03-11 16:34:16'),
(138, 'LACAIXA_URLTPV', 'https://sis-t.sermepa.es:25443/sis/realizarPago', '2011-02-17 12:31:43', '2011-02-18 18:08:40'),
(139, 'LACAIXA_NOMBRE', 'Comercio Pruebas', '2011-02-17 12:31:43', '2011-02-18 18:08:40'),
(140, 'LACAIXA_TERMINAL', '1', '2011-02-17 12:31:43', '2011-02-18 18:08:40'),
(141, 'LACAIXA_MONEDA', '978', '2011-02-17 12:31:43', '2011-02-18 18:08:40'),
(142, 'LACAIXA_TRANS', '0', '2011-02-17 12:31:43', '2011-02-18 18:08:40'),
(143, 'LACAIXA_CLAVE', 'novalida', '2011-02-17 12:33:03', '2011-02-18 18:08:40'),
(144, 'LACAIXA_CODIGO', '6987555', '2011-02-17 12:33:03', '2011-02-18 18:08:40'),
(151, 'BLOCKADVERT_LINK', 'https://www.team-web.es/tienda.html', '2011-06-30 20:13:38', '2011-07-18 10:52:51'),
(152, 'PS_pxc', 'As', '2012-05-18 22:19:57', '2012-05-29 08:22:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_configuration_lang`
--

CREATE TABLE IF NOT EXISTS `ps_configuration_lang` (
  `id_configuration` int(10) unsigned NOT NULL,
  `id_lang` int(10) unsigned NOT NULL,
  `value` text,
  `date_upd` datetime default NULL,
  PRIMARY KEY  (`id_configuration`,`id_lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ps_configuration_lang`
--

INSERT INTO `ps_configuration_lang` (`id_configuration`, `id_lang`, `value`, `date_upd`) VALUES
(36, 1, 'IN', '2010-09-01 18:15:29'),
(36, 2, 'FA', '2010-09-01 18:15:29'),
(36, 3, 'CU', '2010-09-01 18:15:29'),
(38, 1, 'DE', '2010-09-01 18:15:29'),
(38, 2, 'LI', '2010-09-01 18:15:29'),
(38, 3, 'EN', '2010-09-01 18:15:29'),
(46, 1, 'a|the|of|on|in|and|to', '2010-09-01 18:15:29'),
(46, 2, 'le|les|de|et|en|des|les|une', '2010-09-01 18:15:29'),
(46, 3, 'de|los|las|lo|la|en|de|y|el|a', '2010-09-01 18:15:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_connections`
--

CREATE TABLE IF NOT EXISTS `ps_connections` (
  `id_connections` int(10) unsigned NOT NULL auto_increment,
  `id_guest` int(10) unsigned NOT NULL,
  `id_page` int(10) unsigned NOT NULL,
  `ip_address` int(11) default NULL,
  `date_add` datetime NOT NULL,
  `http_referer` varchar(255) default NULL,
  PRIMARY KEY  (`id_connections`),
  KEY `id_guest` (`id_guest`),
  KEY `date_add` (`date_add`),
  KEY `id_page` (`id_page`),
  KEY `indice00` (`id_guest`,`date_add`),
  KEY `indice01` (`date_add`,`id_connections`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=305 ;

--
-- Volcado de datos para la tabla `ps_connections`
--

INSERT INTO `ps_connections` (`id_connections`, `id_guest`, `id_page`, `ip_address`, `date_add`, `http_referer`) VALUES
(1, 1, 1, 2130706433, '2010-09-01 18:15:29', 'http://www.prestashop.com'),
(2, 2, 1, 2130706433, '2010-09-01 18:17:42', ''),
(3, 3, 2, 1501764967, '2010-09-01 18:25:26', ''),
(4, 4, 1, 1501764967, '2010-09-01 18:48:41', ''),
(5, 5, 1, 1335271716, '2010-09-02 19:15:15', ''),
(6, 5, 1, 1335449971, '2010-09-06 11:13:08', ''),
(7, 4, 1, 1501764967, '2010-09-17 17:47:24', ''),
(8, 6, 1, 1335664855, '2010-10-27 11:01:59', ''),
(9, 7, 1, 1335593622, '2010-10-28 20:22:23', ''),
(10, 8, 1, 1335690317, '2010-10-29 23:51:12', ''),
(11, 9, 1, 1477247154, '2010-11-01 18:25:23', ''),
(12, 10, 1, 1501764967, '2010-11-09 10:53:53', ''),
(13, 11, 1, 1501764967, '2010-11-09 11:01:44', ''),
(14, 10, 1, 1501764967, '2010-11-10 16:47:21', ''),
(15, 10, 1, 1501764967, '2010-11-10 19:25:05', ''),
(16, 10, 1, 1501764967, '2010-11-11 10:02:29', ''),
(17, 10, 1, 1501764967, '2010-11-11 10:59:40', ''),
(18, 12, 1, 1335418971, '2010-11-12 10:28:38', ''),
(19, 10, 1, 1501764967, '2010-11-12 10:32:15', ''),
(20, 12, 1, 1335418971, '2010-11-12 11:34:04', ''),
(21, 13, 1, 1501764967, '2010-11-12 12:15:15', ''),
(22, 14, 1, 1335592606, '2010-11-12 18:18:48', ''),
(23, 15, 1, 1335271891, '2010-11-14 16:11:44', ''),
(24, 16, 1, 1335271891, '2010-11-14 20:27:22', ''),
(25, 17, 1, 1335271891, '2010-11-15 12:06:12', ''),
(26, 18, 1, 1335305192, '2010-11-17 16:18:06', ''),
(27, 16, 40, 1335305192, '2010-11-17 18:22:56', ''),
(28, 16, 1, 1335305192, '2010-11-17 19:12:24', ''),
(29, 16, 1, 1335305192, '2010-11-17 19:45:44', ''),
(30, 10, 1, 1501764967, '2010-11-18 10:11:01', ''),
(31, 16, 1, 1335305192, '2010-11-18 13:05:01', ''),
(32, 16, 1, 1335305192, '2010-11-18 13:12:38', ''),
(33, 16, 40, 1335305192, '2010-11-18 13:47:43', ''),
(34, 16, 1, 1335305192, '2010-11-18 13:51:57', ''),
(35, 23, 1, 1335305192, '2010-11-18 15:39:06', ''),
(36, 16, 1, 1335305192, '2010-11-18 15:39:31', ''),
(37, 16, 1, 1335305192, '2010-11-18 15:44:44', ''),
(38, 16, 1, 1335305192, '2010-11-18 15:49:32', ''),
(39, 16, 1, 1335305192, '2010-11-18 16:37:49', ''),
(40, 28, 1, 1335305192, '2010-11-19 09:23:40', ''),
(41, 10, 1, 1335305192, '2010-11-22 12:02:20', ''),
(42, 10, 1, 1501764967, '2010-11-22 12:32:50', ''),
(43, 30, 1, 1344660888, '2010-11-23 10:25:04', ''),
(44, 10, 1, 1501764967, '2010-11-25 10:17:19', ''),
(45, 31, 1, 1477311020, '2010-12-03 14:05:43', ''),
(46, 16, 1, 1477311020, '2010-12-03 15:27:06', ''),
(47, 16, 1, 1477311020, '2010-12-03 17:02:35', ''),
(48, 33, 49, 1477311020, '2010-12-03 17:36:21', ''),
(49, 16, 1, 1477311020, '2010-12-03 17:45:08', ''),
(50, 16, 10, 1477311020, '2010-12-03 18:29:52', ''),
(51, 33, 1, 1335246281, '2010-12-08 17:38:54', ''),
(52, 16, 1, 1335246281, '2010-12-08 18:29:54', ''),
(53, 16, 1, 1335246281, '2010-12-08 19:13:07', ''),
(54, 16, 10, 1335246281, '2010-12-08 22:12:53', ''),
(55, 16, 1, 1335419349, '2010-12-09 08:57:39', ''),
(56, 16, 3, 1335419349, '2010-12-09 09:20:30', ''),
(57, 10, 1, 1501764967, '2010-12-09 18:15:12', ''),
(58, 16, 1, 1335419349, '2010-12-09 18:30:52', ''),
(59, 16, 79, 1335419349, '2010-12-09 19:20:36', ''),
(60, 16, 1, 1335343592, '2010-12-10 13:26:36', ''),
(61, 16, 1, 1335593436, '2010-12-10 17:01:11', ''),
(62, 16, 1, 2147483647, '2010-12-13 19:56:26', ''),
(63, 10, 1, 1501764967, '2010-12-14 11:55:55', ''),
(64, 10, 1, 1501764967, '2010-12-14 15:17:24', ''),
(65, 40, 1, 1395219454, '2010-12-16 21:48:15', ''),
(66, 16, 1, 1395218674, '2010-12-18 14:17:49', ''),
(67, 16, 10, 1395218674, '2010-12-18 15:58:30', ''),
(68, 42, 1, 1395218674, '2010-12-18 16:14:03', ''),
(69, 42, 1, 1395218674, '2010-12-18 17:19:55', ''),
(70, 42, 1, 1395218674, '2010-12-18 22:44:15', ''),
(71, 43, 1, 1395218674, '2010-12-18 22:53:17', ''),
(72, 44, 1, 1335594191, '2010-12-20 11:27:18', ''),
(73, 42, 1, 2147483647, '2010-12-22 10:14:53', ''),
(74, 42, 108, 2147483647, '2010-12-22 11:31:11', ''),
(75, 42, 10, 2147483647, '2010-12-22 14:40:58', ''),
(76, 42, 1, 1335690408, '2010-12-22 19:08:16', ''),
(77, 47, 1, 1501764967, '2010-12-24 15:38:28', ''),
(78, 47, 1, 1501764967, '2010-12-27 10:10:24', ''),
(79, 42, 1, 1335305196, '2010-12-27 10:52:56', ''),
(80, 42, 1, 1335305196, '2010-12-27 16:01:28', ''),
(81, 47, 1, 1501764967, '2010-12-28 12:27:33', ''),
(82, 49, 1, 1335304789, '2010-12-29 11:11:21', ''),
(83, 49, 1, 1335419761, '2010-12-29 12:14:53', ''),
(84, 49, 1, 1335419761, '2010-12-29 13:07:44', ''),
(85, 50, 1, 1335419761, '2010-12-29 15:34:58', ''),
(86, 51, 1, 1335419761, '2010-12-31 16:50:10', ''),
(87, 52, 114, 1335419761, '2010-12-31 17:18:09', ''),
(88, 53, 1, 1501764967, '2011-01-13 09:53:17', ''),
(89, 42, 1, 1395218985, '2011-01-13 17:07:43', ''),
(90, 42, 115, 1395218985, '2011-01-13 19:43:38', ''),
(91, 42, 1, 1395218985, '2011-01-14 19:37:13', ''),
(92, 42, 1, 1335305143, '2011-01-15 10:18:25', ''),
(93, 42, 1, 1335305143, '2011-01-15 11:57:27', ''),
(94, 56, 5, 1335305143, '2011-01-15 12:06:49', ''),
(95, 56, 5, 1335305143, '2011-01-15 13:10:26', ''),
(96, 42, 1, 1335304727, '2011-01-16 20:06:53', ''),
(97, 42, 1, 2147483647, '2011-01-17 13:13:18', ''),
(98, 42, 48, 2147483647, '2011-01-17 14:56:35', ''),
(99, 42, 48, 2147483647, '2011-01-17 14:58:52', ''),
(100, 42, 134, 2147483647, '2011-01-17 17:30:08', ''),
(101, 42, 1, 1335690501, '2011-01-18 08:57:58', ''),
(102, 42, 1, 1395219398, '2011-01-19 10:16:14', ''),
(103, 42, 1, 1335593881, '2011-01-20 10:06:35', ''),
(104, 42, 143, 1335593881, '2011-01-20 11:36:38', ''),
(105, 60, 133, 1335593881, '2011-01-20 15:16:38', ''),
(106, 42, 49, 1335593881, '2011-01-20 15:20:07', ''),
(107, 62, 49, 1335593881, '2011-01-20 15:21:54', ''),
(108, 62, 49, 1335593881, '2011-01-20 17:37:25', ''),
(109, 62, 49, 1335593881, '2011-01-20 19:32:43', ''),
(110, 60, 49, 1335691142, '2011-01-20 20:13:53', ''),
(111, 66, 49, 2147483647, '2011-01-21 01:20:15', ''),
(112, 67, 49, 1081920334, '2011-01-21 01:20:15', ''),
(113, 68, 49, 1081920332, '2011-01-21 05:15:10', ''),
(114, 60, 1, 1335593885, '2011-01-21 10:45:16', ''),
(115, 62, 1, 1335593885, '2011-01-21 10:45:27', ''),
(116, 62, 1, 1335593885, '2011-01-21 15:11:22', ''),
(117, 62, 1, 1335593885, '2011-01-21 17:47:11', ''),
(118, 60, 1, 1335593885, '2011-01-21 17:47:20', ''),
(119, 62, 49, 1335593806, '2011-01-21 19:25:13', ''),
(120, 62, 1, 1335534651, '2011-01-24 09:41:14', ''),
(121, 62, 1, 1335534651, '2011-01-24 12:44:22', ''),
(122, 62, 1, 1335534651, '2011-01-24 14:39:26', ''),
(123, 72, 1, 1335449609, '2011-01-24 18:10:43', ''),
(124, 72, 49, 1335449609, '2011-01-24 18:16:40', ''),
(125, 72, 49, 1335449609, '2011-01-24 18:21:59', ''),
(126, 47, 1, 1501764967, '2011-01-24 18:32:50', ''),
(127, 53, 1, 1501764967, '2011-01-24 18:32:59', ''),
(128, 72, 1, 1335449609, '2011-01-24 22:56:36', ''),
(129, 72, 1, 1335594688, '2011-01-26 14:15:57', ''),
(130, 75, 1, 1335594688, '2011-01-26 14:56:31', ''),
(131, 75, 1, 1335594688, '2011-01-26 15:29:59', ''),
(132, 72, 1, 1335594688, '2011-01-26 15:30:42', ''),
(133, 72, 10, 1335594688, '2011-01-26 16:29:17', ''),
(134, 76, 1, 1501764967, '2011-01-27 12:03:30', ''),
(135, 77, 49, 1501764967, '2011-01-27 12:09:03', ''),
(136, 47, 49, 1501764967, '2011-01-27 12:23:17', ''),
(137, 72, 1, 2147483647, '2011-01-27 14:12:43', ''),
(138, 60, 49, 2147483647, '2011-01-27 15:20:52', ''),
(139, 80, 1, 1501764967, '2011-01-27 15:46:02', ''),
(140, 60, 1, 2147483647, '2011-01-27 16:40:24', ''),
(141, 60, 1, 1335665295, '2011-01-28 16:16:03', ''),
(142, 62, 49, 1335665295, '2011-01-28 16:45:39', ''),
(143, 62, 51, 1335665295, '2011-01-28 18:51:46', ''),
(144, 62, 49, 2147483647, '2011-01-28 20:09:24', ''),
(145, 84, 49, 2147483647, '2011-01-29 03:39:45', ''),
(146, 62, 1, 2147483647, '2011-01-29 11:10:31', ''),
(147, 62, 1, 2147483647, '2011-01-30 21:25:59', ''),
(148, 62, 1, 1335665119, '2011-01-31 12:35:57', ''),
(149, 62, 1, 1335665119, '2011-01-31 12:36:39', ''),
(150, 62, 49, 1335665119, '2011-01-31 12:37:48', ''),
(151, 62, 49, 1335665119, '2011-01-31 12:38:37', ''),
(152, 62, 49, 1335665119, '2011-01-31 12:39:32', ''),
(153, 62, 49, 1335665119, '2011-01-31 13:04:24', ''),
(154, 62, 49, 1335665119, '2011-01-31 13:05:14', ''),
(155, 62, 49, 1335665119, '2011-01-31 13:13:33', ''),
(156, 47, 1, 1501764967, '2011-01-31 16:30:15', ''),
(157, 92, 49, 1501764967, '2011-01-31 16:33:43', ''),
(158, 62, 1, 2147483647, '2011-02-01 09:49:13', ''),
(159, 92, 1, 1501764967, '2011-02-01 10:49:15', ''),
(160, 62, 70, 1476439452, '2011-02-02 10:16:59', ''),
(161, 94, 1, 1335593430, '2011-02-06 22:21:59', ''),
(162, 62, 1, 1335593430, '2011-02-06 22:39:49', ''),
(163, 96, 49, 1335593430, '2011-02-06 22:45:18', ''),
(164, 62, 49, 1335593430, '2011-02-06 22:46:43', ''),
(165, 96, 49, 1335593430, '2011-02-06 22:47:12', ''),
(166, 62, 49, 1335593430, '2011-02-06 22:50:31', ''),
(167, 62, 1, 1335593430, '2011-02-06 23:46:49', ''),
(168, 62, 1, 1335593430, '2011-02-07 08:47:15', ''),
(169, 62, 1, 1335592681, '2011-02-08 10:48:16', ''),
(170, 47, 1, 1501764967, '2011-02-08 13:29:28', ''),
(171, 62, 1, 2147483647, '2011-02-08 18:08:41', ''),
(172, 62, 1, 1335419119, '2011-02-11 09:53:33', ''),
(173, 62, 1, 1335304369, '2011-02-14 12:44:10', ''),
(174, 62, 1, 1335665224, '2011-02-16 12:07:54', ''),
(175, 62, 1, 1335665224, '2011-02-16 13:59:50', ''),
(176, 62, 132, 1335665224, '2011-02-16 14:42:19', ''),
(177, 62, 150, 1335665224, '2011-02-16 15:15:46', ''),
(178, 62, 1, 1335665224, '2011-02-17 08:56:11', ''),
(179, 62, 1, 1335665224, '2011-02-17 11:04:05', ''),
(180, 62, 139, 1335665224, '2011-02-17 12:39:33', ''),
(181, 62, 1, 1335665224, '2011-02-17 13:13:11', ''),
(182, 62, 142, 1335665224, '2011-02-17 16:07:00', ''),
(183, 62, 139, 1335665224, '2011-02-17 16:47:48', ''),
(184, 62, 1, 1335664858, '2011-02-18 09:19:34', ''),
(185, 62, 142, 1335664858, '2011-02-18 10:1