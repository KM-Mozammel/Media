-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 06:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darwin_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `mp3` varchar(255) NOT NULL,
  `Artist` varchar(255) NOT NULL,
  `Album` varchar(255) NOT NULL,
  `Release` varchar(255) NOT NULL,
  `Band` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Rating` int(255) NOT NULL,
  `Comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `Title`, `mp3`, `Artist`, `Album`, `Release`, `Band`, `Genre`, `Rating`, `Comment`) VALUES
(6, 'Poth', 'resorces/audios/06.Poth-Arnab_FusionBD.Com.mp3', 'Arnob', 'Charpoka', '2013', 'Chirkut', 'Classic', 5, 'Nice Song'),
(9, 'Kanamachi', 'resorces/audios/02.Kanamachi-Chirkut_FusionBD.Com.mp3', 'Circuit', 'Chircuit', '2015', 'Chircuit', 'Pop', 5, 'Nice song'),
(15, 'National Anthem', 'resorces/audios/bangladesh.mp3', 'Robindronath Thagore', 'None', '1971', 'Various', 'Country Music', 5, 'Nice antheme'),
(16, 'নিচে পদ্মে চরক বানে', 'resorces/audios/নিছে পদ্ম.mp3', 'মোজাম্মেল খন্দকার', 'লালন ফকির কালেকশন', '2024', 'Solo', 'Folk', 5, 'Lalon Shai is the best.');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `image`, `author`, `date`, `categories`) VALUES
(4, 'জাতীয় সঙ্গীত ', 'আমার  সোনার বাংলা, আমি তোমায় ভালোবাসি।\r\n\r\nচিরদিন  তোমার আকাশ, তোমার বাতাস, আমার প্রাণে বাজায় বাঁশি।\r\n\r\nও মা,  ফাগুনে তোর আমের বনে ঘ্রাণে পাগল করে,\r\n\r\nমরি হায়, হায় রে -\r\n\r\nও মা,  অঘ্রানে তোর ভরা ক্ষেতে  আমি  কী দেখেছি মধুর হাসি।\r\n\r\nকী শোভা, কী ছায়া গো,  কী স্নেহ, কী মায়া গো-\r\n\r\nকী আঁচল বিছায়েছ বটের মূলে,  নদীর কূলে কূলে।\r\n\r\nমা, তোর  মুখের বাণী আমার কানে লাগে সুধার  মতো,\r\n\r\nমরি হায়, হায় রে-\r\n\r\nমা, তোর  বদনখানি মলিন হলে,  ও মা,  আমি নয়নজলে ভাসি।', 'resorces/images/জাতীয়-সংগীত.jpg', 'Mozammel Kandakar', '2024-02-18 00:00:00', 'বাংলাদেশ'),
(9, 'Thought', 'In their most common sense, the terms thought and thinking refer to conscious cognitive processes that can happen independently of sensory stimulation. Their most paradigmatic forms are judging, reasoning, concept formation, problem solving, and deliberation. But other mental processes, like considering an idea, memory, or imagination, are also often included. These processes can happen internally independent of the sensory organs, unlike perception. But when understood in the widest sense, any mental event may be understood as a form of thinking, including perception and unconscious mental processes. In a slightly different sense, the term thought refers not to the mental processes themselves but to mental states or systems of ideas brought about by these processes.', 'resorces/images/Jardin_du_Musee_Rodin_Paris_Le_Penseur_20050402_(02).jpg', 'Wikipedia', '2024-02-28 00:00:00', 'Human Thought'),
(10, 'Rational Thinking', 'Rational thinking is a process. It refers to the ability to think with reason. It encompasses the ability to draw sensible conclusions from facts, logic and data. In simple words, if your thoughts are based on facts and not emotions, it is called rational thinking. Rational thinking is a process. It refers to the ability to think with reason. It encompasses the ability to draw sensible conclusions from facts, logic and data. In simple words, if your thoughts are based on facts and not emotions, it is called rational thinking. Rational thinking is a process. It refers to the ability to think with reason. It encompasses the ability to draw sensible conclusions from facts, logic and data. In simple words, if your thoughts are based on facts and not emotions, it is called rational thinking.', 'resorces/images/311312986_2284086375084577_6389898593829397613_n.jpg', 'Google', '2024-03-01 00:00:00', 'Human Thought');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mp4` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `release` varchar(255) NOT NULL,
  `band` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `mp4`, `artist`, `album`, `release`, `band`, `genre`, `rating`, `comment`) VALUES
(4, 'Ei je nodi', 'resorces/videos/EiJe NoDi JaY SagORe - (KiSHoRe KuMaR).mp4', 'Kishore Kumar', 'Solo', '1998', 'Various', 'Classic', '5', 'Very Unique song'),
(9, 'Jamuna TV', 'resorces/videos/poets.mp4', 'Jamuna Tv', 'TVC', 'TVC', 'Bangladesh', 'TVC', '5', 'Jamuna TV'),
(11, 'Friends Forever', 'resorces/videos/android.mp4', 'Windows', 'Add', '2014', 'Add', 'Add', '5', 'Wildlife');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
