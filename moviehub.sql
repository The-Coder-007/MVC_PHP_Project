-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2024 at 07:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `pass`, `created_at`) VALUES
(2, 'admin123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2024-09-14 14:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `download_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `downloaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `commented_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  `dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `title`, `img`, `dt`) VALUES
(1, 'Movie', 'sahil.jpg', NULL),
(2, 'Web Series', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie_cate`
--

CREATE TABLE `movie_cate` (
  `type_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_cate`
--

INSERT INTO `movie_cate` (`type_id`, `type`, `created_at`) VALUES
(1, 'Popular', '2024-08-22 06:24:29'),
(2, 'Top Rated', '2024-08-23 15:28:44'),
(3, 'Upcoming', '2024-08-23 15:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `title`, `img`, `dt`) VALUES
(1, 'Anime', 'sa.jpg', NULL),
(2, 'Hollywood', '', NULL),
(3, 'Bollywood', 'IMG20240815184643.jpg', NULL),
(4, 'Tollywood', 'Snapchat-1274569501.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `language` varchar(255) DEFAULT NULL,
  `status` enum('Block','Unblock') NOT NULL DEFAULT 'Unblock',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `img`, `phone`, `gender`, `pass`, `language`, `status`, `created_at`) VALUES
(1, 'Mahaboob Alam', 'amahboob251@gmail.com', 'sa.jpg', 8081153119, 'Male', '123456', 'Hindi,English', 'Unblock', '2024-08-22 06:15:34'),
(2, 'Mahaboob', 'mesaleem70@gmail.com', 'king.jpg', 979, 'Male', '4297f44b13955235245b2497399d7a93', 'Hindi', 'Unblock', '2024-08-31 18:08:37'),
(3, 'Planet', 'planet@gmail.com', 'MONU.jpg', 324434234342, 'Male', '93279e3308bdbbeed946fc965017f67a', 'Hindi,English', 'Unblock', '2024-08-31 18:22:33'),
(5, 'movie', 'moviedb@gmail.com', 'me.png', 1212121212, 'Male', 'e10adc3949ba59abbe56e057f20f883e', 'Hindi,English', 'Unblock', '2024-08-31 18:23:57'),
(6, 'username', 'username@jdjd.com', 'king.jpg', 2323232323, 'Male', '4297f44b13955235245b2497399d7a93', 'Hindi,English', 'Unblock', '2024-08-31 18:25:33'),
(7, 'Mahaboob', 'user123@gmail.com', 'IMG_4151.JPG', 979, 'Male', 'e10adc3949ba59abbe56e057f20f883e', 'Hindi,English', 'Unblock', '2024-09-14 14:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `main_cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `movie_type_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `release_year` text DEFAULT NULL,
  `format` varchar(200) DEFAULT NULL,
  `quality` varchar(200) DEFAULT NULL,
  `sort_desc` varchar(250) DEFAULT NULL,
  `long_desc` text DEFAULT NULL,
  `languages` varchar(250) DEFAULT NULL,
  `writers` varchar(255) DEFAULT NULL,
  `producers` varchar(200) DEFAULT NULL,
  `licensor` varchar(200) DEFAULT NULL,
  `studios` varchar(200) DEFAULT NULL,
  `sources` varchar(200) DEFAULT NULL,
  `genres` varchar(255) DEFAULT NULL,
  `duration` text DEFAULT NULL,
  `rating` text DEFAULT NULL,
  `cast` text DEFAULT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `main_cat_id`, `sub_cat_id`, `movie_type_id`, `title`, `img`, `release_year`, `format`, `quality`, `sort_desc`, `long_desc`, `languages`, `writers`, `producers`, `licensor`, `studios`, `sources`, `genres`, `duration`, `rating`, `cast`, `link`) VALUES
(1, 2, 1, 2, 'Death Note', 'deathnote.jpg', '2024', 'MKV', 'HD', 'This anime is a fantastic anime its blockbuster in anime fan ', 'This anime is a fantastic anime its blockbuster in anime fan This anime is a fantastic anime its blockbuster in anime fan ', 'English', 'Shunsuke Ishikawa', 'unknown', ' ', 'CFP', 'dont have any', 'check', '26 min per Episode', ' ', 'unknwn', ' '),
(2, 1, 2, 2, 'The Godfather', 'godfather.jpg', '1972', 'MKV', 'HD', 'Spanning the years 1945 to 1955, a chronicle of the fictional Italian-American Corleone crime family. ', 'Spanning the years 1945 to 1955, a chronicle of the fictional Italian-American Corleone crime family. When organized crime family patriarch, Vito Corleone barely survives an attempt on his life, his youngest son, Michael steps in to take care of the would-be killers, launching a campaign of bloody revenge.', 'English', 'Mario Puzo', 'Ferancis Ford Coppola', ' ', 'Unknown', 'Unknown', 'Drama, Crime', '2h 55m', 'link is gonna here!', 'Marlon Brando Don Vito Corleone\r\nAl Pacino Michael Corleone\r\nJames Caan,Sonny Corleone , Robert Duvall\r\nTom Hagen', ' '),
(3, 1, 4, 3, 'The Greatest Of All Time ', 'TGOAT.jpg', '2024', 'MKV', 'HD', 'Gandhi, a once decorated member of the Special Anti-Terrorism Squad (SATS), is called back into action by his former colleague', 'Gandhi, a once decorated member of the Special Anti-Terrorism Squad (SATS), is called back into action by his former colleagues for an important mission, setting him on a dangerous collision course with his own past.', 'Tamil', 'Venkat Prabhu', 'Unknwn', 'Unknown', 'Unknown', 'Unknown', 'Action, Drama, Science Fiction, Thriller', '2h 55m', 'UA', 'Unknown', 'NUll'),
(4, 1, 2, 1, 'Badboys', 'badboys.jpg', '2024', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'English', 'Unknown', 'Shawn Levy', 'Shawn Levy', 'Unknown', 'dont have any', 'check', '1h 31m', '7.3', 'dfsdfav dfdsv fdsv ffdsv', 'https://www.themoviedb.org/movie/573435-bad-boys-ride-or-die'),
(5, 1, 1, 3, 'Inside Out', 'inside_out.jpg', '2024', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'English', 'Unknown', 'unknown', 'check', 'unknown', 'dont have any', 'Animation, Action, Drama', '1h 55m', '7.3', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'https://www.themoviedb.org/movie/1022789-inside-out-2'),
(6, 1, 2, 2, 'Deadpool', 'deadpul.jpg', '2024', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'English', 'Unknown', 'Shunsuke ', 'Coppola', 'unknown', 'dssd', 'Action, Crime, Thriller, Comedy', '3h 10m', '0', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'fdfasfd'),
(7, 1, 3, 2, 'DDLJ', 'DDLJ.jpg', '1990', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'Hindi', 'unknown', 'Karan Johar', 'Aditya Chopra', 'unknown', 'unknown', 'Romantic, Family Drama', '3h 20min', 'U', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'asdasasssad'),
(8, 2, 3, 1, 'Kung-Fu Pnada', 'kunhfu panda.jpg', '2008', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'Hindi', 'unknown', 'Karan Johar', 'Aditya Chopra', 'unknown', 'unknown', 'Romantic, Family Drama', '24min per episdoe', 'U', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'asdasasssad'),
(9, 1, 4, 3, 'Devra', 'devra.jpg', '2024', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas asdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'Hindi', 'unknown', 'Karan Johar', 'Aditya Chopra', 'unknown', 'unknown', 'Romantic, Family Drama', '3h 20min', 'U', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'asdasasssad'),
(10, 1, 1, 2, 'Detective', 'detective.jpg', '2024', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'english', 'unknown', 'Karan Johar', 'Aditya Chopra', 'unknown', 'unknown', 'magical, Family Drama', '3h 20min', 'U', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'asdasasssad'),
(11, 2, 1, 2, 'Sprited Away', 'sprited away.jpg', '2024', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'Japanese', 'unknown', 'Karan Johar', 'Aditya Chopra', 'unknown', 'unknown', 'Romantic, Family Drama', '20min', 'U', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'asdasasssad'),
(12, 1, 4, 1, 'Double iSmart Shankar', 'double ismart.jpg', '2024', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'Hindi', 'unknown', 'Karan Johar', 'Aditya Chopra', 'unknown', 'unknown', 'Romantic, Family Drama', '2h 20min', 'U', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'asdasasssad'),
(13, 1, 3, 2, 'DDLJ', 'DDLJ.jpg', '1990', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'Hindi', 'unknown', 'Karan Johar', 'Aditya Chopra', 'unknown', 'unknown', 'Romantic, Family Drama', '3h 20min', 'U', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'asdasasssad'),
(14, 2, 4, 3, 'Conbeert', 'conbeert.jpg', '2025', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'English', 'unknown', 'Karan Johar', ' ', 'unknown', 'unknown', 'Romantic, Family Drama', '2h 40min', ' dfvadfdv', 'asdas assdsa asdad asdasd asdas asacda asdas ', ' '),
(15, 1, 1, 1, 'BlueLock', 'bluelock.jpg', '2024', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'Hindi', 'unknown', 'Karan Johar', 'Aditya Chopra', 'unknown', 'unknown', 'Romantic, Family Drama', '20min', 'U', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'asdasasssad'),
(16, 1, 1, 3, 'Jusy', 'jusy.jpg', '2025', 'MKV', 'HD', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas asdas assdsa asdad asdasd asdas asacda asdas ', 'Japanese', 'unknown', 'Karan Johar', 'Aditya Chopra', 'unknown', 'unknown', 'Romantic, Family Drama', '3h 20min', 'U', 'asdas assdsa asdad asdasd asdas asacda asdas ', 'asdasasssad');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `watchlist_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `watched_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`download_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_cate`
--
ALTER TABLE `movie_cate`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_cat_id` (`main_cat_id`),
  ADD KEY `sub_cat_id` (`sub_cat_id`),
  ADD KEY `movie_type_id` (`movie_type_id`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`watchlist_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `video_id` (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie_cate`
--
ALTER TABLE `movie_cate`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `watchlist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `download`
--
ALTER TABLE `download`
  ADD CONSTRAINT `download_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `download_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`main_cat_id`) REFERENCES `main_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_ibfk_2` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_ibfk_3` FOREIGN KEY (`movie_type_id`) REFERENCES `movie_cate` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `watchlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `watchlist_ibfk_2` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
