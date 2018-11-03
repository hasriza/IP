
-- --------------------------------------------------------

--
-- Table structure for table `tetrauser`
--

CREATE TABLE `tetrauser` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `contact` text NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` longtext,
  `hash` longtext NOT NULL,
  `auth` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tetrauser`
--

INSERT INTO `tetrauser` (`id`, `name`, `contact`, `address`, `email`, `role`, `username`, `password`, `hash`, `auth`) VALUES
(22, 'Kamana', '9867454545', 'Andheri', 'kamana@gmail.com', 'delivery', 'kamz789', '$2y$10$3k.A9vg1fmxKwZzWT3xDde.ghwrlwOThA1aqVLsj8lhSLXf4DWOIe', '', NULL),
(27, 'Deeksha', '9867101404', 'Thane', '2016.deeksha.shetty@', 'donor', 'deekshaw123', '$2y$10$UhANehbuyNBR04DJVwgDz.pk6XRHighK/sc/EMwNgUo9sKuLZ2N.C', 'e55bc0255c752d1cb05da10c0f1f5026', NULL),
(28, 'Aarav Gupta', '9112312322', 'Bandra', 'aarav.gupta@gmail.co', 'donor', 'aarav123', '$2y$10$lJqq3XknBSjCoCGNkDHisOBmV3ydMDrHFnsVsWMCbcKUDl1mtWxNC', '5a4be1fa34e62bb8a6ec6b91d2462f5a', NULL),
(29, 'Bhavin Kumar', '9988776655', 'Juhu', 'bhavin.kumar@ymail.c', 'donor', 'bhavin123', '$2y$10$fDjjTyyXdTyG4gYbWh2H2OrNIjDktZr8HveHDkrMqldJ3HQFzftaa', '2adcefe38fbcd3dcd45908fbab1bf628', NULL),
(30, 'Darshit Chauhan', '9911223344', 'Chembur', 'darshit.chauhan12@gm', 'donor', 'darshit345', '$2y$10$jtur0IadHGVGyyUuX2zd4.AEY7LhJT5xWCzUcErJ3nFOOneq1ny72', '1301962d8b7bd03fffaa27119aa7fc2b', NULL),
(31, 'Eshan Dhumal', '9121212012', 'Kalyan', 'eshan987@hotmail.com', 'donor', 'eshan902', '$2y$10$I/entFEoGc7Y/SM7zr6MC.6CMIPp7b2oVXpvPdDj1mVGRhajBhNMK', 'c165ed49edbd0e69b120bee701bdb794', NULL),
(32, 'Hansh Gupta', '9988776654', 'Mulund', 'hanshgupta98@gmail.c', 'donor', 'hansh0909', '$2y$10$4FKVxa.Pm4y18Zvm7QZgdOEMBBrL75dUYpTZy8w71o4Ki.DlGEk5G', '76bba5ee241042431796c97a92e64f5d', NULL),
(33, 'Abhijeet Choudhary', '9080706050', 'Chembur', 'abhijeet7867@gmail.c', 'volunteer', 'abhijeet7867', '$2y$10$iraTsYZ6ElvYbc.qpT49A.VB3glxHU26fLGqE/9nb0ooFr7ZCq4ba', '4efa8b668ee1198289bb15965d9705b6', NULL),
(34, 'Ali Khan', '9111111122', 'Kurla', 'alikhan90@gmail.com', 'volunteer', 'alikhan89', '$2y$10$qtxjbJTOvKKcstZnNiYvFuTNvPfm0mGYfI8d3cqtQnOomBNhpENPG', '1f5f6ad95cc908a20bb7e30ee28a5958', NULL),
(35, 'Abha Kapoor', '9898912122', 'Bhandup', 'abhakapoor@gmail.com', 'volunteer', 'abhakap10', '$2y$10$iI5K/nlW86dJ9Yzk2eCIh.LCXcn/BJ7bTVU.prXYFN5LoOxapszhG', 'b522259710151f8cc7870b970b4e0930', NULL),
(36, 'Bharti Singh', '9867444111', 'Lower Parel', 'bhartisingh@gmail.co', 'volunteer', 'bharti09', '$2y$10$jnyzy6mRVxAWxc3sSxFwS.ex..aMV1lB4K6SBKG1zC6ZWs98kxnwe', '64314c17210c549a854f1f1c7adce8b6', NULL),
(37, 'Dipti Samant', '8887776662', 'Panvel', 'diptisamant@gmail.co', 'volunteer', 'dipto89', '$2y$10$6S4n4s9LAF2nvXw8QT/KMOiqm2BEe.n669/9ErpWYL4OHpIl1P/Qq', 'cdaeb1282d614772beb1e74c192bebda', NULL),
(38, 'Aarna Foundation', '7766554433', 'Thane', 'aarnafound@gmail.com', 'ngo', 'aarnafo12', '$2y$10$Hx2dxfN8UtsZ45MkvCyGke2IQF3SypUFvk2Ks./.EsRb4WB0ub0a.', 'db5bdc8ad46ab6087d9cdfd8a8662ddf', NULL),
(39, 'Robinhood Schools', '7788991212', 'Ghatkopar', 'robinhood@gmail.com', 'ngo', 'robins67', '$2y$10$FaKYy9BQEuu1J7lk0rIsnuFbHQqJqihdyRobmOB71LEy6.mVd0tUG', '7a02741932bb4c9d3920fbc2f4b6080f', NULL),
(40, 'Ma Niketan', '7676454523', 'Thane', 'maniketan@gmail.com', 'ngo', 'maniketan456', '$2y$10$cy9uIS0JnHJXjJHDDoBYougcciYvq5h1rv5.JWQ6NLzdDsI8FyrzG', '789ba2ae4d335e8a2ad283a3f7effced', NULL),
(41, 'Samman Foundation', '9889122334', 'Chembur', 'samman@gmail.com', 'ngo', 'samman890', '$2y$10$bA2GAyxFOAfrbJl0BSpM4OX5farC8IwRD0dOLdfbbETssqHgxFdRu', '287e041302f34b11ddfb57afc8048cd8', NULL),
(42, 'Smile Founcation', '9089237823', 'Andheri', 'smile456@gmail.com', 'ngo', 'smile5667', '$2y$10$sEL4khUoX3NwnkfgY4KaoOi353/1lOWZokIgk8ulVbUaqZB.HL3C.', '94aada62f90dd50a84ca74304563d5db', NULL),
(43, 'Amarjeet Singh ', '7855663344', 'Dombivili', 'amar142@gmail.com', 'donor', 'amar7080', '$2y$10$ao68G6U98nkg4XYDSEHjiu3efsnD7DOROtCIu3x7yzH5ez5uWW3Q.', '1763ea5a7e72dd7ee64073c2dda7a7a8', NULL),
(44, 'Hasan Riza', '8989676745', 'Chembur', 'hasanriza@gmail.com', 'donor', 'riza1997', '$2y$10$70V0KVR8DNI2TjoLZm4ypOoeVW9vaUr6UwI8h0wZHUCGrbQguZ2Xy', 'a9fb9e6ef40426e9add520623d521ab8', NULL),
(45, 'Rahul Nandrajog', '8877665544', 'Thane', 'rahulnandrajog@gmail', 'volunteer', 'rahul23', '$2y$10$12OTZGd5AdwcfRMdoBfyYeWti4duh85lfSe8suMKx0YNq5to0iQe2', '26ddd45b02859e836d13d4b9fde34281', NULL),
(46, 'Aamna Corporations', '9090808070', 'Thane', 'aamnacorps@gmail.com', 'company', 'aamnacorp90', '$2y$10$1.bbQsBSEpDeYvShxIucBu5XbmXE/IrqVjpiQnL5G6PJ7KKwHsizS', '927e838a450e2fe6225edfc3d12e2463', NULL),
(47, 'Deluxe Pvt Ltd', '8070605050', 'Nerul', 'deluxeindustries@gma', 'company', 'deluxe90', '$2y$10$ag3ak7y0khRM4vSUf9lTwellxazPp3RznpcTx.11LVgz1DXhtjfb6', '29c0605a3bab4229e46723f89cf59d83', NULL),
(48, 'Indraneel Joshi', '8877664545', 'Panvel', 'indraneeljoshi@gmail', 'delivery', 'indraneel9798', '$2y$10$9IU31h.AhU7Uj89hfBDQBeS8F9jiYn8YYNaezVE1ynAUBoB91Ekcm', 'e4d8163c7a068b65a64c89bd745ec360', NULL),
(49, 'Mithun Seth', '7766558989', 'Bandra', 'mithunseth@gmail.com', 'delivery', 'mithun67', '$2y$10$QauTvbP00fV.Fji8vfq4PukLtlqrpU05MqIIfUuEWBpjQSGLjcWcW', '07ff46bb6597a4f81eed4f59360ff835', NULL),
(50, 'Neerav Modi', '8989679900', 'Colaba', 'neeravmodi@gmail.com', 'delivery', 'neerav69', '$2y$10$dG/XUHeWx9It/3l92pvRyeYU7M1jja.FceSEl2kl6CNbhuq6.sKiC', '6a7dc0811b68d34739654a26ebdb707f', NULL),
(52, 'Admin', '0000000000', 'Mumbai', '2016.hasan.riza@ves.', 'admin', 'adminraw3', '$2y$10$3WM1vkDN4D518dCWP29kVeTcE0GJROLFzXVL5i64pNRqrDhlvRcfW', 'c8afe805c097dab1f1e5bdd57f8d2931', NULL);
