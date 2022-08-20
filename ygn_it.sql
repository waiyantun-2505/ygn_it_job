-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2021 at 10:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ygn_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Information Technology', '2021-06-20 20:21:25', '2021-06-20 20:21:25'),
(2, 'Human Resource', '2021-06-20 20:21:32', '2021-06-20 20:21:32'),
(3, 'Sales and Marketing', '2021-06-20 20:21:43', '2021-06-20 20:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_employee` int(11) NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi_misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `what_do` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `culture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `no_of_employee`, `facebook`, `instagram`, `logo`, `banner`, `visi_misi`, `what_do`, `culture`, `created_at`, `updated_at`) VALUES
(1, 'KBZ Company Limited', 'No.(615/1), Pyay Road, Kamayut Township, Yangon City, Myanmar.', 1000, 'https://www.kbzbank.com/en/company-profile/', 'https://www.kbzbank.com/en/company-profile/', '/storage/company/logo/1624243449.png', '/storage/company/banner/1624243449.jpg', 'For over two decades, KBZ Bank has been part of Myanmar’s growth story, working tirelessly to strengthen communities and institutions for the long term and to improve the quality of life for all.', 'As Myanmar’s largest privately-owned bank, we represent nearly 40 percent of both retail and commercial banking in the country, driving the success of the nation’s entrepreneurs, businesses and communities.', 'We are also transforming from the inside out, drawing on the latest technologies to work more efficiently and serve our customers better, while developing the bankers and leaders of the future.', '2021-06-20 20:14:09', '2021-06-20 20:14:09'),
(2, 'AYA Bank', 'No. 416, Mahabandoola Road, Kyauktada Township, Yangon, Myanmar.', 1000, 'https://www.ayabank.com/en_US/about-aya/about-us-in-brief/', 'https://www.ayabank.com/en_US/about-aya/about-us-in-brief/', '/storage/company/logo/1624243742.jpg', '/storage/company/banner/1624243742.jpg', 'AYA Bank was licensed by the Central Bank of Myanmar on 2 July 2010 and relicensed under the Financial Institutions Law 2016 as a full service universal bank. The bank has grown rapidly over the past seven years to become the second largest in the country, with [265] branches, [1.4m customer], Kyat [4.7] trillion customer deposits and [150 billion] Shareholders’ Equity as at the end of September 2017. Top 100 depositors represent about 6% of total deposits, underlining the general public’s confidence in the bank.', 'As a member of the UN Global Compact (UNGC), AYA Bank is committed to implement global standards in Corporate Governance and compliance best practices in its management and operations.', 'Consequently, since 2014-15, AYA Bank is the only bank in Myanmar to be IFRS compliant and the only one audited under International Standards of Auditing (ISA) by a big-four international firm. The bank has also attracted and retained talented staff with both domestic and international exposure and has invested significantly', '2021-06-20 20:19:02', '2021-06-20 20:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `township` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `careerlevel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `exp_yrs` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `is_feature` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `description`, `township`, `requirement`, `start_date`, `end_date`, `gender`, `careerlevel`, `salary`, `exp_yrs`, `category_id`, `company_id`, `is_feature`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Senior Sales and Marketing Manager', '<ul style=\"margin: 14px 10px; padding: 0px 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: GothamPro, zawgyi-one; vertical-align: baseline; list-style: none; color: rgb(33, 37, 41);\"><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">First line of interfacing of data and analytics team with business as well as IT organization. Partner with business stakeholders in products, marketing, operations and other functions and support in building our analytical data platforms and infrastructure</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Design and manage underlying data sources (data infra.) to allow quick and efficient data extracts to support analysis</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Design and drive the KPI’s that are most important to decision makers</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Participate in the development of strategies, operating models, roadmaps and business cases for Analytics and BI solutions</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Automation and digitization of information dashboards</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Prepare and do presentations to the Sr. Management Board, write regular reports of findings, illustrating data graphically and translating complex findings into text</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Develop, track, and enforce consistent data definitions and assumptions across KPI metrics and reporting</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Develop and implement strategies to support ongoing data management needs, such as governance, technology shifts, and regulatory compliance changes</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Deliver data acquisition, transformation, cleansing, conversion, compression and loading of data into a variety of data models</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Hire, train, and supervise DMT team and ensure that team meets the reporting and analytical needs of the business users</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Participate in the full lifecycle of an analytics or BI project: from gathering and understanding the requirements to creating the functional design, architecting the solution, supervising the detailed technical design and implementation, to preparing and executing the functional tests</li></ul><ul style=\"margin: 14px 10px; padding: 0px 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: GothamPro, zawgyi-one; vertical-align: baseline; list-style: none; color: rgb(33, 37, 41);\"><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Prototype / create business requirement document</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Extract the data from core system, multi database and transferring it into the new warehousing environment</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Be proactive within organization to provide input/opinion to internal stakeholder of BI system capability and to improve efficiency and effectiveness of organization operation</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">To implement and develop the algorithms and train the data sets to come out predictive model using relevant tools</li></ul>', 'Ahlon', '<ul style=\"margin: 14px 10px; padding: 0px 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: GothamPro, zawgyi-one; vertical-align: baseline; list-style: none; color: rgb(33, 37, 41);\"><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Bachelor Degree in Computer Science, Information Technology, Economics</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">At least 8 years of experience in data analysis and business intelligence reporting</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Strong knowledge and experience with data modeling, database design, complex SQL queries and query optimization is a must</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Good understanding of statistical analysis</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Desirable in open source data scripting and analysis tools such as Python (Desirable).</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Demonstrated data trend analysis experience</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Experience in the financial industry is a plus</li></ul>', '2021-06-21', '2021-06-30', 'Male', 'Manager', 1000000, 3, 3, 1, 1, 1, '2021-06-20 20:26:30', '2021-06-20 20:26:30'),
(2, 'Front-End Web Developer', '<p><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">We are looking for a Angular Developer to join our growing Engineering team and build out the next generation of our platform. This is a fast-paced position that requires a high degree of energy and ability to focus without compromising quality. We are looking for a candidate who likes to learn and will continue to grow their technology skills and mentor others.</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">Responsibilities</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">• Delivering a complete front-end application</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">• Ensuring high performance on mobile and desktop</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">• Writing tested, idiomatic, and documented Typescript, JavaScript, HTML and CSS</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">• Coordinating the workflow between the graphic designer, the HTML coder, and yourself</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">• Cooperating with the back-end developer in the process of building the RESTful API</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">• Communicating with external web services</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">• Troubleshoot, debug and upgrade existing systems</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">Location: Ahlone Township, Yangon.</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">Contact: htin.aung@haulio.io</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">Website: http://www.haulio.io</span><br style=\"font-family: GothamPro, zawgyi-one; color: rgb(33, 37, 41); font-size: 14px;\"><span style=\"color: rgb(33, 37, 41); font-family: GothamPro, zawgyi-one; font-size: 14px;\">Facebook Page: https://www.facebook.com/Haulio.io/</span><br></p>', 'Kamayut', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: GothamPro, zawgyi-one; vertical-align: baseline; color: rgb(33, 37, 41);\">• Good command in English</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: GothamPro, zawgyi-one; vertical-align: baseline; color: rgb(33, 37, 41);\">• Minimum 2 years experience with Angular, Typescript, JavaScript and HTML5<br>• Deep knowledge of Angular&nbsp;practices and commonly used modules based on extensive work experience<br>• Professional, precise communication skills<br>• Creating self-contained, reusable, and testable modules and components<br>• Ensuring a clear dependency chain, in regard to the app logic as well as the file system<br>• Ability to provide SEO solutions for single page apps<br>• Thorough understanding of the responsibilities of the platform, database, API, caching layer, proxies, and other web services used in the system<br>• Validating user actions on the client side and providing responsive feedback<br>• Writing non-blocking code, and resorting to advanced techniques such as multi-threading, when needed<br>• Creating custom, general use modules and components which extend the elements and modules of core Angular<br>• Experience with building the infrastructure for serving the front-end app and assets<br>• Diploma/Bachelor degree in Computer Science, Engineering or relevant field</p>', '2021-06-20', '2021-06-30', 'Male', 'Senior Level', 100, 3, 1, 1, 1, 1, '2021-06-20 21:10:00', '2021-06-20 21:10:00'),
(3, 'Application Developer', '<ul style=\"margin: 14px 10px; padding: 0px 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: GothamPro, zawgyi-one; vertical-align: baseline; list-style: none; color: rgb(33, 37, 41);\"><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">The Application Developer is responsible for the development of business solutions and reports based on functional and technical requirements.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Take a part in the development, implementation, integration, testing and support team of Business Transformation Project.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">The job holder has to work closely with functional project team and external related parties to achieve the project’s goal.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">ABAP programming, testing and debugging functions related to the implementation of SAP modules.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Knowledge in SAP Business Warehouse, analytical SAC reporting and SAP analysis for MS office.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Understand business requirements very well and ability to change business requirements to solutions.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Posting error/bugs log to SAP support and dealing for workaround and solution.</li></ul>', 'Lanmadaw', '<ul style=\"margin: 14px 10px; padding: 0px 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 14px; line-height: inherit; font-family: GothamPro, zawgyi-one; vertical-align: baseline; list-style: none; color: rgb(33, 37, 41);\"><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Holder of Computer Science or IT related bachelor’s degree with at least 2 years experiences in software development.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Excellent coding, debugging, problem-solving and analytical skills</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Good in 4 skills of English language.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Knowledge of ERP systems in manufacturing or any kind of industry.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Strong technical skills in SAP, ABAP preferable, C++, .Net or JAVA.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Knowledge in Database and SAP Business Warehouse are preferred.</li><li style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: 1.5; vertical-align: baseline; list-style: disc;\">Good interpersonal and communication skills, Service Oriented skills.</li></ul>', '2021-06-20', '2021-07-10', 'Male/Female', 'Junior Level', 1000000, 2, 1, 2, 0, 1, '2021-06-20 21:12:37', '2021-06-20 21:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `seeker_id` bigint(20) UNSIGNED NOT NULL,
  `cover_letter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`id`, `job_id`, `seeker_id`, `cover_letter`, `created_at`, `updated_at`) VALUES
(2, 1, 4, NULL, '2021-06-21 03:11:43', '2021-06-21 03:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_28_094205_create_categories_table', 1),
(5, '2020_02_29_101713_create_permission_tables', 1),
(6, '2020_02_29_125041_create_companies_table', 1),
(7, '2020_03_01_035223_create_jobs_table', 1),
(8, '2020_03_02_193856_create_seekers_table', 1),
(9, '2020_03_02_195021_create_job_seeker_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 2),
(2, 'App\\User', 1),
(2, 'App\\User', 3),
(2, 'App\\User', 5),
(2, 'App\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wai@gmail.com', '$2y$10$qNoWg6R5S.A8m9SQ/7lQM.2EjvseJFAPpmkf0pDGOLDEeK2u55qYS', '2021-06-20 22:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-06-20 00:24:00', '2021-06-20 00:24:00'),
(2, 'seeker', 'web', '2021-06-20 00:24:00', '2021-06-20 00:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seekers`
--

CREATE TABLE `seekers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seekers`
--

INSERT INTO `seekers` (`id`, `user_id`, `address`, `phone`, `gender`, `photo`, `cv`, `created_at`, `updated_at`) VALUES
(1, 1, 'lhifhihl', 9089979, 'Male', '/storage/seeker/photo/1624172131.png', '/storage/seeker/cv/1624172131.pdf', '2021-06-20 00:25:31', '2021-06-20 00:25:31'),
(2, 2, 'lkahfhkjalkf', 9090909, 'Male', '/storage/seeker/photo/1624172253.png', '/storage/seeker/cv/1624172253.pdf', '2021-06-20 00:27:33', '2021-06-20 00:27:33'),
(4, 6, 'Lan thit street, Lammadaw', 90876565, 'Female', '/storage/seeker/photo/1624268456.JPG', '/storage/seeker/cv/1624268456.pdf', '2021-06-21 03:10:56', '2021-06-21 03:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'wai yan tun', 'user1@gmail.com', NULL, '$2y$10$YHX27pjmy.7pKY4brUVBaerAk63twtuHczZqgcKT2uniiJQsdGZl2', NULL, '2021-06-20 00:25:31', '2021-06-20 00:25:31'),
(2, 'wai yan tun', 'wai@gmail.com', NULL, '$2y$10$Ac4vrWjn9PUHeJGY9oZ6YOygXLDXnB9VnxehO6B.hBd459zainSuK', NULL, '2021-06-20 00:27:32', '2021-06-20 00:27:32'),
(6, 'Su Wint War', 'guest1@gmail.com', NULL, '$2y$10$KsptYhUY/4EXJQgTEoi2/etTTAYveGaWcQT.U8czxWvXlQ9.jxULq', NULL, '2021-06-21 03:10:56', '2021-06-21 03:10:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_category_id_foreign` (`category_id`),
  ADD KEY `jobs_company_id_foreign` (`company_id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_seeker_job_id_foreign` (`job_id`),
  ADD KEY `job_seeker_seeker_id_foreign` (`seeker_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `seekers`
--
ALTER TABLE `seekers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seekers_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seekers`
--
ALTER TABLE `seekers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD CONSTRAINT `job_seeker_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_seeker_seeker_id_foreign` FOREIGN KEY (`seeker_id`) REFERENCES `seekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seekers`
--
ALTER TABLE `seekers`
  ADD CONSTRAINT `seekers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
