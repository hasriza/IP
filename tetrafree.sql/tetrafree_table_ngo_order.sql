
-- --------------------------------------------------------

--
-- Table structure for table `ngo_order`
--

CREATE TABLE `ngo_order` (
  `ngord_id` int(11) NOT NULL,
  `ngo_id` int(11) DEFAULT NULL,
  `ngowork_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `or_quant` int(11) DEFAULT NULL,
  `or_type` int(11) DEFAULT NULL,
  `ord_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo_order`
--

INSERT INTO `ngo_order` (`ngord_id`, `ngo_id`, `ngowork_id`, `product_id`, `or_quant`, `or_type`, `ord_status`) VALUES
(30000, 40, NULL, NULL, 25, 0, 0),
(30001, 40, NULL, NULL, 25, 0, 0),
(30002, 40, NULL, NULL, 123, 0, 0),
(30003, 38, NULL, NULL, 123, 0, 0);
