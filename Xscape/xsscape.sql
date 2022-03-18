-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2022 at 02:14 PM
-- Server version: 10.4.24-MariaDB-cll-lve
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seven_partyhost`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varbinary(700) NOT NULL,
  `jdate` varchar(10) NOT NULL,
  `verified` varchar(10) DEFAULT 'no',
  `HeadColor` int(11) NOT NULL DEFAULT 7,
  `TorsoColor` int(11) NOT NULL DEFAULT 9,
  `LeftArmColor` int(11) NOT NULL DEFAULT 7,
  `RightArmColor` int(11) NOT NULL DEFAULT 7,
  `LeftLegColor` int(11) NOT NULL DEFAULT 19,
  `RightLegColor` int(11) NOT NULL DEFAULT 19,
  `DiscordID` varchar(700) DEFAULT 'notset',
  `Role` varchar(100) DEFAULT 'User',
  `Administrator` varchar(10) DEFAULT 'no',
  `authticket` varchar(300) DEFAULT 'notset',
  `Tickets` varchar(100) DEFAULT '30',
  `Robux` int(11) NOT NULL,
  `Reputation` varchar(100) DEFAULT '0',
  `IsBC` varchar(10) DEFAULT 'no',
  `identifier` varchar(255) NOT NULL,
  `blurb` varchar(255) DEFAULT 'Hello Xscape!',
  `requiresExtraVerification` varchar(50) DEFAULT 'no',
  `approved` varchar(10) DEFAULT 'no',
  `MembershipType` varchar(50) DEFAULT 'None',
  `gettc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `currency` int(11) NOT NULL DEFAULT 2,
  `sale` int(11) NOT NULL DEFAULT 1,
  `thumbnail` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL DEFAULT 'hat',
  `creator` int(11) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created` date NOT NULL,
  `asset` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `description`, `price`, `currency`, `sale`, `thumbnail`, `type`, `creator`, `updated`, `created`, `asset`) VALUES
(1, 'Flintstones Car', 'This is advertising. And an old school way to get about. So put the pedal to the metal (or feet to the ground) and ride in throwback style', 0, 1, 1, 'http://xsscape.cf/thumbnails/catalog/1', 'hat', 3, '2021-12-26 19:04:37', '2021-12-22', 1680),
(2, 'The Classic ROBLOX Fedora', 'A black felt fedora. Ideal for 1920s journalists, detectives, and Linux hackers. This hat demonstrates good taste and exudes class.\r\n', 250, 1, 1, 'https://tr.rbxcdn.com/e8acf7e7b6f0e783625a5a6f83a729c3/420/420/Hat/Png', 'hat', 3, '2021-12-26 19:08:18', '2021-12-22', 1029025),
(3, 'Stare', ':|', 15, 2, 1, 'https://tr.rbxcdn.com/41ebdf42018ee6ea49077e387836afd3/420/420/Face/Png', 'face', 3, '2021-12-26 21:41:40', '2021-12-22', 8560971),
(4, 'Cheezburger', 'U can has cheezburger!', 15, 2, 1, 'https://tr.rbxcdn.com/b5340d517ae54ba32103b9d5a8b47e76/420/420/Gear/Png', 'gear', 1, '2021-12-26 22:01:29', '2021-12-26', 16726030),
(5, 'Telamon Hair', 'As seen on John Shedletsky.', 125, 1, 1, 'https://tr.rbxcdn.com/b7a057720432a2763a07008477137bfe/420/420/Hat/Png', 'hat', 1, '2021-12-26 22:01:29', '2021-12-26', 31312357),
(6, 'Silly Guitar', 'Plays a nice silly tune for you - or make up your own tune!', 10, 2, 1, 'https://tr.rbxcdn.com/de294a1f9d7824afe7cd35f15138334e/420/420/Gear/Png', 'gear', 3, '2021-12-26 22:16:26', '2021-12-26', 57229371),
(7, 'Builderman\'s Wrench', 'Shirt', 100, 2, 1, 'https://t1.rbxcdn.com/62fba9964d26ad2e8556a29062bfa8ca', 'tshirt', 1, '2021-12-26 22:21:51', '2021-12-26', 134647131),
(8, 'Microphone', 'Fnf is shit', 25, 2, 1, 'https://tr.rbxcdn.com/de294a1f9d7824afe7cd35f15138334e/420/420/Gear/Png', 'gear', 3, '2021-12-26 22:16:26', '2021-12-26', 45754061),
(9, 'Epic Face', 'Available as a gift on 26/12/2021', 10000, 1, 0, 'https://tr.rbxcdn.com/c6572ba6ea8b5c29faafad2d5097a1e3/420/420/Face/Png', 'hat', 1, '2021-12-26 23:11:18', '2021-12-26', 42070576);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `maxplayers` varchar(10) NOT NULL,
  `creatorid` varchar(11) NOT NULL,
  `favs` varchar(10) NOT NULL,
  `likes` varchar(10) NOT NULL,
  `dislikes` varchar(10) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `port` int(11) NOT NULL,
  `gearAllowed` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `description`, `created`, `maxplayers`, `creatorid`, `favs`, `likes`, `dislikes`, `thumbnail`, `port`, `gearAllowed`) VALUES
(1, 'Natural Disaster Survival', 'Quickly, run around in circles! Your life depends on it!', '2021-12-20 23:16:12', '50', '1', '0', '0', '0', 'https://tr.rbxcdn.com/e1e35f53f2547279a765cf04fe61ab7b/512/512/Image/Jpeg', 0, 0),
(2, 'The Elevator - Remade', 'test', '2021-12-26 11:11:10', '50', '3', '500', '50', '0', 'https://tr.rbxcdn.com/e11eaa6f4d3fa5739d515072e0a11eda/768/432/Image/Png', 0, 0),
(3, 'Sword Fights on the Heights IV', 'made by Shedletsky', '2021-12-20 23:16:12', '50', '3', '0', '0', '0', 'https://t7.rbxcdn.com/7ead99ebcb061ae23e65a2143d6a456d', 0, 0),
(4, 'Trust Only Building!', 'Trust-only place of Build!\n\nDiscord: https://discord.gg/SBzCyYa355\nOther information: https://catboxed.neocities.org/TOB.html', '2021-12-21 21:43:01', '50', '3', '500', '50', '0', 'http://xsscape.cf/content/images/tob.png', 0, 0),
(5, 'Fling People With a Stick!', 'made by Denis penis', '2021-12-21 21:43:01', '50', '3', '500', '50', '0', 'http://xsscape.cf/content/images/5.png', 0, 0),
(6, 'The Mad Murderer', 'not stolen', '2021-12-21 21:43:01', '50', '1', '500', '50', '0', 'https://t5.rbxcdn.com/5f5462d170900659d11dd02c9ff7220f', 0, 0),
(7, 'Flood Escape!', 'Locked in a flooding facility, you and your team must work together to push buttons, find the way out, crack the code and escape before the flood takes you!\r\n\r\nFlood Escape Classic started development in September 2011, and is what kickstarted the Flood E', '2021-12-26 11:07:22', '20', '130', '10K', '5K', '1K', 'https://t3.rbxcdn.com/3b5278c4aee7ba314c7af37d4279c02c', 0, 0),
(8, 'The Underground War', 'Work as a team to dig your way into the enemy base and steal the enemy flag!', '2021-12-26 11:21:13', '20', '3', '500', '500', '0', 'https://t3.rbxcdn.com/0d698eada68780435716f6f612bae176', 0, 0),
(9, 'The Undead Coming', 'AAA ZOMBIEZ IS COMINGD', '2021-12-26 11:21:11', '20', '1', '500', '500', '500', 'https://tr.rbxcdn.com/987886e23a9264be47317f6e04d927bb/768/432/Image/Png', 0, 0),
(10, 'Nuke The Whales!', 'shedletsky', '2021-12-26 23:19:12', '50', '1', '500', '1', '2', 'https://static.wikia.nocookie.net/roblox/images/a/a0/Nuke_the_Whales.png', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `global`
--

CREATE TABLE `global` (
  `id` int(11) NOT NULL,
  `IsMaintenance` varchar(10) DEFAULT 'no',
  `RegisterDisabled` varchar(10) DEFAULT 'no',
  `VerifyAll` varchar(10) DEFAULT 'no',
  `InviteKeyOnly` varchar(10) DEFAULT 'no',
  `GamesEnabled` varchar(10) DEFAULT 'no',
  `CatalogEnabled` varchar(10) DEFAULT 'no',
  `DisableAdminPowers` varchar(10) DEFAULT 'no',
  `StopDailyCurrency` varchar(10) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `global`
--

INSERT INTO `global` (`id`, `IsMaintenance`, `RegisterDisabled`, `VerifyAll`, `InviteKeyOnly`, `GamesEnabled`, `CatalogEnabled`, `DisableAdminPowers`, `StopDailyCurrency`) VALUES
(1, 'no', 'no', 'yes', 'no', 'yes', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `owneditems`
--

CREATE TABLE `owneditems` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owneditems`
--

