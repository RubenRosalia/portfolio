-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Nov 19, 2023 at 11:39 PM
-- Server version: 8.0.34
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `source_code` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `title`, `description`, `source_code`, `url`) VALUES
(1, 'resources/images/portfolio.webp', 'Portfolio', 'Showcasing my skills & projects.', 'https://github.com/RubenRosalia?tab=projects', 'https://rubenrosalia.com/'),
(2, 'resources/images/manganotifier.webp', 'Manga-notifier', 'Notifies on new Japanese comics releases.', 'https://github.com/RubenRosalia?tab=projects', 'https://rubenrosalia.com/');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `skill` text NOT NULL,
  `image` text NOT NULL,
  `style_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `image`, `style_id`) VALUES
(1, 'HTML5', 'resources/svg/html5.svg', 'skill-html5'),
(2, 'CSS', 'resources/svg/css.svg', 'skill-css'),
(3, 'SASS', 'resources/svg/sass.svg', 'skill-sass'),
(4, 'PHP', 'resources/svg/php.svg', 'skill-php'),
(5, 'SQL', 'resources/svg/sql.svg', 'skill-sql'),
(6, 'JavaScript', 'resources/svg/javascript.svg', 'skill-javascript'),
(7, 'JSON', 'resources/svg/json.svg', 'skill-json'),
(8, 'Bootstrap', 'resources/svg/bootstrap.svg', 'skill-bootstrap'),
(9, 'jQuery', 'resources/svg/jquery.svg', 'skill-jquery'),
(10, 'Wordpress', 'resources/svg/wordpress.svg', 'skill-wordpress'),
(11, '(S)FTP', 'resources/svg/ftp.svg', 'skill-ftp'),
(12, 'NPM', 'resources/svg/npm.svg', 'skill-npm'),
(13, 'Composer', 'resources/svg/composer.svg', 'skill-composer'),
(14, 'Gulp', 'resources/svg/gulp.svg', 'skill-gulp'),
(15, 'SSH', 'resources/svg/SSH.svg', 'skill-ssh'),
(16, 'MySQL', 'resources/svg/MySQL.svg', 'skill-mysql'),
(17, 'GIT', 'resources/svg/git.svg', 'skill-git'),
(18, 'Docker', 'resources/svg/docker.svg', 'skill-docker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
