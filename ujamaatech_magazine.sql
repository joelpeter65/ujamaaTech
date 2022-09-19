-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2022 at 09:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujamaatech_magazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `C_ID` int(11) NOT NULL,
  `D_ID` int(11) NOT NULL,
  `Comment` longtext NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`C_ID`, `D_ID`, `Comment`, `user`) VALUES
(3, 1, 'Rehema', 'Rehema'),
(4, 1, 'Rehema', 'Rehema'),
(5, 1, 'Rehema', 'Rehema'),
(6, 1, 'Rehema', 'Rehema'),
(7, 1, 'nomah', 'Rehema'),
(8, 1, 'nomah', 'Rehema'),
(9, 1, 'tulis', 'Rehema'),
(10, 1, 'tulis', 'Rehema'),
(11, 1, 'thank you', 'Rehema'),
(12, 14, 'Morning', 'JoelPeter98'),
(13, 14, 'Ok we will start', 'JoelPeter98'),
(14, 14, 'wewe', 'JoelPeter98'),
(15, 14, 'Habari', 'Lucy'),
(16, 3, 'Oy niaje humu', 'Medson'),
(17, 3, 'Jamani mpoo @lucy, @Medy na @Joe hee!!', 'Rehema'),
(18, 14, 'Shoga mboga upo @rey', 'Lucy'),
(19, 3, 'Nipo jamani', 'Rehema'),
(20, 3, 'I m in too', 'Obadia_the_man'),
(21, 14, 'Hey im edina peter im new here', 'Edina_Peter'),
(22, 3, 'mambo vip wanagroup', 'Medson'),
(23, 14, 'a bit nerves and exited too', 'JoelPeter98'),
(24, 10, 'Jaman sjui itakuaje kwa kweli', 'Lucy'),
(25, 14, 'Leo kaz ipo', 'JoelPeter98'),
(26, 0, 'sbsbb', 'Medson'),
(27, 14, 'n hatr watu wengi hadi sio poa', 'JoelPeter98'),
(28, 14, 'Kwel 88 kun vitu', 'Lucy'),
(29, 14, 'ndio nakuaona ', 'Medson'),
(30, 15, 'kwel kabisa', 'Medson'),
(31, 15, 'htr', 'JoelPeter98'),
(32, 14, 'kwel', 'JoelPeter98'),
(33, 16, 'ili noga noga kias then iko boa', 'JoelPeter98'),
(34, 16, 'Jaman nilitaman nije ', 'Lucy'),
(35, 16, 'jamani\r\n', 'JoelPeter98'),
(36, 16, 'Hshsjsjjss dbsnd dhsbd dhsbd  hdbx  hdjejf  jud xu uns x ujsjdbxbxbdhud  hjdjx  heb   hebd chxjd dhd r f fhdhdur dueneur duebejdbd duejeje duejejeje euejeie ruejejd r rjend rhenebe d r', 'Lucy'),
(37, 17, 'Hiyo kitu ni kubwa sio kitoto', 'JoelPeter98'),
(38, 17, 'Pole kwa wafiwa wote nanawaombea majeruhi kupona haraka.', 'Mamak'),
(39, 17, 'Duh Sow papo kwa papo yan faster, \"unaiba unachomwa moto\"', 'Obadia_the_man'),
(40, 18, 'show z kibabe hakuna kualikwa walanini ila eid mubarak', 'Obadia_the_man');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `ID` int(255) NOT NULL,
  `USERID` int(255) NOT NULL,
  `TEXT` longtext NOT NULL,
  `User` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`ID`, `USERID`, `TEXT`, `User`) VALUES
(1, 1, 'niaje medson', 'JoelPeter98'),
(2, 5, 'Try outs', 'Sempoli'),
(3, 11, 'Try outs', 'Sempoli'),
(4, 10, 'niaje', 'JoelPeter98'),
(5, 14, 'hellow', 'JoelPeter98'),
(6, 14, 'Test ya News', 'JoelPeter98'),
(7, 15, 'Vip medson', 'Lucy');

-- --------------------------------------------------------

--
-- Table structure for table `con_heads`
--

