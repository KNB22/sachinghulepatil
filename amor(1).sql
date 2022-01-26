-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 10:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amor`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `aboutid` int(11) NOT NULL,
  `aalttag` varchar(255) NOT NULL,
  `atitle` varchar(255) NOT NULL,
  `adescrption` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `aboutus` text NOT NULL,
  `aboutus1` text NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `quality` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`aboutid`, `aalttag`, `atitle`, `adescrption`, `image`, `aboutus`, `aboutus1`, `vision`, `mission`, `quality`) VALUES
(1, 'PVC Panel', 'PVC Panel', 'PVC Panel', 'pvc-panel.jpg', '<p><strong>Ved&nbsp;PVC Wall Panel are into&nbsp;manufacturing</strong>, exporting and trading&nbsp;high quality range of&nbsp;PVC Panel, Uv Marble Sheet, PVC Wall Sheet, 2 by 2 PVC Sheet, 3d Wall Stickers&nbsp;etc.&nbsp;We manufacture the&nbsp;supplied&nbsp;products&nbsp;the use of&nbsp;high&nbsp;quality&nbsp;material&nbsp;and&nbsp;sophisticated&nbsp;technology. These are&nbsp;accessible&nbsp;in&nbsp;various&nbsp;designs, shades, and&nbsp;shades&nbsp;as per the requirements&nbsp;of clients.&nbsp;</p>\r\n\r\n<p>We have an advanced infrastructure that has been instrumental in establishing us a dominant position in the market. It consists of modern machines and techniques that are optimally utilized to offer a flawless collection to our clients.</p>\r\n\r\n<p>Our extensive infrastructural facility is divided into different units like production, quality testing, R&amp;D, packaging, etc.</p>\r\n\r\n<ul>\r\n</ul>\r\n', '<p>Our vast industrial experience, we have been offering a high quality range of&nbsp;PVC Panel, PVC Marble Sheet, PVC Wall Sheet, PVC Corner etc. Factors that give us a cut-throat advantage over others are as follows:</p>\r\n\r\n<ul>\r\n	<li>Hi-tech manufacturing facility</li>\r\n	<li>Knowledgeable team of professionals</li>\r\n	<li>Strict quality standards</li>\r\n	<li>Ethical business policies</li>\r\n	<li>Timely delivery</li>\r\n	<li>Transparent business dealings</li>\r\n	<li>Customized packaging</li>\r\n</ul>\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL,
  `contactinfo` text NOT NULL,
  `address` text NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `opendays` varchar(255) NOT NULL,
  `opentime` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `contactinfo`, `address`, `emailid`, `mobileno`, `phoneno`, `opendays`, `opentime`, `facebook`, `twitter`, `linkedin`, `youtube`, `whatsapp`) VALUES
(1, '', '<p><strong>Godwon Address :</strong>&nbsp;House No.&nbsp;361, Shivle Wasti Tulapur, Taluka Haveli, District Pune 412216</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Office Address : </strong>&nbsp;Plot No 4510/4513 Resv No.180, Wind D, Ground Floor, Shop No 3, Mumbai Pune Highway, Opp Big Bazar, Chinchwad, Pune - 411019</p>\r\n', 'eknath.shivale@gmail.com', '+91 9881625397 ', '', 'Mon - Sat', '10:00 - 18:00', '#', '#', '#', '', '+91 7350086605');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `galleryid` int(11) NOT NULL,
  `imgtitle` varchar(255) NOT NULL,
  `galleryimg` longtext NOT NULL,
  `galttag` varchar(255) NOT NULL,
  `gtitle` varchar(255) NOT NULL,
  `gdescription` varchar(255) NOT NULL,
  `createdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`galleryid`, `imgtitle`, `galleryimg`, `galttag`, `gtitle`, `gdescription`, `createdate`) VALUES
