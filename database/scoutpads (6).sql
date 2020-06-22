-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2020 at 10:15 AM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scoutpads`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_studies`
--

CREATE TABLE `case_studies` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `case_title` text NOT NULL,
  `case_file` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_studies`
--

INSERT INTO `case_studies` (`id`, `project_id`, `case_title`, `case_file`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', '2020-05-20 08:37:56', '2020-05-20 08:37:56'),
(2, 10, '', '', '2020-05-20 08:37:56', '2020-05-20 08:37:56'),
(3, 12, '', '', '2020-05-20 08:43:18', '2020-05-20 08:43:18'),
(4, 13, 'Harper Case Study', '1589964449.pdf', '2020-05-20 08:43:18', '2020-05-20 03:17:29'),
(5, 14, 'Skyline2 Case Study', '1589964374.pdf', '2020-05-20 08:43:29', '2020-05-20 03:16:14'),
(6, 15, 'Harper2 Case Study', '', '2020-05-20 08:43:29', '2020-06-10 16:21:03'),
(7, 16, 'Andrita2 Case Study', '', '2020-05-20 08:43:39', '2020-06-10 16:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `is_main` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `sort_order`, `status`, `is_main`, `created_at`, `updated_at`) VALUES
(1, 'So, what is Scoutpads?', 'Scoutpads introduces you to real estate investment opportunites; you decide if you want to invest. It\'s 100% passive and can include both short term and long term investments. We aren\'t an investment fund. You choose to invest on a deal by deal basis and we introduce you to the team or company operating the investment. It\'s totally free with no fees or hoops to jump through.', 1, 1, 0, '2020-04-25 08:28:50', '2020-04-25 09:36:35'),
(3, 'Why do I need Scoutpads? Can\'t I do this alone?', 'You can certainly do this alone. But you don\'t have to. Scoutpads is totally free. We don\'t make money off of fees from investors in any way nor are their fees from the sponsors we work with. Here are a 3 more reasons to consider other than that \"Free\" thing:\r\n\r\n1. We do all the heavy lifting: 90% of a good investment deal is finding it. When we do, we send you an email with the details and you call the shots on a deal by deal basis. If you like what you see, invest. If you don\'t, pass.\r\n2. Save Time We\'ll provide you with the opportunity, the specifics and answer all the questions you have, for free, a la concierge. Why? Because we want you to succeed and in some cases, we\'ve invested in the deal as well. It\'s a win-win to get the deal funded.\r\n3. Starting When you first learn about real estate investing, it can seem overly complex and be stressful on what to do next. We want to help you get to a point where you\'re comfortable and informed on the decisions you\'re making.', 1, 1, 1, '2020-04-25 08:44:28', '2020-04-25 08:44:28'),
(4, 'Why does this exist?', 'Real Estate investing is a powerful way to build wealth. In fact, 90% of the worlds millionaires made their money through real estate. The problem is it\'s hard to find investment opportunities and in the beginning, it\'s hard to understand how to evaluate an investment. We created Scoutpads as a place for both existing and new real estate investors to discover 100% passive investment opportunities, get educated on the pros and cons of investing and continue to be informed on the state of real estate investing. It\'s also VERY time consuming to be an active real estate investor. You have to deal with tenants, manage the property, find the deal, get funding for the deal etc. Scoutpads is focused on 100% passive investing.', 2, 1, 0, '2020-04-25 09:31:45', '2020-04-25 09:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `join_request`
--

CREATE TABLE `join_request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `social_security_number` varchar(100) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `sophisticated_investor` varchar(100) NOT NULL,
  `invested` varchar(100) NOT NULL,
  `amount_invest` varchar(100) NOT NULL,
  `when_invest` varchar(100) NOT NULL,
  `hear_about` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `additional_info` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `join_request`
--

