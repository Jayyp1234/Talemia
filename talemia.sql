-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 06:39 AM
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
-- Database: `talemia`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(20) NOT NULL,
  `category` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsapp` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `category`, `tags`, `title`, `author`, `date`, `duration`, `facebook`, `twitter`, `linkedin`, `whatsapp`, `email`, `image`, `body`) VALUES
(1, 'Press Release', 'Creating Awareness, Early-Stage Founders, Startups, Storytelling, Storytelling For Growth, Storytelling For Startups, Visibility', 'MoreTechies and Talemia wants to make it easier for early stage startups to access skilled Interns', 'Talemia HQ', '15 February 2022', '12 mins', NULL, NULL, NULL, NULL, NULL, 'IMG-20220214-WA0009-768x768.jpg', '<div id=\"main\" class=\"wtbx-footer-default\">\r\n<br><br>\r\n\r\n\r\n    <div id=\"page-header\" class=\"layout-five single-post article post-entry type-content_block wtbx-fadeout\" data-fullscroll=\"\" style=\"margin-top:7px;\">\r\n        <div class=\"wtbx_vc_row wtbx_vc_row-76845183 wtbx_stretch_row wtbx_center_align_tablet_portrait wtbx_anim_style_1 wtbx_row_fixed_height_screen wtbx_row-flex-align-stretch wtbx_row-content-align-middle wtbx_row-flex\"\r\n            data-skin=\"light\">\r\n            <div class=\"wtbx_vc_el_container wtbx_vc_row_container\">\r\n                <div class=\"wtbx_vc_el_inner wtbx_vc_row_inner\">\r\n                    <div class=\"wtbx_row_wrapper\">\r\n                        <div class=\"wtbx_row_bg\"></div>\r\n                        <div class=\"wtbx_row_content clearfix\">\r\n                            <div class=\"wtbx_row_content_wrapper\">\r\n                                <div class=\"wtbx_row_content_inner clearfix\">\r\n                                    <div\r\n                                        class=\"wtbx_vc_column vc_col-sm-8 vc_col-md-8 wtbx_with_image wtbx_vc_column-76846154\">\r\n                                        <div class=\"wtbx_vc_el_container wtbx_vc_column_container\">\r\n                                            <div class=\"wtbx_vc_el_inner wtbx_vc_column_inner\">\r\n                                                <div class=\"wtbx_column_wrapper clearfix\">\r\n                                                    <div class=\"wtbx_column_content\">\r\n                                                        <div\r\n                                                            class=\"wtbx_vc_styled_heading wtbx_vc_styled_heading-76846541 wtbx_style_default\">\r\n                                                            <div\r\n                                                                class=\"wtbx_vc_el_container wtbx_vc_styled_heading_container clearfix\">\r\n                                                                <div\r\n                                                                    class=\"wtbx_vc_el_inner wtbx_vc_styled_heading_inner\">\r\n                                                                    <div class=\"wtbx_heading_el_title_wrapper h1\">\r\n                                                                        <h1 class=\"wtbx_heading_el_title wtbx-text\">\r\n                                                                            MoreTechies and Talemia wants to make it\r\n                                                                            easier for early stage startups to access\r\n                                                                            skilled Interns</h1>\r\n                                                                    </div>\r\n                                                                </div>\r\n                                                            </div>\r\n                                                        </div>\r\n                                                    </div>\r\n                                                </div>\r\n                                            </div>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div\r\n                                        class=\"wtbx_vc_column vc_col-sm-4 vc_col-md-4 wtbx_with_image wtbx_vc_column-76846966\">\r\n                                        <div class=\"wtbx_vc_el_container wtbx_vc_column_container\">\r\n                                            <div class=\"wtbx_vc_el_inner wtbx_vc_column_inner\">\r\n                                                <div class=\"wtbx_column_wrapper clearfix\">\r\n                                                    <div class=\"wtbx_column_content\">\r\n                                                        <div\r\n                                                            class=\"wpb_single_image wpb_content_element vc_align_center\">\r\n\r\n                                                            <figure class=\"wpb_wrapper vc_figure\">\r\n                                                                <div\r\n                                                                    class=\"vc_single_image-wrapper vc_box_rounded  vc_box_border_grey\">\r\n                                                                    <img class=\"vc_single_image-img\"\r\n                                                                        src=\"assets/image/IMG-20220214-WA0009-768x768.jpg\"\r\n                                                                        width=\"760\" height=\"760\"\r\n                                                                        alt=\"More Techies X Talemia\"\r\n                                                                        title=\"More Techies X Talemia\"></div>\r\n                                                            </figure>\r\n                                                        </div>\r\n                                                    </div>\r\n                                                </div>\r\n                                            </div>\r\n                                        </div>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n\r\n\r\n    </div>\r\n\r\n    <!-- Page-wrap start -->\r\n    <div id=\"page-wrap\" class=\"clearfix\">\r\n\r\n        <article itemscope=\"\" itemtype=\"http://schema.org/Article\" id=\"post-9758\"\r\n            class=\"post-entry clearfix post-9758 post type-post status-publish format-standard has-post-thumbnail hentry category-press-release\">\r\n            <div id=\"container\" class=\"row-inner no_sidebar width-default\">\r\n\r\n                <div class=\"wtbx-content-body wtbx-post-body clearfix\">\r\n                    <div id=\"content\">\r\n\r\n\r\n                        <div class=\"wtbx-width wtbx-large-7 wtbx-medium-8 wtbx-small-9\">\r\n                            <div class=\"post-entry-header\">\r\n                            </div><!-- .entry-header -->\r\n                            <div class=\"entry-meta single-post-meta\">\r\n\r\n                                <span class=\"meta-author\">By <a class=\"meta-author-link\"\r\n                                        href=\"blog.php?author=Talemia HQ\"\r\n                                        title=\"View all posts by Talemia HQ\">Talemia HQ</a>\r\n                                </span>\r\n\r\n                                <span class=\"meta-category\">\r\n                                    in<span class=\"category-list\"><a\r\n                                            href=\"blog.php?category=Press Release\"\r\n                                            rel=\"category tag\">Press Release</a></span>\r\n                                </span>\r\n\r\n                            </div>\r\n                            <div class=\"entry-content\">\r\n                                <p style=\"text-align: left;\">Thousands of startups are launched every year in Africa.\r\n                                    Early stage founders have a whole lot of things to juggle through as they build out\r\n                                    their solutions. One of the critical areas of need for these African founders is\r\n                                    ‘’Talent’’. It’s also important to note that they aren’t just looking for talent,\r\n                                    they’re looking for talent that they can afford based on their current startup\r\n                                    phase.</p>\r\n                                <p><strong>Joy Eneghalu</strong> who’s building <a href=\"http://www.moretechies.com\"\r\n                                        target=\"_blank\" rel=\"noopener\"><strong>MoreTechies</strong></a>, a platform\r\n                                    designed to support Africans to transition into tech seamlessly jumped on a call\r\n                                    with <strong>Victor Onyekere</strong> who’s building <a href=\"http://Talemia.com\"\r\n                                        target=\"_blank\" rel=\"noopener\"><strong>Talemia</strong></a>, a platform designed\r\n                                    to support early stage African founders launch their startups faster than they can\r\n                                    on their own. Both platforms shared similar interests and their solutions were\r\n                                    complimentary</p>\r\n                                <p>They have teamed up to create a product called <strong>Vope</strong> which will help\r\n                                    entry level skilled African professionals get into tech through internship placement\r\n                                    at verified early stage tech startups in Africa. This partnership between the two\r\n                                    companies&nbsp; will democratize internship in Africa especially within the early\r\n                                    stage startup ecosystem. Vope will help thousands of entry level non-techies quickly\r\n                                    get their foot in the door by interning at any the verified early stage tech startup\r\n                                </p>\r\n                                <p><strong>How Vope Works</strong></p>\r\n                                <p>You can sign up as a professional seeking an internship or as a company seeking\r\n                                    Interns.</p>\r\n                                <p><em><strong>For Professionals seeking internship</strong></em></p>\r\n                                <ol>\r\n                                    <li>Log onto the website</li>\r\n                                    <li>Enter required details</li>\r\n                                    <li>Submit and wait to be matched with a startup</li>\r\n                                    <li>Get matched with a startup</li>\r\n                                </ol>\r\n                                <p><em><strong>For startups seeking Interns</strong></em></p>\r\n                                <ol>\r\n                                    <li>Log onto the website.</li>\r\n                                    <li>Enter required details</li>\r\n                                    <li>Submit and wait to be verified</li>\r\n                                    <li>Get matched with an Intern</li>\r\n                                </ol>\r\n                                <p>With Vope, more Africans will now have access to getting placed on internships across\r\n                                    tech startups. <strong>MoreTechies</strong> and <strong>Talemia</strong> have\r\n                                    aligned vision and believe strongly that this partnership is much needed in the\r\n                                    African startup ecosystem at this time. Victor and Joy strongly believe that Vope\r\n                                    will democratize internships within the early stage startup ecosystem</p>\r\n                                <p>Are you seeking internship placements in tech startups or looking for interns to join\r\n                                    your early stage startup?&nbsp; Join our waitlist by clicking <a\r\n                                        href=\"https://airtable.com/shr25PkHZFRgktThH\" target=\"_blank\"\r\n                                        rel=\"noopener\">HERE </a>[Professional] or <a href=\"http://bit.ly/VopeCompany\"\r\n                                        target=\"_blank\" rel=\"noopener\">HERE</a> [Companies]</p>\r\n                                <p>&nbsp;</p>\r\n                                <p>&nbsp;</p>\r\n                            </div><!-- .entry-content -->\r\n                            '),
(3, 'Startup Tip', 'Creating Awareness,\r\nEarly-Stage Founders,\r\nStartups,\r\nStorytelling,\r\nStorytelling For Growth,\r\nStorytelling For Startups,\r\nVisibility', 'Storytelling For Early Stage Startups', 'Talemia HQ', '19 February 2022', '7 mins', NULL, NULL, NULL, NULL, NULL, 'IMG-20220214-WA0009-768x768.jpg', NULL),
(4, 'Startup Tip', 'Creating Awareness,\r\nEarly-Stage Founders,\r\nStartups,\r\nStorytelling,\r\nStorytelling For Growth,\r\nStorytelling For Startups,\r\nVisibility', 'Acquiring Your First Set Of Users', 'Talemia HQ', '3 March 2022', '10 mins', NULL, NULL, NULL, NULL, NULL, 'Chima-3rd-Blog-Post-768x961.jpeg', NULL),
(5, 'Startup Tip', 'Creating Awareness,\r\nEarly-Stage Founders,\r\nStartups,\r\nStorytelling,\r\nStorytelling For Growth,\r\nStorytelling For Startups,\r\nVisibility', 'Fall In Love With The Problem', 'Talemia HQ', '19 February 2022', '7 mins', NULL, NULL, NULL, NULL, NULL, 'Bolu-2nd-Blog-Post-768x768.png', NULL),
(6, 'Startup Tip', 'Creating Awareness,\r\nEarly-Stage Founders,\r\nStartups,\r\nStorytelling,\r\nStorytelling For Growth,\r\nStorytelling For Startups,\r\nVisibility', 'Stay Very Lean When Starting Out', 'Talemia HQ', '15 March 2022', '15 mins', NULL, NULL, NULL, NULL, NULL, 'VO-1st-Blog-Post-768x1024.jpeg', NULL),
(7, 'Success Stories', 'Success stories', 'The Givers Coffee Story\r\n', 'Okeleye Victor', '15 January 2022', '15 mins', NULL, NULL, NULL, NULL, NULL, 'thegiverscoffee.com_-768x614.jpeg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(250) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `comment_id`, `name`, `email`, `description`, `date`) VALUES
(1, 3, 0, 'Obidiegwu Rosemary', 'okekejohnpaul12@gmail.com', 'This was a very Inspiring Post, i loved every bit of it.', 'Friday 6th of May 2022 05:01:34 AM');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(20) NOT NULL,
  `firstname` text COLLATE utf8_unicode_ci NOT NULL,
  `lastname` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `firstname`, `lastname`, `email`) VALUES
(7, 'Okeke', 'Johnpaul', 'okekejohnpaul12@gmail.com'),
(12, 'Okeke', 'Florence', 'okekeflorence@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` int(20) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `price` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`id`, `title`, `price`) VALUES
(1, 'thb  htrgfhgf', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `phone_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(20) NOT NULL,
  `firstname` text COLLATE utf8_unicode_ci NOT NULL,
  `lastname` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `startup` text COLLATE utf8_unicode_ci NOT NULL,
  `gender` text COLLATE utf8_unicode_ci NOT NULL,
  `age` text COLLATE utf8_unicode_ci NOT NULL,
  `category` text COLLATE utf8_unicode_ci NOT NULL,
  `industry` text COLLATE utf8_unicode_ci NOT NULL,
  `stage` text COLLATE utf8_unicode_ci NOT NULL,
  `team` text COLLATE utf8_unicode_ci NOT NULL,
  `startup_age` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `startup_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date_paid` text COLLATE utf8_unicode_ci NOT NULL,
  `date_expiry` text COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `email`, `phone`, `country`, `startup`, `gender`, `age`, `category`, `industry`, `stage`, `team`, `startup_age`, `startup_name`, `date_paid`, `date_expiry`, `payment_status`) VALUES
(6, 'Okeke', 'Johnpaul', 'okekejohnpaul12@gmail.com', '+2349032210788', 'Nigeria', 'Marasoft Pay', 'Male', '20-25', 'Technology Based', 'Agriculture', 'Idea', 'Yes', 'Below 1 year', 'Marasoft Pay', '1651190686', '1651298686', 'paid'),
(7, 'Okeke', 'Johnpaul', 'okekejohnpaul12@gmail.com', '+2349032210788', 'Nigeria', 'Marasoft Pay', 'Male', '20-25', 'Technology Based', 'Agriculture', 'Idea', 'Yes', 'Below 1 year', 'Marasoft Pay', '1651190686', '1651298686', 'paid'),
(8, 'Okeke', 'Johnpaul', 'okekejohnpaul12@gmail.com', '+2349032210788', 'Nigeria', 'Marasoft Pay', 'Male', '20-25', 'Technology Based', 'Agriculture', 'Idea', 'Yes', 'Below 1 year', 'Marasoft Pay', '1651190686', '1651298686', 'paid'),
(9, 'Okeke', 'Johnpaul', 'okekejohnpaul12@gmail.com', '+2349032210788', 'Nigeria', 'Marasoft Pay', 'Male', '20-25', 'Technology Based', 'Agriculture', 'Idea', 'Yes', 'Below 1 year', 'Marasoft Pay', '1651190686', '1651298686', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