(2, 'Ved 1 PVC Sheet', ' pvc-sheet-ved2.jpg,', 'Ved 1 PVC Sheet', 'Ved 1 PVC Sheet', 'Ved 1 PVC Sheet', '2020-10-01 17:17:50'),
(3, 'UV Marble Sheet', ' uv-marbal-sheet.jpg,', 'UV Marble Sheet', 'UV Marble Sheet', 'UV Marble Sheet', '2020-10-01 17:13:16'),
(4, '2 by 2 PVC Sheet', ' pvc-sheet-for-ceiling.jpg,', '2 by 2 PVC Sheet', '2 by 2 PVC Sheet', '2 by 2 PVC Sheet', '2020-10-01 17:31:32'),
(7, '3d Wall Sticker', ' cartoon-moon-star-3d.jpg,', '3d Wall Sticker', '3d Wall Sticker', '3d Wall Sticker', '2020-10-01 17:31:00'),
(8, 'PVC Panel', ' pvc-wall-panel.jpg,', 'PVC Panel', 'PVC Panel', 'PVC Panel', '2020-10-01 17:30:52'),
(9, 'Ved 2 PVC Sheet', ' pvc-sheet-wall.jpg,', 'Ved 2 PVC Sheet', 'Ved 2 PVC Sheet', 'Ved 2 PVC Sheet', '2020-10-01 17:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `indexpage`
--

CREATE TABLE `indexpage` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `lalttag` varchar(255) NOT NULL,
  `ltitle` varchar(255) NOT NULL,
  `ldescrption` varchar(255) NOT NULL,
  `welcomenotetitle` varchar(255) NOT NULL,
  `welcomenote` text NOT NULL,
  `themecolor` varchar(50) NOT NULL,
  `breadcrumbimg` varchar(255) NOT NULL,
  `servicemenu` varchar(255) NOT NULL DEFAULT 'Services'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indexpage`
--

INSERT INTO `indexpage` (`id`, `logo`, `lalttag`, `ltitle`, `ldescrption`, `welcomenotetitle`, `welcomenote`, `themecolor`, `breadcrumbimg`, `servicemenu`) VALUES
(1, 'ved_logo1.jpg', 'Ved PVC Wall Panel Logo', 'Ved PVC Wall Panel Logo', 'Ved PVC Wall Panel Logo', 'Ved PVC Wall Panel', '<p>Ved&nbsp;PVC Wall Panel are one of the&nbsp;leading manufacturing, exporting and trading&nbsp;high quality range of&nbsp;PVC Panel, UV&nbsp;Marble Sheet, PVC Wall Sheet, 2 by 2 PVC Sheet, 3d Wall Stickers&nbsp;etc.&nbsp;We manufacture the&nbsp;supplied&nbsp;products&nbsp;the use of&nbsp;high&nbsp;quality&nbsp;material&nbsp;and&nbsp;sophisticated&nbsp;technology. These are&nbsp;accessible&nbsp;in&nbsp;various&nbsp;designs, shades, and&nbsp;shades&nbsp;as per the requirements&nbsp;of clients.&nbsp;</p>\r\n\r\n<p>We have an advanced infrastructure that has been instrumental in establishing us a dominant position in the market. It consists of modern machines and techniques that are optimally utilized to offer a flawless collection to our clients. Our extensive infrastructural facility is divided into different units like production, quality testing, R&amp;D, packaging, etc.</p>\r\n', 'Pink', 'breadcrumb-bg.jpg', 'Services');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiryid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiryid`, `name`, `emailid`, `phoneno`, `message`, `createdate`) VALUES
(15, 'Brianna Belton', 'briannabelton.mkt@gmail.com', '1201201200', '\"Hey! Hope you are doing well & staying safe.\r\n\r\nI am glad to introduce myself as an SEO developer. Our SEO (Digital Marketing), SMO (Facebook,Instagram,Pinterest,Twitter Etc) techniques are an asset to your organization in bringing up traffic to your website, for generating more Leads, Sales, and Conversions. if you want to avail of our services.\r\n\r\nPlease share your phone number and a suitable time to talk, so I can explain it to you better.\r\n\r\n10 years of Experience | Partnered with 20+ Digital Agencies | 60+ SEO, SMO - SEM Google Ads Certified Professionals.\r\n\r\nThank you for your precious time.\r\n\r\nWarm Regards\r\nBrianna (SEO Developer)\r\n\r\n\"\r\n', '2020-11-12'),
(16, 'Brianna Belton', 'briannabelton.mkt@gmail.com', '1201201200', '\"Hey! Hope you are doing well & staying safe.\r\n\r\nI am glad to introduce myself as an SEO developer. Our SEO (Digital Marketing), SMO (Facebook,Instagram,Pinterest,Twitter Etc) techniques are an asset to your organization in bringing up traffic to your website, for generating more Leads, Sales, and Conversions. if you want to avail of our services.\r\n\r\nPlease share your phone number and a suitable time to talk, so I can explain it to you better.\r\n\r\n10 years of Experience | Partnered with 20+ Digital Agencies | 60+ SEO, SMO - SEM Google Ads Certified Professionals.\r\n\r\nThank you for your precious time.\r\n\r\nWarm Regards\r\nBrianna (SEO Developer)\r\n\r\n\"\r\n', '2020-11-12'),
(17, 'icvTKnFCWdrYAXE', 'hifounfastre9@gmail.com', '6426933131', 'ncRJOYSLdXHTbgP', '2020-11-22'),
(18, 'e7JfyqxE4lsbqQ <html><a href=\"https://www.apple.com\"><img src=\"https://d.radikal.ru/d28/2011/19/93045d3fb9c4.jpg\" width=\"600\" height=\"234\" alt=\"bill\"></a> </html>  2', 'man.baudoin@mail.ru', '', '', '2020-11-29'),
(19, 'gRpZbNBzecWdm', 'margaretjames5945@gmail.com', '8777111504', 'klrwdHEpZN', '2020-12-08'),
(20, 'Nikhil Pingle', 'ndpsound@rediffmail.com', '+919011212666', 'We are acoustical consultants and are into designing of auditoriums, stadiums , home theaters in Pune. We have a requirement of decorative reflective panels like your pvc marble panels. Kindly arrange to send us the technical details on mail or your sales executive to our office with samples. office address : Pingle Audios and Acoustics Pvt ltd, 11, Ganesh krupa hsg scty, Opp Taniara showroom. Aundh Iti road, Aundh Pune, ', '2020-12-18'),
(21, 'BHgdlUcQ', 'fieldsh056@gmail.com', '4684551650', 'DHNQteqcxfP', '2020-12-23'),
(22, 'tQlcbrEiRGpLSe', 'fieldsh056@gmail.com', '2697759750', 'bJHNgZrV', '2020-12-23'),
(23, 'Prasad Bharati', 'prasadbharati49@gmail.com', '09763073063', 'Please send me your catalogue for wall panels', '2020-12-27'),
(24, 'Ameya Ghone', 'ameyarealco@gmail.com', '09890010989', '1	3 MM THK.ACP SHEET	1220 X 3000	150	NOS.\r\n2	3 MM THK.ACP SHEET	1220 X 1800	140	NOS.\r\nPlese Give Me Best offer For ACP Sheet (Site Location Pune,Maharashtra)', '2021-01-02'),
(25, 'uVeyNQdgpU', 'robertcarr1173@gmail.com', '3344077194', 'ESqHtFlrDI', '2021-01-07'),
(26, 'LhQcqvIbrw', 'robertcarr1173@gmail.com', '6673651557', 'kFwNviKMfA', '2021-01-07'),
(27, 'unpNkuqvhgqsAxe https://www.google.com/', 'valeriivorobushkin@yandex.ru', 'unpN1vkuqvhgqsA47x5e https://www.google.com/', '', '2021-01-18'),
(28, 'gWRdNJOGEAFPp', 'davisnorman065@gmail.com', '4022831920', 'CuxSrjWZB', '2021-01-22'),
(29, 'OnBuNVygHCKm', 'davisnorman065@gmail.com', '8761208015', 'cqepPbVx', '2021-01-22'),
(30, 'Yuri Coneys', 'Altreche631@gmail.com', '', 'Do you need more serious customers for your site? We can provide niche targeted visitors specifically for your specific type of business To get info Have a look at: http://bit.ly/quality-web--traffic', '2021-01-25'),
(31, 'Okeygorandom https://www.apple.com/', 'nyahai_royal@mail.ru', 'Okeygorandom https://www.apple.com/', '', '2021-02-09'),
(32, 'Juliet Kasula', 'GiseleKinan@gmail.com', '', 'Do you want completely free advertising for your website? Take a look at this: http://bit.ly/free-ad-websites', '2021-02-15'),
(33, 'elJWFqQXGvKR', 'rudolphfftcg46@gmail.com', '7316972015', 'tVUdWkEoJiYwM', '2021-02-18'),
(34, 'PDJLxFfeM', 'rudolphfftcg46@gmail.com', '2245815475', 'kBhsZVeKuW', '2021-02-18'),
(35, 'NDCWxpidoFlL', 'julieandrews10672@gmail.com', '7819928482', 'NEOeSKpmZwlR', '2021-03-03'),
(36, 'lxNDHWqdinTA', 'julieandrews10672@gmail.com', '4235695724', 'IoWOFqbdCYsVeEZ', '2021-03-03'),
(37, '', '', '', '', '2021-03-04'),
(38, 'Joe Miller', 'info@domainregistration.com', '+1542384593234', 'Notice#: 491343\r\nDate: 15 Mar 2021\r\n\r\nYOUR IMMEDIATE ATTENTION TO THIS MESSAGE IS ABSOLUTELY NECESSARY!\r\n\r\nYOUR DOMAIN vedpvc.com WILL BE TERMINATED WITHIN 24 HOURS\r\n\r\nWe have not received your payment for the renewal of your domain vedpvc.com\r\n\r\nWe have made several attempts to reach you by phone, to inform you regarding the TERMINATION of your domain vedpvc.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://domain-registration.ga\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN vedpvc.com WILL BE TERMINATED\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://domain-registration.ga\r\n\r\nACT IMMEDIATELY.\r\n\r\nThe submission notification vedpvc.com will EXPIRE WITHIN 24 HOURS after reception of this email.', '2021-03-15'),
(39, 'jawfneybpx', 'fccc68390faa8395d20a03941c99fec5.roopert@ssemarketing.net', '+1 213 425 1453', 'Muchas gracias. ?Como puedo iniciar sesion?', '2021-03-21'),
(40, 'Joe Miller', 'info@domainregistration.com', '+1542384593234', 'TERMINATION OF DOMAIN vedpvc.com\r\nInvoice#: 491343\r\nDate: 22 Mar 2021\r\n\r\nIMMEDIATE ATTENTION REGARDING YOUR DOMAIN vedpvc.com IS ABSOLUTLY NECESSARY\r\n\r\nTERMINATION OF YOUR DOMAIN vedpvc.com WILL BE COMPLETED WITHIN 24 HOURS\r\n\r\nYour payment for the renewal of your domain vedpvc.com has not received yet\r\n\r\nWe have tried to reach you by phone several times, to inform you regarding the TERMINATION of your domain vedpvc.com\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://world-register.ga\r\n\r\nIF WE DO NOT RECEIVE YOUR PAYMENT WITHIN 24 HOURS, YOUR DOMAIN vedpvc.com WILL BE TERMINATED!\r\n\r\nCLICK HERE FOR SECURE ONLINE PAYMENT: https://world-register.ga\r\n\r\nYOUR IMMEDIATE ATTENTION IS ABSOLUTELY NECESSARY IN ORDER TO KEEP YOUR DOMAIN vedpvc.com\r\n\r\nThe submission notification vedpvc.com will EXPIRE WITHIN 24 HOURS after reception of this email.', '2021-03-22'),
(41, 'ZbjcVsvtgaxSYA', 'grovicitygr@gmail.com', '6519684846', 'znlOeECGqX', '2021-04-07'),
(42, 'ZreTUpPx', 'grovicitygr@gmail.com', '7683101534', 'zpVamqOZSULbyTuE', '2021-04-07'),
(43, 'Branden', 'RoryQuante@gmail.com', '', 'Want to get more business for your website? We can get you targeted people specifically for your business model To find out more For details visit: http://bit.ly/hi-quality-web-traffic', '2021-04-11'),
(44, 'mHZRDPBcLqXSv', 'treprindac@gmail.com', '4697785233', 'zTeoKElvJ', '2021-04-19'),
(45, 'DEaHPIytcvoKs', 'treprindac@gmail.com', '8622729341', 'gSsahlucrGqNXpIK', '2021-04-19'),
(46, 'dtersghiuyngfdplk https://tumblr.com', 'polikeeva_92@mail.ru', 'polikeeva_92@mail.ru', '', '2021-04-30'),
(47, 'PUFpavKSqYkOiD', 'ofilocedkg@gmail.com', '6074560257', 'pKIbErkoOxL', '2021-05-03'),
(48, 'wXPGHWDIJ', 'ofilocedkg@gmail.com', '5071173389', 'rCEyISksvlwhOqZi', '2021-05-03'),
(49, 'love https://google.com/searh zikizo7', 'suksdfdf@outlook.com', 'love https://google.com/searh zikizo7', '', '2021-05-04'),
(50, 'npNkuqvhgqsAxe https://www.google.com/', 'markwararltram1983@mail.ru', 'npN1vkuqvhgqsA47x5e https://www.google.com/', '', '2021-05-06'),
(51, '', '', '', '', '2021-05-12'),
(52, 'Chris Rawlins', 'rawlins.christopher@gmail.com', '9769429617', 'Can you please send me your Catalogue for Marble\r\nPVC sheets', '2021-05-26'),
(53, 'jlCeoXZxcdJ', 'ismail1977bulkinvi@gmail.com', '2956108741', 'cdlRGuNxtb', '2021-05-31'),
(54, 'YCnNQdbTf', 'ismail1977bulkinvi@gmail.com', '4429479313', 'wxecYdDUKpXg', '2021-05-31'),
(55, 'Cammie', 'upiyanist7272q@nevadaibm.com', '', 'Learn how to build a profitable affiliate marketing business by selling other peopleâ€™s products! Tap into your share of a $12+ billion business model. Read More about it here: http://bit.ly/start-your-own-successful-affiliate-marketing-business', '2021-06-04'),
(56, 'RwtjgGsnYvEUu', 'paulmarsh3852@gmail.com', '2969573115', 'LtMfWrTy', '2021-06-14'),
(57, 'Lorri', 'BobetteMatayoshi@yahoo.com', '', 'Here is a list of 18 free traffic sources that you should be using: http://bit.ly/18freetrafficsources', '2021-06-20'),
(58, 'mhFlruLRpvcZJes', 'hessgisela937@gmail.com', '9266757567', 'PWGSCDpvJ', '2021-06-21'),
(59, 'vJbsRmfVPIWiq', 'hessgisela937@gmail.com', '3826208926', 'MNrGEjOYKU', '2021-06-21'),
(60, 'Rocco Hinsley', 'DarronMarullo@yahoo.com', '', 'Here is a list of 18 free traffic sources that you should be using: http://bit.ly/18freetrafficsources', '2021-06-24'),
(61, 'ZJuTovPRrltxUyX', 'kentnersalvador9@gmail.com', '6643407561', 'WNVSGcjXhu', '2021-06-30'),
(62, 'IgyiFESjLhJf', 'kentnersalvador9@gmail.com', '2525139193', 'GZdBIFoLPUw', '2021-06-30'),
(63, 'srinivasan', 'srini674@gmail.com', '9960227071', 'please contact', '2021-07-03'),
(64, 'Enoch Kagel', 'LloydLongknife@hotmail.com', '', 'Here is a list of 18 free traffic sources that you should be using: http://bit.ly/18freetrafficsources', '2021-07-05'),
(65, 'OoWVJcBqKxAY', 'oksana.savina9393@gmail.com', '6676080026', 'JldSDMbyF', '2021-07-09'),
(66, 'cFLxErHdPORq', 'oksana.savina9393@gmail.com', '4453615551', 'KCuwUAeDcWV', '2021-07-09'),
(67, 'Hilary Cullip', 'GabriellaSheahan@yahoo.com', '', 'Here is a list of 18 free traffic sources that you should be using: http://bit.ly/18freetrafficsources', '2021-07-10'),
(68, 'Tyrone Hamidi', 'ClarenceCychosz@yahoo.com', '', 'Stop paying for ads. Here are 18 free traffic sources you should be using: https://bit.ly/18-free-traffic-sources', '2021-07-14'),
(69, 'Lavonda Cuthbert', 'AlexanderQuent@yahoo.com', '', 'Here are 18 free traffic sources you should be using: https://bit.ly/18-free-traffic-sources', '2021-07-20'),
(70, 'Eduardo Markum', 'HattieMassicotte@yahoo.com', '', 'Here are 18 free traffic sources you should be using: https://bit.ly/18-free-traffic-sources', '2021-07-24'),
(71, 'uTgOXvtDUKS', 'ferignitsjv@gmail.com', '4308175473', 'lLWvbuomINZgwx', '2021-07-25'),
(72, 'vGweuOCmFds', 'ferignitsjv@gmail.com', '7727817589', 'YFBkueqpgRK', '2021-07-25'),
(73, 'djHvYbzgPKUQhqWF', 'reynoldsalexandrina98@gmail.com', '3051220018', 'rKIeDuZw', '2021-08-01'),
(74, 'BwkZWOLAMT', 'reynoldsalexandrina98@gmail.com', '9329668251', 'hYcFKMivjIpDBZXq', '2021-08-01'),
(75, 'Wilbur Swist', 'EfrenRudack@gmail.com', '', 'How To Advertise Online Without Paying A Dime : https://bit.ly/resource-of-free-stuff', '2021-08-03'),
(76, 'Rajeev sharma', 'store@saraswati-group.com', '8494035698', 'share the catalogue with rate of material ', '2021-08-09'),
(77, 'Hyon Kalan', 'HueyGerritsen@gmail.com', '', '50 Ways To Advertise Your Business For Free On The Internet : https://bit.ly/free-ads-resource', '2021-08-13'),
(78, '14.08_2chekdonorov https://apple.com', 'gri9902@yandex.ru', 'gri9902@yandex.ru', '', '2021-08-14'),
(79, 'hptTefgPDzOI', 'richardoliver8367@gmail.com', '8166242849', 'TSbfCmvuVjN', '2021-08-15'),
(80, 'Nicky Broyhill', 'WoodrowSibeto@gmail.com', '', 'Effective And Free Ways To Advertise. Here Is A List... : https://bit.ly/free-ads-here', '2021-08-18'),
(81, 'Shannon Emfield', 'CharleyMagginson@gmail.com', '', 'Unique And Creative Ways To Advertise For Free https://t9y.me/crCX', '2021-08-24'),
(82, 'Andrew Dorries', 'CamilaRiel@hotmail.com', '', 'How To Advertise Online Without Paying A Dime https://t9y.me/crCX', '2021-09-04'),
(83, 'ZqXOlCuwDy', 'rutgerjonahct9klodej2@gmail.com', '7345051823', 'XcnUKesxArpID', '2021-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `galleryid` int(11) NOT NULL,
  `galleryimg` longtext NOT NULL,
  `clalttag` varchar(255) NOT NULL,
  `cltitle` varchar(255) NOT NULL,
  `cldescription` varchar(255) NOT NULL,
  `createdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`galleryid`, `galleryimg`, `clalttag`, `cltitle`, `cldescription`, `createdate`) VALUES
(8, ' client-02.png,', 'Image Partner', 'Image Partner', 'Image Partner', '2020-10-07 17:19:55'),
(9, ' client-02.png,', 'Image Partner', 'Image Partner', 'Image Partner', '2020-10-07 14:50:55'),
(10, ' client-01.png,', 'Image Partner', 'Image Partner', 'Image Partner', '2020-10-01 14:50:41'),
(12, ' client-01.png,', '', '', '', '2020-10-07 17:20:15'),
(13, ' client-01.png,', '', '', '', '2020-10-07 17:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `postby` varchar(255) NOT NULL,
  `descrption` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `galleryimg` text NOT NULL,
  `balttag` varchar(255) NOT NULL,
  `btitle` varchar(255) NOT NULL,
  `bdescrption` varchar(255) NOT NULL,
  `seotitle` varchar(70) NOT NULL,
  `seodesc` varchar(160) NOT NULL,
  `seokeyword` text NOT NULL,
  `newsdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `title`, `postby`, `descrption`, `image`, `galleryimg`, `balttag`, `btitle`, `bdescrption`, `seotitle`, `seodesc`, `seokeyword`, `newsdate`) VALUES
