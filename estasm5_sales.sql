-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2018 at 07:33 AM
-- Server version: 5.6.37-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estasm5_sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `Building1`
--

CREATE TABLE `Building1` (
  `id` int(255) NOT NULL,
  `Type` varchar(60) NOT NULL,
  `DealType` varchar(60) NOT NULL,
  `Sector` varchar(60) NOT NULL,
  `Area` varchar(60) NOT NULL,
  `BuildingYear` varchar(60) NOT NULL,
  `BuildingSide` varchar(60) NOT NULL,
  `StreetType` varchar(60) NOT NULL,
  `Buildingno` varchar(60) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Nearto` varchar(60) NOT NULL,
  `City` varchar(60) NOT NULL,
  `Floorno` varchar(60) NOT NULL,
  `UnitsinFloor` varchar(60) NOT NULL,
  `Type1` varchar(60) NOT NULL,
  `ResidentialDeposit` varchar(60) NOT NULL,
  `LicenseFloor` varchar(60) NOT NULL,
  `Elevatorno` varchar(60) NOT NULL,
  `Garage` varchar(60) NOT NULL,
  `Note` varchar(200) NOT NULL,
  `SourceBY` varchar(60) NOT NULL,
  `Bui._Serial` varchar(60) NOT NULL,
  `Verification` varchar(60) NOT NULL,
  `Status` varchar(60) NOT NULL,
  `Date` datetime NOT NULL,
  `Time` time NOT NULL,
  `Reg_By` varchar(60) NOT NULL,
  `Building` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `ID` int(255) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Honorific` varchar(255) NOT NULL,
  `En_Fname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `En_Lname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Ar_Fname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Ar_Lname` varchar(255) CHARACTER SET ucs2 NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Mobile01` varchar(255) NOT NULL,
  `Mobile02` varchar(30) NOT NULL,
  `Phone1` varchar(255) NOT NULL,
  `Whatsapp` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Known_From` varchar(30) NOT NULL,
  `Note` varchar(255) CHARACTER SET utf8 NOT NULL,
  `verification` varchar(60) NOT NULL,
  `Date` datetime NOT NULL,
  `time` time NOT NULL,
  `Reg_By` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`ID`, `Type`, `Class`, `Honorific`, `En_Fname`, `En_Lname`, `Ar_Fname`, `Ar_Lname`, `Gender`, `Mobile01`, `Mobile02`, `Phone1`, `Whatsapp`, `Email`, `Known_From`, `Note`, `verification`, `Date`, `time`, `Reg_By`) VALUES
(3, 'Internal', 'B', 'Mr.', 'Hesham', 'Karim', 'هشام', 'كريم', 'male.', '01006594201', '', '', '', '', 'Social Media', 'محتاج نكلموا لما ننزل زيارات علي شقة جناكليس', 'no', '2018-01-09 00:00:00', '12:52:36', 'hader.adel@estasmer.com'),
(8, 'Internal', 'A', 'Mr.', 'Ahmed', 'Yousry', 'احمد', 'احمد', 'male.', '01276794081', '', '035764301', '', '', 'Friend', 'ahmed yousry test', 'no', '2018-01-09 00:00:00', '01:30:18', 'ahmed'),
(7, 'Internal', 'A', 'Ms.', 'Aya', 'Fauomy', 'ايه', 'فيومى', 'Female', '01002771869', '', '', '01002771869', '', 'Social Media', 'سئلت عن شقه المندره جمال عبد الناصر طلعت غاليه و كبيره عليها عيزه حاجه مساحه اقل ', 'no', '2018-01-09 00:00:00', '01:29:46', 'henwa.ali@estasmer.com'),
(4, 'Internal', 'B', 'Mr.', 'Hesham', 'Karim', 'هشام', 'كريم', 'male.', '01006594201', '', '', '', '', 'Social Media', 'محتاج نكلموا لما ننزل زيارات علي شقة جناكليس', 'no', '2018-01-09 00:00:00', '12:52:36', 'hader.adel@estasmer.com'),
(2, 'Internal', 'C', 'Ms.', 'Mohamed', 'Soliman', 'محمد', 'سليمان', 'Female', '01221752908', '', '', '01221752908', '', 'Social Media', '', 'no', '2018-01-09 00:00:00', '01:10:42', 'hader.adel@estasmer.com'),
(9, 'Internal', 'B', 'Ms.', 'Dina', 'Hassan', 'دينا', 'حسن', 'Female', '01227277632', '', '', '', '', 'Social Media', '', 'no', '2018-01-09 00:00:00', '01:32:35', 'hader.adel@estasmer.com'),
(10, 'Internal', 'B', 'Mr.', 'Mohamed', 'Ramdan', 'محمد', 'رمضان', 'male.', '01270000145', '', '', '01270000145', '', 'Social Media', '', 'no', '2018-01-09 00:00:00', '01:39:10', 'hader.adel@estasmer.com'),
(11, 'Internal', 'C', 'Ms.', 'Namaa', 'Fekry', 'نعمه', 'فكرى', 'Female', '01273997792', '', '', '', '', 'Social Media', 'سئلت عن شقه بولكلى و طلعت  غاليه عليها ', 'no', '2018-01-09 00:00:00', '01:39:13', 'henwa.ali@estasmer.com'),
(12, 'Internal', 'C', 'Mr.', 'Mahmoud', 'Ahmed', 'محمود', 'احمد', 'male.', '01061695490', '', '', '', '', 'Social Media', '', 'no', '2018-01-09 00:00:00', '02:06:22', 'hader.adel@estasmer.com'),
(13, 'Internal', 'C', 'Ms.', 'Shereen', 'Madkour', 'شرين', 'مدكور', 'Female', '01200087401', '', '', '', '', 'Social Media', 'عيزه شقه فى بحرى 80 :100م قسط بدون مقدم هتقسط سنويا بمعدل 2000 فى الشهر على 5 سنين و اخر السنه 10000 ج زيارده يعنى شقه فى رنج 160 الى 200 الف و الباقى عموله الشركه ', 'no', '2018-01-09 00:00:00', '02:29:35', 'henwa.ali@estasmer.com');

-- --------------------------------------------------------

--
-- Table structure for table `CustomerCalls`
--

CREATE TABLE `CustomerCalls` (
  `ID` int(255) NOT NULL,
  `PhoneNumber` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT ' 	',
  `Receivedby` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Honorific` varchar(100) CHARACTER SET utf8 NOT NULL,
  `En_Fname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `En_Lname` varchar(100) CHARACTER SET ucs2 NOT NULL,
  `Ar_Fname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Ar_Lname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `KnownFrom` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CallType` varchar(100) CHARACTER SET ucs2 NOT NULL,
  `Apartment` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Apartment_Code` varchar(60) NOT NULL,
  `Note` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Date` datetime NOT NULL,
  `time` time NOT NULL,
  `Reg_By` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CustomerCalls`
--

INSERT INTO `CustomerCalls` (`ID`, `PhoneNumber`, `Receivedby`, `Honorific`, `En_Fname`, `En_Lname`, `Ar_Fname`, `Ar_Lname`, `KnownFrom`, `CallType`, `Apartment`, `Apartment_Code`, `Note`, `Date`, `time`, `Reg_By`) VALUES
(1, '01006594201', 'Phone', 'Mr.', 'Hesham', 'Karim', 'هشام', 'كريم', 'Social Media', 'Enquiry', '', 'SB06-04', '\r\nعايز ينزل يشوف الشقة لما المالك يسمح لينا هنبقي نكلموا', '2018-01-09 00:00:00', '12:55:10', 'hader.adel@estasmer.com'),
(2, '01273997792', 'Phone', 'Ms.', 'Namaa', 'Fekry', 'نعمه', 'فكرى', 'Social Media', 'Request', '', '', '\r\nسئلت عن شقه SA01-01(18)\r\n و قالت غاليه عيزه شقه فى محرم بك ', '2018-01-09 00:00:00', '01:13:30', 'henwa.ali@estasmer.com'),
(3, '01221752908', 'Phone', 'Ms.', 'Mohamed', 'Soliman', 'محمد', 'سليمان', 'Social Media', 'Request', '', '', '\r\nعايزة شقة في الرخصة من منطقة كليو باترا للشاطبي في حدود المليون', '2018-01-09 00:00:00', '01:21:11', 'hader.adel@estasmer.com'),
(4, '01002771869', 'Phone', 'Ms.', 'Aya', 'Fauomy', 'ايه', 'فيومى', 'Social Media', 'Request', '', '', '\r\nسئلت عن شقه المندره جمالع عبد الناصر SC05-12\r\n و قالت غاليه عليها و كبيره', '2018-01-09 00:00:00', '01:31:27', 'henwa.ali@estasmer.com'),
(5, '01227277632', 'Phone', 'Ms.', 'Dina', 'Hassan', 'دينا', 'حسن', 'Social Media', 'Enquiry', '', 'SB03-12', '\r\nعايزة تعرف اسم الشارع وعرض الشارع قد ايه ', '2018-01-09 00:00:00', '01:33:44', 'hader.adel@estasmer.com'),
(6, '01270000145', 'Phone', 'Mr.', 'Mohamed', 'Ramdan', 'محمد', 'رمضان', 'Social Media', 'Request', '', '', '\r\n الفيو ميكونش مجروج وتكون مترخصة والعدادات كاملة عايز شقتين مختلفتين في وابو المياه او الابراهيمية ابوقير او شارع  \r\n بورسعيد كله وسموحة 3غرف وريسبشن 3 قطع والتشطيب عادي معندوش مشكلة والشقة لا تقل عن 120م واخره في السعر مليون و 200اللف ده اخره خالص ', '2018-01-09 00:00:00', '02:00:10', 'hader.adel@estasmer.com'),
(7, '01061695490', 'Phone', 'Mr.', 'Mahmoud', 'Ahmed', 'محمود', 'احمد', 'Social Media', 'Request', '', '', '\r\nعايز شقة من كامب شيزار سبورتنج اللابراهيمية تكون قريبة من البحر يدفع 450الف كاش والباقي علي سنه ونص اخره 750الف وتكون مش اقل من 130م و 3 غرف مقفولينومترخصة ومباني جديدة والدور اخره التاسع', '2018-01-09 00:00:00', '02:09:13', 'hader.adel@estasmer.com'),
(8, '01200087401', 'Phone', 'Ms.', 'Shereen', 'Madkour', 'شرين', 'مدكور', 'Social Media', 'Request', '', '', '\r\nعيزه شقه فى بحرى 80 :100م قسط بدون مقدم هتقسط سنويا بمعدل 2000 فى الشهر على 5 سنين و اخر السنه 10000 ج زيارده يعنى شقه فى رنج 160 الى 200 الف و الباقى عموله الشركه ', '2018-01-09 00:00:00', '02:30:29', 'henwa.ali@estasmer.com');

-- --------------------------------------------------------

--
-- Table structure for table `imagtable`
--

CREATE TABLE `imagtable` (
  `sales_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imagtable`
--

INSERT INTO `imagtable` (`sales_id`, `image`) VALUES
(238, 'JOB-searching-1.jpg'),
(238, 'logo.png'),
(238, 'timthumb.jpg'),
(238, 'الأكاديمية-العربية-للعلوم-والتكنولوجيا-والنقل-البحرى.png'),
(238, 'شعار_جامعة_الإسكندرية.png');

-- --------------------------------------------------------

--
-- Table structure for table `ins`
--

CREATE TABLE `ins` (
  `id` int(50) NOT NULL,
  `seg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ins`
--

INSERT INTO `ins` (`id`, `seg`, `name`, `number`, `adress`, `day`, `date`) VALUES
(47, 'ahmed', 'ahmed', '01278955', 'ziznia', 'arba3', '2'),
(48, 'usera', 'usera', '01278955', 'ziznia', 'arba3', '2'),
(49, 'userb', 'منة', '0100847556', 'نااااه', '2/5/2017', '3/5/2017'),
(50, 'userc', 'منة', '01008452214', 'ميامي', 'الاحد', '12'),
(51, 'userb', 'hager', '01275039005', 'lkjoijuhoh', 'iukjghiu', '0152415'),
(52, 'usera', 'ahmed', '01234567891', 'عن طريق', 'مطلوب', 'رقم الواتس'),
(53, 'usera', 'eslam', '01245748421', 'عنوان بيانات  تصوير', 'اليوم', 'الميعاد '),
(54, 'usera', 'منة', '01008492213', 'شييس', 'يسس', '52'),
(55, 'usera', 'منة', '01008492213', 'شييس', 'يسس', '52'),
(56, 'usera', 'test', '01234567891', 'addre', 'day', 'da'),
(57, 'ahmed', 'ahmed taswer', '01255588888', 'ahmed taswer', '1-1222', 'd,l'),
(58, 'ahmed', 'ahmed taswer', '01255555555', 'fdf', 'dfdf', 'dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `maptic_rej`
--

CREATE TABLE `maptic_rej` (
  `ID` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `place` text NOT NULL,
  `demand` text NOT NULL,
  `h` text NOT NULL,
  `price` varchar(27) NOT NULL,
  `email` varchar(27) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maptic_rej`
--

INSERT INTO `maptic_rej` (`ID`, `name`, `number`, `place`, `demand`, `h`, `price`, `email`) VALUES
(39, 'مصطفى ابراهيم', 1111717957, 'الابراهيميه', '  بيع ', 'شقه', 'من 700 الف الى 1 مليون', 'mim2001eg@yahoo.com'),
(40, 'Enaam Ismail ', 1285511196, ' محرم بيك ', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'enaam.ismail@gmail.com'),
(41, 'Dina', 1114660696, 'سبورتنج', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'forgetitdear@gmail.com'),
(42, 'هبه محمد حافظ ', 1200739929, ' محرم بيك ', ' شراء', 'شقه', 'اقل من 400 الف  ', 'hebahafeznasef13386@gmail.c'),
(43, 'محمد على احمد نعيم ', 1068536935, 'سبورتنج', '  بيع ', 'شقه', 'اقل من 400 الف  ', 'naeem.ma@nahdi.sa'),
(44, 'اسامه حامد الشناوي', 1201344492, 'سيدى بشر', ' شراء', 'شقه', 'اقل من 400 الف  ', 'osamaoss@tvtc.gov.sa'),
(45, 'رويدا ياسر', 1018828045, 'سيدى جابر', ' شراء', 'شقه', 'اقل من 400 الف  ', 'rowidayasser81@gmail.com'),
(46, 'رويدا ياسر', 1018828045, 'سموحه', ' شراء', 'شقه', 'اقل من 400 الف  ', 'rowidayasser81@gmail.com'),
(54, 'احمد يسرى', 1276789421, 'منشيه', '  بيع ', 'فيلا', 'اقل من 400 الف  ', 'ayousry943@gmail.com'),
(55, ' ahmed', 1276789421, 'منشيه', ' تاجير وحده ', 'شاله', 'اقل من 400 الف  ', ''),
(56, 'احمد يسرى', 1276789421, 'بحرى', ' شراء', 'فيلا', 'اقل من 400 الف  ', 'ayousry943@gmail.com'),
(57, 'منى على مرسي', 1004726991, 'سموحه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'monaworld2009@yahoo.com'),
(58, 'norhan ashraf', 1007184689, ' محرم بيك ', ' تاجير وحده ', 'شاله', 'من 400 الف الى 700 الف', 'nor.ghazy@gmail.com'),
(59, 'محمد محروس محمد', 1093394900, 'جليم', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'Sadrules.sr@gmail.com'),
(60, 'محمد الحايس', 1062023598, 'ميامى', ' شراء', 'شقه', 'اقل من 400 الف  ', 'alhayes66@yahoo.com'),
(61, 'محمد', 1009599598, 'الابراهيميه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'al_ramadan2005@yahoo.com'),
(62, 'Mohamed', 1222235017, 'رشدى', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'Moh_eldawy@yahoo.com'),
(63, 'Sherif', 1003603907, 'جليم', ' شراء', 'شقه', 'من 400 الف الى 700 الف', ''),
(66, 'Hadeel magdy', 1062144608, 'زيزينيا', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Hadeelelsharkway@gmail.com '),
(67, 'Heba abd elkareem', 1275711711, 'رشدى', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'Heba_1611@yahoo.com'),
(68, 'Mohammed', 1004792297, 'كفر عبدو', ' شراء', 'شقه', 'من 400 الف الى 700 الف', ''),
(69, 'Maha ali', 1141899336, ' كامب شيزار', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'Mahabazina @gmail.com '),
(70, 'د. حسام ', 1120907096, 'سموحه', ' حصول على وحده للايجار', 'شقه', 'اقل من 400 الف  ', 'hossamshaallan@gmail.com '),
(71, 'محمد على غرابه', 1224892633, 'اخرى', '  بيع ', 'شقه', 'اقل من 400 الف  ', ''),
(72, 'حنان حجاج', 1002105779, 'لوران', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'raneem.mody4@gmail.com'),
(73, 'رامي جمال', 1211443375, 'زيزينيا', ' شراء', 'شقه', 'من 1 مليون الى 2 مليون  ', 'ramygamalwahba@yahoo.com'),
(74, 'Gamal', 1024403777, 'ميامى', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Gamalosman65@yahoo.com'),
(75, 'نيللي عبد الفتاح', 1281224215, 'السرايا', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'Lamitaelgendy@mail.com'),
(76, 'Abanoub Ibrahim Meshreky', 1281997427, 'بحرى', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'abanoub.ibrahim.egy@gmail.c'),
(77, 'رنا', 1154757671, 'سموحه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'ranasleama@yahoo.com'),
(78, 'ريم', 1146905796, 'لوران', ' شراء', 'شقه', 'اقل من 400 الف  ', 'reemoo_adel2020@yahoo.com'),
(79, 'ربيع الضوي', 1147774632, 'اخرى', '  بيع ', 'شقه', 'اقل من 400 الف  ', 'alandalusr01@yahoo.com'),
(80, 'Mohameb', 2147483647, 'سموحه', ' شراء', 'شقه', 'اقل من 400 الف  ', 'Kebdaa@gmail.com'),
(81, 'هشام', 1001637307, 'جليم', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'Heshamhamed601@hotmail.com'),
(82, 'Hesham', 1272268926, 'زيزينيا', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'Mishmishhesham@yahoo.com'),
(83, 'محمد جلال', 1005832041, 'السرايا', ' شراء', 'شقه', 'اقل من 400 الف  ', ''),
(84, 'محمد', 1019147315, ' كامب شيزار', ' شراء', 'شقه', 'اقل من 400 الف  ', ''),
(85, 'اسامه اديب', 1274171444, ' محرم بيك ', ' شراء', 'شقه', 'من 400 الف الى 700 الف', ''),
(86, 'صلاح السيد', 1021129721, 'كليوباترا', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'Saneph@yahoo.com '),
(87, 'ابراهيم صلاح ', 1095540700, 'ميامى', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'hany27live@hotmail.com'),
(88, 'ابراهيم صلاح ', 1095540700, 'ميامى', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'hany27live@hotmail.com'),
(89, 'مصطفى / مطلوب  شقه مساحة بين 90:130 غرفتين او ثلاثه لو مساحة كبيرة مرتاحين مطلات و ليست من الداخل او غرفة واحدة داخلي  يشترط كامل العدادات ليست دور اخير..  من الشاطبي و سموحه الي سيدي بشر ممنوع قبلي اووقطر او تكاتك ', 1007597646, 'اخرى', ' شراء', 'شقه', 'اقل من 400 الف  ', 'mostafa_bahgat@live.com'),
(90, 'السيد عبدالله الخراشي', 1002887774, 'كليوباترا', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'sayed_elkharashy@yahoo.com'),
(91, 'Ali Rashad', 1011719184, 'اخرى', '  بيع ', 'شقه', 'اقل من 400 الف  ', ''),
(92, 'محمد عمر', 1285835446, 'ميامى', ' شراء', 'شقه', 'اقل من 400 الف  ', 'mohamed.omar454@gmail.com'),
(93, 'Abdo aly', 1000159302, ' محرم بيك ', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Abdoaly111@hotmail.com '),
(94, 'ام ساجد ', 1270016556, 'منشيه', '  بيع ', 'شقه', 'اقل من 400 الف  ', 'ra.my22@yahoo.com '),
(95, 'احمدفرج', 1061159658, 'اخرى', '  بيع ', 'شقه', 'اقل من 400 الف  ', 'waleedgeneral.ahm2002@gmail'),
(96, 'احمد حسن', 1094570550, 'اخرى', '  بيع ', 'شقه', 'اقل من 400 الف  ', 'waleedgeneral.ahm2002@gmail'),
(97, 'وليد أحمد محمد', 1098493520, 'اخرى', '  بيع ', 'شقه', 'اقل من 400 الف  ', 'waleedelgeneral.ahm2002@gma'),
(98, 'احمد حسن ', 1094570550, 'اخرى', '  بيع ', 'شقه', 'اقل من 400 الف  ', 'waleedelgeneral.ahm2002@gma'),
(99, 'وليد أحمد', 1098493520, 'اخرى', '  بيع ', 'شقه', 'اقل من 400 الف  ', 'waleedgeneral.ahm2002@gmail'),
(100, 'دينا', 1114660696, ' كامب شيزار', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Forgetitdear@gmail.com'),
(101, 'كريم', 1229735042, 'الابراهيميه', ' شراء', 'شقه', 'اقل من 400 الف  ', 'kimo.elpap@yahoo.com '),
(102, 'احمد عاطف', 1289060426, ' كامب شيزار', ' شراء', 'شقه', 'من 400 الف الى 700 الف', ''),
(103, 'Rasha', 1289237137, 'ميامى', ' شراء', 'شقه', 'اخرى', 'rne3ma@gmail.com'),
(104, 'محمد', 1157721187, 'لوران', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Mohamedrashad@yahoo.com'),
(105, 'ahmed yousri', 1200219996, ' محرم بيك ', ' شراء', 'شقه', 'اقل من 400 الف  ', ''),
(106, 'ahmed', 1200219996, ' محرم بيك ', ' شراء', 'شقه', 'اقل من 400 الف  ', 'joba644@gmail.com'),
(107, 'عوض رمضان', 1227673583, 'لوران', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'mr _ awad4u@yahoo.com'),
(108, 'Esraa', 1111656156, 'الابراهيميه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Esraa.mohammed92@gmail.com'),
(109, 'kamel', 1004196178, 'جليم', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'kamelaly2004@gmail.com'),
(110, 'Nesma', 1022000173, 'لوران', ' شراء', 'شقه', 'اقل من 400 الف  ', 'ghostalex13@yahoo.com'),
(111, 'محمد على غرابه', 1224892633, 'اخرى', '  بيع ', 'شقه', 'اقل من 400 الف  ', ''),
(112, 'Mostafa', 1227180389, 'سموحه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Slf_peace@hotmail.com'),
(113, 'غادة الجلاوى', 1223303306, 'الابراهيميه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Ghada@yahoo. Com'),
(114, 'مروة العسكري', 1273473663, 'سيدى بشر', ' تاجير وحده ', 'محل', ' ايجار من 5 ال 10 الاف ', 'MSMARWAELASKARY@YAHOO.COM'),
(115, 'وليد بكر', 1004104024, 'سيدى بشر', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'wail_poet@yahoo.com'),
(116, 'Esraa', 1111656156, 'الابراهيميه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', ''),
(117, 'Esraa', 1111656156, 'الابراهيميه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', ''),
(118, 'Esraa', 1111656156, 'الابراهيميه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', ''),
(119, 'ahmed', 1234567891, 'منشيه', ' شراء', 'فيلا', 'من 400 الف الى 700 الف', 'ayousry943@gmail.com'),
(120, 'taha lamada', 1224485189, 'زيزينيا', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'tlamada@hotmail.com'),
(121, 'Omnia', 1223774063, 'الابراهيميه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Omnia.anwar2010@gmail.com'),
(122, 'Ahmed', 1000396550, 'سيدى جابر', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'ahmedaino1@hotmail.com'),
(123, 'Ahmed', 1000396550, 'الابراهيميه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'ahmedaino1@hotmail.com'),
(124, 'Dalia wishah', 1229375693, 'سابا باشا', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Daliawishah2@iCloud.com'),
(125, 'محمد سعيد', 1023609394, 'اخرى', ' تاجير وحده ', 'محل', 'من 400 الف الى 700 الف', 'Taco.sa3ed@gmail.com'),
(126, 'رنا محمد', 1002631791, 'سيدى بشر', '  بيع ', 'شقه', 'من 700 الف الى 1 مليون', ''),
(127, 'Ahmed Elsyed Aboamer ', 1009994973, 'جناكليس', ' شراء', 'شقه', 'اقل من 400 الف  ', 'Ahmedaboamer90@gmail.com'),
(128, 'مصطفي عبدالقادر', 1204254106, 'ميامى', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Mostafaharfoush79@gmail.com'),
(129, 'Amr', 1141863873, 'رشدى', '  بيع ', 'شقه', 'اخرى', ''),
(130, 'Mohamed mostafa', 1200123525, 'جناكليس', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Www.mohamedmostafa996@gmail'),
(131, 'احلام عبد الحميد', 1026221988, ' كامب شيزار', ' شراء', 'شقه', 'من 400 الف الى 700 الف', ''),
(132, 'احلام عبد الحميظ', 1026221988, ' كامب شيزار', ' شراء', 'شقه', 'من 400 الف الى 700 الف', ''),
(133, 'دينا فتحي ', 1155871538, 'ميامى', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Dinaelsayad2@gmail.com'),
(134, 'مصطفي محمد ', 1288741419, 'سيدى بشر', '  بيع ', 'شقه', 'اقل من 400 الف  ', 'لا يوجد '),
(135, 'Nesrine mohamed ', 1013866222, ' لازاريطه', '  بيع ', 'اخرى', 'من 2 مليون الى 3 مليون  ', 'Nesrine.asfour94@gmail.com'),
(136, 'Alaa Abdullah ', 1205295564, 'سموحه', ' شراء', 'شقه', 'من 1 مليون الى 2 مليون  ', 'aboabdullah_91@hotmail.com'),
(137, 'Ahmed Abdallah', 1009643252, 'فلمنج', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Shwjehui@icloud.com'),
(138, 'معاذ المشد', 1007179490, 'سيدى جابر', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'Moazalmeshad2@gmail.com'),
(139, 'يحيى', 1014717000, 'لوران', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'yahy9@yahoo.com'),
(140, 'Ibrahem', 1124284241, ' كامب شيزار', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Bebobenali@icloud.com'),
(141, 'Salma amin', 1229244447, 'سموحه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', 'Salma_amin_55@hotmail.com'),
(142, 'ابرهيم عبد المحسن', 1066441708, 'سابا باشا', ' شراء', 'شقه', 'من 1 مليون الى 2 مليون  ', ''),
(143, 'طارق عصام عبد الفتاح', 1203497417, 'سيدى بشر', ' شراء', 'شقه', 'اقل من 400 الف  ', ''),
(144, 'محمد حمدى محمد', 1222770112, 'سموحه', ' شراء', 'شقه', 'من 1 مليون الى 2 مليون  ', 'sharm_ic@yahoo.com'),
(145, 'Nesreen Muhammad ', 1020271182, 'سابا باشا', ' شراء', 'شقه', 'من 700 الف الى 1 مليون', 'nesy_1985@yahoo.com '),
(146, 'عمرو', 1010580534, 'الابراهيميه', ' شراء', 'شقه', 'من 400 الف الى 700 الف', ''),
(147, 'ahmed', 1276794081, 'محطه الرمل', ' تاجير وحده ', 'فيلا', 'من 400 الف الى 700 الف', 'ayousry943@gmail.com'),
(148, 'esd', 1234567890, 'منشيه', '  بيع ', 'شقه', 'من 700 الف الى 1 مليون', 'wqaDQQW@HJ.KUYG'),
(149, 'Menna mostafa', 1202725424, 'بحرى', ' شراء', 'شقه', 'اقل من 400 الف  ', '');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ID` int(255) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Adjective` varchar(60) NOT NULL,
  `Honorific` varchar(255) NOT NULL,
  `En_Fname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `En_Lname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Ar_Fname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Ar_Lname` varchar(255) CHARACTER SET ucs2 NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Mobile01` varchar(255) NOT NULL,
  `Mobile02` varchar(30) NOT NULL,
  `Phone1` varchar(255) NOT NULL,
  `Whatsapp` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Known_From` varchar(30) NOT NULL,
  `Note` varchar(255) CHARACTER SET utf8 NOT NULL,
  `verification` varchar(60) NOT NULL,
  `Date` datetime NOT NULL,
  `time` time NOT NULL,
  `Reg_By` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `seg` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(30) NOT NULL,
  `h` varchar(255) NOT NULL,
  `wasela` varchar(255) NOT NULL,
  `dae` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wats` varchar(255) NOT NULL,
  `malhoza` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `seg`, `date`, `name`, `number`, `h`, `wasela`, `dae`, `email`, `wats`, `malhoza`, `code`) VALUES
(19, 'usera', '2017-07-24 11:49:05', 'ahmed', '01276794082', '', '', 'احمد يسرى \r\n250شقه \r\n', '', '', '', ''),
(20, 'usera', '2017-08-06 08:57:18', 'ahmed', '01245748421', 'wahada', 'fac', 'shaha', 'mans_prns@yahoo.com', '255222222222', 'malhoza', ''),
(21, 'ahmed', '2017-11-29 07:35:47', 'ahmed takrer yom', '22222222222', 'e200', 'wa', 'aaa', 'ayousry943@gmail.com', '02255555555', 'dfdfdf', ''),
(22, '', '2017-12-13 01:58:23', 'ahmed', '01002790025', 'E3', 'a', 'aa', 'estasmer@gmail.com', '012222', ' ملاحظات', '');

-- --------------------------------------------------------

--
-- Table structure for table `request1`
--

CREATE TABLE `request1` (
  `Id` int(255) NOT NULL,
  `PhoneNumber` varchar(255) DEFAULT NULL,
  `Sector` varchar(255) DEFAULT NULL,
  `ReqType` varchar(255) DEFAULT NULL,
  `Area01` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Area02` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Area03` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `View1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `MinBuildingYear` varchar(255) DEFAULT NULL,
  `StreetType` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `LowPriceEGP` varchar(255) DEFAULT NULL,
  `MaxPriceEGP` varchar(255) DEFAULT NULL,
  `Apartmentsm2` varchar(255) DEFAULT NULL,
  `Roomsno` varchar(255) DEFAULT NULL,
  `Recepionno` varchar(255) DEFAULT NULL,
  `Bathroomno` varchar(255) DEFAULT NULL,
  `MaxFloor` varchar(255) DEFAULT NULL,
  `AcceptLastFloor` varchar(255) DEFAULT NULL,
  `FinishingType` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `PaiedType` varchar(255) DEFAULT NULL,
  `InstallmentSeq` varchar(255) DEFAULT NULL,
  `Deposit` varchar(255) NOT NULL,
  `OutPOS` varchar(255) NOT NULL,
  `AvailableStock` varchar(255) DEFAULT NULL,
  `Note` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `Req_Serial` varchar(255) DEFAULT NULL,
  `Status1` varchar(255) DEFAULT NULL,
  `Date1` varchar(255) DEFAULT NULL,
  `time` time NOT NULL,
  `Reg_By` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request1`
--

INSERT INTO `request1` (`Id`, `PhoneNumber`, `Sector`, `ReqType`, `Area01`, `Area02`, `Area03`, `View1`, `MinBuildingYear`, `StreetType`, `LowPriceEGP`, `MaxPriceEGP`, `Apartmentsm2`, `Roomsno`, `Recepionno`, `Bathroomno`, `MaxFloor`, `AcceptLastFloor`, `FinishingType`, `PaiedType`, `InstallmentSeq`, `Deposit`, `OutPOS`, `AvailableStock`, `Note`, `Req_Serial`, `Status1`, `Date1`, `time`, `Reg_By`) VALUES
(3, '01273997792', 'A', 'Buy', 'جناكليس', 'المندرة', 'جليم', 'بحري ', '2011', 'رئيسي', '1100000', '140000', '280 m2 - 300 m2', '18', '15', '11', '2', 'Yes', '??? ???????', 'Instalment', '3 Month - 6 Month', '', '', 'Yes', 'ahmed', '6675a54', 'Open', '2018/01/09', '01:03:24', 'ahmed'),
(2, '01221752908', 'C', 'Buy', 'كليوباترا', 'كامب شيزار', 'سبورتنج', 'كلاهما', '2005', 'رئيسي', '800000', '1000000', '120 m2 - 140 m2', '3', '2', '2', '7', 'No', 'عادي', 'Instalment', '6 Month - 12 Month', '', '', 'No', '????? ??? ???? ?????? ????? ? ?? ?? ?????? ?? ?? ????? ??? ?', '9525a54', 'Open', '2018/01/09', '01:18:25', 'hader.adel@estasmer.com'),
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '00:00:00', NULL),
(23, '01002771869', 'A', 'Buy', 'المندرة', ' العصافرة ', 'سيدي بشر ', 'بحري ', '2010', 'رئيسي', '700000', '700000', '120 m2 - 140 m2', '3', '3', '1', '6', 'No', 'سوبر لوكس', 'Instalment', '3 Month - 6 Month', '', '', 'No', 'قالتلى هتدفع جزء كبير و الباقى على ست شهور محددتش و عيوها على يمين جمال عبد الناصر و انت جاى من المندره و اى دور فى الرخصه ', '9745a54', 'Open', '2018/01/09', '01:36:33', 'henwa.ali@estasmer.com'),
(24, '01276794081', 'B', 'Buy', ' الاقبال  ', ' ابويوسف  ', 'العطارين', 'قبلي ', '2003', 'رئيسي', '1000000', '400000', '120 m2 - 140 m2', '3', '10', '14', '2', 'No', 'Yes', 'Installment', '6 Month - 12 Month', '', '', 'Yes', 'ahmed test', '4665a54', NULL, '2018/01/09', '02:11:52', 'ahmed'),
(25, '01276794081', 'A', 'Buy', 'جليم', ' ابويوسف  ', 'بولكلى', 'بحري ', '2016', 'جانبي', '120000', '140000', '100 m2 - 120 m2', '11', '3', '6', '2', 'Yes', 'سوبر لوكس', 'Instalment', 'More 36 Month', '', '', 'Yes', 'ahmed test', '5a54b29', 'Open', '2018/01/09', '02:16:16', 'ahmed'),
(26, '01276794081', 'A', 'Buy', '45', 'الفلكي', ' الاقبال  ', 'قبلي ', '2001', 'رئيسي', '200000', '1000000', '140 m2 - 160 m2', '2', '2', '3', '2', 'Yes', 'على الطوب', 'Instalment', '6 Month - 12 Month', '', '0.50%', 'No', 'ahmed test', '4275a54', 'Open', '2018/01/09', '02:18:16', 'ahmed'),
(27, '01276794081', 'A', 'Buy', ' ابويوسف  ', 'المندرة', ' ابويوسف  ', 'بحري ', '2001', 'رئيسي', '300000', '200000', '120 m2 - 140 m2', '8', '4', '9', '2', 'Yes', 'تحت الأنشاء', 'Instalment', 'Low 3 Month', '130000', '6.50%', 'Yes', 'ahmed test5555', '9115a54', 'Open', '2018/01/09', '02:24:11', 'ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `salestable`
--

CREATE TABLE `salestable` (
  `lsite` varchar(255) NOT NULL,
  `code123` varchar(255) NOT NULL,
  `fsite` varchar(255) NOT NULL,
  `seg` varchar(255) NOT NULL,
  `onstreet` text NOT NULL,
  `water` text NOT NULL,
  `kahrba` text NOT NULL,
  `gas` text NOT NULL,
  `ID` int(11) NOT NULL,
  `sadad` text NOT NULL,
  `aset` text NOT NULL,
  `adad` int(11) NOT NULL,
  `asanser` text NOT NULL,
  `message` text NOT NULL,
  `3mola` text NOT NULL,
  `w_street` text NOT NULL,
  `enter` text NOT NULL,
  `cash` text NOT NULL,
  `num_of_houes` text NOT NULL,
  `num_dor` text NOT NULL,
  `dor` text NOT NULL,
  `kind_of_pro` text NOT NULL,
  `date` datetime NOT NULL,
  `name` text NOT NULL,
  `number` text NOT NULL,
  `num_land` int(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `adwar` int(55) NOT NULL,
  `msaha` varchar(50) NOT NULL,
  `wagha` varchar(50) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `kind_houes` varchar(255) NOT NULL,
  `address_houes` varchar(255) NOT NULL,
  `misaha2` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `bath` varchar(255) NOT NULL,
  `resh` varchar(255) NOT NULL,
  `matalat` varchar(255) NOT NULL,
  `mabany` varchar(255) NOT NULL,
  `garash` varchar(255) NOT NULL,
  `tashteb` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `saled` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salestable`
--

INSERT INTO `salestable` (`lsite`, `code123`, `fsite`, `seg`, `onstreet`, `water`, `kahrba`, `gas`, `ID`, `sadad`, `aset`, `adad`, `asanser`, `message`, `3mola`, `w_street`, `enter`, `cash`, `num_of_houes`, `num_dor`, `dor`, `kind_of_pro`, `date`, `name`, `number`, `num_land`, `address`, `adwar`, `msaha`, `wagha`, `address2`, `kind_houes`, `address_houes`, `misaha2`, `room`, `bath`, `resh`, `matalat`, `mabany`, `garash`, `tashteb`, `price`, `saled`) VALUES
('', '200', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 16, ' 12شهر', '5200 سعر المتر ', 0, ' 2', '', '2.5', '15', 'فاخر', '662400', '2', '16', '10', 'تمليك', '2017-03-22 04:19:45', 'الحاج رأفت ', '0127881174', 6, 'سيدى بشر', 0, '138م', 'بحرى', '', 'شقه', 'ش جمال عبد الناصر برج كوين', '', '3', '2', '3', '2', '2016', 'لايوجد', 'سوبر لوكس', 'سعمر المتر 4800', 'saled'),
('', 'SC01-07', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 17, ' 12شهر', '50%', 0, '1', 'فى حاله الكاشش يقل المبلغ 20 الف ', '2.5', '15', 'عادى', '', '2', '10', '8', 'تمليك', '2017-03-22 04:23:07', 'احم نوبى ', '01227408949', 10, 'سيدى بشر', 0, '180م', 'بحرى', '', 'شقه', 'ش مسجد سيدى بشر ', '', '4', ' 1', '2', '2', '2006', 'لايوجد', 'سوبر لوكس', '500000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 18, ' 12شهر', '65%', 0, ' 2', 'الشقق الفاضيه من بعد ال 12لحد ال 16 ', '2.5', '15', 'فاخر', '700000', '2', '16', '12', 'تمليك', '2017-03-22 04:26:28', 'الحاج احمد', '01288831632', 8, 'سيدى بشر', 0, '130م', 'بحرى', '', 'شقه', 'ش مسجد سيدى بشر ', '', '3', ' 1', '3', ' 1', '2016', 'لايوجد', 'سوبر لوكس', '715000', ''),
('', '600', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 19, ' 12شهر', '50%', 0, '1', 'فى حاله الكاشش يقل المبلغ 20 الف ', '2.5', '15', 'عادى', '', '2', '10', '8', 'تمليك', '2017-03-22 04:26:47', 'احم نوبى ', '01227408949', 10, 'سيدى بشر', 0, '180م', 'بحرى', '', 'شقه', 'ش مسجد سيدى بشر ', '', '4', ' 1', '2', '2', '2006', 'لايوجد', 'سوبر لوكس', '500000', 'saled'),
('', '500', '', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 20, '', '٢٨٠٠', 0, ' 2', 'العموله شهر ايجار ', '', '15', 'عادى', '٢٨٠٠', '2', '9', '8', 'ايجار', '2017-03-22 05:15:34', 'طارق ناصر ', '01009222332', 9, 'سموحه', 0, '120', 'بحرى', '', 'شقه', '٦١ ش اسماعيل سري سموحة ', '', '2', ' 1', '2', '3', '1999', 'لايوجد', 'سوبر لوكس', '٢٨٠٠', 'saled'),
('', '550', '', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 21, '', '٣١٠٠٠٠', 0, ' 2', '', '2.5', '١٠', 'عادى', '٣١٠٠٠٠', '6', '11', '11', 'تمليك', '2017-03-23 12:17:52', 'مدام عنان', '01273267881', 11, ' محرم بيك ', 0, '٨٨', 'بحرى', '', 'شقه', 'برج الياسمين (د) ٤ ش بدوي خلف كلية العلوم محرم بك ', '', '2', ' 1', '2', '3', '2009', 'لايوجد', 'سوبر لوكس', '٣١٠٠٠٠', 'saled'),
('', '', '', 'Hani', ' نعم', 'يوجد', 'يوجد', 'يوجد', 24, '', '', 0, ' 4', 'العموله شهر من الإيجار*\r\n*منطقه بولكلي', '', '', 'فاخر', '', '6', '14', '7', 'ايجار', '2017-03-23 01:20:45', 'مدام نشوي', '01223956156', 10, 'اخرى', 0, '100م', 'بحرى', '', 'شقه', 'شارع لافيزون برج الزاعيين أ.شارع ابو قير تحت سوبر ماركت البركه ', '', '2', ' 1', '3', '2', '2002', 'لايوجد', 'لوكس', '3500', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 26, ' 24شهر', 'شهر مقدم و٢شهر تامين', 0, '1', '', '2.5', '١٠متر', 'عادى', 'كاش', ' 1', '18', '11', 'ايجار', '2017-03-23 09:59:22', 'اسماعيل', '01222720977', 6, 'سيدى بشر', 0, '١٢٠م', 'بحرى', '', 'شقه', 'ش١٧متفرع جمال عبدالناصر', '', '3', ' 1', '3', ' 1', '2010', 'لايوجد', 'لوكس', '٢٠٠٠', ''),
('', '', '', 'Hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 27, ' 12شهر', '', 0, '1', '', '2.5', '١٠متر', 'فاخر', 'تقسيط', '3', '16', '3', 'تمليك', '2017-03-23 10:09:52', 'المسؤول سامى', '01275918150', 6, 'ميامى', 0, '١٤٩م', 'بحرى', '', 'شقه', 'ش ابو العرب متفرع من اسكندر ابراهيم عماره رقم ٧٣', '', '3', '2', '3', '2', '2014', 'لايوجد', 'لوكس', '٦٠٠الف ', ''),
('', '250', '', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 28, '6اشهر', 'اكتر من نص المبلغ', 0, ' 2', 'شقتين الدور١٦ و ١٧', '2', '١٠', 'فاخر', '550000', '', '19', '16', 'تمليك', '2017-03-24 01:05:37', 'شنودة', '01200371873', 0, 'ميامى', 0, '135', 'بحرى', '', 'شقه', 'برج الموفق تقاطع ش الارمن مع السباعي متفرع من اسكندر ابراهيم ', '', '3', '2', '4', '4', '2016', 'لايوجد', 'سوبر لوكس', '550000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 30, ' 24شهر', '50%', 0, '1', '# لا يوجد عموله \r\n# العميل بواب \r\n', '', '8', 'فاخر', '685000', '2', '14', '5', 'تمليك', '2017-03-25 07:17:33', 'ابو حوده', '0120032670', 4, 'ميامى', 0, '140م', 'بحرى', '', 'شقه', 'شارع ابو العربى متفرع من اسكندر ابراهيم عماره رقم 69', '', '3', ' 1', '2', ' 1', '2014', 'لايوجد', 'سوبر لوكس', '700000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 31, '', '', 0, '1', 'العمولة \r\n*في تأجير شهر حناخد 10فى الميه \r\n*في حاله التأجير السنوي حناخد شهر من الأيجار \r\n*الشقة بها تكييف\r\n*فيه شقتين كمان تأجير في الشارع بتاع جاد', '', '8', 'عادى', '', '2', '18', '10', 'ايجار', '2017-03-25 07:39:47', 'عادل شعبان العربى', '01229673348/01122488898', 4, 'ميامى', 0, '110م', 'بحرى', '', 'شقه', 'شارع الأرمل بجوار مقله عثمان ', '', '3', ' 1', '2', ' 1', '2012', 'لايوجد', 'لوكس', '4500', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 33, '', '', 0, '1', 'العمولة شهر ', '', '12', 'عادى', '', '2', '18', '11', 'ايجار', '2017-03-25 07:44:26', 'ا/ اسماعيل ', '01222720977', 6, 'سيدى بشر', 0, '120م', 'بحرى', '', 'شقه', 'ش 17 متفرع من جمال عبد الناصر', '', '3', ' 1', '2', ' 1', '2009', 'لايوجد', 'لوكس', '2000', ''),
('', '', '', 'Hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 34, ' 12شهر', '٥٠٪وبيقى على سنه', 0, '1', '', '1.5', '١٠متر', 'فاخر', 'تقسيط', '3', '18', '3', 'تمليك', '2017-03-25 10:50:27', 'المسؤول سامى', '01275918150', 6, 'ميامى', 0, '١٤٠م', 'بحرى', '', 'شقه', 'ش ابو العرب متفرع من اسكندر ابراهيم عماره رقم ٧٣', '', '3', '2', '3', ' 1', '2016', 'لايوجد', 'لوكس', '٦٠٠الف ', ''),
('', '', '', 'Hani', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 35, '', '', 0, ' 2', 'الإقبال\r\nوديعه 5000 مدفوعين\r\nتصميم العماره شركه السلام تصميم روماني \r\nالمالك موجود يوم الجمعه والسبت فقط\r\nالعدادات باسم المالك ', '2.5', '8', '', '750000', '5', '16', '12', 'تمليك', '2017-03-25 11:29:23', 'د محمد حسن', '01143891667', 6, 'اخرى', 0, '136', 'بحرى', '', 'شقه', 'ش الشهيد طيار محمد محارب متفرع من ش الاقبال', '', '3', ' 1', '4', '3', '2006', 'لايوجد', 'سوبر لوكس', '750000', ''),
('', '', '', 'Hani', ' نعم', ' لايوجد', 'يوجد', ' لايوجد', 36, '', '', 0, '1', 'العموله ما هو بعد ال 300000\r\n', '', '6', 'عادى', '350000', '2', '14', '12', 'تمليك', '2017-03-25 01:25:20', 'هبه هشام', '01092230553/01276211962', 6, 'اخرى', 0, '90م', 'بحرى', '', 'شقه', 'ش متفرع من اسحاق امتداد المرسلين الامريكان /شدس', '', '2', ' 1', '2', ' 1', '2011', 'لايوجد', 'التر لوكس', '350000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 37, '', 'كاش', 0, '1', 'عمليل وعلميل', '', '8 متر', 'عادى', 'كاش', '2', '18', '3', '', '2017-03-25 03:39:24', 'المسؤل هشام', '01288276202', 5, 'ميامى', 0, '125م', 'قبلى', '', 'شقه', 'خلف كافتيريا الفراعنه', '', '3', ' 1', '2', ' 1', '2010', 'لايوجد', 'لوكس', '375الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 38, '', 'كاش', 0, ' 3', 'عمليل وعلميل فى شقيه محتاحه 6-10-19-5', '', '8 متر', 'عادى', 'كاش', '2', '19', '19', '', '2017-03-25 03:44:16', 'المسؤل هشام', '01288276202', 5, 'ميامى', 0, '140م', 'قبلى', '', 'شقه', 'برج المدينه المنوره خلف كافتيريا الفراعنه', '', '3', ' 1', '2', ' 1', '2010', 'لايوجد', 'لوكس', '585الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 39, '', 'كاش', 0, ' 3', '-', '2.5', '8 متر', 'عادى', 'كاش', '2', '19', '19', 'تمليك', '2017-03-25 03:46:33', 'المتسشار حاتم ', '01092147777', 5, 'ميامى', 0, '140م', 'قبلى', '', 'شقه', 'برج الهدى المنوره خلف كافتيريا الفراعنه', '', '3', ' 1', '2', ' 1', '2010', 'لايوجد', 'لوكس', '480الف', ''),
('', '', '', 'Hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 40, '', '', 0, '1', 'ايجار مفروش العموله شهر', '', '٨متر', '', '', '2', '18', ' 1', 'ايجار', '2017-03-26 07:33:45', 'احمد شعبان', '٠١٢٧٧٩١٤٨٢٢', 6, 'ميامى', 0, '١١٥م', 'بحرى', '', 'شقه', 'ش ابو العرب متفرع من اسكندر ابراهيم عماره رقم٦١', '', '3', ' 1', '2', '2', '2013', 'لايوجد', 'لوكس', '٢,٢٠٠', ''),
('', '', '', 'Hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 41, '', '', 0, '1', 'ايجار مفروش العموله شهر', '', '٨متر', '', '', '2', '18', ' 1', 'ايجار', '2017-03-26 07:33:46', 'احمد شعبان', '٠١٢٧٧٩١٤٨٢٢', 6, 'ميامى', 0, '١١٥م', 'بحرى', '', 'شقه', 'ش ابو العرب متفرع من اسكندر ابراهيم عماره رقم٦١', '', '3', ' 1', '2', '2', '2013', 'لايوجد', 'لوكس', '٢,٢٠٠', ''),
('', '', '', 'yassen', 'لا', 'يوجد', 'يوجد', ' لايوجد', 44, '', '', 0, ' 2', '', '2.5', '15', 'عادى', '٦٥٠٠٠٠', '4', '8', ' 1', 'تمليك', '2017-03-26 09:46:17', 'دكتور لؤي ', '01201892677', 0, 'سبورتنج', 0, '110', 'قبلى', '', 'شقه', '٢٣٧ ش بورسعيد سبورتنج امام الحياة سكان ', '', '2', '2', '2', '2', '1900', 'لايوجد', 'لوكس', '٦٥٠٠٠٠', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 47, ' 12شهر', '٥٠٪وبيقى على سنه', 0, ' 2', 'الاداره الفاضى ١/٢ ١٩٠م  9/12', '2.5', '١٠متر', 'فاخر', 'تقسيط', '2', '18', ' 1', 'تمليك', '2017-03-27 07:30:33', 'مهندس سيد نفيب', '0122 311 6305', 11, 'اخرى', 0, '١١٠م', 'بحرى', '', 'شقه', 'المندره على البحر مباشرة ', '', '2', ' 1', '2', '3', '2014', 'يوجد', 'سوبر لوكس', 'سعر متر ١٨الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 48, ' 12شهر', '٥٠٪وبيقى على سنه', 0, ' 2', 'الاداره الفاضى ١/٢ ١٩٠م  9/12', '2.5', '١٠متر', 'فاخر', 'تقسيط', '2', '18', ' 1', 'تمليك', '2017-03-27 07:31:54', 'مهندس سيد نفيب', '0122 311 6305', 11, 'اخرى', 0, '١١٠م', 'بحرى', '', 'شقه', 'المندره على البحر مباشرة ', '', '2', ' 1', '2', '3', '2014', 'يوجد', 'سوبر لوكس', 'سعر متر ١٨الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 49, '6اشهر', 'لايوجد', 0, '1', '', '1.5', '10متر ', 'عادى', 'كاش', '2', '18', '6', 'تمليك', '2017-03-28 07:35:52', 'المسؤل ابو عبده', '01229845831', 6, 'اخرى', 0, '75م', 'بحرى', '', 'شقه', 'المندره شزاخربك عماره 6', '', '2', ' 1', '2', '2', '2014', 'لايوجد', 'لوكس', '360 الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 50, '6اشهر', 'لايوجد', 0, '1', '', '2.5', '10متر ', 'عادى', 'كاش', '2', '18', ' 1', 'تمليك', '2017-03-28 07:37:49', 'المسؤل محمد', '01121106754', 6, 'اخرى', 0, '130م', 'بحرى', '', 'شقه', 'المندره شزاخربك عماره 2', '', '3', ' 1', '2', '2', '2014', 'لايوجد', 'لوكس', '500 الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 51, '6اشهر', 'لايوجد', 0, ' 2', '', '2.5', '15متر', 'فاخر', 'كاش', '3', '18', ' 1', 'تمليك', '2017-03-28 08:03:51', 'مهندس سيد نقيب', '01223116305', 11, 'اخرى', 0, '110م', 'قبلى', '', 'شقه', 'المندره عماره 434', '', '2', ' 1', '2', '2', '2014', 'لايوجد', 'لوكس', 'سعر متر 18 الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 52, ' 12شهر', 'يوجد', 0, ' 2', '', '1', '10متر ', 'فاخر', 'تقسيط', '3', '11', '2', 'تمليك', '2017-03-28 04:28:40', 'ا محمد', '01220676663', 11, 'ميامى', 0, '140م', 'بحرى', '', 'شقه', 'عماره 649 ش مصطفى ىنجيب', '', '3', ' 1', '2', '2', '2015', 'لايوجد', 'سوبر لوكس', 'سعر متر 11الف', ''),
('', '', '', 'hassan', 'لا', 'يوجد', 'يوجد', 'يوجد', 53, ' 12شهر', 'يوجد', 0, '1', '', '1', '10متر ', 'فاخر', 'تقسيط', '3', '11', '6', 'تمليك', '2017-03-28 04:31:01', 'ا مجدى', '0121005529', 11, 'ميامى', 0, '100م', 'بحرى', '', 'شقه', ' ش الاسكندر ابراهي م عماره 6', '', '2', ' 1', '2', '2', '2015', 'لايوجد', 'لوكس', '700 الف', ''),
('', '', '', 'hassan', 'لا', 'يوجد', 'يوجد', 'يوجد', 54, ' 12شهر', 'يوجد', 0, '1', '', '2.5', '10متر ', 'عادى', 'تقسيط', '3', '11', '6', 'تمليك', '2017-03-28 04:31:26', 'ا مجدى', '0121005529', 11, 'ميامى', 0, '100م', 'بحرى', '', 'شقه', ' ش الاسكندر ابراهي م عماره 6', '', '2', ' 1', '2', '2', '2015', 'لايوجد', 'لوكس', '700 الف', ''),
('', '', '', 'hassan', 'لا', 'يوجد', 'يوجد', 'يوجد', 55, ' 12شهر', 'يوجد', 0, '1', '', '2.5', '10متر ', 'عادى', 'تقسيط', '3', '11', '14', 'تمليك', '2017-03-28 04:35:33', 'ا كرم تركى', '01116666281', 18, 'ميامى', 0, '140م', 'بحرى', '', 'شقه', '  عماره 21 ش القائد  الاسرب برج لجين', '', '2', ' 1', ' 1', '2', '2010', 'لايوجد', 'لوكس', '650 الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 56, ' 12شهر', 'يوجد', 0, '1', '', '1', '10متر ', 'عادى', 'تقسيط', '3', '18', '9', 'تمليك', '2017-03-28 04:42:01', 'المسؤل سعيد', '01272469526', 8, 'ميامى', 0, '130م', 'بحرى', '', 'شقه', ' عماره 29 ش القائد  الاسرب برج الاطباء4', '', '2', ' 1', '2', '2', '2014', 'لايوجد', 'لوكس', 'سعر متر 6000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 57, ' 12شهر', 'يوجد', 0, ' 2', '', '2.5', '10متر ', 'عادى', 'كاش', '2', '18', '8', 'تمليك', '2017-03-29 07:41:10', 'المسؤل عبدالله ', '01223724651', 8, 'ميامى', 0, '120م', 'بحرى', '', 'شقه', '  عماره 19 ش القائد  الاسرب برج الندى', '', '3', ' 1', '2', ' 1', '2012', 'لايوجد', 'لوكس', '600 الف', ''),
('', '', '', 'hassan', 'لا', 'يوجد', 'يوجد', ' لايوجد', 58, '6اشهر', 'يوجد', 0, ' 2', '', '2.5', '4متر', 'عادى', 'كاش', '2', '8', ' 1', 'تمليك', '2017-03-29 07:44:39', 'الكابتن  محمد  ', '01212277034', 8, 'اخرى', 0, '85م', 'بحرى', '', 'شقه', 'طوسون ش 25المستشارين', '', '3', ' 1', ' 1', ' 1', '2012', 'لايوجد', 'سوبر لوكس', '130 الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 59, '6اشهر', 'يوجد', 0, ' 2', '', '2.5', '10متر ', 'فاخر', 'كاش', '3', '11', '5', 'ايجار', '2017-03-30 07:58:35', 'امانى', '01223730974', 11, 'سيدى بشر', 0, '125م', 'بحرى', '', 'شقه', 'ش المطافى عماره رقم 19', '', '3', ' 1', '2', '2', '2013', 'يوجد', 'لوكس', '1800', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 60, ' 12شهر', 'يوجد', 0, '1', '', '2.5', '10متر ', 'فاخر', 'تقسيط', '3', '12', ' 1', 'تمليك', '2017-04-01 07:59:25', 'الحاج محمود', '01062378953', 8, 'ساعه', 0, '110م', 'قبلى', '', 'شقه', 'شارع اللى فى جاد برج المنار', '', '2', ' 1', ' 1', '2', '2012', 'يوجد', 'لوكس', '310الف', ''),
('', '', '', 'Hani', ' نعم', ' لايوجد', 'يوجد', ' لايوجد', 61, ' 24شهر', 'لا يوجد', 0, ' 2', 'قابل للتفاوض \r\nالعماره رقم 29\r\nيوجد تحته باكيه ممكن اتعملت مدخل خاص', '1.5', '12', 'فاخر', '2500000', '2', '13', ' 1', 'تمليك', '2017-04-01 09:59:59', 'ا/بهاء', '01226083068', 6, 'سابا باشا', 0, '360 ', 'بحرى', '', 'ميزان', 'ش محمد صلاح ابو يوسف عماره ', '', '8', '5', '5', ' 1', '2002', 'لايوجد', ' على الطوب', 'المتر ب 8000', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 62, ' 12شهر', 'يوجد', 0, ' 2', '', '2.5', '10متر ', 'فاخر', 'تقسيط', '6', '14', ' 1', 'تمليك', '2017-04-02 08:18:00', 'الحاج على ', '01003119609', 8, 'سيوف', 0, '150م', 'قبلى', '', 'شقه', 'ش محمد تركى برج  لحياه', '', '3', '2', '3', '3', '2012', 'يوجد', ' على الطوب', 'سعر متر 3000', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 63, ' 12شهر', 'يوجد', 0, ' 2', '', '2.5', '10متر ', 'فاخر', 'تقسيط', '6', '14', ' 1', 'تمليك', '2017-04-02 08:21:40', ' احمد', '01117070337', 8, 'سيوف', 0, '150م', 'قبلى', '', 'شقه', 'ش 16 برج زمزم السيوف شماعه', '', '3', '2', '3', '3', '2012', 'يوجد', ' على الطوب', 'سعر متر 3000', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 64, ' 12شهر', 'يوجد', 0, ' 2', '', '2.5', '10متر ', 'فاخر', 'تقسيط', '6', '14', '10', 'تمليك', '2017-04-02 08:25:06', ' خالد سعيد', '01221298379', 8, 'سيوف', 0, '126م', 'قبلى', '', 'شقه', 'ش 16 برج لؤلؤة السيوف شماعه', '', '3', ' 1', '3', '3', '2012', 'يوجد', ' على الطوب', 'سعر متر 2700', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', 'يوجد', 'يوجد', 65, ' 12شهر', 'يوجد', 0, ' 2', '', '2.5', '10متر ', 'فاخر', 'تقسيط', '6', '14', '10', 'تمليك', '2017-04-02 08:28:18', 'احمد', '01117070337', 8, 'سيوف', 0, '100م', 'قبلى', '', 'شقه', 'ش 16 برج زمزم السيوف شماعه', '', '3', ' 1', '3', '3', '2012', 'يوجد', 'سوبر لوكس', '320الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 66, ' 12شهر', 'يوجد', 0, ' 2', '', '2.5', '10متر ', 'فاخر', 'تقسيط', '6', '14', '12', 'تمليك', '2017-04-02 08:44:11', 'احمد', '01117070337', 8, 'سيوف', 0, '169م', 'قبلى', '', 'شقه', 'ش 16 برج زمزم السيوف شماعه', '', '3', '2', '2', '3', '2012', 'لايوجد', 'سوبر لوكس', 'سعر متر 3000', ''),
('', '', '', 'Hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 67, ' 12شهر', '٥٠٪وبيقى على سنه', 0, ' 2', '', '2.5', '١٠متر', 'فاخر', 'تقسيط', '6', '14', '12', 'تمليك', '2017-04-02 10:28:53', 'احمد ', '01117070337', 8, 'سيوف', 0, '100م', 'قبلى', '', 'شقه', 'ش ١٦ برج زمزم', '', '2', ' 1', '3', '2', '2012', 'لايوجد', 'سوبر لوكس', '320الف', ''),
('2', '', '1', 'Hani', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 70, ' 24شهر', 'لا يوجد', 0, ' 2', 'السعر نهائي غير قابل للنقاش \r\nلا يوجد تقسيط ', '1.5', '8', 'فاخر', '710000', '3', '19', '9', 'تمليك', '2017-04-03 02:59:00', 'خيري الامن', '01066583104', 6, 'زيزينيا', 0, '145', 'بحرى', '', 'شقه', 'شارع الامير حليم بجوار دار محمد رجب للمسنين عماره رقم 24 (برج توماس)', '', '3', '2', '3', ' 1', '2014', 'لايوجد', 'سوبر لوكس', '720000', ''),
('2', '', '1', 'Hani', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 71, ' 24شهر', 'لا يوجد', 0, ' 2', 'السعر نهائي غير قابل للنقاش \r\nلا يوجد تقسيط ', '1.5', '8', 'فاخر', '2500', '3', '19', '5', 'ايجار', '2017-04-03 03:00:20', 'خيري الامن', '01066583104', 6, 'زيزينيا', 0, '145', 'بحرى', '', 'شقه', 'شارع الامير حليم بجوار دار محمد رجب للمسنين عماره رقم 24 (برج توماس)', '', '3', '2', '3', ' 1', '2014', 'لايوجد', 'سوبر لوكس', '250', ''),
('2', '', '1', 'Hani', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 72, ' 24شهر', 'لا يوجد', 0, ' 2', 'السعر نهائي غير قابل للنقاش \r\nلا يوجد تقسيط \r\nكلها ع الشارع', '1.5', '8', 'فاخر', '750000', '3', '19', '7', 'تمليك', '2017-04-03 03:01:56', 'خيري الامن', '01066583104', 6, 'زيزينيا', 0, '150', 'بحرى', '', 'شقه', 'شارع الامير حليم بجوار دار محمد رجب للمسنين عماره رقم 24 (برج توماس)', '', '3', ' 1', '3', ' 1', '2014', 'لايوجد', 'لوكس', '750000', ''),
('29.908644', '250', '31.192617', 'yassen', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 73, '6اشهر', '250000', 0, '1', '7000 جنيه خدمات ومرافق ', '1', '5', 'عادى', '360000', '3', '14', '14', 'تمليك', '2017-04-04 12:02:32', 'وفيق عزت ', '01289059050', 4, ' محرم بيك ', 0, '125', 'قبلى', '', 'شقه', '8 ش المنصور متفرع من ش الرصافه الترام ', '', '3', ' 1', '2', '3', '2015', 'لايوجد', 'سوبر لوكس', '360000', 'saled'),
('29.901323', '', '31.188898', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 74, '6اشهر', '200000', 0, '1', '', '1', '5', 'عادى', '300000', '4', '15', '6', 'تمليك', '2017-04-04 12:08:35', 'وفيق عزت ', '01289059050', 6, 'اخرى', 0, '110', 'بحرى', '', 'شقه', '10 ش صلاح سرحان متفرع من ش مسجد العطارين محطة مصر', '', '3', ' 1', '2', '3', '2013', 'لايوجد', 'لوكس', '300000', ''),
('29.901323', '', '31.188898', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 75, '6اشهر', '140000', 0, '1', '', '1', '5', 'عادى', '140000', '4', '15', '9', 'تمليك', '2017-04-04 12:15:38', 'وفيق عزت ', '01289059050', 6, 'اخرى', 0, '80', 'بحرى', '', 'شقه', '10 ش صلاح سرحان متفرع من ش مسجد العطارين محطة مصر', '', '2', ' 1', '2', '2', '2013', 'لايوجد', ' على الطوب', '140000', 'saled'),
('29.901323', '', '31.188898', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 76, '6اشهر', '350000', 0, '1', '', '1', '5', 'عادى', '350000', '4', '15', '9', 'تمليك', '2017-04-04 12:17:58', 'وفيق عزت ', '01289059050', 6, 'اخرى', 0, '135', 'بحرى', '', 'شقه', '10 ش صلاح سرحان متفرع من ش مسجد العطارين محطة مصر', '', '4', ' 1', '2', '2', '2013', 'لايوجد', ' على الطوب', '350000', ''),
('29.901323', '', '31.188898', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 77, '6اشهر', '250000', 0, '1', '', '1', '5', 'عادى', '250000', '4', '15', '13', 'تمليك', '2017-04-04 12:20:23', 'وفيق عزت ', '01289059050', 6, 'اخرى', 0, '105', 'بحرى', '', 'شقه', '10 ش صلاح سرحان متفرع من ش مسجد العطارين محطة مصر', '', '3', ' 1', '2', '3', '2013', 'لايوجد', 'لوكس', '250000', ''),
('29.901323', '', '31.188898', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 78, '6اشهر', '140000', 0, '1', '', '1', '5', 'عادى', '140000', '4', '15', '14', 'تمليك', '2017-04-04 12:23:01', 'وفيق عزت ', '01289059050', 6, 'اخرى', 0, '80', 'بحرى', '', 'شقه', '10 ش صلاح سرحان متفرع من ش مسجد العطارين محطة مصر', '', '2', ' 1', '2', '2', '2013', 'لايوجد', 'نصف التشطيب', '140000', ''),
('29.901323', '', '31.188898', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 79, '6اشهر', '160000', 0, '1', '', '1', '5', 'عادى', '160000', '4', '15', '14', 'تمليك', '2017-04-04 12:26:57', 'وفيق عزت ', '01289059050', 6, 'اخرى', 0, '80', 'بحرى', '', 'شقه', '10 ش صلاح سرحان متفرع من ش مسجد العطارين محطة مصر', '', '2', ' 1', '2', '2', '2013', 'لايوجد', 'لوكس', '160000', ''),
('29.901323', '', '31.188898', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 80, '6اشهر', '350000', 0, '1', '', '1', '5', 'عادى', '350000', '4', '15', '15', 'تمليك', '2017-04-04 12:30:45', 'وفيق عزت ', '01289059050', 6, 'اخرى', 0, '185', 'بحرى', '', 'شقه', '10 ش صلاح سرحان متفرع من ش مسجد العطارين محطة مصر', '', '3', ' 1', '2', '3', '2013', 'لايوجد', 'نصف التشطيب', '350000', ''),
('29.901323', '', '31.188898', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 81, '6اشهر', '450000', 0, '1', 'بدروم بكامل مساحة العقار', '1', '5', 'عادى', '650000', ' 1', '15', ' 1', 'تمليك', '2017-04-04 12:37:18', 'وفيق عزت ', '01289059050', 6, 'اخرى', 0, '260', 'بحرى', '', 'ميزان', '10 ش صلاح سرحان متفرع من ش مسجد العطارين محطة مصر', '', ' 1', ' 1', ' 1', ' 1', '2013', 'لايوجد', 'سوبر لوكس', '650000', ''),
('29.901323', '', '31.188898', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 82, '6اشهر', '4000', 0, '1', 'بدروم بكامل مساحة العقار للايجار ', '1', '5', 'عادى', '4000', ' 1', '15', ' 1', 'ايجار', '2017-04-04 12:39:36', 'وفيق عزت ', '01289059050', 6, 'اخرى', 0, '260', 'بحرى', '', 'ميزان', '10 ش صلاح سرحان متفرع من ش مسجد العطارين محطة مصر', '', ' 1', ' 1', ' 1', ' 1', '2013', 'لايوجد', 'سوبر لوكس', '4000', ''),
('29.903815', '', '31.188837', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 83, '6اشهر', '120000', 0, '1', '', '1', '5', 'عادى', '120000', ' 1', '14', '13', 'تمليك', '2017-04-04 12:44:33', 'وفيق عزت ', '01289059050', 6, ' محرم بيك ', 0, '85', 'بحرى', '', 'شقه', '81ش القمر راغب باشا محرم بك ', '', '2', ' 1', '2', '2', '2016', 'لايوجد', ' على الطوب', '120000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 84, ' 12شهر', '50%', 3, ' 2', 'ادوار المتاحه 6و5و9و12', '2', '10متر', 'فاخر', '800000', '3', '15', '5', 'تمليك', '2017-04-04 08:32:17', 'محمود', '01205491569', 8, 'سيدى بشر', 0, '145,135', 'بحرى', '', 'شقه', 'شارع 17 متفرع من خالد بن وليد', '', '3', '2', '3', '2', '2015', 'لايوجد', 'سوبر لوكس', '800000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 85, ' 12شهر', 'يوجد', 0, '1', 'شهر مقدم وشهر تامين', '2.5', '15متر', 'عادى', 'كاش', '3', '12', '10', 'ايجار', '2017-04-05 04:03:05', 'م الفترانى', '01118732823', 10, 'ميامى', 0, '120م ', 'بحرى', '', 'شقه', 'اسكندر ابرهيم عماره رقم54 ', '', '2', ' 1', '3', '2', '2005', 'لايوجد', 'لوكس', '3000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 86, ' 12شهر', 'يوجد', 0, '1', '', '2.5', '4 متر', 'عادى', 'تقسيط', '2', '8', '5', 'تمليك', '2017-04-06 08:16:32', 'مصطفى محمود', '01007616126', 4, 'الساعه', 0, '85م', 'قبلى', '', 'شقه', '21ش نجيب البسياوى على اول شلرع عصير ومزم ', '', '2', ' 1', '3', ' 1', '2001', 'لايوجد', 'لوكس', '190الف', ''),
('', '', '', 'hassan', 'لا', ' لايوجد', 'يوجد', ' لايوجد', 111, ' 12شهر', '70٪من مبلغ والباقي على سنه', 0, '1', 'الغرفه من داخل مدفع 10مقاسات مياه والغاز', '2.5', '12متر', 'فاخر', 'تقسيط', '2', '19', '2', 'تمليك', '2017-04-10 01:07:25', 'أ محمود ', '01220827715', 8, 'ميامى', 0, '105م', 'بحرى', '', 'شقه', ' ش صلاح الدين شعبان برج جنات  امام صيدليه فاطمه ', '', '2', ' 1', '2', ' 1', '2010', 'لايوجد', 'التر لوكس', '650الف', ''),
('', '', '', 'Hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 121, ' 12شهر', '70٪من مبلغ والباقي على سنه', 0, ' 2', 'اى زياره على شقيه تبلغ صاحب شقيه اقبل ما العمليه ينزل عليها', '2.5', '8متر', 'عادى', 'تقسيط', '4', '12', '6', 'تمليك', '2017-04-10 01:45:36', 'م على', '01097777649', 8, 'ميامى', 0, '120م', 'بحرى', '', 'شقه', 'ش ٤٥ تحت كافتيريا السلام', '', '2', ' 1', '3', '2', '2009', 'لايوجد', 'لوكس', '600الف', ''),
('29.927326', '', '31.208858', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 129, ' 12شهر', '700000', 0, ' 2', 'باكية الجراج ب 200 الف كاش \r\nخالصة محارة + كهرباء + الوميتال \r\n', '2.5', '10', 'عادى', '1250000', '6', '4', '2', 'تمليك', '2017-04-10 04:23:26', 'محمد سالم ', '01119934493', 4, 'الابراهيميه', 0, '181', 'بحرى', '', 'شقه', 'شقة 203 الدور 2 عمارة 10 ش ابراهيم شوقى الابراهيمية كومباوند المعمورة ', '', '3', '2', '3', '3', '2013', 'يوجد', 'نصف التشطيب', '1250000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 130, '6اشهر', 'يوجد', 0, ' 2', '', '2.5', '4متر', 'فاخر', 'كاش', '3', '19', '3', 'تمليك', '2017-04-10 04:23:51', 'hassan', '01008166734', 3, 'سيدى بشر', 0, '105', 'قبلى', '', 'شقه', 'خالد  بن الوليد القديمه ش غريب شطا برج هاس ', '', '3', ' 1', '2', ' 1', '2007', 'لايوجد', 'لوكس', '300 الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', ' لايوجد', ' لايوجد', 131, '6اشهر', 'يوجد', 0, ' 2', 'الادوار المتاحه 11-16-19', '2.5', '12متر', 'فاخر', 'كاش', '4', '19', '19', 'تمليك', '2017-04-11 07:33:49', 'احمد ايوب', '01229667766', 8, 'عصافره', 0, '115م', 'بحرى', '', 'شقه', 'ش مستشفى الاهرام برج طيبه ', '', '3', ' 1', '2', '2', '2016', 'لايوجد', 'لوكس', '400الف', ''),
('29.917319', '', '31.192573', 'yassen', ' نعم', 'يوجد', 'يوجد', 'يوجد', 136, ' 12شهر', '650000', 0, '1', '', '2.5', '6', 'عادى', '600000', '2', '12', '11', 'تمليك', '2017-04-12 10:39:51', 'ندى كمال ', '01212506001', 5, ' محرم بيك ', 0, '130', 'بحرى', '', 'شقه', '13 ش مرسى محمود متفرع من ش زين العابدين محرم بك ', '', '3', ' 1', '2', '2', '2007', 'لايوجد', 'سوبر لوكس', '600000', ''),
(' 31.2288164', '', ' 31.2288164', 'hassan', ' نعم', ' لايوجد', 'يوجد', ' لايوجد', 150, ' 12شهر', '65٪', 0, ' 2', '300,الف تقسيط و280الف كاش لايوجد العدد مياه وغاز عندما يتم تعقد مع الملك سيقوم الشركه همام المقالات بتوصيل المياه ', '2.5', '15م', 'عادى', 'كاش 280الف', '4', '18', '3', 'تمليك', '2017-04-12 12:52:52', 'الحاج ابراهيم ', '01224414452', 18, 'اخرى', 0, '105م', 'قبلى', '', 'شقه', 'ش الحرمين امام مدرسه ثانويه الكويت المنتزه', '', '3', ' 1', '2', ' 1', '2010', 'لايوجد', 'لوكس', '280الف', ''),
(' 29.923683', '', ' 29.923683', 'hassan', ' نعم', 'يوجد', ' لايوجد', ' لايوجد', 152, '6اشهر', '75٪', 0, '1', 'مش تفاوض اخر سعر لى شقيه مدفع ١٠الف مقاسات', '2', '4متر', 'فاخر', '650كاش', ' 1', '17', '12', 'تمليك', '2017-04-12 02:34:38', 'امانى', '01158426008', 6, ' كامب شيزار', 0, '125م', 'بحرى', '', 'شقه', 'ش تانى نمر من بورسعيد عماره 16', '', '3', '2', '3', '2', '2016', 'لايوجد', 'سوبر لوكس', ' 670', ''),
(' 29.9852995', '', ' 31.2603668', 'hassan', ' نعم', 'يوجد', ' لايوجد', ' لايوجد', 156, ' 24شهر', '50٪والباقى سنتين', 0, ' 2', ' الاداره المتخلف ماعد 5/6//8/9    ١٥الفمقاسات ١٠ودعىها', '2', '١٢متر', 'فاخر', 'سعر متر ٥', '2', '17', '7', 'تمليك', '2017-04-16 09:24:56', 'م حسام', '01000007623', 9, 'سيدى بشر', 0, '150م', 'بحرى', '', 'شقه', 'ش فندق هيلتون', '', '3', '2', '3', ' 1', '2017', 'لايوجد', 'سوبر لوكس', 'سعر متر 4,5فى حالة كاش', ''),
(' 29.9852995', '', ' 31.2603668', 'hassan', ' نعم', 'يوجد', ' لايوجد', ' لايوجد', 157, ' 24شهر', '50٪والباقى سنتين', 0, ' 2', ' الاداره المتخلف ماعد 5/6//8/9    ١٥الفمقاسات ١٠ودعىها', '2', '١٢متر', 'فاخر', 'سعر متر ٥', '2', '17', '7', 'تمليك', '2017-04-16 09:25:01', 'م حسام', '01000007623', 9, 'سيدى بشر', 0, '150م', 'بحرى', '', 'شقه', 'ش فندق هيلتون', '', '3', '2', '3', ' 1', '2017', 'لايوجد', 'سوبر لوكس', 'سعر متر 4,5فى حالة كاش', ''),
(' 29.9820477', '', ' 31.2592498', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 158, '6اشهر', 'كاش', 0, ' 2', 'المساحه ٤٠٠موالسطخ ٢٠٠ خاص', '2.5', '15م', 'عادى', 'مليون و800الف', '3', '15', '15', 'تمليك', '2017-04-16 11:08:28', 'الحاج عرابي', '01223381477', 8, 'سيدى بشر', 0, '600م', 'بحرى', '', 'شقه', 'ش خالد بن الوليد 104  تحت كافتيريا السريا برج الياسمين', '', '3', '3', '5', '3', '2003', 'لايوجد', 'سوبر لوكس', 'مليون و800الف', ''),
(' 29.9810541', '', ' 29.9820477', 'hassan', 'لا', 'يوجد', 'يوجد', 'يوجد', 159, '6اشهر', 'كاش', 0, '1', 'لايوجد​اسانثر', '2.5', ' 8متر', 'عادى', '250', '3', '11', '8', 'تمليك', '2017-04-16 12:12:58', 'احمد', '01000449829', 11, 'سيدى بشر', 0, '100م', 'قبلى', '', 'شقه', 'ش خالد بن الوليد متفرع من ش د صالج حمدي ', '', '2', ' 1', '2', ' 1', '1997', 'لايوجد', 'لوكس', '250الف', ''),
(' 30.0628676', '', ' 31.2982807', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 172, '6اشهر', 'كاش', 0, '1', '', '2.5', '8متر', 'عادى', '160الف', '3', '15', '7', 'تمليك', '2017-04-19 10:54:02', 'علاء', '01225646760', 3, 'اخرى', 0, '105', 'قبلى', '', 'شقه', 'ش 10طوسون امام مسجد التوحيد', '', '3', ' 1', '2', '2', '2010', 'لايوجد', 'لوكس', '160الف', ''),
(' 30.0628676', '', ' 31.2982807', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 173, '6اشهر', 'كاش', 0, '1', '', '2.5', '8متر', 'عادى', '160الف', '3', '15', '7', 'تمليك', '2017-04-19 10:54:04', 'علاء', '01225646760', 3, 'اخرى', 0, '105', 'قبلى', '', 'شقه', 'ش 10طوسون امام مسجد التوحيد', '', '3', ' 1', '2', '2', '2010', 'لايوجد', 'لوكس', '160الف', ''),
(' 30.0628676', '', ' 31.2982807', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 174, '6اشهر', 'كاش', 0, '1', '', '2.5', '8متر', 'عادى', '160الف', '3', '15', '7', 'تمليك', '2017-04-19 10:55:06', 'علاء', '01225646760', 3, 'اخرى', 0, '105', 'قبلى', '', 'شقه', 'ش 10طوسون امام مسجد التوحيد', '', '3', ' 1', '2', '2', '2010', 'لايوجد', 'لوكس', '160الف', ''),
(' 30.010137', '', ' 31.2787739', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 175, ' 12شهر', '75٪', 0, '1', '', '2.5', '6متر', 'عادى', '400الف', '2', '2', '10', 'تمليك', '2017-04-19 01:22:24', 'مصطفى', '0114036777', 6, 'اخرى', 0, '130م', 'بحرى', '', 'ارض', 'ش مارتين عماره رقم ٥', '', '3', ' 1', '2', '2', '1998', 'لايوجد', 'لوكس', '٤٠٠الف', ''),
(' 29.9965447', '', ' 31.2527368', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 178, ' 12شهر', '75٪', 0, ' 2', '400كاشاخرها', '2.5', '15م', 'فاخر', '400الف', '6', '11', '2', 'تمليك', '2017-04-19 02:09:51', 'مصطفى', '0114036777', 11, 'سيدى بشر', 0, '170م', 'قبلى', '', 'شقه', 'ش مسرح عماره رقم54', '', '3', ' 1', '4', '3', '2002', 'لايوجد', 'سوبر لوكس', '٤٠٠الف', ''),
(' 29.9901515', '', ' 31.2622801', 'hassan', 'لا', 'يوجد', 'يوجد', ' لايوجد', 179, '6اشهر', 'كاش', 0, ' 2', 'شقيه من داخل', '2.5', '15م', 'فاخر', '300الف', '7', '7', '16', 'تمليك', '2017-04-19 03:19:39', 'هدى', '01227246546', 7, 'سيدى بشر', 0, '95م', 'قبلى', '', 'شقه', 'ش محمد صربفى برج ميامي', '', '2', ' 1', '2', ' 1', '2011', 'لايوجد', 'لوكس', '=300الف', ''),
(' 29.9970612', '', ' 31.2699487', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 180, '6اشهر', 'كاش', 0, ' 2', 'باعشفه والتكيف 430الف ومن غير العغشه 410', '2.5', '7متر', 'عادى', '410الف', '2', '14', '13', 'تمليك', '2017-04-20 11:06:19', 'جابر', '01220674218', 14, 'ميامى', 0, '100م', 'بحرى', '', 'شقه', 'ش الارمل عماره رقم ١٦', '', '2', ' 1', '2', ' 1', '1992', 'لايوجد', 'لوكس', '410الف', ''),
(' 29.9917424', '', ' 31.2100673', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 181, ' 12شهر', '75٪', 0, '1', '', '2.5', '7متر', 'عادى', 'كاش', '3', '10', '10', 'تمليك', '2017-04-20 12:49:50', 'خالد', '01155751485', 1, 'الساعه', 0, '110م', 'قبلى', '', 'شقه', 'العوايد ش عزيزي بديع عاره 1', '', '3', ' 1', '2', '3', '2010', 'لايوجد', 'سوبر لوكس', '250الف', ''),
('29.913193', '', '31.188860', 'yassen', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 190, '', '80000', 0, '1', 'مكتب دور ارضى اخر شارع محكمة محرم بك بمساكن العلوية بجوار الجمعية الاستهلاكية\r\nله مدخلين \r\nعدادات الكهرباء والمياه مرخصين تجارى ', '2.5', '10', 'عادى', '80000', '2', '4', ' 1', 'تمليك', '2017-04-22 04:18:55', 'نسرين ', '01207674270', 3, ' محرم بيك ', 0, '40', 'بحرى', '', 'شقه', '38 ش الايوب محرم بك عند المحكمة', '', ' 1', ' 1', ' 1', ' 1', '1900', 'لايوجد', 'لوكس', '80000', ''),
('', '', '', 'Hani', ' نعم', 'يوجد', ' لايوجد', ' لايوجد', 191, ' 12شهر', 'يوجد', 0, '1', 'العماره مفيش الرخصه', '2.5', '5متر', 'عادى', 'تقسيط', '2', '14', '14', 'تمليك', '2017-04-23 07:59:40', 'حماده', '01282480104', 1, 'سابا باشا', 0, '110م', 'بحرى', '', 'شقه', 'ش الدكتور الصابونجى تحت العماره صالون  ', '', '3', '2', '2', '2', '2014', 'لايوجد', 'لوكس', '550الف', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 194, '6اشهر', 'لايوجد', 0, '1', 'العماره مفيش رخصه ', '2.5', '5متر', 'عادى', 'كاش', '2', '16', '11', 'تمليك', '2017-04-23 04:32:32', 'عمر', '01004454743', 3, 'الساعه', 0, '90م', 'قبلى', '', 'شقه', 'ش المشتل عند مسجد قبار ش اللى فيها درا المناسابت', '', '3', ' 1', '2', ' 1', '2015', 'لايوجد', ' على الطوب', '230الف', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 195, '6اشهر', 'يوجد', 0, '1', 'العماره مفيش رخصه', '2.5', '5متر', 'عادى', 'كاش', '3', '16', '12', 'تمليك', '2017-04-23 04:36:18', 'داليا خميس ', '01116366963', 1, 'الساعه', 0, '90م', 'قبلى', '', 'شقه', 'ش المشتل عند مسجد قبار ش اللى فيها درا المناسابت', '', '3', ' 1', '2', ' 1', '2015', 'لايوجد', 'سوبر لوكس', '270الف', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 196, '6اشهر', 'لايوجد', 0, '1', 'مفيش الرخصه', '2.5', '5متر', 'عادى', 'كاش', '2', '16', '12', 'تمليك', '2017-04-24 08:47:53', 'داليا خميس ', '01111636696', 1, 'الساعه', 0, '90م', 'قبلى', '', 'شقه', 'ش المشتل عند مسجد قبار ش اللى فيها درا المناسابت', '', '3', ' 1', '2', ' 1', '2015', 'لايوجد', 'سوبر لوكس', '275الف', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 197, '6اشهر', 'يوجد', 0, '1', '', '2', '10متر ', 'فاخر', 'كاش', '2', '16', '11', 'تمليك', '2017-04-24 08:58:19', 'اشرف', '01274704661', 11, 'الساعه', 0, '93م', 'قبلى', '', 'شقه', 'السيوف شماعه ش  بشور برج قدره تحت العماره الاسماك بداره صاحب ', '', '3', ' 1', '2', ' 1', '2015', 'لايوجد', ' على الطوب', '165الف', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 198, '6اشهر', 'لايوجد', 0, '1', 'مفيش الرخصه', '2.5', '5متر', 'عادى', 'كاش', '2', '16', '12', 'تمليك', '2017-04-24 08:58:59', 'داليا خميس ', '01111636696', 1, 'الساعه', 0, '90م', 'قبلى', '', 'شقه', 'ش المشتل عند مسجد قبار ش اللى فيها درا المناسابت', '', '3', ' 1', '2', ' 1', '2015', 'لايوجد', 'سوبر لوكس', '275الف', ''),
('29.9537171', '', '31.2355774', 'Hani', ' نعم', 'يوجد', ' لايوجد', ' لايوجد', 199, '', '', 0, '1', 'الشقة فيها كهربا بس لسة العداد ', '2.5', '10', 'فاخر', '650000', '2', '14', '2', 'تمليك', '2017-04-24 09:00:32', 'احمد عتمان ', '01010180888', 4, 'سابا باشا', 0, '105', 'بحرى', '', 'شقه', 'شارع مصطفي ابو هيف -بجوار معهد ايجوث برج الهنا ', '', '2', ' 1', '3', ' 1', '2013', 'لايوجد', 'سوبر لوكس', '650000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 200, '6اشهر', 'يوجد', 0, ' 2', '', '2.5', '15متر', 'فاخر', 'كاش', '3', '15', '7', 'تمليك', '2017-04-24 09:03:56', 'محمد ', '01005383039', 11, 'الساعه', 0, '100م', 'بحرى', '', 'شقه', 'السيوف  الشماعه ش ستى لايت بجوارمحل الملاح ', '', '2', ' 1', ' 1', ' 1', '2014', 'لايوجد', 'سوبر لوكس', '350الف', ''),
('', '', '', 'hassan', 'لا', 'يوجد', 'يوجد', 'يوجد', 201, ' 12شهر', 'يوجد', 0, '1', '', '2.5', '15متر', 'عادى', 'تقسيط', '3', '13', '10', 'تمليك', '2017-04-24 09:16:36', 'فوزى ', '01005625580', 13, 'الساعه', 0, '150م', 'بحرى', '', 'شقه', 'السيوف الشماعه عند مطافى عماره 13 برج حياه', '', '3', ' 1', '3', ' 1', '2007', 'لايوجد', 'سوبر لوكس', '550الف', ''),
('29.9495016', '', '31.2335062', 'hani', ' نعم', 'يوجد', ' لايوجد', ' لايوجد', 211, ' 12شهر', '400000', 0, ' 2', 'يوجد غرفه على منور ', '2.5', '9', 'فاخر', '700000', '2', '14', '7', 'تمليك', '2017-04-24 01:07:23', 'عبدالله ', '01228004822', 4, 'اخرى', 0, '120', 'بحرى', '', 'شقه', 'ش ميخائيل ابادير ستانلى خلف ستنالى كافيه ', '', '3', ' 1', '2', '2', '2014', 'لايوجد', 'سوبر لوكس', '700000', ''),
('29.9495016', '', '31.2335062', 'hani', ' نعم', 'يوجد', ' لايوجد', ' لايوجد', 212, '', '', 0, ' 2', 'الدور فيه شقتين للبيع ', '2.5', '9', 'فاخر', '900000', '2', '14', '11', 'تمليك', '2017-04-24 01:11:07', 'عبدالله', '01228004822', 4, 'اخرى', 0, '120', 'بحرى', '', 'شقه', 'ش ميخائيل ابادير ستانلى خلف ستنالى كافيه ', '', '3', ' 1', '2', '2', '2014', 'لايوجد', 'سوبر لوكس', '900000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 213, '6اشهر', '', 2, '1', '', '0.5', '98', 'فاخر', '', '3', '10', '4', 'ايجار', '2017-04-24 01:25:07', 'احمد يسري', '012596897847', 2, 'الساعه', 0, '150', 'قبلى', '', 'شقه', 'الفلك حفني', '', '2', ' 1', '2', '2', '2016', 'لايوجد', 'لوكس', '130000', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 214, '6اشهر', 'يوجد', 0, '1', 'لايوجداسانثير ', '2.5', '15متر', 'عادى', 'كاش', '5', '9', '5', 'تمليك', '2017-04-26 07:51:18', 'سمير ', '01224549955', 9, 'الساعه', 0, '200م', 'قبلى', '', 'شقه', 'فيكتوريا ش المحمدينتحت العماره مسجدالعزيز ', '', '4', '2', '2', '2', '1990', 'لايوجد', 'لوكس', '400الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 217, 'لايوجد', 'كاش', 0, '1', 'فى شقه الدور 13 120م 2الغرف ورش3ق 900الف', '2.5', '30متر', 'عادى', 'كاش', '4', '15', '12', 'تمليك', '2017-04-30 08:43:39', 'ام سلوى', '01229662289', 11, 'لوران', 0, '200م-120م', 'بحرى', '', 'شقه', '428م طريق جيش', '', '2', '2', '5', ' 1', '1987', 'لايوجد', 'لوكس', 'مليون و400الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 218, ' 24شهر', 'يوجد', 0, '1', 'العمارة تحت الانشاء_ طلعت لحد الدور 7 _ الادوار 9.10.11.12.13.14.15.16', '1', '5 م', 'فاخر', 'تقسيط', '2', '16', '9', 'تمليك', '2017-05-02 08:04:32', 'حازم', '01274744592', 4, 'الساعه', 0, '140', 'بحرى', '', 'شقه', 'ش نادي البنك الاهلي العمارة اللي في وشه الجديدة', '', '3', '2', '3', '3', '2017', 'لايوجد', 'سوبر لوكس', '3850', ''),
('29.9125', '', '31.2105', 'mohamed', ' نعم', ' لايوجد', 'يوجد', 'يوجد', 238, ' 12شهر', '170', 2, '1', '', '1.5', '60', 'فاخر', '190', '3', '11', '3', 'تمليك', '2017-05-02 03:03:38', 'احمد يسري', '0111479864', 3, 'محطه الرمل', 0, '110', 'بحرى', '', 'شقه', 'شارع صفية زغلول', '', '2', ' 1', '2', '2', '2014', 'لايوجد', 'لوكس', '190', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', 'يوجد', 'يوجد', 239, 'لايوجد', 'لايوجد', 0, 'لايوجد', 'عماره القديمه', '2.5', '5متر', 'عادى', 'كاش', '2', '8', '2', 'تمليك', '2017-05-04 08:02:43', 'شيماء  كمال', '01141122649', 3, 'عصافره', 0, '92م', 'قبلى', '', 'شقه', 'ش 32 منتفرع من 45', '', '2', ' 1', '2', '2', '1990', 'لايوجد', 'لوكس', '250الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 240, 'لايوجد', 'لايوجد', 0, ' 2', '', '2.5', '30متر', 'عادى', 'كاش', '3', '10', '7', 'تمليك', '2017-05-04 08:18:21', 'خالد', '01272214555', 10, 'جناكليس', 0, '140م', 'بحرى', '', 'شقه', '644ش ابو قبر', '', '3', '2', '3', ' 1', '1980', 'لايوجد', 'لوكس', '800الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 241, 'لايوجد', 'لايوجد', 0, ' 2', '', '2.5', '25متر', 'فاخر', 'كاش', '3', '16', ' 1', 'ايجار', '2017-05-07 07:57:05', 'عمرو', '01289915569', 11, 'السيوف', 0, '45م', 'قبلى', '', 'محل', 'ش اديب متفرع منالسيوف الشماعه', '', ' 1', ' 1', ' 1', ' 1', '2015', 'لايوجد', 'نصف التشطيب', '10000', ''),
('29.9990284', '', '31.2532785', 'hassan', ' نعم', 'يوجد', 'يوجد', 'يوجد', 242, 'لايوجد', 'كاش', 0, ' 2', '', '2.5', '10متر', 'عادى', '330الف', '4', '16', '2', 'تمليك', '2017-05-09 09:42:09', 'العقيد احمد', '01003001654', 6, 'سيدى بشر', 0, '١٢٠م', 'قبلى', '', 'شقه', 'ش سيف برج الزهور', '', '3', ' 1', '2', '2', '2011', 'لايوجد', 'لوكس', '330الف', ''),
('', '', '', 'hassan', 'لا', 'يوجد', 'يوجد', 'يوجد', 243, ' 12شهر', 'يوجد', 0, ' 2', 'شقيق من داخل', '2.5', '10متر ', 'فاخر', 'تقسيط', '5', '16', '12', 'تمليك', '2017-05-14 08:02:57', 'احمد جميل ', '01003909605', 4, 'فلمنج', 0, '120م', 'قبلى', '', 'شقه', 'ش احمد ترك باشا عماره 15', '', '3', ' 1', '3', ' 1', '2014', 'لايوجد', 'سوبر لوكس', '480الف', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 244, ' 12شهر', 'لايوجد', 0, ' 2', '', '2.5', '15متر', 'فاخر', 'كاش', '2', '6', '2', 'تمليك', '2017-05-14 08:10:50', 'عبدالرحمن', '01007173339', 6, 'رشدى', 0, '245م', 'بحرى', '', 'شقه', 'ش احمد شوقى بجوار دماس', '', '3', '2', '4', '3', '2015', 'لايوجد', 'نصف التشطيب', 'سعر  متر 8الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 245, 'لايوجد', 'يوجد', 0, ' 2', 'صيدليه', '2.5', '10متر ', 'فاخر', 'كاش', '4', '14', ' لارضى', 'تمليك', '2017-05-15 03:03:48', 'هناء', '01284234234', 11, 'زيزينيا', 0, '50م', 'بحرى', '', 'شقه', '6ش الفنان احمد عتمان', '', ' 1', ' 1', ' 1', ' 1', '2007', 'لايوجد', 'سوبر لوكس', 'مليون 750الف', ''),
('', '', '', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 246, 'لايوجد', 'شهر تامين وشهر مقدم', 0, 'لايوجد', 'نص شهر عموله العماره القديمه', '2.5', '15', 'عادى', 'كاش', ' 1', '4', ' 1', 'ايجار', '2017-07-02 04:00:44', 'د محمد', '01278817878', 1, 'سبورتنج', 0, '500م', 'بحرى', '', 'شقه', 'ش الدلتا تحت العماره محل ابو جبل ', '', '6', '2', '4', '4', '1978', 'لايوجد', 'لوكس', '15000', ''),
('', '', '', 'Hassan ', ' نعم', 'يوجد', 'يوجد', 'يوجد', 247, '', '', 0, '1', '', '0.5', '8', 'فاخر', '7.00000', '4', '2', ' 1', 'ايجار', '2017-07-19 03:13:49', 'Test', '01280893268', 5, 'شدس', 0, '150', 'بحرى', '', 'فيلا', 'ش5', '', ' 1', ' 1', ' 1', ' 1', '1903', 'يوجد', 'لايوجد', '7.00000', ''),
('', 'SB02-07', '', 'hassan', ' نعم', ' لايوجد', 'يوجد', ' لايوجد', 248, 'لايوجد', 'لا يوجد', 0, ' 2', 'الحمام ممكن يبقي 2 - لو حيكبر المطبخ - ', '1', '10م', 'فاخر', 'مليون و100', '3', '17', '13', 'تمليك', '2017-07-19 03:22:05', 'المسؤل جرجس', '01223283307', 6, 'لوران', 0, '150', 'بحرى', '', 'شقه', 'ش الفرح عمارة رقم 7 امام القنصلية السودانية', '', '3', '3', '2', '3', '2015', 'لايوجد', 'لوكس', 'مليون و100', ''),
('', 'SB03-07', '', 'hassan', ' نعم', 'يوجد', 'يوجد', ' لايوجد', 249, ' 24شهر', '50%', 0, ' 2', 'لا يوجد عمولة - شركة تسويق - الادوار المتاحة 2و4و5و6و10 - ', '0.5', '12م', 'فاخر', '7500', '3', '19', '2', 'تمليك', '2017-07-19 03:35:29', 'المسؤل هشام', '01224600206', 8, 'لوران', 0, '165', 'بحرى', '', 'شقه', 'ش عز العرب عمارة فيو لوران', '', '3', '2', '2', '3', '2016', 'يوجد', 'نصف التشطيب', '7500', ''),
('', '', '', 'hassan', ' نعم', ' لايوجد', ' لايوجد', ' لايوجد', 250, ' 12شهر', '65%', 0, ' 2', '', '1.5', '12م', 'فاخر', '530الف', '4', '19', '6', 'تمليك', '2017-07-29 03:35:30', 'ابو ياسين ', '01222594499', 4, 'عصافره', 0, '145م', 'بحرى', '', 'شقه', 'ش ملازم بيسونى', '', '3', '2', '2', ' 1', '2017', 'لايوجد', 'لوكس', '530الف', ''),
('', '', '', 'hassan', 'لا', 'يوجد', 'يوجد', ' لايوجد', 251, ' 12شهر', '50%', 0, ' 2', '', '1.5', '12م', 'فاخر', 'كاش', '4', '18', '7', 'تمليك', '2017-07-29 03:56:53', 'محمد ', '01285535021', 4, 'عصافره', 0, '100', 'بحرى', '', 'شقه', 'ش ملازم بيسونى امام كزافير ساره', '', '4', ' 1', '2', ' 1', '2015', 'لايوجد', 'لوكس', '370', ''),
('', '', '', 'ahmed', ' نعم', 'يوجد', 'يوجد', 'يوجد', 252, '6اشهر', 'f', 60, '1', 'dddd', '1', 'd', 'فاخر', 'dd', ' 1', '19', '16', 'ايجار', '2017-11-29 09:15:06', 'ahmed yousry test', '01276794081', 17, 'رشدى', 0, '100', 'قبلى', '', 'شقه', '454646', '', '2', '2', '2', '2', '1918', 'يوجد', ' على الطوب', '2000', '');

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `id` int(11) NOT NULL,
  `id_share` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`id`, `id_share`, `user`, `from`) VALUES
(46, '16', 'usera', ''),
(47, '16', 'usera', ''),
(48, '20', 'userb', ''),
(50, '20', 'share', ''),
(51, '20', 'ahmed', '');

-- --------------------------------------------------------

--
-- Table structure for table `shout_box`
--

CREATE TABLE `shout_box` (
  `id` int(11) NOT NULL,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shout_box`
--

INSERT INTO `shout_box` (`id`, `user`, `message`, `date_time`, `ip_address`) VALUES
(4, 'HANI', 'HI', '2017-07-24 14:24:59', '156.213.177.17'),
(5, 'HANI', 'F', '2017-07-24 14:25:42', '41.42.112.174'),
(6, 'ahmed', 'hi hani', '2017-07-24 14:41:39', '197.51.174.183'),
(7, 'ahmed', '3amel ea', '2017-07-24 14:41:49', '197.51.174.183'),
(8, 'hani', 'tmam', '2017-07-25 14:20:52', '156.213.177.17'),
(9, 'ahmed', 'hoa daaaaaaaaaaaaaa', '2017-07-26 12:23:06', '197.51.174.183'),
(10, 'hani', 'ahmed', '2017-07-26 14:24:36', '156.213.177.17'),
(11, 'menna', 'hi', '2017-07-30 09:13:58', '156.212.219.184'),
(12, 'ahmed', 'hi menna', '2017-07-31 08:59:55', '197.51.174.183'),
(13, 'ahmed', 'baaaaaaaaad', '2017-08-01 08:31:02', '197.51.174.183');

-- --------------------------------------------------------

--
-- Table structure for table `taswg`
--

CREATE TABLE `taswg` (
  `id` int(11) NOT NULL,
  `tas` text NOT NULL,
  `malek` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `wats` varchar(255) NOT NULL,
  `anwan` varchar(255) NOT NULL,
  `codeh` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `amola` varchar(255) NOT NULL,
  `malhoza` varchar(255) NOT NULL,
  `rant` varchar(255) NOT NULL,
  `pay` varchar(255) NOT NULL,
  `lerang` varchar(255) NOT NULL,
  `zeada` varchar(255) NOT NULL,
  `tamen` varchar(255) NOT NULL,
  `more` varchar(255) NOT NULL,
  `home` varchar(255) NOT NULL,
  `sale` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  `mafrosh` varchar(255) NOT NULL,
  `seg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taswg`
--

INSERT INTO `taswg` (`id`, `tas`, `malek`, `tel`, `mob`, `wats`, `anwan`, `codeh`, `date`, `amola`, `malhoza`, `rant`, `pay`, `lerang`, `zeada`, `tamen`, `more`, `home`, `sale`, `rank`, `mafrosh`, `seg`) VALUES
(67, '840', 'محمود صادق على محمد ', '5913608', '01222559687', '01008132806', 'ش بن مصلح ميامي اول منتزه -الأسكندريه', 'S95_02', '2017-07-24 11:54:33', '10 الاف ', '140 متر معانا5  وحدات --- سعر الوحده 840الف 50% والباقى على 24 شهر ', '', '', '', '', '', '', '60 يوم', 'بيع', '', '', 'hani'),
(68, '', 'قدرى عبد الرحمن السيد ', '', '01281208403', '01140440090', 'ميامى ش 768متفرع من ش جمال عبد الناصر ', 'RC01-07 نسا RC02-07 رمد RC03-7 لاج طبيعى', '2017-07-24 12:18:41', 'شهر من الأيجار ', 'معانا 3 عيادات (رمد -نسا وولاده-علاج طبيعي )', '5000-4000-3500', 'كاش', 'سنه', '10%', 'شهرين', 'سنتين ', '', '', '', '', 'hani'),
(69, '450 الف ', 'د سمير ابراهيم عبد الفتاح بسيوني', '035922769', '', '01224549955', '150 ش عبد السلام عارف ناصيه ابن حوقل -اول رمل - الأسكندريه ', 'SC077-4', '2017-07-24 12:25:43', '10 الاف', ' مساحه 200 متر الشقه والتواصل مع حارس العقار عم جابر 01225993632', '', '', '', '', '', '', '60 يوم', 'بيع', '', '', 'hani'),
(70, '450 الف ', 'د سمير ابراهيم عبد الفتاح بسيوني', '035922769', '', '01224549955', '150 ش عبد السلام عارف ناصيه ابن حوقل -اول رمل - الأسكندريه ', 'SC077-4', '2017-07-24 12:25:52', '10 الاف', ' مساحه 200 متر الشقه والتواصل مع حارس العقار عم جابر 01225993632', '', '', '', '', '', '', '60 يوم', 'بيع', '', '', 'hani'),
(71, '', 'ahmed test ', '0122', '22222', '2222', '2222', '2222', '2017-11-29 09:46:38', '2', '22', '', '', '', '', '', '', '', '', '', '', 'ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `ziara`
--

CREATE TABLE `ziara` (
  `id` int(11) NOT NULL,
  `namemalek` varchar(255) NOT NULL,
  `telmalek` varchar(255) NOT NULL,
  `nameamel` varchar(255) NOT NULL,
  `telamel` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `me3ad` varchar(255) NOT NULL,
  `seg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ziara`
--

INSERT INTO `ziara` (`id`, `namemalek`, `telmalek`, `nameamel`, `telamel`, `address`, `code`, `result`, `date`, `me3ad`, `seg`) VALUES
(89, 'ahmed yousry', '01252174545487', 'name clinte', '012521548552', 'address', '350', 'result', '2015-10-10', 'mi3ad', 'ahmed'),
(90, 'اسم ماللك ', 'تليفون الماللك', 'اسم العميل  ', 'تليفون العميل', 'العنوان', 'الكود', 'نتيجه الزياره ', 'التاريخ', 'الميعاد', ''),
(91, 'منة', '01008492214', 'مروة', '01008452214', 'السيوف', 'SB03-07', 'فشلت', '22/7/2017', 'الساعة 12', 'ahmed'),
(92, 'منة', '01008492214', 'مروة', '01008452214', 'السيوف', 'SB03-07', 'فشلت', '22/7/2017', 'الساعة 12', 'ahmed'),
(93, 'منة', '01008492214', 'مروة', '01008452214', 'السيوف', 'SB03-07', 'فشلت', '22/7/2017', 'الساعة 12', 'ahmed'),
(94, 'منة', '01008492214', 'مروة', '01008452214', 'السيوف', 'SB03-07', 'فشلت', '22/7/2017', 'الساعة 12', 'ahmed'),
(95, '', '', '', '', '', '', '', '', '', 'usera'),
(96, 'ahmed', '0125555555', '55555', '55555', '5555', '5555', '5555', '55', '55', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Building1`
--
ALTER TABLE `Building1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `CustomerCalls`
--
ALTER TABLE `CustomerCalls`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `imagtable`
--
ALTER TABLE `imagtable`
  ADD KEY `imagtable_ibfk_1` (`sales_id`);

--
-- Indexes for table `ins`
--
ALTER TABLE `ins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maptic_rej`
--
ALTER TABLE `maptic_rej`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`),
  ADD KEY `ID_3` (`ID`),
  ADD KEY `ID_4` (`ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request1`
--
ALTER TABLE `request1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `salestable`
--
ALTER TABLE `salestable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shout_box`
--
ALTER TABLE `shout_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taswg`
--
ALTER TABLE `taswg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ziara`
--
ALTER TABLE `ziara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Building1`
--
ALTER TABLE `Building1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `CustomerCalls`
--
ALTER TABLE `CustomerCalls`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `imagtable`
--
ALTER TABLE `imagtable`
  MODIFY `sales_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;
--
-- AUTO_INCREMENT for table `ins`
--
ALTER TABLE `ins`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `maptic_rej`
--
ALTER TABLE `maptic_rej`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `request1`
--
ALTER TABLE `request1`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `salestable`
--
ALTER TABLE `salestable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;
--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `shout_box`
--
ALTER TABLE `shout_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `taswg`
--
ALTER TABLE `taswg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `ziara`
--
ALTER TABLE `ziara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `imagtable`
--
ALTER TABLE `imagtable`
  ADD CONSTRAINT `yousry` FOREIGN KEY (`sales_id`) REFERENCES `salestable` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
