
-- --------------------------------------------------------

--
-- Table structure for table `carton`
--

CREATE TABLE `carton` (
  `c_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `don_id` varchar(20) NOT NULL,
  `work_id` varchar(20) NOT NULL,
  `delivered` int(11) DEFAULT NULL,
  `pick_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carton`
--

INSERT INTO `carton` (`c_id`, `quantity`, `type`, `don_id`, `work_id`, `delivered`, `pick_status`) VALUES
(10004, 25, 50, '22', '', NULL, 0),
(10008, 45, 100, '22', '', NULL, 0),
(10009, 45, 100, '28', '', NULL, 0),
(10010, 25, 50, '28', '', NULL, 0),
(10011, 1000, 100, '28', '', NULL, 0),
(10012, 1000, 100, '30', '', NULL, 0),
(10013, 25, 50, '28', '', NULL, 0),
(10014, 45, 50, '28', '', NULL, 0);