(13, 'PVC Ceiling Panel', 'Admin', '<p>We are&nbsp;presenting a broad compilation of&nbsp;PVC Ceiling Panel,&nbsp;With an intention to enhance the standing we have built, we are occupied in offering a wide collection of&nbsp;PVC Decorative Panel.</p>\r\n', 'pvc-ceiling-panel.jpg', ' ', ' PVC Ceiling Panel', 'PVC Ceiling Panel', 'PVC Ceiling Panel', '', '', '', '2020-09-24'),
(14, 'PVC Ceiling Tiles', 'Admin', '<p>Our organization has offering quality assured&nbsp;PVC Ceiling Tiles.&nbsp;These can also be customized as per the specifications given by our clients and provide them within the promised time-frame.</p>\r\n', 'pvc-tiles.jpg', ' ', 'PVC Ceiling Tiles', 'PVC Ceiling Tiles', 'PVC Ceiling Tiles', '', '', '', '2020-09-25'),
(15, 'Decorative Wall Panels', 'Admin', '<p>We have come up with a world class assortment of&nbsp;Decorative Wall Panels.&nbsp;To furnish the varying desires of our customers, we are immersed in offering a world class consignment of&nbsp;Wall Panels.</p>\r\n', 'wall-panelling.jpg', ' ', 'Decorative Wall Panels', 'Decorative Wall Panels', 'Decorative Wall Panels', '', '', '', '2020-09-25'),
(16, '', '', '', '', ' ', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification` int(11) NOT NULL,
  `Event` text COLLATE utf8_unicode_ci NOT NULL,
  `Date` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification`, `Event`, `Date`, `img`, `Description`) VALUES
