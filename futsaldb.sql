-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 08:56 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futsaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `B_id` int(20) NOT NULL,
  `F_id` int(20) NOT NULL,
  `G_id` int(11) NOT NULL,
  `T_id` varchar(20) NOT NULL,
  `B_date` date NOT NULL,
  `B_time` time NOT NULL,
  `B_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`B_id`, `F_id`, `G_id`, `T_id`, `B_date`, `B_time`, `B_price`) VALUES
(1, 6, 1, 'Sagar ', '2018-08-18', '20:00:00', '1000'),
(2, 10, 2, 'Sagar ', '2018-08-18', '20:00:00', '1000'),
(3, 7, 2, 'Sagar ', '2018-08-18', '20:00:00', '1000'),
(5, 6, 1, 'Sagar ', '2018-08-19', '10:00:00', '1000'),
(6, 6, 1, 'Sagar ', '2018-08-19', '11:00:00', '1000'),
(7, 6, 1, 'Sagar ', '2018-08-19', '12:00:00', '1000'),
(8, 0, 1, '', '0000-00-00', '00:00:00', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `futsal`
--

CREATE TABLE `futsal` (
  `F_id` int(20) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `F_location` varchar(20) NOT NULL,
  `F_owner` varchar(20) NOT NULL,
  `F_phnum` varchar(20) NOT NULL,
  `F_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `futsal`
--

INSERT INTO `futsal` (`F_id`, `F_name`, `F_location`, `F_owner`, `F_phnum`, `F_image`) VALUES
(1, 'velocity', 'Ratopul', 'somene', '984123566', '1.jpg'),
(2, 'Funpark', 'putalisadak', 'ashok', '23145634', '2.jpg'),
(3, 'wembley', 'lokanthali', 'sameer', '3245432', '3.jpg'),
(4, 'kaushaltar', 'kaushaltar', 'suman', '2134543', '4.jpg'),
(5, 'koteshworfc', 'koteshwor', 'deepesh', '345443', '5.jpg'),
(6, 'sankhamulfs', 'sankhamul', 'sagar vandari', '2134434', '6.jpg'),
(7, 'imadolfs', 'imadola', 'aayog', '32445465', '7.jpg'),
(8, 'promotionalfs', 'chardobato', 'visno', '3214232', '8.jpg'),
(9, 'chabahilfs', 'lampokhari', 'saroj', '2345342', '9.jpg'),
(10, 'buddhafs', 'boudha', 'dhurva', '234234', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `R_id` int(11) NOT NULL,
  `F_id` int(11) NOT NULL,
  `T_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`R_id`, `F_id`, `T_id`, `rate`) VALUES
(1, 1, 7, 3),
(3, 6, 8, 8),
(4, 6, 12, 3),
(5, 6, 17, 3),
(7, 5, 12, 7),
(8, 5, 17, 8),
(9, 10, 10, 2),
(10, 2, 18, 1),
(11, 7, 9, 5),
(12, 8, 5, 6),
(13, 10, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `T_id` int(20) NOT NULL,
  `T_name` varchar(20) NOT NULL,
  `T_pw` varchar(500) NOT NULL,
  `T_location` varchar(20) NOT NULL,
  `T_email` varchar(20) NOT NULL,
  `T_phnum` varchar(20) NOT NULL,
  `T_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`T_id`, `T_name`, `T_pw`, `T_location`, `T_email`, `T_phnum`, `T_image`) VALUES
