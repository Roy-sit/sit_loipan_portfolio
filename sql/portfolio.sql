-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 28, 2024 at 03:29 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: portfolio
--

-- --------------------------------------------------------

--
-- Table structure for table contact
--

CREATE TABLE contact (
  id int UNSIGNED NOT NULL,
  full_name varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  email varchar(125) NOT NULL,
  comments varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table contact
--

INSERT INTO contact (id, full_name, email, comments) VALUES
(1, 'Roy Sit', 'lpsroy78@gmail.com', 'test'),
(13, 'Roy Sit', 'lpsroy78@gmail.com', '2'),
(14, 'Roy Sit', 'lpsroy78@gmail.com', 't'),
(15, 'Roy Sit', 'ishan@hotmail.com', '4');

-- --------------------------------------------------------

--
-- Table structure for table project
--

CREATE TABLE project (
  id int UNSIGNED NOT NULL,
  title varchar(50) NOT NULL,
  image varchar(300) NOT NULL,
  description varchar(2000) NOT NULL,
  case_study text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  client varchar(200) NOT NULL,
  application varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table project
--

INSERT INTO project (id, title, image, description, case_study, client, application) VALUES
(1, 'PROJECT - MENS', 'images/project_mens.jpg', 'Performance Tailoring As outdoor performance remains important, climate-proof and windproof features such as quick-dry, comfort stretch, and water-repellent technology are key to this Spring/Summer sport tailoring collection.\r\nBy applying innovations in fabrics and construction to create comfortable, sport-inspired tailoring.', 'In response to the growing demand for versatile and functional apparel, this collection redefines modern fashion by merging outdoor performance with classic tailoring. Designed for individuals who value both style and practicality, which key features such as quick-dry technology, comfort stretch, and water-repellent finishes ensure adaptability across various climates and activities.\r\n\r\nHigh performance materials from shell fabric to trimming, key innovations include heat-seal tape techniques, bonded fabrics, and mercerised textiles, which elevate the durability, and aesthetic appeal of each piece.\r\n', 'Hugo Boss, AllSaints, Arcteryx, Paul Smith, Country Road, Jack Wills, Reiss, RM.Williams, Rodd & Gunn, Calibre.', 'Illustrator, Photoshop, PowerPoint, RFID System.'),
(2, 'PROJECT - WOMENS', 'images/project_womens.jpg', 'Tactile Material The focus shifts to a bolder and more vibrant aesthetic. The designs feature rich, colourful palettes and innovative gradient dye techniques, adding depth and visual interest.\r\n\r\nAdditionally, there is an emphasis on fabric textures, exploring unique surface treatments to enhance both the visual appeal and tactile experience of the garments, while still incorporating quick-dry, comfort stretch, and water-repellent technologies.', 'This collection redefines bold fashion by blending innovative dyeing techniques with striking tactile elements, which highlights ombre effects, deep-dyed finishes, and spray-dyed treatments, creating garments with gradients and layered colour transitions. \r\n\r\nThe designs further explore seersucker textures, where the puckered surface enhances the tactile appeal on lightweight fabric.\r\n\r\nFunctionality is seamlessly incorporated through quick-dry properties, comfort stretch, and water-repellent technology, ensuring that the garments perform as beautifully as they look to delivers a fresh perspective on womenswear, combining visual intrigue with effortless functionality.', 'Hugo Boss, Boden, AllSaints, Country Road, Jack Wills, RM.Williams, Ted Baker.', 'Illustrator, Photoshop, PowerPoint, RFID System.'),
(3, 'PROJECT - BURPLE', 'images/project_burple.jpg', 'Step into a world with vibrancy, and every sip is a burst of joy! Burple fruity drinks are a celebration of modern simplicity and colourful fun. We believe in keeping it simple yet exciting, offering a refreshing blend of flavours that captivate the true taste, where every drop is a commitment to a brighter, fruit-filled\r\n\r\nWe believe in keeping it simple yet exciting, offering a refreshing blend of flavours that captivate the true taste, where every drop is a commitment to a brighter, fruit-filled future for youth.', 'The redesigned Burple Fruity Drinks packaging is a vibrant celebration of fruity fun, designed to captivate children with its playful aesthetics while reassuring parents with its healthy promise. The bottles feature bold, cheerful illustrations to create a youthful and dynamic appeal.\r\n\r\nThe typography balances modern simplicity with childlike charm, which ensures the branding communicates both fun and health-conscious values effectively.\r\n\r\nUsing Cinema 4D, the project included the development of 3D bottle models, animations, and promotional imagery, which were integrated into a responsive website built with HTML, CSS, and JavaScript. These assets helped bring the new vision of Burple to life in digital form.\r\n\r\nOutcome: The redesign was a resounding success, achieving an engaging and eye-catching brand identity through the joyful website and fun graphical label designs highlighting the balance between fun aesthetics and clear messaging.', 'Burple Drink.', 'Illustrator, Photoshop, XD, After Effects, Cinema 4D, VSCode: HTML, CSS, JS.'),
(4, 'PROJECT - EARBUDS', 'images/project_earbuds.jpg', 'The goal of this project is to design and build a pair of earbuds using generators in Cinema 4D for a print campaign and a short video. The earbuds should be visually appealing earbuds including its colours, shapes, textures, lighting and animation keyframes. The goal is to create a visually appealing\r\nand engaging video that showcases the 3D earbuds and their features for\r\nsocial media using text.\r\n\r\n\r\n', 'In this project, I use generators in Cinema 4D to create a pair of earbuds, and use the earbuds as a promotional asset for the print campaign and video. The print campaign will incorporate the earbuds into a poster design, while the video showcases the features of the earbuds including its colours, shapes, textures, lighting and animation keyframes.\r\n\r\nIllustrator: Initial sketch of the earbuds\' shape. C4D: Shape the earbuds, add lighting and a backdrop to for the lighting quality. Photoshop: Retouch the colour and contrast to enhance the images for posters.', 'Beats.', 'Illustrator, Photoshop, Premiere Pro, After Effects, C4D.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table contact
--
ALTER TABLE contact
  ADD PRIMARY KEY (id);

--
-- Indexes for table project
--
ALTER TABLE project
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table contact
--
ALTER TABLE contact
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table project
--
ALTER TABLE project
  MODIFY id int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
