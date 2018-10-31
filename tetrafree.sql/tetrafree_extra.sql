
--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `carton`
--
ALTER TABLE `carton`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`del_id`),
  ADD KEY `dcart_id` (`dcart_id`),
  ADD KEY `dcomp_id` (`dcomp_id`),
  ADD KEY `dwork_id` (`dwork_id`);

--
-- Indexes for table `ngo_order`
--
ALTER TABLE `ngo_order`
  ADD PRIMARY KEY (`ngord_id`),
  ADD KEY `ngo_id` (`ngo_id`),
  ADD KEY `ngowork_id` (`ngowork_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `pcomp_id` (`pcomp_id`),
  ADD KEY `pngo_id` (`pngo_id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`spons_id`);

--
-- Indexes for table `tetrauser`
--
ALTER TABLE `tetrauser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `camp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20008;

--
-- AUTO_INCREMENT for table `carton`
--
ALTER TABLE `carton`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10015;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `del_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40002;

--
-- AUTO_INCREMENT for table `ngo_order`
--
ALTER TABLE `ngo_order`
  MODIFY `ngord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30004;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tetrauser`
--
ALTER TABLE `tetrauser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`dcart_id`) REFERENCES `carton` (`c_id`),
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`dcomp_id`) REFERENCES `tetrauser` (`id`),
  ADD CONSTRAINT `delivery_ibfk_3` FOREIGN KEY (`dwork_id`) REFERENCES `tetrauser` (`id`);

--
-- Constraints for table `ngo_order`
--
ALTER TABLE `ngo_order`
  ADD CONSTRAINT `ngo_order_ibfk_1` FOREIGN KEY (`ngo_id`) REFERENCES `tetrauser` (`id`),
  ADD CONSTRAINT `ngo_order_ibfk_2` FOREIGN KEY (`ngowork_id`) REFERENCES `tetrauser` (`id`),
  ADD CONSTRAINT `ngo_order_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`prod_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`pcomp_id`) REFERENCES `tetrauser` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`pngo_id`) REFERENCES `tetrauser` (`id`);

--
-- Constraints for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD CONSTRAINT `sponsor_ibfk_1` FOREIGN KEY (`spons_id`) REFERENCES `tetrauser` (`id`);
