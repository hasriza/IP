
-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_type` int(11) DEFAULT NULL,
  `prod_quantity` int(11) DEFAULT NULL,
  `sold` int(11) DEFAULT NULL,
  `pcomp_id` int(11) DEFAULT NULL,
  `pngo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
