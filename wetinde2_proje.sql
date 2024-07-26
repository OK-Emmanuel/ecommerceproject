-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2024 at 12:24 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wetinde2_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE IF NOT EXISTS `adminreg` (
  `id` int(225) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uin` varchar(255) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `emailadd` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `designation` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `passport` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`id`, `timestamp`, `uin`, `fullname`, `emailadd`, `phone`, `gender`, `designation`, `password`, `passport`) VALUES
(1, '2024-07-10 19:46:37', '766183', 'Ibigbemi Pelumi', 'ibigbemipelumi@gmail.com', '12345', 'male', 'CEO', '1234', 'smBackground.jpg'),
(2, '2024-07-25 23:43:35', '819165', 'Ibigbemi Oluwapelumi', 'ibigbemipelumi01@gmail.com', '2345434', 'male', 'CEO', '12345', 'IMG_4291.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uin` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `blogcontent` varchar(500) DEFAULT NULL,
  `blogpics` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `timestamp`, `uin`, `title`, `date`, `blogcontent`, `blogpics`) VALUES
(1, '2024-07-19 09:06:16', '47996', 'yo!!', '100547', '<p>welcome onboard</p>', NULL),
(2, '2024-07-19 09:08:01', '42912', 'welcome', '100616', '<p>iohdcviohvpoer [gie[wrgvuoihb l</p><p>]WPF[JWWPOp[ikgperuptunhr]totyuh]erionittoiy -i-</p>', NULL),
(3, '2024-07-19 09:10:20', '10112', 'erhuihui', '100801', '<p>efgsdkgv gpdoibb</p>', 'loo.jpeg'),
(4, '2024-07-19 09:13:09', '58229', 'fghj', '101020', '<p>nvfuio</p>', 'logg.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` varchar(500) DEFAULT NULL,
  `productname` varchar(500) DEFAULT NULL,
  `price` varchar(500) DEFAULT NULL,
  `quantity` varchar(500) DEFAULT NULL,
  `total` varchar(500) DEFAULT NULL,
  `coverphoto` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uin` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `catimage` varchar(500) DEFAULT NULL,
  `catdescription` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `timestamp`, `uin`, `name`, `catimage`, `catdescription`) VALUES
(1, '2024-07-24 12:18:02', '420443', 'Chair', '239169These 15 Woodworking Projects Are Awesome for Every Skill Level.jpg', 'LOREM LORM'),
(2, '2024-07-25 22:31:59', '830398', 'Decor', '107937living room decor.jpeg', 'A living room decor'),
(4, '2024-07-25 23:15:11', '756542', 'Lighting', '194866Justine - Modern Multi-Bulb Horizontal Light Fixture.jpeg', 'lightning'),
(6, '2024-07-25 23:00:52', '667361', 'Desk', '138259b5c2d73f70f3383cc60b916496f5e207.jpg', 'Natural Wooden Computer Desk with Bookshelf and Wheels');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE IF NOT EXISTS `checkout` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` varchar(500) DEFAULT NULL,
  `uin` varchar(500) DEFAULT NULL,
  `fname` varchar(500) DEFAULT NULL,
  `lname` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `postalcode` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `state` varchar(500) DEFAULT NULL,
  `company` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `landingpage`
--

CREATE TABLE IF NOT EXISTS `landingpage` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fullname` varchar(500) DEFAULT NULL,
  `emailadd` varchar(500) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `landingpage`
--

INSERT INTO `landingpage` (`id`, `timestamp`, `fullname`, `emailadd`, `message`) VALUES
(1, '2024-07-08 10:33:32', 'pelumi', 'ibigbemipelumi@gmail.com', 'tfgjfsrawjrzstgxd'),
(2, '2024-07-08 10:34:02', 'pelumi', 'ibigbemipelumi@gmail.com', 'Yes'),
(4, '2024-07-08 10:51:30', 'pelumi', 'tobilobaowoeye96@gmail.com', 'sgla'),
(5, '2024-07-08 10:59:14', 'ghHH', 'tobiloba@gmail.com', 'tsy');

-- --------------------------------------------------------

--
-- Table structure for table `memberreg`
--

CREATE TABLE IF NOT EXISTS `memberreg` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uin` varchar(255) DEFAULT NULL,
  `fullname` varchar(500) DEFAULT NULL,
  `lastname` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `relationship` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `postaladd` varchar(500) DEFAULT NULL,
  `passport` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uin` varchar(500) DEFAULT NULL,
  `productname` varchar(500) DEFAULT NULL,
  `quantity` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `category` varchar(500) DEFAULT NULL,
  `price` varchar(500) DEFAULT NULL,
  `discount` varchar(500) DEFAULT NULL,
  `date` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `coverphoto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `timestamp`, `uin`, `productname`, `quantity`, `description`, `category`, `price`, `discount`, `date`, `status`, `photo`, `coverphoto`) VALUES
