
create table `applications` (
  `id` int(11) not null auto_increment,
  `name` varchar(40) not null,
  `contact` int(8) not null,
  primary key (`id`),
  key `id` (`id`)
) ;


insert into `applications` (`id`, `name`, `contact`) values
(1, 'john doe', 11111111),
(2, 'mary', 22222222);




