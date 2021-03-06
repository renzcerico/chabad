-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 09:41 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chabad`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `id` int(10) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`id`, `last_name`, `first_name`, `email_address`, `password`) VALUES
(1, 'Cericoo', 'Renz Martin', 'cerico.renzmartin@gmail.com', 'thisthis');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assistance`
--

CREATE TABLE `tbl_assistance` (
  `id` int(10) NOT NULL,
  `applicant_first_name` varchar(255) NOT NULL,
  `applicant_last_name` varchar(255) NOT NULL,
  `applicant_age` varchar(255) NOT NULL,
  `spouse_first_name` varchar(255) NOT NULL,
  `spouse_last_name` varchar(255) NOT NULL,
  `spouse_age` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_apt` varchar(255) NOT NULL,
  `address_city` varchar(255) NOT NULL,
  `address_state` varchar(255) NOT NULL,
  `address_zip` varchar(255) NOT NULL,
  `house` varchar(255) NOT NULL,
  `apartment` varchar(255) NOT NULL,
  `rent` varchar(255) NOT NULL,
  `bedrooms` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `home_number` varchar(255) NOT NULL,
  `mother_phone` varchar(255) NOT NULL,
  `father_phone` varchar(255) NOT NULL,
  `marriage_status` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `tutor_subject` varchar(255) NOT NULL,
  `driver` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assistance`
--

INSERT INTO `tbl_assistance` (`id`, `applicant_first_name`, `applicant_last_name`, `applicant_age`, `spouse_first_name`, `spouse_last_name`, `spouse_age`, `address`, `address_apt`, `address_city`, `address_state`, `address_zip`, `house`, `apartment`, `rent`, `bedrooms`, `email_address`, `home_number`, `mother_phone`, `father_phone`, `marriage_status`, `skills`, `tutor_subject`, `driver`, `other`, `created_at`) VALUES
(18, 'Renz Martin', 'Cerico', '', '', '', '', '', '', '', '', '', 'false', 'false', 'false', '', '', '', '', '', 'single', 'Electrician', 'asd', '', '', '2020-04-08 03:08:49'),
(19, 'John', 'Doe', '', '', '', '', '', '', '', '', '', 'false', 'false', 'false', '', '', '', '', '', '', '0', '', '', '', '2020-04-08 03:08:49'),
(20, 'Jane', 'Doe', '', '', '', '', '', '', '', '', '', 'false', 'false', 'false', '', '', '', '', '', '', '0', '', '', '', '2020-04-08 03:08:49'),
(21, 'Eddie ', 'Joe', '21', 'Cony', 'Joe', '21', 'Manila', '21', 'Olongapo', 'Zamb', '2345', 'false', 'false', 'true', '1', 'Eddie Joe ', '09090909090', '09090909090', '09090909090', 'single', 'Electrician', '', '', '', '2020-04-08 03:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_authorize_api`
--

CREATE TABLE `tbl_authorize_api` (
  `id` int(10) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `trans_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_authorize_api`
--

INSERT INTO `tbl_authorize_api` (`id`, `login_id`, `trans_key`) VALUES
(1, '37M2JhjV', '7E23aWeq2rP6U4k2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_children`
--

CREATE TABLE `tbl_children` (
  `id` int(10) NOT NULL,
  `assistance_id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_children`
--

INSERT INTO `tbl_children` (`id`, `assistance_id`, `first_name`, `last_name`, `middle_name`, `school`, `age`) VALUES
(1, 18, 'jh', 'kjh', 'kjh', 'kjh', '8'),
(2, 20, 'jkh', 'kjh', 'kj', 'hk', ''),
(3, 21, 'None', 'None', 'None', 'None', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donation`
--

CREATE TABLE `tbl_donation` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `donation_type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_donation`
--

INSERT INTO `tbl_donation` (`id`, `first_name`, `last_name`, `company`, `address`, `city`, `state`, `zip`, `country`, `email`, `amount`, `donation_type`, `created_at`) VALUES
(1, 'renz', 'cerico', '', 'address', 'coty', 'state', 2200, 'phil', '', 1000, 'paypal', '2020-03-27 21:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employment_information`
--

CREATE TABLE `tbl_employment_information` (
  `id` int(10) NOT NULL,
  `assistance_id` int(10) NOT NULL,
  `type_of_work` varchar(255) NOT NULL,
  `employer` varchar(255) NOT NULL,
  `years` varchar(255) NOT NULL,
  `work_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `work_number` varchar(255) NOT NULL,
  `monthly_salary` varchar(255) NOT NULL,
  `hourly_income` varchar(255) NOT NULL,
  `unemployment_reason` varchar(255) NOT NULL,
  `unemployed_since` varchar(255) NOT NULL,
  `last_interview` varchar(255) NOT NULL,
  `car` varchar(255) NOT NULL,
  `sources_income` varchar(255) NOT NULL,
  `invest` varchar(255) NOT NULL,
  `others_car` varchar(255) NOT NULL,
  `others_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employment_information`
--

INSERT INTO `tbl_employment_information` (`id`, `assistance_id`, `type_of_work`, `employer`, `years`, `work_address`, `city`, `zip`, `work_number`, `monthly_salary`, `hourly_income`, `unemployment_reason`, `unemployed_since`, `last_interview`, `car`, `sources_income`, `invest`, `others_car`, `others_id`) VALUES
(6, 18, '', '', '', '', '', '', '', '', '', '', '', '', 'false', '', '', 'false', 7),
(7, 19, '', '', '', '', '', '', '', '', '', '', '', '', 'false', '', '', 'false', 8),
(8, 20, '', '', '', '', '', '', '', '', '', '', '', '', 'false', '', '', 'false', 9),
(9, 21, 'Testing', 'Testing', '2', '', 'Testing', 'Testing', '12', '10000', '100', 'Testing', 'I dont know', 'I dont know', 'true', '', '', 'false', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_family`
--

CREATE TABLE `tbl_family` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `adults` int(10) NOT NULL,
  `children` int(10) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_family`
--

INSERT INTO `tbl_family` (`id`, `first_name`, `last_name`, `address`, `phone_number`, `adults`, `children`, `code`) VALUES
(2, 'First', 'Last', 'ADDRESS', '1234567890', 1, 1, '23701'),
(3, 'First', 'Last', 'ADDRESS', '', 1, 1, '46557'),
(4, 'Asdasd', 'Asadasd', 'ASDASD', '111', 1, 1, '61130');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_government`
--

CREATE TABLE `tbl_government` (
  `id` int(10) NOT NULL,
  `assistance_id` int(10) NOT NULL,
  `welfare` varchar(255) NOT NULL,
  `food_stamps` varchar(255) NOT NULL,
  `medicaid` varchar(255) NOT NULL,
  `medicare` varchar(255) NOT NULL,
  `ssi` varchar(255) NOT NULL,
  `hud` varchar(255) NOT NULL,
  `wic` varchar(255) NOT NULL,
  `sec_8` varchar(255) NOT NULL,
  `city_feps` varchar(255) NOT NULL,
  `ihss` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `rent` varchar(255) NOT NULL,
  `clothing` varchar(255) NOT NULL,
  `gas` varchar(255) NOT NULL,
  `medical_ins` varchar(255) NOT NULL,
  `life_ins` varchar(255) NOT NULL,
  `car_payments` varchar(255) NOT NULL,
  `car_ins` varchar(255) NOT NULL,
  `water` varchar(255) NOT NULL,
  `electrical` varchar(255) NOT NULL,
  `dsl` varchar(255) NOT NULL,
  `tuition` varchar(255) NOT NULL,
  `maintenance` varchar(255) NOT NULL,
  `msc` varchar(255) NOT NULL,
  `gap_description` varchar(255) NOT NULL,
  `financial_counseling` varchar(255) NOT NULL,
  `monthly_expenses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_government`
--

INSERT INTO `tbl_government` (`id`, `assistance_id`, `welfare`, `food_stamps`, `medicaid`, `medicare`, `ssi`, `hud`, `wic`, `sec_8`, `city_feps`, `ihss`, `other`, `rent`, `clothing`, `gas`, `medical_ins`, `life_ins`, `car_payments`, `car_ins`, `water`, `electrical`, `dsl`, `tuition`, `maintenance`, `msc`, `gap_description`, `financial_counseling`, `monthly_expenses`) VALUES
(2, 18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'false', ''),
(3, 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'false', ''),
(4, 20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'false', ''),
(5, 21, '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '', '10', '10', '10', '10', 'testing', 'false', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_others`
--

CREATE TABLE `tbl_others` (
  `id` int(10) NOT NULL,
  `type_of_work` varchar(255) NOT NULL,
  `employer` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `work_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `work_number` varchar(255) NOT NULL,
  `monthly_salary` varchar(255) NOT NULL,
  `hourly_income` varchar(255) NOT NULL,
  `unemployment_reason` varchar(255) NOT NULL,
  `unemployed_since` varchar(255) NOT NULL,
  `last_interview` varchar(255) NOT NULL,
  `car` varchar(255) NOT NULL,
  `sources_income` varchar(255) NOT NULL,
  `investment` varchar(255) NOT NULL,
  `total_savings` varchar(255) NOT NULL,
  `current` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_others`
--

INSERT INTO `tbl_others` (`id`, `type_of_work`, `employer`, `year`, `work_address`, `city`, `zip`, `work_number`, `monthly_salary`, `hourly_income`, `unemployment_reason`, `unemployed_since`, `last_interview`, `car`, `sources_income`, `investment`, `total_savings`, `current`) VALUES
(7, '', '', '', '', '', '', '', '', '', '', '', '', 'false', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', '', '', 'false', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', '', '', 'false', '', '', '', ''),
(10, 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', '21', 'Testing', 'Testing', 'Testing', 'I dont know', 'I dont know', 'false', '', '', '1000', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `type`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_volunteer`
--

CREATE TABLE `tbl_volunteer` (
  `id` int(10) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city_town` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `services_hours` varchar(255) NOT NULL,
  `special_needs` varchar(255) NOT NULL,
  `emergency_name` varchar(255) NOT NULL,
  `emergency_phone` varchar(255) NOT NULL,
  `team_leader` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `other_skills` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_volunteer`
--

INSERT INTO `tbl_volunteer` (`id`, `last_name`, `first_name`, `birthdate`, `email_address`, `phone_number`, `address_1`, `address_2`, `city_town`, `state`, `zip_code`, `availability`, `services_hours`, `special_needs`, `emergency_name`, `emergency_phone`, `team_leader`, `photo`, `language`, `other_skills`, `created_at`) VALUES
(2, 'Cerico', 'Renz', '1996-10-23', 'Renz@gmail.com', '9070973436', '2198 - A PUROK - 12 DAU - LANE OLD CABALAN', '', 'OLONGAPO CITY', 'REGION 3, ZAMBALES', '2200', 'year', 'yes', 'yes', '', '', 'yes', '', 'yiddish', 'teaching', '2020-04-08 03:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webviews`
--

CREATE TABLE `tbl_webviews` (
  `id` int(10) NOT NULL,
  `page` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_webviews`
--

INSERT INTO `tbl_webviews` (`id`, `page`, `date`, `ip_address`) VALUES
(2, 'Twilio.php', '2020-01-20 22:04:26', NULL),
(3, 'Twilio.php', '2020-01-22 19:32:03', NULL),
(4, 'Twilio.php', '2020-01-24 13:41:45', NULL),
(5, 'Twilio.php', '2020-01-24 13:49:24', NULL),
(6, 'Twilio.php', '2020-01-24 13:49:53', NULL),
(7, 'Twilio.php', '2020-01-24 13:50:59', NULL),
(8, 'Twilio.php', '2020-01-24 19:16:11', NULL),
(9, 'Twilio.php', '2020-01-28 08:53:43', NULL),
(10, 'Index.php', '2020-01-28 08:54:46', NULL),
(11, 'Index.php', '2020-01-28 09:12:40', NULL),
(12, 'Index.php', '2020-01-28 09:14:13', NULL),
(13, 'Index.php', '2020-01-28 12:58:04', NULL),
(14, 'Index.php', '2020-01-28 17:34:55', NULL),
(15, 'Index.php', '2020-03-26 16:05:21', NULL),
(16, 'Index.php', '2020-03-26 16:47:45', NULL),
(17, 'Index.php', '2020-03-26 17:05:12', NULL),
(18, 'Index.php', '2020-03-26 17:09:25', NULL),
(19, 'Index.php', '2020-03-26 17:09:27', NULL),
(20, 'Index.php', '2020-03-26 17:09:27', NULL),
(21, 'Index.php', '2020-03-26 17:15:04', NULL),
(22, 'Index.php', '2020-03-26 17:15:22', NULL),
(23, 'Index.php', '2020-03-26 17:40:27', '::1'),
(24, 'Index.php', '2020-03-26 17:40:52', '::1'),
(25, 'Index.php', '2020-03-26 17:43:23', ''),
(26, 'Index.php', '2020-03-26 17:44:19', ''),
(27, 'Index.php', '2020-03-26 17:44:40', '::1'),
(28, 'Index.php', '2020-03-26 17:46:06', '::1'),
(29, 'Index.php', '2020-03-26 17:46:31', '::1'),
(30, 'Index.php', '2020-03-26 19:23:35', '::1'),
(31, 'Index.php', '2020-03-27 12:13:43', '::1'),
(32, 'Index.php', '2020-03-27 12:14:47', '::1'),
(33, 'Index.php', '2020-03-27 12:14:48', '::1'),
(34, 'Index.php', '2020-03-27 12:14:49', '::1'),
(35, 'Index.php', '2020-03-27 13:14:56', '::1'),
(36, 'Index.php', '2020-03-27 16:49:30', '::1'),
(37, 'Index.php', '2020-03-27 17:13:15', '::1'),
(38, 'Index.php', '2020-03-27 17:13:17', '::1'),
(39, 'Index.php', '2020-03-27 18:20:47', '::1'),
(40, 'Index.php', '2020-03-27 19:21:50', '::1'),
(41, 'Index.php', '2020-03-30 12:09:33', '::1'),
(42, 'Index.php', '2020-03-30 18:31:23', '::1'),
(43, 'Index.php', '2020-03-30 18:31:33', '::1'),
(44, 'Index.php', '2020-03-30 18:31:51', '::1'),
(45, 'Index.php', '2020-04-06 15:35:46', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_assistance`
--
ALTER TABLE `tbl_assistance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_children`
--
ALTER TABLE `tbl_children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employment_information`
--
ALTER TABLE `tbl_employment_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_family`
--
ALTER TABLE `tbl_family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_government`
--
ALTER TABLE `tbl_government`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_others`
--
ALTER TABLE `tbl_others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_volunteer`
--
ALTER TABLE `tbl_volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webviews`
--
ALTER TABLE `tbl_webviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_assistance`
--
ALTER TABLE `tbl_assistance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_children`
--
ALTER TABLE `tbl_children`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_employment_information`
--
ALTER TABLE `tbl_employment_information`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_family`
--
ALTER TABLE `tbl_family`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_government`
--
ALTER TABLE `tbl_government`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_others`
--
ALTER TABLE `tbl_others`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_volunteer`
--
ALTER TABLE `tbl_volunteer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_webviews`
--
ALTER TABLE `tbl_webviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
