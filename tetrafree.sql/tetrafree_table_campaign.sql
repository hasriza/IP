
-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `camp_id` int(11) NOT NULL,
  `cname` varchar(30) DEFAULT NULL,
  `cloc` varchar(30) DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `ctime` text,
  `cdesc` varchar(200) DEFAULT NULL,
  `cnumb` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`camp_id`, `cname`, `cloc`, `cdate`, `ctime`, `cdesc`, `cnumb`) VALUES
(20004, 'Ali Khan', 'Khopar Khairane', '0000-00-00', '10 am ', 'A campaign for collecting cartons', '9988776655'),
(20005, 'Ali Khan', 'Khopar Khairane', '0000-00-00', '10 am ', 'A campaign for collecting cartons', '9988776655'),
(20006, 'Ali Khan', 'Khopar Khairane', '0000-00-00', '10 am ', 'Collection of tetra pack cartons.', '9988776655'),
(20007, 'Ali Khan', 'Khopar Khairane', '2018-03-04', '10 am ', 'blah', '9988776655');
