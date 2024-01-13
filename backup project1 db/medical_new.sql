-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2012 at 05:00 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medical_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `password`, `email`) VALUES
(1, 'admin', '123456', 'kkumawat1111@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `image`, `url`) VALUES
(11, 'Samsung-AdHub-Market.jpg', 'http://www.samsung.com/in/consumer/mobile-phone/mobile-phone'),
(8, 'samsung-adhub.jpg', 'http://www.samsung.com/in/consumer/mobile-phone/mobile-phone'),
(7, 'mobile.png', 'http://www.samsung.com/in/consumer/mobile-phone/mobile-phone'),
(20, 'samsung-adhub.jpg', 'http://www.samsung.com/in/consumer/mobile-phone/mobile-phone');

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE IF NOT EXISTS `banner_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`id`, `image`, `status`, `created`, `modified`) VALUES
(10, 'timthumb1.png', '1', '2007-11-12', '2009-11-12'),
(8, 'ads_imagenurse-instructions.jpg', '1', '2007-11-12', '2019-11-12'),
(9, 'timthumb2.png', '1', '2007-11-12', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `confi`
--

CREATE TABLE IF NOT EXISTS `confi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `phone2` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `site_name` text NOT NULL,
  `tiwtter` varchar(255) NOT NULL,
  `rediff` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `confi`
--

INSERT INTO `confi` (`id`, `image`, `logo`, `phone`, `phone2`, `email`, `site_name`, `tiwtter`, `rediff`, `facebook`) VALUES
(1, 'IT-Training-Institute.png', 'rt-lo.png', '1234', '1234', 'infonicsolution@gmail.com', 'Copyright Â© 2012 Patientrights.in', 'https://www.tiwtter.com/', 'https://www.rediff.com', 'https://www.facebook.com/dadhich.priyank');

-- --------------------------------------------------------

--
-- Table structure for table `contects`
--

CREATE TABLE IF NOT EXISTS `contects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `company_name` text NOT NULL,
  `company_url` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `contects`
--

INSERT INTO `contects` (`id`, `name`, `email`, `phone`, `company_name`, `company_url`, `message`) VALUES
(23, 'admin', 'kkumawat1111@gamil.com', '9602063435', 'infonic.solutions', 'www.infonicsolution.com', 'This is site contain.'),
(44, 'j,', 'nm', 'nm', 'nm', 'n', 'nm'),
(45, 'vb', 'n', 'bnv', 'vb', 'bv', 'bn'),
(46, 'b', 'v', 'nb', 'xcz', 'cx', 'xzc'),
(47, '666', 'nbn', 'nb', 'bn', 'bn', 'bn');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tittle` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created` varchar(50) NOT NULL,
  `modified` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `tittle`, `description`, `image`, `status`, `created`, `modified`) VALUES
(18, '  Hurricane Sandy: Emergency in US; 375,000 evacua', 'The concept of document has been defined as Â©any concrete or symbolic indication, preserved or recorded, for reconstructing or for proving a phenomenon, whether physical or mental" (Briet, 1951,  7; here quoted from Buckland, 1991). A much cited article asked "what is a document" and concluded this way: Â©The evolving notion of Â©documentÂ© among Otlet, Briet, SchÂ©rmeyer, and the other documentalists increasingly emphasized whatever functioned as a document rather than traditional physical forms of documents. ', '32053.jpg', '1', '10-30-12', '11-20-12'),
(19, ' Cabinet reshuffle: Political and caste balance in', 'Jaipur: The latest reshuffle in the Union Cabinet has sprung many surprises as far as Rajasthan is concerned, leaving most political pundits scratching their heads while trying to decode the political message locked in it.\r\n \r\nAt best, the reshuffle can be described as an attempt to keep political and caste balance in the state. However, it is believed that Union minister Dr C P Joshi, in spite of losing additional charge of the prestigious Railways ministry, has had the upper hand over his rivals.\r\n \r\nLal Chand Kataria, MP from Jaipur rural has replaced Mahadev Singh Khandela as the party high commandï¿½s choice to give representation to the Jat community, the most influential political community in the state. From a protï¿½gï¿½ of chief minister Ashok Gehlot, he is believed to have become a member of the Joshi camp. There were speculations that either Jyoti Mirdha or Harish Choudhary would be taken from this quota but Kataria proved a dark horse.\r\n \r\nExtending the theory of political check and balances, many believe that induction of Chandresh Kumari, MP from Jodhpur and a member of the erstwhile royal family, is also significant. She was earlier considered to be the choice of Gehlot when she was given the ticket to contest from Jodhpur. However, her entry in the Union government, that too as a Cabinet minister, is being attributed to her own political weight. And the fact that someone from CMï¿½s home turf has been made a Cabinet ministerï¿½she is the first one to be included in the Union ministry after Gehlot from Jodhpurï¿½is a point to be noted.', 'photo_16755_wide_crop.jpg', '1', '10-30-12', '11-20-12'),
(17, 'Leaked: images of Google Nexus 4', 'The concept of document has been defined as ï¿½any concrete or symbolic indication, preserved or recorded, for reconstructing or for proving a phenomenon, whether physical or mental" (Briet, 1951, 7; here quoted from Buckland, 1991). A much cited article asked "what is a document" and concluded this way: ï¿½The evolving notion of ï¿½ï¿½documentï¿½ï¿½ among Otlet, Briet, Schï¿½rmeyer, and the other documentalists increasingly emphasized whatever functioned as a document rather than traditional physical forms of documents. The shift to digital technology would seem to make this distinction even more important. Levyï¿½s thoughtful analyses have shown that an emphasis on the technology of digital documents has impeded our understanding of digital documents as documents (e.g., Levy, 1994[2]). A conventional document, such as a mail message or a technical report, exists physically in digital technology as a string of bits, as does everything else in a digital environment. As an object of study, it has been made into a document. It has become physical evidence by those who study it.', '0234e_120104042101-doctor-clipboard-stethoscope-medical-chart-story-top.jpg', '1', '10-30-12', '11-20-12');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created` varchar(50) NOT NULL,
  `modified` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `image`, `status`, `created`, `modified`) VALUES