INSERT INTO `join_request` (`id`, `name`, `email`, `phone`, `address`, `occupation`, `income`, `social_security_number`, `marital_status`, `sophisticated_investor`, `invested`, `amount_invest`, `when_invest`, `hear_about`, `country`, `additional_info`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Somnath', 'somnath23@gmail.com', '9647796911', '', '', '', '', '', 'Yes', 'No', '$25k to $50k', '3-6 months', '[\"Google\",\"Email\"]', 'Other', '', 0, '2020-05-06 11:36:44', '2020-05-06 11:36:44'),
(5, 'Somnath', 'somnath23@gmail.com', '9647796911', '', '', '', '', '', 'Yes', 'No', '$25k to $50k', '3-6 months', '[\"Google\",\"Email\"]', 'Other', '', 0, '2020-05-06 11:37:04', '2020-05-06 11:37:04'),
(6, 'Neel', 'neel.trips@yahoo.com', '9051977730', '', '', '', '', '', 'No', 'Yes', '$25k to $50k', '3-6 months', '[\"Friend\"]', 'United States', '', 0, '2020-05-30 12:59:54', '2020-05-30 12:59:54'),
(7, 'Somnath Roy Chowdhury', 'somnath@gmail.com', '9645789456', 'dsadsfad', 'business', '30000', '2345', 'Married', 'Not sure', 'Yes', '$25k to $50k', '3-6 months', '[\"Google\",\"Email\"]', 'Other', 'testing', 0, '2020-06-08 11:46:36', '2020-06-08 11:46:36'),
(8, 'Neel Trips', 'neel.trips@yahoo.com', '8849051977730', 'Taiwan', 'developer', '20000', '21231231213', 'Married', 'Yes', 'No', '$25k to $50k', 'Now', '[\"Friend\"]', 'Other', 'No there is none...', 0, '2020-06-10 09:05:44', '2020-06-10 09:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `long_content` text,
  `image` text NOT NULL,
  `deck` text NOT NULL,
  `financial` text NOT NULL,
  `pdf` text NOT NULL,
  `contract_doc` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `strategy` text NOT NULL,
  `projected_returns` int(11) NOT NULL,
  `risk` int(11) NOT NULL,
  `purchase_price` varchar(255) NOT NULL,
  `projected_cost` varchar(255) NOT NULL,
  `projected_timeline` varchar(255) NOT NULL,
  `sale_price` varchar(255) NOT NULL,
  `net_profit` varchar(255) NOT NULL,
  `numbers` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `show_home` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `content`, `long_content`, `image`, `deck`, `financial`, `pdf`, `contract_doc`, `location`, `strategy`, `projected_returns`, `risk`, `purchase_price`, `projected_cost`, `projected_timeline`, `sale_price`, `net_profit`, `numbers`, `status`, `show_home`, `created_at`, `updated_at`) VALUES
(1, 'Skyline', 'Bought in July of 2017 for $1.7M and it recently appraised for $3.5M in December 2018', '<h5><b>Project Highlights</b></h5><h5><ul style=\"margin-bottom: 0px; font-size: 16px;\"><li>Experienced sponsorship group Favorable purchase structure enables flexibility in purchase time frame</li><li>• Multiple exit strategies</li><li>• Contractor with significant experience in UTH project type</li><li>Accretive construction to permanent financing Infill location in Los Angeles (NoHo Arts District)</li><li>By-right development opportunity over the counter permits</li><li>• Qualified opportunity zone • Attractive risk adjusted returns</li></ul></h5>', '1587739512.jpg', '', '', '', '', 'Santa Monica, CA', 'Complete Demo + Rebuild', 7, 7, '', '', '', '', '', 3344, 2, 1, '2020-04-19 19:30:12', '2020-04-24 10:10:11'),
(10, 'Andrita', 'Complete demo and rebuild of a multi-family property expected to sell between $775k and $1M per unit.', '<h5><b>Project Highlights</b></h5><h5><ul style=\"margin-bottom: 0px; font-size: 16px;\"><li>Experienced sponsorship group Favorable purchase structure enables flexibility in purchase time frame</li><li>• Multiple exit strategies</li><li>• Contractor with significant experience in UTH project type</li><li>Accretive construction to permanent financing Infill location in Los Angeles (NoHo Arts District)</li><li>By-right development opportunity over the counter permits</li><li>• Qualified opportunity zone • Attractive risk adjusted returns</li></ul></h5>', '1587739545.jpg', '', '', '', '', 'Santa Monica, CA', 'Buy & Hold for Cashflow + Appreciation', 6, 9, '', '', '', '', '', 6758, 1, 1, '2020-04-24 04:52:58', '2020-04-24 10:08:55'),
(12, 'Malone', 'Nearly doubling the square footage in a house that goes for $840/ft increasing it\'s value by $1M+.', '<h5><b>Project Highlights</b></h5><h5><ul style=\"margin-bottom: 0px; font-size: 16px;\"><li>Experienced sponsorship group Favorable purchase structure enables flexibility in purchase time frame</li><li>• Multiple exit strategies</li><li>• Contractor with significant experience in UTH project type</li><li>Accretive construction to permanent financing Infill location in Los Angeles (NoHo Arts District)</li><li>By-right development opportunity over the counter permits</li><li>• Qualified opportunity zone • Attractive risk adjusted returns</li></ul></h5>', '1587820347.jpg', '', '', '', '', 'Los Angeles, LA', 'Rehab + Future Sale', 9, 8, '', '', '', '', '', 9536, 1, 1, '2020-04-25 07:39:45', '2020-04-25 07:42:27'),
(13, 'Harper', 'Triplex a half mile from The Grove and Beverly Center; Two Los Angeles landmarks.', '<h5><b>Project Highlights</b></h5><h5><ul style=\"margin-bottom: 0px; font-size: 16px;\"><li>Experienced sponsorship group Favorable purchase structure enables flexibility in purchase time frame</li><li>• Multiple exit strategies</li><li>• Contractor with significant experience in UTH project type</li><li>Accretive construction to permanent financing Infill location in Los Angeles (NoHo Arts District)</li><li>By-right development opportunity over the counter permits</li><li>• Qualified opportunity zone • Attractive risk adjusted returns</li></ul></h5>', '1587820427.jfif', '', '', '', '', 'Miami', 'Rehab + Hold for Cashflow + Future Sale', 12, 7, '', '', '', '', '', 6785, 1, 1, '2020-04-25 07:43:47', '2020-05-20 03:17:29'),
(14, 'Skyline2', 'Bought in July of 2017 for $1.7M and it recently appraised for $3.5M in December 2018.', '<h5><b>Project Highlights</b></h5><h5><ul style=\"margin-bottom: 0px; font-size: 16px;\"><li>Experienced sponsorship group Favorable purchase structure enables flexibility in purchase time frame</li><li>• Multiple exit strategies</li><li>• Contractor with significant experience in UTH project type</li><li>Accretive construction to permanent financing Infill location in Los Angeles (NoHo Arts District)</li><li>By-right development opportunity over the counter permits</li><li>• Qualified opportunity zone • Attractive risk adjusted returns</li></ul></h5>', '1587820573.jpg', '', '', '', '', 'New York, NY', 'Buy & Hold for Cashflow + Appreciation', 17, 6, '', '', '', '', '', 4785, 1, 1, '2020-04-25 07:46:13', '2020-05-20 03:16:14'),
(15, 'Harper2', 'Triplex a half mile from The Grove and Beverly Center; Two Los Angeles landmarks.', '<h5><b>Project Highlights</b></h5><h5><ul style=\"margin-bottom: 0px; font-size: 16px;\"><li>Experienced sponsorship group Favorable purchase structure enables flexibility in purchase time frame</li><li>• Multiple exit strategies</li><li>• Contractor with significant experience in UTH project type</li><li>Accretive construction to permanent financing Infill location in Los Angeles (NoHo Arts District)</li><li>By-right development opportunity over the counter permits</li><li>• Qualified opportunity zone • Attractive risk adjusted returns</li></ul></h5>', '1591610846.jpg', '1591611314.pdf', '1591611331.pdf', '1591611331.pdf', '1591197265.pdf', 'San Francisco , SF', 'Rehab + Hold for Cashflow + Future Sale', 34, 7, '4567', '5678', '23', '32432', '4545', 9125, 2, 1, '2020-04-25 07:47:53', '2020-06-10 16:21:03'),
(16, 'Andrita2', 'Complete demo and rebuild of a multi-family property expected to sell between $775k and $1M per unit', '<h5><b>Project Highlights</b></h5><h5><ul style=\"margin-bottom: 0px; font-size: 16px;\"><li>Experienced sponsorship group Favorable purchase structure enables flexibility in purchase time frame</li><li>• Multiple exit strategies</li><li>• Contractor with significant experience in UTH project type</li><li>Accretive construction to permanent financing Infill location in Los Angeles (NoHo Arts District)</li><li>By-right development opportunity over the counter permits</li><li>• Qualified opportunity zone • Attractive risk adjusted returns</li></ul></h5>', '1588824701.jpg', '1591611261.pdf', '1591611261.pdf', '1591611261.pdf', '1591611261.pdf', 'Los Angeles. LA', 'Complete Demo + Rebuild', 25, 200000, '70000', '90000', '30', '110000', '4000', 7747, 2, 1, '2020-04-25 07:49:08', '2020-06-10 16:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `image`, `created_at`, `updated_at`) VALUES
(22, 16, '15885179021559.jpg', '2020-05-03 14:58:22', '2020-05-03 14:58:22'),
(23, 16, '15885179022357.jpg', '2020-05-03 14:58:22', '2020-05-03 14:58:22'),
(25, 17, '15886756314770.jpg', '2020-05-05 10:47:11', '2020-05-05 10:47:11'),
(26, 16, '15887890603780.jpg', '2020-05-06 18:17:40', '2020-05-06 18:17:40'),
(27, 15, '15887892281591.jpg', '2020-05-06 18:20:28', '2020-05-06 18:20:28'),
(28, 15, '15887892281576.jpg', '2020-05-06 18:20:28', '2020-05-06 18:20:28'),
(29, 15, '15887892287863.jpg', '2020-05-06 18:20:28', '2020-05-06 18:20:28'),
(30, 15, '15887893374941.jpg', '2020-05-06 18:22:17', '2020-05-06 18:22:17'),
(31, 15, '15887893371849.jpg', '2020-05-06 18:22:17', '2020-05-06 18:22:17'),
(32, 15, '15887893375835.jpg', '2020-05-06 18:22:17', '2020-05-06 18:22:17'),
(33, 14, '15887894012143.jpg', '2020-05-06 18:23:21', '2020-05-06 18:23:21'),
(34, 14, '15887894428351.jpg', '2020-05-06 18:24:02', '2020-05-06 18:24:02'),
(35, 14, '15887894422512.jpg', '2020-05-06 18:24:02', '2020-05-06 18:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `keyword`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_title', 'Scoutpads', '2020-05-23 03:14:18', '2020-06-09 16:50:02'),
(2, 'admin_email', 'souviktripathy@gmail.com', '2020-05-23 03:14:18', '2020-06-09 16:50:02'),
(3, 'tax_form', '1590203784.pdf', '2020-05-23 03:14:18', '2020-05-22 21:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(2, 'Engineer', '2020-05-29 01:57:04', '2020-05-29 01:57:04'),
(3, 'Beginner', '2020-05-29 01:57:32', '2020-05-29 01:57:32'),
(4, 'Environment Specialist', '2020-06-03 21:43:53', '2020-06-03 21:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `location`, `message`, `image`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Riley T.', 'Technical Recruiter', 'San Francisco', 'I\'ve invested with the team at Scoutpads over the last year or so and have been blown away with the results. As someone who is super busy and focused on my career, Scoutpads was able to introduce me to real estate deals that were off market and have terrific projected returns.', '1587791008.jpg', '2020-04-24 23:33:28', '2020-04-24 23:57:29', 1),
(2, 'Jerry D.', 'Software Engineer', 'Los Angeles', 'Getting into real estate investing was actually quite terrifying for me. I thought I wanted to own and rent out but after chatting with Sief and the Scoutpads team, there was a lot more upside in passive investing than I had ever realized. Would highly reccomend to anyone!', '1587792536.jpg', '2020-04-24 23:58:56', '2020-04-24 23:58:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` tinyint(1) NOT NULL,
  `firstname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_photo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_form` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_form` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` int(10) UNSIGNED NOT NULL,
  `two_factor_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_expiry` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `firstname`, `lastname`, `email`, `phone`, `password`, `user_photo_url`, `tags`, `tax_form`, `contract_form`, `user_status`, `two_factor_token`, `two_factor_expiry`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$FKv.9CUljNS/8GkbYfwGoeW4k0DBT9N8dnATVXVMZIAu5JGKVFSKK', '', '', '', '', 1, NULL, NULL, '2019-11-03 23:03:55', '2019-11-03 23:03:55'),
(4, 2, 'Somnath', 'Roy', 'sas.somnath@gmail.com', '9647796911', '$2y$10$v6lQMGqAF7nH0HAOlLNVVOthrNftXDXKpne1nRmUm8c8XRMIJsgDi', '', '\"cc\"', '1591695176.pdf', '1591698497.pdf', 1, '18060', '2020-06-10 06:15:50', '2020-03-13 18:05:49', '2020-06-10 13:15:50'),
(12, 2, 'Sams', 'Roy', 'somnath12@gmail.com', '9647796911', '$2y$10$ZfOrmpCnqu1EzJMWDcmXOuijQuYgroT3LpH39ii8z/F52Hox5Ecvu', NULL, '\"Engineer,Beginner\"', '', '', 1, NULL, NULL, '2020-05-12 07:11:09', '2020-05-29 22:57:25'),
(13, 2, 'Souvik', 'Tripathy', 'souviktripathy@gmail.com', '9051977730', '$2y$10$VEP9uL9boxOgWiKy6KIfz.KivP8t8HJ7GUDiuNLh3OeqCpEHIHRSS', NULL, '\"Engineer\"', '1591691045.pdf', '', 0, '13219', '2020-06-10 02:08:34', '2020-05-30 11:49:55', '2020-06-10 17:03:54'),
(14, 2, 'Richard', 'Chen', 'richard.chen1989@gmail.com', '9999999999', '$2y$10$h/HdXhBNRqG.waQDrKUQ5.QcGr3svZdCe8.Li4zH7ZZEBdCjgD4Au', NULL, '\"Engineer\"', '', '', 1, '90101', '2020-06-05 06:05:25', '2020-05-30 11:51:54', '2020-06-05 13:05:25'),
(15, 2, 'John', 'Doe', 'sief@scoutpads.com', '9898989898', '$2y$10$pbAY2SwiNRZAmaYXf7x8a.kqxOhyEgB4XlEeHioprHg2aHhlP/1JW', NULL, '\"Engineer\"', '', '', 1, '77728', '2020-06-19 16:58:28', '2020-05-30 16:29:30', '2020-06-19 23:58:28'),
(16, 2, 'Pallavi', 'Tripathy', 'tinumkhrj@gmail.com', '9051977730', '$2y$10$SfpCL7vwfv9YWVrOhRJ10OsS7bx9EOva.iNSOY4YBW..fHlgJP7rK', NULL, '\"Environment Specialist\"', '', '', 1, '89102', '2020-06-03 15:16:33', '2020-06-03 21:43:09', '2020-06-03 22:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_project`
--

CREATE TABLE `user_project` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `amount` float(11,2) NOT NULL,
  `return_amount` float(11,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `signed_doc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_project`
--

INSERT INTO `user_project` (`id`, `user_id`, `project_id`, `amount`, `return_amount`, `status`, `signed_doc`, `created_at`, `updated_at`) VALUES
(2, 4, 16, 5000.00, 9000.00, 1, '1590817863.pdf', '2020-05-12 22:12:17', '2020-05-24 00:06:03'),
(3, 4, 1, 1000.00, 3000.00, 1, '1590817863.pdf', '2020-05-30 11:14:39', '2020-05-30 11:14:39'),
(4, 13, 16, 2000.00, 4000.00, 1, '1590817863.pdf', '2020-05-30 12:47:11', '2020-06-10 13:13:11'),
(5, 15, 1, 100000.00, 0.00, 0, '', '2020-06-03 00:36:34', '2020-06-03 00:36:34'),
(6, 16, 15, 200000.00, 250000.00, 1, '1591197297.pdf', '2020-06-03 22:12:27', '2020-06-10 13:05:18'),
(7, 15, 16, 100000.00, 0.00, 0, '', '2020-06-04 06:52:19', '2020-06-04 06:52:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `join_request`
--
ALTER TABLE `join_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`firstname`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_project`
--
ALTER TABLE `user_project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_studies`
--
ALTER TABLE `case_studies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `join_request`
--
ALTER TABLE `join_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_project`
--
ALTER TABLE `user_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