CREATE TABLE `con_heads` (
  `ID` int(255) NOT NULL,
  `R_name` varchar(255) NOT NULL,
  `S_name` varchar(255) NOT NULL,
  `Conuniq` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `con_heads`
--

INSERT INTO `con_heads` (`ID`, `R_name`, `S_name`, `Conuniq`) VALUES
(10, 'Sempoli', 'JoelPeter98', 'JoelPeter98Sempoli'),
(11, 'Sempoli', 'Medson', 'MedsonSempoli'),
(13, 'Sempoli', 'Rehema', 'RehemaSempoli'),
(14, 'JoelPeter98', 'Lucy', 'LucyJoelPeter98'),
(15, 'Lucy', 'Medson', 'MedsonLucy'),
(17, 'Rehema', 'Lucy', 'LucyRehema'),
(18, 'Rehema', 'Edina_Peter', 'Edina_PeterRehema'),
(19, 'Rehema', 'Medson', 'MedsonRehema'),
(20, 'Rehema', 'JoelPeter98', 'JoelPeter98Rehema'),
(21, 'Rehema', 'Mamak', 'MamakRehema');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `D_ID` int(255) NOT NULL,
  `D_Head` varchar(255) NOT NULL,
  `Admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`D_ID`, `D_Head`, `Admin`) VALUES
(16, 'How was Nanenane day', 'JoelPeter98'),
(17, 'Ajali ya Morogoro', 'Medson'),
(18, 'Loe', 'JoelPeter98');

-- --------------------------------------------------------

--
-- Table structure for table `thouts`
--

CREATE TABLE `thouts` (
  `TID` int(255) NOT NULL,
  `Thouts` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `PID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thouts`
--

INSERT INTO `thouts` (`TID`, `Thouts`, `user`, `PID`) VALUES
(2, 'bonge la ndege', 'JoelPeter98', 34),
(3, 'Nomah sana', 'JoelPeter98', 34),
(4, 'nomah', 'Lucy', 34),
(5, 'Kaz ipo', 'Lucy', 48),
(6, 'Sio Mchezo', 'JoelPeter98', 48),
(7, 'Ubuyu ', 'JoelPeter98', 49),
(8, 'tulis', 'JoelPeter98', 33),
(9, 'mbon hamfiki', 'Rehema', 48);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `UP_ID` int(255) NOT NULL,
  `APPROVE` varchar(10) DEFAULT 'PENDING',
  `UPLOAD_DATE` date NOT NULL,
  `IMAGES` varchar(255) NOT NULL,
  `CATEGORIES` varchar(255) NOT NULL,
  `BREAKING` varchar(1) DEFAULT '0',
  `TOP` varchar(1) DEFAULT '0',
  `HEADING` text NOT NULL,
  `STORY` longtext NOT NULL,
  `VIDEO` longtext DEFAULT NULL,
  `ST_by` varchar(100) NOT NULL,
  `APPROVED_BY` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`UP_ID`, `APPROVE`, `UPLOAD_DATE`, `IMAGES`, `CATEGORIES`, `BREAKING`, `TOP`, `HEADING`, `STORY`, `VIDEO`, `ST_by`, `APPROVED_BY`) VALUES
(78, 'OK', '2022-04-12', 'E2F086F7-52C0-446B-9931-40A5D2AD3281.jpeg', 'Technology', '1', '', 'Snapchatâ€™s new feature automatically creates Stories based on select newsroomsâ€™ content', 'Snapchat is introducing a new â€œDynamic Storiesâ€ feature that will allow publishers to automatically create Stories on the app based on news stories they publish online, the company announced on Tuesday. Early partners include CNN, Bloomberg, ESPN and more. The new feature uses a publisherâ€™s RSS Feed to automatically create and post Stories on a publisherâ€™s Snapchat Stories. The automatically generated Stories will appear in the appâ€™s Discover feed, after which the Stories will then update in real time.\r\n\r\nThe company says the new format will play a roll in its effort to bring local new content to users on the app around the world. The new Dynamic Stories feature is currently being tested in the United States, the United Kingdom, France and India.\r\n\r\nâ€œWe have always felt a deep responsibility to highlight news and information that is credible and from trusted and clear sources,â€ Snap said in a blog post. â€œWhether itâ€™s breaking news from credible sources on the war in Ukraine or the latest in pop culture or fashion, Dynamic Stories helps Snapchatters learn about the world as it happens.â€\r\n\r\n\r\nThe company has partnered with Axios, Bloomberg, Buzzfeed, CNN, Complex Networks, CondÃ© Nast (Self, Vogue), ESPN, Insider, New York Post, Page Six, The Wall Street Journal, The Washington Post, TMZ, Tomâ€™s Guide, Vice, British Vogue, GQ UK, PinkNews, The Independent, The Mirror, Femme Actuelle, Foot Mercato, Gala, GQ France, Le Figaro, Marie Claire FR, Paris Match, Vogue France, GQ India, MissMalini, Pinkvilla, Sportskeeda, The Quint, Times Now and Vogue India.\r\n\r\nSnap says the new feature gives publishers an easy way to create daily content on the app by combining the practice of publishing on Snapchat into their existing workflows. The new feature will make it easier for newsrooms, especially smaller local ones, to publish their content on Snapchat without having to manually do so. Since the process is automated, publishers wonâ€™t have to dedicate any additional time to reach users on Snapchat.\r\n\r\nThis isnâ€™t the first time that Snapchat has looked to highlight news content on its platform. Back in 2018, Snapchat and NowThis made a deal that would see the social video news publisher launching a NowBreaking channel on Snapchat. The channel debuted on Snapchatâ€™s Discover page in June 2018.\r\n\r\nBefore that, NBC News launched a daily show for Snapchat in 2017 that saw the newsroom air two episodes per day during the week. Following the success of the NBC News show, CNN launched its own daily news program on Snapchat.\r\n\r\nIn the blog post about todayâ€™s announcement, Snap took the time to reiterate that its Discover page only features content from verified media publishers and content creators.', NULL, 'John', 'John'),
(82, 'OK', '2022-04-13', 'sgr1-pix.jpg', 'Business', '1', '1', 'Tanzaniaâ€™s SGR to start operations by end of April, 2022', '<p><strong>Tabora.&nbsp;</strong>The Tanzania Railways Corporation (TRC) has announced that the Dar es Salaam &ndash; Morogoro Phase 1 of the Standard Gauge Railway will start operations at the end of this month (April) with the project almost complete.</p>\r\n\r\n<p>This was said by the corporation&rsquo;s director General Mr Masanja Kadogosa who also confirmed that&nbsp;construction of Morogoro-Dodoma has reached 82.2 percent and completion is set for December 2022.</p>\r\n\r\n<p>The first and the second phase are all under the Turkish contractor YapÄ± Merkezi.</p>\r\n\r\n<p>He did not, however, delve into the details regarding the first phase&rsquo;s operations which is expected to use electric trains.</p>\r\n\r\n<p>He was speaking at a ceremony to lay the foundation stone that was graced by President Samia Suluhu Hassan to lay the foundation stone for the Mkutopora- Dodoma Phase Three SGR construction.</p>\r\n\r\n<p>According to Mr Kadogosa, the government of Tanzania has released Sh609.6billiion out of the total of Sh4. 6 trillion for the construction of the 368 km project.</p>\r\n\r\n<p>&quot;In March, 2021 President Samia Hassan Suluhu&nbsp;promised to finish the construction of SGR this is what we are experiencing now. Soon we will we might sign another contract from&nbsp;for the construction of SGR Kigoma-Tabora.&quot;</p>\r\n', NULL, 'JoelPeter98', 'JoelPeter98'),
(83, 'OK', '2022-04-13', 'FF352BDE-3A1D-41DA-AE0E-A63DBB5BF8BD.jpeg', 'Edit News Cartegory', '1', '1', 'TikTok is testing a private dislike button for comments', '<p>announced&nbsp;today that it has started testing a way for users to identify comments that they think are irrelevant or inappropriate. Following the announcement, the company confirmed to TechCrunch that users who are part of the test will be able to flag these sorts of comments via a private dislike button. The new feature is currently being tested in select regions, excluding the United States.</p><p>&nbsp;</p><p>Once a user dislikes a comment, the dislike won&rsquo;t be public and commenters won&rsquo;t be notified that their comment has been disliked. Commenters and other users also won&rsquo;t be able to see how many times a comment has been disliked.</p>', 'https://www.youtube.com/embed/j53gy90voV8', 'John', 'John'),
(84, 'BLOCKED', '2022-04-13', 'd08249cf06e406ed.jpg', 'Business', '', '', 'Chelsea exits Champions Ligue ', '<p>test</p>', NULL, 'JoelPeter98', NULL),
(85, 'OK', '2022-04-14', '64902AED-9059-4CE8-AE54-A6848B7C4BDB.jpeg', 'Business', '1', '1', 'Elon Musk offers to buy Twitter for $43 billion', '<p>The Twitter and Elon Musk saga is far from over &mdash; Musk has made an offer to buy Twitter, a filing with the U.S. Securities and Exchange Commission&nbsp;<a target=\"_blank\" href=\"https://www.sec.gov/Archives/edgar/data/1418091/000110465922045641/tm2212748d1_sc13da.htm\">showed</a>.</p><p>The billionaire has said he is willing to pay $54.20 per share to buy 100% of the company. It would be an all-cash offer that values the social network at $43.4 billion.</p><ul><li>&ldquo;I invested in Twitter as I believe in its potential to be the platform for free speech around the globe, and I believe free speech is a societal imperative for a functioning democracy,&rdquo; Elon Musk wrote in an email to Bret Taylor, Twitter&rsquo;s chairman of the board (and Salesforce co-chief executive). The email was reproduced in today&rsquo;s SEC filing. &ldquo;However, since making my investment I now realize the company will neither thrive nor serve this societal imperative in its current form. Twitter needs to be transformed as a private company.&rdquo;</li></ul>', '', 'John', 'John');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Level` varchar(100) NOT NULL DEFAULT 'Two',
  `Master` varchar(255) DEFAULT NULL,
  `Status` enum('Blocked','Unblocked') DEFAULT 'Unblocked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `email`, `Username`, `Password`, `Level`, `Master`, `Status`) VALUES
(1, 'Joel Peter Kiwalaka', 'peterjoel65@gmail.com', 'JoelPeter98', 'UEVPUExF', 'One', 'Master', 'Unblocked'),
(2, 'Medson Mathias', 'medsonmathias@yahoo.com', 'Medson', 'TUFUSElBUw==', 'One', '', 'Unblocked'),
(3, 'Lucy Mbilinyi', 'Mbilinylucious@gmail.com', 'Lucy', 'TUJJTElOWUk=', 'One', '', 'Unblocked'),
(4, 'Rehema Msoja', 'reycute@gmail.com', 'Rehema', 'TVNPSkE=', 'One', '', 'Unblocked'),
(7, 'John Sempoli', 'test@gmail.com', 'Sempoli', 'U0VNUE9MSQ==', 'Two', '', 'Unblocked'),
(8, 'Paulina Raymond', 'paulinarey@gmail.com', 'Paulina', 'UkFZTU9ORA==', 'Two', '', 'Unblocked'),
(9, 'Obadia Kawonga', 'onadiaman@gmail.com', 'Obadia_the_man', 'S0FXT05HQQ==', 'Two', '', 'Unblocked'),
(10, 'Edina Peter', 'edinapeterit@gmail.com', 'Edina_Peter', 'UEVURVI=', 'Two', '', 'Blocked'),
(11, 'Mama_kiwalaka', 'kiwalaka@gmail.com', 'Mamak', 'S0lXQUxBS0E=', 'Two', '', 'Unblocked'),
(12, 'Emans', 'test2@judi.co.tz', 'Emzy', 'MTIzNDU=', 'One', NULL, 'Unblocked'),
(13, 'John', 'sample@sample.com', 'John', 'U1RST05HUEFTU0AyMDIy', 'One', 'Master', 'Unblocked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `con_heads`
--
ALTER TABLE `con_heads`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `unique` (`Conuniq`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `thouts`
--
ALTER TABLE `thouts`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`UP_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `con_heads`
--
ALTER TABLE `con_heads`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `D_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `thouts`
--
ALTER TABLE `thouts`
  MODIFY `TID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `UP_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
