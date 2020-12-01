-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 08:19 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donating`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `num` int(11) NOT NULL,
  `article` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`num`, `article`) VALUES
(1, '<p> \r\n		\r\n			<b>1- Bring More Meaning to Your Life </b>  <br>\r\n			When you donate money to charity, you create opportunities to meet new people who believe\r\n			 in the same causes that inspire you. That, and making a real impact on those causes,\r\n			 can infuse your everyday life with more meaning. If you\'ve been stuck in a rut, \r\n			 whether personally or professionally, \r\n			 sometimes the simple act of donating cash can do the trick and reinvigorate your life.<br>\r\n			 \r\n			<b> 2- Promote Generosity in Your Children</b> <br>\r\n			When your kids see you donating money,\r\n			 they\'re much more likely to adopt a giving mindset as they grow up. \r\n			 I write from personal experience.\r\n			 I\'ve donated money to a variety of charities over \r\n			 the years and have always made sure to inform my \r\n			 eight-year-old son of my efforts. Last Christmas,\r\n			 when he and I were shopping at a mall, \r\n			 he spotted a kiosk for a charity and rather than spending some of\r\n			 his allotted money on Christmas gifts, he asked if we could sponsor \r\n			 a hungry child overseas. We signed up then and there.\r\n			 Do the same with your kids and you might see similar results.<br>\r\n			<b>3- Motivate Friends and Family</b> <br>\r\n			When you let your friends and family\r\n			 know of your charitable donations, \r\n			 they may find themselves more motivated to\r\n			 undertake their own efforts to give.\r\n			 It takes a village to address issues such as world poverty,\r\n			 scientific advancement, and early childhood education.\r\n			 Stoking passions in the folks around you is a\r\n			 very positive and tangible effect of your own giving.\r\n			 </p>'),
(2, ' <p>In addition to a new home with loving parents, \r\n							orphans often need basic survival provisions, medication, food, \r\n							clothing, blankets, housing and protection from dangers and abuse. \r\n							Many children are orphaned often due to extreme poverty, political strife, \r\n							abuse and regional disasters.  The fortunate ones may live in care centers or orphanages; \r\n							many others try to survive by begging on the \r\n							streets and others are forced into prostitution by human trafficers. \r\n							Saddly, even their parents sometimes play a role in selling their children to trafficers.\r\n							In cases of disaster, orphans may live in tents or temporary shelters with minimal subsistence.  \r\n							You can give money, materials from your business or collections, or items that you purchase.\r\n							Below the list of Needed Gifts, the Giving Resources will help you distribute your \r\n							gifts to the intended recipients. \r\n							Your local phone book lists many charities \r\n							and you can also search Google for Orphanages \r\n							in Europe Asia Africa America. Check with the \r\n							Giving Resource or charity to make sure that they \r\n							can accept and distribute material or in-kind gifts.\r\n							Even if the item is listed on a wish list, it\'s best to\r\n							communicate with the organization in advance of shipping\r\n							or personally bringing any donated materials.<br> \r\n					<b>Needed Gifts:</b> <br>\r\n					 \r\n					Medication<br>\r\n						Many orphans need medication to help them survive day by day.\r\n					  Some have serious illnesses and are in \r\n					  critical need of medical care, \r\n					  medication and treatment for illnesses often caused by years of neglect or abuse.\r\n					  If you or your business can contribute medication,\r\n					  this will be much appreciated. For example,\r\n					  asthma care can be costly and yet greatly needed as well as mobility devices such as wheelchairs , \r\n					  for example. Baby care and medicinal supplies are also greatly needed in most orphanages.<br>\r\n					Food<br>\r\n						In various parts of the world, many orphans  survive by begging for food or live in care centers with minimal subsistence. \r\n						Unfortunately, they often live in places where opportunities for earning living wages are hard to find. \r\n						This problem occurs in the United States and many parts of the world, especially in the developing nations. <br>\r\n					Clothing<br>\r\n						Good clothing is important to orphaned children to protect them from the elements and to help them feel socially acceptable.  People who are too poor to afford housing need clothing for themselves and their children. In general, orphans need clothing such as play clothes, sleepwear, socks - stockings , shoes - boots, underwear and sweaters - hoodies to keep them comfortable during cold weather. Your local charity specializing in helping orphans and homeless people will advise you on specific items in need.\r\n							</p>'),
(3, '<p>The holidays mark a season to create joy. Giving to others can be the best gift many people receive all year. As we visit with our loved ones, many of us begin to think of what we can do to assist others in need.\r\n\r\n\r\n						During the holiday season and year-round,\r\n						 millions of seniors are suffering while trying to meet their basic needs. \r\n						 About 56 percent of seniors age 80+ reported a severe disability and 29 percent \r\n						 of the same population reported needing assistance.\r\n\r\n						With such a great need in the senior community, \r\n						there are many everyday items we take for granted that can be donated to seniors. \r\n						We have a compiled a list of ten useful items: <br>\r\n\r\n						<b>1.	Blankets, Throws, or Shawls</b><br>   \r\n						According to a recent article on agingcare.com,\r\n						 seniors can become dangerously chilled because they have less fat,\r\n						 slower circulation, and a more sluggish metabolism. A senior can even\r\n						 become hypothermic while indoors. Receiving a blanket or shawl can warm the body and the heart.<br>\r\n\r\n						<b>2.	Soaps and lotions</b><br>\r\n						Be mindful of common allergens and care facility rules when you are donating<br>\r\n\r\n						<b>3.	Disposable Undergarments</b><br>\r\n						Recent statistics from the National Council on Aging suggest, \r\n						25 million or more Americans aged 60+ are economically insecure living\r\n						 at or below 250% of the federal poverty level. The federal poverty level is\r\n						 $29,425 per year for a single person. Purchasing basic items like disposable\r\n						 undergarments may be a hardship. <br>\r\n\r\n\r\n						<b>4.	Diabetic Socks</b><br>\r\n						1 in 4 seniors 65 or older have type 2 diabetes.\r\n						 Slip-resistant diabetic socks can keep the feet dry, \r\n						 decrease the risk of foot injury, and help with circulation.<br>\r\n\r\n						<b>5.	Large print books</b><br>\r\n						With nearly 1 in 3 seniors experiencing a vision-reducing health issue,\r\n						 large print books can help seniors enjoy popular best sellers of virtually every genre.<br>\r\n\r\n						<b>6.	Games and Puzzles</b><br>\r\n						Give a gift that can keep the mind active and provide hours of fun.<br>\r\n\r\n						<b>7.	Towels </b><br>\r\n						A set of comfortable towels may be a perfect touch of home \r\n						or a kind luxury often overlooked for a senior in need.<br>\r\n\r\n						<b>8.	Denture adhesive, cleanser, or holders</b><br>\r\n						According to the dental experts featured in the Journal \r\n						of International Oral Health, Loose painful teeth or ill-fitting dentures may \r\n						result in a reduced desire or ability to eat contributing to poor eating habits. \r\n						For seniors with health problems who are living on a fixed income, basics like these are a big need.<br>\r\n\r\n						<b>9.	Senior Friendly Manicure Kits</b><br>\r\n						Many older adults have nails that are hard to cut or reach.\r\n						 Donating a nail kit that works well for clipping for thick toenails, \r\n						 or is easy to use with hands that may not exert a strong grip can be particularly useful.<br>\r\n\r\n						<b>10.	Fresh Fruit, snacks, or non-perishable food items </b><br>\r\n						Be sure to check on dietary restrictions prior to donating these items.<br>\r\n\r\n								</p>'),
(4, '<p>Numerous organizations across the country work tirelessly for the i\r\n						nclusion of children and adults who live with special needs and disabilities. Whether\r\n						it is through education or advocacy programs or more hands-on training and rehabilitation, \r\n						charities everywhere are striving to help those with special needs excel in their daily responsibilities.\r\n						These top notch organizations do an exceptional job of developing and implementing programs that make our\r\n						world better equipped to include all special needs individuals and to prepare those individuals to better\r\n						take on the world at their doorstep.<br> \r\n						\r\n						<b>Blooming with Autism</b><br>\r\n						At Blooming With Autism, children\r\n						with autism receive attention from an early age from leaders in many \r\n						unique types of therapy. Those include instances of gymnastics, karate,\r\n						speech, and more. Founder and President of Blooming With Autism, Jodi Davis, \r\n						is empowered by the older of her two daughters who was diagnosed with autism at 20 months.\r\n						Her passion is to help families, look at autism positively. Through exposure to a\r\n						variety of therapy, more types and degrees of autism along the spectrum show improvement.<br>\r\n						\r\n						<b>Easterseals</b><br>\r\n						This 90 year old charity has forged paths for individuals with special needs and \r\n						disabilities, especially autism, to better assimilate into their own communities across the country. \r\n						They provide a variety of unique and effective programs for early development, rehabilitation, and even job\r\n						training which all contribute to the personal and professional success of their members. Beyond their services to\r\n						those with special needs, Easterseals provides training and education for families and caregivers so that any\r\n						child born with a disability can better reach his/her full potential. Adults with any mental or physical disability \r\n						are welcomed at the Easterseals daytime care center where their recovery is monitored and rehabilitation is \r\n						facilitated.<br>\r\n				 \r\n						<b>Allies Inc.</b> <br>\r\n						The vision for this nonprofit is A world where limitation does not distinguish nor define.\r\n						By offering developmental programs in things like music and farming, their members get to experience \r\n						many normal activities where no disability can limit their participation. Beyond recreation, members can \r\n						receive assistance with healthcare and housing which ultimately leads them to greater independence.\r\n						</p>'),
(5, '<p>While Peanut\'s mom is a\r\n						gourmet vegan chef with the ability to create such delicious \r\n						meals for her pups, not every foster parent or shelter is able to provide\r\n						that for their pets. That is why it\'s important to support your local shelter through volunteer and donations. \r\n\r\n				Volunteering at your local \r\n				shelter is one of the most valuable ways to help.\r\n				 Volunteering can involve many responsibilities.\r\n				 You can help walk dogs, clean kennels, attend adoption events, and even just play with or read to dogs. <br>\r\n				 Another great way to volunteer is to donate any photography or marketing skills. \r\n				 One of the most helpful ways to get a pet adopted is to have a great photo, showing off their looks and personality. \r\n				 \\Shelters are always looking for ways to get their pets into new homes, and your photography skills could do the trick. \r\n\r\n				If you want to help, but don\'t have the time to volunteer, you can always make a monetary donation\r\n				 to a local rescue or foundation. This money can be used for anything the shelter\r\n				 needs to thrive, from supplies to medical care to microchips. Donations can be given once,\r\n				 or every month. Donations can also be given in someone else\'s name as a gift or in their memory. \r\n\r\n				However, donations don\'t have to be monetary. You can check with the shelter to see what supplies\r\n				 donations they need, as many shelters have specific wish lists. Common asks for donations include: \r\n\r\n				Toys: Having a toy can help lift a dog\'s spirits and make them feel loved. Make sure to check with your local shelter about what toys are safe and approved for their dogs.\r\n				Place Mats: These are used to create beds and lounging spots for cats.\r\n				Any Bedding: This includes blankets, sheets, \r\n				and pillowcases to keep shelter pups cozy and warm.\r\n				Heating pads: They help keep newborn puppies warm. \r\n				However, not all heating pads are safe for animals,\r\n				 so make sure to check with your local shelter before donating.\r\n				Food: This is usually what shelters need the most, especially \r\n				when they have lots of hungry mouths to feed! Always check with the shelter to see what food they prefer.\r\n				You can also donate daily household items to help shelters keep their facilities clean.\r\n				 Items like old newspapers, paper towels, and soaps are always appreciated. Make sure to check ahead of time to see what kinds of cleaning supplies they accept. \r\n				</p>');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `author` varchar(32) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `author`, `num`) VALUES
(1, 'Jay Robertson', 1),
(2, 'none', 2),
(3, 'Caring Transitions', 3),
(4, 'Abby Hull', 4),
(5, 'Mary Beth McAndrews', 5);

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `donate_num` int(11) NOT NULL,
  `money` int(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `wheredonate` varchar(64) NOT NULL,
  `shop` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`donate_num`, `money`, `username`, `wheredonate`, `shop`) VALUES
(1, 1000, 'shahed_kar', 'Health', 'USB, Cup'),
(2, 2000, 'momo', 'Diablties', 'Bag, Cover'),
(3, 50, 'shahed_kar', 'Health', 'Cup, Bag'),
(4, 50, 'shahed_kar', 'Disablties', 'Cup, Bag'),
(5, 50, 'ehsan1234', 'Disablties', 'USB, Cover'),
(6, 1000, 'shahed_kars', 'Health', 'USB, Cup');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `meeting_num` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `city` varchar(32) NOT NULL,
  `country` varchar(32) NOT NULL,
  `address1` varchar(128) NOT NULL,
  `address2` varchar(128) NOT NULL,
  `contact_num` varchar(64) NOT NULL,
  `time` varchar(64) NOT NULL,
  `date` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`meeting_num`, `username`, `city`, `country`, `address1`, `address2`, `contact_num`, `time`, `date`) VALUES
(1, 'shahed_kar', 'Saudi Arabia', 'Riyadh', 'Haroon_Arasheed', 'Fayha', '+966504481088', '8:00-12:00 AM', '2019-12-05'),
(2, 'shahed_kar', 'Saudi Arabia', 'jeddah', 'Haroon_Arasheed', 'Fayha', '+966504481088', '4:00-6:00 PM', '2019-12-04'),
(3, 'shahed_kar', 'Saudi Arabia', 'jeddah', 'Haroon_Arasheed', 'Fayha', '+966504481088', '12:00-2:00 PM', '2019-05-30'),
(4, 'momo', 'Saudi Arabia', 'jeddah', 'Haroon_Arasheed', 'Fayha', '+966504481088', '12:00-2:00 PM', '2019-12-01'),
(5, 'shahed_kar', 'Saudi Arabia', 'Riyadh', 'Haroon_Arasheed', 'Fayha', '+966504481088', '8:00-12:00 AM', '2019-10-05'),
(6, 'shahed_kar', 'Saudi Arabia', 'Riyadh', 'Haroon_Arasheed', 'Fayha', '+966504481088', '2:00-4:00 PM', '2019-06-04'),
(7, 'ehsan1234', 'Dammam', 'Saudi Arabia', 'Haroon_Arasheed', 'Fayha', '+966504481088', '2:00-4:00 PM', '2019-04-30'),
(8, 'shahed_kars', 'Abha', 'Saudi Arabia', 'Haroon_Arasheed', 'Fayha', '+966504481088', '2:00-4:00 PM', '2019-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `email`, `username`, `password`) VALUES
('Albatool', 'katrangi', '216410068@psu.edu.sa', 'Albatool_kat', '$2y$10$1dLUBDKZ9FnNUk4N6xzTBeE9KPlP5TbeO6RUqpqn.FG7HNoORLeoy'),
('ehsan', 'kat', 'ehsan@gmail.com', 'ehsan1234', '$2y$10$mWkbri0Jmm.9TrZ8Zwf9eOG/jaYP46duaOSPaVW2xJbl3QtDKl0BK'),
('einas', 'kharsa', '216410271@psu.edu.sa', 'Einas_kar', '$2y$10$5LWScxiSehp6XsbRrbQGGOOVj7wINurQbHPMm16pUArgsm24HTgZm'),
('enas', 'kharsa', 'ekharsa74@gmail.com', 'enas988', '$2y$10$J9qr6JE.ZWEib7d5jPHPW.YShfhwLHQcBTAlyVm1oeZTUXY564.Uy'),
('Farah', 'Bitar', 'farah.sb@hotmail.com', 'Farah Bitar', '$2y$10$XoYdUI7OBMXKXH91bEc0i.f80xadFjEa916i9dQ/86q2XsFcAk1vm'),
('khawlah', 'agha', 'khwlahagha@hotmail.com', 'kay', '$2y$10$oKjttjeKLHDIEI7xxmMsUupEBoMdz9cki9GxWPKsolR3/uXo3d2XK'),
('maha', 'alhashem', 'maha@gmail.com', 'maha', '$2y$10$87WnP07mb3Zvh3ufD6t.peEtnn7wdTqOgv82cbd/kg3QljpTCMfJe'),
('maha', 'alhashem', 'maha@gmail.com', 'momo', '$2y$10$CHkoyop4vrv5XSygOf../OTCJGmzf8yMcTH1VGgldJiZ3AJTOSCq6'),
('shahed', 'alkharsa', '216410271@psu.edu.sa', 'shahed_kar', '$2y$10$kf3pgnTPiTA1etD6tFQXN.iYoxnZrTmiG8yjtIlumMo7NuuwPRuLW'),
('shahed', 'm', 'shahed1998k@gmail.com', 'shahed_kars', '$2y$10$TyD53d/YKhSfYnt4XtpA6.MPCVgcKiaqBNobBbwhopTvS4bmJhivu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`),
  ADD KEY `num` (`num`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`donate_num`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`meeting_num`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `donate_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `meeting_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`num`) REFERENCES `articles` (`num`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donate`
--
ALTER TABLE `donate`
  ADD CONSTRAINT `donate_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `meeting_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
