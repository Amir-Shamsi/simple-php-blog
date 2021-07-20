-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2020 at 08:33 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(6) UNSIGNED NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `full_text` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `thumbnail_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `full_pic_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `description`, `full_text`, `thumbnail_link`, `full_pic_link`) VALUES
(1, 'We Were Hit by Biggest DDoS Attack on Record in 2017', 'Google is reporting that a state-sponsored hacking group launched the biggest DDoS attack on record against the company back in Sept. 2017. \r\n\r\nOn Friday, Google’s cloud business disclosed the incident, which involved bombarding the company’s internet networks with a flood of traffic. The DDoS attack lasted over a six-month campaign, peaking to 2.5Tbps in traffic. \r\n\r\nThe figure surpasses the 2.3Tbps assault Amazon’s cloud business AWS experienced this past February, which was previously thought to be the biggest DDoS attack on record. \r\n\r\nAccording to Google’s security team, the 2.5Tbps DDoS against the company was sourced back to a government-backed group that harnessed four internet service providers in China to send the flood of traffic. \r\nA DDoS is designed to overwhelm a network, resulting in an outage that can slow or shut down access to a company’s websites. But despite the 2.5Tbps assault simultaneously targeting thousands of Google servers back in 2017, the “attack had no impact,” wrote company security engineer Damian Menscher in today’s blog post. \r\n\r\n“The attacker used several networks to spoof 167 Mpps (millions of packets per second) to 180,000 exposed CLDAP, DNS, and SMTP servers, which would then send large responses to us,” he added. “This demonstrates the volumes a well-resourced attacker can achieve: This was four times larger than the record-breaking 623 Gbps attack from the Mirai botnet a year earlier.” \r\n\r\nThe company disclosed the incident while talking up its efforts to ensure Google’s cloud business remains protected from major DDoS attacks. Google has been analyzing the most significant DDoS attacks, and concludes the traffic volumes have been growing exponentially. But at the same time, the internet itself has been growing exponentially as well, giving companies more bandwidth to protect themselves from the attacks.', 'assets\\img\\articles\\1_t.jpg', 'assets\\img\\articles\\1_fpic.jpg'),
(2, 'Raspberry Pi Compute Module 4 Launches', 'Whenever the Raspberry Pi Foundation releases a new version of the Raspberry Pi single-board computer, it\'s followed by a Compute Module intended for use as an embedded computer in other products. The Raspberry Pi 4 launched back in June last year, and today we finally got the Raspberry Pi Compute Module 4.\r\n\r\nThe new module uses the same 1.5GHz qud-core 64-bit ARM Cortex-A72 processor found on the Raspberry Pi 4, which can be combined with up to 8GB of RAM, 32GB of eMMC Flash storage, and optional 2.4GHz and 5GHz 802.11b/g/n/ac Wi-Fi and Bluetooth 5.0. There\'s a dual HDMI interface supporting up to 4K resolution, a single-lane PCI Express 2.0 interface, and 28 GPIO pins. It\'s also possible to connect dual cameras.\r\n\r\nIf the fourth-generation module looks different to what has come before, it\'s because the overall footprint of the board has been significantly reduced. The downside to that is a compatibility break with earlier modules, but it does mean products using the new module can be smaller.', 'assets\\img\\articles\\2_t.jpg', 'assets\\img\\articles\\2_fpic.jpg'),
(3, 'Chinese Hackers Are Posing as McAfee Antivirus to Phish Victims', 'Chinese state-sponsored hackers may be impersonating antivirus provider McAfee in order to trick high-profile targets into downloading malware.\r\n\r\nThe suspected Chinese hacking group, APT 31, has been resorting to the tactic, according to Google’s security team. Back in June, the company’s security researchers reported that APT 31 had been targeting Joe Biden’s Presidential campaign by sending phishing emails to his staff. The goal was to hijack their personal email accounts, but Google says the phishing attempts all appear to have failed.\r\n\r\nOn Friday, the company provided an update on APT 31’s activities. Google’s security team has spotted the hackers emailing links designed to ultimately download malware hosted over Github, the software development platform.\r\n\r\nSpecifically, the Window-based malware is built using the Python computing language. The hacker can then control the malicious code using the free cloud storage service Dropbox. ', 'assets\\img\\articles\\3_t.jpg', 'assets\\img\\articles\\3_fpic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactme`
--

CREATE TABLE `contactme` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `phone` int(20) DEFAULT NULL,
  `message` text CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactme`
--
ALTER TABLE `contactme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactme`
--
ALTER TABLE `contactme`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
