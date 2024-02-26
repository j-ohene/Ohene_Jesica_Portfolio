-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2024 at 04:45 PM
-- Server version: 10.6.16-MariaDB-cll-lve-log
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vkmopl00_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `messenger_id` smallint(5) UNSIGNED NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(9) NOT NULL,
  `work_id` int(3) DEFAULT NULL,
  `file_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `work_id`, `file_name`) VALUES
(1, 1, 'quatro-home-desktop.jpg'),
(2, 1, 'shop-page-desktop.jpg'),
(3, 1, 'quatrotablet-about.png'),
(4, 2, 'altopromo-desktop.png'),
(5, 2, 'alto-specdesktop.png'),
(6, 2, 'alto-mobiledesktop.png'),
(7, 3, 'music-mixer.jpg'),
(8, 3, 'mixerpieces.jpg'),
(9, 3, 'mixerpieces.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `date_created` varchar(25) NOT NULL,
  `collaborators` varchar(100) NOT NULL,
  `technologies_used` varchar(125) NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `date_created`, `collaborators`, `technologies_used`, `image`) VALUES
(1, 'Quatro Website', 'We were tasked with a comprehensive rebranding effort to revitalize  the brand while paying homage to its nostalgic roots. With the use of HTML and CSS grid, we created a visually compelling website that reflects Quatros refreshed identity.', 'August 3 2023', 'Jesica Ohene, Sandra Neiras', 'HTML, CSS, JavaScript, Adobe Illustrator, Adobe Photoshop', 'quatro-home-desktop.jpg'),
(2, 'Alto Earbuds', 'An interactive webpage advertising wireless earbuds achieved using html, SASS, and JavaScript.\\r\\nImplemented scroll-triggered animations using the GreenSock library through JavaScript to add dynamism and interactivity to the page.\\r\\nAn X-ray slider feature was incorporated to allow users to explore the internal components of the earbuds through interactive sliding panels', 'November 26, 2023', 'Jesica Ohene', 'HTMl, CSS, JavaScript, GreenSock Library SASS, Adobe Photoshop and Illustrato', 'altopromo-desktop.png'),
(3, 'Music Mixer', 'A Music Mixer Drag and Drop Game. This game allows users to become the DJ dragging and dropping various members of the band onto a virtual dance floor, where the audio plays as each instrument lands. This was achieved with JavaScript.', 'July 25, 2023', 'Jesica Ohene', 'Adobe Photoshop, Adobe illustrator,HTML,CSS, JavaScript', 'music-mixer.jpg'),
(4, 'Alto Earbuds Animation', 'For this project, I was tasked with creating a 3D model of earbuds using Cinema 4D. The objective was to produce a visually appealing representation of the earbuds that would be used for the promotional site. The deliverables included the 3D models, and an animation showcasing the features of the earbuds.', 'November 24, 2023', 'Jesica Ohene', 'Maxon Cinema 4D,Adobe Photoshop, Adobe illustrator', 'altopromo-desktop.png'),
(5, 'Elin Cosmetics', 'A series of print ads for a makeup and skincare brand. Through strategic design, messaging, and placement, the brand aimed to establish a presence with the use of print and banner ads.', 'December 1. 2023', 'Jesica Ohene', 'Adobe Photoshop,Maxon Cinema 4d,Adobe illustrator,Adobe InDesign', 'elin-ad3desktop.png'),
(7, 'Star wars API', 'Movie lookup based on selected characters with the use of the Star Wars API', 'January 26, 2024', 'Jesica Ohene', 'Adobe Photoshop, Adobe illustrator, JavaScript, CSS, HTML', 'swapi-thumb.png'),
(8, 'Mini ad campaign Video', 'A PSA (Public Service Announcement) video based on Health Canada\'s stance on vaping that focuses on educating the youth about the potential risks and health concerns associated with vaping', 'February 4, 2024', 'Jesica Ohene', 'Adobe Photoshop, Adobe Illustrator,Adobe After Effects,Maxon Cinema 4D', 'mini-ad-thumb.png'),
(9, 'Bee Chance.com Promotional Video', 'A two hour sprint in which I was tasked with creating a promotional video that highlights the importance of Bees on the environment', 'February 4, 2024', 'Jesica Ohene', 'Adobe Photoshop,\\r\\nAdobe illustrator,\\r\\nAdobe After Effects', 'bee-chance-thumb.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`messenger_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `messenger_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
