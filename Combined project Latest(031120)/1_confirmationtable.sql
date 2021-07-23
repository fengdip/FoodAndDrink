create table confirmation
(
	Food char(40) not null primary key,
	Quantities int not null,
	Price float(4,2) not null

);

create table totalprice
(
	Total float(10,2)
);