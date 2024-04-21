-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 04:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `desc`) VALUES
(1, 'About From Civil Law', 'Civil law, as it regards a type of law, is a branch of law that regulates the non-criminal rights, duties of persons (natural persons and legal persons) and equal legal relations between private.'),
(2, 'About From Family Law', 'Family law, body of law regulating family relationships, including marriage and divorce, the treatment of children, and related economic matters.In the past, family law was closely connected.'),
(3, 'About From Education Law', 'Education law is the legal discipline covering all issues pertaining to schools,from kindergarten through higher education. The core purpose of this type of law is to provide a high-quality education.'),
(4, 'About From Business Law', 'Business law is a section of code that is involved in protecting liberties and rights, maintaining orders, resolving disputes, and establishing standards for the business concerns and their dealings.'),
(5, 'About From Criminal Law', 'Criminal law concerns the system of legal rules that define what conduct is classified as a crime and how the government may prosecute individuals that commit crimes, in instances where an individual.'),
(6, 'About From Cyber Law', ' The word “Cyber” relates to characteristics of the culture of computers & information technology. According to merriam webster dictionary the word Cyber means relating to, or involving computers.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `about` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`id`, `name`, `about`, `country`, `address`, `phone`, `email`) VALUES
(1, 'Ubaid Zada', ' ', 'Pakistan', 'Karachi', '03491861238', 'Ubaid213@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `lawyer_name` varchar(255) NOT NULL,
  `case` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `availibility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `law`
--

CREATE TABLE `law` (
  `law_id` int(11) NOT NULL,
  `law_name` varchar(255) NOT NULL,
  `law_description` varchar(200) NOT NULL,
  `law_logo` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `law`
--

INSERT INTO `law` (`law_id`, `law_name`, `law_description`, `law_logo`, `type`, `status`) VALUES
(1, 'Civil law', 'The civil laws of Pakistan play a vital role in regulating personal, family, contractual, and property matters while protecting the rights and interests of individuals.', 'fa fa-landmark', 'civil law', ''),
(2, 'Family Law', 'family law, body of law regulating family relationships, including marriage and divorce, the treatment of children, and related economic matters.', 'fa fa-users', 'family law', ''),
(3, 'Business Law', 'Business law encompasses all of the laws that dictate how to form and run a business.Business law aims to provide a legal framework for businesses.', 'fa fa-hand-holding-usd', 'business law', ''),
(4, 'Education Law', 'Education law is a legal field that deals with the regulations and laws governing the education system. It covers a wide range of issues related to educational institutions, students, teachers, and ad', 'fa fa-graduation-cap', 'education law', ''),
(5, 'Criminal Law', 'Criminal law is a branch of law that pertains to crimes, their prosecution, and the legal proceedings involved in holding individuals or entities accountable for violations of criminal statutes rules ', 'fa fa-gavel', 'criminal law', ''),
(6, 'Cyber Law', 'Cyber law, also known as internet law or information technology law, is a field of law that deals with legal issues related to the use of technology, computers, and the internet.', 'fa fa-globe', 'cyber law', '');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `name`, `description`, `location`, `image`, `type`) VALUES
(1, 'Abdul Hafiz Pir Zada', ' Having authored the Constitution of the Islamic Republic of Pakistan, 1973, he is remembered as a leading expert in the field of Constitutional and Administrative Law.            ', 'Karachi', 'hafiz pirzada.jpg', 'civil law'),
(3, 'Jawed qazi', 'The Firm owns the legacy of two prominent lawyers and brothers late. Qazi Faiz Mohammad and late. Qazi Ghulam Hadi, who began their legal practices jointly before the partition.', 'Karachi', 'civil javed.webp', 'civil law'),
(4, 'Qasim bin Sajid', 'Qasim bin sajid assist them in their legal matters ranging from civil, criminal, family, revenue, constitutional matters,bank matters, tax and other related matters.\r\nI have been I have been this lega', 'Multan', 'qasim family.jpg', 'family law'),
(6, 'Mehwish Gondal', ' Advocate Mehwish Gondal is best family lawyer in Faisalabad and you can contact us for all kinds of cases falling under the civil law services. Mehwish Gondal to help people in need of reliable legal', 'Faisalabad', 'Mehwish family.jpg', 'family law'),
(7, 'Noreen', 'The founder of Noren Family Law, Gemma Noren is an experienced solicitor specializing in all aspects of family, matrimonial and children law matters.', 'Karachi', 'noren family.webp', 'family law'),
(8, 'Chaudary Aitzaz Ahsan', '  Ahsan is a senior advocate in the Supreme Court of Pakistan and senior partner of Aitzaz Ahsan & Associates.He is a family lawyer. ', 'Karachi', 'chaudry.jpg', 'family law'),
(9, 'Amir ali Majid', 'Mr. Ali has successfully litigated civil rights and criminal defense cases at all levels—including arguing multiple landmark cases in the U.S. Supreme Court. ', 'Faisalabad', '6-Amir-Ali-Majid.webp', 'civil law'),
(10, 'Mr Ishtiaq chechi', 'Ishtiaq  is located in Lahore, Pakistan and offers a variety of legal services for local, regional, and international clients. Practice areas include banking and finance, commercial and corporate law.', 'Islamabad', 'ishtiq.jpg', 'business law'),
(11, 'Shahzad Siddique Alvi', 'Alvi Law Associates is located in Islamabad / Rawalpindi, Pakistan and offers a wide variety of legal services to clients around the world, especially for overseas Pakistanis.', 'Islamabad', 'alvi.jpg', 'business law'),
(12, 'Mubeen Rana', 'Mobeen Rana’s practice concentrates on corporate, commercial, banking and finance, petroleum and energy, intellectual property, shipping and maritime, real estate and telecommunication laws.', 'Lahore', 'muben.jpg', 'business law'),
(13, 'Munir Sheikh', 'Munir A. Sheikh is a Justice (Retired) from the Supreme Court of Pakistan whose practice is focused on dispute resolution in cases involving corporate, commercial, finance, intellectual property, petr', 'Lahore', 'muneer.jpg', 'business law'),
(14, 'Roshan Zamir', 'We offer extensive experience in all areas of criminal, commercial and corporate laws. Our real life corporate leadership experience enables us to provide our clients with the best results that a prac', 'Karachi', 'roshan.jfif', 'criminal law'),
(15, 'Rafiq Kalwar', 'Our litigators are some of the most experienced in the industry, bringing extensive courtroom experience to every matter our firm handles. This experience enables us to spot outcome-determinative lega', 'Karachi', 'Rafiq-Kalwar.jpg', 'criminal law'),
(16, 'Nawaz Usman', 'The Osmani Law Associates is one of the best Law Firms Lawyers in Karachi Pakistan, a registered, exclusive Legal Services provider and leading firm having its Head Offices in Karachi and in Islamabad', 'Karachi', 'nawaz usmain.jfif', 'criminal law'),
(17, 'Mohsin Raza', 'Raza & Associates helps clients in ensuring that IP assets add to the business profitability rather than to its overhead costs. We act as our clients’ partners-in-growth by providing value advice to o', 'Lahore', 'mohsin raza.jfif', 'criminal law'),
(18, 'Muhammad Jamal', ' Jamal muhammad is very professional and responsible lawyer. My experience with jamal sahb memorable because of his professional nature.', 'Karachi', 'jamal.jpg', 'cyber law'),
(19, 'Arsalan Fazil', ' Arsalan Fazil is an educational lawyer with a deep passion for advocating for students\' rights in the education system.', 'Lahore', 'arsalan fazil edu.jfif', 'education law'),
(21, 'Zeeshan Ashraf', 'Zeeshan Ashraf is an educational rights attorney who is passionate about ensuring that underserved and underprivileged students have access to quality education. ', 'Karachi', 'zeeshan ashraf meer edu.jfif', 'education law'),
(23, 'Farooq Amjad', 'Farooq Amjad is an educational law expert specializing in school board governance and policies. He provides legal counsel to school districts. ', 'Lahore', 'farooq amjad edu.jfif', 'education law'),
(24, 'Hasham Shahid', 'Hasham Shahid is an educational lawyer who focuses on issues related to higher education.', 'Karachi', 'Has edu.jpg', 'education law');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_info`
--

CREATE TABLE `lawyer_info` (
  `law_id` int(11) NOT NULL,
  `law_name` varchar(255) NOT NULL,
  `law_job` varchar(200) NOT NULL,
  `law_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer_info`
--

INSERT INTO `lawyer_info` (`law_id`, `law_name`, `law_job`, `law_image`) VALUES
(1, 'Abdul Hafia Pirzada', 'Criminal Lawyer', 'team-1.JPG'),
(2, 'Hafiz Abdul Rehman', 'Family lawyer', 'team-2.JPG'),
(3, 'Hamza', 'Cyber Lawyer', 'team-4.JPG'),
(4, 'Hina', 'Education Law', 'team-3.JPG'),
(5, 'Hyder Sher  ', 'Business lawyer', 'team-1.JPG'),
(6, 'Nawaz Usmani ', 'Civil Lawyer', 'team-4.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_profile`
--

CREATE TABLE `lawyer_profile` (
  `lawyer_id` int(11) NOT NULL,
  `lawyer_username` varchar(200) NOT NULL,
  `lawyer_email` varchar(200) NOT NULL,
  `lawyer_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `access_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`, `image`, `user_role_id`, `access_token`) VALUES
(5, 'ubaid', 'ubaid@gmail.com', '$2y$10$0oZFzSiSsyNnPX92IPHHlOJg8I8PWZlQl6vX9jYLNDeJALWMjjE.e', 'messages-3.jpg', 1, ''),
(6, 'maaz', 'maaz@gmail.com', '$2y$10$voVMGfcjpnyFqE3dl1IxU.pfZP6De6NPjdXEFOACbjwilK0vkukDq', 'abdul hafiz.jpg', 1, ''),
(7, 'Talha', 'talha@gmail.com', '$2y$10$TZ0riiHPauK/FAXNmAY7RejfVkxedgc4rGfmpAAj5.6yAEEGXxOX6', 'messages-1.jpg', 3, ''),
(8, 'adil', 'adil@gmail.com', '$2y$10$SMfQqiPdTS9Fp6M42It3suNwXrDPWeEdEzDm9jIsNXnK5Y2lzsJxK', '', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Lawyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `law`
--
ALTER TABLE `law`
  ADD PRIMARY KEY (`law_id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer_info`
--
ALTER TABLE `lawyer_info`
  ADD PRIMARY KEY (`law_id`);

--
-- Indexes for table `lawyer_profile`
--
ALTER TABLE `lawyer_profile`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role_id` (`user_role_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `law`
--
ALTER TABLE `law`
  MODIFY `law_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lawyer_info`
--
ALTER TABLE `lawyer_info`
  MODIFY `law_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lawyer_profile`
--
ALTER TABLE `lawyer_profile`
  MODIFY `lawyer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