(5, 'Sagar ', 'c40f12d9c8ec71b769aa518699066f2c', 'Kathmandu', 'sagar@gmail.com', '1234567890', 0x3030342e6a7067),
(6, 'Niraj', '84d179c98eb04a37b42305efa5c74573', 'Kathmandu', 'nirajthapa09@gmail.c', '1234567890', 0x303032302e4a5047),
(7, 'Team_brazil', '0fe96bc28acbbee6304413502c616a07', 'Koteswor', 'brazil@gmail.com', '984125632', 0x6272617a696c312e6a7067),
(8, 'Salecious_Brazil', '0fe96bc28acbbee6304413502c616a07', 'Thimi', 'saleciousbrazil@gmai', '9567846321', 0x39383037626135373165663365626562643439373132386439313964306231622e6a7067),
(9, 'Manschaft', '8b373d5f62de5b10deaf74e6ef754ecb', 'Maitidevi', 'mansg@gmail.com', '987665433', 0x65666662623638633638396436393436323630386131313435396436313239352e6a7067),
(10, 'Ajax', 'dd83e2ca403b41756d47a2dc59c91a71', 'jadibuti', 'weedbuti@gmail.com', '987654321', 0x34306663343238356230343835386335333439656136303864663132656338332e6a7067),
(11, 'Vamos_Argentina', '7ade96876ca0da0a15cd45a4914f5a3b', 'Jadibuti', 'jitxaaamakoxorole@gm', '1234567890', 0x62343639633638346465336537623931313039626535383365386466616435652e6a7067),
(12, 'satander_spain', '63e3a4a47a400bf830bc5e6adc00c28c', 'Jadibuti', 'weesbutii@gmail.com', '123456789', 0x35303430366561633563356633643363373862633863663565386537393838632e6a7067),
(13, 'Vai_brazil', '0fe96bc28acbbee6304413502c616a07', 'nayathimi', 'brazillianfc@gmail.c', '345678987', 0x65363466316662313563633834333337646263333532333362383833656330612e6a7067),
(14, 'ic_croatia', '12983229cea60cee43f895a4b0b95de6', 'chabahil', 'icfcb@gmail.com', '324567345', 0x38383634373737376661626139363233623537396630626162633030333134352e6a7067),
(15, 'team_belgium', 'ab9080e3a4d8d4d7884f408bc57b0826', 'tikathali', 'lordfellani@gmail.co', '234543456', 0x31616333353936613937343732666439366438653963313831363633316131342e6a7067),
(16, 'team_sweden', 'cbf0b69fb533233c2139a0ba3bf3a6b3', 'baneswor', 'sweden@gmail.com', '32456543', 0x33653566346237376239613265653566633732396337333637663033613931632e6a7067),
(17, 'team_costarica', 'a56af8fa71116ef55dd35d7fdc747a86', 'maitighar', 'maitighar@gmail.com', '34543345', 0x30346664363131363431303934363532366232663936613865333330363830312e6a7067),
(18, 'chicken_france', '895a91a25649b612bd0f6c70131b3ba0', 'maitidevi', 'maitidevi@gmail.com', '435466543', 0x35643530636638373636623365316165356336623739663238343430663166312e6a7067),
(19, 'team_mexico', '52d9457b7b62e36cbef27d19a18a16d2', 'seetapaila', 'seetapaila@hatti.com', '3456432', 0x30333636643763633462633737373836613361303761626237623432343537612e6a7067),
(20, 'team-oppa', 'd91208cb7b0f5bbef58fe5a34b0da9d0', 'khowpa', 'oppa143@korea.com', '12345675', 0x37363534623136363162623434616637313161376437393731666564636437302e6a7067),
(21, 'team_musa', '2f12864daf642c78cd0f34c112553bd4', 'lokanthali', 'musa@gmail.com', '23455654', 0x37323634316535343735656135303361323833386137656638366530633130652e6a7067),
(22, 'team_cominghome', 'a1983d9cb67c2bd2e8af7930aaa06803', 'imadol', 'cumminghome@gmail.co', '4356676', 0x38333438396265366336623637623431373230303561373736396563333236332e6a7067),
(23, 'team_put in', '8b60cbc3db9b8aaa511ec2effcfe7769', 'tinkune', 'kunakani@gmail.com', '2345543', 0x30383335353939653165313932346436386631313732306131646161383765352e6a7067),
(24, 'team_sala', '54e9e21abb6ecc159b51596cbf347837', 'putalisadak', 'sala123456@gmail.com', '32343243', 0x37373533353638333439323764613135316632366136316165363731386165352e6a7067),
(25, 'team_senegal', 'd9ebf27735f7f99e31c392622bff96a3', 'sinamangal', 'mane@gmailcom', '21342134', 0x62613733623631653238383839343165313961393639373333326264386437652e6a7067),
(26, 'team_penaldo', 'eeeca3343ff3ec751012b982f37e4c64', 'weedbuti', 'penaldo@gmail.com', '21334325', 0x64303535383265376561626565643339336332633562303034613339643163622e6a7067),
(27, 'team_colombia', '7d52cd9b8032527b77aab1bf228c0fba', 'shantinagar', 'colombia@gmail.com', '12343243', 0x62636233313166633039396539653364313932623065326336626138353862342e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `futsal`
--
ALTER TABLE `futsal`
  ADD PRIMARY KEY (`F_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`R_id`),
  ADD KEY `F_id` (`F_id`),
  ADD KEY `T_id` (`T_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`T_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `B_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `futsal`
--
ALTER TABLE `futsal`
  MODIFY `F_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `R_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `T_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_ibfk_1` FOREIGN KEY (`F_id`) REFERENCES `futsal` (`F_id`),
  ADD CONSTRAINT `rates_ibfk_2` FOREIGN KEY (`T_id`) REFERENCES `team` (`T_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
