-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 04:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `category_description` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `category_description`, `created_at`) VALUES
(1, 'C', 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion...', '2021-07-27 05:14:55'),
(3, 'C++', 'C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or \"C with Classes\"...', '2021-07-27 05:16:15'),
(4, 'JAVA', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible...', '2021-07-27 05:16:15'),
(5, 'HTML, CSS & JavaScript', 'HTML provides the basic structure of sites. CSS is used to control presentation, formatting, and layout. JavaScript is used to control the behavior of different elements...', '2021-07-27 05:17:07'),
(6, 'PYTHON', 'Python is an interpreted high-level general-purpose programming language. Python\'s design philosophy emphasizes code readability with its notable use...', '2021-07-27 05:17:07'),
(7, 'PHP', 'PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994...', '2021-07-27 05:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `question_id` int(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `code` varchar(1000) DEFAULT NULL,
  `commented_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `user_name`, `category`, `question_id`, `comment`, `code`, `commented_at`) VALUES
(1, 1, 'Biswajit ', 'C', 1, 'This is a comment or solution', 'This is the correct code, try this', '2021-07-30 09:39:31'),
(3, 1, 'Jack', 'C', 1, 'Hi,, this is a solution, try this', '', '2021-07-31 09:14:19'),
(31, 3, 'Abhi Roy', 'C', 1, 'Try mingW', '', '2021-08-11 15:30:16'),
(32, 1, 'Biswajit', 'C', 46, 'The function takes the string as an input that needs to be converted to an integer.  int atoi(const char *string)', '', '2021-08-19 14:16:43'),
(33, 5, 'Rohan', 'C', 1, 'This is the solution', '', '2021-08-21 16:14:55'),
(42, 1, 'Biswajit', 'C', 56, 'This is a Comment', '#include\r\nint main(){\r\nint n,i,m=0,flag=0;\r\nprintf(\"Enter the number to check prime:\");\r\nscanf(\"%d\",&n);\r\nm=n/2;\r\nfor(i=2;i<=m;i++)\r\n{\r\nif(n%i==0)\r\n{\r\nprintf(\"Number is not prime\");\r\nflag=1;\r\nbreak;\r\n}\r\n}\r\nif(flag==0)\r\nprintf(\"Number is prime\");\r\nreturn 0;\r\n}', '2021-09-03 15:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_25_142513_add_confirmation_fields_to_users', 2),
(5, '2021_08_25_152046_add_account_verification_to_users', 3),
(6, '2021_08_25_153316_create_verify_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('biswajitdeb324@gmail.com', '$2y$10$FONPMy0hf.pPFuPzFJ0d0uLv9JNLq3/FUkb4ZVEnUb.P9ugFcSbK.', '2021-09-02 00:56:32'),
('shilupasana@gmail.com', '$2y$10$mMU1awJDjMq0nXj5NXgEE.vXvS99FbkMHn8X5qpAyHjlOzPAfjKIa', '2021-09-02 01:34:02'),
('pikachu@gmail.com', '$2y$10$IOemIpAI0qhg4rgDcsBR0u13fjx6BkkummqWNie1BbazVwnh/z4z6', '2021-09-02 09:51:42'),
('kilow94272@enpaypal.com', '$2y$10$IMUUbTzRw.ALi6JhPitrYOxpr4JGIfn6.BDDRnALcHkUYbKt2Yj5G', '2021-09-02 10:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `question_id` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `question_title` varchar(100) NOT NULL,
  `question_description` varchar(500) NOT NULL,
  `code` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`user_id`, `user_name`, `question_id`, `category`, `question_title`, `question_description`, `code`, `created_at`) VALUES
(1, 'Biswajit', 1, 'C', 'How to run c', 'How to run c on my pc', '#include <stdio.h>\r\nint main() {\r\n    int num;\r\n    printf(\"Enter an integer: \");\r\n    scanf(\"%d\", &num);\r\n\r\n    // true if num is perfectly divisible by 2\r\n    if(num % 2 == 0)\r\n        printf(\"%d is even.\", num);\r\n    else\r\n        printf(\"%d is odd.\", num);\r\n    \r\n    return 0;\r\n}\r\n', '2021-07-28 01:30:36'),
(1, 'Biswajit', 2, 'C++', 'How to run C++', 'How to run C++ on my pc', '', '2021-07-28 01:34:05'),
(1, 'Biswajit', 3, 'HTML,CSS & JAVASCRIPT', 'How to run HTML, CSS JavaScript', 'How to run HTML, CSS JavaScript on my pc', '', '2021-07-28 01:34:05'),
(1, 'Biswajit', 4, 'JAVA', 'How to Run Java', 'How to Run Java on my pc', '', '2021-07-28 01:36:59'),
(1, 'Biswajit', 5, 'PYTHON', 'PYTHON Run', 'How to run Python', '', '2021-07-28 01:36:59'),
(1, 'Biswajit', 6, 'PHP', 'PHP', 'How to run Php', '', '2021-07-28 01:37:52'),
(3, 'Abhi Roy', 41, 'C', 'Download C extension', 'How to download C extension', '', '2021-08-11 16:03:20'),
(4, 'Soniya Dey', 45, 'C++', 'Friend Function', 'How to pass array of object in friend function?', '', '2021-08-19 14:09:24'),
(4, 'Soniya Dey', 46, 'C', 'String to Number', 'How can a string be converted to a number?', '', '2021-08-19 14:14:11'),
(5, 'Rohan', 47, 'C', 'How to run php on localhost?', 'I want to run php code on my localhost, how to do that?', '', '2021-08-21 14:42:15'),
(5, 'Rohan', 48, 'C', 'fdf', 'xxx', '', '2021-08-21 16:14:38'),
(4, 'Soniya Dey', 49, 'C', 'Modular programming?', 'What is modular programming??', '', '2021-08-22 14:06:30'),
(4, 'Soniya Dey', 50, 'C', 'keywords & operators', 'How many keywords & operators are used in c Language?', '', '2021-08-22 14:07:24'),
(4, 'Soniya Dey', 51, 'C', 'What is variable?', 'What is variable in C language?', '', '2021-08-22 14:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Biswajit', 'pikachu@gmail.com', '0000-00-00 00:00:00', '$2y$10$GSysNRyUWPwJYWO8ASGQ8OMGRLwVHw8FPt8vpSwGU9bK29L/QMope', 'KaR3Fq9B7Czx2G7MqwH7XvTYSb6c46yLK4ITVoeQHA3tgWsQmR5pqywk4SHX', '2021-07-26 03:50:03', '2021-08-21 12:47:08'),
(2, 'Rohit Debnath', 'biswajitddeb324@gmail.com', NULL, '$2y$10$8./h.d.mMkhrBWckPpZQfeAnnTUgBX5wEhqKvp2uY8UYGD5YjlIeK', NULL, '2021-07-26 04:55:36', '2021-08-21 12:47:08'),
(3, 'Abhi Roy', 'abhi@gmail.com', NULL, '$2y$10$eWETmt7RazGRPQws6rr./eoteZs1sW/FMsdYn6Gvsv/CMrY0UxaHO', NULL, '2021-08-11 09:32:36', '2021-08-21 12:47:08'),
(4, 'Soniya Dey', 'soniyadey@gmail.com', NULL, '$2y$10$OiU3hWN8uY2HpV/n4OlG9.Jux5Mq.vOiTEpzrdMzIpHH1MNjQFitO', NULL, '2021-08-19 08:17:53', '2021-08-21 12:47:08'),
(17, 'Biswajit Debnath', 'biswajitdebf324@gmail.com', NULL, '$2y$10$v0Yd.7M9GNMYA0C3rENsb.XeXwO17nmZn5Bemq4Q5JMsv4R8UQGp.', NULL, '2021-08-25 04:33:50', '2021-08-25 04:33:50'),
(18, 'efef', 'pikachfu@gmail.com', NULL, '$2y$10$25reU9DS3zNckr0hnswzyuJdVPeHiS9EJBUPWKJQancaMjvlxpBVG', NULL, '2021-08-25 05:03:43', '2021-08-25 05:03:43'),
(20, 'Biswajit Debnath', 'ciraco6r495@ampswipe.com', NULL, '$2y$10$kFPX0PZXnOFaply.3.oExOHjHUGz7YjlqwAQrLzo1k0q9fdu2/RjO', 'oUJLztWqw9zzhD2Gn3i3RB2vjnhCz4Olzl4F0IxfWsXnPriMZRoqz3EI6X8C', '2021-08-25 05:35:28', '2021-08-26 10:36:16'),
(21, 'efef', 'pikachhhu@gmail.com', NULL, '$2y$10$.HxvC3uq8aJIIo9jhYDjleRpTqnjfhKT/CC2kKgGeOmvVAM1hN1Ge', NULL, '2021-08-25 05:38:48', '2021-08-25 05:38:48'),
(37, 'dfed', 'pikachuddd@gmail.com', NULL, '$2y$10$As5TGMqXsSxMv1lHrxLwVemgFgCWgZFIpf3WPMUyyvOWbQFQ2MBXm', NULL, '2021-08-25 09:33:22', '2021-08-25 09:33:22'),
(38, 'dfed', 'pikachuddfrfd@gmail.com', NULL, '$2y$10$b502tJOOSX2x2sdvCsB5.O3TMfNjlBte4IRdfQu5Mu0gz6hJe5g4q', NULL, '2021-08-25 09:39:34', '2021-08-25 09:39:34'),
(77, 'Biswajit Debnath', 'kilow94272@enpaypal.com', '2021-09-02 10:02:44', '$2y$10$VCHWMTeVq.X3qhFNEBb7reribZ9n3dvmJnf0NIMCkG3Xyfn9oH3Y.', NULL, '2021-09-02 10:02:25', '2021-09-02 10:02:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