(7, 'Birthday', '2022-01-23', 'E.jpg', '<p>my edit detils</p>\r\n'),
(8, 'Festival', '2022-01-24', 'biography.jpg', '<p>this photo show al information about biography and......\r\n'),
(9, 'Birthday', '2022-01-24', 'biography.jpg', '<p>wish you happy birthday xyz abc asgasgahsas</p>');

-- --------------------------------------------------------

--
-- Table structure for table `pvc`
--

CREATE TABLE `pvc` (
  `pvcid` int(11) NOT NULL,
  `imgtitle` varchar(255) NOT NULL,
  `imagepvc` longtext NOT NULL,
  `pvcalttag` varchar(255) NOT NULL,
  `pvctitle` varchar(255) NOT NULL,
  `pvcdescription` varchar(255) NOT NULL,
  `createdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pvc`
--

INSERT INTO `pvc` (`pvcid`, `imgtitle`, `imagepvc`, `pvcalttag`, `pvctitle`, `pvcdescription`, `createdate`) VALUES
(1, '', ' ved-design.jpeg,', '', '', '', '2020-10-06 16:26:30'),
(3, '', ' ved-design1.jpeg,', '', '', '', '2020-10-07 07:43:04'),
(4, '', ' ved-design2.jpeg,', '', '', '', '2020-10-07 09:01:32'),
(5, '', ' ved-design (2).jpeg,', '', '', '', '2020-10-07 09:01:42'),
(6, '', ' ved-design3.jpeg,', '', '', '', '2020-10-07 09:01:51'),
(7, '', ' ved-design4.jpeg,ved-design5.jpeg,ved-design6.jpeg,ved-design7.jpeg,ved-design8.jpeg,', '', '', '', '2020-10-07 09:02:05'),
(8, '', ' ved-design9.jpeg,ved-design10.jpeg,ved-design11.jpeg,ved-design12.jpeg,ved-design13.jpeg,', '', '', '', '2020-10-07 09:03:34'),
(9, '', ' ved-design14.jpeg,ved-design15.jpeg,ved-design16.jpeg,ved-design17.jpeg,ved-design18.jpeg,', '', '', '', '2020-10-07 09:04:54'),
(10, '', ' ved-design19.jpeg,ved-design20.jpeg,ved-design21.jpeg,ved-design22.jpeg,ved-design23.jpeg,ved-design24.jpeg,ved-design25.jpeg,ved-design26.jpeg,ved-design27.jpeg,ved-design28.jpeg,', '', '', '', '2020-10-07 09:05:17'),
(11, '', ' ved-design29.jpeg,ved-design30.jpeg,ved-design31.jpeg,ved-design32.jpeg,ved-design33.jpeg,ved-design34.jpeg,ved-design35.jpeg,ved-design36.jpeg,ved-design37.jpeg,ved-design38.jpeg,', '', '', '', '2020-10-07 09:06:16'),
(12, '', ' ved-design39.jpeg,ved-design40.jpeg,ved-design41.jpeg,ved-design42.jpeg,ved-design43.jpeg,', '', '', '', '2020-10-07 09:06:37'),
(13, '', ' ved-design44.jpeg,ved-design45.jpeg,ved-design46.jpeg,ved-design47.jpeg,ved-design48.jpeg,', '', '', '', '2020-10-07 09:06:55'),
(14, '', ' ved-design49.jpeg,ved-design50.jpeg,ved-design51.jpeg,ved-design52.jpeg,ved-design53.jpeg,', '', '', '', '2020-10-07 09:08:08'),
(15, '', ' ved-design54.jpeg,ved-design55.jpeg,ved-design56.jpeg,ved-design57.jpeg,ved-design58.jpeg,ved-design59.jpeg,ved-design60.jpeg,ved-design61.jpeg,ved-design62.jpeg,ved-design63.jpeg,', '', '', '', '2020-10-07 09:09:34'),
(16, '', ' ved-design64.jpeg,ved-design65.jpeg,ved-design66.jpeg,ved-design67.jpeg,ved-design68.jpeg,ved-design69.jpeg,ved-design70.jpeg,ved-design71.jpeg,ved-design72.jpeg,ved-design73.jpeg,', '', '', '', '2020-10-07 09:09:56'),
(17, '', ' ved-design74.jpeg,ved-design75.jpeg,ved-design76.jpeg,ved-design77.jpeg,ved-design78.jpeg,ved-design79.jpeg,ved-design80.jpeg,ved-design81.jpeg,ved-design82.jpeg,ved-design83.jpeg,', '', '', '', '2020-10-07 09:10:42'),
(18, '', ' ved-design84.jpeg,ved-design85.jpeg,ved-design86.jpeg,ved-design87.jpeg,ved-design88.jpeg,ved-design89.jpeg,ved-design90.jpeg,ved-design91.jpeg,ved-design92.jpeg,ved-design93.jpeg,', '', '', '', '2020-10-07 09:11:03'),
(19, '', ' ved-design94.jpeg,ved-design95.jpeg,ved-design96.jpeg,ved-design97.jpeg,ved-design98.jpeg,ved-design99.jpeg,ved-design100.jpeg,ved-design101.jpeg,ved-design103.jpeg,ved-design104.jpeg,', '', '', '', '2020-10-07 09:11:32'),
(20, '', ' ved-design105.jpeg,ved-design106.jpeg,ved-design107.jpeg,ved-design108.jpeg,ved-design109.jpeg,ved-designs.jpeg,ved-designs1.jpeg,ved-designs2.jpeg,ved-designs3.jpeg,', '', '', '', '2020-10-07 09:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `seoid` int(11) NOT NULL,
  `indextitle` text NOT NULL,
  `indexdesc` text NOT NULL,
  `indexkeyword` text NOT NULL,
  `abouttitle` text NOT NULL,
  `aboutdesc` text NOT NULL,
  `aboutkeyword` text NOT NULL,
  `servicetitle` text NOT NULL,
  `servicedesc` text NOT NULL,
  `servicekeyword` text NOT NULL,
  `gallerytitle` text NOT NULL,
  `gallerydesc` text NOT NULL,
  `gallerykeyword` text NOT NULL,
  `videotitle` varchar(70) NOT NULL,
  `videodesc` varchar(160) NOT NULL,
  `videokeyword` text NOT NULL,
  `blogtitle` text NOT NULL,
  `blogdesc` text NOT NULL,
  `blogkeyword` text NOT NULL,
  `contacttitle` text NOT NULL,
  `contactdesc` text NOT NULL,
  `contactkeyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`seoid`, `indextitle`, `indexdesc`, `indexkeyword`, `abouttitle`, `aboutdesc`, `aboutkeyword`, `servicetitle`, `servicedesc`, `servicekeyword`, `gallerytitle`, `gallerydesc`, `gallerykeyword`, `videotitle`, `videodesc`, `videokeyword`, `blogtitle`, `blogdesc`, `blogkeyword`, `contacttitle`, `contactdesc`, `contactkeyword`) VALUES
(1, 'UV Marble Sheet | UV Marble Sheet Manufacturer | In Pune', 'We are leading Manufacturer of UV Marble Sheet, Marbal, PVC Panel, Wooden PVC Panel, PVC Ceiling Panel, PVC Decorative Panel, Wall Panels and Textured PVC Panel', 'UV Marble Sheet, UV Marble Sheet Pune, UV Marble Sheet Manufacturer, UV Marble Sheet Manufacturer In Pune, UV Marble Sheet Manufacturer India, UV Marble Sheet Manufacturer In India, UV Marble Sheet Manufacturer In Pune, Maharashtra, India', '3d Wall Sticker | 3d Wall Sticker Manufacturer | 3d Wall Pune', 'Manufacturer of a wide range of products which include 3d Wall Sticker, PVC Panel, Uv Marbal Sheet,  PVC Wall Panel, 3d Wall Sticker in Pune, Maharashtra, India', '3d Wall Sticker, 3d Wall Sticker Pune, 3d Wall Sticker Manufacturer, 3d Wall Sticker Manufacturer In Pune, 3d Wall Sticker Manufacturer India, 3d Wall Sticker Manufacturer In India, 3d Wall Sticker Manufacturer In Pune, Maharashtra, India', '3d Hd PVC Sheet | 3d Hd PVC Sheet Manufacturer | In Pune', 'Manufacturer of a wide range of products which include 3d Hd PVC Sheet, 3d Wall Sticker, PVC Panel, Uv Marbal Sheet,  PVC Wall Panel, Wall Sticker in Pune', '3d Hd PVC Sheet, 3d Hd PVC Sheet Pune, 3d Hd PVC Sheet Manufacturer, 3d Hd PVC Sheet Manufacturer In Pune, 3d Hd PVC Sheet Manufacturer India, 3d Wall Sticker Manufacturer In India, 3d Wall Sticker Manufacturer In Pune, Maharashtra, India', 'PVC Panel | PVC Panel Manufacturer | PVC In Pune', 'We are leading Manufacturer of PVC Panel, Wooden PVC Panel, PVC Ceiling Panel, PVC Decorative Panel, Wall Panels and Textured PVC Panel from Pune', 'PVC Panel, PVC Panel Pune, PVC Panel Manufacturer, PVC Panel Manufacturer In Pune, PVC Panel Manufacturer India, PVC Panel Manufacturer In India, PVC Panel Manufacturer In Pune, Maharashtra, India', 'PVC White 3d Panel Sheet | 3d Panel Sheet In Pune', 'We are leading Manufacturer of PVC White 3d Panel Sheet, PVC Panel, UV Marbal Sheet, PVC Ceiling Panel, Ved 2 PVC Sheet, PVC Sheet from Pune, Maharashtra, India', 'PVC White 3d Panel Sheet, PVC White 3d Panel Sheet Pune, PVC White 3d Panel Sheet Manufacturer, PVC White 3d Panel Sheet Manufacturer Pune, PVC White 3d Panel Sheet Manufacturer India, PVC White 3d Panel Sheet Manufacturer Pune, Maharashtra, India, PVC White 3d Panel Sheet Manufacturer and Exporter Pune', 'Partition Sheet | Partition Sheet Manufacturer | In Pune ', 'We are leading Manufacturer of Partition Sheet, Ved 2 PVC Sheet, PVC Panel, UV Marbal Sheet, PVC Ceiling Panel, Ved 2 PVC Sheet, PVC Sheet from Pune', 'Partition Sheet, Partition Sheet Pune, Partition Sheet Manufacturer, Partition Sheet Manufacturer Pune, Partition Sheet Manufacturer India, Partition Sheet Manufacturer Pune, Maharashtra, India, Partition Sheet Manufacturer and Exporter Pune', '2 by 2 PVC Sheet | 2 by 2 PVC Sheet Manufacturer In Pune', 'We are leading Manufacturer of 2 by 2 PVC Sheet, PVC Panel, Wooden PVC Panel, PVC Ceiling Panel, PVC Decorative Panel, 2 by 2 PVC Sheet from Pune, maharashtra', '2 by 2 PVC Sheet, 2 by 2 PVC Sheet Pune, 2 by 2 PVC Sheet Manufacturer, 2 by 2 PVC Sheet Manufacturer In Pune, 2 by 2 PVC Sheet Manufacturer India, 2 by 2 PVC Sheet Manufacturer In India, 2 by 2 PVC Sheet Manufacturer In Pune, Maharashtra, India');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceid` int(11) NOT NULL,
  `servicename` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `salttag` varchar(255) NOT NULL,
  `stitle` varchar(255) NOT NULL,
  `sdescription` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `description1` varchar(255) NOT NULL,
  `serviceimg` text NOT NULL,
  `seotitle` varchar(70) NOT NULL,
  `seodesc` varchar(160) NOT NULL,
  `seokeyword` text NOT NULL,
  `homerankig` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceid`, `servicename`, `image`, `salttag`, `stitle`, `sdescription`, `description`, `description1`, `serviceimg`, `seotitle`, `seodesc`, `seokeyword`, `homerankig`, `rank`, `createdate`) VALUES
(5, '2 by 2 PVC Sheet', 'pvc-sheets-for-ceiling.jpg', '2 by 2 PVC Sheet', '2 by 2 PVC Sheet', '2 by 2 PVC Sheet', '<p>Keeping in mind latest market requirements, we are offering our clients a broad array of 2 by 2 PVC Sheet. Our offered products are extensively demanded in various areas.</p>\r\n\r\n<p>&bull; Excellent design<br />\r\n&bull; Easy to maintain<br />\r\n&bull; Durability</p>\r\n', '', ' ', '2 by 2 PVC Sheet | 2 by 2 PVC Sheet Manufacturer | In Pune', 'We are leading Manufacturer of 2 by 2 PVC Sheet, PVC Panel, Wooden PVC Panel, PVC Ceiling Panel, PVC Decorative Panel, 2 by 2 PVC Sheet from Pune, maharashtra', '2 by 2 PVC Sheet, 2 by 2 PVC Sheet Pune, 2 by 2 PVC Sheet Manufacturer, 2 by 2 PVC Sheet Manufacturer In Pune, 2 by 2 PVC Sheet Manufacturer India, 2 by 2 PVC Sheet Manufacturer In India, 2 by 2 PVC Sheet Manufacturer In Pune, Maharashtra, India', 2, 2, '2020-10-06 11:28:09'),
(6, 'UV Marbal Sheet', 'uv-marbal-sheet.jpg', 'UV Marble Sheet', 'UV Marble Sheet', 'UV Marble Sheet', '<p>Having a definite quality management system, we are immersed in bringing forth a top class consignment of&nbsp;UV Marble Sheet.</p>\r\n\r\n<p><strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Supreme quality</li>\r\n	<li>Exceptional standards</li>\r\n	<li>Fine finish</li>\r\n	<li>Sturdy</li>\r\n</ul>\r\n', '', ' ', 'UV Marble Sheet | UV Marble Sheet Manufacturer | In Pune', 'We are leading Manufacturer of UV Marble Sheet, PVC Panel, Wooden PVC Panel, PVC Ceiling Panel, PVC Decorative Panel, Wall Panels and Textured PVC Panel', 'UV Marble Sheet, UV Marble Sheet Pune, UV Marble Sheet Manufacturer, UV Marble Sheet Manufacturer In Pune, UV Marble Sheet Manufacturer India, UV Marble Sheet Manufacturer In India, UV Marble Sheet Manufacturer In Pune, Maharashtra, India', 1, 1, '2020-10-06 05:41:44'),
(7, 'PVC Panel', 'pvc-wall.jpg', 'PVC Panel', 'PVC Panel', 'PVC Panel', '<p>We are specialized in offering our valued clients a qualitative range of&nbsp;PVC Panel&nbsp;that is widely demanded in both residential and commercial sectors.</p>\r\n\r\n<p><strong>Features:</strong></p>\r\n\r\n<p>&bull; Elegant design<br />\r\n&bull; Weather resistance<br />\r\n&bull; Latest pattern</p>\r\n', '', ' ', 'PVC Panel | PVC Panel Manufacturer | In Pune', 'We are leading Manufacturer of PVC Panel, Wooden PVC Panel, PVC Ceiling Panel, PVC Decorative Panel, Wall Panels and Textured PVC Panel from Pune.', 'PVC Panel, PVC Panel Pune, PVC Panel Manufacturer, PVC Panel Manufacturer In Pune, PVC Panel Manufacturer India, PVC Panel Manufacturer In India, PVC Panel Manufacturer In Pune, Maharashtra, India', 4, 4, '2020-10-07 10:32:26'),
(8, '3d Wall Sticker', '3d-stickers.jpg', '3d Wall Sticker', '3d Wall Sticker', '3d Wall Sticker', '<p>We are one of the leading manufacturer and supplier of 3d wall sticker. We obligated to meet the quality standards as per the customer demand.</p>\r\n\r\n<p>The embossed 3d wall sticker offers stunning visual impact. The tiles are light, water proof, anti-collision, they can be installed in minutes over a clean and sleek surface without any mess or specialized tools, and never crack with time.</p>\r\n', '', ' 3d-sticker.jpg,3d-sticker1.jpg,3d-sticker2.jpg,3d-sticker3.jpg,3d-sticker6.jpg,3d-sticker7.jpg,3d-sticker8.jpg,3d-sticker9.jpg,3d-sticker10.jpg,3d-sticker11.jpg,3d-sticker12.jpg,3d-sticker13.jpg,3d-sticker14.jpg,3d-sticker15.jpg,3d-sticker17.jpg,3d-sticker18.jpg,3d-sticker19.jpg,3d-sticker20.jpg,3d-sticker21.jpg,3d-sticker22.jpg,3d-sticker23.jpg,3d-sticker24.jpg,3d-sticker25.jpg,3d-sticker26.jpg,3d-sticker27.jpg,3d-sticker28.jpg,3d-sticker29.jpg,3d-sticker30.jpg,', '3d Wall Sticker | 3d Wall Sticker Manufacturer | 3d Wall Sticker Pune', 'Manufacturer of a wide range of products which include 3d Wall Sticker, PVC Panel, Uv Marbal Sheet,  PVC Wall Panel, 3d Wall Sticker in Pune, Maharashtra, India', '3d Wall Sticker, 3d Wall Sticker Pune, 3d Wall Sticker Manufacturer, 3d Wall Sticker Manufacturer In Pune, 3d Wall Sticker Manufacturer India, 3d Wall Sticker Manufacturer In India, 3d Wall Sticker Manufacturer In Pune, Maharashtra, India', 3, 3, '2020-10-08 15:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sliderid` int(11) NOT NULL,
  `slider` varchar(255) NOT NULL,
  `slidertitle` varchar(255) NOT NULL,
  `slidercontent` text NOT NULL,
  `slideralt` varchar(255) NOT NULL,
  `sliderstitle` varchar(255) NOT NULL,
  `sliderdescription` varchar(255) NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sliderid`, `slider`, `slidertitle`, `slidercontent`, `slideralt`, `sliderstitle`, `sliderdescription`, `createdate`) VALUES
(13, 'PicsArt_01-20-12.28.16.jpg', 'My slider', 'me', 'alert', 'title', 'description', '2022-01-22'),
(14, 'flex.jpg', 'My slider', 'my title', 'alert', 'mt img', 'description', '2022-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `subservices`
--

CREATE TABLE `subservices` (
  `subserviceid` int(11) NOT NULL,
  `subservicename` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `salttag` varchar(255) NOT NULL,
  `stitle` varchar(255) NOT NULL,
  `sdescription` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `description1` varchar(255) NOT NULL,
  `serviceimg` text NOT NULL,
  `serviceimgtitle` varchar(255) NOT NULL,
  `seotitle` varchar(70) NOT NULL,
  `seodesc` varchar(160) NOT NULL,
  `seokeyword` text NOT NULL,
  `createdate` datetime NOT NULL,
  `serviceid` varchar(255) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subservices`
--

INSERT INTO `subservices` (`subserviceid`, `subservicename`, `image`, `salttag`, `stitle`, `sdescription`, `description`, `description1`, `serviceimg`, `serviceimgtitle`, `seotitle`, `seodesc`, `seokeyword`, `createdate`, `serviceid`, `rank`) VALUES
(3, '2 * 2 Sheet', 'sheet-img.jpg', '2 * 2 Sheet', '2 * 2 Sheet', '2 * 2 Sheet', '<p>We are presenting an exceptional quality variety of&nbsp;Ved 2 * 2 Sheet.&nbsp;We are one of The Prominent Manufacturers, Suppliers and Wholesalers of An Excellent Range of PVC Sheet.</p>\r\n\r\n<p><strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Excellent design</li>\r\n	<li>Durable</li>\r\n	<li>Fine finish</li>\r\n	<li>Sturdy</li>\r\n</ul>\r\n', '', ' sheet8.jpg,sheet9.jpg,sheet11.jpg,sheet12.jpg,sheet13.jpg,sheet14.jpg,sheet15.jpg,sheet16.jpg,sheet18.jpg,sheet-im.jpg,', '', '2 * 2 Sheet | 2 * 2 Sheet Manufacturer | In Pune', 'We are leading Manufacturer of 2 * 2 Sheet, PVC Panel, UV Marbal Sheet, PVC Ceiling Panel, Ved 2 PVC Sheet, PVC Sheet from Pune, Maharashtra, India', '2 * 2 Sheet Sheet, 2 * 2 Sheet Pune, 2 * 2 Sheet Manufacturer, 2 * 2 Sheet Manufacturer Pune, 2 * 2 Sheet Manufacturer India, 2 * 2 Sheet Manufacturer Pune, Maharashtra, India, 2 * 2 Sheet Manufacturer and Exporter Pune', '2020-10-01 17:05:33', '5', 0),
(5, 'ACP Sheet', 'decorative-panel.jpg', 'ACP Sheet', 'ACP Sheet', 'ACP Sheet', '<p>ACP sheets are a new age material that&rsquo;s used for constructing exteriors, interior applications, and signage. In today&rsquo;s time acp texture is obtainable in a wide range of colors and textures like wood, stone, sand, 3D etc.&nbsp;Our acp texture is said to be very high in quality. Our panels are long lasting panels. This feature of premium quality offering has made us at Viva one of the best and undisputed leader of the aluminum composite panel manufacturers in India.</p>\r\n', '', ' ', '', 'ACP Sheet | ACP Sheet Manufacturer | ACP Sheet In Pune', 'We are leading Manufacturer of ACP Sheet, Ved 2 PVC Sheet, PVC Panel, UV Marbal Sheet, Ved 2 PVC Sheet, PVC Sheet from Pune, Maharashtra, India', 'ACP Sheet, ACP Sheet Pune, ACP Sheet Manufacturer, ACP Sheet Manufacturer Pune, ACP Sheet Manufacturer India, ACP Sheet Manufacturer Pune, Maharashtra, India,ACP Sheet Manufacturer and Exporter Pune', '2020-10-01 20:57:25', '5', 0),
(6, 'PVC White 3d Panel Sheet', '3d-wall-panel.jpg', 'PVC White 3d Panel Sheet', 'PVC White 3d Panel Sheet', 'PVC White 3d Panel Sheet', '<p>PVC White 3d Panel Sheet are universal - they can nail down horizontally, vertically and at any angle. You can choose any colour plastic panels and any texture. For plating surfaces of any complexity there are many additional PVC profiles. With the help of plastic panels can decorate the walls in the most modern styles.</p>\r\n', '', ' ', '', 'PVC White 3d Panel Sheet | PVC White 3d Panel Sheet In Pune', 'We are leading Manufacturer of PVC White 3d Panel Sheet, PVC Panel, UV Marbal Sheet, PVC Ceiling Panel, Ved 2 PVC Sheet, PVC Sheet from Pune, Maharashtra, India', 'PVC White 3d Panel Sheet, PVC White 3d Panel Sheet Pune, PVC White 3d Panel Sheet Manufacturer, PVC White 3d Panel Sheet Manufacturer Pune, PVC White 3d Panel Sheet Manufacturer India, PVC White 3d Panel Sheet Manufacturer Pune, Maharashtra, India, PVC White 3d Panel Sheet Manufacturer and Exporter Pune', '2020-10-01 21:02:41', '5', 0),
(7, 'Partition Sheet', 'partition.jpg', 'Partition Sheet', 'Partition Sheet', 'Partition Sheet', '<p>We as one of the trustworthy manufactures and service providers in this industry engaged in providing an impeccable assortment of Partition Sheet, PVC Panel, 3d Wall Sticker&nbsp;and we also provide UV Marbal Sheet.</p>\r\n\r\n<p><strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Supreme quality</li>\r\n	<li>Exceptional standards</li>\r\n	<li>Fine finish</li>\r\n</ul>\r\n', '', ' ', '', 'Partition Sheet | Partition Sheet Manufacturer | In Pune', 'We are leading Manufacturer of Partition Sheet, Ved 2 PVC Sheet, PVC Panel, UV Marbal Sheet, PVC Ceiling Panel, Ved 2 PVC Sheet, PVC Sheet from Pune', 'Partition Sheet, Partition Sheet Pune, Partition Sheet Manufacturer, Partition Sheet Manufacturer Pune, Partition Sheet Manufacturer India, Partition Sheet Manufacturer Pune, Maharashtra, India, Partition Sheet Manufacturer and Exporter Pune', '2020-10-01 21:07:57', '5', 0),
(8, 'Hot Stamping', 'hot.jpg', 'Hot Stamping', 'Hot Stamping', 'Hot Stamping', '<p>10 Inch By 10 Foot</p>\r\n', '', ' hot1.jpg,hot2.jpg,hot3.jpg,hot4.jpg,hot5.jpg,hot6.jpg,', '', '', '', '', '2020-10-07 21:33:32', '7', 0),
(9, 'Laminated', 'laminated_design.jpg', 'Laminated', 'Laminated', 'Laminated', '<p>10 Inch By 10 Foot</p>\r\n', '', ' laminated1.jpg,laminated2.jpg,laminated3.jpg,laminated4.jpg,laminated5.jpg,laminated6.jpg,laminated7.jpg,laminated8.jpg,laminated10.jpg,laminated11.jpg,laminated12.jpg,laminated-desig6.jpg,laminated-design.jpg,laminated-design1.jpg,laminated-design2.jpg,laminated-design3.jpg,laminated-design4.jpg,laminated-design5.jpg,laminated-design6.jpg,laminated-design7.jpg,laminated-design8.jpg,laminated-design9.jpg,laminated-design10.jpg,laminated-design11.jpg,laminated-design12.jpg,laminated-design13.jpg,laminated-design14.jpg,laminated-design15.jpg,laminated-design16.jpg,laminated-img.jpg,laminated-img1.jpg,laminated-img2.jpg,laminated-img3.jpg,laminated-img4.jpg,laminated-img5.jpg,', '', 'Laminated  | PVC Panel Manufacturer | In Pune', 'We are leading Manufacturer of UV Marble Sheet, PVC Panel, Wooden PVC Panel, PVC Ceiling Panel, PVC Decorative Panel, Wall Panels and Textured PVC Panel ', 'UV Marble Sheet, UV Marble Sheet Pune, UV Marble Sheet Manufacturer, UV Marble Sheet Manufacturer In Pune, UV Marble Sheet Manufacturer India, UV Marble Sheet Manufacturer In India, UV Marble Sheet Manufacturer In Pune, Maharashtra, India', '2020-10-07 21:46:11', '7', 0),
(10, 'Marble', 'marbal.jpg', 'Marble', 'Marble', 'Marble', '<p>10 Inch By 10 Foot</p>\r\n', '', ' marbal1.jpg,marbal2.jpg,marbal3.jpg,marbal4.jpg,', '', 'Marble | Marble Design Manufacturer | Marble In Pune', 'We are leading manufacturer of Marble Design, Laminated Design, Hot Staming Design, PVC Panel in Pune', 'Marble, UV Marble Sheet Pune, UV Marble Sheet Manufacturer, UV Marble Sheet Manufacturer In Pune, UV Marble Sheet Manufacturer India, UV Marble Sheet Manufacturer In India, UV Marble Sheet Manufacturer In Pune, Maharashtra, India', '2020-10-07 21:50:50', '7', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `profilephoto` varchar(255) NOT NULL,
  `talttag` varchar(255) NOT NULL,
  `ttitle` varchar(255) NOT NULL,
  `tdescription` varchar(255) NOT NULL,
  `createdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamid`, `name`, `designation`, `profilephoto`, `talttag`, `ttitle`, `tdescription`, `createdate`) VALUES
(2, 'Kiran', 'Team Member', '', 'Team Member', 'Team Member', 'Team Member', '2020-10-01 14:40:00'),
(4, 'Shan', 'Team Member', '', 'Team Member', 'Team Member', 'Team Member', '2020-10-01 14:39:35'),
(5, 'Pankaj', 'Team Member', '', 'Team Member', 'Team Member', 'Team Member', '2020-10-01 14:39:14'),
(6, 'John', 'Team Member', '', 'Team member ', 'Team Member', 'Team Member', '2020-10-01 14:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonialid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `testimonial` text NOT NULL,
  `profilephoto` varchar(255) NOT NULL,
  `tmalttag` varchar(255) NOT NULL,
  `tmtitle` varchar(255) NOT NULL,
  `tmdescription` varchar(255) NOT NULL,
  `createdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonialid`, `name`, `designation`, `testimonial`, `profilephoto`, `tmalttag`, `tmtitle`, `tmdescription`, `createdate`) VALUES
(3, 'Uday', 'Client', '<p>We got very good service from them, they completed their work on time, All of us should take service from them, workers are also so good and hardworking.</p>\r\n', '', 'Image review', 'Image review', 'Image review', '2020-10-01 14:45:34'),
(4, 'Sameer', 'Client', '<p>We got very good service from them, they completed their work on time, All of us should take service from them, workers are also so good and hardworking.</p>\r\n', '', '', '', '', '2020-10-01 14:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `role` enum('1','2') NOT NULL COMMENT '1 Admin, 2 User',
  `createddate` datetime NOT NULL,
  `updateddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('0','1') NOT NULL COMMENT '0 Inactive, 1 Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `name`, `email`, `image`, `mobile`, `role`, `createddate`, `updateddate`, `status`) VALUES
(1, 'Ved', 'Ved$#635', 'Adc Technologies', '', '', '', '1', '2020-08-10 15:00:00', '2021-12-29 03:01:15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `videoid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL,
  `stitle` varchar(70) NOT NULL,
  `salttag` varchar(255) NOT NULL,
  `sdescription` varchar(255) NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`aboutid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`galleryid`);

--
-- Indexes for table `indexpage`
--
ALTER TABLE `indexpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiryid`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`galleryid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification`);

--
-- Indexes for table `pvc`
--
ALTER TABLE `pvc`
  ADD PRIMARY KEY (`pvcid`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`seoid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sliderid`);

--
-- Indexes for table `subservices`
--
ALTER TABLE `subservices`
  ADD PRIMARY KEY (`subserviceid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamid`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonialid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`videoid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `aboutid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `galleryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `indexpage`
--
ALTER TABLE `indexpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `galleryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pvc`
--
ALTER TABLE `pvc`
  MODIFY `pvcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `seoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sliderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subservices`
--
ALTER TABLE `subservices`
  MODIFY `subserviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `videoid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
