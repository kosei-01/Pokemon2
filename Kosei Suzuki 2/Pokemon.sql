-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 24, 2020 at 04:45 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Pokemon`
--

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `comment_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `loginid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`comment_id`, `user_name`, `comment`, `loginid`) VALUES
(12, 'Gareth', 'Hello.', NULL),
(24, 'Ronald', 'How\'s going?', NULL),
(25, 'Gareth', 'I\'m fine', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(1) DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `password`, `email`, `status`) VALUES
(14, 'm5001sis', 'ks01s05rr@yahoo.jp', 'U'),
(15, 'k5001sis', 'ks01s05rr@gmail.com', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `opinion`
--

CREATE TABLE `opinion` (
  `message_id` int(11) NOT NULL,
  `pen_name` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `opinion`
--

INSERT INTO `opinion` (`message_id`, `pen_name`, `message`) VALUES
(1, 'David', 'Could you change the design of Website?\r\nIt looks feminine.'),
(2, 'kosei', 'see you.'),
(3, 'dewf', 'fewfwef'),
(4, 'fwefw', 'fefwfew');

-- --------------------------------------------------------

--
-- Table structure for table `physical_battle`
--

CREATE TABLE `physical_battle` (
  `battle_id` int(11) NOT NULL,
  `attack` int(11) NOT NULL,
  `defence` int(11) NOT NULL,
  `hit_points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `physical_battle`
--

INSERT INTO `physical_battle` (`battle_id`, `attack`, `defence`, `hit_points`) VALUES
(1, 100, 75, 80);

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE `pic` (
  `pic_id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `height` varchar(30) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `ability` varchar(20) NOT NULL,
  `text` varchar(100) NOT NULL,
  `Type1` varchar(20) NOT NULL,
  `Type2` varchar(20) NOT NULL,
  `ability2` varchar(20) NOT NULL,
  `hidden_ability` varchar(20) NOT NULL,
  `poke_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`pic_id`, `image`, `name`, `height`, `weight`, `ability`, `text`, `Type1`, `Type2`, `ability2`, `hidden_ability`, `poke_id`) VALUES
(5, 'impidimp.png', 'impidimp', '0.4m', '5.5kg', 'pranker', 'If he absorbs negative feelings, he will be fine. ', 'dark', 'fairy', 'fresk', 'Pickpocket', 5),
(13, 'pilin.jpeg', 'Jiggrypuff', '0.4m', '5.5kg', 'Cute charm', 'It has a pink body and blue eyes.', 'normal', 'fairy', 'Competitive', 'Friend Guard', 13),
(16, 'mawile.jpeg', 'marvile', '0.5m', '11.5kg', 'intimidate', 'very cute.', 'fairy', 'steel', 'hyper cutter', 'sheer force', 16);

-- --------------------------------------------------------

--
-- Table structure for table `pic2`
--

CREATE TABLE `pic2` (
  `pic2_id` int(11) NOT NULL,
  `image` varchar(20) NOT NULL,
  `skills` varchar(30) NOT NULL,
  `skills_type` varchar(20) NOT NULL,
  `physical_special` varchar(20) NOT NULL,
  `skills_text` varchar(100) NOT NULL,
  `accuracy` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pic2`
--

INSERT INTO `pic2` (`pic2_id`, `image`, `skills`, `skills_type`, `physical_special`, `skills_text`, `accuracy`, `power`, `skill_id`) VALUES
(11, 'playrough.jpeg', 'Play rough', 'fairy', 'physical', 'dwdss', 90, 90, 20),
(13, 'Fairywind.jpg', 'Fairy wind', 'fairy', 'special', 'fefe', 100, 40, 22);

-- --------------------------------------------------------

--
-- Table structure for table `Pokedex`
--

CREATE TABLE `Pokedex` (
  `poke_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `ability` varchar(20) NOT NULL,
  `text` varchar(100) NOT NULL,
  `Type1` varchar(20) NOT NULL,
  `Type2` varchar(20) NOT NULL,
  `ability2` varchar(20) NOT NULL,
  `hidden_ability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Pokedex`
--

INSERT INTO `Pokedex` (`poke_id`, `name`, `height`, `weight`, `ability`, `text`, `Type1`, `Type2`, `ability2`, `hidden_ability`) VALUES
(5, 'impidimp', '0.4m', '5.5kg', 'pranker', 'If he absorbs negative feelings, he will be fine. ', 'dark', 'fairy', 'fresk', 'Pickpocket'),
(13, 'Jiggrypuff', '0.4m', '5.5kg', 'Cute charm', 'It has a pink body and blue eyes.', 'normal', 'fairy', 'Competitive', 'Friend Guard'),
(16, 'marvile', '0.5m', '11.5kg', 'intimidate', 'very cute.', 'fairy', 'steel', 'hyper cutter', 'sheer force');

-- --------------------------------------------------------

--
-- Table structure for table `Skill`
--

CREATE TABLE `Skill` (
  `skill_id` int(11) NOT NULL,
  `skills` varchar(30) NOT NULL,
  `skills_text` varchar(100) NOT NULL,
  `skills_type` varchar(20) NOT NULL,
  `accuracy` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `physical_special` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Skill`
--

INSERT INTO `Skill` (`skill_id`, `skills`, `skills_text`, `skills_type`, `accuracy`, `power`, `physical_special`) VALUES
(20, 'Play rough', 'dwdss', 'fairy', 90, 90, 'physical'),
(22, 'Fairy wind', 'fefe', 'fairy', 100, 40, 'special');

-- --------------------------------------------------------

--
-- Table structure for table `special_attack`
--

CREATE TABLE `special_attack` (
  `battle_id` int(11) NOT NULL,
  `special_attack` int(11) NOT NULL,
  `special_defence` int(11) NOT NULL,
  `hit points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `birthday`, `gender`, `loginid`) VALUES
(14, 'Maria', '1995-02-22', 'female', 14),
(15, 'Kosei', '1996-01-05', 'male', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `physical_battle`
--
ALTER TABLE `physical_battle`
  ADD PRIMARY KEY (`battle_id`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `pic2`
--
ALTER TABLE `pic2`
  ADD PRIMARY KEY (`pic2_id`);

--
-- Indexes for table `Pokedex`
--
ALTER TABLE `Pokedex`
  ADD PRIMARY KEY (`poke_id`);

--
-- Indexes for table `Skill`
--
ALTER TABLE `Skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `special_attack`
--
ALTER TABLE `special_attack`
  ADD PRIMARY KEY (`battle_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `opinion`
--
ALTER TABLE `opinion`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `physical_battle`
--
ALTER TABLE `physical_battle`
  MODIFY `battle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pic`
--
ALTER TABLE `pic`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pic2`
--
ALTER TABLE `pic2`
  MODIFY `pic2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Pokedex`
--
ALTER TABLE `Pokedex`
  MODIFY `poke_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Skill`
--
ALTER TABLE `Skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `special_attack`
--
ALTER TABLE `special_attack`
  MODIFY `battle_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
