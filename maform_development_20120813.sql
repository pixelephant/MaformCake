-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Hoszt: localhost
-- Létrehozás ideje: 2012. aug. 13. 12:50
-- Szerver verzió: 5.1.62
-- PHP verzió: 5.3.2-1ubuntu4.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `maform_development`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet: `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `list_image` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `data` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `large_image` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=11 ;

--
-- A tábla adatainak kiíratása `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `description`, `list_image`, `slug`, `data`, `large_image`) VALUES
(6, 'DUNA EXPRESS', 'intermodal ship station for public water transportation<span>client: Duna Express Consortium</span>', 'de-01.jpg', 'dunaexpress', 'Started in <b>2012</b> and took <b>3</b> months to finish.', 'de.jpg'),
(7, 'M8 MINI CITY BUS', 'for the special needs of inner city transportation school project @MOME (www.mome.hu)', 'm8-01.jpg', 'm8', 'Started in <b>2011</b> and it took <b>6</b> months to finish', 'm8.jpg'),
(8, 'PAQ CHAIR', 'The world''s most simple bed-chair', 'paq-01.jpg', 'paq', 'Started in <b>2010</b> and it''s an ever-<b>evolving</b> product', 'paq.jpg'),
(9, 'RMG POWER ANALYZER', 'design of an intelligent industrial power management and maintenance tool client: <a href="http://remaginetech.com/">RMG Technologies Ltd.</a>', 'pa-01.jpg', 'pa', 'Started in <b>2011</b> and took <b>2</b> months to finish', 'pa.jpg'),
(10, 'RMG SMARTSOCKET', 'design of a power management and maintanance tool for office and home users client: RMG Technologies Ltd.', 'ss-01.jpg', 'ss', 'Started in <b>2012</b> and took <b>2</b> months to finish.', 'ss.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet: `portfolio_item_images`
--

CREATE TABLE IF NOT EXISTS `portfolio_item_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `image_file` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `paragraphs` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1C143AD0B96B5643` (`portfolio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=21 ;

--
-- A tábla adatainak kiíratása `portfolio_item_images`
--

INSERT INTO `portfolio_item_images` (`id`, `title`, `image_file`, `paragraphs`, `portfolio_id`) VALUES
(5, 'Duna express', 'de-02.jpg', 'The <b>symbolic dynamism</b> of the design is clear from this perspective: the ship station ''creature'' tries to hold the pontoon while the Danube tries to pull it away.', 6),
(6, 'creature', 'de-03.jpg', 'Some more symbolic dynamism: the <b>''creature''</b> changes the shape of built environment while struggling with holding the pontoon.', 6),
(7, 'Transparency', 'de-04.jpg', '<b>Transparency</b> and minimal visual impact was important in the interior as well.', 6),
(8, 'Intermodal system', 'de-05.jpg', 'The new station allows the ship line to be integrated into the <b>intermodal system</b> of the square and the city.', 6),
(9, 'Interior', 'm8-02.jpg', 'In the interior, interactive AR-screens (http://en.wikipedia.org/wiki/Augmented_reality) help the passengers in navigation.', 7),
(10, 'Interior', 'm8-03.jpg', 'Longer wheelbase makes more useful space in the interior, wider doors help faster passenger exchange. The central seating of the driver gives him better view.', 7),
(11, 'Easy', 'm8-04.jpg', 'Easy access, fast passenger exchange.', 7),
(12, 'Front', 'm8-05.jpg', 'The front passenger area is for short-term passengers area with double-function seatings in the side (A). The rear passenger area is for longer trips allowing passengers to sit down conveniently (B).', 7),
(13, 'Turning', 'm8-06.jpg', 'Narrower turning circle is possible with turnable super single rear wheels and the fact that the front wheel cuts are bigger in z-direction, thus allowing the front wheels to turn almost 90 degrees.', 7),
(14, 'Windshield', 'm8-07.jpg', 'Screens are integrated in the windshields.', 7),
(15, 'Further information', 'm8-08.jpg', 'Further information about this project on <a href="http://www.behance.net/gallery/M8-city-mini-bus/4481351">Behance</a>', 7),
(16, 'Paq chair', 'paq-02.jpg', '.', 8),
(17, 'Simple', 'pa-02.jpg', 'Simple but novel design for an industrial tool.', 9),
(18, 'Protects', 'pa-03.jpg', 'We had to consider protection against <a href="http://en.wikipedia.org/wiki/Electric_shock">electric shock</a> and several ways of possible installation of the product.', 9),
(19, 'Design', 'pa-04.jpg', 'The shape is in essential connection with the unique assembly and part-design.', 9),
(20, 'Office use', 'ss-02.jpg', 'The SmartSocket is designed especially for office use.', 10);

-- --------------------------------------------------------

--
-- Tábla szerkezet: `portfolio_item_image_translations`
--

CREATE TABLE IF NOT EXISTS `portfolio_item_image_translations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) CHARACTER SET latin1 NOT NULL,
  `model` varchar(255) CHARACTER SET latin1 NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=35 ;

--
-- A tábla adatainak kiíratása `portfolio_item_image_translations`
--

INSERT INTO `portfolio_item_image_translations` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(3, 'hun', 'PortfolioItemImage', 5, 'title', 'Duna express'),
(4, 'hun', 'PortfolioItemImage', 5, 'paragraphs', 'The <b>symbolic dynamism</b> of the design is clear from this perspective: the ship station ''creature'' tries to hold the pontoon while the Danube tries to pull it away.'),
(5, 'hun', 'PortfolioItemImage', 6, 'title', 'creature'),
(6, 'hun', 'PortfolioItemImage', 6, 'paragraphs', 'Some more symbolic dynamism: the <b>''creature''</b> changes the shape of built environment while struggling with holding the pontoon.'),
(7, 'hun', 'PortfolioItemImage', 7, 'title', 'Transparency'),
(8, 'hun', 'PortfolioItemImage', 7, 'paragraphs', '<b>Transparency</b> and minimal visual impact was important in the interior as well.'),
(9, 'hun', 'PortfolioItemImage', 8, 'title', 'Intermodal system'),
(10, 'hun', 'PortfolioItemImage', 8, 'paragraphs', 'The new station allows the ship line to be integrated into the <b>intermodal system</b> of the square and the city.'),
(11, 'hun', 'PortfolioItemImage', 9, 'title', 'Interior'),
(12, 'hun', 'PortfolioItemImage', 9, 'paragraphs', 'In the interior, interactive AR-screens (http://en.wikipedia.org/wiki/Augmented_reality) help the passengers in navigation.'),
(13, 'hun', 'PortfolioItemImage', 10, 'title', 'Interior'),
(14, 'hun', 'PortfolioItemImage', 10, 'paragraphs', 'Longer wheelbase makes more useful space in the interior, wider doors help faster passenger exchange. The central seating of the driver gives him better view.'),
(15, 'hun', 'PortfolioItemImage', 11, 'title', 'Easy'),
(16, 'hun', 'PortfolioItemImage', 11, 'paragraphs', 'Easy access, fast passenger exchange.'),
(17, 'hun', 'PortfolioItemImage', 12, 'title', 'Front'),
(18, 'hun', 'PortfolioItemImage', 12, 'paragraphs', 'The front passenger area is for short-term passengers area with double-function seatings in the side (A). The rear passenger area is for longer trips allowing passengers to sit down conveniently (B).'),
(19, 'hun', 'PortfolioItemImage', 13, 'title', 'Turning'),
(20, 'hun', 'PortfolioItemImage', 13, 'paragraphs', 'Narrower turning circle is possible with turnable super single rear wheels and the fact that the front wheel cuts are bigger in z-direction, thus allowing the front wheels to turn almost 90 degrees.'),
(21, 'hun', 'PortfolioItemImage', 14, 'title', 'Windshield'),
(22, 'hun', 'PortfolioItemImage', 14, 'paragraphs', 'Screens are integrated in the windshields.'),
(23, 'hun', 'PortfolioItemImage', 15, 'title', 'Further information'),
(24, 'hun', 'PortfolioItemImage', 15, 'paragraphs', 'Further information about this project on <a href="http://www.behance.net/gallery/M8-city-mini-bus/4481351">Behance</a>'),
(25, 'hun', 'PortfolioItemImage', 16, 'title', 'Paq chair'),
(26, 'hun', 'PortfolioItemImage', 16, 'paragraphs', '.'),
(27, 'hun', 'PortfolioItemImage', 17, 'title', 'Simple'),
(28, 'hun', 'PortfolioItemImage', 17, 'paragraphs', 'Simple but novel design for an industrial tool.'),
(29, 'hun', 'PortfolioItemImage', 18, 'title', 'Protects'),
(30, 'hun', 'PortfolioItemImage', 18, 'paragraphs', 'We had to consider protection against <a href="http://en.wikipedia.org/wiki/Electric_shock">electric shock</a> and several ways of possible installation of the product.'),
(31, 'hun', 'PortfolioItemImage', 19, 'title', 'Design'),
(32, 'hun', 'PortfolioItemImage', 19, 'paragraphs', 'The shape is in essential connection with the unique assembly and part-design.'),
(33, 'hun', 'PortfolioItemImage', 20, 'title', 'Office use'),
(34, 'hun', 'PortfolioItemImage', 20, 'paragraphs', 'The SmartSocket is designed especially for office use.');

-- --------------------------------------------------------

--
-- Tábla szerkezet: `portfolio_item_texts`
--

CREATE TABLE IF NOT EXISTS `portfolio_item_texts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `paragraphs` longtext COLLATE utf8_hungarian_ci NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C4EFF42EB96B5643` (`portfolio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=16 ;

--
-- A tábla adatainak kiíratása `portfolio_item_texts`
--

INSERT INTO `portfolio_item_texts` (`id`, `title`, `paragraphs`, `portfolio_id`) VALUES
(6, 'URBAN MOBILITY', 'As cars slowly take cities away from people, we face more and more issues in connection with the growing automation of our society. This project is part of a larger scale public transportation development on the Danube river at Budapest, called Duna Express (www.dunaexpress.hu). The goal of my project was to integrate the Duna Express ship line into the visual (symbolic) and transportation (logical) system of Budapest with the central ship stop. The square and the riverbank area provide a very unique environment: an eclectic architectural scene, the meeting of nature and built environment, and a special meeting point of different architectural and design eras.', 6),
(7, 'KEY FEATURES', 'The key of this project was to control the manifestation of user- product interaction in different dimensions: the whole city is the user of urban systems, groups of people are users of human-built fás environment, and people are users of several machines, products. Different interacting elements make a system at a level of coherence. The ship station is located on the lower quay of Buda, right next to the square in Northern direction in the level of the upper quay. This way it saves space and doesn’t affect the view (of the building of the Parliament) from Batthyány square. It is also easy to connect intermodally (http://en.wikipedia.org/wiki/Intermodal_passenger_transport) with the nearby METRO and ''HÉV'' (agglomeration train) lines; since this place is right over the underground station of both of these lines. ', 6),
(8, 'LOVE YOUR RIDE!', 'M8 is an admirable bus using technology available today (in five years) that can perfectly fit into city environments. If people <b>enjoy</b> riding a bus, they will be more likely to use public transportation – and this means a cleaner, quieter, more <b>livable city</b>.', 7),
(9, 'MINIMAL IMPACT', 'Thanks to the large reflecting surfaces, the bus <b>fits</b> into its environment, while the <b>elegant</b> metal frame makes it unique and recognizable.', 7),
(10, 'COMFY', 'It feels like a bean bag just much easier to get up from it. It''s really flexible so you can move around in it but it''s always supports your back. It''s a playful stylish armchair and if you get tired of enjoying it just a simple zipper move turns it into a bed. Get the sheetings from the fiber drum and have a nap or a good sleep. It is as simple as it can be.', 8),
(11, 'PRACTICAL', 'It''s ideal for small places or as a spare bed. Available in cotton, textile leather and impregnate textile all of it in lot of color. The inner side is always cotton for a comfortable sleep. The cover is machine-washable. More information and webshop:  <a href="http://www.paqchair.com">www.paqchair.com</a>', 8),
(12, 'REMAGINING POWER MANAGEMENT', 'Power Analyzer is a product of RMG Technologies Ltd. It is a revolutionally automatic tool for commercial building owners and  manufacturing companies to reduce electricity and maintenance costs, stabilise production processes and increase building management safety.', 9),
(13, 'REMAGINING INDUSTRIAL DESIGN', 'Our task was to design a unique casing that can protect the inner electronic components from dust and other threats possible in industrial environments. It also has to fit safety regulations. It has the looks of a professional and reliable tool, with a style that differs from any other product in the segment.', 9),
(14, 'SAVE TIME – SAVE ENERGY', 'SmartSocket supervises and controls the plugged-in device to decrease overall power consumption whilst effectively maintaining the quality of service. SmartSocket empowers you to <b>optimize energy consumption</b> by eliminating wasteful device usage and scheduling devices to operate during the lower price period automatically. For example: „turn off all coffee machines, monitors and printers which operate in stand-by mode after working hours.', 10),
(15, 'DESIGN PROJECT', 'Our task was to fit SmartSocket''s design to design line of the company mainly defined by the Power Analyzer (link a PA-ra). A <b>simple</b> and <b>ergonomic</b> casing was designed around the existing electric components.', 10);

-- --------------------------------------------------------

--
-- Tábla szerkezet: `portfolio_item_text_translations`
--

CREATE TABLE IF NOT EXISTS `portfolio_item_text_translations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) CHARACTER SET latin1 NOT NULL,
  `model` varchar(255) CHARACTER SET latin1 NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=25 ;

--
-- A tábla adatainak kiíratása `portfolio_item_text_translations`
--

INSERT INTO `portfolio_item_text_translations` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(5, 'hun', 'PortfolioItemText', 6, 'title', 'URBAN MOBILITY'),
(6, 'hun', 'PortfolioItemText', 6, 'paragraphs', 'As cars slowly take cities away from people, we face more and more issues in connection with the growing automation of our society. This project is part of a larger scale public transportation development on the Danube river at Budapest, called Duna Express (www.dunaexpress.hu). The goal of my project was to integrate the Duna Express ship line into the visual (symbolic) and transportation (logical) system of Budapest with the central ship stop. The square and the riverbank area provide a very unique environment: an eclectic architectural scene, the meeting of nature and built environment, and a special meeting point of different architectural and design eras.'),
(7, 'hun', 'PortfolioItemText', 7, 'title', 'KEY FEATURES'),
(8, 'hun', 'PortfolioItemText', 7, 'paragraphs', 'The key of this project was to control the manifestation of user- product interaction in different dimensions: the whole city is the user of urban systems, groups of people are users of human-built fás environment, and people are users of several machines, products. Different interacting elements make a system at a level of coherence. The ship station is located on the lower quay of Buda, right next to the square in Northern direction in the level of the upper quay. This way it saves space and doesn’t affect the view (of the building of the Parliament) from Batthyány square. It is also easy to connect intermodally (http://en.wikipedia.org/wiki/Intermodal_passenger_transport) with the nearby METRO and ''HÉV'' (agglomeration train) lines; since this place is right over the underground station of both of these lines. '),
(9, 'hun', 'PortfolioItemText', 8, 'title', 'LOVE YOUR RIDE!'),
(10, 'hun', 'PortfolioItemText', 8, 'paragraphs', 'M8 is an admirable bus using technology available today (in five years) that can perfectly fit into city environments. If people <b>enjoy</b> riding a bus, they will be more likely to use public transportation – and this means a cleaner, quieter, more <b>livable city</b>.'),
(11, 'hun', 'PortfolioItemText', 9, 'title', 'MINIMAL IMPACT'),
(12, 'hun', 'PortfolioItemText', 9, 'paragraphs', 'Thanks to the large reflecting surfaces, the bus <b>fits</b> into its environment, while the <b>elegant</b> metal frame makes it unique and recognizable.'),
(13, 'hun', 'PortfolioItemText', 10, 'title', 'COMFY'),
(14, 'hun', 'PortfolioItemText', 10, 'paragraphs', 'It feels like a bean bag just much easier to get up from it. It''s really flexible so you can move around in it but it''s always supports your back. It''s a playful stylish armchair and if you get tired of enjoying it just a simple zipper move turns it into a bed. Get the sheetings from the fiber drum and have a nap or a good sleep. It is as simple as it can be.'),
(15, 'hun', 'PortfolioItemText', 11, 'title', 'PRACTICAL'),
(16, 'hun', 'PortfolioItemText', 11, 'paragraphs', 'It''s ideal for small places or as a spare bed. Available in cotton, textile leather and impregnate textile all of it in lot of color. The inner side is always cotton for a comfortable sleep. The cover is machine-washable. More information and webshop:  <a href="http://www.paqchair.com">www.paqchair.com</a>'),
(17, 'hun', 'PortfolioItemText', 12, 'title', 'REMAGINING POWER MANAGEMENT'),
(18, 'hun', 'PortfolioItemText', 12, 'paragraphs', 'Power Analyzer is a product of RMG Technologies Ltd. It is a revolutionally automatic tool for commercial building owners and  manufacturing companies to reduce electricity and maintenance costs, stabilise production processes and increase building management safety.'),
(19, 'hun', 'PortfolioItemText', 13, 'title', 'REMAGINING INDUSTRIAL DESIGN'),
(20, 'hun', 'PortfolioItemText', 13, 'paragraphs', 'Our task was to design a unique casing that can protect the inner electronic components from dust and other threats possible in industrial environments. It also has to fit safety regulations. It has the looks of a professional and reliable tool, with a style that differs from any other product in the segment.'),
(21, 'hun', 'PortfolioItemText', 14, 'title', 'SAVE TIME – SAVE ENERGY'),
(22, 'hun', 'PortfolioItemText', 14, 'paragraphs', 'SmartSocket supervises and controls the plugged-in device to decrease overall power consumption whilst effectively maintaining the quality of service. SmartSocket empowers you to <b>optimize energy consumption</b> by eliminating wasteful device usage and scheduling devices to operate during the lower price period automatically. For example: „turn off all coffee machines, monitors and printers which operate in stand-by mode after working hours.'),
(23, 'hun', 'PortfolioItemText', 15, 'title', 'DESIGN PROJECT'),
(24, 'hun', 'PortfolioItemText', 15, 'paragraphs', 'Our task was to fit SmartSocket''s design to design line of the company mainly defined by the Power Analyzer (link a PA-ra). A <b>simple</b> and <b>ergonomic</b> casing was designed around the existing electric components.');

-- --------------------------------------------------------

--
-- Tábla szerkezet: `portfolio_translations`
--

CREATE TABLE IF NOT EXISTS `portfolio_translations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) CHARACTER SET latin1 NOT NULL,
  `model` varchar(255) CHARACTER SET latin1 NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) CHARACTER SET latin1 NOT NULL,
  `content` text CHARACTER SET latin1,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=19 ;

--
-- A tábla adatainak kiíratása `portfolio_translations`
--

INSERT INTO `portfolio_translations` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(7, 'hun', 'Portfolio', 6, 'description', 'intermodal ship station for public water transportation<span>client: Duna Express Consortium</span>'),
(8, 'hun', 'Portfolio', 6, 'data', 'Started in <b>2012</b> and took <b>3</b> months to finish.'),
(9, 'eng', 'Portfolio', 6, 'description', 'englishintermodal ship station for public water transportation<span>client: Duna Express Consortium</span>'),
(10, 'eng', 'Portfolio', 6, 'data', 'EnglishStarted in <b>2012</b> and took <b>3</b> months to finish.'),
(11, 'hun', 'Portfolio', 7, 'description', 'for the special needs of inner city transportation school project @MOME (www.mome.hu)'),
(12, 'hun', 'Portfolio', 7, 'data', 'Started in <b>2011</b> and it took <b>6</b> months to finish'),
(13, 'hun', 'Portfolio', 8, 'description', 'The world''s most simple bed-chair'),
(14, 'hun', 'Portfolio', 8, 'data', 'Started in <b>2010</b> and it''s an ever-<b>evolving</b> product'),
(15, 'hun', 'Portfolio', 9, 'description', 'design of an intelligent industrial power management and maintenance tool client: RMG Technologies Ltd.'),
(16, 'hun', 'Portfolio', 9, 'data', 'Started in <b>2011</b> and took <b>2</b> months to finish'),
(17, 'hun', 'Portfolio', 10, 'description', 'design of a power management and maintanance tool for office and home users client: RMG Technologies Ltd.'),
(18, 'hun', 'Portfolio', 10, 'data', 'Started in <b>2012</b> and took <b>2</b> months to finish.');

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `portfolio_item_images`
--
ALTER TABLE `portfolio_item_images`
  ADD CONSTRAINT `FK_1C143AD0B96B5643` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`);

--
-- Megkötések a táblához `portfolio_item_texts`
--
ALTER TABLE `portfolio_item_texts`
  ADD CONSTRAINT `FK_C4EFF42EB96B5643` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`);
