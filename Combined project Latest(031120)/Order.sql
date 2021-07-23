

create table `orders` (
  `id` int(2) NOT NULL DEFAULT '0',
  `product` char(100) NOT NULL,
  `size` varchar(10) NOT NULL,
  `qty` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `orders` (`id`, `product`, `size`, `qty`) VALUES
(1, 'N-Tea-U', 'Deluxe', 3);