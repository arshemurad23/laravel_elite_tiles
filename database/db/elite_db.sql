-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 01:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elite_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `panal_img` varchar(255) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `text_1` text NOT NULL,
  `text_2` text NOT NULL,
  `card_img` varchar(255) NOT NULL,
  `happy_customer` varchar(50) NOT NULL,
  `dealership` varchar(50) NOT NULL,
  `total_members` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `panal_img`, `heading`, `text_1`, `text_2`, `card_img`, `happy_customer`, `dealership`, `total_members`) VALUES
(1, 'uploads/about/1749395645_panel_aa.jpg', 'The City Tiles: Paragon of Tile Excellence', 'For over four decades, The City Tiles has been the gold standard for innovation, quality, and customer satisfaction in Pakistan\'s tile industry. Our rich legacy is built on a foundation of trust, reliability, and an unwavering passion for delivering exceptional tile solutions.', 'Our Mission: Elevating Spaces, Enhancing Lives We cater to the discerning needs of builders, architects, and interior designers, offering bespoke services and competitive rates that set us apart. Our extensive product range, coupled with our expertise and dedication, ensures that every project is a masterpiece.', 'uploads/about/1749566859_card_about-us-2.jpg', '12k', '26', '44');

-- --------------------------------------------------------

--
-- Table structure for table `add_service`
--

CREATE TABLE `add_service` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_service`
--

INSERT INTO `add_service` (`id`, `name`, `info`, `number`) VALUES
(6, 'Tile Fixer Available', 'Looking for professional tile installation? Our expert tile fixers ensure flawless fitting with precision and care. Whether it\'s wall, floor, or custom tile work, we guarantee a smooth and lasting finish every time.', '92302-0292189'),
(7, 'Plumber Available', 'Need help with tile installation Sanitary or pipe fittings? Our expert plumbers are just a call away—offering fast, reliable service to ensure your kitchen or bathroom is set up perfectly. Quality workmanship, guaranteed.', '92302-0292189'),
(8, 'Customer Guidance', 'Need guidance choosing the right tiles or have a question post-purchase? Our support team is always ready to assist with expert advice, quick help, and reliable service—every step of the way.', '92302-0292189'),
(11, 'MT-CT12816', 'gfhfghgf', 'gfhgfh'),
(12, 'Umer', 'gfhfghg', 'hfghgfh');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password_key` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `passwod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `user_name`, `password_key`, `role`, `passwod`) VALUES
(1, 'Admin', 'admin', 'Elite_tiles', 'admin', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categorie_id` int(11) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categorie_id`, `categories`, `create_date`) VALUES
(15, 'Washroom Tiles', '2025-05-28'),
(22, 'Kitchen Tiles', '2025-05-30'),
(23, 'Floor Tiles', '2025-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `shop_number` varchar(20) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `web_name` varchar(100) NOT NULL,
  `definition` text NOT NULL,
  `footer_text` text NOT NULL,
  `panal_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `email`, `shop_number`, `phone_number`, `web_name`, `definition`, `footer_text`, `panal_img`) VALUES
