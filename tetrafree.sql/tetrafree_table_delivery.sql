
-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `del_id` int(11) NOT NULL,
  `dcart_id` int(11) DEFAULT NULL,
  `dcomp_id` int(11) DEFAULT NULL,
  `dwork_id` int(11) DEFAULT NULL,
  `del_type` int(11) DEFAULT NULL,
  `del_quantity` int(11) DEFAULT NULL,
  `del_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`del_id`, `dcart_id`, `dcomp_id`, `dwork_id`, `del_type`, `del_quantity`, `del_status`) VALUES
(40001, NULL, 46, NULL, 100, 18000, 0);