(7, 'Home', 'Medicare, and Medicaid and high expectations of chemotherapy cure as follows: We were not able to look at insurance (or lack of insurance) because there were too few patients in the cohort with no insurance, and Medicare and Medicaid status were highly correlated with age and income, respectively. However, we did examine if enrollment in a health maintenance organization (HMO) or the VA was associated with expectations of chemotherapy. We found that patients in a HMO or the VA (who are part of large integrated health networks) were less likely to have inaccurate expectations about the likelihood of cure (or more likely to have accurate expectations). This effect was stronger among patients with colorectal cancer than those with lung cancer. We think this may be because oncologists practicing in integrated networks may be better at helping patients with advanced cancer really understand the benefits and risks of chemotherapy. Other data demonstrate that such settings are less likely to pursue aggressive care at the end of life and more likely to enroll patients in hospice care', 'photo_16755_wide_crop.jpg', '', '', '11-20-12'),
(8, 'About Us', 'The 1,274 patients involved in the study had been diagnosed with metastatic lung or colorectal cancer at least four months prior to their participation in interviews and had received chemotherapy for their disease. The misconceptions about the curative powers of chemotherapy were independent of location, age, and race. A physician rated by the participants as being a high level communicator was also found to correlate with unrealistic expectations of cure for a terminal condition on the part of study participants. Unrealistic expectations of cure are important because they may impede planning for post death events that would therefore be the responsibility of spouses or children.', 'nursing-home-4.jpg', '', '', '11-20-12'),
(9, 'Ask The Expert', ' Data from FAME II Trial Concludes FFR-Guided PCI is Cost Effective and Improves Patient Outcomes\r\n\r\nST. PAUL, Minn.--(BUSINESS WIRE)-- St. Jude Medical, Inc. (NYS: STJ) , a global medical device company, today announced that Fractional Flow Reserve (FFR)-guided treatment using PressureWireï¿½ was cost effective for coronary interventions when compared to the best available medical therapy. Cost utility analysis data from the FAME II trial was presented as a late-breaking clinical trial at the 24th annual Transcatheter Cardiovascular Therapeutics (TCT) scientific symposium, sponsored by the Cardiovascular Research Foundation.', 'hospital-bed.jpg', '', '', '11-20-12'),
(10, 'News & Events', ' About The FAME Trials\r\n\r\nThe original FAME (Fractional Flow Reserve (FFR) vs. Angiography in Multivessel Evaluation) trial compared outcomes for patients whose treatment was guided by FFR to those whose treatment was guided only by angiography using St. Jude Medical PressureWire Certus technology. Results demonstrated improved clinical outcomes in patients with stable coronary artery disease and two or three vessel disease.\r\n\r\nThe St. Jude Medical-sponsored FAME II trial is a randomized, international multicenter trial that compares the clinical outcomes of FFR-guided contemporary percutaneous coronary intervention (PCI) plus the best available medical therapy to medical therapy alone in 1,220 patients with stable coronary artery disease.', '32053.jpg', '', '', '11-20-12'),
(11, 'know Your Rights', ' FAME vs. COURAGE\r\n\r\nThe FAME II trial provides insights about the benefits of coronary intervention and answers questions raised by the COURAGE (Clinical Outcomes Utilizing Revascularization and Aggressive Drug Evaluation) trial. The COURAGE trial demonstrated no difference in outcomes between patients treated with PCI plus medical therapy compared to medical therapy alone, but did not require use of FFR measurement technology. FAME II FFR-guided PCI appears to be more cost effective than angiography-guided PCI as used in the COURAGE cost-effectiveness analysis. The COURAGE study showed angiography-guided PCI cost-effectiveness ratios of $168,000 or higher per QALY under various scenarios.', '0234e_120104042101-doctor-clipboard-stethoscope-medical-chart-story-top.jpg', '', '', '11-20-12'),
(12, 'Know Your Responcebilities', ' About St. Jude Medical\r\n\r\nSt. Jude Medical develops medical technology and services that focus on putting more control into the hands of those who treat cardiac, neurological and chronic pain patients worldwide. The company is dedicated to advancing the practice of medicine by reducing risk wherever possible and contributing to successful outcomes for every patient. St. Jude Medical is headquartered in St. Paul, Minn. and has four major focus areas that include: cardiac rhythm management, atrial fibrillation, cardiovascular and neuromodulation. For more information, please visit sjm.com.', '32053.jpg', '', '', '11-20-12'),
(18, 'Contact Us', 'this ', '', '1', '01-31-04', '11-19-12'),
(25, 'Support Information', 'This is support page', 'nursing-home-4.jpg', '1', '11-05-12', '11-20-12'),
(26, 'Career Information', 'This is Career Page.', '32053.jpg', '1', '11-05-12', '11-20-12'),
(27, 'Our Address', '2nd Floor <br>Krishana Towor<br> \r\nHeera Nager<br> Mod Jaipur<br>\r\n(Raj)', '0234e_120104042101-doctor-clipboard-stethoscope-medical-chart-story-top.jpg', '1', '11-07-12', '11-20-12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