(1, '2024-07-24 13:16:21', '462274', 'Wood Side Dining Chairs 18.5" Wide Wishbone Armless Chair Set Nut-Brown-4 Piece Set', '500', 'Side Chair Back Style: Windsor Back Heights: Standard Material: Wood Leg Material: Wood Color: Black White Natural Nut-Brown Leg Color: Black White Natural Wood Walnut Style: Industrial Purposeful Distressing Type: No Distressing Wood Tone: Espresso Wood White Wood Light Wood Medium Wood Seating Wood Species: Rubberwood Weights & Dimensions Overall Height - Top to Bottom: 34" (86 cm) Overall Width - Side to Side: 18.5" (47 cm) Overall Width - Front to Back: 19" (48 cm) Seat Height – Floor to Sea', 'Chair', '700', '0', '2024-07-24', 'Available', '549e4d82-cb11-4501-bb7a-9aeca3ddac6a.jpeg', 'e8f08579eead1a760cdca53b1bc2147e.jpg'),
(2, '2024-07-24 13:18:42', '238867', 'Wood Side Dining Chairs 18.5" Wide Wishbone Armless Chair Set Nut-Brown-4 Piece Set', '8775', 'What is Included Number of Items Included: 2 Piece Set 4 Piece Set 6 Piece Set 8 Piece Set Product Type: Side Chair Back Style: Windsor Back Heights: Standard Material: Wood Leg Material: Wood Color: Black White Natural Nut-Brown Leg Color: Black White Natural Wood Walnut Style: Industrial Purposeful Distressing Type: No Distressing Wood Tone: Espresso Wood White Wood Light Wood Medium Wood Seating Wood Species: Rubberwood Weights & Dimensions Overall Height - Top to Bottom: 34" (86 cm) Overall ', 'Chair', '600', '0', '2024-07-24', 'Available', 'Home - Mobiliario ideal.jpeg', 'ho.jpeg'),
(3, '2024-07-24 13:24:05', '173086', 'Frankfurt Chair', '654', 'The original Frankfurt kitchen chair from Stoelcker - order directly from the manufacturer. Also available in solid oak', 'Chair', '500', '0', '2024-07-24', 'Available', 'Frankfurt Chair.jpeg', 'fra.jpeg'),
(4, '2024-07-26 00:01:25', '393801', 'Natural Wooden Computer Desk with Bookshelf and Wheels', '45', 'Here is our natural bookshelf computer desk, the perfect combination of modern style and practicality. Crafted from a high-quality steel frame and plywood, this desk is designed to last and looks great in any workspace.', 'Desk', '450', '0', '2024-07-25', 'Available', 'b5c2d73f70f3383cc60b916496f5e207.jpg', '3e30f5829aee7a769420faeec05624a9.jpg'),
(5, '2024-07-26 00:01:53', '531378', 'Study table', '55', 'Study table  for all', 'Desk', '320', '0', '2024-07-25', 'Available', 'fb4bc87ddb062aaf67ded5d2404891df.jpg', 'e47700cbdee9827ce6e124d75ea2348d.jpg'),
(6, '2024-07-26 00:02:02', '651596', 'HWB LED Office Desk with Hutch-Computer Wooden Desk', '76', 'This computer desk with drawers is equipped with a USB/Type-C charge port and an AC outlet charge station, providing you with the convenience of charging your devices without dealing with tangled cords. By keeping your workspace organized and connected, you can stay productive and powered up. &#12304;Computer Desk with a Pegboard Design&#12305;The desk for bedroom incorporates a practical pegboard layout, providing you with the flexibility to tailor and arrange your workspace based on your indiv', 'Desk', '650', '10', '2024-07-25', 'Available', '0372bec82d52262fba3489d2c5edf34d.jpg', '718LXEpoROL._AC_SL1500_.jpg'),
(7, '2024-07-26 00:02:10', '328543', 'DIY Spider Industrial Hanging Lamps Vintage Multi-head Pendant Lights', '20', 'This pendant light offers glamour and a chic industrial style. The design features Multi-head lights that hung from the top canopy. Canopy mounts to ceiling junction box like any regular fixture. Included standoff mounts anchor into the ceiling, then the light cords swag from the canopy to the standoff mounts and can be arranged as desired.', 'Lighting', '300', '0', '2024-07-24', 'Available', '72d65d8e96d3afe26d0b223e143f9f7d.jpg', '4c06c0221dbe2ff655434e6d022ab3ca.jpg'),
(8, '2024-07-26 00:02:33', '655358', 'Industrial dining table with pendant lights', '56', 'Rustic dining table with chic pendant lights in industrial style. The combination is a real eye-catcher in the living and dining area ', 'Lighting', '200', '0', '2024-07-25', 'Available', 'fcb204559f342eb4c67138a1c30a2709.png', 'fcb204559f342eb4c67138a1c30a2709.png'),
(9, '2024-07-26 00:02:39', '212802', 'LED Wall Light 220V 110V Bedroom Bedside Light Living Room Balcony Aisle Wall Lamp Corridor Wall Sconce Lamp - Matte Black', '789', 'Brand Name: Eleven MasterIs Bulbs Included: YesOrigin: Mainland ChinaCertification: CCCCertification: ceLight Source: LEDStyle: Modern StyleInstallation Type: Wall MountedItem Type: Wall LampsWarranty: 1 YearsNumber of light sources: 2Lighting Area: 1-3square metersApplication: KitchenApplication: Dining RoomApplication: Bed RoomApplication: FoyerApplication: StudyIs Dimmable: NoSwitch Type: No switchMaterial: AcrylShade Direction: Up & Downis_customized: noPower Source: ACBody Material: Aluminu', 'Lighting', '250', '0', '2024-07-25', 'Available', '013e2ece1ecc503d591cfb59b5119b72.jpg', '013e2ece1ecc503d591cfb59b5119b72.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