(1, 'G# 6/32, Block-A Nazimabad # 2, Karachi', 'elitestore270@gmail.com', '+92302-0292189', '+92302-0292189', 'Elite Tiles', '✨ Welcome to Elite Tiles – A Name Known for Unique Designs and Superior Quality', 'Welcome to Elite Tiles, where every space tells a story. Explore our curated collections for your bathroom, kitchen, and bedroom — crafted to bring elegance, function, and lasting beauty into your home.', 'upload/contact/1749566171_ddd.png');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `panal_img` varchar(255) NOT NULL,
  `panal_text` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `card_img1` varchar(255) NOT NULL,
  `card_img2` varchar(255) NOT NULL,
  `card_img3` varchar(255) NOT NULL,
  `explore_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `categorie`, `panal_img`, `panal_text`, `heading`, `text`, `card_img1`, `card_img2`, `card_img3`, `explore_text`) VALUES
(4, 'Kitchen Tiles', 'uploads/categories/1749637113_panel.jpg', 'Bring Life to Your Kitchen with the Bold Beauty of Elite Tiles.', 'Timeless Kitchen elegance.', 'Our premium kitchen tiles are designed to combine elegance, durability, and easy maintenance — making your kitchen both beautiful and practical. From sleek contemporary styles to warm rustic finishes, our collection offers tiles that elevate your space while standing up to everyday cooking and cleaning. It’s not just about surfaces — it’s about creating a kitchen you’ll love to live in.', 'uploads/content/1748593883_card1.jpg', 'uploads/categories/1749637162_card2.jpg', 'uploads/content/1748593883_card3.jpg', 'Explore kitchens'),
(5, 'Washroom Tiles', 'uploads/content/1748593976_panel.webp', 'Elevate Your Bathroom with the Grace of Elite Panels.', 'Timeless bathroom elegance.', 'Our premium kitchen tiles are designed to combine elegance, durability, and easy maintenance — making your kitchen both beautiful and practical. From sleek contemporary styles to warm rustic finishes, our collection offers tiles that elevate your space while standing up to everyday cooking and cleaning. It’s not just about surfaces — it’s about creating a kitchen you’ll love to live in.', 'uploads/content/1748593976_card1.webp', 'uploads/content/1748593976_card2.jpg', 'uploads/content/1748593976_card3.webp', 'Explore Washroom'),
(6, 'Floor Tiles', 'uploads/content/1748647640_panel.jpg', 'Bring Life to Your Floor & Room with the Bold Beauty of Elite Tiles.', 'Timeless Floor & Room elegance.', 'Incorporated in 1978, Shabbir Tiles and Ceramics Limited is the pioneer and first private sector enterprise in the ceramic industry of Pakistan, listed at Pakistan Stock Exchange. The Company Brand “STILE” enjoys the leading position in the Ceramic and Porcelain Tiles Industry of Pakistan, locally manufacturing Porcelain, Vitrified & Ceramic Tiles, that conform to highest quality standards of durability and aesthetic values. STILE is Pakistan’s only tile brand certified for meeting European Quality Standards by Centro Ceramico, Italy.', 'uploads/content/1748647640_card1.jpg', 'uploads/content/1748647640_card2.jpg', 'uploads/content/1748647640_card3.jpg', 'Explore Floor & Room');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `tile_id` int(11) NOT NULL,
  `tile_name` varchar(50) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `phone_number` bigint(255) NOT NULL,
  `masg` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `tile_id`, `tile_name`, `categorie`, `user_name`, `quantity`, `phone_number`, `masg`, `date`) VALUES
(3, 7, 'MT-CT12816', 'Washroom Tiles', 'arshemurad', '500 fit', 3182935907, 'fhfghghgfdhghgf', '2025-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `masg`
--

CREATE TABLE `masg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` bigint(50) NOT NULL,
  `masg` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masg`
--

INSERT INTO `masg` (`id`, `name`, `number`, `masg`, `date`) VALUES
(4, 'hamza25', 51651651651, 'sdfsdfsd', '2025-05-30 20:17:48'),
(5, 'admin', 245634532453, 'fbfdg', '2025-05-30 20:18:18'),
(6, 'admin', 455345, 'fgfdgf', '2025-05-30 20:23:40'),
(7, 'hamza25', 6756767657657, 'jghjmghjmgh', '2025-05-30 20:25:56'),
(8, 'admin', 546546565, '56546546546', '2025-05-31 02:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `service_content`
--

CREATE TABLE `service_content` (
  `id` int(11) NOT NULL,
  `info` text NOT NULL,
  `panal_img` varchar(255) NOT NULL,
  `card_1` varchar(255) NOT NULL,
  `card_2` varchar(255) NOT NULL,
  `card_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_content`
--

INSERT INTO `service_content` (`id`, `info`, `panal_img`, `card_1`, `card_2`, `card_3`) VALUES
(1, 'At Elite Tiles, we offer more than just premium tiles — we provide complete support to turn your vision into reality. Our skilled tile fixers ensure perfect installation with attention to every detail. Need plumbing support? Our expert plumbers are ready to assist with seamless fittings and reliable solutions. Not sure what to choose? Our customer guidance team is here to help you make informed decisions, from tile selection to layout planning — ensuring beauty, function, and satisfaction in every space.', 'uploads/Service_content/1749635416_panel.jpg', 'uploads/Service_content/1749635373_card1.jpg', 'uploads/Service_content/1749635427_card2.jpg', 'uploads/Service_content/1749635531_card3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tiles`
--

CREATE TABLE `tiles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `finish` varchar(50) NOT NULL,
  `usage` varchar(50) NOT NULL,
  `material` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiles`
--

INSERT INTO `tiles` (`id`, `name`, `categorie`, `size`, `finish`, `usage`, `material`, `description`, `img1`, `img2`, `create_date`) VALUES
(7, 'MT-CT12816', 'Washroom Tiles', '24 x 48', 'Matte', 'Floor, Wall', 'Porcelain', 'Designed for versatility and durability, our Matte Porcelain Tiles are ideal for commercial spaces and bathrooms. Featuring a non-slippery, textured surface, these tiles provide both safety and style, making them a practical and elegant choice for high-traffic areas.', 'uploads/tiles/1749636711_1.png', 'uploads/tiles/1749636741_2.png', '2025-05-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_service`
--
ALTER TABLE `add_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorie_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masg`
--
ALTER TABLE `masg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_content`
--
ALTER TABLE `service_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiles`
--
ALTER TABLE `tiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_service`
--
ALTER TABLE `add_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masg`
--
ALTER TABLE `masg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_content`
--
ALTER TABLE `service_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiles`
--
ALTER TABLE `tiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