INSERT INTO `owneditems` (`id`, `user`, `item`, `type`) VALUES
(7, 3, 2, 'hat'),
(8, 3, 1, 'hat'),
(9, 97, 1, 'hat'),
(10, 1, 2, 'hat'),
(11, 3, 3, 'face'),
(12, 97, 3, 'face'),
(13, 1, 3, 'face'),
(14, 4, 1, 'hat'),
(15, 271, 1, 'hat'),
(16, 169, 1, 'hat'),
(17, 271, 3, 'face'),
(18, 1, 4, 'gear'),
(19, 3, 4, 'gear'),
(20, 55, 1, 'hat'),
(21, 16, 1, 'hat'),
(22, 16, 3, 'face'),
(23, 1, 5, 'hat'),
(24, 250, 1, 'hat'),
(25, 250, 3, 'face'),
(26, 3, 6, 'gear'),
(27, 97, 6, 'gear'),
(28, 121, 1, 'hat'),
(29, 121, 6, 'gear'),
(30, 121, 3, 'face'),
(31, 1, 7, 'tshirt'),
(32, 253, 1, 'hat'),
(33, 133, 1, 'hat'),
(34, 133, 3, 'face'),
(35, 133, 6, 'gear'),
(36, 121, 2, 'hat'),
(37, 121, 5, 'hat'),
(38, 271, 5, 'hat'),
(39, 271, 9, 'hat'),
(40, 1, 9, 'hat'),
(41, 121, 9, 'hat'),
(42, 1, 6, 'gear'),
(43, 231, 9, 'hat'),
(44, 231, 1, 'hat'),
(45, 226, 9, 'hat'),
(46, 8, 1, 'hat'),
(47, 137, 1, 'hat'),
(48, 137, 6, 'gear'),
(49, 16, 6, 'gear'),
(50, 231, 4, 'gear');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `sales` int(11) NOT NULL,
  `item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sales`, `item`) VALUES
