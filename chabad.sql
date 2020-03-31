-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 11:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'Cerico', 'Renz Martin', 'cerico.renzmartin@gmail.com', 'thisthis');

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
  `other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `financial_counseling` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `total_savings` varchar(255) NOT NULL,
  `current` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_twilio`
--

CREATE TABLE `tbl_twilio` (
  `id` int(10) NOT NULL,
  `mobile_number` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_twilio`
--

INSERT INTO `tbl_twilio` (`id`, `mobile_number`) VALUES
(1, '+639076231102');

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
  `other_skills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_volunteer`
--

INSERT INTO `tbl_volunteer` (`id`, `last_name`, `first_name`, `birthdate`, `email_address`, `phone_number`, `address_1`, `address_2`, `city_town`, `state`, `zip_code`, `availability`, `services_hours`, `special_needs`, `emergency_name`, `emergency_phone`, `team_leader`, `photo`, `language`, `other_skills`) VALUES
(1, 'This', 'This', '9099-09-09', 'G@g.com', '0909090909', 'THIS', 'THIS', 'THIS', 'THIS', '0900909', 'Evening', 'No', 'Yes', 'This', '09909090', 'Yes', 'C:\\fakepath\\business-computer-connection-contemporary-450035.jpg', 'French', 'Teaching'),
(2, 'This2', 'This2', '90900-09-09', 'A@gm.com', '0909090090', 'THIS2', 'THIS2', 'THIS2', 'THIS2', '09090', 'Evening', 'No', 'Yes', 'This2', '090909090', 'Yes', 'C:\\fakepath\\business-computer-connection-contemporary-450035.jpg', 'Yiddish', 'Computer'),
(3, 'This2', 'This2', '90900-09-09', 'A@gm.com', '0909090090', 'THIS2', 'THIS2', 'THIS2', 'THIS2', '09090', 'Evening', 'No', 'Yes', 'This2', '090909090', 'Yes', 'C:\\fakepath\\business-computer-connection-contemporary-450035.jpg', 'Yiddish', 'Computer'),
(4, 'This2', 'This2', '0090-09-09', 'A@gmail.com', '909090909', 'THIS2', 'THIS2', 'THIS2', 'THIS2', '09090909', 'Weekend', 'No', 'Yes', 'This2', '090909090', 'Yes', 'C:\\fakepath\\shallow-focus-photography-of-chocolate-cupcakes-1028714.jpg', 'Hebrew', 'Culinary');

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
(13, 'Index.php', '2020-02-20 18:34:37', NULL),
(14, 'Index.php', '2020-03-30 21:46:22', NULL);

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
-- Indexes for table `tbl_twilio`
--
ALTER TABLE `tbl_twilio`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_children`
--
ALTER TABLE `tbl_children`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_employment_information`
--
ALTER TABLE `tbl_employment_information`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_family`
--
ALTER TABLE `tbl_family`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_government`
--
ALTER TABLE `tbl_government`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_others`
--
ALTER TABLE `tbl_others`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_twilio`
--
ALTER TABLE `tbl_twilio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_volunteer`
--
ALTER TABLE `tbl_volunteer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_webviews`
--
ALTER TABLE `tbl_webviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