(1, 7, 2),
(2, 16, 1),
(3, 8, 3),
(4, 3, 4),
(5, 3, 5),
(6, 7, 6),
(7, 1, 7),
(8, 5, 9);

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `id` int(11) NOT NULL,
  `game` int(11) NOT NULL,
  `players` int(11) NOT NULL,
  `port` int(11) NOT NULL DEFAULT 53640
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` int(11) NOT NULL,
  `game` int(11) NOT NULL,
  `visits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `game`, `visits`) VALUES
(1, 1, 280),
(2, 2, 122),
(3, 3, 42),
(4, 4, 74),
(5, 5, 27),
(6, 6, 68),
(7, 7, 20),
(8, 9, 4),
(9, 8, 14),
(10, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wear`
--

CREATE TABLE `wear` (
  `id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wear`
--

INSERT INTO `wear` (`id`, `item`, `user`, `type`) VALUES
(55, 2, 3, 'hat'),
(57, 3, 97, 'face'),
(58, 1, 4, 'hat'),
(59, 1, 169, 'hat'),
(60, 3, 271, 'face'),
(61, 4, 1, 'gear'),
(62, 3, 3, 'face'),
(63, 4, 3, 'gear'),
(64, 1, 55, 'hat'),
(65, 1, 16, 'hat'),
(66, 3, 16, 'face'),
(68, 1, 250, 'hat'),
(69, 3, 250, 'face'),
(70, 6, 3, 'gear'),
(71, 6, 97, 'gear'),
(73, 3, 121, 'face'),
(74, 6, 121, 'gear'),
(75, 7, 1, 'tshirt'),
(77, 3, 133, 'face'),
(78, 6, 133, 'gear'),
(79, 2, 121, 'hat'),
(81, 9, 121, 'hat'),
(82, 6, 1, 'gear'),
(83, 9, 271, 'hat'),
(84, 9, 231, 'hat'),
(85, 9, 226, 'hat'),
(86, 1, 8, 'hat'),
(88, 6, 16, 'gear');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `global`
--
ALTER TABLE `global`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owneditems`
--
ALTER TABLE `owneditems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wear`
--
ALTER TABLE `wear`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `owneditems`
--
ALTER TABLE `owneditems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=357;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wear`
--
ALTER TABLE `wear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
